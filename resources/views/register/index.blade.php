@extends('layout.main')

@include('partials.nav')

@section('section')
<section class="my-lg-5 py-lg-3 mt-md-3 py-md-3 mt-sm-3 py-sm-3 mt-3 py-3">
    <div class="row justify-content-center mb-3">
        <div class="col-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-3 ">
                    <img src="img/rafatek.png" class="w-100 rounded-circle shadow" alt="">
                </div>
                <div class="col-lg-3 ">
                    <img src="img/rafatek.png" class="w-100 rounded-circle shadow" alt="">
                </div>
                <div class="col-lg-3 ">
                    <img src="img/rafatek.png" class="w-100 rounded-circle shadow" alt="">
                </div>
            </div>

            <h4 class="mt-4 text-center fw-semibold title-pmiirayon">PMII RAYON KOMNIVPAM</h4>
        </div>

    </div>
    <div class="row justify-content-center">
        <div class="col-lg-5   shadow form-daftar   py-3 px-3">
            <h4 class="text-center mb-4 title-daftar">Daftar</h1>
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2"
                            placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                    </div>
                </form>
        </div>
    </div>
</section>
@endsection