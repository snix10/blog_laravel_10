@extends('dashboard.main')
@section('lihat')


<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      
      <h1>{{ $blogs->judul  }} </h1>

      <img class="img img-fluid" src="{{asset('gambar/gambar_coba.jpg')}}" alt="">

      <article class="my-3 fs-5">
      <p>{!! $blogs->isi !!}</p>
      </article>
      
      <a href="">kembali</a>

    </div>
  </div>
</div>


@endsection