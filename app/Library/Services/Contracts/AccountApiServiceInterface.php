<?php


namespace App\Library\Services\Contracts;


interface AccountApiServiceInterface
{
    //create company
    public function storeCompany($data);

    //create account
    public function createAccount($data);

}
