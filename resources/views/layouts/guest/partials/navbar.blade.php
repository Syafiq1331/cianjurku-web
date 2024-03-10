{{-- Waktu dan social media --}}
<div class="d-flex pt-4 pb-2 container justify-content-between">
    {{-- Waktu --}}
    <div class="waktu">
        {{-- Waktu sekarang dengan format: Hari, tanggal-bulan-tahun --}}
        {{ \Carbon\Carbon::now()->isoFormat('dddd, DD MMMM YYYY') }}
    </div>


    {{-- Social media --}}
    <div class="social-media d-flex">
        {{-- Pake icon dari bootstrap icon --}}
        <a href="#" class="social-media-hover mx-2"><i class="bi bi-facebook"></i></a>
        <a href="#" class="social-media-hover mx-2"><i class="bi bi-twitter"></i></a>
        <a href="#" class="social-media-hover mx-2"><i class="bi bi-instagram"></i></a>
        <a href="#" class="social-media-hover mx-2"><i class="bi bi-youtube"></i></a>
    </div>

</div>

<nav class="navbar navbar-expand-lg bg-white sticky-top">
    <div class="container py-3">
        <img src="{{ asset('logo.jpg') }}" alt="logo" class="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 20px;">
            <ul class="navbar-nav me-auto me-5 mb-2 mb-lg-0">
                <li class="nav-item mx-2">
                    <a class="nav-link {{ Request::is('/') ? 'border border-danger bg-danger text-white px-2' : '' }} text-uppercase fw-bold"
                        href="/">Beranda</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ Request::is('profile') ? 'border border-danger bg-danger text-white px-2' : '' }} text-uppercase fw-bold"
                        href="/profile">Profil</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ Request::is('pemerintahan') ? 'border border-danger bg-danger text-white px-2' : '' }} text-uppercase fw-bold"
                        href="/pemerintahan">Pemerintahan</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ Request::is('pelayanan') ? 'border border-danger bg-danger text-white px-2' : '' }} text-uppercase fw-bold"
                        href="/pelayanan">Pelayanan</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ Request::is('apbd') ? 'border border-danger bg-danger text-white px-2' : '' }} text-uppercase fw-bold"
                        href="/apbd">APBD</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ Request::is('kontak') ? 'border border-danger bg-danger text-white px-2' : '' }} text-uppercase fw-bold"
                        href="/kontak">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
