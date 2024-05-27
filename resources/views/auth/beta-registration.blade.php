@extends('layouts.master')

@section('konten')
<!-- Registration section -->
<section class="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-12 d-flex align-items-center">
                <div class="text-center">
                    <img src="images/logoblue.png" alt="Logo">
                    <p class="text-white text-center">
                        Dapatkan akses ke tes kesehatan mental, dan layanan lainnya yang dirancang untuk mendukung kesehatan mental Anda. Mulai perjalanan kesejahteraan mental Anda dengan Kulega hari ini!
                    </p>
                </div>
            </div>
            <div class="col-lg-5 col-md-10 col-sm-12">
                <div class="form-box px-5 py-4">
                    <form method="POST" action="{{ route('beta_registrasi') }}">
                        @csrf
                        <h2 class="text-center mb-4">Bergabung untuk Menjamin Kesehatan Karyawan</h2>
                        {{-- <p class="text-center mb-4">Sudah terdaftar? <a href="#"><b>Masuk ke halaman login</b></a></p> --}}

                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="company_name" name="company_name" placeholder="Nama Perusahaan" value="{{ old('company_name') }}" @error('company_name') is-invalid @enderror>
                            @error('company_name')
                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="pic_name" name="pic_name" placeholder="Nama PIC" value="{{ old('pic_name') }}" @error('pic_name') is-invalid @enderror>
                            @error('pic_name')
                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                            @enderror
                        </div>



                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="email" name="email" placeholder="Email" value="{{ old('email') }}" @error('email') is-invalid @enderror required>
                            @error('email')
                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="no_hp" name="no_hp" placeholder="Nomor Telepon" value="{{ old('no_hp') }}" @error('no_hp') is-invalid @enderror required>
                            @error('no_hp')
                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <select name="industri" class="form-select mb-3 @error('industri') is-invalid @enderror">
                                        <option value="" disabled selected>Industri Perusahaan</option>
                                        <option value="industri 1">Industri 1</option>
                                        <option value="industri 2">Industri 2</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                    @error('industri')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col">
                                    <select name="jml_karyawan" class="form-select mb-3 @error('jml_karyawan') is-invalid @enderror">
                                        <option value="" disabled selected>Jumlah Karyawan</option>
                                        <option value="< 10">Kurang dari 10</option>
                                        <option value="10-50">10-50</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                    @error('jml_karyawan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <select name="alasan" class="form-select mb-3 @error('alasan') is-invalid @enderror">
                                <option value="" disabled selected>Alasan Registrasi</option>
                                <option value="alasan 1">Alasan 1</option>
                                <option value="alasan 2">Alasan 2</option>
                                <!-- Add more options as needed -->
                            </select>
                            @error('alasan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <button type="submit" class="register-btn form-control mb-3 btn btn-primary">Daftar</button>
                        <div>
                            <label class="text-center">
                                <small>
                                    Dengan mengisi formulir ini, Anda juga menyetujui <a href="#"><b>Syarat & Ketentuan</b></a> kami serta <a href="#"><b>Kebijakan Privasi</b></a> kami.
                                </small>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
