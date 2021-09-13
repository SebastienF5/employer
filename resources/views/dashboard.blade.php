
@extends('Layouts.app')
@section('content')
@auth
 <div class="col-10 col-md-10 col-lg-10 content-dashboard">
     <div class="row">
        <div class="col-12 col-md-12 col-lg-12  p-4 dash-head">
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
         
                <img src="{{Storage::url(Auth::user()->profilPhoto)}}" class="img-responsive profilUser" width="50" alt="profil user">
           </div>
           <div class="col-12 d-flex justify-content-between text-center dash-info mb-3">
               <div class="col-12 col-md-3 col-lg-2 bg-white shadow-sm">
                <p>1000 <br><span>Vues/jours</span></p>
                <i class="fas fa-eye"></i>
               </div>
               <div class="col-12 col-md-3 col-lg-2 bg-white shadow-sm">
               <p>100<br><span>Ventes</span></p>
               <i class="fas fa-shopping-cart"></i>
               </div>
               <div class="col-12 col-md-2 col-lg-2 bg-white shadow-sm">
               <p>50 <br><span>Commentaires</span></p>
               <i class="fas fa-comments"></i>
               </div>
               <div class="col-12 col-md-2 col-lg-2 bg-white shadow-sm">
               <p>$120000 <br><span>Benefices</span></p>
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
                <tr>
                <th scope="row">Rix</th>
                <td>$100</td>
                <td>Paye</td>
                <td><span class="bg-success">Validee</span></td>
                </tr>
                <tr>
                <th scope="row">Mais</th>
                <td>$300</td>
                <td>Due</td>
                <td ><span class="bg-danger">Annulee</span></td>
                </tr>
                <tr>
                <th scope="row">Rix</th>
                <td >$500</td>
                <td>Non Paye</td>
                <td ><span class="bg-warning">En attente</span></td>
                </tr>
                <tr>
                <th scope="row">Rix</th>
                <td>$100</td>
                <td>Paye</td>
                <td ><span class="bg-success ">Validee</span></td>
                </tr>
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