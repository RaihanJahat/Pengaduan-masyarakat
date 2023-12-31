<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasyarakatControll;
use App\Http\Controllers\PetugasController;
use App\Http\Middleware\MasyarakatMiddleware;
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

Route::get('login1', function () {
    return view('masyarakat.login');
});
Route::get('login1',function(){
    return View('masyarakat.login');
});



//data masyarakat
Route::get('masyarakat',[MasyarakatControll::class,'index']);
Route::get('registrasi',[MasyarakatControll::class,'registrasi']);
Route::post('Simpan',[MasyarakatControll::class,'simpan']);
Route::get('login1',[MasyarakatControll::class,'login1']);
Route::post('login1',[MasyarakatControll::class,'ceklogin1']);
Route::get('pengaduan',[MasyarakatControll::class,'pengaduan'])->middleware(MasyarakatMiddleware::class);
Route::post('pengaduan',[MasyarakatControll::class,'simpan_pengaduan']);
Route::get('halaman/masyarakat',[MasyarakatControll::class,'halaman'])->middleware(MasyarakatMiddleware::class);
Route::get('/',[MasyarakatControll::class,'halaman_awal']);
Route::get('logout',[MasyarakatControll::class,'logout']);
//

Route::get('laporan',[MasyarakatControll::class,'laporkan']);
Route::post('laporan',[MasyarakatControll::class,'laporkan']);


//petugas
Route::get('login2',[AdminController::class,'login2']);
Route::post('login2',[AdminController::class,'ceklogin2']);
Route::get('halaman/admin',[AdminController::class,'halaman2']);
Route::get('registrasi2',[AdminController::class,'registrasi2']);
Route::post('registrasi2',[AdminController::class,'simpan']);
Route::get('laporan',[AdminController::class,'laporan']);
Route::post('ceklaporan',[AdminController::class,'ceklaporan']);
Route::get('logout1',[AdminController::class,'logout']);

//admin
Route::get('login3',[PetugasController::class,'login3']);
Route::post('login3',[PetugasController::class,'ceklogin3']); 
Route::get('validasi',[PetugasController::class,'validasi']);
Route::get('tanggapan',[PetugasController::class,'tanggapan'])->middleware(PetugasController::class);
