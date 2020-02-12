<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function contact(){
    Mail::send(['text'=>'contact'], ['username' => 'test'], function($message){
    $message->to('boubou.saumon@hotmail.fr')->subject('Contact');
    });
    }
}
