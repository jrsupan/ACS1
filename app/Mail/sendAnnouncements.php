<?php

namespace App\Mail;

use App\Student;
use App\Announcement;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class sendAnnouncements extends Mailable
{
    use Queueable, SerializesModels;

    public $student;
    public $announce;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct(Student $student,Announcement $announce)
    {
         $this->student = $student;
         $this->announce = $announce;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.announcement');
    }
}
