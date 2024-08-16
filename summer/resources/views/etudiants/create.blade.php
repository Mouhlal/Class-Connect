<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student</title>
    <link rel="shortcut icon" href="{{ asset('storage/images/log.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<body>

    @include('layouts.header')

    <div class="container relative md:bottom-40 mx-auto px-4 py-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-700">Créer un nouvel étudiant</h1>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="{{ route('etudiants.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="nom" class="block text-gray-700 font-bold mb-2">Nom:</label>
                    <input type="text" value="{{old('nomEt')}}" name="nomEt" id="nom" class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Nom de l'étudiant" required>
                    @error('nomEt')
                        {{$message}}
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="prenom" class="block text-gray-700 font-bold mb-2">Prénom:</label>
                    <input type="text" value="{{old('prenomEt')}}" name="prenomEt" id="prenom" class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Prénom de l'étudiant" required>
                    @error('prenomEt')
                        {{$message}}
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" value="{{old('email')}}" name="email" id="email" class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Email de l'étudiant" required>
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Password:</label>
                    <input type="password" value="{{old('password')}}" name="password" class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Password de l'étudiant" required>
                    @error('password')
                        {{$message}}
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Confirmation Password:</label>
                    <input type="password" value="{{old('password')}}" name="password_confirmation" class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Confirmation de Password" required>
                    @error('password_confirmation"')
                        {{$message}}
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="groupe" class="block text-gray-700 font-bold mb-2">Groupe:</label>
                    <select name="nv_scolaires_id" value="{{old('nv_scolaires_id')}}" id="groupe" class="w-full p-2 border border-gray-300 rounded-lg">
                        <option value="">Sélectionnez un groupe</option>
                        @foreach($groupe as $group)
                            <option value="{{ $group->id }}">{{ $group->nomgrp }}</option>
                        @endforeach
                    </select>
                    @error('nv_scolaires_id')
                        {{$message}}
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-bold mb-2">Photo de profil:</label>
                    <input type="file" value="{{old('image')}}" name="image" id="image" class="w-full p-2 border border-gray-300 rounded-lg">
                    @error('image')
                        {{$message}}
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="px-4 py-2 bg-green-600 text-white font-bold rounded-lg">Créer</button>
                </div>
            </form>
        </div>
    </div>

    @include('layouts.footer')

</body>
</html>
