<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, ['titre'=>'required | string | max:255',
                                    'sous_titre'=>'required | string | max:255',
                                    'contenu_blog'=>'required']);
        $request->user()->blogs()->create([
            'titre'=>$request->input('titre'),
            'sous_titre'=>$request->input('sous_titre'),
            'contenu'=>$request->input('contenu_blog'),
        ]);
        return redirect('/mesBlogs');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blog::find($id);
        $user  = Auth::user();
        switch ($user->role) {
            case 'tuteur':
                return view('blogs.afficher')->with('blog', $blog)->with('page', 'tutor');
            case 'etudiant':
                return view('blogs.afficher')->with('blog', $blog)->with('page', 'student');
            case 'sage':
                $page = session('page');
                return view('blogs.afficher')->with('blog', $blog)->with('page', $page);
        }

        return view('blogs.afficher');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog=Blog::find($id);
        return view('blogs.editer')->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, ['titre'=>'required | string | max:255',
                                    'sous_titre'=>'required | string | max:255',
                                    'contenu_blog'=>'required']);
        $blog=Blog::find($id);
        $blog->update([
            'titre'=>$request->input('titre'),
            'sous_titre'=>$request->input('sous_titre'),
            'contenu'=>$request->input('contenu_blog'),
        ]);
        return redirect('/mesBlogs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/mesBlogs');
    }
}
