@extends('navbar.nav_admin')

@section('navbar-admin')

<div class="card text-center">
    <div class="card-header">
        <a href="#" class="btn btn-primary">CREATE ABOUT</a>
    </div>
</div>
<div class="col-lg-8">
    <form method="POST" action="/admin-about">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control @error('judul') is-invalid  @enderror"
                id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('judul')}}">
            @error('judul')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
            <textarea name="desc" class="form-control @error('desc') is-invalid @enderror"
                aria-label="With textarea" placeholder="{{ old('desc')}}"></textarea>
            @error('desc')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="row justify-content-between">
            <div class="col-4">
                <button type="submit" class="btn btn-primary">Submit <img
                        src="https://img.icons8.com/ios/30/000000/submit-for-approval.png" /></button>
            </div>
            <div class="col-3">
                <a href="/admin-about" class="btn btn-dark ml-4">Cancel <img
                        src="https://img.icons8.com/ios-glyphs/30/000000/cancel.png" /></a>
            </div>
        </div>
    </form>
</div>
@endsection
