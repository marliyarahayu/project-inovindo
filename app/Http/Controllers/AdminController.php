<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    //
    public function login(){
        return view('loginadmin');
    }
    public function auth(Request $request)
    {
        $cre = $request->validate([
          'email' => ['required','email'],
          'password' => ['required'] 
        ]);
        if(Auth::guard('admin')->attempt($cre)){
            $request->session()->regenerate();
            return redirect('admin')->with ('Success','Login Berhasil');
        }
        return back()->with ('Gagal','Login gagal');
    }
    public function index(){
        return view('admin');
    }
    public function permohonan(){
        return view('permohonanadmin');
    }
    public function kerjasama(){
        return view('kerjasamaadmin');
    }
    public function kalender(){
        return view('kalenderadmin');
    }
    public function dokument(){
        return view('dokument');
    }
    public function riwayat(){
        return view('riwayat');
    }
}
