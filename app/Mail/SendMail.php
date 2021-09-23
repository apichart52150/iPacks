<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->data;
        $this->subject($data['subject']);
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $level = $data['level'];
        $expire_date = $data['expire_date'];
        return $this->view('payment.mail', compact('first_name', 'last_name', 'level', 'expire_date'));
    }
}
