<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Models\User;
use App\Models\Institusi;
use App\Models\Province;
use App\Models\Regencie;
use App\Models\District;
use App\Models\Village;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\InstitutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\KerjasamaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\DesaController;
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
    return view('login');
});
Route::get('/asal', [App\Http\Controllers\LoginController::class, 'asal']);

// Route::get('/login', [App\Http\Controllers\LoginController::class, 'index']);
Route::post('//auth', [App\Http\Controllers\LoginController::class, 'auth']);
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index']);
Route::post('/register/simpan', [App\Http\Controllers\RegisterController::class, 'simpan']);
Route::get('/loginadmin', [App\Http\Controllers\AdminController::class, 'login']);
Route::get('/logout', [App\Http\Controllers\LoginController::class,'logout']);

route::middleware('auth:institusi')->group(function(){
    Route::get('/institusi', [App\Http\Controllers\InstitutController::class, 'index']);
    Route::get('/kalender', [App\Http\Controllers\InstitutController::class, 'kalender']);

    Route::get('/input',[App\Http\Controllers\ProfilController::class, 'profil']);
    Route::post('/input/store', [App\Http\Controllers\ProfilController::class,'store']);
    Route::get('/input/edit/{id}',[App\Http\Controllers\ProfilController::class,'edit']);
    Route::post('/input/update/{id}',[App\Http\Controllers\ProfilController::class,'update']);

    Route::get('/permohonan', [App\Http\Controllers\PermohonanController:: class, 'index']);
    Route::get('/datapermohonan', [App\Http\Controllers\PermohonanController:: class, 'data']);

    Route::get('/kerjasama', [App\Http\Controllers\KerjasamaController::class, 'index']);
    Route::get('/riwayat', [App\Http\Controllers\KerjasamaController::class, 'riwayat']);

    // Route::post('/login/auth', [App\Http\Controllers\AdminController::class, 'auth']);

});
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/permohonanadmin', [App\Http\Controllers\AdminController:: class, 'permohonan']);
    Route::get('/daftarkerjasama', [App\Http\Controllers\AdminController::class, 'kerjasama']);
    Route::get('/daftarriwayat', [App\Http\Controllers\AdminController::class, 'riwayat']);
    Route::get('/kalenderadmin', [App\Http\Controllers\AdminController::class, 'kalender']);
    Route::get('/dokument', [App\Http\Controllers\AdminController::class, 'dokument']);
