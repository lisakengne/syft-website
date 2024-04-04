<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SchoolContact extends Mailable
{
    use Queueable, SerializesModels;


    private $value;

    /**
     * Create a new message instance.
     *
     * @param array $value
     */
    public function __construct(Array $value)
    {
        $this->value = $value;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): SchoolContact
    {
        return $this->view('frontend.email-school', ['value' => $this->value])
            ->subject($this->value['subject']);
    }

}
