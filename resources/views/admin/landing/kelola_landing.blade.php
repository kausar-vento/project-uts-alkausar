@extends('navbar.nav_admin')

@section('navbar-admin')

<div class="card text-center">
    <div class="card-header">
        <a href="#" class="btn btn-primary">LANDING</a>
    </div>
</div>

@if (session()->has('success'))
<div class="alert alert-success mt-3" role="alert">
    {{ session('success') }}
  </div>
@endif

<table class="table mt-2">
    <thead class="table-primary">
        <tr>
            <th scope="col">Tittle</th>
            <th scope="col">Isi</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($landings as $l)
        <tr>
            <td style="max-width: 100px;">{{ $l-> tittle}}</td>
            <td class="text-truncate" style="max-width: 250px;">{{ $l-> isi}}</td>
            <td>
                <a class="badge bg-info" href="{{route('admin-landing.edit', $l->id)}}"><img
                        src="https://img.icons8.com/material-two-tone/24/000000/edit--v1.png" /></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
