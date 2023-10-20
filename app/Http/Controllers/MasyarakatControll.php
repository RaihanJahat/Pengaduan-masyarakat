<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatControll extends Controller
{
    public function login2(){
        $m = new Masyarakat();
        return view('Masyarakat.login');
    }


    public function registrasi(){
        $m = new Masyarakat();
        return view('Masyarakat.registrasi');

    }





    public function simpan (Request $request){
        $c = new Masyarakat();
        $cek= $request->validate([
            'nik'=>'required|unique:masyarakat|max:16',
            'nama'=>'required',
            'username'=>'required|min:6',
            'password'=>'required|min:3',
            'telp'=>'required|max:13'
        ]);
        $c->create( $request->all());
        //Ck DAta yang dikirim
        


        // return redirect('registrasi');

        return redirect('login1')->with('Pesan','anda berhasil registrasi');
    }
    public function login(){

        return view('masyarakat.login1');
    }
    public function ceklogin1(Request $request){
        $m = new Masyarakat();
        //cek username dan password
        if($m->where('Username',$request->input('Username'))->where('Password',$request->input('Password'))->exists()){
            return redirect('halaman');
        }
        return back('')->with('Pesan','Username dan Password tidak terdaftar');
        
    }

    //masyarakat
    public function pengaduan(){
        return view('masyarakat.pengaduan');
    }
    public function halaman(){
        return view('masyarakat.halaman_utama');
    }
    public function laporan(){
        return view('masyarakat.laporan');
    }
}