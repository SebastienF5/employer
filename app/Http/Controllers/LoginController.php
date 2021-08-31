<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show(){
        $title="Login";
        return view('login',compact('title'));
    }
}
