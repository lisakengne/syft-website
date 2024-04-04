<?php


namespace App\Library\Services;


use App\Library\Services\Contracts\ActivityAreaApiServiceInterface;
use Illuminate\Support\Facades\Http;

class ActivityAreaApiService implements ActivityAreaApiServiceInterface
{

    public function getActivityArea()
    {
        $url = api_url()['org'].'activity-areas';

        return json_decode(
            Http::withHeaders([
                'Accept' => 'application/json',
                'Content-Type' =>'application/json'
            ])->get($url),true
        );
    }

}
