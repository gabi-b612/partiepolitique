<?php

use App\Http\Controllers\UtilisateursController;
use Illuminate\Support\Facades\Route;
////
////Route::get('login', [UtilisateursController::class, 'showLoginForm'])->name('login');
////Route::post('login', [UtilisateursController::class, 'login']);
////Route::get('register', [UtilisateursController::class, 'showRegisterForm'])->name('register');
////Route::post('register', [UtilisateursController::class, 'register']);
////Route::post('logout', [UtilisateursController::class, 'logout'])->name('logout');
////
////Route::middleware('auth')->group(function () {
////    Route::get('dashboard', [UtilisateursController::class, 'dashboard'])->name('dashboard');
////    Route::post('demande-adhesion', [UtilisateursController::class, 'demandeAdhesion'])->name('demande_adhesion');
////});
////
////Route::middleware(['auth', 'admin'])->group(function () {
////    Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
////    Route::patch('admin/accepter-demande/{id}', [AdminController::class, 'accepterDemande'])->name('accepter_demande');
////    Route::patch('admin/refuser-demande/{id}', [AdminController::class, 'refuserDemande'])->name('refuser_demande');
////});
////
//
////
////Route::get('login', [UtilisateursController::class, 'showLoginForm'])->name('login');
////Route::post('login', [UtilisateursController::class, 'login']);
////Route::get('register', [UtilisateursController::class, 'showRegisterForm'])->name('register');
////Route::post('register', [UtilisateursController::class, 'register']);
////Route::post('logout', [UtilisateursController::class, 'logout'])->name('logout');
////Route::get('logout', [UtilisateursController::class, 'logout']);
////
////Route::middleware('auth')->group(function () {
////    Route::get('dashboard', [UtilisateursController::class, 'dashboard'])->name('dashboard');
////    Route::post('demande-adhesion', [UtilisateursController::class, 'demandeAdhesion'])->name('demande_adhesion');
////});
////
////Route::get('register-admin', [UtilisateursController::class, 'showRegisterAdminForm'])->name('register_admin_form');
////Route::post('register-admin', [UtilisateursController::class, 'registerAdmin'])->name('register_admin');
////Route::get('login-admin', [UtilisateursController::class, 'showAdminLoginForm'])->name('login_admin_form');
////Route::post('login-admin', [UtilisateursController::class, 'loginAdmin'])->name('login_admin');
////
////
////Route::middleware(['auth', 'admin'])->group(function () {
////    Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
////    Route::patch('admin/accepter-demande/{id}', [AdminController::class, 'accepterDemande'])->name('accepter_demande');
////    Route::patch('admin/refuser-demande/{id}', [AdminController::class, 'refuserDemande'])->name('refuser_demande');
////});
//
//
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
//
//
//
//Route::get('register-admin', [UtilisateursController::class, 'showRegisterAdminForm'])->name('register_admin_form');
//Route::post('register-admin', [UtilisateursController::class, 'registerAdmin'])->name('register_admin');
//Route::get('login-admin', [UtilisateursController::class, 'showAdminLoginForm'])->name('login_admin_form');
//Route::post('login-admin', [UtilisateursController::class, 'loginAdmin'])->name('login_admin');
//
Route::get('admin', [UtilisateursController::class, 'showAdmin'])->name('showAdmin');
Route::patch('admin/accepter-demande/{id}', [UtilisateursController::class, 'accepterDemande'])->name('accepter_demande');
Route::patch('admin/refuser_demande/{id}', [UtilisateursController::class, 'refuserDemande'])->name('refuser_demande');
//
//Route::middleware(['auth', 'admin'])->group(function () {
//    Route::get('admin', [AdminController::class, 'index'])->name('admin.index')->middleware('admin');
//    Route::patch('admin/accepter-demande/{id}', [AdminController::class, 'accepterDemande'])->name('accepter_demande');
//    Route::patch('admin/refuser-demande/{id}', [AdminController::class, 'refuserDemande'])->name('refuser_demande');
//});
