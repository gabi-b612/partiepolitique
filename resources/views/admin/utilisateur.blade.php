@extends('baseadmin')

@section('title', 'Détails de l\'utilisateur')


@section('content')
    <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Détails de l'utilisateur</h2>
        <div class="mb-4 flex flex-row items-center">
            <img src="{{ asset('storage/' . $utilisateur->photo_profil) }}" alt="Photo de profil" class="w-48 h-48 rounded-full mr-4">


            <div>

                    <p class="text-gray-600">
                        État de la demande : {{ $demande->statut }} </p>

                <h3 class="text-xl font-bold">{{ $utilisateur->prenom }} {{ $utilisateur->nom_postnom }}</h3>
                <p class="text-gray-600">Sexe : {{ $utilisateur->sexe }}</p>
                <p class="text-gray-600">Né(e) à : {{ $utilisateur->lieu_naissance }}</p>
                <p class="text-gray-600">Province d’origine : {{ $utilisateur->province_origine }}</p>
                <p class="text-gray-600">Territoire d’origine : {{ $utilisateur->territoire_origine }}</p>
                <p class="text-gray-600">Études faites : {{ $utilisateur->etudes_faites }}</p>
                <p class="text-gray-600">Adresse : {{ $utilisateur->adresse }}</p>
                <p class="text-gray-600">Téléphone : {{ $utilisateur->telephone }}</p>

                    <form action="{{ route('accepter_demande', $demande->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="bg-green-500 text-white py-1 px-3 rounded hover:bg-green-700">Accepter</button>
                    </form>
                    <form action="{{ route('refuser_demande', $demande->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-700">Refuser</button>
                    </form>


            </div>
        </div>
    </div>
@endsection


{{--@section('content')--}}
{{--    <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">--}}
{{--        <h2 class="text-2xl font-bold mb-6">Détails de l'utilisateur</h2>--}}
{{--        <div class="mb-4 flex items-center">--}}
{{--            <img src="{{ asset('storage/' . $utilisateur->photo_profil) }}" alt="Photo de profil" class="w-12 h-12 rounded-full mr-4">--}}
{{--            <div>--}}
{{--                <h3 class="text-xl font-bold">{{ $utilisateur->prenom }} {{ $utilisateur->nom_postnom }}</h3>--}}
{{--                @if ($utilisateur->demandeAdhesion)--}}
{{--                    <p class="text-gray-600">--}}
{{--                        État de la demande :--}}
{{--                        @if ($utilisateur->demandeAdhesion->statut == 'en_attente')--}}
{{--                            <span class="text-yellow-500">En attente</span>--}}
{{--                        @elseif ($utilisateur->demandeAdhesion->statut == 'acceptee')--}}
{{--                            <span class="text-green-500">Acceptée</span>--}}
{{--                        @elseif ($utilisateur->demandeAdhesion->statut == 'refusee')--}}
{{--                            <span class="text-red-500">Refusée</span>--}}
{{--                        @endif--}}
{{--                    </p>--}}
{{--                    @if ($utilisateur->demandeAdhesion->statut == 'en_attente')--}}
{{--                        <form action="{{ route('accepter_demande', $utilisateur->demandeAdhesion->id) }}" method="POST" style="display:inline;">--}}
{{--                            @csrf--}}
{{--                            @method('PATCH')--}}
{{--                            <button type="submit" class="bg-green-500 text-white py-1 px-3 rounded hover:bg-green-700">Accepter</button>--}}
{{--                        </form>--}}
{{--                        <form action="{{ route('refuser_demande', $utilisateur->demandeAdhesion->id) }}" method="POST" style="display:inline;">--}}
{{--                            @csrf--}}
{{--                            @method('PATCH')--}}
{{--                            <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-700">Refuser</button>--}}
{{--                        </form>--}}
{{--                    @endif--}}
{{--                @else--}}
{{--                    <p class="text-gray-600">Pas de demande faite</p>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
