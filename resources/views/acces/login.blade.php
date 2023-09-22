@extends('main')


@section('login')

@if(session()->has('berhasil'))
<div class="row justify-content-center mx-1 ">
    <div class="col-lg-4  rounded-3">
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
           <strong>{{ session('berhasil') }}</strong>
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</div>
@endif

@if(session()->has('loginerror'))
<div class="row justify-content-center mx-1 ">
    <div class="col-lg-4  rounded-3">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>{{ session('loginerror') }}</strong>
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</div>
@endif


<div class="row justify-content-center mx-1 ">
    <div class="col-lg-4 border border-2 border-dark rounded-3 ">
      <form action="/login" method="post">
         @csrf 
         <h3 class="text-center display-6">LOGIN</h3>
            <div class="form-floating  my-2">
               <input type="email" name="email"  class="form-control border-2 border-top-0 border-start-0 border-end-0 border-dark rounded-0 @error('email') is-invalid @enderror"  id="email" placeholder="name@example.com" autofocus required value="{{ old('email')}}">
               <label for="email">Email address</label>
               @error('email') 
                  <small class="indvalid-feedback text-danger"> -
                    {{ $message }}  
                  </small>
               @enderror
            </div>
            <div class="form-floating">
               <input type="password" name="password" class="form-control border-2 border-top-0 border-start-0 border-end-0 border-dark rounded-0" id="password" placeholder="Password" required>
               <label for="password">Password</label>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">           
               <button type="submit" class="btn btn-outline-primary my-2 ">LOGIN</button>         
            </div>
            <div class="mb-3 text-center">
               <small>jika belum registrasi atau belum mempunyai akun ! <a href="/sigin">registrasi disini</a></small>
            </div>
      </form>
    </div>
</div>

@endsection