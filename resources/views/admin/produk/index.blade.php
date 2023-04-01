@extends('backend.master')

@section('content')

<div class="card card-body">
    <a href="{{ route('produk-create')}}"><button class="btn btn-primary mb-4">Tambah Data</button></a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">KODE_PRODUK</th>
        <th scope="col">NAMA</th>
        <th scope="col">HARGA</th>
        <th scope="col">STOK</th>
        <th scope="col">KATEGORI</th>
        <th scope="col">AKSI</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($produks as $key => $item)
      <tr>
          <th scope="row">{{ $key + 1}}</th>
          <td>{{ $item->kode_produk }}</td>
          <td>{{ $item->nama }}</td>
          <td>{{ $item->harga }}</td>
          <td>{{ $item->stok }}</td>
          <td>{{ $item->kategori }}</td>
  
          <td>
            <a class="btn btn-primary" href='{{ route("produk-edit", $item->id) }}'>Edit</a>
            <form action='{{ route('produk-delete', $item->id) }}' method="post" style="display: inline" class="form-check-inline">
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

