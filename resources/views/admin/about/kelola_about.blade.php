@extends('navbar.nav_admin')

@section('navbar-admin')

<div class="card text-center">
    <div class="card-header">
        <a href="#" class="btn btn-primary">ABOUT</a>
    </div>
</div>

<a href="/admin-about/create" class="btn btn-primary mt-3"><img src="https://img.icons8.com/material-outlined/24/000000/add.png" /> Tambah
    About</a>

@if (session()->has('success'))
<div class="alert alert-success mt-3" role="alert">
    {{ session('success') }}
  </div>
@endif

<table class="table mt-2">
    <thead class="table-primary">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($abouts as $a)
        <tr>
            <th scope="row">{{ $a->id }}</th>
            <td>{{ $a-> judul}}</td>
            <td class="text-truncate" style="max-width: 150px;">{{ $a-> desc}}</td>
            <td>
                <a class="badge bg-info" href="{{route('admin-about.edit', $a->id)}}"><img
                        src="https://img.icons8.com/material-two-tone/24/000000/edit--v1.png" /></a>
                <form action="{{ route('admin-about.destroy', $a->id) }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Yakin Ingin Hapus About Ini?')"><img
                            style="width: 25px;"
                            src="https://img.icons8.com/fluency/48/000000/filled-trash.png" /></button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
