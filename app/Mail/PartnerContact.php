<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class PartnerContact extends Mailable
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
    public function build(): PartnerContact
    {
        Log::info('message Partenaire');
        return $this->view('frontend.partner.email', ['value' => $this->value])
            ->subject($this->value['subject']);
    }

}
