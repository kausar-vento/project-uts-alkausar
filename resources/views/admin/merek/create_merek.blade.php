@extends('navbar.nav_admin')

@section('navbar-admin')

<div class="card text-center">
    <div class="card-header">
        <a href="#" class="btn btn-primary">CREATE MEREK</a>
    </div>
</div>
<div class="col-lg-8">
    <form method="post" action="/admin-merek">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Merek</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid  @enderror"
                id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('nama')}}">
                @error('nama')
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
                <a href="/admin-merek" class="btn btn-dark ml-4">Cancel <img
                        src="https://img.icons8.com/ios-glyphs/30/000000/cancel.png" /></a>
            </div>
        </div>
    </form>
</div>
@endsection
