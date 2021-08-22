@extends('Layouts.app')
@section('content')

    <div class="container-fluid ">
        <div class="row">
            <!--block1-->
            <div class="col-12 col-md-12 col-lg-2" id="home--block1">
                 <div class="col-12 shadow-sm p-2">
                    <a href="">Post <span class="badge bg-secondary">12</span></a><br/>
                    <a href="">Comments <span class="badge bg-secondary">10</span></a>
                 </div>
                 <div class="col-12 shadow-sm p-2">
                 <a href="">Logout   <i class="fas fa-sign-out-alt"></i></a><br/>
                 <a href="">Dashboard <i class="fas fa-user-cog"></i></a>
                 </div>
            </div>
            <!--block2-->
            <div class="col-12 col-md-12 col-lg-8 " id="home--block2">
             <div class="col-md-10 mx-auto">
                <form action="" method="post">
                    <textarea id="comment" class="form-control rounded-3" cols="5" rows="3">your post...</textarea>
                </form>
            </div>

            <div class="col-md-10 mx-auto reunion">
               reunionl[]
            </div>
            </div>
            <!--block3-->
            <div class="col-12 col-md-12 col-lg-2 shadow-lg" id="home--block3">
                blok3
            </div>
        </div>
    </div>
@endsection