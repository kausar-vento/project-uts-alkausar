@extends('navbar.nav_admin')

@section('navbar-admin')

<div class="card text-center">
    <div class="card-header">
        <a href="#" class="btn btn-primary">BRAND MEREK</a>
    </div>
</div>

<a href="/admin-merek/create" class="btn btn-primary mt-3"><img
        src="https://img.icons8.com/material-outlined/24/000000/add.png" /> Tambah Merek</a>

@if (session()->has('success'))
<div class="alert alert-success mt-3" role="alert">
    {{ session('success') }}
</div>
@endif

<table class="table mt-2">
    <thead class="table-primary">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Merek</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mereks as $m)
        <tr>
            <th scope="row">{{ $m-> id}}</th>
            <td>{{ $m-> nama}}</td>
            <td>
                <a class="badge bg-info" href="{{route('admin-merek.edit', $m->id)}}"><img
                        src="https://img.icons8.com/material-two-tone/24/000000/edit--v1.png" /></a>
                <form action="{{ route('admin-merek.destroy', $m->id) }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Yakin Ingin Hapus Merek Ini?')"><img
                            style="width: 25px;"
                            src="https://img.icons8.com/fluency/48/000000/filled-trash.png" /></button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
