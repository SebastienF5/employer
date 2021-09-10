<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $title="Register";
        return view('auth.register',compact('title'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        
        $tab=['jpg','jpeg','png'];
        $extension=true;
        $photo="";

        if(!in_array($request->profilPhoto->extension(),$tab))
        {
            $extension=false;
        }else{
            $photo=Storage::disk('public')->put('profilPhoto',$request->profilPhoto);
            
        }
   
        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'pseudo' => ['string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telephone' => ['integer', 'max:8'],
            'cin' => [ 'integer', 'max:8'],
            'adress' => ['string', 'max:255'],
            'birthdate' => ['required', 'date', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'profilPhoto' => ['max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'salaire' => ['descimal'],
            'fonction' => ['string', 'max:255'],
        ]);

        $user = User::create([
            'firstName' => $request->firstName,
        
            'lastName' => $request->lastName,
            'pseudo' => $request->pseudo,
            
            'telephone' =>$request->telephone,
            'cin' => $request->cin,
            'adress' =>$request->adress,
            'birthdate' =>$request->birthdate,
            'gender' => $request->gender,
            'profilPhoto'=>$photo,
            
            'salaire' => $request->salaire,
            'fonction' => $request->fonction,
            'email' => $request->email,
            'password' => Hash::make($request->password),


        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
