@extends('dashboard.main')

@section('dashboard')

<div class="card mb-3 shadow p-3 mb-5 bg-body rounded " style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="gambar/loogo_harimau.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h6 class="card-title">nama : {{ auth()->user()->name}}</h6>
        <h6 class="card-text">username : {{ auth()->user()->username}}</h6>
        <h6 class="card-text">email : {{ auth()->user()->email}}</h6>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
    </div>
  </div>
</div>




@endsection