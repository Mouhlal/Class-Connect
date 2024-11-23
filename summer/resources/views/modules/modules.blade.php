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

<body class="bg-gray-100 text-gray-700">

    @include('layouts.header')

    <div class="container mx-auto px-4 py-8 md:relative md:bottom-40">
        <div class="flex justify-between items-center mb-12">
            <div>
                <h1 class="text-3xl font-bold text-gray-700">Les Modules</h1>
                <p class="text-gray-500">Voici la liste de tous les modules offerts par notre école</p>
            </div>
            <a href="{{ route('modules.show') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-500 transition duration-300">
                Ajouter un Module
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($modules as $module)
            <div class="bg-white rounded-lg shadow-lg p-6 relative">
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
                <div class="flex justify-end mt-4 space-x-2">
                    <a href="{{ route('modules.modify', $module->id) }}" class="bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-400 transition duration-300">
                        Modifier
                    </a>
                    <form action="{{ route('modules.delete', $module->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce module ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-3 py-2 rounded-lg hover:bg-red-400 transition duration-300">
                            Supprimer
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @include('layouts.footer')

</body>

</html>
