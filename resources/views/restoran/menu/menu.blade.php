@extends('restoran/layout/contentmain')

@section('isicontent')
    <div class="text-end m-3">
    <a href="#" class="btn d-flex align-items-center gap-2"><span class="material-icons">
add_chart
</span>Tambah Menu</a>
    </div>
<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Menu</th>
      <th scope="col">Nama Menu</th>
      <th scope="col">Jenis Menu</th>
      <th scope="col">Harga</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    
    @foreach ($menus as $item)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td>
                    {{ $item->KodeMenu }}
                </td>
                <td>
                    {{ $item->NamaMenu }}
                </td>
                <td>
                  {{ $item->JenisMenu }}
              </td>
                <td>
                    {{ $item->Harga }}
                </td>
                <td>
                   <form action="#" method="POST" class="btn-group">
                       <a href="#" class="btn d-flex align-items-center gap-2"><span class="material-icons">edit</span>Edit</a>
                       <button class="btn d-flex align-items-center gap-2" onclick="return confirm('Yakin hapus data ?')"><span class="material-icons">delete</span>Hapus</button>
                   </form>
                </td>
            </tr>
                
            @endforeach
    <tr></tr>
  </tbody>
</table>
</div>
</div>
</div>


@endsection