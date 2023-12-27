<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AdminController;
use App\Http\Controllers\Backend\TiketController;
use App\Http\Controllers\Backend\UserController;
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

Route::get('/inputtiket', function () {
    return view('backend.input_tiket');
});

// Route::get('/datatiket', function () {
//     return view('backend.data_tiket');
// });

//semua route untuk data tiket
Route::get('/view', [TiketController::class, 'tiketView'])->name('data_tiket.view');


//semua route untuk user
Route::get('/user/view', [UserController::class, 'userView'])->name('user.view');