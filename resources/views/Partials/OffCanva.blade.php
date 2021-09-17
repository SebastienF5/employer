<div class="bg-white offcanva">
<nav class="navbar navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="{{asset('images/logo/logopng.png')}}" width='110'></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">{{config('app.name')}}</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        <li><a href="{{route('home')}}"> <i class="fas fa-home"></i> Accueil  </a></li>
            <li><a href="{{route('delivery')}}"><i class="fas fa-truck"></i> Vente</a></li>
            <li><a href="{{route('profil.modifyInfo',Auth::user()->id)}}"><i class="fas fa-user-plus"></i> Profil</a></li>
            <li><a href=""> <i class="far fa-comment"></i> Commentaire</a></li>
            <li><a href="{{route('dashboard')}}"><i class="fas fa-cog"></i> Dashboard</a></li>
            </ul>
          </li>
        </ul>
      <!--  <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>-->
      </div>
    </div>
  </div>
</nav>
</div>