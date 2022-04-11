@extends('navbar.nav_admin')

@section('navbar-admin')

<div class="card text-center">
    <div class="card-header">
        <a href="#" class="btn btn-primary">EDIT LANDING</a>
    </div>
</div>
<div class="col-lg-8">
    <form method="post" action="{{route('admin-landing.update', $data->id)}}">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tittle</label>
            <input type="text" name="tittle" class="form-control @error('tittle') is-invalid  @enderror"
                id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('tittle', $data->tittle)}}">
                @error('tittle')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Isi</label>
            <textarea name="isi" class="form-control @error('isi') is-invalid @enderror"
                aria-label="With textarea"  placeholder="{{ old('isi', $data->isi)}}">{{$data->isi}}</textarea>
            @error('isi')
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
                <a href="/admin-landing" class="btn btn-dark ml-4">Cancel <img
                        src="https://img.icons8.com/ios-glyphs/30/000000/cancel.png" /></a>
            </div>
        </div>
    </form>
</div>
@endsection
