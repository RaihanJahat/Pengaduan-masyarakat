<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
        //petugas
        public function ceklogin2(Request $requestt){
            $a = new Petugas();
            if ($a->where('Username',$requestt->input('Username'))->where('Password',$requestt->input('Password'))->exists()){
                return redirect('halaman/masyarakat');
            }
            return back('')->with('Pesan','Username Dan Password Tidak Terdaftar');
        }
        public function login3(){
            return view('petugas.login');
        }
        public function halaman2(){
            return view('petugas.halaman_utama');
        }
        public function registrasi2(){
            $m = new petugas();
            return view('petugas.registrasi');
    
        }
        public function validasi(){
            $m = new petugas();
            return view('admin.validasi');
        }
        public function tanggapan(){
            $m = new petugas();
            return view('admin.tanggapan');
        }
    
}
