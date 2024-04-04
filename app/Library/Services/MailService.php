<?php

/**
 * Created by PhpStorm.
 * User: eddy
 * Date: 13/12/18
 * Time: 10:47
 */

namespace App\Library\Services;

use App\Library\Services\Contracts\MailServiceInterface;
use App\Mail\Contact;
use App\Mail\PartnerContact;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailService implements MailServiceInterface
{

    public function contact($data)
    {
        Mail::to('kengnelisa5@gmail.com')->bcc('kengnelisa5@gmail.com')->send(new Contact($data));
    }

    public function partner($data)
    {
        Mail::to('lisa.kengne@nexah.net')->send(new PartnerContact($data));
    }
}
