<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord</title>
</head>
<body>
<h1>Bienvenue, {{ Auth::user()->prenom }}</h1>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>

<h2>Votre demande d'adhésion</h2>

@if(isset($demandes))
    @if($demandes === false)
        <p>Vous n'avez pas encore fait de demande d'adhésion.</p>
    @else
        <p> Statut de la demande : {{ $demandes->statut }}</p>
    @endif
@else
    <p>Vous n'avez pas encore fait de demande d'adhésion.</p>
@endif

<form action="{{ route('demande_adhesion') }}" method="POST">
    @csrf
    <button type="submit">Faire une demande d'adhésion</button>
</form>

</body>
</html>
