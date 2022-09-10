<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WellcomeJoinInfinityLoopTeam extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $param)
    {
        $this->user = $param;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $userMail = $this->user;
        return $this->view('mail.register', compact('userMail'));
    }
}
