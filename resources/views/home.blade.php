@extends('Layouts.app')
@section('content')

    <div class="container-fluid my-4" id="pageHome">
        <div class="row">
            <!--block1-->
            <div class="col-12 col-md-12 col-lg-2" id="home--block1">
                 <div class="col-4 col-md-4 col-lg-12 shadow-sm p-2 border-1 ">
                    <a href="">Post <span class="badge bg-secondary">{{$countPost}}</span></a><br/>
                    <a href="">Comments <span class="badge bg-secondary">0</span></a>
                 </div>
                 <div class="col-4 col-md-4 col-lg-12 shadow-sm p-2 border-1 ">
                
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                        {{ csrf_field() }}
                      
                    <input type="submit" name="logout" value="quitter" class="btn btn-default">  <i class="fas fa-sign-out-alt"></i>
                  </form>
                 <a href="{{asset(route('dashboard'))}}" class="link-dashboard">Dashboard <i class="fas fa-user-cog"></i></a>
                 </div>
            </div>
            <!--block2-->
            <div class="col-12 col-md-12 col-lg-8 my-4" id="home--block2">
             <div class="col-12 col-md-10 col-lg-10 mx-auto bg-white p-4 border-2">
              
        
                <form action="{{route('comment')}}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="text" id="postComment" class="form-control rounded-pill text-center p-2" name="content" placeholder="Votre Post...">
                    
                </form>
                <div class="text-center p-2 my-2">
                    <ul class="list-inline ">
                        <li class="list-inline-item"><a href=""><i class="fas fa-image mx-4"></i>Photo</a></li>
                        <li class="list-inline-item"><a href=""><i class="fas fa-video mx-4"></i>Video</a></li>
                        <li class="list-inline-item"><a href=""><i class="fas fa-calendar-week mx-4"></i>Evennement</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-10 mx-auto reunion p-2 shadow-sm border-2">
                <div class="col-12 col-md-12 col-lg-12 d-flex justify-content-between">
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
                  @foreach($post as $p)
                <div class="col-12 col-md-12 col-lg-12 mx-auto commentaire p-2 shadow-sm border-1">
                    <div class="col-md-12 p-2 ">
                    <a href="#"> <img src="{{Storage::url($p->profilPhoto)}}" class="img-responsive profilUser" 
                    width="50" alt="profil user" ></a>

                      <span>{{$p->firstName.' '.$p->lastName}}</span>
                      <small class="pull-right">{{$p->created_at}}</small><br/><br/>
                      <p class="">{{$p->content}}</p>
                    </div>
                    <hr>
                    <div class="col-md-12 interaction text-center">
                      <span> <i class="fas fa-thumbs-up"></i> 12</span>
                       <span><i class="far fa-comment-alt"></i></span>
                      <span><i class="fas fa-bookmark"></i></span>
                    </div>
                </div>
                @endforeach
            </div>
      
            <!--block3-->
            <div class="col-12 col-md-12 col-lg-2 shadow-lg border-2" id="home--block3">
                blok3
            </div>
        </div>
    </div>
@endsection