<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrerController extends Controller
{
    public function show(){
        $title="Registrer";
        return view('registrer',compact('title'));
    }
}
