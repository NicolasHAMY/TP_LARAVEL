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

use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('home');
});

Route::get('pageHome', 'ViewController@getPageHome');

Route::get('pageContact', 'ViewController@getPageContact');

Route::post('contactForm', 'FormController@postForm');

Route::resource('Pageshop','ShopController@__construct');

Route::resource('PageCart','CartController@__construct');

Route::resource('Pageshop','ShopController');

Route::resource('PageCart','CartController');

Route::get('addToCardForm','CartController@addToCart');

Route::get('PageCart','CartController@getCookie');

Route::get('/PageCart', function () {
    return view('PageCart');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/MentionLegal', function () {
    return view('mention');
});

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/logout', function ()    {

    Auth::logout();
        return redirect('/pageHome');

        // Réservé aux utilisateurs authentifiés
    });
});

