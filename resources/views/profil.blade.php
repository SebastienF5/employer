@extends('Layouts.app')
@section('content')
<div class="col-10 col-md-10 col-lg-10 content-profil">
  <div class="row">
    <div class="col-3 col-md-3 col-lg-3 shadow-sm last-comment">
    
     <div class="col-12 text-center p-2">
            <h5> Utilisateur </h5>
            <img src="{{asset('images/user.jpg')}}" class="img-responsive rounded-circle col-md-8"  alt="profil user">
            <p>Sebastien <strong>FIEFFE</strong></p>
             <div>
             <h6> Derniers POSTS </h6>
             </div>
        </div>
    </div>
    <div class="col-8 col-md-8 col-lg-8 container-option">

    <div class="col-12 col-md-12 col-lg-12 shadow-sm modify-profil">
        <div class="col-8 col-md-8 col-lg-8 mx-auto">
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
                
                <input type="text" class="form-control" id="adresseClient" aria-describedby="adresseHelp" name="adresseClient" placeholder="Adresse Client">
               <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
            <div class="mb-3">
                
                <input type="date" class="form-control" id="DateNaissance" aria-describedby="adresseHelp" name="dateNaissance" placeholder="Date Naissance">
               <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
     
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
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

@endsection