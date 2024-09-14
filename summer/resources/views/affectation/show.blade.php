<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affectation</title>
    <link rel="shortcut icon" href="{{ asset('storage/images/log.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-700">

    @include('layouts.header')

    <div class="container mx-auto px-4 py-10">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-2xl font-bold text-center text-gray-800 mb-8">Affectation des Professeurs</h1>

            <form action="" method="POST">
                @csrf
                <!-- Select Professor -->
                <div class="mb-6">
                    <label for="professeur_id" class="block text-lg font-medium text-gray-700">Sélectionner un Professeur</label>
                    <select name="users_id" id="professeur_id" class="w-full mt-2 p-3 border border-gray-300 rounded-lg bg-white">
                        <option value="">-- Choisir un Professeur --</option>
                        @foreach($users as $professeur)
                            <option value="{{ $professeur->id }}">{{ $professeur->nom }} {{ $professeur->prenom }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Select Group -->
                <div class="mb-6">
                    <label for="groupe_id" class="block text-lg font-medium text-gray-700">Sélectionner un Groupe</label>
                    <select name="nv_scolaires_id" id="groupe_id" class="w-full mt-2 p-3 border border-gray-300 rounded-lg bg-white">
                        <option value="">-- Choisir un Groupe --</option>
                        @foreach($groupes as $groupe)
                            <option value="{{ $groupe->id }}">{{ $groupe->nomgrp }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Select Modules -->
                <div class="mb-6">
                    <label for="module_id" class="block text-lg font-medium text-gray-700">Sélectionner des Modules</label>
                    <select name="modules_id[]" id="module_id" class="w-full mt-2 p-3 border border-gray-300 rounded-lg bg-white" multiple>
                        @foreach($modules as $module)
                            <option value="{{ $module->id }}">{{ $module->nom }}</option>
                        @endforeach
                    </select>
                    <small class="text-gray-500">Appuyez sur Ctrl (Cmd sur Mac) pour sélectionner plusieurs modules.</small>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-500 transition duration-300">Affecter le Professeur</button>
                </div>
            </form>
        </div>
    </div>

    @include('layouts.footer')

</body>
</html>
