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
<body class="bg-gray-100 text-gray-700">

    @include('layouts.header')

    <div class="container relative md:bottom-44 mx-auto px-4 py-8">
       {{--  <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-green-700">Liste des Étudiants</h1>
        </div> --}}
        <div class="mb-8 flex justify-center">
            <form action="{{ route('etudiants.etudiants') }}" method="GET" class="flex items-center">
                <select name="nv_scolaires_id" class="p-3 border border-gray-300 rounded-lg mr-4 bg-white">
                    <option value=""> Tous les groupes </option>
                    @foreach($nv_scolaires as $groupe)
                        <option value="{{ $groupe->id }}" {{ isset($nv_scolaires_id) && $nv_scolaires_id == $groupe->id ? 'selected' : '' }}>
                            {{ $groupe->nomgrp }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="p-3 bg-green-600 text-white rounded-lg hover:bg-green-500 transition duration-300">Filtrer</button>
                </form>
                <a href="{{route('etudiants.create')}}">
                    <input type="button" value="Ajouter Etudiant" class="p-3 bg-green-600 text-white rounded-lg hover:bg-green-500 transition duration-300">
                </a>

            </form>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($etudiants as $etudiant)
                <a href="{{route('etudiants.show' , $etudiant->id)}}">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('storage/'.$etudiant->image) }}" alt="{{ $etudiant->nomEt }}" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-gray-800">{{ $etudiant->nomEt }} {{ $etudiant->prenomEt }}</h2>
                            <p class="text-gray-600">{{ $etudiant->email }}</p>
                            <p class="text-gray-600">{{ $etudiant->nv_scolaires->nomgrp }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    @include('layouts.footer')

</body>
</html>
