@extends('layouts.panel')

<!-- for head script -->
@section('title')
<title>SeblakGreah - Home</title>
<link rel="stylesheet" href="{{ url('/assets/splide/css/splide.min.css') }}">
<style>
    .banner {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url('/images/banner/BannerUp.png');
    }

    @media(max-width: 960px) {
        .banner {
            height: 30rem;
            background-image: url('/images/banner/Banner960.png');
        }
    }
    @media(max-width: 768px) {
        .banner {
            height: 50rem;
            background-image: url('/images/banner/Banner768.png');
        }
    }
    @media(max-width: 540px) {
        .banner {
            height: 38rem;
            background-image: url('/images/banner/Banner768.png');
        }
    }
</style>
@endsection

<!-- main pages loader -->
@section('mainpages')
<div class="banner">
    <div class="container">
        <div class="row g-2 align-items-center">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 order-2 order-sm-2 order-md-1 order-lg-1 order-xl-1">
                <div class="text-banner pb-md-5 pb-lg-5">
                    <div class="text-content text-white mb-4 mt-md-5 pt-md-3 mt-lg-5">
                        <span class="d-block display-5">Sepecial Promo Mingguan Seblak Gerah</span>
                        <p class="fs-3 fw-normal">Seblak Seafood Kompil 1</p>
                    </div>
                    <a href="#" class="btn btn-light px-3">Lihat Detail</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 order-1 order-sm-1 order-md-2 order-lg-2 order-xl-2">
                <img src="{{ url('/images/menu/Komplit1.png') }}" alt="" class="img-fluid mt-md-5 pt-md-3 mt-lg-5">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row g-3">
        <?php for ($x = 1; $x <= 12; $x++) : ?>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                <div class="card">
                    <img src="{{ url('/images/menu/Komplit1.png') }}" class="card-img-top" alt="Seblak">
                    <div class="card-body p-3">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
@endsection

<!-- for create script -->
@section('script')
<script src="{{ url('assets/splide/js/splide.min.js') }}"></script>
@endsection