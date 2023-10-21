<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasyarakatControll;
use App\Http\Controllers\PetugasController;
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
    return view('index');
});
Route::get('login',function(){
    return View('login');
});



//data masyarakat
Route::get('masyarakat',[MasyarakatControll::class,'index']);
Route::get('registrasi',[MasyarakatControll::class,'registrasi']);
Route::post('Simpan',[MasyarakatControll::class,'simpan']);
Route::get('login1',[MasyarakatControll::class,'login1']);
Route::post('login1',[MasyarakatControll::class,'ceklogin1']);
Route::get('pengaduan',[MasyarakatControll::class,'pengaduan']);
Route::post('pengaduan',[MasyarakatControll::class,'pengaduan']);
Route::get('halaman_utama/masyarakat',[MasyarakatControll::class,'halaman']);
Route::get('laporan',[MasyarakatControll::class,'laporan']);


//petugas
Route::get('login2',[PetugasController::class,'login2']);
Route::post('login2',[PetugasController::class,'ceklogin2']);
Route::get('halaman_utama/petugas',[PetugasController::class,'halaman2']);


//admin
Route::get('login3',[AdminController::class,'login3']);
Route::post('login3',[AdminController::class,'ceklogin3']);