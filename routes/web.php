<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RegisterController;


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
//     return view('login.login', [
//         'title' => 'Login'
//     ]);
// });
Route::get('/', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard'
    ]);
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/dashboard/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/dashboard/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);


Route::get('/dashboard/prodi', [ProdiController::class, 'index']);
Route::get('/dashboard/prodi/create', [ProdiController::class, 'create']);
Route::post('/prodi', [ProdiController::class, 'store']);
Route::get('/dashboard/prodi/{id}/edit', [ProdiController::class, 'edit']);
Route::put('/prodi/{id}', [ProdiController::class, 'update']);
Route::delete('/prodi/{id}', [ProdiController::class, 'destroy']);

Route::get('/dashboard/matkul', [MatkulController::class, 'index']);
Route::get('/dashboard/matkul/create', [MatkulController::class, 'create']);
Route::post('/matkul', [MatkulController::class, 'store']);
Route::get('/dashboard/matkul/{id}/edit', [MatkulController::class, 'edit']);
Route::put('/matkul/{id}', [MatkulController::class, 'update']);
Route::delete('/matkul/{id}', [MatkulController::class, 'destroy']);


Route::get('/dashboard/dosen',[DosenController::class, 'index']);
Route::get('/dashboard/dosen/create',[DosenController::class, 'create']);
Route::post('/dosen',[DosenController::class, 'store']);
Route::get('/dashboard/dosen/{id}/edit',[DosenController::class, 'edit']);
Route::put('/dosen/{id}',[DosenController::class, 'update']);
Route::delete('/dosen/{id}',[DosenController::class, 'destroy']);