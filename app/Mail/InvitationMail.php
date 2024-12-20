<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


# Davet mailini göndermek için bir Mailable sınıfı:
class InvitationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $invitation;

    public function __construct(Invitation $invitation)
    {
        $this->invitation = $invitation;
    }

    public function build()
    {
        $url = route('invite.link',['token'=>$this->invitation->token]);
        return $this->subject('Davetiniz Var!')
                    ->view('admin.pages.emails.invitation', ['invitation'=>$this->invitation,'url'=>$url]);
    }
}
