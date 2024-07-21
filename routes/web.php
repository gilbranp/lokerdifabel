<?php

use App\Models\Loker;
use App\Models\Pelatihan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DaftarlokerController;
use App\Http\Controllers\DaftarpelatihanController;
use App\Http\Controllers\DaftarpelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PendaftaranController;

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

Route::get('/', function () {
    return view('fe.index');
});

// Route::get('/pelatihan', function () {
//     return view('fe.pelatihan.index');
// });

Route::get('/loker', function () {
    $loker = Loker::all();
    return view('fe.loker.index',compact('loker'));
});
// Route::get('/daftarloker', function () {
//     $loker = Loker::all();
//     return view('fe.loker.daftar',compact('loker'));
// });

Route::resource('/daftarloker',DaftarlokerController::class);
Route::resource('/daftarpelatihan',DaftarpelatihanController::class);

// Route::get('/daftarpelatihan', function () {
//     $pelatihan = Pelatihan::all();
//     return view('fe.pelatihan.daftar',compact('pelatihan'));
// });
Route::get('/pelatihan', function () {
    $pelatihan = Pelatihan::all();
    return view('fe.pelatihan.index',compact('pelatihan'));
});
// Route::get('/daftarloker', function () {
//     $loker = Loker::all();
//     return view('fe.loker.daftar',compact('loker'));
// });
// Route::get('/admin', function () {
//     return view('be.admin.index');
// });




Route::middleware(['guest'])->group(function (){
    Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
    Route::post('/login',[LoginController::class,'authenticate']);
    
});

Route::middleware(['auth'])->group(function(){
    Route::get('/logout',[LoginController::class,'logout']);
    Route::resource('/admin',AdminController::class);
    Route::resource('/lokerbe',LokerController::class);
    Route::resource('/pelatihanbe',PelatihanController::class);
    Route::resource('/daftarlokerbe',PendaftaranController::class);
    Route::resource('/daftarpelatihanbe',DaftarpelController::class);
});