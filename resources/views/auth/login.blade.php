{{--<!DOCTYPE html>--}}
{{--<html lang="fr">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>Connexion</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<form action="{{ route('login') }}" method="POST">--}}
{{--    @csrf--}}
{{--    <input type="email" name="email" placeholder="Email" required>--}}
{{--    <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>--}}
{{--    <button type="submit">Connexion</button>--}}
{{--</form>--}}
{{--</body>--}}
{{--</html>--}}


@extends('base')

@section('content')

    <div class="container mx-auto p-6">
        <div class="w-full max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Connexion</h2>
            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                    <strong class="font-bold">{{ session('error') }}</strong>
                </div>
            @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="mot_de_passe" class="block text-gray-700 font-medium mb-2">Mot de passe</label>
                <input type="password" id="mot_de_passe" name="mot_de_passe" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Connexion</button>
            <p class="mt-4 text-center text-gray-600">Pas encore membre ? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Inscrivez-vous</a></p>
        </form>
        </div>
    </div>

@endsection
