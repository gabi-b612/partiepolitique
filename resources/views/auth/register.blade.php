{{--<!DOCTYPE html>--}}
{{--<html lang="fr">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>Inscription</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">--}}
{{--    @csrf--}}
{{--    <input type="text" name="prenom" placeholder="Prénom" required>--}}
{{--    <input type="text" name="nom_postnom" placeholder="Nom & Post-nom" required>--}}
{{--    <select name="sexe" required>--}}
{{--        <option value="F">F</option>--}}
{{--        <option value="M">M</option>--}}
{{--    </select>--}}
{{--    <input type="text" name="naissance" placeholder="Né(e) à" required>--}}
{{--    <input type="text" name="province_origine" placeholder="Province d’Origine" required>--}}
{{--    <input type="text" name="territoire_origine" placeholder="Territoire d’Origine" required>--}}
{{--    <textarea name="etudes" placeholder="Études faites" required></textarea>--}}
{{--    <input type="text" name="adresse" placeholder="Adresse" required>--}}
{{--    <input type="text" name="telephone" placeholder="Téléphone" required>--}}
{{--    <input type="email" name="email" placeholder="Email" required>--}}
{{--    <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>--}}
{{--    <input type="password" name="mot_de_passe_confirmation" placeholder="Confirmer le mot de passe" required>--}}
{{--    <input type="file" name="photo_profil" required>--}}
{{--    <button type="submit">Inscription</button>--}}
{{--</form>--}}
{{--</body>--}}
{{--</html>--}}


@extends('base')
@section('title', 'Inscription')

@section('content')

    <div class="container mx-auto p-6">
        <div class="w-full max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Inscription</h2>
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                    <strong class="font-bold">{{ session('success') }}</strong>
                </div>
            @endif
        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 gap-4 mb-6">
                <div class="col-span-2">
                    <label for="photo_profil" class="block text-gray-700 font-medium mb-2">Photo de profil</label>
                    <input type="file" id="photo_profil" name="photo_profil" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                </div>
                <div class="col-span-2">
                    <label for="prenom" class="block text-gray-700 font-medium mb-2">Prénom</label>
                    <input type="text" id="prenom" name="prenom" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="col-span-2">
                    <label for="nom_postnom" class="block text-gray-700 font-medium mb-2">Nom & Post-nom</label>
                    <input type="text" id="nom_postnom" name="nom_postnom" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="col-span-2 flex items-center mb-6">
                    <label class="block text-gray-700 font-medium mr-4">Sexe</label>
                    <div class="flex items-center mr-4">
                        <input type="radio" id="sexe_f" name="sexe" value="F" class="mr-2" required>
                        <label for="sexe_f" class="text-gray-700">F</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="sexe_m" name="sexe" value="M" class="mr-2" required>
                        <label for="sexe_m" class="text-gray-700">M</label>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="naissance" class="block text-gray-700 font-medium mb-2">Né(e) à</label>
                    <input type="text" id="naissance" name="naissance" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="col-span-2">
                    <label for="province_origine" class="block text-gray-700 font-medium mb-2">Province d’Origine</label>
                    <input type="text" id="province_origine" name="province_origine" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="col-span-2">
                    <label for="territoire_origine" class="block text-gray-700 font-medium mb-2">Territoire d’Origine</label>
                    <input type="text" id="territoire_origine" name="territoire_origine" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="col-span-2">
                    <label for="etudes" class="block text-gray-700 font-medium mb-2">Études faites</label>
                    <textarea id="etudes" name="etudes" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required></textarea>
                </div>
                <div class="col-span-2">
                    <label for="adresse" class="block text-gray-700 font-medium mb-2">Adresse</label>
                    <input type="text" id="adresse" name="adresse" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="col-span-2">
                    <label for="telephone" class="block text-gray-700 font-medium mb-2">Téléphone</label>
                    <input type="text" id="telephone" name="telephone" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="col-span-2">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="col-span-2">
                    <label for="mot_de_passe" class="block text-gray-700 font-medium mb-2">Mot de passe</label>
                    <input type="password" id="mot_de_passe" name="mot_de_passe" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="col-span-2">
                    <label for="mot_de_passe_confirmation" class="block text-gray-700 font-medium mb-2">Confirmer le mot de passe</label>
                    <input type="password" id="mot_de_passe_confirmation" name="mot_de_passe_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                </div>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Inscription</button>
            <p class="mt-4 text-center text-gray-600">Déjà membre ? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Connectez-vous</a></p>
        </form>
        </div>
    </div>

@endsection
