<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
        //petugas
        public function cekloginn(Request $requestt){
            $a = new Petugas();
            if ($a->where('Username',$requestt->input('Username'))->where('Password',$requestt->input('Password'))->exists()){
                return redirect('halamann');
            }
            return back('')->with('Pesan','Username Dan Password Tidak Terdaftar');
        }
        public function login(){
            return view('admin.login');
        }
}
