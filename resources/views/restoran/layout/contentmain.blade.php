@extends('restoran/layout/main')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm"">
  <div class="container">
    <a class="navbar-brand fs-2" href="/"><span style="font-family: Pacifico;">Enjoy</span><span style="color: red; font-family: Inspiration; font-weight: bold;">eat</span></a>
    <button class="navbar-toggler border-0 fs-3 btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa-solid fa-bars-staggered"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-end"  id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2"  href="/dashboard"><span class="material-icons">home</span> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2"  href="/menu"><span class="material-icons">restaurant_menu</span> Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2"  href="/pesanan"><span class="material-icons">list_alt</span>Pesanan</a>
        </li>
        <li class="nav-item center">
          <a class="nav-link d-flex align-items-center gap-2" href="/user"><span class="material-icons">people</span> User</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
        @yield('isicontent')
    </div>
    <div class="row footer text-center bottom">
    <div class="row footer">
          <p>&copy; 2022 All Rights Reserved by YudiWinata x GedeDarma UAS Project</p>
        
      </div>
    </div>
@endsection