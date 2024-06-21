@extends('layouts.master')
@push('head')
<!-- Custom File's Link -->
<link rel="stylesheet" href="css/help.css">
<link rel="stylesheet" href="css/responsive-style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
@endpush
@section('konten')
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
    <!-- searchbar -->
    <div class="container">
        <div class="row height d-flex justify-content-center align-items-center bg-dark w-">
            <div class="col-md-6">
                <div class="form">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control form-input" placeholder="Search">
                </div>
            </div>
        </div>
        <div class="col-sm-12 mb-2 mt-5">
            <h3 class="text-black text-center">Tanya & Jawab</h3>
            <h4 class="text-primary text-center">Temukan Jawaban Atas Pertanyaan Anda tentang Kulega</h4>
        </div>
    </div>
    <!-- searchbar exit -->

    <!-- q&a -->
    <div class="card-container">
        <div class="card p-0 border-0 rounded-0">
            <img src="images/q1.png" class="mb-4">
            <div class="card-content">
                <h2 class="text-center"><a href="{{url('ekspertis')}}" class="text-white">Ekspertis</a></h2>
            </div>
        </div>
        <div class="card p-0 border-0 rounded-0">
            <img src="images/q2.png" class="mb-4">
            <div class="card-content">
                <h2 class="text-center"><a href="" class="text-white">Komunitas</a></h2>
            </div>
        </div>
        <div class="card p-0 border-0 rounded-0">
            <img src="images/q3.png" class="mb-4">
            <div class="card-content">
                <h2 class="text-center"><a href="" class="text-white">Artikel</a></h2>
            </div>
        </div>
    </div>
    <!-- q&a exit -->

    <!-- FAQ -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="far fa-bookmark me-3"></i> Pertanyaan Umum</button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong><a href="">Pengertian Kulega</a></strong>
                                <br>
                                <br>
                                <strong><a href="">Cara Kerja Kulega</a></strong>
                                <br>
                                <br>
                                <strong><a href="">Ketersediaan layanan Kulega</a></strong>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><i class="far fa-user me-3"></i>Akun</button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong><a href="{{route('registrasi')}}">Registrasi</a></strong>
                                <br>
                                <br>
                                <strong><a href="">Informasi Akun</a></strong>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"><i class="fas fa-user-check me-3"></i>Ekpertis</button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the thrid item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour"><i class="fas fa-users me-3"></i>Komunitas</button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the forth item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive"><i class="far fa-newspaper me-3"></i>Artikel</button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong><a href="">Registrasi</a></strong>
                                <br>
                                <br>
                                <strong><a href="">Informasi Akun</a></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h5>Apa itu Kulega?</h5>
                <p><small> Kulega adalah inovasi terdepan dalam layanan kesehatan mental, menyediakan platform yang mengintegrasikan teknologi dan keahlian untuk mendukung kesejahteraan mental dan peningkatan performa kerja.</small></p>
                <h5>Siapa yang bisa menggunakan Kulega?
                </h5>
                <p><small>Kulega dirancang untuk semua orang yang berkeinginan untuk menjaga kesehatan mental, termasuk karyawan dan manajemen perusahaan yang ingin menciptakan lingkungan kerja yang mendukung kesehatan mental. </small></p>
                <h5>Bagaimana cara kerja Kulega?</h5>
                <p><small>Dengan antarmuka yang ramah pengguna, Kulega menyediakan akses ke konsultasi profesional, alat penilaian kesehatan mental, dan sumber daya edukatif melalui platform digital yang mudah diakses.</small></p>
                <h5>Apakah layanan Kulega tersedia setiap saat?</h5>
                <p><small> Layanan Kulega tersedia 24/7, memastikan dukungan kesehatan mental yang dapat diandalkan setiap saat untuk membantu Anda menghadapi tantangan sehari-hari.
                    </small></p>
                <h5>Apakah layanan Kulega tersedia setiap saat?</h5>
                <p><small>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores quis nam neque ea ullam laboriosam reiciendis, numquam odit! Officia eius magni culpa aliquam consectetur dolor cumque reiciendis beatae quisquam recusandae!</small></p>
                <h5>Bagaimana Kulega menjaga privasi dan kerahasiaan saya?
                </h5>
                <p><small>Kulega menerapkan standar keamanan data yang tinggi, termasuk enkripsi canggih dan kebijakan privasi yang ketat, untuk melindungi informasi pribadi dan kesehatan mental Anda.
                    </small></p>
                <h5>Apakah Kulega bekerja sama dengan profesional kesehatan mental yang bersertifikasi?
                </h5>
                <p><small>Kulega bermitra hanya dengan profesional kesehatan mental yang bersertifikasi dan berpengalaman untuk menjamin kualitas layanan yang Anda terima.
                    </small></p>
                <h5>Bagaimana cara bergabung dengan komunitas Kulega?
                </h5>
                <p><small>Anda dapat dengan mudah bergabung dengan komunitas Kulega melalui situs web atau aplikasi kami, di mana Anda akan menemukan ruang aman untuk berbagi pengalaman dan mendapatkan dukungan.
                    </small></p>
                <h5>Apakah ada biaya untuk menggunakan layanan Kulega?
                </h5>
                <p><small>Kulega menawarkan paket layanan gratis dengan opsi untuk meningkatkan ke layanan premium, yang memberikan fitur tambahan dan akses eksklusif ke sumber daya kesehatan mental.
                    </small></p>
            </div>
        </div>
    </div>
    <!-- FAQ exit -->
    @endsection
