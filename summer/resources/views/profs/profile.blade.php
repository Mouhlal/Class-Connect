<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil de {{ $profile->name }}</title>
    <link rel="shortcut icon" href="{{ asset('storage/images/log.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<body>

@include('layouts.header')

<div class="container relative md:bottom-32 mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <div class="flex items-center mb-6">
            <img src="{{ asset('storage/' . $profile->image) }}" alt="{{ $profile->name }}" class="w-32 h-32 rounded-full mr-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-700">{{ $profile->name }}</h1>
                <a title="mail" href="mailto:{{$profile->email}}">
                    <p class="text-gray-500">{{ $profile->email }}</p>
                </a>
                <p class="text-gray-500">{{ $profile->cin }}</p>
            </div>
        </div>

        <h2 class="text-xl font-bold text-gray-700 mb-4">Groupes</h2>
        <ul class="list-disc list-inside mb-6">
            @forelse($profile->affectations as $affectation)
            <li>{{ $affectation->nv_scolaire->nomgrp }}</li>
        @empty
            <li>Non assigné à un groupe</li>
        @endforelse
        </ul>

        <h2 class="text-xl font-bold text-gray-700 mb-4">Modules Enseignés</h2>
        <ul class="list-disc list-inside">
            @foreach($profile->Affectations as $affectation)
                <li>{{ $affectation->module->nomMod }}</li>
            @endforeach
        </ul>
    </div>
</div>

</body>
</html>
