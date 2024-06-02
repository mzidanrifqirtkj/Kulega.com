@extends('layouts.master')
@push('head')
<link rel="stylesheet" href="css/responsive-style.css">
<link rel="stylesheet" href="css/login.css">
@endpush
@section('konten')
<!-- login section-->
<Section class="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-12 d-flex align-items-center">
                <div class="text text-center">
                    <img src="images/logoblue.png">
                    <p class="text-white text-center">Dapatkan akses ke tes kesehatan mental, dan layanan lainnya yang dirancang untuk mendukung kesehatan mental Anda. Mulai perjalanan kesejahteraan mental Anda dengan Kulega hari ini!</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-10 col-sm-12">
                <div class="form-box px-5 py-4">
                    <form>
                        <h2 class="text-center mb-4">Masuk Untuk Akses Akun Anda</h2>
                        <p class="text-center mb-4">Belum terdaftar? <a href="{{route('beta-registrasi')}}"><b>Masuk ke Halaman Register</b></a></p>
                        <input type="email" name="" placeholder="Masukkan email Anda" class="form-control mb-3">
                        <div class="input-group mb-3">
                            <input type="password" name="" placeholder="Masukkan kata sandi Anda" class="form-control border-end-0">
                            <span class="input-group-text bg-white border-start-0"></i></span>
                        </div>
                        <button class="register-btn form-control mb-3">Masuk</button>
                        <div>
                            <label><small><a href="#"><b>Lupa dengan kata sandi Anda?</b></a></small></label>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</Section>
<!-- login section exit-->
@endsection
