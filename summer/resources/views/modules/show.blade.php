<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un Module</title>
    <link rel="shortcut icon" href="{{ asset('storage/images/log.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-700">

    @include('layouts.header')

    <div class="container md:relative md:bottom-40 mx-auto px-4 py-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-green-700">Ajouter un Nouveau Module</h1>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 max-w-xl mx-auto">
            <form action="{{ route('modules.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Module Title -->
                <div>
                    <label for="nomMod" class="block text-sm font-medium text-gray-700">Titre du Module</label>
                    <input
                        type="text"
                        id="nomMod"
                        name="nomMod"
                        class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500"
                        placeholder="Entrez le titre du module"
                        required>
                </div>

                <!-- Module Coefficient -->
                <div>
                    <label for="coef" class="block text-sm font-medium text-gray-700">Coefficient</label>
                    <input
                        type="text"
                        id="coef"
                        name="coef"
                        class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500"
                        placeholder="Entrez le coefficient"
                        required>
                </div>

                <!-- Module Description -->
                <div>
                    <label for="horaires" class="block text-sm font-medium text-gray-700">Horaires</label>
                    <input
                        type="text"
                        id="horaires"
                        name="horaires"
                        class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500"
                        placeholder="Entrez les horaires"
                        required>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-500 transition duration-300">
                        Ajouter le Module
                    </button>
                </div>
            </form>
        </div>
    </div>

    @include('layouts.footer')

</body>
</html>
