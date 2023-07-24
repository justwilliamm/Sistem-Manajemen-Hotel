<?php

use App\Http\Controllers\PesanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KamarController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});

Route::get('/dpesan', [PesanController::class, 'pesan'])->name('pesan');
Route::get('/detail_pesan/{book}', [PesanController::class, 'detail'])->name('detail');
Route::get('/tambah_pesan', [PesanController::class, 'tambah'])->name('tambah');
Route::post('/tambah_pesan', [PesanController::class, 'tambahpost'])->name('tambahpost');
Route::get('/edit_pesan/{book}', [PesanController::class, 'edit'])->name('edit');
Route::post('/edit_pesan', [PesanController::class, 'editpost'])->name('editpost');
Route::get('/hapus_pesan/{book}', [PesanController::class, 'hapus'])->name('hapus');


Route::get('/duser', [UserController::class, 'user'])->name('user');
Route::get('/tambah_user', [UserController::class, 'tambahu'])->name('tambahu');
Route::post('/tambah_user', [UserController::class, 'tambahpostu'])->name('tambahpostu');
Route::get('/edit_user/{user}', [UserController::class, 'editu'])->name('editu');
Route::post('/edit_user', [UserController::class, 'editpostu'])->name('editpostu');
Route::get('/hapus_user/{user}', [UserController::class, 'hapusu'])->name('hapusu');


Route::get('/dkamar', [KamarController::class, 'kamar'])->name('kamar');
Route::get('/detail_kamar/{kamar}', [KamarController::class, 'detailk'])->name('detailk');
Route::get('/tambah_kamar', [KamarController::class, 'tambahk'])->name('tambahk');
Route::post('/tambah_kamar', [KamarController::class, 'tambahpostk'])->name('tambahpostk');
Route::get('/edit_kamar/{kamar}', [KamarController::class, 'editk'])->name('editk');
Route::post('/edit_kamar', [KamarController::class, 'editpostk'])->name('editpostk');
Route::get('/hapus_kamar/{kamar}', [KamarController::class, 'hapusk'])->name('hapusk');