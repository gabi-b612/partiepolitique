<?php

namespace App\Http\Controllers;

use App\Http\Requests\UtilisateursFormRequest;
use App\Models\demandes_adhesion;
use App\Models\utilisateurs;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
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

    public function logout(Request $request): Application|Redirector|RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function dashboard(): View|Factory|Application
    {
        $demandes = Auth::user()->demandes;
        return view('dashboard', compact('demandes'));
    }

    public function demandeAdhesion(): RedirectResponse
    {
        $demande = Auth::user()->demandes()->create();
        return redirect()->route('dashboard')->with('success', 'Votre demande d\'adhésion a été envoyée.');
    }


    public function showAdminUser(): View|Factory|Application
    {
        $utilisateurs = utilisateurs::with('demandes')->get();
        return view('admin.index', compact('utilisateurs'));
    }

    public function showDemandesEnAttentes(): View|Factory|Application
    {
        $demandesEnAttente = demandes_adhesion::where('statut', 'en_attente')->with('utilisateur')->get();
        return view('admin.showDemandeAttentes', compact('demandesEnAttente'));
    }

    public function showDemandesRefusees(): View|Factory|Application
    {
        $demandesRefusees = demandes_adhesion::where('statut', 'refusee')->with('utilisateur')->get();
        return view('admin.showDemandeRefusees', compact('demandesRefusees'));
    }

    public function showDemandesAcceptees(): View|Factory|Application
    {
        $demandesAcceptees = demandes_adhesion::where('statut', 'acceptee')->with('utilisateur')->get();
        return view('admin.showDemandesAcceptees', compact('demandesAcceptees'));
    }

    public function accepterDemande($id): RedirectResponse
    {
        $demande = demandes_adhesion::findOrFail($id);
        $demande->update(['statut' => 'acceptee']);
        return back()->with('success', 'La demande a été acceptée.');
    }

    public function refuserDemande($id): RedirectResponse
    {
        $demande = demandes_adhesion::findOrFail($id);
        $demande->update(['statut' => 'refusee']);
        return back()->with('success', 'La demande a été refusée.');
    }

}
