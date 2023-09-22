@extends('main')
@section('baca')

<div class="container mt-3">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h1>{{ $blogs->judul }}</h1>

      <p>By. <a class="text-decoration-none  mx-2" href="/blogs?author={{ $blogs->author->username }}">{{ $blogs->author->name }}</a> in <a class="text-decoration-none mx-2" href="/blogs?category={{ $blogs->category->slug }}">{{ $blogs->category->name }}</a></p>

      <img class="img img-fluid my-3 rounded" src="{{asset('gambar/gambar_coba.jpg')}}" alt="">
      
      <article class="my-3 fs-5">
      <p>{!! $blogs->isi !!}</p>
      </article>
      
      <a class="text-decoration-none mt-5" href="/blogs">-----kembali-----</a>

    </div>
  </div>
</div>


@endsection