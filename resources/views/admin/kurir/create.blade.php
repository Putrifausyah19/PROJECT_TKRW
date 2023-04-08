@extends('backend.master')

@section('content')

<div class="card card-body">
    <form action="{{ route('kurir-toko-store')}}" method="post">
      @csrf
    <div class="form-group">
      <label>Kode Kurir</label>
      <input name="kode_kurir"  class="form-control">
      
    </div>
    <div class="form-group">
      <label>Nama</label>
      <input name="nama"  class="form-control">
      
    </div>
    <div class="form-group">
      <label>No Handphone</label>
      <input name="no_hp"  class="form-control">
    </div>
    
    <div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>

@endsection
  