<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institut;

class KerjasamaController extends Controller
{
    //
    public function index(){
        return view('daftarkerjasama');
    }
    public function riwayat(){
        return view('riwayatkerjasama');
    }

}
