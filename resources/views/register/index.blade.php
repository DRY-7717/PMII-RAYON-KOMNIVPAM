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
                <h4 class="text-center mb-4 title-daftar">Daftar</h1>
                    <form action="/daftar" class="row g-3" method="post">
                        @csrf
                        <div class="col-md-6">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                name="nama" value="{{ old('nama') }}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control @error('nama') is-invalid @enderror" id="tgl_lahir"
                                name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                            @error('tgl_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                name="alamat" value="{{ old('alamat') }}">
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="no_telp" class="form-label">No Telp / WA</label>
                            <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp"
                                name="no_telp" value="{{ old('no_telp') }}">
                            @error('no_telp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="minat_bakat" class="form-label">Minat Bakat</label>
                            <input type="text" class="form-control @error('minat_bakat') is-invalid @enderror"
                                id="minat_bakat" name="minat_bakat" value="{{ old('minat_bakat') }}">
                            @error('minat_bakat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-12">

                            <label for="fakultas" class="form-label">Fakultas</label>
                            <select class="form-select" name="fakultas" id="fakultas">
                                <option>Pilih Fakultas</option>
                                <option value="hukum">Hukum</option>
                                <option value="ekonomi">Ekonomi</option>
                                <option value="teknik">Teknik</option>
                            </select>
                            @error('minat_bakat')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary w-100">Daftar</button>
                        </div>
                    </form>
                    <a href="#" class="d-block text-center mb-3 text-decoration-none"><small>Back to Home</small></a>
            </div>
        </div>
    </div>
</section>
@endsection