@extends('Layouts.app')
@section('content')
 <div class="col-12 col-md-12 col-lg-12 content-dashboard p-3">
     <div class="row">
        <div class="col-12 d-flex justify-content-between p-4">
        <div class="col-12 d-flex justify-content-between shadow-sm p-2">
            <nav class="navbar navbar-light bg-gray">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" id="buttonMenu"></span>
                </button>
            </nav>
                <div class="mx-auto col-md-6">
                    <form action="" method="POST">
                    <div class="mb-3 container-search">
                         <input type="search" class="form-control rounded-pill" id="search" placeholder="Rechercher ici">
                         <button class="rechercher"><i class="fas fa-search"></i></button>
                    </div>
                   
                    </form>
                </div>
         
                <img src="{{asset('images/user.jpg')}}" class="img-responsive profilUser" width="50" alt="profil user">
           </div>
        </div>
        <div class="col-12 col-md-12 col-lg-12 d-flex delivery justify-content-between">
        <div class="col-12 col-md-12 col-lg-5 delivery-form ">
         <h5 class="mb-3"> Enregistrer une vente </h5>
  
        <form method="POST" action="{{route('delivery.store')}}">
            @csrf
         <div class="mb-3">
               
               <input type="text" class="form-control" id="idClient" name="id" aria-describedby="emailHelp" disabled placeholder="ID">
             <!--  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
           </div>
            <div class="mb-3">
        
                <input type="text" class="form-control" id="produit" aria-describedby="produitHelp" name="nomProduit" placeholder="Nom produit">
                <div id="emailHelp" class="form-text">   
                    @if($errors->has('nomProduit'))
                      {{$errors->first('nomProduit')}}
                    @endif
                </div>
            </div>
            <div class="mb-3 col-12 col-md-12 col-lg-12 d-flex justify-content-between">
            <div class="col-5">
                <input type="text" class="form-control p-left" id="quantite" placeholder="quantite" name="quantite">
                <div id="emailHelp" class="form-text">   
                    @if($errors->has('quantite'))
                      {{$errors->first('quantite')}}
                    @endif
                </div>
              </div>

              <div class="col-5">
                <input type="text" class="form-control p-right" id="montant" placeholder="montant" readonly name="montant" value="0">
                <div id="emailHelp" class="form-text">   
                    @if($errors->has('montant'))
                      {{$errors->first('montant')}}
                    @endif
                </div>
                </div>
            </div>
            <div class="mb-3 col-md-12 d-flex justify-content-between">
               <div class="col-5">
               <input type="text" class="form-control p-left" name="numeroClient" id="numero" placeholder="numeroClient ">
               <div id="emailHelp" class="form-text">   
                    @if($errors->has('numeroClient'))
                      {{$errors->first('numeroClient')}}
                    @endif
                </div>
            </div>
            <div class="col-5">
               <input type="text" class="form-control p-right" name="nomClient" id="exampleInputPassword1" placeholder="nom Client">
               <div id="emailHelp" class="form-text">   
                    @if($errors->has('nomClient'))
                      {{$errors->first('nomClient')}}
                    @endif
                </div>
            </div>
           </div>
           <div class="mb-3">
                
                <input type="text" class="form-control" id="adresseClient" aria-describedby="adresseHelp" name="adresseClient" placeholder="Adresse Client">
                <div id="emailHelp" class="form-text">   
                    @if($errors->has('adresseClient'))
                      {{$errors->first('adresseClient')}}
                    @endif
                </div>
            </div>
     
            <div class="mb-3">
                <select class="form-select" name="etat" aria-label="Default select example">
                    <option selected>Etat</option>
                    <option value="validee">Validee</option>
                    <option value="en attente">En attente</option>
                    <option value="annulee">Annulee</option>
                </select>
           </div>
             <input type="submit" class="btn btn-primary" value="Enregister">
            </form>
       </div>
        <div class="col-12 col-md-12 col-lg-6 p-4 table-delivery text-center">
        <h5 class="mb-3"> Listes des ventes </h5>
                    <table class="table table-striped table-responsive-md">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NomProduit</th>
                <th scope="col">Qte</th>
                <th scope="col">Montant</th>
                <th scope="col">NumeroClient</th>
                <th scope="col">NomClient</th>
                <th scope="col">Adresse</th>
                <th scope="col">Etat</th>
                <th scope="col">Action</th>
                </tr>
    

            </thead>
            <tbody>
            
     
         
                @foreach($deliveries as $d)
    
                <tr>
      
                <th scope="row">{{$d->id}}</th>
                <td>{{$d->nomProduit}}</td>
                <td>{{$d->quantite}}</td>
                <td>{{$d->montant}}</td>
                <td>{{$d->numeroClient}}</td>
                <td>{{$d->nomClient}}</td>
                <td>{{$d->adresseClient}}</td>
                <td>{{$d->etat}}</td>
                <td><a href="#" class="p-2 update">Modifier</a></td>
                </tr>
                @endforeach
                
            </tbody>
      
            </table>
            
        </div>
     </div>
     </div>
 </div>
 </div>
 </div>
@endsection