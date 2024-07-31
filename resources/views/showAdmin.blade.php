<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration</title>
</head>
<body>
<h1>Administration</h1>
<h2>Demandes en attente</h2>
<ul>
    @foreach ($demandesEnAttente as $demande)
        <li>Demande #{{ $demande->id }} de {{ $demande->utilisateur->prenom }} {{ $demande->utilisateur->nom_postnom }}
            <form action="{{ route('accepter_demande', $demande->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('PATCH')
                <button type="submit">Accepter</button>
            </form>
            <form action="{{ route('refuser_demande', $demande->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('PATCH')
                <button type="submit">Refuser</button>
            </form>
        </li>
    @endforeach
</ul>

<h2>Demandes acceptées</h2>
<ul>
    @foreach ($demandesAcceptees as $demande)
        <li>Demande #{{ $demande->id }} de {{ $demande->utilisateur->prenom }} {{ $demande->utilisateur->nom_postnom }}</li>
    @endforeach
</ul>

<h2>Demandes refusées</h2>
<ul>
    @foreach ($demandesRefusees as $demande)
        <li>Demande #{{ $demande->id }} de {{ $demande->utilisateur->prenom }} {{ $demande->utilisateur->nom_postnom }}</li>
    @endforeach
</ul>
</body>
</html>
