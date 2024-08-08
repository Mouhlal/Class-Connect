<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Étudiants</title>
    <link rel="shortcut icon" href="{{ asset('storage/images/log.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto px-4 py-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-700">Liste des Étudiants</h1>
        </div>
        <div class="mb-4">
            <form action="{{ route('etudiants.etudiants') }}" method="GET" class="flex items-center justify-center">
                <select name="nv_scolaires_id" class="p-2 border border-gray-300 rounded-lg mr-4">
                    <option value="">Tous les groupes</option>
                    @foreach($nv_scolaires as $groupe)
                        <option value="{{ $groupe->id }}" {{ isset($nv_scolaires_id) && $nv_scolaires_id == $groupe->id ? 'selected' : '' }}>
                            {{ $groupe->nomgrp }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="p-2 bg-green-600 text-white rounded-lg">Filtrer</button>
            </form>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($etudiants as $etudiant)
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <img src="{{ asset('images/'.$etudiant->image) }}" alt="{{ $etudiant->nomEt }}" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <div class="text-center">
                        <h2 class="text-xl font-bold text-gray-700">{{ $etudiant->nomEt }} {{ $etudiant->prenomEt }}</h2>
                        <p class="text-gray-500">{{ $etudiant->email }}</p>
                        <p class="text-gray-500">{{ $etudiant->nv_scolaires->nomgrp }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
