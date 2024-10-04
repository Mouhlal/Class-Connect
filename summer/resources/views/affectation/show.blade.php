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

            <form action="{{route('affectations.index')}}" method="POST">
                @csrf
                <!-- Select Professor -->
                <div class="mb-6">
                    <label class="block text-lg font-medium text-gray-700">Sélectionner un Professeur</label>
                    <select name="users_id"  class="w-full mt-2 p-3 border border-gray-300 rounded-lg bg-white">
                        <option value="">-- Choisir un Professeur --</option>
                        @foreach($user as $professeur)
                            <option value="{{ $professeur->id }}">{{ $professeur->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Select Group -->
                <div class="mb-6">
                    <label for="groupe_id" class="block text-lg font-medium text-gray-700">Sélectionner un Groupe</label>
                    <select name="nv_scolaires_id" class="w-full mt-2 p-3 border border-gray-300 rounded-lg bg-white">
                        <option value="">-- Choisir un Groupe --</option>
                        @foreach($groupes as $groupe)
                            <option value="{{ $groupe->id }}">{{ $groupe->nomgrp }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Select Modules -->
                <div class="mb-6">
                    <label class="block text-lg font-medium text-gray-700">Sélectionner des Modules</label>
                    <select name="modules_id"  class="w-full mt-2 p-3 border border-gray-300 rounded-lg bg-white" >
                        @foreach($modules as $module)
                            <option value="{{ $module->id }}">{{ $module->nomMod }}</option>
                        @endforeach
                    </select>
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
