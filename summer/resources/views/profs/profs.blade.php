<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les Professeurs</title>
    <link rel="shortcut icon" href="{{ asset('storage/images/log.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<body>

@include('layouts.header')

<div class="container mx-auto px-4 py-8 md:relative md:bottom-36">
    <div class="text-center mb-12">
        <h1 class="text-3xl font-bold text-gray-700">Les Professeurs</h1>
        <p class="text-gray-500">Voici la liste de tous les professeurs de notre école</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($profs as $professeur)
            <a href="{{route('profs.profile' , $professeur->id)}}">
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $professeur->image) }}" alt="{{ $professeur->name }}" class="w-32 h-32 rounded-full mx-auto">
                    </div>
                    <h2 class="text-xl font-bold text-green-600">{{ $professeur->name }}</h2>
                    <a title="mail" href="mailto:{{$professeur->email}}">
                        <p class="text-gray-500">{{ $professeur->email }}</p>
                    </a>
                </div>
            </a>
        @endforeach
    </div>
</div>

</body>
</html>
