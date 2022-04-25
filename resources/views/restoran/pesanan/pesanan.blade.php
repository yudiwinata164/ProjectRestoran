@extends('restoran/layout/contentmain')

@section('isicontent')
<div class="container-fluid" id="font-st">
<h4 class="mt-3 fw-bold d-flex align-items-center"> <span class="material-icons me-2">list_alt</span>Data Pesanan</h4>
<div class="table-responsive mt-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Pesanan</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Pesanan</th>
      <th scope="col">Jenis Pesanan</th>
      <th scope="col">Total Bayar</th>
      <th scope="col">Kembalian</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row">1</th>
      <td>00000000001</td>
      <td>Yudi Ajuss</td>
      <td>Wagyu Steak A5</td>
      <td>Makanan</td>
      <td>Rp. 2.000.000</td>
      <td>Rp. 0</td>
      <td>
          <form action="#" method="POST" class="btn-group gap-2">
              <a href="#" class="btn d-flex align-items-center gap-2 btn-outline-dark rounded-pill"><span class="material-icons">edit</span>Edit</a>
              <button class="btn d-flex align-items-center gap-2 btn-outline-danger rounded-pill" onclick="return confirm('Yakin hapus data ?')"><span class="material-icons">delete</span>Hapus</button>
          </form>
      </td>
    </tr>
    <tr></tr>
  </tbody>
</table>
</div>
</div>

@endsection