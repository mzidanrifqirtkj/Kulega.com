<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::redirect('/', '/');

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/artikellist', [HomeController::class, 'artikel_list'])->name('artikel_list');
Route::get('/help', [HomeController::class, 'help'])->name('help');
Route::get('/stat', [HomeController::class, 'stat'])->name('stat');

Route::get('/lupa_password', [LoginController::class, 'lupa_password'])->name('lupaPassword');
Route::post('/lupa_password', [LoginController::class, 'proses_lupa_password'])->name('prosesLupaPassword');
// Artikel
Route::get('/artikel1', [ArtikelController::class, 'artikel1'])->name('artikel1');

// Contact
// Route::get('/', [ContactController::class, 'mailForm']);
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('sendEmail');

// auth sementara
Route::get('/registrasi', [RegisterController::class, 'regis'])->name('regis');
Route::post('/registrasi', [RegisterController::class, 'registrasi'])->name('registrasi');
Route::get('/success', [RegisterController::class, 'success_input'])->name('success');

// auth
// Route::get('/regis', [HomeController::class, 'registrasi'])->name('regis');
// Route::get('/regis', [RegisterController::class, 'showRegister'])->name('regis');
// Route::post('/regis', [RegisterController::class, 'register']);

// Route::get('/home', [HomeController::class, 'home'])->name('home');
// Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');
