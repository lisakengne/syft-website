<?php

namespace App\Http\Controllers;

use App\Library\Services\Contracts\MailServiceInterface;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ContactusController extends Controller
{
     public function index()
     {
         return view('frontend.contactus.index');
     }

     public function poste(Request $request, MailServiceInterface $mailService)
     {
       $validator= Validator::make($request->all(), [
           'fullname' => 'required|string',
           'phonenumber' => 'required|string',
           'email' => 'required|email',
           'message' => 'required|string',
           'g-recaptcha-response' => 'required|captcha'
       ]);
         $check_http = strpos($request->get('message'), "http");

         if ($validator->fails() ) {
            return Redirect::back()->with(['errors'=>$validator->errors(), 'mess' => 'Renseignez correctement tous les champs', 'errcode' => 500]);
        }else {
            if (is_numeric($check_http)){
                return Redirect::back()->with([
                    'mess'=>"Vérifier le contenu du message et réessayer",
                    'errcode'=> 500
                ]);
            }
            $values = [
                'subject' => 'Besoin d\'assistance',
                'fullname'=>$request->get('fullname'),
                'phonenumber'=>$request->get('phonenumber'),
                'email'=>$request->get('email'),
                'message'=>$request->get('message')
            ];

            $mailService->contact($values);

            return Redirect::back()->with([
                'mess'=>__('message.contact.validation'),
                'errcode'=> 200
            ]);
        }

     }
}
