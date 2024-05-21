<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function artikel()
    {
        return view('artikel');
    }

    public function about()
    {
        return view('about');
    }

    public function kontak()
    {
        return view('');
    }

    public function registrasi()
    {
        return view('regis');
    }

    // public function beta_regis()
    // {
    //     return view('beta-registration');
    // }
}
