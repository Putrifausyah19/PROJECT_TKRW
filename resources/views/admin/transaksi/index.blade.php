@extends('backend.master')

@section('content')

<div class="card card-body">
    <a href=""><button class="btn btn-primary mb-4">Tambah Data</button></a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">KODE TRANSAKSI</th>
        <th scope="col">NAMA PELANGGAN</th>
        <th scope="col">ALAMAT</th>
        <th scope="col">NO HP</th>
        <th scope="col">JUMLAH PESANAN</th>
        <th scope="col">KODE PRODUK</th>
        <th scope="col">TOTAL PEMBAYARAN</th>
        <th scope="col">AKSI</th>
      </tr>
    </thead>
    
  </table>
  </div>

@endsection

