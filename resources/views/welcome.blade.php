
@extends('base')

@section('title', 'DYREC - Dynamique des Républicains pour l’Émergence du Congo')

@section('content')
    <!-- Hero Section -->
    <section class="bg-blue-800 text-white py-20 mt-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center px-6">
            <div class="w-full md:w-1/2 text-center md:text-left mb-6 md:mb-0">
                <h1 class="text-5xl font-bold mb-4">Bienvenue à la DYREC</h1>
                <p class="text-xl mb-6">La Dynamique des Républicains pour l’Émergence du Congo (DYREC) est dédiée à la promotion de l'émergence et de la bonne gouvernance en RDC.</p>
                <a href="" class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition duration-300">Nous rejoindre</a>
            </div>
            <div class="w-full md:w-1/2">
                <img src="{{ asset('pictures/img-hero.jpg') }}" alt="DYREC" class="w-full max-w-md rounded-lg shadow-lg mx-auto">
            </div>
        </div>
    </section>

    <div class="container mx-auto mt-16 p-6">

        <!-- A propos de nous -->
        <section class="bg-white p-8 rounded-lg shadow-lg mt-6 flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/3 mb-6 md:mb-0">
                <img src="{{ asset('pictures/about-section.jpg') }}" alt="Leader DYREC" class="w-full max-w-xs md:max-w-sm rounded-lg shadow-lg mx-auto">
            </div>
            <div class="w-full md:w-2/3 md:pl-6">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-blue-800 text-white flex items-center justify-center rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L3.75 9.75L9.75 17ZM9.75 17H12.75M12.75 17L20.25 3.75M12.75 17L20.25 10.25M12.75 17L14.25 14.25M5.25 6.75L8.25 11.25M8.25 11.25L12 6.75M12 6.75L20.25 3.75M12 6.75L9.75 9.75M12 6.75L14.25 14.25M14.25 14.25L18 9.75M18 9.75L20.25 3.75M18 9.75L14.25 10.25M14.25 10.25L20.25 10.25" />
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-blue-800 ml-4">À propos de nous</h2>
                </div>
                <p class="text-gray-700 mb-4">La Dynamique des Républicains pour l’Émergence du Congo (DYREC) est un parti politique en République Démocratique du Congo. Fondé le 22 octobre 2019 avec pour objectif principal de promouvoir l’émergence et la bonne gouvernance en RDC, le parti est dirigé par l’honorable Ida Kitwa Godalena.</p>
            </div>
        </section>


        <!-- Objectifs -->
        <section class="bg-white p-8 rounded-lg shadow-lg mt-6">
            <div class="flex items-center mb-6">
                <div class="w-16 h-16 bg-blue-800 text-white flex items-center justify-center rounded-full">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16H13.01M12 16V12M8 16V12M16 16V12M5 20H19M5 20L7 10L9 10M7 10H17M9 10L11 20M7 10L8.5 3.5M15 3.5L16 10M17 10L19 20M15 10L13 20M15 10H17M13 12H11M11 12V16M13 12V16M13 12L15 10M11 12L9 10M11 16L10.5 18M13 16L13.5 18M17 10H15M11 12L13 12" />
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-blue-800 ml-4">Objectifs</h2>
            </div>
            <div class="flex flex-wrap gap-6">
                <div class="flex-1 bg-gray-100 p-6 rounded-lg shadow-lg flex flex-wrap justify-items-center">
                    <img src="{{ asset('pictures/objectif-1.jpg') }}" alt="Émergence et Gouvernance"  class="w-48 h-48 mr-6">
                    <div>
                        <h3 class="font-bold text-xl mb-2">Émergence et Gouvernance</h3>
                        <p class="text-gray-700">La DYREC vise à améliorer la gouvernance en RDC et à atteindre l’émergence du pays. Le parti encourage la participation active de la population dans le processus électoral, en particulier lors des législatives nationales et provinciales, pour s’assurer que la voix du peuple soit entendue et représentée de manière efficace.</p>
                    </div>
                </div>
                <div class="flex-1 bg-gray-100 p-6 rounded-lg shadow-lg  flex flex-wrap justify-items-center">
                    <img src="{{ asset('pictures/objectif-2.jpg') }}" alt="Non-Radicalisme"  class="w-48 h-48 mr-6">
                    <div>
                        <h3 class="font-bold text-xl mb-2">Non-Radicalisme</h3>
                        <p class="text-gray-700">La DYREC se présente comme un parti non radical, prônant des solutions constructives et dénonçant les dysfonctionnements tout en proposant des alternatives. Le parti soutient le processus électoral et rejette les appels au boycott émis par d’autres factions politiques.</p>
                    </div>
                </div>
                <div class="flex-1 bg-gray-100 p-6 rounded-lg shadow-lg flex flex-wrap justify-items-center">
                    <img src="{{ asset('pictures/objectif-3.jpg') }}" alt="Présence Nationale"  class="w-48 h-48 mr-6">
                    <div>
                        <h3 class="font-bold text-xl mb-2">Présence Nationale</h3>
                        <p class="text-gray-700">Le parti cherche à s’étendre sur tout le territoire de la RDC, avec des ambitions de devenir une force politique majeure en occupant toutes les régions du pays, des villes aux villages.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Leadership -->
        <section class="bg-white p-8 rounded-lg shadow-lg mt-6">
            <h2 class="text-3xl font-bold text-blue-800 mb-6 flex items-center gap-4">
                <i class="fas fa-user-tie text-blue-600 w-8 h-8"></i>
                Leadership
            </h2>
            <div class="flex flex-wrap gap-12">
                <!-- Présidente -->
                <div class="flex items-center p-6 bg-gray-100 rounded-lg shadow-lg flex-1 flex-wrap">
                    <img src="{{ asset('pictures/presidente.jpg') }}" alt="Ida Kitwa Godalena" class="w-72 h-72 object-cover rounded-full">
                    <div class="ml-6">
                        <h3 class="text-2xl font-bold">Ida Kitwa Godalena</h3>
                        <p class="text-gray-700">Présidente</p>
                    </div>
                </div>
                <!-- Autorité Morale -->
                <div class="flex items-center p-6 bg-gray-100 rounded-lg shadow-lg flex-1 flex-wrap">
                    <img src="{{ asset('pictures/mrMoise.jpg') }}" alt="Moïse Aje Matembo" class="w-72 h-72 object-cover rounded-full">
                    <div class="ml-6">
                        <h3 class="text-2xl font-bold">Moïse Aje Matembo</h3>
                        <p class="text-gray-700">Autorité Morale</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Organisation -->
        <section class="bg-white p-8 rounded-lg shadow-lg mt-6">
            <h2 class="text-3xl font-bold text-blue-800 mb-6 flex items-center gap-4">
                <i class="fas fa-sitemap text-blue-600 w-8 h-8"></i>
                Organisation
            </h2>
            <div class="flex flex-col gap-6">
                <div class="flex flex-wrap gap-6">
                    <!-- Bureaux Locaux -->
                    <div class="flex-1 p-6 bg-gray-100 rounded-lg shadow-lg flex items-center gap-4">
                        <i class="fas fa-building w-12 h-12 text-blue-600"></i>
                        <div>
                            <h3 class="text-2xl font-bold mb-4">Bureaux Locaux</h3>
                            <p class="text-gray-700">Installation de bureaux dans plusieurs districts, notamment à Kinshasa, pour préparer les élections et mobiliser les électeurs.</p>
                        </div>
                    </div>
                    <!-- Sièges du Parti -->
                    <div class="flex-1 p-6 bg-gray-100 rounded-lg shadow-lg flex items-center gap-4">
                        <i class="fas fa-map-marker-alt w-12 h-12 text-blue-600"></i>
                        <div>
                            <h3 class="text-2xl font-bold mb-4">Sièges du Parti</h3>
                            <p class="text-gray-700">Notre siège principal est à Kinshasa, Commune de Lingwala, Avenue de Kongolo.</p>
                        </div>
                    </div>
                </div>
                <!-- Nous Contacter -->
                <div class="p-6 bg-gray-100 rounded-lg shadow-lg flex items-center gap-4">
                    <i class="fas fa-envelope w-12 h-12 text-blue-600"></i>
                    <div>
                        <h3 class="text-2xl font-bold mb-4">Nous Contacter</h3>
                        <p class="text-gray-700">Téléphone : +243819 028 904</p>
                        <p class="text-gray-700">Email : amatodyrec@gmail.com</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
