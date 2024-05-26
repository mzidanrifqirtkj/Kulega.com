@extends('layouts.master')

@section('konten')
<!-- regis section-->
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
                    <form method="POST" action="{{ route('beta_registrasi') }}">
                        @csrf
                        <h2 class="text-center mb-4">Bergabung untuk Menjamin Kesehatan Karyawan</h2>

                        {{-- sementara --}}
                        {{-- <p class="text-center mb-4">Sudah terdaftar? <a href="#"><b>Masuk ke halaman login</b></a></p> --}}
                        <input type="text" name="company_name" placeholder="Nama Perusahaan" class="form-control mb-3 @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}" required>
                        @error('company_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <input type="text" name="pic_name" placeholder="Nama PIC" class="form-control mb-3 @error('pic_name') is-invalid @enderror" value="{{ old('pic_name') }}" required>
                        @error('pic_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <input type="email" name="email" placeholder="Email" class="form-control mb-3 @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <input type="text" name="no_hp" placeholder="Nomor Telepon" class="form-control mb-3 @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') }}" required>
                        @error('no_hp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-group">
                            <div class="row">
                                <div class="col"><select class="form-select mb-3">
                                        <option>Industri Perusahaan</option>
                                        <option>Kurang dari 10</option>
                                    </select></div>
                                <div class="col"><select class="form-select mb-3">
                                        <option>Industri Perusahaan</option>
                                        <option>Kurang dari 10</option>
                                    </select></div>
                            </div>
                        </div>

                        <select class="form-select mb-3">
                            <option>Alasan Registrasi</option>
                            <option>Kurang dari 10</option>
                        </select>
                        <button type="submit" class="register-btn form-control mb-3">Daftar</button>
                        <div>
                            <label class="text-center"><small>Dengan mengisi formulir ini, Anda juga menyetujui <a href="#"><b>Syarat & Ketentuan</b></a> kami serta <a href="#"><b>Kebijakan Privasi</b></a> Anda</small></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
