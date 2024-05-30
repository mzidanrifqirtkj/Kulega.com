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
        return view('auth.regis');
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
        return view('auth.beta-registration');
    }

    public function beta_registrasi(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|string|max:255',
            'pic_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'no_hp' => 'required|string|max:15',
            'jml_karyawan' => 'required|string|max:255',
            // 'password' => 'required|string|min:8|confirmed',
            'alasan' => 'required|string|max:255',
            'industri' => 'required_without:industri_lainnya',
            'industri_lainnya' => 'nullable|string'
        ]);

        $industri = $request->input('industri') === 'Opsi Lainnya'
            ? $request->input('industri_lainnya')
            : $request->input('industri');

        // Buat kata sandi otomatis
        $password = Str::random(12); // Panjang kata sandi bisa disesuaikan

        // Hash password
        $hashedPassword = Hash::make($password);

        $user = array_merge($validatedData, [
            'industri' => $industri,
            'password' => $hashedPassword
        ]);

        // Simpan pengguna baru ke database
        // Save the new user to the database
        try {
            $user = User::create($user);
        } catch (\Exception $e) {
            // Handle potential errors such as database errors
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
        }
        // $message = "Selamat, perusahaan anda terdaftar sebagai calon akses beta ke #{$user['id']}"; // Pesan yang ingin dikirim
        // Simpan ID pengguna ke dalam sesi
        session()->flash('id', $user->id);

        return redirect()->route('success')->with('success', 'Registrasi berhasil! Silakan masuk dengan akun Anda.');
    }

    public function success_input()
    {

        return view('auth.success');
        // $user = User::all();
        // // Nomor dan pesan WhatsApp
        // $message = "Selamat, perusahaan anda terdaftar sebagai calon akses beta ke #{$user['id']}"; // Pesan yang ingin dikirim
        // session()->flash('success', $message);

        // $phone = '6287713410112'; // Ganti dengan nomor WhatsApp tujuan
        // $whatsappUrl = "https://api.whatsapp.com/send?phone=$phone&text=" . urlencode($message);

        // // Redirect ke WhatsApp
        // return redirect()->away($whatsappUrl);
        // // return redirect()->route('index')->with('success', 'Registrasi berhasil! Silakan masuk dengan akun Anda.');
    }
}
