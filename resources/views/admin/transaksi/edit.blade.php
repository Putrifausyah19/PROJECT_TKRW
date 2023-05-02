@extends('backend.master')

@section('content')

<div class="card card-body">
    <form action="{{ route('transaksi-update', $transaksi->id)}}" method="post">
        @method('put')
      @csrf
    <div class="form-group">
      <label>Kode Transaksi</label>
      <input name="kode_transaksi"  class="form-control" value="{{ $transaksi->kode_transaksi }}">
      
    </div>

    <div class="form-group">
      <select class="form-control" name="produk_id">
          <option label="Pilih produk"></option>
          @foreach ($produk as $item)
          <option value="{{ $item->id }}">{{ $item->nama }}</option>                
          @endforeach
      </select>  
    </div>
    <div class="form-group">
      <label>Nama Pelanggan</label>
      <input name="nama_pelanggan"  class="form-control" value="{{ $transaksi->nama_pelanggan }}">
    </div>

    <div class="form-group">
      <label>Alamat</label>
      <input name="alamat"  class="form-control" value="{{ $transaksi->alamat }}">
    </div>

    <div class="form-group">
      <label>No Handphone</label>
      <input name="no_hp"  class="form-control" value="{{ $transaksi->no_hp }}">
    </div>

    
    
    <div class="form-group">
      <label>Jumlah_Pesanan</label>
      <input name="jumlah_pesanan" class="form-control" value="{{ $transaksi->jumlah_pesanan }}">
      
    </div>
    <div class="form-group">
      <label>Total_Bayar</label>
      <input name="total_pembayaran" class="form-control" value="{{ $transaksi->total_pembayaran }}">
    </div>
    <div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>
@endsection
  