<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les Modules</title>
    <link rel="shortcut icon" href="{{ asset('storage/images/log.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body>

    @include('layouts.header')

    <div class="container mx-auto px-4 py-8 md:relative md:bottom-36">
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-gray-700">Les Modules</h1>
            <p class="text-gray-500">Voici la liste de tous les modules offerts par notre école</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($modules as $module)
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="mb-4">
                    <h2 class="text-xl font-bold text-green-600">{{ $module->nomMod }}</h2>
                    <p class="text-gray-500">{{ $module->horaires }} H</p>
                </div>
                <div class="text-gray-700">
                    <p><strong>Professeurs:</strong></p>
                    <ul>
                        @forelse($module->affectations as $affectation)
                            @if($affectation->user)
                                <li>{{ $affectation->user->name }}</li>
                            @else
                                <li>Non assigné</li>
                            @endif
                        @empty
                            <li>Non assigné</li>
                        @endforelse
                    </ul>
                    <p><strong>Coef:</strong> {{ $module->coef }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>
