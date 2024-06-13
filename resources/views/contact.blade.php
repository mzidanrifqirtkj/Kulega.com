@extends('layouts.master')
@push('head')
<link rel="stylesheet" href="{{ asset('css/responsive-style.css') }}">
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush
@section('konten')
<!-- contact section-->
<Section class="main">
    <div class="container-fluid text-black py-3 mb-4">
        <header class="text-center">
            <h5>Mungkin Pertanyaan anda ada di Halaman Q&A!</h5>
            <p class="text-primary text-center"><small>Sebelum menghubungi Tim Support Kulega, kami sarankan Anda untuk terlebih dahulu memeriksa bagian Q&A di website kami. Di sana, Anda mungkin dapat menemukan jawaban atas pertanyaan Anda dengan mudah dan cepat.
                    Bagian Q&A kami berisi informasi yang komprehensif tentang program Kulega, termasuk:</small></p>
            <div class="accordion accordion-flush w-50 mx-auto" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"><i class="fas fa-user-check me-3"></i>Mengenai Ekspertis</button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><a href="help.html">Tanyakan sesuatu</a></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"><i class="fas fa-users me-3"></i>Mengenai Komunitas</button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><a href="help.html">Tanyakan sesuatu</a></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"><i class="far fa-newspaper me-3"></i>Mengenai Artikel</button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><a href="help.html">Tanyakan sesuatu</a></div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-10 col-sm-12">
                <div class="form-box px-5 py-4">
                    <form>
                        <h2 class="text-center mb-4">Bicara Dengan Kita</h2>
                        <p class="text-center mb-4"><small>Tim Support kita aktif pada hari kerja biasa, Senin - Jumat, dari jam 09:00 hingga 17:00 WIB. Jika Anda menghubungi kami di luar jam tersebut, pesan Anda akan diterima dan diproses secepat mungkin pada hari kerja berikutnya.</small></p>
                        <input type="text" name="name" placeholder="Nama" class="form-control mb-3">
                        <input type="email" name="email" placeholder="Email" class="form-control mb-3">
                        <input type="number" name="phone" placeholder="Nomor Telepon" class="form-control mb-3">
                        <select name="topic" class="form-select mb-3">
                            <option selected disabled>Topik</option>
                            <optgroup label="Tentang Kulega">
                                <option>Apa itu Kulega?</option>
                                <option>Visi dan Misi Kulega</option>
                                <option>Manfaat Kulega bagi Perusahaan dan Karyawan</option>
                            </optgroup>
                            <optgroup label="Layanan Kulega">
                                <option>Konsultasi Kesehatan Mental</option>
                                <option>Tes Kesehatan Mental</option>
                                <option>Artikel dan Edukasi</option>
                                <option>Forum Komunitas</option>
                            </optgroup>
                            <optgroup label="Fitur Kulega">
                                <option>Profil Pengguna</option>
                                <option>Layanan Kesehatan Mental</option>
                                <option>Notifikasi dan Pengingat</option>
                                <option>Pembayaran Layanan Premium</option>
                            </optgroup>
                            <optgroup label="Keamanan dan Privasi">
                                <option>Kebijakan Privasi Kulega</option>
                                <option>Cara Kulega Menjaga Data Anda</option>
                            </optgroup>
                            <optgroup label="Bergabung dengan Kulega">
                                <option>Cara Mendaftar</option>
                                <option>Keuntungan Bergabung dengan Komunitas</option>
                            </optgroup>
                            <optgroup label="Dukungan dan Bantuan">
                                <option>FAQ</option>
                                <option>Hubungi Kami</option>
                                <option>Pusat Bantuan</option>
                            </optgroup>
                        </select>
                        <textarea name="message" class="form-control mb-3" id="exampleFormControlTextarea1" rows="3" placeholder="Bagaimana kita bisa bantu?"></textarea>
                        <button class="register-btn form-control mb-3">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</Section>
<!-- contact section exit-->


@endsection
