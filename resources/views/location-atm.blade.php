@extends('layouts.main')
<link rel="stylesheet" href="/css/landing.css" />
@section('container')
<section class="features">
    <div class="container container-header">
        <div class="row pt-4 pb-3">
            <h4 style="font-weight: bold; font-size: 28px; color: #343A40">Location</h4>

        </div>
        <div class="row justify-content-md-center">
            <p>The Following are locations around which there are garbage bank ATMs</p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d126748.6091245023!2d107.57311621758262!3d-6.903273916193872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!3m2!1d-6.9174638999999996!2d107.6191228!5e0!3m2!1sid!2sid!4v1650962480887!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="row pt-4 pb-3">
            <h6 style="font-weight: bold; font-size: 19px; color: #343A40">Nearby Location</h6>
            <div class="col col-card">
                <div class="card a-card mb-2">
                    <div class="card-body d-flex align-items-center">
                        <img class="me-4" src="image/atm-machine.png" alt="" width="30" height="30">
                        <div>
                            <h5 class="card-title article-title">ATM Satriamandala</h5>
                            <h6 style="color: #343A40">Location street Menteng - Tanah Abang, No 22, Museum
                                Satriamandala
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="card a-card mb-2">
                    <div class="card-body d-flex align-items-center">
                        <img class="me-4" src="image/atm-machine.png" alt="" width="30" height="30">
                        <div>
                            <h5 class="card-title article-title">ATM Satriamandala</h5>
                            <h6 style="color: #343A40">Location street Menteng - Tanah Abang, No 22, Museum
                                Satriamandala
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="card a-card mb-2">
                    <div class="card-body d-flex align-items-center">
                        <img class="me-4" src="image/atm-machine.png" alt="" width="30" height="30">
                        <div>
                            <h5 class="card-title article-title">ATM Satriamandala</h5>
                            <h6 style="color: #343A40">Location street Menteng - Tanah Abang, No 22, Museum
                                Satriamandala
                            </h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection