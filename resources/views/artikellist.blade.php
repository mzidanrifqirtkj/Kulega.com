@extends('layouts.master')
@push('head')
<link rel="stylesheet" href="css/responsive-style.css">
<link rel="stylesheet" href="css/artikellist.css">
@endpush
@section('konten')

<!-- Banner Section -->
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="display-4">Tingkatkan Pengetahuan Anda tentang Kesehatan Mental Anda</h1>
                <p class="lead">Kulega mempublikasi artikel edukasi yang berguna bagi masyarakat secara gratis.</p>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section exit-->

<!-- Anggota section -->
<section id="testi" class="testi_wrapper wrapper">
    <div class="container">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-4">
            <h3 class="text-primary">9 Artikel</h3>
            <div class="col-md-6 me-4">
                <div class="form">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control form-input" placeholder="Search">
                </div>
            </div>
            <div class="btn-group me-4">
                <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Dari Relevansi
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </div>
            <a href="#" class="main-btn"><i class="fas fa-filter"></i> Filter</a>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-4 border-0 rounded-0">
                    <img src="images/testimoni.png">
                    <div class="service-info pt-4">
                        <h5><a href="{{route('artikel1')}}">Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres</a></h5>
                        <p><small>Tim Kulega</small></p>
                        <p>Dalam lingkungan kerja modern yang dinamis dan menuntut, memahami dan mengatasi stres serta trauma kerja menjadi prioritas utama. Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres adalah topik yang relevan dan penting untuk ditelusuri lebih lanjut.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-4 border-0 rounded-0">
                    <img src="images/testimoni2.png">
                    <div class="service-info pt-4">
                        <h5><a href="artikel.html">Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres</a></h5>
                        <p><small class="text-primary">Tim Kulega</small></p>
                        <p>Dalam lingkungan kerja modern yang dinamis dan menuntut, memahami dan mengatasi stres serta trauma kerja menjadi prioritas utama. Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres adalah topik yang relevan dan penting untuk ditelusuri lebih lanjut.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-4 border-0 rounded-0">
                    <img src="images/testimoni3.png">
                    <div class="service-info pt-4">
                        <h5><a href="artikel.html">Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres</a></h5>
                        <p><small class="text-primary">Tim Kulega</small></p>
                        <p>Dalam lingkungan kerja modern yang dinamis dan menuntut, memahami dan mengatasi stres serta trauma kerja menjadi prioritas utama. Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres adalah topik yang relevan dan penting untuk ditelusuri lebih lanjut.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-4 border-0 rounded-0">
                    <img src="images/testimoni.png">
                    <div class="service-info pt-4">
                        <h5><a href="artikel.html">Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres</a></h5>
                        <p><small class="text-primary">Tim Kulega</small></p>
                        <p>Dalam lingkungan kerja modern yang dinamis dan menuntut, memahami dan mengatasi stres serta trauma kerja menjadi prioritas utama. Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres adalah topik yang relevan dan penting untuk ditelusuri lebih lanjut.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-4 border-0 rounded-0">
                    <img src="images/testimoni2.png">
                    <div class="service-info pt-4">
                        <h5><a href="artikel.html">Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres</a></h5>
                        <p><small class="text-primary">Tim Kulega</small></p>
                        <p>Dalam lingkungan kerja modern yang dinamis dan menuntut, memahami dan mengatasi stres serta trauma kerja menjadi prioritas utama. Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres adalah topik yang relevan dan penting untuk ditelusuri lebih lanjut.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-4 border-0 rounded-0">
                    <img src="images/testimoni3.png">
                    <div class="service-info pt-4">
                        <h5><a href="artikel.html">Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres</a></h5>
                        <p><small class="text-primary">Tim Kulega</small></p>
                        <p>Dalam lingkungan kerja modern yang dinamis dan menuntut, memahami dan mengatasi stres serta trauma kerja menjadi prioritas utama. Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres adalah topik yang relevan dan penting untuk ditelusuri lebih lanjut.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-4 border-0 rounded-0">
                    <img src="images/testimoni.png">
                    <div class="service-info pt-4">
                        <h5><a href="artikel.html">Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres</a></h5>
                        <p><small class="text-primary">Tim Kulega</small></p>
                        <p>Dalam lingkungan kerja modern yang dinamis dan menuntut, memahami dan mengatasi stres serta trauma kerja menjadi prioritas utama. Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres adalah topik yang relevan dan penting untuk ditelusuri lebih lanjut.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-4 border-0 rounded-0">
                    <img src="images/testimoni2.png">
                    <div class="service-info pt-4">
                        <h5><a href="artikel.html">Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres</a></h5>
                        <p><small class="text-primary">Tim Kulega</small></p>
                        <p>Dalam lingkungan kerja modern yang dinamis dan menuntut, memahami dan mengatasi stres serta trauma kerja menjadi prioritas utama. Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres adalah topik yang relevan dan penting untuk ditelusuri lebih lanjut.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-4 border-0 rounded-0">
                    <img src="images/testimoni3.png">
                    <div class="service-info pt-4">
                        <h5><a href="artikel.html">Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres</a></h5>
                        <p><small class="text-primary">Tim Kulega</small></p>
                        <p>Dalam lingkungan kerja modern yang dinamis dan menuntut, memahami dan mengatasi stres serta trauma kerja menjadi prioritas utama. Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres adalah topik yang relevan dan penting untuk ditelusuri lebih lanjut.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anggota section exit -->

<!-- hero section -->
<section id="hero" class="hero_wrapper wrapper">
    <div class="hero_wrappper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1 order-2 mt-5">
                    <h1 class="text-center">Temui Pakar Kami</h1>
                    <p>Apakah Anda memiliki pertanyaan atau membutuhkan bantuan dalam bidang [sebutkan bidang]? Konsultasikan dengan pakar kami yang berpengalaman dan dapatkan solusi terbaik untuk kebutuhan Anda.</p>
                    <a href="regis.html" class="main-btn mt-4 fill-btn">Mulai sekarang</a>
                </div>
                <div class="col-md-6 order-md-2 order-1 mb-md-0 mb-5">
                    <div class="top-right-sec">
                        <div class="animate-img">
                            <img class="aimg1" src="images/hero.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hero section exit -->

@endsection
