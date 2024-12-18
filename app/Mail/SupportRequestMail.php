<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SupportRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    /**
     * Create a new message instance.
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Yeni Proje Teklifi Alındı')
            ->view('frontend.pages.emails.support-request')
            ->attach(storage_path('app/public/' . $this->formData['file_path']), [
                'as' => 'ek-dosya.' . pathinfo($this->formData['file_path'], PATHINFO_EXTENSION),
            ]);
    }
}
