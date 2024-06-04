<?php

namespace App\Http\Controllers;

use Yajra\DataTables\DataTables;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Torann\LaravelMetaTags\Facades\MetaTag;

class HomeController extends Controller
{
    public function index()
    {
        // Log::info('Previous URL: ' . url()->previous());
        $data = [
            MetaTag::set('title', 'Kulega: Layanan kesehatan mental dengan pakar terpercaya'),
            MetaTag::set('description', 'Dapatkan informasi lebih lanjut mengenai program kesehatan mental dan manfaatnya untuk karyawan'),
            MetaTag::set('image', asset('assets/landing_page.jpg')),
        ];

        return view('index', $data);
    }

    public function artikel()
    {
        $data = [
            'title' => 'Artikel',
        ];
        return view('artikel', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
        ];
        return view('about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
        ];
        return view('contact', $data);
    }

    public function registrasi()
    {
        $data = [
            'title' => 'Registrasi',
        ];
        return view('regis', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login',
        ];
        return view('auth.login', $data);
    }

    public function artikel_list()
    {
        $data = [
            'title' => 'Artikel List',
        ];
        return view('artikellist', $data);
    }

    public function stat(Request $request)
    {
        $data = [
            'title' => 'State',
        ];

        if ($request->ajax()) {
            $users = User::select('*');
            return DataTables()->of($users)
                ->make(true);
        }

        return view('stat', $data);
    }



    // public function beta_regis()
    // {
    //     return view('beta-registration');
    // }
}
