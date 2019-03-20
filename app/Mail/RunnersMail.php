<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RunnersMail extends Mailable
{
    use Queueable, SerializesModels;
    public $refNo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($refNo)
    //public function __construct()
    {
        //
        $this->refNo = $refNo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // //dd(Config::get('mail'));
        // return $this->view('admin.email.mail');
        $address = 'info@badakman.com';
        $name = 'Badakman';
        $subject = 'Notification: Badakman Registration';
        return $this->from($address, $name)
        ->view('admin.email.mail')
        ->with($this->refNo)
        ->subject($subject);
    }
}
