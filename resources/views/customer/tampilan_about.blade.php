@extends('navbar.nav')

@section('navbar-alka')
<div class="container-xxl">
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">headline</h1>
            <p class="lead fw-normal">do you need a laptop, pc, or cellphone? but your budget is small, don't worry, the
                Casscomm store provides all of that at an affordable price and definitely of great quality!!!.</p>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
</div>

@foreach ($abouts as $data)

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="customer/img/logo.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">{{$data->judul}}</h1>
            <p class="lead">{{$data->desc}}</p>
        </div>
    </div>
</div>

@endforeach

@endsection
