<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RuangController;

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
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/login', function () {
    return view('login.login');
});
Route::resource('barang', BarangController::class);
Route::controller(BarangController::class)->group(function(){
    
    Route::get('barang-export', 'export')->name('barang.export');
    Route::post('barang-import', 'import')->name('barang.import');
});

Route::resource('ruang', ruangController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
