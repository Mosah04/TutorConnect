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

Route::get('/aide', [PagesController::class, 'aide'])->name('aide');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::post('/home', [PagesController::class, 'switchPage'])->name('home');
    Route::get('/home', [PagesController::class, 'home'])->name('home.switch');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
