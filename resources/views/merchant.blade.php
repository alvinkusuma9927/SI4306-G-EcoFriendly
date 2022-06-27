@extends('layouts.main')
<link rel="stylesheet" href="/css/landing.css" />
@section('container')
<section class="header">
    <div class="container container-header">
        <div class="row r-header">
            <div class="col-md-7 isi-header">
                <div class="row">
                    <div class="judul">Be <span class="semi-judul" style="color:#51cd83">a part.</span>
                    </div>
                    <div class="semi-judul" style="color:#51cd83">Connect <span class="semi-judul"
                            style="color:#000000">and</span> <span class="semi-judul"
                            style="color:#51cd83">evolve</span>
                    </div>
                </div>
                <div class="row">
                    <h6 class="desk">Selamatkan bumi dengan menggunakan produk ramah lingkungan & berkualitas hasil daur
                        ulang botol plastik dengan teknologi modern.</h6>
                </div>
            </div>
            <div class="col-4">
                <img class="img-header" src="/image/header-merchant.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="article">
    <div class="container">
        <div class="row pb-4">
            <h4 class="mb-3" style="font-weight: bold; font-size: 28px; color: #343A40">Merchant</h4>
            <div class="d-flex">
                <div class="col">
                    <button class="btn btn-sm">T-shirt</button>
                    <button class="btn-light btn-sm">Tote Bag</button>
                    <button class="btn-light btn-sm">Pouch Bag</button>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col col-card mb-2">
                <div class="card a-card d-flex flex-column align-items-center mt-3" style="height: 22rem; width: 22rem">
                    <p class="mt-4" style="font-weight: bold; font-size: 22px; color: #343A40">TS Become Friendly</p>
                    <p style="font-size: 15px; color: #343A40">Rp 120.000</p>
                    <img src="image/baju1.png" class="card-img-center" alt="">
                </div>
            </div>
            <div class="col col-card mb-2">
                <div class="card a-card d-flex flex-column align-items-center mt-3" style="height: 22rem; width: 22rem">
                    <p class="mt-4" style="font-weight: bold; font-size: 22px; color: #343A40">TS Less Plastic</p>
                    <p style="font-size: 15px; color: #343A40">Rp 120.000</p>
                    <img src="image/baju2.png" class="card-img-center" alt="">
                </div>
            </div>
            <div class="col col-card mb-2">
                <div class="card a-card d-flex flex-column align-items-center mt-3" style="height: 22rem; width: 22rem">
                    <p class="mt-4" style="font-weight: bold; font-size: 22px; color: #343A40">TS New Life</p>
                    <p style="font-size: 15px; color: #343A40">Rp 120.000</p>
                    <img src="image/baju3.png" class="card-img-center" alt="">
                </div>
            </div>
            <div class="col col-card mb-2">
                <div class="card a-card d-flex flex-column align-items-center mt-3" style="height: 22rem; width: 22rem">
                    <p class="mt-4" style="font-weight: bold; font-size: 22px; color: #343A40">TS Baby Earth</p>
                    <p style="font-size: 15px; color: #343A40">Rp 120.000</p>
                    <img src="image/baju4.png" class="card-img-center" alt="">
                </div>
            </div>
            <div class="col col-card mb-2">
                <div class="card a-card d-flex flex-column align-items-center mt-3" style="height: 22rem; width: 22rem">
                    <p class="mt-4" style="font-weight: bold; font-size: 22px; color: #343A40">TS Keep Earth</p>
                    <p style="font-size: 15px; color: #343A40">Rp 120.000</p>
                    <img src="image/baju5.png" class="card-img-center" alt="">
                </div>
            </div>
            <div class="col col-card mb-2">
                <div class="card a-card d-flex flex-column align-items-center mt-3" style="height: 22rem; width: 22rem">
                    <p class="mt-4" style="font-weight: bold; font-size: 22px; color: #343A40">TS Care Earth</p>
                    <p style="font-size: 15px; color: #343A40">Rp 120.000</p>
                    <img src="image/baju6.png" class="card-img-center" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection