<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function welcome(){
        return view('welcome1');
    }
    public function howToConnect(){
        return view('layouts.authOption');
    }
    public function howToRegister(){
        return view('layouts.authOption');
    }

    public function aide(){
        return view('layouts.aide');
    }
    public function home(){
        $user = Auth::user();
        switch ($user->role) {
            case 'etudiant':
                return view('layouts.student');
            case 'admin':
                return view('layouts.admin');
            case 'tuteur':
                return view('layouts.tutor');
            case 'sage':
                return view('layouts.tutor');
        }
    }
    public function switchPage (Request $request) {
        return view('layouts.'.$request->input('page'));


    }
}
