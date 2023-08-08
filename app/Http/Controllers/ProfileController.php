<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

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
        $user = $request->user();
        switch ($user->role) {
            case 'etudiant':
                return view('student.profil')->with('competences', null);
            case 'tuteur':
                return view('tutor.profil')->with('competences', null);
            case 'sage':
                $page = session('page');
                return view($page.'.profil')->with('competences', null);
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
