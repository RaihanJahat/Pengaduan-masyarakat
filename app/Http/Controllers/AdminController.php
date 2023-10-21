<?php

namespace App\Http\Controllers;

use App\Models\AdminModels;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login3(){
        $m = new AdminModels();
        return view('admin.login');
    }


    public function registrasi3(){
        $m = new AdminModels();
        return view('admin.registrasi');

    }
}
