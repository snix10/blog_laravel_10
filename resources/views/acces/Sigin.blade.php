@extends('main')

@section('login')

<div class="row justify-content-center mx-1 mb-3">
    <div class="col-lg-4 border border-2 border-dark rounded-3 ">
    <h3 class="text-center display-6">FORM SIGIN</h3>
    <form action="/sigin" method="post">
    @csrf
        <div class="form-floating  my-2">
            <input type="text" name="name" class="form-control border-2 border-top-0 border-start-0 border-end-0 border-dark rounded-0  @error('name') is-invalid @enderror"  id="name" placeholder="name" required value="{{ old('name') }}">         
            <label for="name">Name</label>
            @error('name')
                <small class="indvalid-feedback text-danger"> -
                    {{ $message }}  
                </small>
            @enderror
        </div>
        <div class="form-floating  my-2">
            <input type="text" name="username" class="form-control border-2 border-top-0 border-start-0 border-end-0 border-dark rounded-0 @error('username') is-invalid @enderror"  id="username" placeholder="username" required value="{{ old('username') }}">
            <label for="username">UserName </label>
            @error('username')
                <small class="indvalid-feedback text-danger"> -
                    {{ $message }}  
                </small>
            @enderror
        </div>
        <div class="form-floating  my-2">
            <input type="email" name="email" class="form-control border-2 border-top-0 border-start-0 border-end-0 border-dark rounded-0 @error('email') is-invalid @enderror"  id="email" placeholder="name@example.com" required value="{{ old('email') }}">
            <label for="email">Email address</label>
            @error('email')
                <small class="indvalid-feedback text-danger"> -
                    {{ $message }}  
                </small>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control border-2 border-top-0 border-start-0 border-end-0 border-dark rounded-0 @error('password') is-invalid @enderror" id="password" placeholder="Password" required >
            <label for="password">Password</label>
            @error('password')
                <small class="indvalid-feedback text-danger"> -
                    {{ $message }}  
                </small>
            @enderror
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">           
            <button type="submit" class="btn btn-outline-primary my-2 ">SIGIN</button>         
        </div>
        <div class="mb-3 text-center">
            <small>jika sudah terdaftar atau sudah mempunyai akun ! <a href="/login">Masuk atau Login disini</a></small>
        </div>
    </form>    
    </div>
</div>


@endsection