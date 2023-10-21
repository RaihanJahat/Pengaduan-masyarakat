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
                return redirect('halamann');
            }
            return back('')->with('Pesan','Username Dan Password Tidak Terdaftar');
        }
        public function login2(){
            return view('petugas.login');
        }
        public function halaman2(){
            return view('petugas.halaman_utama');
        }
}
