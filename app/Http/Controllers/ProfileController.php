<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\ParcoursAcademique;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use App\Models\Competence;
use App\Models\ParcoursProfessionnel;
use App\Models\Disponibilite;
use App\Models\User;
class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request)
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
    public function editParcours(Request $request)
    {

        $user = $request->user();
        $parcoursAcademiques = $user->parcoursAcademiques;
        switch ($user->role) {
            case 'etudiant':
                return view('student.profil')->with('parcoursAcademiques', $parcoursAcademiques);
            case 'tuteur':
                return view('tutor.profil')->with('parcoursAcademiques', $parcoursAcademiques);
            case 'sage':
                $page = session('page');
                return view($page.'.profil')->with('parcoursAcademiques', $parcoursAcademiques);
        }
    }
    public function ajouterParcours(Request $request){
        $this->validate($request, ['ecole'=>'required',
                                   'diplome'=>'required',
                                   'annee'=>'required']);
        $parcours = new ParcoursAcademique();
        $parcours->ecole=$request->input('ecole');
        $parcours->diplome=$request->input('diplome');
        $parcours->annee=$request->input('annee');
        $parcours->user_id=$request->user()->id;
        $parcours->save();
        return redirect('/editParcours');
    }
    public function modifierParcours(Request $request){
        $this->validate($request, ['ecole'=>'required',
                                   'diplome'=>'required',
                                   'annee'=>'required']);
        $parcours = ParcoursAcademique::find($request->input('parcoursId'));
        $parcours->ecole=$request->input('ecole');
        $parcours->diplome=$request->input('diplome');
        $parcours->annee=$request->input('annee');
        $parcours->user_id=$request->user()->id;
        $parcours->update();
        return redirect('/editParcours');
    }

    public function supprimerParcours($id){
        $parcours = ParcoursAcademique::find($id);
        $parcours->delete();
        return redirect('/editParcours');
    }
    public function editParcourspro(Request $request)
    {

        $user = $request->user();
        $parcoursProfessionnels = $user->parcoursProfessionnels;
        switch ($user->role) {
            case 'etudiant':
                return view('student.profil')->with('parcoursProfessionnels', $parcoursProfessionnels);
            case 'tuteur':
                return view('tutor.profil')->with('parcoursProfessionnels', $parcoursProfessionnels);
            case 'sage':
                $page = session('page');
                return view($page.'.profil')->with('parcoursProfessionnels', $parcoursProfessionnels);
        }
    }
    public function ajouterParcoursPro(Request $request){
        $this->validate($request, ['entreprise'=>'required',
                                   'poste'=>'required',
                                   'date_debut'=>'required',
                                   'date_fin'=>'nullable']);
        $parcours = new ParcoursProfessionnel();
        $parcours->entreprise=$request->input('entreprise');
        $parcours->poste=$request->input('poste');
        $parcours->date_debut=$request->input('date_debut');
        $parcours->date_fin=$request->input('date_fin');
        $parcours->user_id=$request->user()->id;
        $parcours->save();
        return redirect('/editParcourspro');
    }
    public function modifierParcoursPro(Request $request){
        $this->validate($request, ['entreprise'=>'required',
                                   'poste'=>'required',
                                   'date_debut'=>'required',
                                   'date_fin'=>'nullable']);
        $parcours = ParcoursProfessionnel::find($request->input('parcoursId'));
        $parcours->entreprise=$request->input('entreprise');
        $parcours->poste=$request->input('poste');
        $parcours->date_debut=$request->input('date_debut');
        $parcours->date_fin=$request->input('date_fin');
        $parcours->user_id=$request->user()->id;
        $parcours->save();
        return redirect('/editParcourspro');
    }
    public function supprimerParcoursPro($id){
        $parcours = ParcoursProfessionnel::find($id);
        $parcours->delete();
        return redirect('/editParcourspro');
    }

    public function editDisponibilite(Request $request)
    {

        $user = $request->user();
        $disponibilites=$user->disponibilites;
        switch ($user->role) {
            case 'etudiant':
                return view('student.profil')->with('disponibilites',$disponibilites);
            case 'tuteur':
                return view('tutor.profil')->with('disponibilites',$disponibilites);
            case 'sage':
                $page = session('page');
                return view($page.'.profil')->with('disponibilites',$disponibilites);
        }
    }

    public function ajouterDisponibilite(Request $request){
        $this->validate($request, ['date'=>'required|date',
                                   'heure_debut'=>'required',
                                   'heure_fin'=>'required']);
        $disponibilite = new Disponibilite();
        $disponibilite->date=$request->input('date');
        $disponibilite->heure_debut=$request->input('heure_debut');
        $disponibilite->heure_fin=$request->input('heure_fin');
        $disponibilite->user_id=$request->user()->id;
        $disponibilite->save();
        return redirect('/editDisponibilite');
    }
    public function modifierDisponibilite(Request $request){
        $this->validate($request, ['date'=>'required',
                                   'heure_debut'=>'required',
                                   'heure_fin'=>'required']);
        $disponibilite = Disponibilite::find($request->input('disponibiliteId'));
        $disponibilite->date=$request->input('date');
        $disponibilite->heure_debut=$request->input('heure_debut');
        $disponibilite->heure_fin=$request->input('heure_fin');
        $disponibilite->user_id=$request->user()->id;
        $disponibilite->update();
        return redirect('/editDisponibilite');
    }

    public function supprimerDisponibilite($id){
        $disponibilite = Disponibilite::find($id);
        $disponibilite->delete();
        return redirect('/editDisponibilite');
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
        if($user->image!='userProfile.png')Storage::delete('public/usersImages/'.$user->image);
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
