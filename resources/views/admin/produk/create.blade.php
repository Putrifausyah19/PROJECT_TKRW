@extends('backend.master')

@section('content')

<div class="card card-body">
    <form action="{{ route('produk-toko-store')}}" method="post">
      @csrf
    <div class="form-group">
      <label>Kode Produk</label>
      <input name="kode_produk"  class="form-control">
      
    </div>
    <div class="form-group">
      <label>Nama</label>
      <input name="nama"  class="form-control">
      
    </div>
    <div class="form-group">
      <label>Harga</label>
      <input name="harga"  class="form-control">
      
    </div>
    <div class="form-group">
      <label>Stok</label>
      <input name="stok" class="form-control">
      
    </div>
    <div class="form-group">
      <label>Kategori</label>
      <input name="kategori" class="form-control">
    </div>
    <div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>
@endsection
  