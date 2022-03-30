
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>BIENVENIDOS</title>
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <link href="{{asset('resoucer/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('resoucer/css/blog.css')}}" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="{{route('home')}}">Laika</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-center">
      <a class="p-2 link-secondary" href="{{route('race')}}">Razas</a>
      <a class="p-2 link-secondary" href="{{route('pet')}}">Mascotas</a>
    </nav>
  </div>
</div>

@yield('contents')

<footer class="blog-footer">
  <p>
    <a href="{{route('home')}}">LAIKA ~ 2022</a>
  </p>
</footer>
    
  </body>
</html>
