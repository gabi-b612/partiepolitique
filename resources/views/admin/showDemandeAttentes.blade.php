@extends('baseadmin')

@section('title', 'Demandes en attente')

{{--@section('content')--}}
{{--    <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">--}}
{{--        <h2 class="text-2xl font-bold mb-6">Demandes en attente</h2>--}}
{{--        <ul class="list-disc pl-5 mb-6">--}}
{{--            @foreach ($demandesEnAttente as $demande)--}}
{{--                <li class="mb-2">Demande {{ $demande->id }} de {{ $demande->utilisateur->prenom }} {{ $demande->utilisateur->nom_postnom }}--}}
{{--                    <form action="{{ route('accepter_demande', $demande->id) }}" method="POST" style="display:inline;">--}}
{{--                        @csrf--}}
{{--                        @method('PATCH')--}}
{{--                        <button type="submit" class="bg-green-500 text-white px-4 py-1 rounded-lg hover:bg-green-600">Accepter</button>--}}
{{--                    </form>--}}
{{--                    <form action="{{ route('refuser_demande', $demande->id) }}" method="POST" style="display:inline;">--}}
{{--                        @csrf--}}
{{--                        @method('PATCH')--}}
{{--                        <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded-lg hover:bg-red-600">Refuser</button>--}}
{{--                    </form>--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endsection--}}

@section('content')
    <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Demandes en attente</h2>
        <ul class="list-disc pl-5 mb-6">
            @foreach ($demandesEnAttente as $demande)
                <li class="mb-4 flex items-center">
                    <img src="{{ asset('storage/' . $demande->utilisateur->photo_profil) }}" alt="Photo de profil" class="w-12 h-12 rounded-full mr-4">
                    <div>
{{--                        "{{route('utilisateur', $demande->utilisateur->id}}"--}}
                        <a href=" {{route('utilisateur', $demande->utilisateur->id)}} " class="text-blue-500 hover:underline">
                            {{ $demande->utilisateur->prenom }} {{ $demande->utilisateur->nom_postnom }}
                        </a>
                        <p class="text-gray-600">État de la demande : <span class="text-yellow-500">En attente</span></p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
