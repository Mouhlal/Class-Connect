<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ</title>
    <link rel="shortcut icon" href="{{ asset('storage/images/log.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.header')

    <div class="container relative md:bottom-44 mx-auto px-4 py-8">
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-gray-700">Foire Aux Questions (FAQ)</h1>
            <p class="text-gray-500">Les réponses aux questions les plus fréquentes</p>
        </div>

        <div class="space-y-4">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold text-green-600">Question 1: Comment puis-je m'inscrire?</h2>
                <p class="text-gray-700 mt-2">Réponse: Vous pouvez vous inscrire en visitant notre page d'inscription et en remplissant le formulaire requis.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold text-green-600">Question 2: Quels sont les frais de scolarité?</h2>
                <p class="text-gray-700 mt-2">Réponse: Les frais de scolarité varient selon le programme. Veuillez consulter notre page de frais de scolarité pour plus de détails.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold text-green-600">Question 3: Comment puis-je accéder à mes cours en ligne?</h2>
                <p class="text-gray-700 mt-2">Réponse: Vous pouvez accéder à vos cours en ligne via notre portail étudiant en utilisant vos identifiants de connexion.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold text-green-600">Question 4: Qui dois-je contacter pour le support technique?</h2>
                <p class="text-gray-700 mt-2">Réponse: Vous pouvez contacter notre support technique par email à support@exemple.com ou par téléphone au 123-456-7890.</p>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>
