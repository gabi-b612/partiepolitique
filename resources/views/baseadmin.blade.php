<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Administration')</title>
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
<header class="bg-blue-500 text-white p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold">Administration</h1>
        <nav>
            <a href="{{ route('showAdminUser') }}" class="px-4 py-2 hover:bg-blue-700">Utilisateurs</a>
            <a href="{{ route('showDemandeAttentes') }}" class="px-4 py-2 hover:bg-blue-700">Demandes en attente</a>
            <a href="{{ route('showDemandeAttentesAcceptees') }}" class="px-4 py-2 hover:bg-blue-700">Demandes acceptées</a>
            <a href="{{ route('showDemandeAttentesRefusees') }}" class="px-4 py-2 hover:bg-blue-700">Demandes refusées</a>
            <a href="{{ route('logout') }}" class="bg-red-500 px-4 py-2 rounded-lg hover:bg-red-600" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>
    </div>
</header>

<main class="flex-grow p-6">
    @yield('content')
</main>
</body>
</html>
