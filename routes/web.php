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
Route::get('login',[MasyarakatControll::class,'login']);
Route::post('login',[MasyarakatControll::class,'ceklogin']);
Route::get('pengaduan',[MasyarakatControll::class,'pengaduan']);
Route::post('pengaduan',[MasyarakatControll::class,'pengaduan']);
Route::get('tampilan',[MasyarakatControll::class,'tampilan']);
Route::get('halaman',[MasyarakatControll::class,'halaman']);
Route::get('laporan',[MasyarakatControll::class,'laporan']);