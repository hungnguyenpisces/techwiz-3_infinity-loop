<?php

namespace App\Mail;

use App\Models\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Reminder extends Mailable
{
    use Queueable, SerializesModels;

    protected $apmt;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($param)
    {
        $this->apmt = $param;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $appointment = $this->apmt;
        return $this->view('mail.reminder', compact('appointment'));
    }
}
