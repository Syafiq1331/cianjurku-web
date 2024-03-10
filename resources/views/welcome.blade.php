@extends('layouts.guest.app', ['title' => 'Dashboard'])

@section('content')
    {{-- section hero --}}
    <section class="hero"></section>

    {{-- Slider --}}
    {{-- Search Slider library for laravel --}}

    {{-- Section info penting --}}
    <div class="container-fluid bg-card-custom py-4">
        <div class="container py-3">
            <div>
                <h3 class="text-success">Info Penting</h3>
                <hr class="text-warning bg-warning" style="margin-top : -5px; width: 10%; height: 5px;">
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <p>Informasi Dari Pemerintahan Kabupaten Cianjur</p>
                <button class="text-white btn btn-danger">
                    Selengkapnya
                </button>
            </div>

            {{-- List article --}}
            <div class="row">
                <div class="col-lg-3 my-2">
                    <div class="card custom-card"
                        style="background-image: url('{{ asset('/artikel/01.webp') }}'); padding-top: 50%;">
                        <div class="card-body">
                            <p class="card-text text-white text-uppercase fw-semibold"><small>Selamat hari pers
                                    nasional</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-2">
                    <div class="card custom-card"
                        style="background-image: url('{{ asset('/artikel/01.webp') }}'); padding-top: 50%;">
                        <div class="card-body">
                            <p class="card-text text-white text-uppercase fw-semibold"><small>Selamat hari pers
                                    nasional</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-2">
                    <div class="card custom-card"
                        style="background-image: url('{{ asset('/artikel/01.webp') }}'); padding-top: 50%;">
                        <div class="card-body">
                            <p class="card-text text-white text-uppercase fw-semibold"><small>Selamat hari pers
                                    nasional</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-2">
                    <div class="card custom-card"
                        style="background-image: url('{{ asset('/artikel/01.webp') }}'); padding-top: 50%;">
                        <div class="card-body">
                            <p class="card-text text-white text-uppercase fw-semibold"><small>Selamat hari pers
                                    nasional</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section berita, agenda kota, Pemilu serentak --}}
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-4">
                <div>
                    <h3 class="text-success">Berita</h3>
                    <hr class="text-warning bg-warning" style="margin-top : -5px; width: 10%; height: 5px;">
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p>Berita Terkini Seputar Pemerintah Kabupaten Cianjur</p>
                    <button class="text-white btn btn-danger">
                        Selengkapnya
                    </button>
                </div>
            </div>
            <div class="col-lg-4">
                <div>
                    <h3 class="text-success">Agenda Kota</h3>
                    <hr class="text-warning bg-warning" style="margin-top : -5px; width: 10%; height: 5px;">
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p>Agenda Kegiatan Terkini</p>
                    <button class="text-white btn btn-danger">
                        Selengkapnya
                    </button>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>


    <div class="container-fluid bg-card-custom py-5 mt-5">
        <div class="container">
            <div>
                <div>
                    <h3 class="text-success">Survey kepuasan masyarakat</h3>
                    <hr class="text-warning bg-warning-custom" style="margin-top : -5px; width: 10%; height: 5px;">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 my-2">
                    <button class="btn btn-danger w-100 py-3 text-uppercase">
                        Bidang persandian
                    </button>
                </div>
                <div class="col-lg-3 my-2">
                    <button class="btn btn-danger w-100 py-3 text-uppercase">
                        Bidang Data
                    </button>
                </div>
                <div class="col-lg-3 my-2">
                    <button class="btn btn-danger w-100 py-3 text-uppercase">
                        Cianjur FM
                    </button>
                </div>
            </div>
        </div>

        <div class="container py-5 mt-2">
            <div>
                <div>
                    <h3 class="text-success">LAYANAN PUBLIK</h3>
                    <hr class="text-warning bg-warning-custom" style="margin-top : -5px; width: 10%; height: 5px;">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 my-2">
                    <button class="btn btn-danger w-100 py-3 text-uppercase">
                        PPID
                    </button>
                </div>
                <div class="col-lg-3 my-2">
                    <button class="btn btn-danger w-100 py-3 text-uppercase">
                        Sirup
                    </button>
                </div>
                <div class="col-lg-3 my-2">
                    <button class="btn btn-danger w-100 py-3 text-uppercase">
                        LSPE
                    </button>
                </div>
                <div class="col-lg-3 my-2">
                    <button class="btn btn-danger w-100 py-3 text-uppercase">
                        SP4N lapor
                    </button>
                </div>
                <div class="col-lg-3 my-2">
                    <button class="btn btn-danger w-100 py-3 text-uppercase">
                        Cek tagihan PBB
                    </button>
                </div>
            </div>
        </div>

        {{-- Foto --}}
        <div class="container py-2 mt-2">
            <div>
                <div>
                    <h3 class="text-success">Foto</h3>
                    <hr class="text-warning bg-warning" style="margin-top : -5px; width: 10%; height: 5px;">
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p>Informasi Pemkab Cianjur Berupa Foto </p>
                    <button class="text-white btn btn-danger">
                        Selengkapnya
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 my-2">
                    <a href="">
                        <div class="card custom-card"
                            style="background-image: url('{{ asset('/artikel/02.webp') }}'); padding-top: 50%;">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 my-2">
                    <a href="">
                        <div class="card custom-card"
                            style="background-image: url('{{ asset('/artikel/02.webp') }}'); padding-top: 50%;">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 my-2">
                    <a href="">
                        <div class="card custom-card"
                            style="background-image: url('{{ asset('/artikel/02.webp') }}'); padding-top: 50%;">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 my-2">
                    <a href="">
                        <div class="card custom-card"
                            style="background-image: url('{{ asset('/artikel/02.webp') }}'); padding-top: 50%;">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        {{-- Video --}}
        <div class="container py-2 mt-2">
            <div>
                <div>
                    <h3 class="text-success">Video</h3>
                    <hr class="text-warning bg-warning" style="margin-top : -5px; width: 10%; height: 5px;">
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p>Informasi Pemkab Cianjur Yang Disajikan Dalam Bentuk Video</p>
                    <button class="text-white btn btn-danger">
                        Selengkapnya
                    </button>
                </div>
            </div>
        </div>

        {{-- Wisata --}}
        <div class="container py-2 mt-2">
            <div>
                <div>
                    <h3 class="text-success">Wisata</h3>
                    <hr class="text-warning bg-warning" style="margin-top : -5px; width: 10%; height: 5px;">
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p>Informasi Seputar Wisata Cianjur</p>
                    <button class="text-white btn btn-danger">
                        Selengkapnya
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 my-2">
                    <a href="">
                        <div class="card custom-card"
                            style="background-image: url('{{ asset('/artikel/03.webp') }}'); padding-top: 50%;">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 my-2">
                    <a href="">
                        <div class="card custom-card"
                            style="background-image: url('{{ asset('/artikel/03.webp') }}'); padding-top: 50%;">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 my-2">
                    <a href="">
                        <div class="card custom-card"
                            style="background-image: url('{{ asset('/artikel/03.webp') }}'); padding-top: 50%;">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 my-2">
                    <a href="">
                        <div class="card custom-card"
                            style="background-image: url('{{ asset('/artikel/03.webp') }}'); padding-top: 50%;">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Section Social media --}}
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3 py-2">
                <a class="twitter-timeline" href="https://twitter.com/pemkabcjr" data-width="300" data-height="700"
                    data-chrome="noscrollbar" data-theme="dark" data-link-color="#E95F28" data-tweet-limit="3">
                </a>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="col-lg-3 py-2">
                <iframe
                    src="https://web.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fpemkabcjr%2F&tabs=timeline&width=300&height=250&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div>
    </div>
@endsection
