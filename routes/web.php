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
Route::get('dasbord',function(){
    return View('project.dasbord');
});



//data masyarakat
Route::get('masyarakat',[MasyarakatControll::class,'index']);

Route::get('registrasi',[MasyarakatControll::class,'registrasi']);

Route::post('Simpan',[MasyarakatControll::class,'simpan']);

//proses login
Route::get('login',[MasyarakatControll::class,'login']);

Route::post('login',[MasyarakatControll::class,'ceklogin']);

Route::get('laporan',[MasyarakatControll::class,'laporan']);
Route::post('laporan',[MasyarakatControll::class,'laporan']);

Route::get('bd',[MasyarakatControll::class,'bd']);














