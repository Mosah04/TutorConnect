<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PagesController::class, 'welcome']);
Route::get('/howToConnect', [PagesController::class, 'howToConnect']);
Route::get('/howToRegister', [PagesController::class, 'howToRegister']);

Route::get('/home', [PagesController::class, 'home']
)->middleware(['auth', 'verified'])->name('home');




Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/switchPage', [PagesController::class, 'switchPage'])->name('home.switch');
    Route::get('/home', [PagesController::class, 'home'])->name('home');
    Route::get('/blogs', [PagesController::class, 'blogs'])->name('blogs');
    Route::get('/cours', [PagesController::class, 'cours'])->name('cours');
    Route::get('/aide', [PagesController::class, 'aide'])->name('aide');
    Route::get('/tuteurs', [PagesController::class, 'tuteurs'])->name('tuteurs');
    Route::get('/transactions', [PagesController::class, 'transactions'])->name('transactions');
    Route::get('/inboxes', [PagesController::class, 'inboxes'])->name('inboxes');
    Route::get('/sessions', [PagesController::class, 'sessions'])->name('sessions');
    Route::get('/panier', [PagesController::class, 'panier'])->name('panier');
    Route::get('/agenda', [PagesController::class, 'agenda'])->name('agenda');
    Route::get('/mesCours', [PagesController::class, 'mesCours'])->name('mesCours');
    Route::get('/mesBlogs', [PagesController::class, 'mesBlogs'])->name('mesBlogs');

    Route::get('/searchTutor/cr={cr}&val={val}', [PagesController::class, 'viewFoundTutor'])->name('viewFoundTutor');
    Route::post('/searchTutor', [PagesController::class, 'searchTutor'])->name('searchTutor');

    Route::get('/user/{id}', [ProfileController::class, 'afficherProfil'])->name('afficherProfil');

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/editAccount', [ProfileController::class, 'edit'])->name('editAccount');
    Route::get('/deleteAccount', [ProfileController::class, 'edit'])->name('deleteAccount');

    Route::get('/editCompetences', [ProfileController::class, 'editCompetences'])->name('editCompetences');
    Route::get('/retirerCompetence/{competenceId}', [ProfileController::class, 'retirerCompetence'])->name('retiterCompetence');
    Route::post('/editCompetences', [ProfileController::class, 'setCompetences'])->name('setCompetences');
    Route::post('/ajouterCompetence', [ProfileController::class, 'ajouterCompetence'])->name('ajouterCompetence');

    Route::post('/changerPhoto', [ProfileController::class, 'changerPhoto'])->name('changerPhoto');

    Route::get('/editParcours', [ProfileController::class, 'editParcours'])->name('editParcours');
    Route::post('/editParcours', [ProfileController::class, 'modifierParcours'])->name('modifierParcours');
    Route::delete('/editParcours/{id}', [ProfileController::class, 'supprimerParcours'])->name('deleteParcours');
    Route::post('/ajouterParcours', [ProfileController::class, 'ajouterParcours'])->name('ajouterParcours');

    Route::get('/editParcourspro', [ProfileController::class, 'editParcourspro'])->name('editParcourspro');
    Route::post('/editParcourspro', [ProfileController::class, 'modifierParcoursPro'])->name('modifierParcoursPro');
    Route::delete('/editParcourspro/{id}', [ProfileController::class, 'supprimerParcoursPro'])->name('deleteParcoursPro');
    Route::post('/ajouterParcoursPro', [ProfileController::class, 'ajouterParcoursPro'])->name('ajouterParcoursPro');

    Route::get('/editDisponibilite', [ProfileController::class, 'editDisponibilite'])->name('editDisponibilite');
    Route::post('/editDisponibilite', [ProfileController::class, 'modifierDisponibilite'])->name('modifierDisponibilite');
    Route::delete('/editDisponibilite/{id}', [ProfileController::class, 'supprimerDisponibilite'])->name('deleteDisponibilite');
    Route::post('/ajouterDisponibilite', [ProfileController::class, 'ajouterDisponibilite'])->name('ajouterDisponibilite');

});

require __DIR__.'/auth.php';
