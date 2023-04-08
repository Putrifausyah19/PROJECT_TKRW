@extends('backend.master')

@section('content')

<div class="card card-body">
    <a href="{{ route('kurir-create')}}"><button class="btn btn-primary mb-4">Tambah Data</button></a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">KODE_KURIR</th>
        <th scope="col">NAMA</th>
        <th scope="col">NO HANDPHONE</th>
        <th scope="col">AKSI</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($kurir as $key => $item)
      <tr>
          <th scope="row">{{ $key + 1}}</th>
          <td>{{ $item->kode_kurir }}</td>
          <td>{{ $item->nama }}</td>
          <td>{{ $item->no_hp }}</td>
  
          <td>
            <a class="btn btn-primary" href='{{ route('kurir-edit', $item->id)}}'>Edit</a>
            <form action='{{ route('kurir-delete', $item->id)}}' method="post" style="display: inline" class="form-check-inline">
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

