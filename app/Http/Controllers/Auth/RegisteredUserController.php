<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

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

        $request->validate([
            // 'firstName' => ['required', 'string', 'max:255'],
            // 'lastName' => ['required', 'string', 'max:255'],
            // 'pseudo' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'telephone' => ['required', 'integer', 'max:3'],
            // 'cin' => ['required', 'integer', 'max:7'],
            // 'adress' => ['required', 'string', 'max:255'],
            // 'birthdate' => ['required', 'date', 'max:255'],
            // 'gender' => ['required', 'string', 'max:255'],
            // 'profilPhoto' => ['string', 'max:255'],
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
            // 'salaire' => ['string', 'max:255'],
            // 'fonction' => ['string', 'max:255'],
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
            'profilPhoto'=>$request->profilPhoto,
            
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
