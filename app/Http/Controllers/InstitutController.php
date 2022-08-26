<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class InstitutController extends Controller
{
    //
    public function index(){
        return view('institusi');
    }

    public function kalender(){
        return view('kalender');
    }
    
}
