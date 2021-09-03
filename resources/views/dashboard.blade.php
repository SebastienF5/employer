
@extends('Layouts.app')
@section('content')
@auth
 <div class="col-10 col-md-10 col-lg-10 content-dashboard">
     <div class="row">
        <div class="col-12 d-flex justify-content-between p-4">
            <h1> Bienvenue, {{ Auth::user()->firstName }}</h1>
            <img src="{{asset('images/user.jpg')}}" class="img-responsive rounded-circle" width="50" alt="profil user">
        </div>
        <div class="col-8 col-md-8 col-lg-8 vente p-4">
        <div class="col-12 col-md-12 col-lg-12 m-2 shadow-sm d-flex justify-content-between text-center p-4">
            <div class="col-6 image-vente">
       
                 <img src="{{asset('images/bucks.png')}}" class="col-md-8"  class="p-2">
             
           </div>
           <div class="col-6 info-vente">
              <p> Vente pour cette semaine </p>
              <span>$120 0000</span>
              <p>Paquets Livres:
             
              </p>
              <span>120 </span>
           </div>
            
        </div>
        <div class="col-5 col-md-5 col-lg-5 my-4 text-center p-4">
        <ul class="list-unstyled">
            <li><a href="">Liste Livraison </a></li>
            <li><a href="">Liste Employe</a></li>
            <li><a href="">Inventaire</a></li>
            
        </ul>
        </div>
        <div class="col-5 col-md-5 col-lg-5 my-4 text-center p-4">
             <a href="" class="btn btn-default"> Modfier Profil</a><br/>
             <a href="" class="btn btn-default"> Ajouter livraison</a>
        </div>
       </div>
        <div class="col-3 col-md-3 col-lg-3 p-4 identity text-center">
        <div class="col-12 col-md-12 col-lg-12">
        <img src="{{Auth::user()->profilPhoto}}" class="img-responsive rounded-circle col-md-8"  alt="profil user">
        
        </div>
        <div class="col-12 col-md-12 col-lg-12 p-2">
            <h4>{{ Auth::user()->firstName }} {{Auth::user()->lastName}} ,{{Auth::user()->fonction}} </h4>
            <span>{{Auth::user()->email}} </span><br/>
            <span> {{Auth::user()->telephone}} </span><br/>
            <span> {{Auth::user()->cin}} </span>
          
        </div>
        </div>
     </div>
 </div>
 </div>
 </div>
 @endauth
@endsection