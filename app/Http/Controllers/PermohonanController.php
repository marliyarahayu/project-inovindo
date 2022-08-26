<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class PermohonanController extends Controller
{
    //
    public function index(){
        return view('permohonan');
    }
    public function data(){
        return view('daftarpermohonan');
    }
    

}
