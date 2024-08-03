<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register CN</title>
    <link rel="shortcut icon" href="{{ asset('storage/images/log.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')

</head>

<body>

    @include('layouts.header')

    <div class="font-poppins flex items-center justify-center relative md:bottom-44 min-h-screen">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
            <div class="text-center mb-6">
                <img src="{{ asset('storage/images/lo.png') }}" alt="Logo" class="mx-auto mb-4 w-24">
                <h1 class="text-2xl font-bold text-gray-700 mb-2">Register</h1>
                <p class="text-gray-500">Connectez-vous à votre compte</p>
            </div>

        <form action="{{route('')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nom Complet</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div class="mb-4">
                <label for="cin" class="block text-sm font-medium text-gray-700 mb-2">CIN</label>
                <input type="text" id="cin" name="cin" required class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Mot de passe</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirmation du mot de passe</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <button type="submit" class="w-full py-3 bg-green-500 text-white font-semibold rounded-md shadow-sm hover:bg-green-600 transition ease-in-out duration-300">
                Inscription
            </button>

            <p class="mt-6 text-center text-gray-500 text-sm">Vous avez déjà un compte ? <a href="/login" class="text-green-500 font-semibold">Se connecter</a></p>
        </form>
    </div>
    </div>

</body>

</html>
