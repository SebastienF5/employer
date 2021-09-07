@extends('Layouts.app')
@section('content')
@auth
<div class="col-10 col-md-10 col-lg-10 content-profil">
  <div class="row">
    <div class="col-3 col-md-3 col-lg-3 shadow-sm last-comment">
    
     <div class="col-12 text-center p-2">
        <!-- <form method="POST" action="{{route('profil')}}" enctype="multipart/form-data">
         <input type="file" name="profilPhoto" class="form-control p-right" placeholder="photo de profil"/>
           
         </form>-->
            <h5> Utilisateur </h5>
            <img src="{{asset('images/user.jpg')}}" class="img-responsive rounded-circle col-md-8"  alt="profil user">
            <p>{{$user->firstName}}  <strong>{{$user->lastName}}</strong></p>
             <div>
             <h6> Derniers POSTS </h6>
             </div>
        </div>
    </div>
    <div class="col-8 col-md-8 col-lg-8 container-option">

    <div class="col-12 col-md-12 col-lg-12 shadow-sm modify-profil">
        <div class="col-8 col-md-8 col-lg-8 mx-auto">
    <form method="POST" action="{{route('profil.modifyInfo',Auth::user()->id)}}" >
       @csrf
      
         <div class="mb-3">
               
               <input type="text" class="form-control" id="idEmp" aria-describedby="EmpHelp" placeholder="Nom" name="lastName" value="{{$user->lastName}}">
             <!--  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
           </div>
            <div class="mb-3">
        
                <input type="text" class="form-control" id="prenom" aria-describedby="produitHelp" name="firstName" placeholder="prenom" value="{{$user->firstName}}"">
                <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
            <div class="mb-3 col-md-11 d-flex justify-content-between">
               
                <input type="text" class="form-control p-left" id="pseudo" placeholder="Pseudo" name="pseudo" value="{{$user->pseudo}}"">
             
                <input type="email" class="form-control p-right" id="email" placeholder="email" name="email" value="{{$user->email}}"">
            </div>
            <div class="mb-3 col-md-11 d-flex justify-content-between">
               
               <input type="text" class="form-control p-left" name="telephone" id="numero" placeholder="Telephone" value="{{$user->telephone}}">
            
               <input type="text" class="form-control p-right" name="cin" id="exampleInputPassword1" placeholder="Cin" value="{{$user->cin}}">
           </div>
           <div class="mb-3">
                
                <input type="text" class="form-control" id="adresseClient" aria-describedby="adresseHelp" name="adress" placeholder="Adresse Client" value="{{$user->adress}}">
               <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
            <div class="mb-3">
                
                <input type="date" class="form-control" id="DateNaissance" aria-describedby="naissanceHelp" name="birthdate" placeholder="Date Naissance" value="{{$user->birthdate}}">
               <!-- <div id="naissanceHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
     
            <div class="mb-3">
                <select class="form-select p-left" aria-label="Default select example" name="gender">
                    <option selected>Sex</option>
                    <option value="feminin" @if ($user->gender=="feminin") {{__('selected')}} @endif>Feminin</option>
                    <option value="masculin" @if ($user->gender=="masculin") {{__('selected')}} @endif>Masculin</option>
                    <option value="autre"  @if ($user->gender=="autre") {{__('selected')}} @endif>Autre</option>
                </select>
               </div>
          
            <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            
        </div>
    </div>
    <div class="col-12 col-md-12 col-lg-12 shadow-sm others">
             autres
    </div>

 </div>

 </div>
 </div>
@endauth
@endsection