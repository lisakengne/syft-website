<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'set.locale'], function (){
    Route::get('/','HomeController@index')->name('home');
    Route::get('solution','SolutionController@index')->name('solution');
    Route::get('school','BackToSchoolController@index')->name('school');
    Route::get('contact-us','ContactusController@index')->name('contactus');
    Route::post('post-contact', 'ContactusController@poste')->name('post-contact');
    Route::post('post-school', 'BackToSchoolController@poste')->name('post-school');
    Route::get('about','AboutController@index')->name('about');
    Route::get('faq','FaqController@index')->name('faq');
    Route::get('partner','PartnerController@index')->name('partner');
    Route::post('post-partner','PartnerController@poste')->name('post-partner');
    Route::get('solution/b2b','SolutionController@b2b')->name('solution.b2b');
    Route::get('solution/b2c','SolutionController@b2c')->name('solution.b2c');
    Route::get('solution/b2b/{name}','SolutionController@detailB2B')->name('solution.b2b.b2bsolution');
    Route::get('solution/b2c/{name}','SolutionController@detailB2C')->name('solution.b2c.b2csolution');
    Route::get('lang/{lang}','LocaleController@swap')->name('lang');
    Route::get('signup','SignUpController@index')->name('signup');
    Route::get('get-area', 'SignUpController@getArea')->name('getarea');
    Route::get('sign-up','SignUpController@index')->name('signup');
    Route::post('post-signup','SignUpController@signup')->name('signup.post');
    Route::get('get-area', 'SignUpController@getArea')->name('get-area');
});

