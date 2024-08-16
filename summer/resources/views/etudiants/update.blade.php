<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Étudiant</title>
    <link rel="shortcut icon" href="{{ asset('storage/images/log.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<body>

    @include('layouts.header')

    <div class="container mx-auto px-4 py-8">
        <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-2xl font-bold text-gray-700 mb-6">Modifier Étudiant</h1>
            <form action="{{ route('etudiants.update', $etudiant->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="nomEt" class="block text-gray-700 font-semibold">Nom:</label>
                    <input type="text" name="nomEt" id="nomEt" value="{{ $etudiant->nomEt }}" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="prenomEt" class="block text-gray-700 font-semibold">Prénom:</label>
                    <input type="text" name="prenomEt" id="prenomEt" value="{{ $etudiant->prenomEt }}" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold">Email:</label>
                    <input type="email" name="email" id="email" value="{{ $etudiant->email }}" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="nv_scolaires_id" class="block text-gray-700 font-semibold">Groupe:</label>
                    <select name="nv_scolaires_id" id="nv_scolaires_id" class="w-full p-2 border border-gray-300 rounded-lg">
                        @foreach($nv_scolaires as $groupe)
                            <option value="{{ $groupe->id }}" {{ $etudiant->nv_scolaires_id == $groupe->id ? 'selected' : '' }}>
                                {{ $groupe->nomgrp }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-semibold">Photo de Profil:</label>
                    <input type="file" name="image" id="image" class="w-full p-2 border border-gray-300 rounded-lg">
                    @if($etudiant->image)
                        <img src="{{ asset('images/'.$etudiant->image) }}" alt="{{ $etudiant->nomEt }}" class="w-24 h-24 rounded-full mt-4">
                    @endif
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-green-600 text-white p-2 rounded-lg">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
    </div>

    @include('layouts.footer')

</body>
</html>
