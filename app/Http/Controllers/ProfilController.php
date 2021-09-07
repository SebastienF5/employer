<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function show($id){
        $title="Profil";
        $users=User::findOrFail($id);
      
        return view('profil',compact('title'),['user'=>$users]);
    }
    
    public function store(Request $request)
    {
       Storage::disk('local')->put('profilPhoto',$request->file('profilPhoto'));
       die();
    }

    /**
     * function pour modifier les informations de l employer
     * @param id de l'employer
     */

     public function modifyInfo(Request $request,$id)
     {
   
        $users=User::find($id);
     
        $users->update([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'pseudo' => $request->pseudo,
            'telephone' =>$request->telephone,
            'cin' => $request->cin,
            'adress' =>$request->adress,
            'birthdate' =>$request->birthdate,
            'gender' => $request->gender,
            'profilPhoto'=>$request->profilPhoto,
            'salaire' => $request->salaire,
             'email' => $request->email

        ]);

         $users->save();

     $this->show($id);

     }
    
}
