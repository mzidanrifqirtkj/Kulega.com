@extends('layouts.master')
@push('head')
<link rel="stylesheet" href="css/responsive-style.css">
<link rel="stylesheet" href="css/regis.css">
@endpush
@section('konten')
<!-- Registration section -->
<section class="main">
    <div class="container-fluid text-black py-3">
        <header class="text-center">
            <h5>Lindungi karyawan Anda dengan program Kulega</h5>
            <p class="text-primary mb-4"><small>Lihat Bagaimana Program Kami Dapat Meningkatkan Efisiensi Anda</small></p>
        </header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-10 col-sm-12">
                    <div class="form-box px-5 py-4">
                        <form method="POST" action="{{ route('registrasi') }}">
                            @csrf
                            <input type="text" class="form-control mb-3" id="company_name" name="company_name" placeholder="Nama Perusahaan" value="{{ old('company_name') }}" @error('company_name') is-invalid @enderror>
                            @error('company_name')
                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control mb-3" id="pic_name" name="pic_name" placeholder="Nama Person In Change (PIC)" value="{{ old('pic_name') }}" @error('pic_name') is-invalid @enderror>
                            @error('pic_name')
                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control mb-3" id="email" name="email" placeholder="Email PIC" value="{{ old('email') }}" @error('email') is-invalid @enderror required>
                            @error('email')
                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control mb-3" id="no_hp" name="no_hp" placeholder="Nomor Telepon PIC" value="{{ old('no_hp') }}" @error('no_hp') is-invalid @enderror required>
                            @error('no_hp')
                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <select name="industri" class="form-select mb-3 @error('industri') is-invalid @enderror" id="industriSelect" onchange="toggleIndustriInput(this.value)">
                                            <option value="" disabled selected>Industri Perusahaan</option>
                                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                                            <option value="Pendidikan">Pendidikan</option>
                                            <option value="Kesehatan">Kesehatan</option>
                                            <option value="Kreatif (Desain, Penulisan, Pengembangan Web)">Kreatif (Desain, Penulisan, Pengembangan Web)</option>
                                            <option value="Manufaktur">Manufaktur</option>
                                            <option value="Perhotelan dan Restoran">Perhotelan dan Restoran</option>
                                            <option value="Jasa Keuangan">Jasa Keuangan</option>
                                            <option value="Media dan Hiburan">Media dan Hiburan</option>
                                            <option value="E-commerce">E-commerce</option>
                                            <option value="Pariwisata">Pariwisata</option>
                                            <option value="Konstruksi">Konstruksi</option>
                                            <option value="Logistik dan Transportasi">Logistik dan Transportasi</option>
                                            <option value="Properti">Properti</option>
                                            <option value="Asuransi">Asuransi</option>
                                            <option value="Bank">Bank</option>
                                            <option value="Opsi Lainnya">Opsi Lainnya</option>
                                        </select>
                                        @error('industri')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <input type="text" name="industri_lainnya" id="industriLainnya" class="form-control mt-3 d-none" placeholder="Masukkan Industri Lainnya">

                                    </div>

                                    <script>
                                        function toggleIndustriInput(value) {
                                            const input = document.getElementById('industriLainnya');
                                            if (value === 'Opsi Lainnya') {
                                                input.classList.remove('d-none');
                                                input.setAttribute('required', 'required');
                                            } else {
                                                input.classList.add('d-none');
                                                input.removeAttribute('required');
                                                input.value = '';
                                            }
                                        }

                                    </script>

                                    <div class="col">
                                        <select name="jml_karyawan" class="form-select mb-3 @error('jml_karyawan') is-invalid @enderror">
                                            <option value="" disabled selected>Jumlah Karyawan</option>
                                            <option value="1-10">1-10</option>
                                            <option value="11-20">11-20</option>
                                            <option value="21-50">21-50</option>
                                            <option value="51-100">51-100</option>
                                            <option value="101-200">101-200</option>
                                        </select>
                                        @error('jml_karyawan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <textarea class="form-control mb-3" name="alasan" id="alasan" cols="40" rows="3" @error('alasan') is-invalid @enderror placeholder="  Alasan Registrasi (Opsional)"></textarea>
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
