
@extends('Layouts.app')
@section('content')
@auth
 <div class="col-10 col-md-10 col-lg-10 content-dashboard">
     
     <div class="row">
        <div class="col-12 col-md-12 col-lg-12  p-4 dash-head">
            <div class="col-12 d-flex justify-content-between shadow-sm p-2 menuBar">
           
                <div class="mx-auto col-md-6">
                    <form action="" method="POST">
                    <div class="mb-3 container-search">
                         <input type="search" class="form-control rounded-pill" id="search" placeholder="Rechercher ici">
                         <button class="rechercher"><i class="fas fa-search"></i></button>
                    </div>
                   
                    </form>
                </div>
         
                <img src="{{Storage::url(Auth::user()->profilPhoto)}}" class="img-responsive profilUser" width="50" alt="profil user">
           </div>
           <div class="col-12 d-flex justify-content-between text-center dash-info mb-3">
               <div class="col-12 col-md-3 col-lg-2 bg-white shadow-sm">
                <p>1000 <br><span>Vues/jours</span></p>
                <i class="fas fa-eye"></i>
               </div>
               <div class="col-12 col-md-3 col-lg-2 bg-white shadow-sm">
               <p>{{$count}}<br><span>Vente(s)</span></p>
               <i class="fas fa-shopping-cart"></i>
               </div>
               <div class="col-12 col-md-2 col-lg-2 bg-white shadow-sm">
               <p>50 <br><span>Commentaires</span></p>
               <i class="fas fa-comments"></i>
               </div>
               <div class="col-12 col-md-2 col-lg-2 bg-white shadow-sm">
               <p>$ {{$montant}} <br><span>Montant</span></p>
               <i class="fas fa-dollar-sign"></i>
               </div>
              
           </div>
        </div>
        <div class="col-8 col-md-8 col-lg-8 vente p-4 bg-white mx-3 shadow-lg">
           <div class="col-12 col-md-12 col-lg-12 d-flex justify-content-between mb-4">
                 <h4>Commandes Recentes</h4>
                 <a href="#" class="btn btn-primary">Voir Plus</a>
           </div>
           <div class="col-12">
           <table class="table table-hover">
           <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Payment</th>
                <th scope="col">Status</th>
       
                </tr>
            </thead>
            <tbody>
                @foreach($sell as $s)
                    <tr>
                    <th scope="row">{{$s->nomProduit}}</th>
                    <td>{{$s->montant}}</td>
                    <td>@if($s->etat=='validee'){{__('Paye')}} @elseif($s->etat=='annulee'){{__('Annulee')}} @else {{__('Due')}}   @endif</td>
                    <td><span class="@if($s->etat=='validee'){{__('bg-success')}} @elseif($s->etat=='anullee'){{__('bg-danger')}} @else {{__('bg-warning')}}   @endif">{{$s->etat}}</span></td>
                    </tr>
                @endforeach
              </tbody>
           </table>
           </div>
       </div>
        <div class="col-3 col-md-3 col-lg-3 p-4 identity  text-center">
            <div class="col-12 col-md-12 col-lg-12">
                <h4> Clients Recents</h4>
                <div class="col-12 ">
                    <table class="table table-hover">
                        <tr>

                            <td><img src="{{asset('images/user.jpg')}}" width="50" alt="client photo" class="rounded-circle"></td>
                            <td> Jaques </br> Fils</td>
                        </tr>
                        <tr>

                        <td><img src="{{asset('images/user.jpg')}}" width="50" alt="client photo" class="rounded-circle"></td>
                        <td> Jean</br> Louis</td>
                        </tr>

                        <tr>

                        <td><img src="{{asset('images/user.jpg')}}" width="50" alt="client photo" class="rounded-circle"></td>
                        <td> Ralph</br>  Michel</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
     </div>
 </div>
 </div>
 </div>
 @endauth
@endsection