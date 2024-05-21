<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('regis');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|string|max:255',
            'pic_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'no_hp' => 'required|string|max:15',
            'jml_karyawan' => 'required|integer',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect()->route('index')->with('success', 'Registrasi berhasil! Silakan masuk dengan akun Anda.');
    }

    public function beta_regis()
    {
        return view('beta-registration');
    }

    public function beta_registrasi(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|string|max:255',
            'pic_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'no_hp' => 'required|string|max:15',
            'jml_karyawan' => 'required|integer',
            // 'password' => 'required|string|min:8|confirmed',
        ]);

        // $validatedData['password'] = Hash::make($validatedData['password']);

        // Buat kata sandi otomatis
        $password = Str::random(12); // Panjang kata sandi bisa disesuaikan

        // Hash password
        $validatedData['password'] = Hash::make($password);

        User::create($validatedData);

        // Nomor dan pesan WhatsApp
        $phone = '6287713410112'; // Ganti dengan nomor WhatsApp tujuan
        $message = "Hello, Selamat {$validatedData['pic_name']} from {$validatedData['company_name']}. Anda telah
        terdaftar menjadi Anggota. Silakan hubungi Admin untuk mengkonfirmasi data"; // Pesan yang ingin dikirim
        $whatsappUrl = "https://api.whatsapp.com/send?phone=$phone&text=" . urlencode($message);

        // Redirect ke WhatsApp
        return redirect()->away($whatsappUrl);

        // return redirect()->route('index')->with('success', 'Registrasi berhasil! Silakan masuk dengan akun Anda.');
    }
}
