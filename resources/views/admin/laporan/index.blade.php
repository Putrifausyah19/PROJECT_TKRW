@extends('backend.master')

@section('content')

<div class="card card-body">
    <a href=""><button class="btn btn-primary mb-4">Tambah Data</button></a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">ID TRANSAKSI</th>
        <th scope="col">TGL TRANSAKSI</th>
        <th scope="col">NAMA PELANGGAN</th>
        <th scope="col">NAMA BARANG</th>
        <th scope="col">JUMLAH PESANAN</th>
        <th scope="col">TOTAL BAYAR</th>
        <th scope="col">AKSI</th>
      </tr>
    </thead>
   
  </table>
  </div>
    
@endsection