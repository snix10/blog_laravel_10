@extends('main')


@section('kategoris')


@if ($kategoris->count())
<div class="container">
<h1 class="mt-5 mb-4 text-center shadow p-3 mb-5 bg-body rounded mx-3">{{ $title }}</h1>


    <div class="row ">
    @foreach ($kategoris as $blog)
        <div class="col-lg-4 ">
            <a href="/blogs?category={{ $blog->slug }}">
            <div class="card mb-3  mx-auto shadow p-3 mb-5 bg-body rounded " style="width: 18rem;">
             <img src="{{asset('gambar/gambar_coba_coba.jpg')}}" class="card-img-top " alt="...">
                <div class="card-img-overlay d-flex align-items-center p-8 ">
                    <h5 class="card-title text-center flex-fill p-4 px-4 text-white" style="background-color: rgba(0,0,0,0.7)">{{ $blog->name }}</h5> 
                </div>                 
            </div>   
            </a>
        </div>
    @endforeach
    </div>
</div>


@else
 <p class="text-center text-muted fs-4 mt-5">blog kategori tidak ada</p>
@endif


@endsection
