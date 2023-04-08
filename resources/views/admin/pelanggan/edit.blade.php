@extends('backend.master')

@section('content')

<div class="card card-body">
    <form action="{{ route('pelanggan-update', $pelanggan->id)}}" method="post">
        @method('put')
      @csrf
    <div class="form-group">
      <label>Kode Pelanggan</label>
      <input name="kode_pelanggan"  class="form-control" value="{{ $pelanggan->kode_pelanggan }}">
      
    </div>
    <div class="form-group">
      <label>Nama</label>
      <input name="nama"  class="form-control" value="{{ $pelanggan->nama }}">
      
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <input name="alamat"  class="form-control" value="{{ $pelanggan->alamat }}">
      
    </div>
    <div class="form-group">
      <label>No Handphone</label>
      <input name="no_hp" class="form-control" value="{{ $pelanggan->no_hp }}">
    </div>

    <div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>
@endsection
  