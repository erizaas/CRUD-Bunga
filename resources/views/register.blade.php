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

#register:hover{
    color: black;
    background-color: #89C8DB
}

</style>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Register Form</h2>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" method="POST" action="/register">
            @csrf
            <div class="text-center">
              <img src="/assets/img/wk.jpeg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>
            <div class="mb-3">
                <label for="">Name</label>
                <input type="Name" class="form-control" id="name" placeholder="Masukan Nama" name="name">
              </div>
              <div class="mb-3">
                <label for="">Email</label>
                <input type="Email" class="form-control" id="email" placeholder="Masukan Email" name="email">
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
            <div class="text-center"><button id="register" type="submit" class="btn btn-color px-5 mb-5 w-100">Register</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Already account?<a href="/login" class="text-dark fw-bold"> Login now</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
@endsection