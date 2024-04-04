<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class LocaleController extends Controller
{
    public function swap($lang){
        if (array_key_exists($lang, config('locale.languages'))) {
            session()->put('locale', $lang);
        }
        return redirect()->back();
    }
}
