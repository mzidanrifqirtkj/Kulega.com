@extends('layouts.master')

@section('konten')
<!-- Banner Section -->
<section id="artikel" class="artikel">
    <div class="banner_wrapper wrapper">
        <div class="container">
            <div class="row align-item-center">
                <div class="col-md-6 order-md-1 order-2">
                    <h1 class="text-center">"Kenali Kulega: Mitra Anda dalam Meningkatkan Kesejahteraan Mental"</h1>
                    <p class="text-center">"Dibangun dengan Passion dan Dedikasi, untuk Keseimbangan Mental Anda"</p>
                </div>
                <div class="col-md-6 order-md-2 order-1 mb-md-0 mb-5">
                    <div class="top-right-sec">

                    </div>
                </div>
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
                    <img src="images/Visi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Visi</h5>
                        <br>
                        <p class="card-text text-center">Menjadi Inspirasi dalam bidang Mental Wellness.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/Misi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Misi</h5>
                        <p class="card-text text-center">Mendorong sosialisasi Mental Wellness diperusahaan, organisasi, dan lembaga pendidikan.</p>
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
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-0 border-0 rounded-0">
                    <img src="images/anggota1.png">
                    <div class="testi-content">
                        <h5 class="text-black mb-4 text-center">Nama Anggota</h5>
                        <h6 class="text-black text-center">by featured Client</h6>
                        <p class="mt-2 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-0 border-0 rounded-0">
                    <img src="images/anggota2.png">
                    <div class="testi-content">
                        <h5 class="text-black mb-4 text-center">Nama Anggota</h5>
                        <h6 class="text-black text-center">by featured Client</h6>
                        <p class="mt-2 text-black">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-0 border-0 rounded-0">
                    <img src="images/anggota3.png">
                    <div class="testi-content">
                        <h5 class="text-black mb-4 text-center">Nama Anggota</h5>
                        <h6 class="text-black text-center">by featured Client</h6>
                        <p class="mt-2 text-black">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anggota section exit -->

<!-- About section-->
<Section id="about" class="about_wrapper wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mb-5">
                <h3 class="text-black">Jelajahi Perjalanan Kami</h3>
            </div>
            <div class="col-md-6 mb-mb-0 mb-5">
                <div class="position-relative">
                    <img src="images/Learn.png" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 text-center text-md-start">
                <h2>Temukan Perjalanan Kami Membangun Merek</h2>
                <p>Ikuti jejak langkah Kulega dalam membentuk identitas dan bertransformasi menjadi platform kesehatan mental terdepan. </p>
                <a href="#" class="main-btn mt-4 form-control">Jelajahi</a>
            </div>
        </div>
    </div>
</Section>
<!-- About section exit-->
@endsection
