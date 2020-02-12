<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function message(){
    Mail::send(['text'=>'message'], ['username' => 'test'], function($message){
    $message->to('boubou.saumon@hotmail.fr')->subject('Contact');
    });
    }
}
