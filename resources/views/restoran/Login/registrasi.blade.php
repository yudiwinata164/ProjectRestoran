@extends('restoran/layout/contentmain')

@section('isicontent')

<div class="container row ">
    
  <div class="col-lg-6 m-auto">
    <h1  class="mt-4 mb-4 text-center"><span style="font-family: Pacifico; color:black">Enjoy</span><span style="color: red; font-family: Inspiration; font-weight: bold;">eat</span></h1>
    <hr>
    <h2 class="mt-4 mb-4 text-center fw-bold " style="font-size: 20px; ">Masukkan Data !</h2>
    

<form action="/user" method="POST">
  @csrf
  <div class="mb-2">
      <label for="">Name</label>
      <input type="text" name="name" placeholder="Masukkan Nama" class="form-control rounded-pill @error('name') is-invalid @enderror">
      @error('name')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
  </div>
  <div class="mb-2">
      <label for="">Email</label>
      <input type="email" name="email" placeholder="Masukkan Email" class="form-control rounded-pill @error('email') is-invalid @enderror">
      @error('email')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
  </div>
  <div class="mb-2">
      <label for="">Password</label>
      <input type="password" name="password" placeholder="Masukkan Password" class="form-control rounded-pill @error('password') is-invalid @enderror">
      @error('password')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
  </div>
  <div class="mb-2">
      <label for="">Level</label>
      <input type="level" name="level" placeholder="Masukkan Level" class="form-control rounded-pill @error('level') is-invalid @enderror">
      @error('level')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
  </div>
  <button class="btn btn-outline-dark rounded-pill mt-3">Tambah</button>
  <a href="/user" class="btn btn-outline-danger rounded-pill mt-3">Kembali</a>
</form>
  </div>
</div>

@endsection
