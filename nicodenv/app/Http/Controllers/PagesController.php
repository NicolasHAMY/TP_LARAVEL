<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{

	public function postForm(Request $request)
	{
            Mail::send(['text' => 'PostForm'], ['name' => $request->input('name'), 'surname' => $request->input('surname'), 'email' => $request->input('email'),  'question' => $request->input('question')], function($message){
            $message->from('reply@nicodenv.io')->to('contact@nicodenv.io')->subject('Contact');
            });

            Mail::send(['text' => 'SendMessage'], ['surname' => $request->input('surname'), 'question' => $request->input('question')], function($sm) use ($request) {
            $sm->from('contact@nicodenv.io')->to($request->email)->subject('Question');
            });
            return redirect("/");
    }
}
