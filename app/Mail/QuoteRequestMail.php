<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QuoteRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param  array<string, mixed>  $data  validated quote form fields
     */
    public function __construct(public array $data) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(config('mail.from.address'), config('mail.from.name')),
            subject: 'New Quote Request: '.$this->data['project_type'].' | Aloflux',
            replyTo: [$this->data['email']],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.quote',
            with: [
                'name' => $this->data['name'],
                'email' => $this->data['email'],
                'company' => $this->data['company'] ?? null,
                'projectType' => $this->data['project_type'],
                'proposedBudget' => $this->data['proposed_budget'],
                'timeline' => $this->data['timeline'] ?? null,
                'projectDescription' => $this->data['project_description'],
            ],
        );
    }
}
