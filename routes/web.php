<?php

use App\Http\Controllers\MasyarakatControll;
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
    return view('welcome');
});
Route::get('login',function(){
    return View('project.login');
});



//data masyarakat
Route::get('masyarakat',[MasyarakatControll::class,'index']);
Route::get('registrasi',[MasyarakatControll::class,'registrasi']);
Route::post('Simpan',[MasyarakatControll::class,'simpan']);
Route::get('login1',[MasyarakatControll::class,'login1']);
Route::post('login2',[MasyarakatControll::class,'ceklogin2']);
Route::get('pengaduan',[MasyarakatControll::class,'pengaduan']);
Route::post('pengaduan',[MasyarakatControll::class,'pengaduan']);
Route::get('tampilan',[MasyarakatControll::class,'tampilan']);
Route::get('halaman/masyarakat',[MasyarakatControll::class,'halaman/masyarakat']);
Route::get('laporan',[MasyarakatControll::class,'laporan']);


//petugas
Route::get('login2',[PetugasController::class,'login2']);
Route::post('login2',[PetugasController::class,'ceklogin2']);