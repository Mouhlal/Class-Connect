<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="shortcut icon" href="{{ asset('storage/images/log.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.header')

    <div class="container mx-auto relative md:bottom-36 px-4 py-8">
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-gray-700">Contactez-Nous</h1>
            <p class="text-gray-500">Nous serions ravis de vous entendre</p>
        </div>

        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
                <img src="{{ asset('storage/fonts/image-2.svg') }}" alt="Contact Image" class="rounded-lg shadow-lg">            </div>
            <div class="w-full md:w-1/2 px-4">
                <form>
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">Nom</label>
                        <input type="text" id="name" name="name" class="w-full p-3 rounded-lg border border-gray-300" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full p-3 rounded-lg border border-gray-300" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full p-3 rounded-lg border border-gray-300" required></textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-green-600 text-white p-3 rounded-lg font-bold">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>
