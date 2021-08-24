@extends('Layouts.app')
@section('content')

    <div class="container-fluid my-4">
        <div class="row">
            <!--block1-->
            <div class="col-12 col-md-12 col-lg-2" id="home--block1">
                 <div class="col-12 shadow-sm p-2">
                    <a href="">Post <span class="badge bg-secondary">12</span></a><br/>
                    <a href="">Comments <span class="badge bg-secondary">10</span></a>
                 </div>
                 <div class="col-12 shadow-sm p-2 ">
                 <a href="" class="home-logout">Logout   <i class="fas fa-sign-out-alt"></i></a><br/>
                 <a href="" class="link-dashboard">Dashboard <i class="fas fa-user-cog"></i></a>
                 </div>
            </div>
            <!--block2-->
            <div class="col-12 col-md-12 col-lg-8 my-4" id="home--block2">
             <div class="col-md-10 mx-auto">
                <form action="" method="post">
                    <textarea id="comment" class="form-control rounded-pill text-center p-2" cols="5" rows="3">your post...</textarea>
                </form>
            </div>

            <div class="col-md-10 mx-auto reunion p-2 shadow-sm">
                <div class="col-md-12 d-flex justify-content-between">
                   <span class="p-2 label-reunion"> reunion </span>
                   <a href="#">
                       <img src="{{asset('images/user.jpg')}}" class="img-responsive rounded-circle" 
                       width="50" alt="profil user"></a>
                </div>
                <div class="">
                 
                    <p class="text-center p-2"> <span>Objet :</span>Lorem ipsum lorem dolor non vicurate del bene pensate a fare </p>
                </div>

                <div class="col-md-12 d-flex justify-content-between">
                    <span>From PDG</span>
                    <small>Heure : 14:30</small>
                </div>
                </div>
                <div class="col-md-10 mx-auto commentaire p-2 shadow-sm">
                    <div class="col-md-12 p-2">
                    <a href="#"> <img src="{{asset('images/user.jpg')}}" class="img-responsive rounded-circle" 
                    width="50" alt="profil user" ></a>

                      <span> user name</span><br/><br/>
                      <p class="">Lorem ipsum lorem dolor non vicurate del bene pensate a fare</p>
                    </div>
                    <hr>
                    <div class="col-md-12 interaction text-center">
                      <span> <i class="far fa-thumbs-up"></i> 12</span>
                      <span><i class="far fa-thumbs-down"></i>1</span>
                      <span><i class="far fa-comment-alt"></i></span>
                    </div>
                </div>
            </div>
      
            <!--block3-->
            <div class="col-12 col-md-12 col-lg-2 shadow-lg" id="home--block3">
                blok3
            </div>
        </div>
    </div>
@endsection