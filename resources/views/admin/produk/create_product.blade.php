@extends('navbar.nav_admin')

@section('navbar-admin')

<div class="card text-center">
    <div class="card-header">
        <a href="#" class="btn btn-primary">CREATE PRODUCT</a>
    </div>
</div>
<div class="col-lg-8">
    <form method="POST" action="{{ route('admin-product.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('nama')}}">
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Spesifikasi</label>
            <textarea name="spesifikasi" class="form-control @error('spesifikasi') is-invalid @enderror"
                aria-label="With textarea" placeholder="{{ old('spesifikasi')}}"></textarea>
            @error('spesifikasi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <select name="nama_merek" class="form-select" aria-label="Default select example">
                <option selected>Tentukan Merek</option>
                <option value="Asus">Asus</option>
                <option value="Oppo">Oppo</option>
                <option value="Xiomi">Xiomi</option>
                <option value="Samsung">Samsung</option>
            </select>
        </div>
        <div class="row justify-content-between">
            <div class="col-4">
                <button type="submit" class="btn btn-primary">Submit <img
                        src="https://img.icons8.com/ios/30/000000/submit-for-approval.png" /></button>
            </div>
            <div class="col-3">
                <a href="/admin-product" class="btn btn-dark ml-4">Cancel <img
                        src="https://img.icons8.com/ios-glyphs/30/000000/cancel.png" /></a>
            </div>
        </div>
    </form>
</div>
@endsection
