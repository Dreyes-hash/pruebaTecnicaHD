<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class JugueteMail extends Mailable
{
    use Queueable, SerializesModels;

    public $juguete;

    /**
     * Create a new message instance.
     */
    public function __construct($juguete)
    {
        $this->juguete = $juguete;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Juguete Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.juguete',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    /**
     * Get the view / attachment content for the message.
     */
    public function build(): static
    {
        return $this->markdown('emails.juguete')
                    ->with('juguete', $this->juguete);
    }
    
}
