<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $et->nomEt }} {{ $et->prenomEt }}</title>
    <link rel="shortcut icon" href="{{ asset('storage/images/log.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-700">

    @include('layouts.header')

    <div class="container relative -top-24 mx-auto px-4 py-10">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="flex flex-col md:flex-row">
                <div class="flex-shrink-0 bg-gray-100 p-6 md:w-1/3 flex justify-center items-center">
                    <img src="{{ asset('storage/'.$et->image) }}" alt="{{ $et->nomEt }}" class="w-48 h-48 rounded-full object-cover shadow-lg">
                </div>
                <!-- Student Info -->
                <div class="p-6 flex-1">
                    <h1 class="text-3xl font-bold text-gray-800">{{ $et->nomEt }} {{ $et->prenomEt }}</h1>
                    <p class="text-gray-600 mt-2"><strong>Email:</strong> {{ $et->email }}</p>
                    <p class="text-gray-600 mt-2"><strong>Groupe:</strong> {{ $et->nv_scolaires->nomgrp }}</p>
                    <p class="text-gray-600 mt-2"><strong>Date de Naissance:</strong> {{ $et->date_naissance }}</p>
                    <p class="text-gray-600 mt-2"><strong>Téléphone:</strong> {{ $et->telephone }}</p>
                    <p class="text-gray-600 mt-2"><strong>Adresse:</strong> {{ $et->adresse }}</p>

                    <div class="mt-6 flex space-x-4">
                        <!-- Edit and Delete Buttons -->
                        <a href="{{ route('etudiants.edit', $et->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-400 transition duration-300">Modifier</a>
                        <form action="{{ route('etudiants.delete', $et->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cet étudiant?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-500 transition duration-300">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

</body>
</html>
