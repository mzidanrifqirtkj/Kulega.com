@extends('layouts.master')
@push('head')
<link rel="stylesheet" href="css/responsive-style.css">
<link rel="stylesheet" href="css/artikellist.css">
@endpush
@section('konten')
<!-- Banner Section -->
<section id="artikel" class="artikel">
    <div class="banner_wrapper wrapper">
        <div class="container">
            <div class="row align-item-center">
                <div class="col-md-6 order-md-1 order-2">
                    <h1 class="text-center text-black">"Tingkatkan Pengetahuan Anda tentang Kesehatan Mental Anda"</h1>
                    <p class="text-center text-black">"Kulega mempublikasikan artikel edukasi yang berguna bagi masyarakat secara gratis"</p>
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

<!-- Anggota section -->
<section id="testi" class="testi_wrapper wrapper">
    <div class="container">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-4">
            <div class="btn-group">
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
                <div class="card p-0 border-0 rounded-0">
                    <img src="images/testimoni.png">
                    <div class="testi-content">
                        <h5 class="text-black mb-4">Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres</h5>
                        <p class="mt-2 text-blue"><a href="">Dalam lingkungan kerja modern yang dinamis dan menuntut, memahami dan mengatasi stres serta trauma kerja menjadi prioritas utama. Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres adalah topik yang relevan dan penting untuk ditelusuri lebih lanjut.</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-0 border-0 rounded-0">
                    <img src="images/testimoni2.png">
                    <div class="testi-content">
                        <h5 class="text-black mb-4">Mindfulness untuk Produktivitas: Menggunakan Teknik Kesadaran Penuh untuk Meningkatkan Kesejahteraan Mental di Tempat Kerja</h5>
                        <p class="mt-2 text-blue"><a href="">Di era kerja modern yang semakin menuntut, teknik kesadaran penuh atau Mindfulness telah menjadi alat penting untuk meningkatkan produktivitas dan kesejahteraan mental di tempat kerja. Artikel ini akan membahas bagaimana teknik ini dapat diterapkan dalam konteks kerja.</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-0 border-0 rounded-0">
                    <img src="images/testimoni3.png">
                    <div class="testi-content">

                        <h5 class="text-black mb-4"><a href="{{route('artikel1')}}">Meningkatkan Kesejahteraan Mental Melalui Manajemen Tugas: Menerapkan Matriks Eisenhower di Tempat Kerja</a>
                        </h5>
                        <p class="mt-2 text-blue"><a href="">Dalam dunia kerja yang semakin kompleks dan menuntut, manajemen tugas yang efektif menjadi kunci untuk menjaga kesejahteraan mental. Salah satu metode yang telah terbukti efektif adalah penerapan Matriks Eisenhower. Artikel ini akan membahas bagaimana Meningkatkan Kesejahteraan Mental Melalui Manajemen Tugas: Menerapkan Matriks Eisenhower di Tempat Kerja.</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-0 border-0 rounded-0">
                    <img src="images/testimoni.png">
                    <div class="testi-content">
                        <h5 class="text-black mb-4">Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres</h5>
                        <p class="mt-2 text-blue"><a href="">Dalam lingkungan kerja modern yang dinamis dan menuntut, memahami dan mengatasi stres serta trauma kerja menjadi prioritas utama. Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres adalah topik yang relevan dan penting untuk ditelusuri lebih lanjut.</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-0 border-0 rounded-0">
                    <img src="images/testimoni2.png">
                    <div class="testi-content">
                        <h5 class="text-black mb-4">Mindfulness untuk Produktivitas: Menggunakan Teknik Kesadaran Penuh untuk Meningkatkan Kesejahteraan Mental di Tempat Kerja</h5>
                        <p class="mt-2 text-blue"><a href="">Di era kerja modern yang semakin menuntut, teknik kesadaran penuh atau Mindfulness telah menjadi alat penting untuk meningkatkan produktivitas dan kesejahteraan mental di tempat kerja. Artikel ini akan membahas bagaimana teknik ini dapat diterapkan dalam konteks kerja.</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-0 border-0 rounded-0">
                    <img src="images/testimoni3.png">
                    <div class="testi-content">
                        <h5 class="text-black mb-4">Meningkatkan Kesejahteraan Mental Melalui Manajemen Tugas: Menerapkan Matriks Eisenhower di Tempat Kerja
                        </h5>
                        <p class="mt-2 text-blue"><a href="">Dalam dunia kerja yang semakin kompleks dan menuntut, manajemen tugas yang efektif menjadi kunci untuk menjaga kesejahteraan mental. Salah satu metode yang telah terbukti efektif adalah penerapan Matriks Eisenhower. Artikel ini akan membahas bagaimana Meningkatkan Kesejahteraan Mental Melalui Manajemen Tugas: Menerapkan Matriks Eisenhower di Tempat Kerja.</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-0 border-0 rounded-0">
                    <img src="images/testimoni.png">
                    <div class="testi-content">
                        <h5 class="text-black mb-4">Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres</h5>
                        <p class="mt-2 text-blue"><a href="">Dalam lingkungan kerja modern yang dinamis dan menuntut, memahami dan mengatasi stres serta trauma kerja menjadi prioritas utama. Optimalisasi Kesejahteraan Mental di Tempat Kerja: Solusi Inovatif untuk Mengatasi Stres adalah topik yang relevan dan penting untuk ditelusuri lebih lanjut.</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-0 border-0 rounded-0">
                    <img src="images/testimoni2.png">
                    <div class="testi-content">
                        <h5 class="text-black mb-4">Mindfulness untuk Produktivitas: Menggunakan Teknik Kesadaran Penuh untuk Meningkatkan Kesejahteraan Mental di Tempat Kerja</h5>
                        <p class="mt-2 text-blue"><a href="">Di era kerja modern yang semakin menuntut, teknik kesadaran penuh atau Mindfulness telah menjadi alat penting untuk meningkatkan produktivitas dan kesejahteraan mental di tempat kerja. Artikel ini akan membahas bagaimana teknik ini dapat diterapkan dalam konteks kerja.</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card p-0 border-0 rounded-0">
                    <img src="images/testimoni3.png">
                    <div class="testi-content">
                        <h5 class="text-black mb-4">Meningkatkan Kesejahteraan Mental Melalui Manajemen Tugas: Menerapkan Matriks Eisenhower di Tempat Kerja
                        </h5>
                        <p class="mt-2 text-blue"><a href="">Dalam dunia kerja yang semakin kompleks dan menuntut, manajemen tugas yang efektif menjadi kunci untuk menjaga kesejahteraan mental. Salah satu metode yang telah terbukti efektif adalah penerapan Matriks Eisenhower. Artikel ini akan membahas bagaimana Meningkatkan Kesejahteraan Mental Melalui Manajemen Tugas: Menerapkan Matriks Eisenhower di Tempat Kerja.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anggota section exit -->
@endsection
