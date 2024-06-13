@extends('layouts.master')
@push('head')
<link rel="stylesheet" href="css/responsive-style.css">
<link rel="stylesheet" href="css/style.css">
@endpush

@push('')

@endpush
@section('konten')
<!-- Banner Section -->
<section id="artikel" class="artikel">
    <div class="banner_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1 order-2">
                    <h1>Solusi Kesehatan Mental Anda</h1>
                    <p>Dapatkan akses ke tes kesehatan mental dan berbagai layanan lainnya yang dirancang khusus untuk mendukung kesehatan mental Anda. Mulailah perjalanan menuju kesejahteraan mental Anda bersama Kulega hari ini!</p>
                    <a href="{{route('beta-registrasi')}}" class="main-btn mt-4  fill-btn">Mulai sekarang</a>
                </div>
                <div class="col-md-6 order-md-2 order-1 mb-md-0 mb-5">
                    <div class="top-right-sec">
                        <div class="animate-img">
                            <img class="aimg1" src="images/Banner (2).png">
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
            <div class="col-sm-12 mt-4 mb-4">
                <h3 class="text-primary">Mengapa Memilih Kulega?</h3>
                <h4 class="text-black">Why Kulega</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card rounded-3">
                    <div class="service-img">
                        <img src="images/Ekspertisi.png" class="img-fluid" href="artikel.html">
                    </div>
                    <div class="service-info pt-4 text-center">
                        <h5><a href="artikel.html">Ekspertisi profesional</a></h5>
                        <p>Kami bekerja sama dengan pakar kesehatan mental yang bersertifikasi untuk memberikan layanan konsultasi terbaik.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card rounded-3">
                    <div class="service-img">
                        <img src="images/Edukasi.png" class="img-fluid">
                    </div>
                    <div class="service-info pt-4 text-center">
                        <h5><a href="artikel.html">Edukasi dan Kesadaran</a></h5>
                        <p>Temukan berbagai artikel dan sumber belajar lainnya di platform kami.</p>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card rounded-3">
                    <div class="service-img">
                        <img src="images/Komunitas.png" class="img-fluid">
                    </div>
                    <div class="service-info pt-4 text-center">
                        <h5><a href="artikel.html">Komunitas Dukungan</a></h5>
                        <p>Berbagi pengalaman dan dapatkan dukungan untuk Anda. Anda tidak sendirian dalam perjalanan kesejahteraan mental Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card rounded-3">
                    <div class="service-img">
                        <img src="images/layanan.png" class="img-fluid">
                    </div>
                    <div class="service-info pt-4 text-center">
                        <h5><a href="artikel.html">Layanan Personalisasi</a></h5>
                        <p>Kami memastikan Anda mendapatkan dukungan yang tepat untuk kesejahteraan mental Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card rounded-3">
                    <div class="service-img">
                        <img src="images/komitmen.png" class="img-fluid">
                    </div>
                    <div class="service-info pt-4 text-center">
                        <h5><a href="artikel.html">Komitmen terhadap Privasi</a></h5>
                        <p>Nikmati layanan kami dengan rasa aman dan nyaman, karena privasi Anda terjaga.</p>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card rounded-3">
                    <div class="service-img">
                        <img src="images/aksesibilitas.png" class="img-fluid">
                    </div>
                    <div class="service-info pt-4 text-center">
                        <h5><a href="artikel.html">Aksesbilitas</a></h5>
                        <p>Dapatkan akses layanan kesehatan mental kapan saja dan di mana saja. Kami tersedia melalui website, aplikasi, dan WhatsApp Bot.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service section exit -->

