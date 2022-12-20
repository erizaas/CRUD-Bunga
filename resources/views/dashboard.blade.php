@extends('layout')
@section('content')
<div class="d-flex justify-content-center">
  <nav class="navbar navbar-expand-lg bg-light m-4 rounded-5">
    <div class="container-fluid">
        <a class="nav-link text-primary me-5" href="/create">Create Data</a>
          <a class="nav-link text-primary" href="/logout">Logout</a>
        </div>
    </div>
    </nav>
</div>
<div class="container mt-5 d-flex justify-content-center text-center">
<div class="card" style="width: 20 rem;">
    <a class="d-flex justify-content-center"><img src="/assets/img/wk.jpeg" alt="" width="80px"></a>
    <div class="card-header" style="position: relative">
      <h5 class="plants Report">plants Report</h5>
      <p class="card-text">all ons plants Report.</p>
    </div> <div class="button">
    </div>
      <h3>counts</h3>
      <table class="table table-striped table-bordered">
        {{-- <thead> --}}
          <tr>
            <th scope="col">no</th>
            <th scope="col" style="width: 5px">kode</th>
            <th scope="col">name</th>
            <th scope="col">type</th>
            <th scope="col">growth</th>
            <th scope="col">action</th>
          </tr>
          @php
            $no = 1;
          @endphp
          @foreach ($crudbunga as $Crudbunga)
        <tr>
        <th scope="row">{{ $no++ }}</th>
        <td>{{ $Crudbunga['code'] }}</td>
        <td>{{ $Crudbunga['name'] }}</td>
        <td>{{ $Crudbunga['type'] }}</td>
        <td>{{ $Crudbunga['notes'] }}</td>
          <td class="d-flex">
              <button class="btn btn-primary fa-solid fa-arrow-right-to-bracket me-1" style="margin-left:20%;" onclick="location.href='/edit/{{$Crudbunga['id']}}'"></button>
              <div class="delete">
              <form action="/destroy/{{$Crudbunga['id']}}" method="POST"> 
                  @csrf 
                  @method('DELETE')
              <button type="submit" class="btn btn- btn-danger fa-solid fa-trash me-5"></button>
          </form>
          </td>
        </div>
        </td>
    </tr>
    @endforeach
      </table>
  </div>
</div>  
@endsection
