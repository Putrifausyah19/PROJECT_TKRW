@extends('backend.master')

@section('content')

<div class="card card-body">
    <a href="{{ route('pesanan-create')}}"><button class="btn btn-primary mb-4">Tambah Data</button></a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">KODE PESANAN</th>
        <th scope="col">KODE PRODUK</th>
        <th scope="col">NAMA PELANGGAN</th>
        <th scope="col">JUMLAH PESANAN</th>
        <th scope="col">STATUS PEMBAYARAN</th>
        <th scope="col">STATUS PESANAN</th>
        <th scope="col">AKSI</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pesanan as $key => $item)
      <tr>
          <th scope="row">{{ $key + 1}}</th>
          <td>{{ $item->kode_pesanan }}</td>
          <td>{{ $item->produk->kode_produk}}</td>
          <td>{{ $item->nama_pelanggan }}</td>
          <td>{{ $item->qty }}</td>
          <td>{{ $item->status_pembayaran }}</td>
          <td>{{ $item->status_pesanan }}</td>
  
          <td>
            <a class="btn btn-primary" href='{{ route("pesanan-edit", $item->id) }}'>Edit</a>
            <form action='{{ route('pesanan-delete', $item->id)}}' method="post" style="display: inline" class="form-check-inline">
              @csrf
              @method('DELETE')
                <button class="btn btn-danger" type="submit">Hapus</button>
            </form>
        </td>

          </tr>  
          @endforeach
  </tbody>
   
  </table>
  </div>
    
@endsection