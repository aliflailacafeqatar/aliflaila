<?php

namespace App\Mail;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookingConfirmed extends Mailable
{
    use Queueable, SerializesModels;

    public $reservation;
    public $isAdminView;

    public function __construct(Reservation $reservation, $isAdminView = false)
    {
        $this->reservation = $reservation;
        $this->isAdminView = $isAdminView;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->isAdminView ? 'New Table Reservation Received' : 'Your Reservation at Alif Laila Cafe',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.booking',
        );
    }
}