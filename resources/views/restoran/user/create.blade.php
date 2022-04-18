@extends('restoran/layout/contentmain')

@section('isicontent')
<form action="/user" method="POST">
    @csrf
    <div class="mb-2">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-2">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-2">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button class="btn btn-success">Tambah</button>
    <a href="/user" class="btn btn-danger">Kembali</a>
</form>
@endsection