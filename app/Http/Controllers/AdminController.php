<?php

namespace App\Http\Controllers;

use App\Models\demandes_adhesion;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(): View|Factory|Application
    {
        $demandesEnAttente = demandes_adhesion::where('statut', 'en_attente')->get();
        $demandesAcceptees = demandes_adhesion::where('statut', 'acceptee')->get();
        $demandesRefusees = demandes_adhesion::where('statut', 'refusee')->get();

        return view('admin.index', compact('demandesEnAttente', 'demandesAcceptees', 'demandesRefusees'));
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
