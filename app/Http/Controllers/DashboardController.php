<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(){
        $title="Dashboard";
        return view('dashboard',compact('title'));
    }

}
