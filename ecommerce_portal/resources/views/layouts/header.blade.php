<!doctype html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <link href="{{asset ('assets/css/style.css')}}" rel="stylesheet">

  </head>
  <body>
  <nav class="navbar navbar-expand-lg theme-navbar">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/images/logo/logo.png')}}" style="width:250px;"></a>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div>
        <form class="d-flex" role="search">
          <div class="input-group">
          <input class="form-control form-control-sm" style="width:350px;" type="search" placeholder="Search for Products" aria-label="Search">
          <button class="btn btn-light text-secondary btn-sm" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
      </form>
    </div>
    <div>
        
    <a href="#" class="text-decoration-none text-light">Become a Seller</a>
      <a href="{{url('cart-list/product')}}" class="btn theme-green-btn btn-sm text-light ms-1 rounded-pill px-3 py-2"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
      <a href="{{url('login')}}" class="btn theme-orange-btn btn-sm text-light ms-1 rounded-pill px-3 py-2"><i class="fa-solid fa-user"></i> Login</a>
    </div>
  </div>
</nav>

<!-- Category Nav -->

<nav class="navbar navbar-expand-lg  shadow p-3 bg-body-tertiary rounded">
  <div class="container">
    
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="nav">
        <!-- <li class="nav-item">
          <a class="nav-link active text-dark" href="{{url('category/electronics')}}">Mobile</a>
        </li> -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="{{url('category/electronics')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mobile
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('category/electronics/tv')}}">Oppo</a></li>
            <li><a class="dropdown-item" href="#">Vivo</a></li>
            <li><a class="dropdown-item" href="#">Samsung</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="{{url('category/electronics')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fashion
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('category/electronics/tv')}}">Shoes</a></li>
            <li><a class="dropdown-item" href="#">Bags</a></li>
            <li><a class="dropdown-item" href="#">Clothes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="{{url('category/electronics')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Electronics
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('category/electronics/tv')}}">TV</a></li>
            <li><a class="dropdown-item" href="#">Washing Machine</a></li>
            <li><a class="dropdown-item" href="#">Watches</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="{{url('category/electronics')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Furniture
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('category/electronics/tv')}}">Bed</a></li>
            <li><a class="dropdown-item" href="#">Sofa</a></li>
            <li><a class="dropdown-item" href="#">Table</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="{{url('category/electronics')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Grocerry
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('category/electronics/tv')}}">Atta</a></li>
            <li><a class="dropdown-item" href="#">Oil</a></li>
            <li><a class="dropdown-item" href="#">Surf</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="{{url('category/electronics')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Applinces
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('category/electronics/tv')}}">TV</a></li>
            <li><a class="dropdown-item" href="#">Washing Machine</a></li>
            <li><a class="dropdown-item" href="#">Refrigerators</a></li>
          </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link active text-dark" href="{{url('category/electronics/tv')}}">Applinces</a>
        </li> -->
        
      </ul>
    </div>
  </div>
</nav>