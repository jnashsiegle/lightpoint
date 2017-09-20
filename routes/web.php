<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@home');                //home.blade.php
Route::get('colophon', 'PagesController@colophon');     //colphone.blade.php
Route::get('contact', 'PagesController@contact');       //contact.blade.php into home.blade.php
Route::get('adminP', 'PagesController@adminP');         //administrative panel
Route::get('clientP', 'PagesController@clientP');       //client panel
/// Registration
Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm'); //Show register form
Route::post('auth/register', 'Auth\RegisterController@register'); //Process Register New Clients Form

/// Primary Contact Form
Route::get(
    'contact',
    ['as' => 'contact', 'uses' => 'ContactController@create']
);
Route::post(
    'contact',
    ['as' => 'contact', 'uses' => 'ContactController@store']
);

/// Landing Page Brief Contact Form
Route::get(
    'landing',
    ['as' => 'landing', 'uses' => 'ContactLandingController@create']
);
Route::post(
    'landing',
    ['as' => 'landing', 'uses' => 'ContactLandingController@store']
);
