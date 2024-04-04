<?php
/**
 * Created by PhpStorm.
 * User: eddy
 * Date: 13/12/18
 * Time: 10:57
 */

namespace App\Library\Services\Contracts;


interface MailServiceInterface
{
    public function contact($data);

    public function partner($data);


}
