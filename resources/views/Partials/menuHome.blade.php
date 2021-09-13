<div class="sticky-top bg-white">
<nav class="navbar navbar-expand-lg  navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo/logopng.png')}}" width='110'></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto" id="menuWithIcon">
        <li class="nav-item">
          @auth
        <a href="{{route('profil.show',Auth::user()->id)}}">
                       <img src="{{Storage::url(Auth::user()->profilPhoto)}}" class="img-responsive profilUser" 
                       width="50" alt="profil user"></a>
        </li>
        @endauth
        <li class="nav-item">
              <a class="nav-link position-relative" href="#">
                <i class="far fa-envelope "> </i>
               <span class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger"> 10+ </span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link position-relative" href="#">
              <i class="far fa-bell"> </i>
              <span class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger">99+</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
     
      <p>
    
        <a href="{{route('login')}}">Login</a>/
       
        <a href="{{route('register')}}">Registrer</a>
     
      </p>
   </div>
  </div>
</nav>
</div>