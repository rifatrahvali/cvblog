<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Invitation; // Doğru namespace


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
