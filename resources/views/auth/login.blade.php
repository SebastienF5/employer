@extends('Layouts.app')
@section('content')
<div class="container content-login">
    <div class="row">
         <div class="col-6 col-md-6 col-lg-6 p-4 text-center">
             <img src="{{asset('images/rice.png')}}" alt="rice photo" class="col-md-7">
         </div>
         <div class="col-6 col-md-6 col-lg-6 block-form  p-3">
             <div class="img-logo text-center">
              <img src="{{asset('images/logo/logopng.png')}}" alt="logo manjAyiti" class="col-md-6 ">
           </div>
   <div class="formulaire text-center">
           <!-- Session Status -->
           <x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />
         <form method="POST" action="{{ route('login') }}">
             @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><i class="fas fa-envelope"></i></label>
                <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus placeholder="email">
                <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><i class="fas fa-lock"></i></label>
                <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password" placeholder="Password">
            </div>
            <div class="mb-3 form-check ">
            <label class="form-check-label" for="exampleCheck1">{{ __('Remember me') }}</label>
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember_me"><br/>
               
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
               </div>
            <input type="submit" class="btn btn-default col-md-6" value="{{ __('Log in') }}"><br/>
            <a href="{{route('register')}}" class="p-3">Creer un compte</a>
</form>
</div>
         </div>
    </div>
</div>
@endsection