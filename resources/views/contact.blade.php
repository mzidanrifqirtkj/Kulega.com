@extends('layouts.master')
@push('head')
<link rel="stylesheet" href="{{ asset('css/responsive-style.css') }}">
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush
@section('konten')
<!-- regis section-->
<Section class="main">
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
                        <select class="form-select mb-3" name="topic">
                            <option value="">Pilih Topik</option>
                            <optgroup label="Tentang Kulega">
                                <option value="Apa itu Kulega?">Apa itu Kulega?</option>
                                <option value="Visi dan Misi Kulega">Visi dan Misi Kulega</option>
                                <option value="Manfaat Kulega bagi Perusahaan dan Karyawan">Manfaat Kulega bagi Perusahaan dan Karyawan</option>
                            </optgroup>
                            <optgroup label="Layanan Kulega">
                                <option value="Konsultasi Kesehatan Mental">Konsultasi Kesehatan Mental</option>
                                <option value="Tes Kesehatan Mental">Tes Kesehatan Mental</option>
                                <option value="Artikel dan Edukasi">Artikel dan Edukasi</option>
                                <option value="Forum Komunitas">Forum Komunitas</option>
                            </optgroup>
                            <optgroup label="Fitur Kulega">
                                <option value="Profil Pengguna">Profil Pengguna</option>
                                <option value="Layanan Kesehatan Mental">Layanan Kesehatan Mental</option>
                                <option value="Notifikasi dan Pengingat">Notifikasi dan Pengingat</option>
                                <option value="Pembayaran Layanan Premium">Pembayaran Layanan Premium</option>
                            </optgroup>
                            <optgroup label="Keamanan dan Privasi">
                                <option value="Kebijakan Privasi Kulega">Kebijakan Privasi Kulega</option>
                                <option value="Cara Kulega Menjaga Data Anda">Cara Kulega Menjaga Data Anda</option>
                            </optgroup>
                            <optgroup label="Bergabung dengan Kulega">
                                <option value="Cara Mendaftar">Cara Mendaftar</option>
                                <option value="Keuntungan Bergabung dengan Komunitas">Keuntungan Bergabung dengan Komunitas</option>
                            </optgroup>
                            <optgroup label="Dukungan dan Bantuan">
                                <option value="FAQ">FAQ</option>
                                <option value="Hubungi Kami">Hubungi Kami</option>
                                <option value="Pusat Bantuan">Pusat Bantuan</option>
                            </optgroup>
                        </select>
                        <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3" placeholder="Bagaimana kita bisa bantu?" name="message"></textarea>
                        <button type="submit" class="register-btn form-control mb-3">Kirimkan</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 d-flex justify-content-center">
                <div class="text text-center">
                    <img src="{{ asset('images/contact.png') }}">
                    <h5>Mungkin Pertanyaan anda ada di Halaman Q&A</h5>
                    <p class="text-primary">Sebelum menghubungi Tim Support Kulega, kami sarankan Anda untuk terlebih dahulu memeriksa bagian Q&A di website kami. Di sana, Anda mungkin dapat menemukan jawaban atas pertanyaan Anda dengan mudah dan cepat.
                        Bagian Q&A kami berisi informasi yang komprehensif tentang program Kulega, termasuk:</p>
                    <div class="accordion accordion-flush w-75 mx-auto" id="accordionFlushExample">
                        <div class="accordion-item mb-4">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"><i class="fas fa-user-check"></i>Mengenai Ekspertis</button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            </div>
                        </div>
                        <div class="accordion-item mb-4">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"><i class="fas fa-users"></i>Mengenai Komunitas</button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">

                            </div>
                        </div>
                        <div class="accordion-item mb-4">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"><i class="far fa-newspaper"></i>Mengenai Artikel</button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</Section>
<!-- regis section exit-->
@endsection
