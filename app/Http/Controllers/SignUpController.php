<?php

namespace App\Http\Controllers;

use App\Library\Services\Contracts\AccountApiServiceInterface;
use App\Library\Services\Contracts\ActivityAreaApiServiceInterface;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index(ActivityAreaApiServiceInterface $accountService)
    {
        return view('frontend.signup');
    }

    public function getArea(ActivityAreaApiServiceInterface $accountService)
    {
        $response = $accountService->getActivityArea();
        $data = array();
        if ($response['success']) {
            $data_values = $response['data'];
            foreach ($data_values as $data_value) {
                array_push($data, array('id' => $data_value['id'], 'name' => $data_value['name']));
            }
        }
        return response()->json(['json' => $data]);
    }

    public function signup(Request $request, AccountApiServiceInterface $accountService)
    {
        $company = array();
        $company['name'] = $request->get('name_organization');
        $company['email'] = $request->get('email_organization');
        $company['phone'] = $request->get('phone_organization');
        $company['town'] = $request->get('town_organization');
        $company['address'] = $request->get('address_organization');
        $company['activityAreas'] = $request->get('select-area');

        $account = array();
        $account['first_name'] = $request->get('first_name');
        $account['last_name'] = $request->get('last_name');
        $account['email'] = $request->get('email');
        $account['phone'] = $request->get('phone');
        $account['address'] = $request->get('address');
        //$response = $accountService->storeCompany($company);
        $response['success'] = true;
        if ($response['success']) {
            //$account['mcr_org_id'] = $response['data']['id'];
            //$response_account = $accountService->createAccount($account);
            $response_account['errcode'] = 200;
            if ($response_account['errcode'] == 200){
                $response_account['mess'] = 'Votre compte a été crée, un mail vous a été envoyé avec les instructions pour finaliser la création de votre compte';
                //return json_encode($response_account);
                return response()->json($response_account);

            }else{
                //return json_encode(['errcode' => 403, 'mess' => $response['message']]);
                return response()->json(['errcode' => 500, 'mess' => 'Erreur'], 500);
             }
        } else{
            //return response()->json(['errcode' => 403, 'mess' =>  $response['message']], 403);
            return response()->json(['errcode' => 500, 'mess' => 'Erreur'], 500);
        }
    }

}
