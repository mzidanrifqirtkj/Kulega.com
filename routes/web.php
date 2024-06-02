<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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
Route::get('/artikel', [HomeController::class, 'artikel'])->name('artikel');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/artikellist', [HomeController::class, 'artikel_list'])->name('artikel_list');

// auth sementara
Route::get('/beta-registration', [RegisterController::class, 'beta_regis'])->name('beta-registrasi');
Route::post('/beta-registration', [RegisterController::class, 'beta_registrasi'])->name('beta_registrasi');
Route::get('/success', [RegisterController::class, 'success_input'])->name('success');

// auth
// Route::get('/regis', [HomeController::class, 'registrasi'])->name('regis');
Route::get('/regis', [RegisterController::class, 'showRegister'])->name('regis');
Route::post('/regis', [RegisterController::class, 'register']);

// Route::get('/home', [HomeController::class, 'home'])->name('home');
// Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');
