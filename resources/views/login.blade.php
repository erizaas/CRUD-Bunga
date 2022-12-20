@extends('layout')
@section('content')
<style>
.btn-color{
  background-color: #0e1c36;
  color: #fff;
  
}

.profile-image-pic{
  height: 200px;
  width: 200px;
  object-fit: cover;
}



.cardbody-color{
  background-color: #ebf2fa;
}

a{
  text-decoration: none;
}

#login:hover{
    color: black;
    background-color: #89C8DB
}

</style>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login Form</h2>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="text-center">
              <img src="/assets/img/wk.jpeg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
                @if(session('successRegister'))
                    <p class="text-success text-center alert alert-success rounded-3">{{ session('successRegister') }}</p>
                @endif
                @if(session('error'))
                    <p class="text-danger text-center alert alert-danger rounded-3">{{ session('error') }}</p>
                @endif
                @if(session('isLogin'))
                    <p class="text-warning text-center alert alert-warning rounded-3">{{ session('isLogin') }}</p>
                @endif
                @if(session('logout'))
                    <p class="text-success text-center alert alert-success rounded-3">{{ session('logout') }}</p>
                @endif 
            </div>

            <div class="mb-3">
              <label for="">Username</label>
              <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="Masukan Username" name="username">
            </div>
            <div class="mb-3">
              <label for="">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Masukan Password" name="password">
            </div>
            <div class="text-center"><button id="login" type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
              Registered? <a href="/register" class="text-dark fw-bold"> Create an
                Account</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
@endsection