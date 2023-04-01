@extends('backend.master')

@section('content')

<div class="card card-body">
    <form action="{{ route('produk-update', $produks->id)}}" method="post">
        @method('put')
      @csrf
    <div class="form-group">
      <label>Kode Produk</label>
      <input name="kode_produk"  class="form-control" value="{{ $produks->kode_produk }}">
      
    </div>
    <div class="form-group">
      <label>Nama</label>
      <input name="nama"  class="form-control" value="{{ $produks->nama }}">
      
    </div>
    <div class="form-group">
      <label>Harga</label>
      <input name="harga"  class="form-control" value="{{ $produks->harga }}">
      
    </div>
    <div class="form-group">
      <label>Stok</label>
      <input name="stok" class="form-control" value="{{ $produks->stok }}">
      
    </div>
    <div class="form-group">
      <label>Kategori</label>
      <input name="kategori" class="form-control" value="{{ $produks->kategori }}">
    </div>
    <div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>
@endsection
  