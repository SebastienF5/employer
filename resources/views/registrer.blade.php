@extends('Layouts.app')
@section('content')
   <div class="container-fluid content-registrer">
     <div class="row">
        <div class="col-12 col-md-12 col-lg-12  text-center">
             <img src="{{asset('images/logo/logopng.png')}}" alt="logo" class="col-md-3 registrer-logo">
         </div>
        <div class="col-6 col-md-6 col-lg-6 mx-auto registrer-form">
             <form method="POST" action="">
                  <div class="mb-3">
               
               <input type="text" class="form-control" id="idEmp" aria-describedby="EmpHelp" placeholder="Nom" name="nom">
             <!--  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
           </div>
            <div class="mb-3">
        
                <input type="text" class="form-control" id="prenom" aria-describedby="produitHelp" name="prenom" placeholder="Prenom">
                <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
            <div class="mb-3 col-md-11 d-flex justify-content-between">
               
                <input type="text" class="form-control p-left" id="pseudo" placeholder="Pseudo" name="pseudo">
             
                <input type="email" class="form-control p-right" id="email" placeholder="email" name="Email">
            </div>
            <div class="mb-3 col-md-11 d-flex justify-content-between">
               
               <input type="text" class="form-control p-left" name="telephone" id="numero" placeholder="Telephone">
            
               <input type="text" class="form-control p-right" name="cin" id="exampleInputPassword1" placeholder="Cin">
           </div>
           <div class="mb-3">
                
                <input type="text" class="form-control" id="adresseEmp" aria-describedby="adresseHelp" name="adresseEmp" placeholder="Adresse">
               <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
            <div class="mb-3">
                
                <input type="date" class="form-control" id="DateNaissance" aria-describedby="adresseHelp" name="dateNaissance" placeholder="Date Naissance">
               <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
     
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Sex</option>
                    <option value="feminin">Feminin</option>
                    <option value="masculin">Masculin</option>
                    <option value="autre">Autre</option>
                </select>
           </div>
            <button type="submit" class="btn btn-primary">Submit</button>
             <a href="{{asset('login')}}" class="mx-3 link-login">j'ai un compte !</a>
            </form>
        </div>
    </div>
   </div>
@endsection