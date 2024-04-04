<?php


namespace App\Library\Services;


use App\Library\Services\Contracts\AccountApiServiceInterface;
use Illuminate\Support\Facades\Http;

class AccountApiService implements AccountApiServiceInterface
{

    public function storeCompany($data)
    {
        $url = api_url()['org'].'organisations';
        return json_decode(
            Http::withHeaders([
                'Accept' => 'application/json',
                'Content-Type' =>'application/json'
            ])->post($url, $data),true
        );
    }

    public function createAccount($data)
    {
        $url = api_url()['sso'].'create-account';
        return json_decode(
            Http::withHeaders([
                'Accept' => 'application/json',
                'Content-Type' =>'application/json'
            ])->post($url, $data),true
        );
    }

}
