@extends('restoran/layout/main')

@section('content')
<div class="vh-100 d-flex justify-content-center align-items-center">
<form action="/auth" method="POST" class="cardr text-center col-12 col-lg-6 shadow-sm p-4 border">
    @csrf
    <h1 class="mb-4"><span style="font-family: Pacifico;">Enjoy</span><span style="color: red; font-family: Inspiration; font-weight: bold;">eat</span></h1>

    <div class="mb-3">
        <input name= "email" type="email" class="form-control rounded-pill" placeholder="Email">
    </div>

    <div class="mb-3">
        <input name="password" type="password" class="form-control rounded-pill" placeholder="Password">
    </div>
    <button class="w-25 rounded-pill btn btn-dark">Login</button>
    <div class="row footer text-center bottom m-0">
    <div class="row footer">
          <p>&copy; 2022 All Rights Reserved by YudiWinata x GedeDarma UAS Project</p>
        
      </div>
    </div>
</form>

</div>
@endsection