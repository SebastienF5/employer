@extends('Layouts.app')
@section('content')
   <div class="container-fluid content-registrer">
     <div class="row">
        <div class="col-12 col-md-12 col-lg-12  text-center clip">
             <img src="{{asset('images/logo/logopng.png')}}" alt="logo" class="col-md-3 registrer-logo">
        </div>
        <div class="col-6 col-md-6 col-lg-6 mx-auto registrer-form shadow-lg">
            <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
             <form method="POST" action="{{route('register')}}" enctype="multipart/form-data">
             @csrf
           <div class="mb-3 d-flex justify-content-between rightLeft">
             <input type="text" class="form-control mx-2" id="firstName" aria-describedby="nameHelp" placeholder="Prenom" name="firstName" :value="old('firstName')" required autofocus >
              <div id="emailHelp" class="form-text">
              @if($errors->has('firstName'))
                      {{$errors->first('firstName')}}
             @endif
              </div>
             <input type="text" class="form-control" id="lastName" aria-describedby="lastNameHelp" name="lastName" placeholder="Nom" aria-describedby="nameHelp" placeholder="Nom" :value="old('lastName')" required >
        
            </div>
           
            <div class="mb-3 d-flex justify-content-between rightLeft">
               <input type="text" class="form-control mx-2" id="adresseEmp" aria-describedby="adresseHelp" name="adress" placeholder="Adresse" :value="old('adress')">
              
                <input type="email" class="form-control" id="email" placeholder="email" name="email" :value="old('email')" required>
            </div>
        
            <div class="mb-3 d-flex justify-content-between rightLeft">
                <select class="form-select mx-2" aria-label="Default select example" name="gender">
                    <option selected>Sex</option>
                    <option value="feminin">Feminin</option>
                    <option value="masculin">Masculin</option>
                    <option value="autre">Autre</option>
                </select>
                <input type="date" class="form-control" id="birthdate" aria-describedby="dateNaissanceHelp" name="birthdate" placeholder="Date Naissance" :value="old('birthdate')">
               <!-- <div id="daneNaissanceHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
     
         
           <div class="mb-3">
                
                <input type="text" class="form-control" id="password" aria-describedby="passwordHelp" name="password" placeholder="password" :value="old('password')">
               <!-- <div id="daneNaissanceHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
            <div class="mb-3">
                
                <input type="text" class="form-control" id="password" aria-describedby="passHelp" name="password_confirmation" placeholder="password confirmation" :value="old('password_confirmation')">
               <!-- <div id="daneNaissanceHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
           <div class="mb-3">
                
                <input type="file" class="form-control" id="profilPhoto" aria-describedby="profilPhoto" name="profilPhoto" :value="old('profilPhoto')">
               <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
            <button type="submit" class="btn btn-primary">  {{ __('Register') }}</button>
             <a href="{{asset('login')}}" class="mx-3 link-login">j'ai un compte !</a>
            </form>
        </div>
        </div>
    </div>

@endsection