@extends('backend.master')

@section('content')

<div class="card card-body">
    <a href="{{ route('transaksi-create')}}"><button class="btn btn-primary mb-4">Tambah Data</button></a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">KODE TRANSAKSI</th>
        <th scope="col">KODE PRODUK</th>
        <th scope="col">NAMA PELANGGAN</th>
        <th scope="col">ALAMAT</th>
        <th scope="col">NO HP</th>
        <th scope="col">JUMLAH PESANAN</th>
        <th scope="col">TOTAL BAYAR</th>
        <th scope="col">AKSI</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($transaksi as $key => $item)
      <tr>
          <th scope="row">{{ $key + 1}}</th>
          <td>{{ $item->kode_transaksi }}</td>
          <td>{{ $item->produk->kode_produk}}</td>
          <td>{{ $item->nama_pelanggan }}</td>
          <td>{{ $item->alamat }}</td>
          <td>{{ $item->no_hp }}</td>
          <td>{{ $item->jumlah_pesanan }}</td>
          <td>{{ $item->total_pembayaran }}</td>

          <td>
            <a class="btn btn-primary" href='{{ route("transaksi-edit", $item->id) }}'>Edit</a>
            <form action='{{ route('transaksi-delete', $item->id)}}' method="post" style="display: inline" class="form-check-inline">
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

