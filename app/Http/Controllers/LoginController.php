<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Institusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }
    public function asal(){
        return view('asal');
    }
    public function auth(Request $request)
    {
        $cre = $request->validate([
            'email' => ['required','email'],
            'password' =>['required']
        ]);
        if (Auth::guard('institusi')->attempt($cre)){
            $request->session()->regenerate();
            return redirect('input')->with ('Succsess','Login Berhasil');
        }
        return back()->with('Gagal','Login Anda Gagal');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
