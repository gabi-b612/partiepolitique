<?php

use App\Http\Controllers\UtilisateursController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('login', [UtilisateursController::class, 'showLoginForm'])->name('login');
Route::post('login', [UtilisateursController::class, 'login']);
Route::get('register', [UtilisateursController::class, 'showRegisterForm'])->name('register');
Route::post('register', [UtilisateursController::class, 'register']);
Route::post('logout', [UtilisateursController::class, 'logout'])->name('logout');
Route::get('logout', [UtilisateursController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [UtilisateursController::class, 'dashboard'])->name('dashboard');
    Route::post('demande-adhesion', [UtilisateursController::class, 'demandeAdhesion'])->name('demande_adhesion');
});

Route::get('admin', [UtilisateursController::class, 'showAdminUser'])->name('showAdminUser');
Route::get('admin/demantes/attentes', [UtilisateursController::class, 'showDemandesEnAttentes'])->name('showDemandeAttentes');
Route::get('admin/demantes/acceptees', [UtilisateursController::class, 'showDemandesAcceptees'])->name('showDemandeAttentesAcceptees');
Route::get('admin/demantes/refusees', [UtilisateursController::class, 'showDemandesRefusees'])->name('showDemandeAttentesRefusees');
Route::patch('admin/accepter-demande/{id}', [UtilisateursController::class, 'accepterDemande'])->name('accepter_demande');
Route::patch('admin/refuser_demande/{id}', [UtilisateursController::class, 'refuserDemande'])->name('refuser_demande');
