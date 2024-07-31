{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">--}}

{{--    @vite('resources/css/app.css')--}}

{{--    <title>@yield('title')</title>--}}

{{--</head>--}}
{{--<body class="bg-gray-100  items-center content-center justify-center h-screen">--}}
{{--<div>--}}
{{--    @yield('content')--}}
{{--</div>--}}

{{--</body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Titre de la page')</title>
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<!-- Barre de navigation fixe -->
<nav class="bg-blue-500 text-white fixed w-full top-0 left-0 z-50 shadow-md">
    <div class="container mx-auto flex justify-between items-center p-4">
        <a href="{{ route('home') }}" class="text-xl font-bold">DYREC</a>
        <div>
            @guest
                <a href="{{ route('login') }}" class="bg-blue-700 px-4 py-2 rounded-lg hover:bg-blue-800">Connexion</a>
                <a href="{{ route('register') }}" class="ml-4 bg-green-500 px-4 py-2 rounded-lg hover:bg-green-600">Inscription</a>
            @else
                <a href="{{ route('dashboard') }}" class="bg-blue-700 px-4 py-2 rounded-lg hover:bg-blue-800">Tableau de bord</a>
                <a href="{{ route('logout') }}" class="ml-4 bg-red-500 px-4 py-2 rounded-lg hover:bg-red-600" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </div>
    </div>
</nav>

<!-- Contenu principal -->
<main class="pt-16"> <!-- Ajout de padding-top pour compenser la barre de navigation -->
    @yield('content')
</main>
</body>
</html>

