<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function show(){
        $title="Profil";
        return view('profil',compact('title'));
    }
    
}
