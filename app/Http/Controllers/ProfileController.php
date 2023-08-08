<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use App\Models\Competence;
use App\Models\User;
class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {

        $user = $request->user();
        switch ($user->role) {
            case 'etudiant':
                return view('student.profil')->with('user',$user);
            case 'tuteur':
                return view('tutor.profil')->with('user',$user);
            case 'sage':
                $page = session('page');
                return view($page.'.profil')->with('user',$user);
        }
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function editCompetences(Request $request){
        $competences = Competence::get();
        $user = $request->user();
        $userCompetences = $user->competences;
        switch ($user->role) {
            case 'etudiant':
                return view('student.profil')->with('competences', $competences)->with('userCompetences', $userCompetences);
            case 'tuteur':
                return view('tutor.profil')->with('competences', $competences)->with('userCompetences', $userCompetences);
            case 'sage':
                $page = session('page');
                return view($page.'.profil')->with('competences', $competences)->with('userCompetences', $userCompetences);
        }
    }
    public function editParcours(Request $request): View
    {

        $user = $request->user();
        switch ($user->role) {
            case 'etudiant':
                return view('student.profil');
            case 'tuteur':
                return view('tutor.profil');
            case 'sage':
                $page = session('page');
                return view($page.'.profil');
        }
    }
    public function editParcourspro(Request $request): View
    {

        $user = $request->user();
        switch ($user->role) {
            case 'etudiant':
                return view('student.profil');
            case 'tuteur':
                return view('tutor.profil');
            case 'sage':
                $page = session('page');
                return view($page.'.profil');
        }
    }

    public function editDisponibilite(Request $request): View
    {

        $user = $request->user();
        switch ($user->role) {
            case 'etudiant':
                return view('student.profil');
            case 'tuteur':
                return view('tutor.profil');
            case 'sage':
                $page = session('page');
                return view($page.'.profil');
        }
    }


    public function setCompetences(Request $request){
            $request->validate(['competences'=>'required']);
            foreach ($request->input('competences') as $competence) {
                if(!$request->user()->competences->contains($competence))
                    $request->user()->competences()->attach($competence);
            }
            return redirect("/editCompetences");
    }
    public function retirerCompetence(Request $request, $competenceId){
        $request->user()->competences()->detach($competenceId);
        return redirect("/editCompetences");
    }

    public function ajouterCompetence(Request $request){
        $this->validate($request,['nomCompetence' => 'required']);
        $competence = Competence::create([
            'nom'=>$request->input('nomCompetence')
        ]);
        $request->user()->competences()->attach($competence->id);
        return redirect("/editCompetences");
    }

    public function changerPhoto(Request $request){
        $this->validate($request, ['userImage'=>'image|required|max:2048']);
        $user = User::find($request->user()->id);
        $fileNameWithExt = $request->file('userImage')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('userImage')->getClientOriginalExtension();
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        if($user->image!=null)Storage::delete('public/usersImages/'.$user->image);
        $path = $request->file('userImage')->storeAs('public/usersImages', $fileNameToStore);
        $user->image = $fileNameToStore;
        $user->update();
        return redirect("/editCompetences");
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }


}
