{{--<!DOCTYPE html>--}}
{{--<html lang="fr">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>Administration</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1>Administration</h1>--}}
{{--<h2>Demandes en attente</h2>--}}
{{--<ul>--}}
{{--    @foreach ($demandesEnAttente as $demande)--}}
{{--        <li>Demande #{{ $demande->id }} de {{ $demande->utilisateur->prenom }} {{ $demande->utilisateur->nom_postnom }}--}}
{{--            <form action="{{ route('accepter_demande', $demande->id) }}" method="POST" style="display:inline;">--}}
{{--                @csrf--}}
{{--                @method('PATCH')--}}
{{--                <button type="submit">Accepter</button>--}}
{{--            </form>--}}
{{--            <form action="{{ route('refuser_demande', $demande->id) }}" method="POST" style="display:inline;">--}}
{{--                @csrf--}}
{{--                @method('PATCH')--}}
{{--                <button type="submit">Refuser</button>--}}
{{--            </form>--}}
{{--        </li>--}}
{{--    @endforeach--}}
{{--</ul>--}}

{{--<h2>Demandes acceptées</h2>--}}
{{--<ul>--}}
{{--    @foreach ($demandesAcceptees as $demande)--}}
{{--        <li>Demande #{{ $demande->id }} de {{ $demande->utilisateur->prenom }} {{ $demande->utilisateur->nom_postnom }}</li>--}}
{{--    @endforeach--}}
{{--</ul>--}}

{{--<h2>Demandes refusées</h2>--}}
{{--<ul>--}}
{{--    @foreach ($demandesRefusees as $demande)--}}
{{--        <li>Demande #{{ $demande->id }} de {{ $demande->utilisateur->prenom }} {{ $demande->utilisateur->nom_postnom }}</li>--}}
{{--    @endforeach--}}
{{--</ul>--}}
{{--</body>--}}
{{--</html>--}}


    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
<header class="bg-blue-500 text-white p-4  fixed w-full top-0 left-0 z-50 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold">Administration</h1>
        <a href="{{ route('logout') }}" class="bg-red-500 px-4 py-2 rounded-lg hover:bg-red-600" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</header>

<main class="flex-grow p-6">
    <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Utilisateurs</h2>
        <ul class="list-disc pl-5 mb-6">
            @foreach ($utilisateurs as $utilisateur)
                <li class="mb-2">
                    <a href="" class="text-blue-500 hover:underline">
                        {{ $utilisateur->prenom }} {{ $utilisateur->nom_postnom }}
                    </a>
                </li>
            @endforeach
        </ul>

        @if (isset($utilisateurDetail))
            <div class="mt-6 bg-gray-50 p-4 rounded-lg shadow-sm">
                <h3 class="text-xl font-semibold mb-4">Détails de {{ $utilisateurDetail->prenom }} {{ $utilisateurDetail->nom_postnom }}</h3>
                <img src="{{ $utilisateurDetail->photo_profil }}" alt="Photo de profil" class="w-24 h-24 rounded-full mb-4">
                <p><strong>Province d'origine :</strong> {{ $utilisateurDetail->province_origine }}</p>
                <p><strong>Territoire d'origine :</strong> {{ $utilisateurDetail->territoire_origine }}</p>
                <p><strong>Adresse :</strong> {{ $utilisateurDetail->adresse }}</p>
                <p><strong>Téléphone :</strong> {{ $utilisateurDetail->telephone }}</p>

                @if ($demandeDetail)
                    <div class="mt-4">
                        <p><strong>Demande :</strong> {{ $demandeDetail->statut }}</p>
                        @if ($demandeDetail->statut === 'en_attente')
                            <form action="{{ route('accepter_demande', $demandeDetail->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Accepter</button>
                            </form>
                            <form action="{{ route('refuser_demande', $demandeDetail->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Refuser</button>
                            </form>
                        @else
                            <p>Statut actuel : {{ $demandeDetail->statut }}</p>
                        @endif
                    </div>
                @endif
            </div>
        @endif

        <div class="mt-8">
            <h2 class="text-2xl font-bold mb-6">Demandes en attente</h2>
            <ul class="list-disc pl-5 mb-6">
                @foreach ($demandesEnAttente as $demande)
                    <li class="mb-2">Demande #{{ $demande->id }} de {{ $demande->utilisateur->prenom }} {{ $demande->utilisateur->nom_postnom }}
                        <form action="{{ route('accepter_demande', $demande->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="bg-green-500 text-white px-4 py-1 rounded-lg hover:bg-green-600">Accepter</button>
                        </form>
                        <form action="{{ route('refuser_demande', $demande->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded-lg hover:bg-red-600">Refuser</button>
                        </form>
                    </li>
                @endforeach
            </ul>

            <h2 class="text-2xl font-bold mb-6">Demandes acceptées</h2>
            <ul class="list-disc pl-5 mb-6">
                @foreach ($demandesAcceptees as $demande)
                    <li class="mb-2">Demande #{{ $demande->id }} de {{ $demande->utilisateur->prenom }} {{ $demande->utilisateur->nom_postnom }}</li>
                @endforeach
            </ul>

            <h2 class="text-2xl font-bold mb-6">Demandes refusées</h2>
            <ul class="list-disc pl-5">
                @foreach ($demandesRefusees as $demande)
                    <li class="mb-2">Demande #{{ $demande->id }} de {{ $demande->utilisateur->prenom }} {{ $demande->utilisateur->nom_postnom }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</main>
</body>
</html>
