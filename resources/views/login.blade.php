@extends('Layouts.app')
@section('content')
<div class="container content-login">
    <div class="row">
         <div class="col-6 col-md-6 col-lg-6 p-4 text-center">
             <img src="{{asset('images/rice.png')}}" alt="rice photo" class="col-md-7">
         </div>
         <div class="col-6 col-md-6 col-lg-6 block-form text-center p-3">
             <div class="img-logo">
              <img src="{{asset('images/logo/logopng.png')}}" alt="logo manjAyiti" class="col-md-6 ">
           </div>
   <div class="formulaire">
         <form method="POST" action="">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><i class="fas fa-envelope"></i></label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="email">
                <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><i class="fas fa-lock"></i></label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
            <div class="mb-3 form-check">
                <!--<input type="checkbox" class="form-check-input" id="exampleCheck1">-->
               <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
               <a href="">Mot de passe oublie?</a>
              
            </div>
            <input type="submit" class="btn btn-default col-md-6" ><br/>
            <a href="" class="p-3">Creer un compte</a>
</form>
</div>
         </div>
    </div>
</div>
@endsection