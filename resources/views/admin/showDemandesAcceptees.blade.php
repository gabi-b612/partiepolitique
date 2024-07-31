@extends('baseadmin')

@section('title', 'Demandes acceptées')

{{--@section('content')--}}
{{--    <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">--}}
{{--        <h2 class="text-2xl font-bold mb-6">Demandes acceptées</h2>--}}
{{--        <ul class="list-disc pl-5 mb-6">--}}
{{--            @foreach ($demandesAcceptees as $demande)--}}
{{--                <li class="mb-2">Demande  de {{ $demande->utilisateur->prenom }} {{ $demande->utilisateur->nom_postnom }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endsection--}}


@section('content')
    <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Demandes acceptées</h2>
        <ul class="list-disc pl-5 mb-6">
            @foreach ($demandesAcceptees as $demande)
                <li class="mb-4 flex items-center">
                    <img src="{{ asset('storage/' . $demande->utilisateur->photo_profil) }}" alt="Photo de profil" class="w-12 h-12 rounded-full mr-4">
                    <div>
{{--                        {{ route('admin.utilisateur', $demande->utilisateur->id) }}--}}
                        <a href="" class="text-blue-500 hover:underline">
                            {{ $demande->utilisateur->prenom }} {{ $demande->utilisateur->nom_postnom }}
                        </a>
                        <p class="text-gray-600">État de la demande : <span class="text-green-500">Acceptée</span></p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection