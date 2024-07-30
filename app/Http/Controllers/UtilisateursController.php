<?php

namespace App\Http\Controllers;

use App\Http\Requests\UtilisateursFormRequest;
use App\Models\utilisateurs;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UtilisateursController extends Controller
{
    public function showLoginForm(): View|Factory|Application
    {
        return view('auth.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->only('email', 'mot_de_passe');

        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['mot_de_passe']])) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Les informations de connexion sont incorrectes.',
        ]);
    }

    public function showRegisterForm(): View|Factory|Application
    {
        return view('auth.register');
    }

    public function register(UtilisateursFormRequest $request): RedirectResponse
    {

        $photoPath = $request->file('photo_profil')->store('photos_profil', 'public');

        utilisateurs::create([
            'prenom' => $request->prenom,
            'nom_postnom' => $request->nom_postnom,
            'sexe' => $request->sexe,
            'naissance' => $request->naissance,
            'province_origine' => $request->province_origine,
            'territoire_origine' => $request->territoire_origine,
            'etudes' => $request->etudes,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'mot_de_passe' => Hash::make($request->mot_de_passe),
            'photo_profil' => $photoPath,
        ]);

        return redirect()->route('login')->with('success', 'Votre compte a été créé avec succès. Veuillez vous connecter.');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function dashboard(): View|Factory|Application
    {
        $demandes = Auth::user()->demandes;
        return view('dashboard', compact('demandes'));
    }

    public function demandeAdhesion(): RedirectResponse
    {
        $demande = Auth::user()->demandes()->create();
        return back()->with('success', 'Votre demande d\'adhésion a été envoyée.');
    }
}
