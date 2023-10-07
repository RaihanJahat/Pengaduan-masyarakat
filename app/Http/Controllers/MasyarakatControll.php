<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatControll extends Controller
{
    public function index(){
        $m = new Masyarakat();
        return view('Masyarakat.index');
    }


    public function registrasi(){
        $m = new Masyarakat();
        return view('Masyarakat.registrasi');

    }





    public function simpan (Request $request){
        $c = new Masyarakat();
        $cek= $request->validate([
            'Nik'=>'required|unique:masyarakat|max:16',
            'Nama'=>'required',
            'Username'=>'required|min:6',
            'Password'=>'required|min:4',
            'Tepl'=>'required|max:13'
        ]);
        $c->create( $request->all());
        //Ck DAta yang dikirim
        


        // return redirect('registrasi');

        return back()->with('Pesan','anda berasil registrasi');
    }
    public function login(){

        return view('masyarakat.login');
    }
    public function ceklogin(Request $request){
        $m = new Masyarakat();
        //cek username dan password
        if($m->where('Username',$request->input('Username'))->where('Password',$request->input('Password'))->exists()){
            return redirect('/');
        }
        return back()->with('Pesan','Username dan Password tidak terdaftar');
        
    }

    public function laporan(){
        return view('masyarakat.laporan');
    }
    public function bd(){
        return view('project.dasbord');
    }
}
