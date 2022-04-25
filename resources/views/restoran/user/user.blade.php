@extends('restoran/layout/contentmain')

@section('isicontent')



    <div class="container">
    <div class="text-end m-3">
    <a href="/registrasi" class="btn d-flex align-items-center gap-2"><span class="material-icons">person_add</span>Tambah User</a>
    </div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Level</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td>
                    {{ $item->name }}
                </td>
                <td>
                    {{ $item->email }}
                </td>
                <td>
                    {{ $item->level }}
                </td>
                <td>
                   <form action="#" method="POST" class="btn-group gap-2">
                       <a href="#" class="btn d-flex align-items-center gap-2 btn-outline-dark rounded-pill"><span class="material-icons">edit</span>Edit</a>
                       <button class="btn d-flex align-items-center gap-2  btn-outline-danger rounded-pill" onclick="return confirm('Yakin hapus data ?')"><span class="material-icons">delete</span>Hapus</button>
                   </form>
                </td>
            </tr>
                
            @endforeach
               

                
        </tbody>
    </table>
    </div>
    </div>

@endsection
