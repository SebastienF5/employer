<div class="container-fluid" >
 <div class="row">
 <div class="col-2 col-md-2 col-lg-2 menu-dashboard p-4 position-fixed text-center collapse "  id="navbarToggleExternalContent">
    <div id="menu2nd col-12">
 <span class="p-2 appName">{{config('app.name')}}</span>
    <div class="item-dashboard">
        <ul class="list-unstyled">
            <li><a href="{{route('home')}}"> <i class="fas fa-home"></i><br/>Accueil  </a></li>
            <li><a href="{{route('delivery')}}"><i class="fas fa-truck"></i></a></li>
            <li><a href="{{route('profil.modifyInfo',Auth::user()->id)}}"><i class="fas fa-user-plus"></i></a></li>
            <li><a href=""> <i class="far fa-comment"></i></a></li>
            <li><a href="{{route('dashboard')}}"><i class="fas fa-cog"></i></a></li>
        </ul>
    </div>

    <div class="exit">
      
        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
            {{ csrf_field() }}
            
           <input type="submit" name="logout" value="Quitter" class="btn bg-red color--white">
       </form>
    </div>
</div>
</div>

