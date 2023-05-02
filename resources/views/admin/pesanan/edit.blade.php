@extends('backend.master')

@section('content')

<div class="card card-body">
    <form action="{{ route('pesanan-update', $pesanans->id)}}" method="post">
      @method('put')
      @csrf
      
    <div class="form-group">
      <label>Kode Pesanan</label>
      <input name="kode_pesanan"  class="form-control" value="{{ $pesanans->kode_pesanan }}">
      
    </div>

    <div class="form-group">
        <select class="form-control" name="transaksi_id" >
            <option label="Pilih Transaksi"></option>
            @foreach ($transaksi as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>                
            @endforeach
        </select>  
      </div>

      <div class="form-group">
        <select class="form-control" name="kurir_id" >
            <option label="Pilih Kurir"></option>
            @foreach ($kurir as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>                
            @endforeach
        </select>  
      </div>

    <div class="form-group">
      <label>Status Pembayaran</label>
      <input name="status_pembayaran" class="form-control" value="{{ $pesanans->status_pembayaran }}">
      
    </div>
    <div class="form-group">
      <label>Status Pesanan</label>
      <input name="status_pesanan" class="form-control" value="{{ $pesanans->status_pesanan }}">
    </div>
    <div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>
@endsection
  