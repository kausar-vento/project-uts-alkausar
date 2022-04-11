<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MerekCrudController;
use App\Http\Controllers\ProdukCrudController;
use App\Http\Controllers\AboutCrudController;
use App\Http\Controllers\LandingCrudController;
use App\Http\Controllers\LandingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Landing
Route::get('/landing-page', [LandingController::class, 'index']);
Route::resource('/admin-landing', LandingCrudController::class)->middleware('auth');

// ABout
Route::get('/about', [AboutController::class, 'index']);
Route::resource('/admin-about', AboutCrudController::class)->middleware('auth');

// Product
Route::get('/halaman-product',[ProdukController::class, 'index']);
Route::resource('/admin-product', ProdukCrudController::class)->middleware('auth');

// Merek
Route::get('/merek-produk', [MerekController::class, 'index']);
Route::resource('/admin-merek', MerekCrudController::class)->middleware('auth');

Route::get('/home-admin', function () {
    return view('admin.index_admin');
})->middleware('auth');

// Login & Logout
Route::get('/login-admin', [AdminLoginController::class, 'index'])->middleware('guest');
Route::post('/login-admin', [AdminLoginController::class, 'store'])->name('login-admin');    
Route::post('/logout-admin', [AdminLoginController::class, 'logout'])->name('logout');
Route::get('/register-admin', [AdminLoginController::class, 'adminRegister'])->middleware('guest');  
Route::post('/register-admin', [AdminLoginController::class, 'registerAdmin'])->name('register-admin');  
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
