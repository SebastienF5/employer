<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * fonction pour enregistrer les commentaires des users
     * @param Request
     *@return redirect(Route('home'));
     */
  
    public function store(Request $request)
    {
     
        $request->validate([
            'content'=>['required','string','max:255']
        ]);

        Comment::create([
            'user_id'=>$request->user_id,
            'content'=>$request->content

        ]);

        return redirect(Route('home'));
    }


}
