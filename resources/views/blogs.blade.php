
@extends('main')


@section('blog')
<!---->

<div class="container">
<h1 class="">{{$title}}</h1>
<div class="row justify-content-md-end ">

  <div class="col-md-6">
    <form action="/blogs">
      @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category')}}">
      @endif
      @if (request('author'))
        <input type="hidden" name="author" value="{{ request('author')}}">
      @endif
      <div class="input-group mb-3  ">
        <input type="text" class="form-control  rounded" placeholder="" name="search" value="{{ request('search')}}">
        <button class="btn btn-outline-primary  rounded" type="submit" >search</button>
      </div>
    </form>
  </div>
</div>

@if ($blogs->count())



<div class="card mb-3 mt-2 shadow p-3 mb-5 bg-body rounded">
  <img src="{{asset('gambar/gambar_coba.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h3 class="card-title "><a  class="text-decoration-none text-dark" href='/baca/{{ $blogs[0]->slug }} '>{{$blogs[0]->judul}}</a></h3>
    <p >
      <small>
         By. <a class="text-decoration-none" href="/blogs?author={{ $blogs[0]->author->username }}">{{ $blogs[0]->author->name }}</a>
         in <a class="text-decoration-none" href="/blogs?category={{ $blogs[0]->category->slug }}">{{ $blogs[0]->category->name }}</a>
         <small class="text-muted">{{$blogs[0]->created_at->diffForHumans()}}</small>
      </small>
    </p>
    <p class="card-text">{{ $blogs[0]->subjudul }}</p>
    <a class="text-decoration-none btn btn-primary"  href='/baca/{{ $blogs[0]->id }} '>Read more...</a>
  </div>
</div>



<div>
  <div class="row">
    @foreach ($blogs->skip(1) as $blog)
    <div class="card-group col-md-4 ">
      <div class="card mb-3 shadow p-3 mb-5 bg-body rounded" >
        <a href='/blogs?category={{ $blog->category->slug }}'>
          <div class="position-absolute px-3 py-2 text-white shadow  rounded" style="background-color:rgba(0,0,0,0.7)">{{$blog->category->name}}</div>
        </a>
        <img src="{{asset('gambar/gambar_coba_coba.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $blog->judul }}</h5>
              <p >
                <small>
                   By. <a class="text-decoration-none" href="/blogs?author={{ $blog->author->username }}">{{ $blog->author->name }}</a>
                   in <a class="text-decoration-none r" href="/blogs?category={{ $blog->category->slug }}">{{ $blog->category->name }}</a>
                   <small class="text-muted">{{$blog->created_at->diffForHumans()}}</small>
                </small>
              </p>
              <p class="card-text">{{ $blog->subjudul }}</p>
            <div class="">
              <a href='/baca/{{ $blog->id }} ' class="btn btn-primary ">Read more</a>
            </div>   
        </div>  
      </div>
    </div>
    @endforeach
  </div>
</div>

@else
 <p class="text-center text-muted fs-4 mt-2">blog tidak ada.</p>
@endif

<div class="">
{{ $blogs->links()}}
</div>

</div>

@endsection






