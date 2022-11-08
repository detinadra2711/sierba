<?php

use App\Http\Controllers\aplikasiController;
use App\Http\Controllers\helloController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\TeleponController;
use App\Http\Controllers\LapMutuController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TelephoneController;
use App\Http\Controllers\passwordController;
use App\Http\Controllers\helpdeskController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/master', function () {
    return view('layout.master');
});
Route::get('/', [HomeController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });



// CRUD ORM MENU ARSIP IT
Route::resource('arsip', ArsipController::class);


// CRUD MENU INVENTARIS IT
//CREATE SUB MENU ASET BARANG
Route::get('/inventaris/tambah', [InventarisController::class, 'inventaris']);
//untuk kirim data ke DB (tambah data)
Route::post('/inventaris', [InventarisController::class, 'store']);
//READ data (tampi; data)
Route::get('/inventaris', [InventarisController::class, 'index']);
//detail inventaris berdasarkan nomor
Route::get('/inventaris/{inventaris_no}', [InventarisController::class, 'show']);
//UPDATE data
//form update/edit inventaris
Route::get('/inventaris/{inventaris_no}/edit', [InventarisController::class, 'edit']);
//update data ke DB berdasarkan no
Route::put('/inventaris/{inventaris_no}', [InventarisController::class, 'update']);
//DELETE data berdasarkan parameter no
Route::delete('/inventaris/{inventaris_no}', [InventarisController::class, 'destroy']);
// //search data
Route::get('/inventaris/cari', [InventarisController::class, 'search']);

//CREATE SUB MENU APLIKASI
Route::get('/aplikasi/create', [aplikasiController::class, 'create']);
//untuk kirim data ke DB (tambah data)
Route::post('/aplikasi', [aplikasiController::class, 'store']);
//READ data (tampi; data)
Route::get('/aplikasi', [aplikasiController::class, 'index']);
//detail inventaris berdasarkan nomor
Route::get('/aplikasi/{aplikasi_no}', [aplikasiController::class, 'show']);
//UPDATE data
//form update/edit inventaris
Route::get('/aplikasi/{inventaris_no}/edit', [aplikasiController::class, 'edit']);
//update data ke DB berdasarkan no
Route::put('/aplikasi/{inventaris_no}', [aplikasiController::class, 'update']);
//DELETE data berdasarkan parameter no
Route::delete('/aplikasi/{inventaris_no}', [aplikasiController::class, 'destroy']);




//CRUD ORM Resource
// MENU LAPORAN MUTU
//untuk liat list route -> php artisan route:list
Route::resource('lap_mutu', LapMutuController::class);


// MENU HELP DESK IT
Route::resource('helpdesk', helpdeskController::class);


// MENU AUTHORIZATION ACCESS
Route::resource('password', passwordController::class);



// CRUD ORM MENU TELEPHONE
Route::resource('telepon', TeleponController::class);


Route::get('telephone/view', [TelephoneController::class, 'viewTelephone'])->name('viewTelephone'); //melihat nomor telephone
Route::get('telephone/add', [TelephoneController::class, 'addTelephone']);

Route::get('telephone/ubah/{No}', [TelephoneController::class, 'ubahTelephone'])->name('ubahTelephone'); 
Route::post('telephone/update', [TelephoneController::class, 'updateTelephone']);

Route::get('telephone/delete/{No}', [TelephoneController::class, 'hapusTelephone'])->name('hapusTelephone');

Route::post('telephone/save', [TelephoneController::class, 'saveTelephone'])->name('saveTelephone'); //menyimpan nomor telephone



Auth::routes();

// Route::get('/login-tes', function () {
//     return view('login');
// });




