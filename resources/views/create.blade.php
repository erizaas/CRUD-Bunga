@extends('layout')
@section('content')
<div class="container mt-5 mb-4 d-flex justify-content-center">
    <div class="card" style="width: 700px" style="width: 10 rem;">
    <div class="card text-center">
        <div class="card-header">
          create new plant
        </div>
        <div class="card-body">
        <form action="{{route('create')}}" method="post">
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
        @csrf
          <table class="table">
            <thead>
              <tr>
                  <div class="row align-items-center mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name plant</label>
                    <div class="col">
                      <input type="text" name="name">
                    </div>
                  </div>
                  <div class="row align-items-center mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Code plant</label>
                    <div class="col">
                      <input type="text" name="code">
                    </div>
                  </div>
                
                <div class="type mb-3">
                  <label>Type</label>
                        <select name="type" class="w-100">
                          <option value="" hidden>-- select type --</option>
                          <option value="drugs">drugs</option>
                          <option value="fruits">fruits</option>
                          <option value="vegetables" >vegetables</option>
                        </select>
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Notes</label>
                <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3" name="notes"></textarea>
                <div class="row align-items-center mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Growth</label>
                  <div class="col">
                    <input type="text" name="growth">
                  </div>
                </div>
              <div class="mt-5">
                <button type="submit" class="btn btn-primary me-2">Save</button>
                <a href="/dashboard" class="btn btn-outline-primary">Cancel</a>
              </div>
            </thead>
            <tbody>
              <tr>
            </tbody>
          </table>
        </div>
        </form>
        <div class="card-footer text-muted">
        </div>
    </div>
