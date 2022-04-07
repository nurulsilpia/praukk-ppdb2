@extends('layouts.main')

@section('home')
<section>
    <div class="header-hero">
        {{-- circle shape --}}
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
        <div class="shape shape-5"></div>
        <div class="shape shape-6"></div>
        {{-- ----------- --}}

        <header class="header-area container">
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-lg-6 col-md-10">
                    <div class="header-hero-content">
                        <h1 class="header-title wow fadeInLeftBig" data-wow-duration="3s" data-wow-delay="0.2s">
                            Gelombang Pertama <span>Penerimaan Peserta Didik Baru</span>
                        </h1>
                        <p class="text wow fadeInLeftBig" data-wow-duration="3s" data-wow-delay="0.4s">
                            Jadilah Bagian Dari Keluarga Besar <b>SMK Wikrama Indonesia</b>
                        </p>
                        <ul class="d-flex list-unstyled">
                            <li>
                                <a href="/regis" class="main-btn wow fadeInLeftBig" data-wow-duration="3s" data-wow-delay="0.8s"> Registration </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="header-image">
                        <img src="asset/img/header/header-app1.svg" class="image-1">
                    </div>
                </div>
                <div class="container">
                    <div class="header-shape-1"></div>
                    <div class="header-shape-2">
                    <img src="asset/img/header/header-shape-2.svg" alt="">
                    </div>
                </div>
            </div>
        </header>
    </div>
</section>
<section class="mt-5">
    <h1 class="text-center">Welcome To SMK Wikrama</h1>
    <div class="container my-5">
        
        {{-- Slider --}}
        <div class="row mt-5 align-items-center justify-content-center justify-content-lg-between">
            <div class="col-lg-7 col-md-7 col-sm-7">
                SMK Wikrama Bogor membuka 7 kompetensi keahlian, diantaranya: 
                    <ol>
                        <li>Otomatisasi dan Tata Kelola Perkantoran</li>
                        <li>Teknik Komputer dan Jaringan</li>
                        <li>Rekayasa Perangkat Lunak</li>
                        <li>Multimedia</li>
                        <li>Bisnis Daring dan Pemasaran</li>
                        <li>Tata Boga</li>
                        <li>Perhotelan</li>
                    </ol>
                    <p class="text-justify">
                        SMK Wikrama menjadi sekolah kejuruan teladan berbudaya lingkungan yang unggul dalam pendidikan karakter yang berakhlaq mulia dengan kompetensi di bidang bisnis dan manajemen serta teknologi informasi dan komunikasi.
                    </p> 
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 imgframe">
                <!--Carousel-->
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/asset/img/tbg.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/asset/img/hotel.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/asset/img/mmd.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/asset/img/bdp.jpeg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection