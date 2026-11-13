<?php

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

function contactInquiry(array $overrides = []): array
{
    $payload = [
        'name' => 'Jane Smith',
        'email' => 'jane@example.com',
        'company' => 'Northwind',
        'project_type' => 'Custom Software Development',
        'proposed_budget' => '£6,000 to £20,000',
        'project_description' => 'We need an internal tool for tracking client projects and invoices.',
        'leave_blank' => '',
        'form_loaded_at' => encrypt((string) now()->subSeconds(30)->timestamp),
    ];

    return array_replace($payload, $overrides);
}

test('a relevant inquiry is emailed', function () {
    Mail::fake();

    $response = $this->post(route('contact.send'), contactInquiry([
        'project_description' => 'We need an internal tool. Our current site is https://northwind.example.',
    ]));

    $response->assertRedirect(route('home').'#contact');
    $response->assertSessionHas('success');

    Mail::assertSent(ContactFormMail::class, function (ContactFormMail $mail) {
        return $mail->data['email'] === 'jane@example.com'
            && ! array_key_exists('leave_blank', $mail->data)
            && ! array_key_exists('form_loaded_at', $mail->data);
    });
});

test('a honeypot submission is not emailed', function () {
    Mail::fake();

    $response = $this->post(route('contact.send'), contactInquiry([
        'leave_blank' => 'https://spam.example',
    ]));

    $response->assertRedirect(route('home').'#contact');
    $response->assertSessionHas('success');
    Mail::assertNothingSent();
});

test('a submission that arrives too quickly is not emailed', function () {
    Mail::fake();

    $this->post(route('contact.send'), contactInquiry([
        'form_loaded_at' => encrypt((string) now()->timestamp),
    ]))->assertSessionHas('success');

    Mail::assertNothingSent();
});

test('a submission without a form time is not emailed', function () {
    Mail::fake();

    $payload = contactInquiry();
    unset($payload['form_loaded_at']);

    $this->post(route('contact.send'), $payload)->assertSessionHas('success');

    Mail::assertNothingSent();
});

test('spam content is not emailed', function () {
    Mail::fake();

    $this->post(route('contact.send'), contactInquiry([
        'project_description' => 'Guest post opportunity with dofollow backlinks for your site.',
    ]))->assertSessionHas('success');

    Mail::assertNothingSent();
});

test('several links are not emailed', function () {
    Mail::fake();

    $this->post(route('contact.send'), contactInquiry([
        'project_description' => 'See https://one.example and https://two.example and https://three.example',
    ]))->assertSessionHas('success');

    Mail::assertNothingSent();
});

test('an unknown project type is rejected', function () {
    Mail::fake();

    $this->post(route('contact.send'), contactInquiry([
        'project_type' => 'Free SEO blast',
    ]))->assertSessionHasErrors('project_type');

    Mail::assertNothingSent();
});

test('the contact route slows repeated submissions', function () {
    Mail::fake();

    foreach (range(1, 5) as $attempt) {
        $this->post(route('contact.send'), contactInquiry([
            'email' => "person{$attempt}@example.com",
        ]))->assertSessionHas('success');
    }

    $this->post(route('contact.send'), contactInquiry())
        ->assertRedirect(route('home').'#contact')
        ->assertSessionHas('error', 'Please wait a moment before sending another message.');

    Mail::assertSentCount(5);
});

test('the contact form renders the spam traps', function () {
    $this->withoutVite();

    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertSee('name="leave_blank"', false);
    $response->assertSee('name="form_loaded_at"', false);
    $response->assertSee('Custom Software Development', false);
});
