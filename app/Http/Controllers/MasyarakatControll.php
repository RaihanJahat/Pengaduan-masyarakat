<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatControll extends Controller
{
    public function login1(){
        $m = new Masyarakat();
        return view('masyarakat.login');
    }


    public function registrasi(){
        $m = new Masyarakat();
        return view('masyarakat.registrasi');

    }





    public function simpan (Request $request){
        $c = new Masyarakat();
        $cek= $request->validate([
            'nik'=>'required|unique:masyarakat|max:16',
            'nama'=>'required',
            'username'=>'required|min:3',
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
            session(['username'=> $request->input('username')]);
            return redirect('halaman/masyarakat');
        }
        return back()->with('Pesan','Username dan Password tidak terdaftar');
        
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
    //
    public function laporkan(Request $request){
        // siapkan variabel untuk file
        $foto = $request->file('foto');
        
        //tentukan path
        $folder = 'upload_data';

        //pindahkan file ke target folder
        $foto->move($folder, $foto->getClientOriginalName());
        return "sukses";
    }
    public function halaman_awal(){
        return view('halaman.halaman_awal');
    }
    public function logout(){
        session()->flush();
       return back();
    }
}