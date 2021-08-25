@extends('Layouts.app')
@section('content')
 <div class="col-10 col-md-10 col-lg-10 content-dashboard">
     <div class="row">
        <div class="col-12 d-flex justify-content-between p-4">
            <h1> Livraison </h1>
            <img src="{{asset('images/user.jpg')}}" class="img-responsive rounded-circle" width="50" alt="profil user">
        </div>
        <div class="col-12 col-md-12 col-lg-12 d-flex delivery justify-content-between">
        <div class="col-5 col-md-5 col-lg-5 delivery-form ">
         <form method="POST" action="">
         <div class="mb-3">
               
               <input type="text" class="form-control" id="idClient" aria-describedby="emailHelp" disabled placeholder="ID">
             <!--  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
           </div>
            <div class="mb-3">
        
                <input type="text" class="form-control" id="produit" aria-describedby="produitHelp" name="produit" placeholder="Nom produit">
                <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
            <div class="mb-3 col-md-11 d-flex justify-content-between">
               
                <input type="text" class="form-control p-left" id="quantite" placeholder="quantite" name="quantite">
             
                <input type="text" class="form-control p-right" id="montant" placeholder="montant" name="montant">
            </div>
            <div class="mb-3 col-md-11 d-flex justify-content-between">
               
               <input type="text" class="form-control p-left" name="numeroClient" id="numero" placeholder="numero Client ">
            
               <input type="text" class="form-control p-right" name="nomClient" id="exampleInputPassword1" placeholder="nom Client">
           </div>
           <div class="mb-3">
                
                <input type="text" class="form-control" id="adresseClient" aria-describedby="adresseHelp" name="adresse Client" placeholder="Adresse Client">
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
        <div class="col-6 col-md-6 col-lg-6 p-4 table-delivery text-center">
                    <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
            </table>
        </div>
     </div>
     </div>
 </div>
 </div>
 </div>
@endsection