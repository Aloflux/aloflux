<?php

use App\Mail\QuoteRequestMail;
use Illuminate\Support\Facades\Mail;

function quoteRequest(array $overrides = []): array
{
    $payload = [
        'name' => 'Jane Smith',
        'email' => 'jane@example.com',
        'company' => 'Northwind',
        'project_type' => 'Custom Software Development',
        'proposed_budget' => '£6,000 to £20,000',
        'timeline' => 'Within 3 months',
        'project_description' => 'We need an internal tool for tracking client projects and invoices.',
        'leave_blank' => '',
        'form_loaded_at' => encrypt((string) now()->subSeconds(30)->timestamp),
    ];

    return array_replace($payload, $overrides);
}

test('a relevant quote request is emailed', function () {
    Mail::fake();

    $response = $this->post(route('quote.send'), quoteRequest([
        'project_description' => 'We need an internal tool. Our current site is https://northwind.example.',
    ]));

    $response->assertRedirect(route('quote').'#quote-form');
    $response->assertSessionHas('success');

    Mail::assertSent(QuoteRequestMail::class, function (QuoteRequestMail $mail) {
        return $mail->data['email'] === 'jane@example.com'
            && $mail->data['timeline'] === 'Within 3 months'
            && ! array_key_exists('leave_blank', $mail->data)
            && ! array_key_exists('form_loaded_at', $mail->data);
    });
});

test('the timeline is optional', function () {
    Mail::fake();

    $this->post(route('quote.send'), quoteRequest(['timeline' => '']))
        ->assertSessionHas('success');

    Mail::assertSent(QuoteRequestMail::class);
});

test('a honeypot quote submission is not emailed', function () {
    Mail::fake();

    $response = $this->post(route('quote.send'), quoteRequest([
        'leave_blank' => 'https://spam.example',
    ]));

    $response->assertRedirect(route('quote').'#quote-form');
    $response->assertSessionHas('success');
    Mail::assertNothingSent();
});

test('a quote that arrives too quickly is not emailed', function () {
    Mail::fake();

    $this->post(route('quote.send'), quoteRequest([
        'form_loaded_at' => encrypt((string) now()->timestamp),
    ]))->assertSessionHas('success');

    Mail::assertNothingSent();
});

test('a quote without a form time is not emailed', function () {
    Mail::fake();

    $payload = quoteRequest();
    unset($payload['form_loaded_at']);

    $this->post(route('quote.send'), $payload)->assertSessionHas('success');

    Mail::assertNothingSent();
});

test('spam quote content is not emailed', function () {
    Mail::fake();

    $this->post(route('quote.send'), quoteRequest([
        'project_description' => 'Guest post opportunity with dofollow backlinks for your site.',
    ]))->assertSessionHas('success');

    Mail::assertNothingSent();
});

test('a quote with several links is not emailed', function () {
    Mail::fake();

    $this->post(route('quote.send'), quoteRequest([
        'project_description' => 'See https://one.example and https://two.example and https://three.example',
    ]))->assertSessionHas('success');

    Mail::assertNothingSent();
});

test('an unknown project type is rejected', function () {
    Mail::fake();

    $this->post(route('quote.send'), quoteRequest([
        'project_type' => 'Free SEO blast',
    ]))->assertSessionHasErrors('project_type');

    Mail::assertNothingSent();
});

test('an unknown timeline is rejected', function () {
    Mail::fake();

    $this->post(route('quote.send'), quoteRequest([
        'timeline' => 'Yesterday',
    ]))->assertSessionHasErrors('timeline');

    Mail::assertNothingSent();
});

test('the quote route slows repeated submissions', function () {
    Mail::fake();

    foreach (range(1, 5) as $attempt) {
        $this->post(route('quote.send'), quoteRequest([
            'email' => "person{$attempt}@example.com",
        ]))->assertSessionHas('success');
    }

    $this->post(route('quote.send'), quoteRequest())
        ->assertRedirect(route('quote').'#quote-form')
        ->assertSessionHas('error', 'Please wait a moment before sending another request.');

    Mail::assertSentCount(5);
});

test('the quote page renders the form with its spam traps', function () {
    $this->withoutVite();

    $response = $this->get(route('quote'));

    $response->assertOk();
    $response->assertSee('name="leave_blank"', false);
    $response->assertSee('name="form_loaded_at"', false);
    $response->assertSee('name="timeline"', false);
    $response->assertSee('Custom Software Development', false);
});

test('a service link preselects its project type', function () {
    $this->withoutVite();

    $this->get(route('quote', ['type' => 'Enterprise Automation']))
        ->assertOk()
        ->assertSee('<option value="Enterprise Automation" selected', false);
});

test('an unknown type in the link is ignored', function () {
    $this->withoutVite();

    $this->get(route('quote', ['type' => 'Something else']))
        ->assertOk()
        ->assertDontSee('<option value="Something else"', false);
});

test('the quote form is the only form on the site', function () {
    $this->withoutVite();

    $this->get(route('home'))
        ->assertOk()
        ->assertSee('href="/quote"', false)
        ->assertDontSee('<form', false);

    $this->post('/contact', quoteRequest())->assertNotFound();
});
