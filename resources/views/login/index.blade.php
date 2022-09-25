@extends('layout.main')

@include('partials.nav')

@section('section')
<section class="my-lg-5 py-lg-3 mt-md-3 py-md-3 mt-sm-3 py-sm-3 mt-3 py-3">
    <div class="row justify-content-center mb-3">
        <div class="col-lg-5">
            <div class="row justify-content-center">
                <div class="col-3 ">
                    <img src="img/rafatek.png" class=" w-100  rounded-circle shadow" alt="">
                </div>
                <div class="col-3 ">
                    <img src="img/rafatek.png" class="w-100  rounded-circle shadow" alt="">
                </div>
                <div class="col-3 ">
                    <img src="img/rafatek.png" class="w-100  rounded-circle shadow" alt="">
                </div>
            </div>

            <h4 class="mt-4 text-center fw-semibold title-pmiirayon">PMII RAYON KOMNIVPAM</h4>
        </div>

    </div>
    @if ('message')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            {!! session('message') !!}
        </div>
    </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5   shadow form-daftar   p-lg-5 p-md-5 p-sm-4 p-4">
                <h4 class="text-center mb-4 title-daftar">Login</h1>
                    <form action="/login" class="row g-3" method="post">
                        @csrf
                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                id="username" name="username" value="{{ old('username') }}" autofocus
                                placeholder="Input your username">
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" value="{{ old('password') }}"
                                placeholder="Input your password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </div>
                    </form>
                    <a href="#" class="d-block text-center mb-3 text-decoration-none"><small>Back to Home</small></a>
            </div>
        </div>
    </div>
</section>
@endsection