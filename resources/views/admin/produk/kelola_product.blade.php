@extends('navbar.nav_admin')

@section('navbar-admin')
<div class="card text-center">
    <div class="card-header">
        <a href="#" class="btn btn-primary">PRODUCT</a>
    </div>
</div>
<br>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

<a href="/admin-product/create" class="btn btn-primary mt-3"><img src="https://img.icons8.com/material-outlined/24/000000/add.png"/> Tambah Product</a>

<table class="table mt-2">
    <thead class="table-primary">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Spesifikasi</th>
            <th scope="col">Merek</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produks as $p)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $p-> nama}}</td>
            <td class="text-truncate" style="max-width: 150px;">{{ $p-> spesifikasi}}</td>
            <td>{{ $p-> nama_merek}}</td>
            <td>
                <a class="badge bg-info" href="{{route('admin-product.edit', $p->id)}}"><img
                        src="https://img.icons8.com/material-two-tone/24/000000/edit--v1.png" /></a>
                <form action="{{ route('admin-product.destroy', $p->id) }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Yakin Ingin Hapus Product Ini?')"><img
                            style="width: 25px;"
                            src="https://img.icons8.com/fluency/48/000000/filled-trash.png" /></button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
