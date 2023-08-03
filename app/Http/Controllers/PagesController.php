<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        $user = Auth::user();
        switch ($user->role) {
            case 'etudiant':
                return view('student.aide');
            case 'admin':
                return view('layouts.admin');
            case 'tuteur':
                return view('tutor.aide');
            case 'sage':
                $page = session('page');
                return view($page.'.aide');
    }
 }
    public function home(){
        $user = Auth::user();
        switch ($user->role) {
            case 'etudiant':
                return view('student.home');
            case 'admin':
                return view('layouts.admin');
            case 'tuteur':
                return view('tutor.home');
            case 'sage':
                $page = session('page');
                return view($page.'.home');
        }
    }

    public function blogs(){

        $user = Auth::user();
        switch ($user->role) {
            case 'etudiant':
                return view('student.blogs');
            case 'tuteur':
                return view('tutor.blogs');
            case 'sage':
                $page = session('page');
                return view($page.'.blogs');
        }

    }

    public function cours(){

        $user = Auth::user();
        switch ($user->role) {
            case 'etudiant':
                return view('student.cours');
            case 'tuteur':
                return view('tutor.cours');
            case 'sage':
                $page = session('page');
                return view($page.'.cours');
        }

    }
    public function tuteurs (){
        $user = Auth::user();
        switch ($user->role) {
            case 'etudiant':
                return view('student.tuteurs');
            case 'tuteur':
                abort(404);
            case 'sage':
                $page = session('page');
                if($page==="tutor")
                    abort(404);
                return view($page.'.tuteurs');
        }

    }

    public function transactions(){

        $user = Auth::user();
        switch ($user->role) {
            case 'etudiant':
                return view('student.transactions');
            case 'tuteur':
                return view('tutor.transactions');
            case 'sage':
                $page = session('page');
                return view($page.'.transactions');
        }
    }

    public function inboxes(){

        $user = Auth::user();
        switch ($user->role) {
            case 'etudiant':
                return view('student.inboxes');
            case 'tuteur':
                return view('tutor.inboxes');
            case 'sage':
                $page = session('page');
                return view($page.'.inboxes');
        }
    }

    public function sessions(){

        $user = Auth::user();
        switch ($user->role) {
            case 'etudiant':
                return view('student.sessions');
            case 'tuteur':
                return view('tutor.sessions');
            case 'sage':
                $page = session('page');
                return view($page.'.sessions');
        }
    }

    public function panier (){
        $user = Auth::user();
        switch ($user->role) {
            case 'etudiant':
                return view('student.panier');
            case 'tuteur':
                abort(404);
            case 'sage':
                $page = session('page');
                if($page==="tutor")
                    abort(404);
                return view($page.'.panier');
        }

    }

    public function agenda (){
        $user = Auth::user();
        switch ($user->role) {
            case 'tuteur':
                return view('tutor.agenda');
            case 'etudiant':
                abort(404);
            case 'sage':
                $page = session('page');
                if($page==="student")
                    abort(404);
                return view($page.'.agenda');
        }

    }

    public function mesCours (){
        $user = Auth::user();
        switch ($user->role) {
            case 'tuteur':
                return view('tutor.mesCours');
            case 'etudiant':
                abort(404);
            case 'sage':
                $page = session('page');
                if($page==="student")
                    abort(404);
                return view($page.'.mesCours');
        }

    }

    public function mesBlogs (){
        $user = Auth::user();
        switch ($user->role) {
            case 'tuteur':
                return view('tutor.mesBlogs');
            case 'etudiant':
                abort(404);
            case 'sage':
                $page = session('page');
                if($page==="student")
                    abort(404);
                return view($page.'.mesBlogs');
        }

    }

    public function switchPage () {
        if(session('page')=='tutor'){
        session()->put('page', 'student');
        return redirect("/home");
        }
        if(session('page')=='student'){
            session()->put('page', 'tutor');
            return redirect("/home");
        }


    }
}
