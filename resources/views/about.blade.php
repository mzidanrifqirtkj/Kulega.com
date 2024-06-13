@extends('layouts.master')
@push('head')
<link rel="stylesheet" href="css/responsive-style.css">
<link rel="stylesheet" href="css/about.css">
@endpush
@section('konten')
<!-- Banner Section -->
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="display-4">Kenali Kulega: Mitra Anda dalam Meningkatkan Kesejahteraan Mental</h1>
                <p class="lead">Dibangun dengan Passion dan Dedikasi, untuk Keseimbangan Mental anda</p>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section exit-->

<!-- Visi & Misi section -->
<section id="card" class="card_wrapper wrapper">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="images/visi.png" class="card-img-top p-0" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Visi</h5>
                        <br>
                        <p class="card-text text-center">Menjadi Inspirasi dalam bidang Mental Wellness.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/misi.png" class="card-img-top p-0" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Misi</h5>
                        <p class="card-text text-center">Mendorong sosialisasi Mental Wellness diperusahaan, organisasi, dan lembaga pendidikan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Visi & Misi section exit -->

<!-- Anggota section -->
<section id="testi" class="testi_wrapper wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mb-5">
                <h3 class="text-black">Bertemu Anggota Kami</h3>
            </div>
        </div>
        <div class="row">
            <!-- PM -->
            <div class="col-md-6 col-lg-3">
                <div class="card p-3 mb-4">
                    <div class="card-body text-center">
                        <img src="images/anggota1.png" alt="Tommy Hartono" class="rounded-circle border border-secondary border-4 mb-4">
                        <h3 class="card-title text-black mb-3">
                            Tommy Hartono <a href="#"><i class="far fa-comment-dots"></i></a>
                        </h3>
                        <p class="card-text">
                            PM
                        </p>
                    </div>
                </div>
            </div>
            <!-- Mentor -->
            <div class="col-md-6 col-lg-3">
                <div class="card p-3 mb-4">
                    <div class="card-body text-center">
                        <img src="images/anggota2.png" alt="Alifiyah" class="rounded-circle border border-secondary border-4 mb-4">
                        <h3 class="card-title text-black mb-3">
                            Alifiyah <a href="#"><i class="far fa-comment-dots"></i></a>
                        </h3>
                        <p class="card-text">
                            Mentor
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card p-3 mb-4">
                    <div class="card-body text-center">
                        <img src="images/anggota3.png" alt="Arabi Rizki" class="rounded-circle border border-secondary border-4 mb-4">
                        <h3 class="card-title text-black mb-3">
                            Arabi Rizki <a href="#"><i class="far fa-comment-dots"></i></a>
                        </h3>
                        <p class="card-text">
                            Mentor
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card p-3 mb-4">
                    <div class="card-body text-center">
                        <img src="images/anggota3.png" alt="Kristiardy Guntoro" class="rounded-circle border border-secondary border-4 mb-4">
                        <h3 class="card-title text-black mb-3">
                            Kristiardy Guntoro <a href="#"><i class="far fa-comment-dots"></i></a>
                        </h3>
                        <p class="card-text">
                            Mentor
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card p-3 mb-4">
                    <div class="card-body text-center">
                        <img src="images/anggota3.png" alt="Syafa" class="rounded-circle border border-secondary border-4 mb-4">
                        <h3 class="card-title text-black mb-3">
                            Syafa <a href="#"><i class="far fa-comment-dots"></i></a>
                        </h3>
                        <p class="card-text">
                            Mentor
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card p-3 mb-4">
                    <div class="card-body text-center">
                        <img src="images/anggota3.png" alt="William Christopher" class="rounded-circle border border-secondary border-4 mb-4">
                        <h3 class="card-title text-black mb-3">
                            William Christopher <a href="#"><i class="far fa-comment-dots"></i></a>
                        </h3>
                        <p class="card-text">
                            Mentor
                        </p>
                    </div>
                </div>
            </div>
            <!-- BackEnd -->
            <div class="col-md-6 col-lg-3">
                <div class="card p-3 mb-4">
                    <div class="card-body text-center">
                        <img src="images/anggota1.png" alt="Muhammad Zidan Rifqi Ramadhan" class="rounded-circle border border-secondary border-4 mb-4">
                        <h3 class="card-title text-black mb-3">
                            Muhammad Zidan Rifqi Ramadhan <a href="#"><i class="far fa-comment-dots"></i></a>
                        </h3>
                        <p class="card-text">
                            BackEnd
                        </p>
                    </div>
                </div>
            </div>
            <!-- FrontEnd -->
            <div class="col-md-6 col-lg-3">
                <div class="card p-3 mb-4">
                    <div class="card-body text-center">
                        <img src="images/anggota2.png" alt="Muhamad Imam Akbar" class="rounded-circle border border-secondary border-4 mb-4">
                        <h3 class="card-title text-black mb-3">
                            Muhamad Imam Akbar <a href="#"><i class="far fa-comment-dots"></i></a>
                        </h3>
                        <p class="card-text">
                            FrontEnd
                        </p>
                    </div>
                </div>
            </div>
            <!-- Digital Marketing -->
            <div class="col-md-6 col-lg-3">
                <div class="card p-3 mb-4">
                    <div class="card-body text-center">
                        <img src="images/anggota3.png" alt="Mochamad Naufaldi" class="rounded-circle border border-secondary border-4 mb-4">
                        <h3 class="card-title text-black mb-3">
                            Mochamad Naufaldi <a href="#"><i class="far fa-comment-dots"></i></a>
                        </h3>
                        <p class="card-text">
                            Digital Marketing
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card p-3 mb-4">
                    <div class="card-body text-center">
                        <img src="images/anggota3.png" alt="Mochammad Rayhan Al Akbar" class="rounded-circle border border-secondary border-4 mb-4">
                        <h3 class="card-title text-black mb-3">
                            Mochammad Rayhan Al Akbar <a href="#"><i class="far fa-comment-dots"></i></a>
                        </h3>
                        <p class="card-text">
                            Digital Marketing
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card p-3 mb-4">
                    <div class="card-body text-center">
                        <img src="images/anggota3.png" alt="Muammar Adha Rafif Pratama" class="rounded-circle border border-secondary border-4 mb-4">
                        <h3 class="card-title text-black mb-3">
                            Muammar Adha Rafif Pratama <a href="#"><i class="far fa-comment-dots"></i></a>
                        </h3>
                        <p class="card-text">
                            Digital Marketing
                        </p>
                    </div>
                </div>
            </div>
            <!-- UI/UX -->
            <div class="col-md-6 col-lg-3">
                <div class="card p-3 mb-4">
                    <div class="card-body text-center">
                        <img src="images/anggota1.png" alt="Very Orlando Tumonggotuas" class="rounded-circle border border-secondary border-4 mb-4">
                        <h3 class="card-title text-black mb-3">
                            Very Orlando Tumonggotuas <a href="#"><i class="far fa-comment-dots"></i></a>
                        </h3>
                        <p class="card-text">
                            UI/UX
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card p-3 mb-4">
                    <div class="card-body text-center">
                        <img src="images/anggota2.png" alt="Viola Glinko" class="rounded-circle border border-secondary border-4 mb-4">
                        <h3 class="card-title text-black mb-3">
                            Viola Glinko <a href="#"><i class="far fa-comment-dots"></i></a>
                        </h3>
                        <p class="card-text">
                            UI/UX & PM
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card p-3 mb-4">
                    <div class="card-body text-center">
                        <img src="images/anggota3.png" alt="Wyola Sutanto" class="rounded-circle border border-secondary border-4 mb-4">
                        <h3 class="card-title text-black mb-3">
                            Wyola Sutanto <a href="#"><i class="far fa-comment-dots"></i></a>
                        </h3>
                        <p class="card-text">
                            UI/UX
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card p-3 mb-4">
                    <div class="card-body text-center">
                        <img src="images/anggota3.png" alt="Tiara Ardilla Bazzury" class="rounded-circle border border-secondary border-4 mb-4">
                        <h3 class="card-title text-black mb-3">
                            Tiara Ardilla Bazzury <a href="#"><i class="far fa-comment-dots"></i></a>
                        </h3>
                        <p class="card-text">
                            UI/UX
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card p-3 mb-4">
                    <div class="card-body text-center">
                        <img src="images/anggota3.png" alt="Desi Intan Pertiwi" class="rounded-circle border border-secondary border-4 mb-4">
                        <h3 class="card-title text-black mb-3">
                            Desi Intan Pertiwi <a href="#"><i class="far fa-comment-dots"></i></a>
                        </h3>
                        <p class="card-text">
                            UI/UX
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anggota section exit -->

@endsection
