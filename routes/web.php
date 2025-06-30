<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\PublicController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PublicController::class, 'landing'])->name('landing');
Route::get('/destinasi/{id}', [PublicController::class, 'detail'])->name('destinasi.detail');
Route::get('/about', [PublicController::class, 'ShowAbout'])->name('about');
Route::get('login', [AuthController::class, 'ShowLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/test', function () {
    return view('test');
});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:mitra'])->group(function () {
    Route::get('/mitra/dashboard', [MitraController::class, 'index'])->name('mitra.dashboard');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/user/destinasi/{id}', [UserController::class, 'show'])->name('user.destinasi.detail');
});

Route::middleware(['auth', 'role:admin'])
    ->prefix('admin') // URL menjadi /admin/...
    ->as('admin.')  // Nama route menjadi admin....
    ->group(function () {
        Route::resource('destinasi', DestinasiController::class);
        Route::get('/about/edit', [AdminController::class, 'about'])->name('about.edit');
        Route::post('/about/update', [AdminController::class, 'updateAbout'])->name('about.update');
        Route::get('/wcu/edit', [AdminController::class, 'whyChoose'])->name('wcu.edit');
        Route::post('/wcu/update', [AdminController::class, 'updateWhyChoose'])->name('wcu.update');
        Route::get('/keunggulan', [AdminController::class, 'indexKeunggulan'])->name('keunggulan.index');
        Route::get('/keunggulan/{id}', [AdminController::class, 'showKeunggulan'])->name('keunggulan.show');
        Route::post('/keunggulan/{id}', [AdminController::class, 'updateKeunggulan'])->name('keunggulan.update');
        Route::delete('/keunggulan/{id}', [AdminController::class, 'deleteKeunggulan'])->name('keunggulan.delete');

    });
