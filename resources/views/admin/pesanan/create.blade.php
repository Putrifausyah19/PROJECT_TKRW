@extends('backend.master')

@section('content')

<div class="card card-body">
    <form action="{{ route('pesanan-toko-store')}}" method="post">
      @csrf
    <div class="form-group">
      <label>Kode Pesanan</label>
      <input name="kode_pesanan"  class="form-control">
      
    </div>

    <div class="form-group">
        <select class="form-control" name="transaksi_id">
            <option label="Pilih Transaksi"></option>
            @foreach ($transaksi as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>                
            @endforeach
        </select>  
      </div>

      <div class="form-group">
        <select class="form-control" name="kurir_id">
            <option label="Pilih kurir"></option>
            @foreach ($kurir as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>                
            @endforeach
        </select>  
      </div>

  
    <div class="form-group">
      <label>Status Pembayaran</label>
      <input name="status_pembayaran" class="form-control">
      
    </div>
    <div class="form-group">
      <label>Status Pesanan</label>
      <input name="status_pesanan" class="form-control">
    </div>
    <div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>
@endsection
  