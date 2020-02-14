<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class FormController extends Controller
{

	public function postForm(Request $request)
	{
	        try{
                request()->validate([
                    'name'=>'required',
                    'surname'=>'required',
                    'question'=>'required',
                    'email' => 'email:filter'
                ]);
	        }catch (Exception $e) {
                return Redirect::back()->withErrors(['msg', 'The Message']);
	        }

            Mail::send(['text' => 'questions'], ['name' => $request->input('name'), 'surname' => $request->input('surname'), 'email' => $request->input('email'),  'question' => $request->input('question')], function($message){
            $message->from('reply@nicodenv.io')->to('contact@nicodenv.io')->subject('Contact');
            });

            Mail::send(['text' => 'answers'], ['surname' => $request->input('surname'), 'question' => $request->input('question')], function($sm) use ($request) {
            $sm->from('contact@nicodenv.io')->to($request->email)->subject('Question');
            });
             return Redirect()->back()->with(['message' => 'Message envoyé']);
    }
}
