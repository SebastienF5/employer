<div class="sticky-top bg-white">
<nav class="navbar navbar-expand-lg  navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="{{asset('images/logo/logopng.png')}}" width='110'></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto" id="menuWithIcon">
        <li class="nav-item">
        <a href="#">
                       <img src="{{asset('images/user.jpg')}}" class="img-responsive rounded-circle" 
                       width="50" alt="profil user"></a>
        </li>
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
        <a href="#">Login</a>/
        <a href="#">Registrer</a>
      </p>
    </div>
  </div>
</nav>
</div>