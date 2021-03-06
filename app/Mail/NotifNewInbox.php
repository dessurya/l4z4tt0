<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


use App\Model\User;

class NotifNewInbox extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $inbox;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $inbox)
    {
        $this->user = $user;
        $this->inbox = $inbox;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Pemberitahuan Pesan Baru')->view('mails.new-inbox')->with([
            'user' => $this->user,
            'inbox' => $this->inbox,
        ]);
    }
}
