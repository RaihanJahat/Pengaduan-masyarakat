<?php

namespace App\Http\Controllers;

use App\Models\AdminModels;
use Illuminate\Http\Request;

class AdminController extends Controller
{
        //petugas
        public function ceklogin2(Request $requestt){
            $a = new AdminModels();
            if ($a->where('Username',$requestt->input('Username'))->where('Password',$requestt->input('Password'))->exists()){

                return redirect('halamann');
            }
            return back('')->with('Pesan','Username Dan Password Tidak Terdaftar');
        }
        public function login2(){
            return view('admin.login');
        }
        public function halaman2(){
            return view('admin.halaman_utama');
        }
        public function registrasi2(){
            $m = new AdminModels();
            return view('admin.registrasi');
    
        }
        public function simpan (Request $request){
            $c = new AdminModels();
            $cek= $request->validate([
                'id_petugas'=>'required|unique:petugas|max:16',
                'Nama_admin'=>'required',
                'Username'=>'required|min:3',
                'Password'=>'required|min:3',
                'Telp'=>'required|max:13'
            ]);
            $c->create( $request->all());
            //Ck DAta yang dikirim
            
    
    
            // return redirect('registrasi');
    
            return redirect('login2')->with('Pesan','anda berhasil registrasi');
        }
        public function laporan(){
            $m = new AdminModels();
            return view('Admin.laporan',['data'=>$m->all()]);
        }
        public function ceklaporan(Request $request){
            $m = new AdminModels();
            $cek = $request->validate([
                'nik'=>'required|max:16',
                'tgl_pengaduan'=>'unique',
                'foto'=>'unique',
                'isi_laporan'=>'required|min:10',
            ]);
            $m->create($request->all());
            return back()->with('pesan','Selamat, validasi berhasil');
        }
    
}
