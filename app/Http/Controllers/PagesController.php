<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use App\Models\User;
use App\Models\Blog;
use App\Models\Cours;
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
        $tuteurs = User::where('role', 'tuteur')->orWhere('role', 'sage')->get();
        $cours = Cours::take(6)->get();
        $blogs = Blog::take(4)->get();
        $user = Auth::user();
        switch ($user->role) {
            case 'etudiant':
                return view('student.home')->with('tuteurs', $tuteurs)->with('Cours', $cours)->with('blogs', $blogs);
            case 'admin':
                return view('layouts.admin');
            case 'tuteur':
                return view('tutor.home')->with('tuteurs', $tuteurs)->with('Cours', $cours)->with('blogs', $blogs);
            case 'sage':
                $page = session('page');
                return view($page.'.home')->with('tuteurs', $tuteurs)->with('Cours', $cours)->with('blogs', $blogs);
        }
    }

    public function blogs(){

        $user = Auth::user();
        $blogs = Blog::all();
        switch ($user->role) {
            case 'tuteur':
                return view('tutor.blogs')->with('blogs', $blogs);
            case 'etudiant':
                return view('student.blogs')->with('blogs', $blogs);
            case 'sage':
                $page = session('page');
                return view($page.'.blogs')->with('blogs', $blogs);
        }

    }

    public function cours(){
        $cours = Cours::all();
        $user = Auth::user();
        switch ($user->role) {
            case 'etudiant':
                return view('student.cours')->with('Cours', $cours);
            case 'tuteur':
                return view('tutor.cours')->with('Cours', $cours);
            case 'sage':
                $page = session('page');
                return view($page.'.cours')->with('Cours', $cours);
        }

    }
    public function tuteurs (){
        $tuteurs = User::where('role', 'tuteur')->orWhere('role', 'sage')->get();
        $user = Auth::user();
        $competences = Competence::orderBy('nom', 'asc')->get();
        switch ($user->role) {
            case 'etudiant':
                return view('student.tuteurs')->with('tuteurs', $tuteurs)->with('competences', $competences);
            case 'tuteur':
                abort(404);
            case 'sage':
                if(session('page')==="tutor")
                    session()->put('page', 'student');
                $page = session('page');
                return view($page.'.tuteurs')->with('tuteurs', $tuteurs)->with('competences', $competences);
        }

    }

    public function searchTutor (Request $request){
        $this->validate($request, ['search_criteria'=>'required|string']);
        if($request->input('search_criteria')!=='competence'){
            $this->validate($request, ['search_bar'=>'required|string']);
            $val=$request->input('search_bar');
        }else{
            $this->validate($request, ['competences'=>'required']);
            $val=$request->input('competences');
        }
        return redirect('/searchTutor/cr='.$request->input('search_criteria').'&val='.$val);
    }

    public function viewFoundTutor ($cr, $val){
        switch ($cr) {
            case 'specialite':
                $tuteurs=User::where(function($requete){
                    $requete->where('role', 'tuteur')
                            ->orWhere('role', 'sage');
                })->whereHas('specialite', function ($query) use($val) {
                    $query->where('nom', 'like', '%'.$val.'%');
                })->get();
                break;
            case 'competence':
                $tuteurs=Competence::find($val)?Competence::find($val)->users()->where(function($requete){
                    $requete->where('role', 'tuteur')
                            ->orWhere('role', 'sage');
                })->get():null;
                break;
            case 'niveau':
                $tuteurs=User::where(function($requete){
                    $requete->where('role', 'tuteur')
                            ->orWhere('role', 'sage');
                })->whereHas('parcoursAcademiques', function ($query) use($val) {
                    $query->where('diplome', 'like', '%'.$val.'%');
                })->get();
                break;
            default:
                $tuteurs=null;
                break;
        }
        $user = Auth::user();
        $competences = Competence::orderBy('nom', 'asc')->get();
        switch ($user->role) {
            case 'etudiant':
                return view('student.tuteurs')->with('tuteurs', $tuteurs)->with('competences', $competences);
            case 'tuteur':
                abort(404);
            case 'sage':
                if(session('page')==="tutor")
                    session()->put('page', 'student');
                $page = session('page');
                return view($page.'.tuteurs')->with('tuteurs', $tuteurs)->with('competences', $competences);
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
        $cours = $user->cours;
        switch ($user->role) {
            case 'tuteur':
                return view('tutor.mesCours')->with('cours', $cours);
            case 'etudiant':
                abort(404);
            case 'sage':
                $page = session('page');
                if($page==="student")
                    abort(404);
                return view($page.'.mesCours')->with('cours', $cours);
        }

    }

    public function mesBlogs (){
        $user = Auth::user();
        $blogs = $user->blogs;
        switch ($user->role) {
            case 'tuteur':
                return view('tutor.mesBlogs')->with('blogs', $blogs);
            case 'etudiant':
                abort(404);
            case 'sage':
                $page = session('page');
                if($page==="student")
                    abort(404);
                return view($page.'.mesBlogs')->with('blogs', $blogs);
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
