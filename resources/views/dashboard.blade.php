@extends('base')

@section('title', 'Tableau de bord')

@section('content')
    <div class="container mx-auto p-6">
        <div class="w-full max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6">Bonjour, {{ Auth::user()->prenom }}</h2>

            <div class="flex items-center mb-6">
                <img src="{{ Storage::url(Auth::user()->photo_profil) }}" alt="Photo de profil" class="w-16 h-16 rounded-full object-cover mr-4">
                <span class="text-xl font-semibold">{{ Auth::user()->prenom }} {{ Auth::user()->nom_postnom }}</span>
            </div>

            <h3 class="text-xl font-semibold mb-4">Vos demandes d'adhésion</h3>
            @if ($demandes)
                <p class="mb-4">Vous avez déjà envoyé une demande. Statut : {{ $demandes->statut }}</p>
            @else
                <form action="{{ route('demande_adhesion') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Faire une demande d'adhésion</button>
                </form>
            @endif
        </div>
    </div>
@endsection
