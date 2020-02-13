<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function getPageContact()
    {
        return view('contact');

    }
}
