<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Models\Cours;


use Illuminate\Http\Request;

class CoursController extends Controller
{
    public function editcours(Request $request)
    {
        $user = $request->user();
        $cours = $user->cours;
        switch ($user->role) {
            case 'etudiant':
                abort('404');
            case 'tuteur':
                return view('tutor.mesCours')->with('cours', $cours);
            case 'sage':
                $page = session('page');
                return view($page.'.mesCours')->with('cours', $cours);
        }
    }
    public function ajoutercours(Request $request){
        $this->validate($request, ['titre'=>'required',
                                   'vue'=>'required',
                                   'tarif'=>'required',
                                    'image'=>'nullable|image|max:2048']);
        $cours = new Cours();
        $cours->titre=$request->input('titre');
        $cours->vue=$request->input('vue');
        $cours->tarif=$request->input('tarif');
        $cours->user_id=$request->user()->id;
        if($request->file('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/coursImages', $fileNameToStore);
            $cours->image = $fileNameToStore;
        }
        $cours->save();
        return redirect('/editcours');
    }
    public function modifiercours(Request $request){
        $this->validate($request, ['titre'=>'required',
                                   'vue'=>'required',
                                   'tarif'=>'required',
                                   'image'=>'nullable|image|max:2048']);
        $cours = cours::find($request->input('coursId'));
        $cours->titre=$request->input('titre');
        $cours->vue=$request->input('vue');
        $cours->tarif=$request->input('tarif');
        $cours->user_id=$request->user()->id;
        if($request->file('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/coursImages', $fileNameToStore);
            if($cours->image!='coursimage.jpg')Storage::delete('public/coursImages/'.$cours->image);
            $cours->image = $fileNameToStore;
        }
        $cours->save();
        $cours->update();
        return redirect('/mesCours');
    }

    public function deletecours($id){
        $cours = cours::find($id);
        if($cours->image!='coursimage.jpg')Storage::delete('public/coursImages/'.$cours->image);
        $cours->delete();
        return redirect('/editcours');
    }

}
