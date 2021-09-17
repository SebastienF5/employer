<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $title="Accueil";
        $countPost=Comment::count();
        $posts=DB::table('comments')
                  ->JOIN('users','users.id','=','comments.user_id')
                  ->SELECT('users.profilPhoto','users.firstName','users.lastName','comments.content','comments.created_at')
                  ->distinct()
                  ->get();
      
        return view('home',compact('title'),['post'=>$posts,'countPost'=>$countPost]);
    }
}
