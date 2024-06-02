<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        // Log::info('Previous URL: ' . url()->previous());
        $data = [
            'title' => 'Kulega',
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

    // public function beta_regis()
    // {
    //     return view('beta-registration');
    // }
}
