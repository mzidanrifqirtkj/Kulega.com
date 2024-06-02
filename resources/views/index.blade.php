@extends('layouts.master')
@push('head')
<link rel="stylesheet" href="css/responsive-style.css">
<link rel="stylesheet" href="css/style.css">
@endpush
@section('konten')



{{-- <a href="{{route('beta_registrasi')}}" class="main-btn mt-4 fill-btn form-control">Mulai sekarang</a> --}}

{{-- @if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <span class="bi bi-check-circle-fill" style="font-size: 1.25rem;"></span>
    {{ session('success') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif --}}


<!-- Banner Section -->
<section id="artikel" class="artikel">
    <div class="banner_wrapper_style wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1 order-2">
                    <div class="img-fluid">
                        <img src="images/logoblue.png" class="mb-4">
                    </div>
                    <h1>Solusi Kesehatan Mental Anda</h1>
                    <p>Dapatkan akses ke tes kesehatan mental dan berbagai layanan lainnya yang dirancang khusus untuk mendukung kesehatan mental Anda. Mulailah perjalanan menuju kesejahteraan mental Anda bersama Kulega hari ini!</p>
                    <a href="#" class="main-btn mt-4  fill-btn form-control">Mulai sekarang</a>
                </div>
                <div class="col-md-6 order-md-2 order-1 mb-md-0 mb-5">
                    <div class="top-right-sec">
                        <div class="animate-img">
                            <img class="aimg1" src="images/banner2.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section exit-->

<!-- Service section -->
<section id="service" class="service_wrapper wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mb-5">
                <h3 class="text-black">Why Kulega?</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card rounded-3">
                    <div class="service-img">
                        <img src="images/Ekspertisi.png" class="img-fluid">
                    </div>
                    <div class="service-info pt-4 text-center">
                        <h5>Ekspertisi profesional</h5>
                        <p>Kami bekerja sama dengan pakar kesehatan mental yang bersertifikasi untuk memberikan layanan konsultasi terbaik.</p>
                        <a href="#" class="main-btn mt-4 form-control">Temui Pakar Kami</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card rounded-3">
                    <div class="service-img">
                        <img src="images/Edukasi.png" class="img-fluid">
                    </div>
                    <div class="service-info pt-4 text-center">
                        <h5>Edukasi dan Kesadaran</h5>
                        <p>Temukan berbagai artikel dan sumber belajar lainnya di platform kami.</p>
                        <br>
                        <a href="{{route('artikel_list')}}" class="main-btn mt-4 form-control">Baca Artikel</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card rounded-3">
                    <div class="service-img">
                        <img src="images/Komunitas.png" class="img-fluid">
                    </div>
                    <div class="service-info pt-4 text-center">
                        <h5>Komunitas Dukungan</h5>
                        <p>Berbagi pengalaman dan dapatkan dukungan untuk Anda. Anda tidak sendirian dalam perjalanan kesejahteraan mental Anda.</p>
                        <a href="#" class="main-btn mt-4 form-control">Bergabung Komunitas</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card rounded-3">
                    <div class="service-img">
                        <img src="images/layanan.png" class="img-fluid">
                    </div>
                    <div class="service-info pt-4 text-center">
                        <h5>Layanan Personalisasi</h5>
                        <p>Kami memastikan Anda mendapatkan dukungan yang tepat untuk kesejahteraan mental Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card rounded-3">
                    <div class="service-img">
                        <img src="images/Aksesbilitas.png" class="img-fluid">
                    </div>
                    <div class="service-info pt-4 text-center">
                        <h5>Aksesbilitas</h5>
                        <p>Dapatkan akses layanan kesehatan mental kapan saja dan di mana saja. Kami tersedia melalui website, aplikasi, dan WhatsApp Bot.</p>
                    </div>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-primary"><a href="#"><i class="fab fa-google-play"></i></a>PlayStore</button>
                        <button type="button" class="btn btn-outline-primary"><a href="#"><i class="fab fa-app-store-ios"></i></a>iOSStore</button>
                        <button type="button" class="btn btn-outline-primary"><a href="#"><i class="fas fa-globe"></i></a>WebApp</button>
                        <button type="button" class="btn btn-outline-primary"><a href="#"><i class="fab fa-whatsapp"></i></a>WhatsApp</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card rounded-3">
                    <div class="service-img">
                        <img src="images/komitmen.png" class="img-fluid" />
                    </div>
                    <div class="service-info pt-4 text-center">
                        <h5>Komitmen terhadap Privasi</h5>
                        <p>
                            Nikmati layanan kami dengan rasa aman dan nyaman, karena
                            privasi Anda terjaga.
                        </p>
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Service section exit -->

<!-- About section-->
<Section id="about" class="about_wrapper wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mb-5">
                <h3 class="text-black">Who Kulega?</h3>
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

<!-- Testimonial section -->
<section id="testi" class="testi_wrapper wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mb-5">
                <h3 class="text-black">Testimonial</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-0 border-0 rounded-0">
                    <img src="images/testimoni.png">
                    <div class="testi-content">
                        <h5 class="text-black mb-4">Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres</h5>
                        <p class="mt-2 text-blue">Dalam lingkungan kerja modern yang dinamis dan menuntut, memahami dan mengatasi stres serta trauma kerja menjadi prioritas utama. Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres adalah topik yang relevan dan penting untuk ditelusuri lebih lanjut.
                        </p>
                        <a href="#" class="main-btn mt-2 form-control">Baca Lebih Lanjut</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-0 border-0 rounded-0">
                    <img src="images/testimoni2.png">
                    <div class="testi-content">
                        <h5 class="text-black mb-4 ">Mindfulness untuk Produktivitas: Menggunakan Teknik Kesadaran Penuh untuk Meningkatkan Kesejahteraan Mental di Tempat Kerja</h5>
                        <p class="mt-2 text-black">Di era kerja modern yang semakin menuntut, teknik kesadaran penuh atau Mindfulness telah menjadi alat penting untuk meningkatkan produktivitas dan kesejahteraan mental di tempat kerja. Artikel ini akan membahas bagaimana teknik ini dapat diterapkan dalam konteks kerja.
                        </p>
                        <a href="#" class="main-btn mt-2 form-control">Baca Lebih Lanjut</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-0 border-0 rounded-0">
                    <img src="images/testimoni3.png">
                    <div class="testi-content">
                        <h5 class="text-black mb-4 ">Meningkatkan Kesejahteraan Mental Melalui Manajemen Tugas: Menerapkan Matriks Eisenhower di Tempat Kerja
                        </h5>
                        <p class="mt-2 text-blue ">Dalam dunia kerja yang semakin kompleks dan menuntut, manajemen tugas yang efektif menjadi kunci untuk menjaga kesejahteraan mental. Salah satu metode yang telah terbukti efektif adalah penerapan Matriks Eisenhower. Artikel ini akan membahas bagaimana Meningkatkan Kesejahteraan Mental Melalui Manajemen Tugas: Menerapkan Matriks Eisenhower di Tempat Kerja.
                        </p>
                        <a href="#" class="main-btn mt-2 form-control">Baca Lebih Lanjut</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial section exit -->

<!-- FAQ section -->
<section id="faq" class="faq_wrapper wrapper">
    <h4 class="my-5 text-center">Frequently Asked Questions</h4>
    <div class="container">
        <div class="accordion accordion-flush w-75 mx-auto" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Apa itu Kulega?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Bagaimana cara kerja Kulega?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Apakah layanan Kulega tersedia setiap saat?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ section exit -->
@endsection
