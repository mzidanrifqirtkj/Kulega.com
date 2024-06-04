<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Torann\LaravelMetaTags\Facades\MetaTag;

class ArtikelController extends Controller
{
    public function artikel1()
    {
        $data = [
            MetaTag::set('title', 'Menciptakan Tempat Kerja Sehat: Solusi terbaik untuk mencegah stres'),
            MetaTag::set('description', 'Pahami lebih lanjut tentang solusi inovatif untuk mengatasi stres dan meningkatkan kesejahteraan mental di lingkungan kerja.'),
            MetaTag::set('image', asset('assets/artikel_1.jpg')),
        ];
        return view('artikel.artikel1', $data);
    }
}
