<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AdminController;
use App\Http\Controllers\Backend\BerandaController;
use App\Http\Controllers\Backend\TiketController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\KapalController;
use App\Http\Controllers\PDFController;

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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');


Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', [BerandaController::class, 'beranda'])->name('dashboard');
});

//semua route untuk data tiket
Route::middleware('auth', 'verified', 'CekLevel:admin,kasir')->group(function () {
    Route::get('/data/view', [TiketController::class, 'TiketView'])->name('data_tiket.view');
    Route::get('/data/add', [TiketController::class, 'TiketAdd'])->name('data_tiket.add');
    Route::post('/data/store', [TiketController::class, 'TiketStore'])->name('tikets.store');
    Route::get('/data/edit/{id}', [TiketController::class, 'TiketEdit'])->name('data_tiket.edit');
    // Route::get('/cetak', [TiketController::class, 'CetakNota'])->name('nota.cetak');
});


Route::get('/print/{id}', [TiketController::class, 'TiketNota'])->name('data_tiket.nota');

//semua route untuk data tiket
Route::middleware('auth', 'verified', 'CekLevel:admin')->group(function () {
    Route::post('/data/update/{id}', [TiketController::class, 'TiketUpdate'])->name('data_tikets.update');
    Route::get('/data/delete/{id}', [TiketController::class, 'TiketDelete'])->name('data_tikets.delete');
});

//semua route untuk user
Route::middleware('auth', 'verified', 'CekLevel:admin')->group(function () {
    Route::get('/user/view', [UserController::class, 'UserView'])->name('user.view');
    Route::get('/user/add', [UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/user/store', [UserController::class, 'UserStore'])->name('users.store');
    Route::get('/user/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/user/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/user/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');
});

Route::get('/printNota', [TiketController::class, 'printNota'])->name('nota.print');

Route::middleware('auth', 'verified', 'CekLevel:admin,kasir')->group(function () {
Route::get('/form-downlod', [PDFController::class, 'formDownload'])-> name('form.download');   
Route::post('/generate-pdf', [PDFController::class, 'generatePDF'])-> name('generate.report');
});

//kapal
Route::middleware('auth', 'verified', 'CekLevel:admin')->group(function () {
Route::resource('kapal', KapalController::class);
});

Route::middleware('auth', 'verified', 'CekLevel:admin')->group(function () {
Route::resource('golongan', GolonganController::class);
});