<!-- Testimonial section -->
<div class="container">
    <div class="row">
        <div class="col-sm-12 mb-4 mt-4">
            <h3 class="text-primary">Memberikan anda Edukasi</h3>
            <h4 class="text-black">Our Article</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card p-4">
                <img src="images/testimoni.png" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a href="{{route('artikel1')}}">Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres</a></h5>
                    <p class="card-text">Dalam lingkungan kerja modern yang dinamis dan menuntut, memahami dan mengatasi stres serta trauma kerja menjadi prioritas utama. Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres adalah topik yang relevan dan penting untuk ditelusuri lebih lanjut.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-4">
                <img src="images/testimoni2.png" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a href="artikel.html">Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres</a></h5>
                    <p class="card-text">Dalam lingkungan kerja modern yang dinamis dan menuntut, memahami dan mengatasi stres serta trauma kerja menjadi prioritas utama. Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres adalah topik yang relevan dan penting untuk ditelusuri lebih lanjut.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card p-4">
                <img src="images/testimoni3.png" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a href="artikel.html">Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres</a></h5>
                    <p class="card-text">Dalam lingkungan kerja modern yang dinamis dan menuntut, memahami dan mengatasi stres serta trauma kerja menjadi prioritas utama. Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres adalah topik yang relevan dan penting untuk ditelusuri lebih lanjut.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-4">
                <img src="images/testimoni4.png" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a href="artikel.html">Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres</a></h5>
                    <p class="card-text">Dalam lingkungan kerja modern yang dinamis dan menuntut, memahami dan mengatasi stres serta trauma kerja menjadi prioritas utama. Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres adalah topik yang relevan dan penting untuk ditelusuri lebih lanjut.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section exit -->

<!-- FAQ section -->
<section id="faq" class="faq_wrapper wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-4 mb-4">
                <h3 class="text-primary">Membantu Anda tentang Kulega</h3>
                <h4 class="text-black">Fruquesntly Asked Questions</h4>
            </div>
        </div>
        <div class="accordion accordion-flush mx-auto" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Apa itu Kulega?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Kulega adalah inovasi terdepan dalam layanan kesehatan mental, menyediakan platform yang mengintegrasikan teknologi dan keahlian untuk mendukung kesejahteraan mental dan peningkatan performa kerja.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Siapa yang bisa menggunakan Kulega?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Kulega dirancang untuk semua orang yang berkeinginan untuk menjaga kesehatan mental, termasuk karyawan dan manajemen perusahaan yang ingin menciptakan lingkungan kerja yang mendukung kesehatan mental.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Bagaimana cara kerja Kulega?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Dengan antarmuka yang ramah pengguna, Kulega menyediakan akses ke konsultasi profesional, alat penilaian kesehatan mental, dan sumber daya edukatif melalui platform digital yang mudah diakses.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Apakah layanan Kulega tersedia setiap saat?
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Layanan Kulega tersedia 24/7, memastikan dukungan kesehatan mental yang dapat diandalkan setiap saat untuk membantu Anda menghadapi tantangan sehari-hari.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Bagaimana Kulega menjaga privasi dan kerahasiaan saya?
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Kulega menerapkan standar keamanan data yang tinggi, termasuk enkripsi canggih dan kebijakan privasi yang ketat, untuk melindungi informasi pribadi dan kesehatan mental Anda.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        Apakah Kulega bekerja sama dengan profesional kesehatan mental yang bersertifikasi?
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Kulega bermitra hanya dengan profesional kesehatan mental yang bersertifikasi dan berpengalaman untuk menjamin kualitas layanan yang Anda terima.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        Bagaimana cara bergabung dengan komunitas Kulega?
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Anda dapat dengan mudah bergabung dengan komunitas Kulega melalui situs web atau aplikasi kami, di mana Anda akan menemukan ruang aman untuk berbagi pengalaman dan mendapatkan dukungan</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                        Apakah ada biaya untuk menggunakan layanan Kulega?
                    </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Kulega menawarkan paket layanan gratis dengan opsi untuk meningkatkan ke layanan premium, yang memberikan fitur tambahan dan akses eksklusif ke sumber daya kesehatan mental.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ section exit -->
@endsection
