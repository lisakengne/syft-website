<?php

namespace App\Http\Controllers;

class SolutionController extends Controller
{
    //
    public function index(){
        return view('frontend.solution.index');
    }
    public function b2b(){
        return view('frontend.solution.b2b.index');
    }
    public function b2c(){
        return view('frontend.solution.b2c.index');
    }

    public function detailB2B($name){
        switch ($name){
            case 'bulksms':
                return view('frontend.solution.b2b.bulksms');
            case 'N_court':
                return view('frontend.solution.b2b.N_court');
            case 'USSD':
                return view('frontend.solution.b2b.USSD');
            case 'mobilepayment':
                return view('frontend.solution.b2b.mobilepayment');
            default:
                abort(404);
        }
    }
    public function detailB2C($name){
        switch ($name){
            case 'gamefactory':
                return view('frontend.solution.b2c.gamefactory');
            case 'healthfirst':
                return view('frontend.solution.b2c.healthfirst');
            case 'quicksearch':
                return view('frontend.solution.b2c.quicksearch');
            default:
                abort(404);
        }
    }
}

