<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap online -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <title>{{ $title }}</title>
</head>
<body>

@include('component.navbar')

@yield('container')

@yield('blog')

@yield('baca')

@yield('kategori')

@yield('kategoris')

@yield('login')

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">MY BLOG</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
          @auth
          <p>wellcome , {{ auth()->user()->name}}</p>
          <p><a class="text-decoration-none text-black  btn  bg-trasnparent" href="/dashboard">DASHBOARD</a></p>
          <hr>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn  bg-trasnparent">LOGOUT</button>
          </form>
          <hr>
          @else
          <a class="nav-link mx-2 {{ ($title === 'LOGIN') ? 'active' : '' }}" href="/login">LOGIN</a>
          @endauth
        
    </div>
</div>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" ></script>
</body>
</html>