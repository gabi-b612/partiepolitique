@extends('baseadmin')

@section('title', 'Utilisateurs')

{{--@section('content')--}}
{{--    <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">--}}
{{--        <h2 class="text-2xl font-bold mb-6">Tout les utilisateurs</h2>--}}
{{--        <ul class="list-disc pl-5 mb-6">--}}
{{--            @foreach ($utilisateurs as $utilisateur)--}}
{{--                <li class="mb-2">--}}
{{--                    {{ route('admin.utilisateur', $utilisateur->id) }}--}}
{{--                    <a href="" class="text-blue-500 hover:underline">--}}
{{--                        {{ $utilisateur->prenom }} {{ $utilisateur->nom_postnom }}--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endsection--}}


@section('content')
    <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Utilisateurs</h2>
        <ul class="list-disc pl-5 mb-6">
            @foreach ($utilisateurs as $utilisateur)
                <li class="mb-4 flex items-center">
                    <img src="{{ asset('storage/' . $utilisateur->photo_profil) }}" alt="Photo de profil" class="w-12 h-12 rounded-full mr-4">
                    <div>
{{--                        {{ route('admin.utilisateur', $utilisateur->id) }}--}}
                        <a href="" class="text-blue-500 hover:underline">
                            {{ $utilisateur->prenom }} {{ $utilisateur->nom_postnom }}
                        </a>
                        @if ($utilisateur->demandeAdhesion)
                            <p class="text-gray-600">
                                État de la demande :
                                @if ($utilisateur->demandeAdhesion->statut == 'en_attente')
                                    <span class="text-yellow-500">En attente</span>
                                @elseif ($utilisateur->demandeAdhesion->statut == 'acceptee')
                                    <span class="text-green-500">Acceptée</span>
                                @elseif ($utilisateur->demandeAdhesion->statut == 'refusee')
                                    <span class="text-red-500">Refusée</span>
                                @endif
                            </p>
                        @else
                            <p class="text-gray-600">Pas de demande faite</p>
                        @endif
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
