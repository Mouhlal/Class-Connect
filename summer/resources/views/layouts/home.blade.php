<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassConnect</title>
    <link rel="shortcut icon" href="{{asset('storage/images/log.png')}}" type="image/x-icon">

    @vite('resources/css/app.css')
</head>

<body class="bg-white font-serif">

    <!-- home section -->

    @include('layouts.header')

    <!-- home section //end -->
    <section class="py-8 md:py-16 relative md:bottom-28">
        <div class="container max-w-screen-xl mx-auto px-4">
    <header class="flex-col xl:flex-row flex justify-between">
        <div class="mx-auto text-center xl:text-left xl:mx-0 mb-20 xl:mb-0">
            <h1 class="font-bold text-gray-700 text-3xl md:text-6xl leading-tight mb-10">Bienvenue sur ClassConnect</h1>

            <p class="font-normal text-gray-500 text-sm md:text-lg mb-10">Votre portail de gestion scolaire simplifiée. Suivez les performances des élèves, gérez les emplois du temps, et accédez aux informations clés en un seul endroit.</p>

            <div class="flex items-center justify-center lg:justify-start">
                <a href="#" class="px-8 py-3 relative left-8 bg-green-500 font-medium text-white text-md md:text-lg rounded-md hover:bg-green-700 transition ease-in-out duration-300 mr-14">En savoir plus</a>
            </div>
        </div>

        <div class="mx-auto xl:mx-0">
            <img src="{{ asset('storage/fonts/home-img.svg') }}" alt="Image">
        </div>

    </header>
    </div>
    </section>

    <!-- feature section -->
    <section class="py-8 md:py-16">
        <div class="container max-w-screen-xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
                <div class="text-center mb-10 xl:mb-0">
                    <div class="flex items-center justify-center">
                        <div class="w-20 py-7 flex justify-center bg-purple-50 text-purple-500 rounded-md mb-5 md:mb-10">
                            <i data-feather="bar-chart-2"></i>
                        </div>
                    </div>

                    <h2 class="font-semibold text-gray-700 text-xl md:text-3xl mb-5">Suivi des Performances</h2>

                    <p class="font-normal text-gray-400 text-sm md:text-lg">Obtenez des rapports détaillés sur les performances des étudiants.</p>
                </div>

                <div class="text-center mb-10 md:mb-0">
                    <div class="flex items-center justify-center">
                        <div class="w-20 py-7 flex justify-center bg-red-50 text-red-500 rounded-md mb-5 md:mb-10">
                            <i data-feather="dollar-sign"></i>
                        </div>
                    </div>

                    <h2 class="font-semibold text-gray-700 text-xl md:text-3xl mb-5">Gestion des Emplois du Temps</h2>

                    <p class="font-normal text-gray-400 text-sm md:text-lg">Planifiez et gérez les horaires des classes et des professeurs facilement.</p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div class="w-20 py-7 flex justify-center bg-blue-50 text-blue-500 rounded-md mb-5 md:mb-10">
                            <i data-feather="search"></i>
                        </div>
                    </div>

                    <h2 class="font-semibold text-gray-700 text-xl md:text-3xl mb-5">Accès aux Informations</h2>

                    <p class="font-normal text-gray-400 text-sm md:text-lg">Accédez rapidement aux informations clés sur les professeurs, les matières, et les étudiants.</p>
                </div>
            </div>
        </div> <!-- container.// -->
    </section>
    <!-- feature section //end -->

    <section class="py-8 md:py-16">
        <div class="container max-w-screen-xl mx-auto px-4">
            <h1 class="font-semibold text-gray-700 text-3xl md:text-4xl text-center mb-5">Nos Services</h1>

            <p class="font-normal text-gray-500 text-md md:text-lg text-center mb-20 md:mb-40">Découvrez comment ClassConnect peut transformer la gestion scolaire.</p>

            <div class="flex flex-col xl:flex-row items-center justify-between mb-20 md:mb-40">
                <div class="mx-auto xl:mx-0 mb-20 xl:mb-0">
                    <img src="{{ asset('storage/fonts/image-1.svg') }}" alt="Image">
                </div>

                <div class="mx-auto xl:mx-0 text-center xl:text-left">
                    <h1 class="font-bold text-gray-700 text-3xl md:text-4xl mb-10">Gestion des Classes</h1>

                    <p class="font-normal text-gray-400 text-sm md:text-lg mb-5">Organisez et gérez les classes efficacement avec notre interface intuitive.</p>

                    <a href="#" class="flex items-center justify-center xl:justify-start font-semibold text-green-500 text-lg gap-3 hover:text-green-700 transition ease-in-out duration-300">
                        En savoir plus
                        <i data-feather="chevron-right"></i>
                    </a>
                </div>
            </div>

            <div class="flex flex-col xl:flex-row items-center justify-between mb-20 md:mb-40">
                <div class="mx-auto xl:mx-0 mb-20 xl:mb-0 order-last xl:order-first">
                    <img src="{{ asset('storage/fonts/image-2.svg') }}" alt="Image">
                </div>

                <div class="mx-auto xl:mx-0 text-center xl:text-left">
                    <h1 class="font-bold text-gray-700 text-3xl md:text-4xl mb-10">Gestion des Professeurs</h1>

                    <p class="font-normal text-gray-400 text-sm md:text-lg mb-5">Attribuez des matières et gérez les emplois du temps des professeurs facilement.</p>

                    <a href="#" class="flex items-center justify-center xl:justify-start font-semibold text-green-500 text-lg gap-3 hover:text-green-700 transition ease-in-out duration-300">
                        En savoir plus
                        <i data-feather="chevron-right"></i>
                    </a>
                </div>
            </div>

            <div class="flex flex-col xl:flex-row items-center justify-between mb-20 md:mb-40">
                <div class="mx-auto xl:mx-0 mb-20 xl:mb-0">
                    <img src="{{ asset('storage/fonts/image-3.svg') }}" alt="Image">
                </div>

                <div class="mx-auto xl:mx-0 text-center xl:text-left">
                    <h1 class="font-bold text-gray-700 text-3xl md:text-4xl mb-10">Suivi des Étudiants</h1>

                    <p class="font-normal text-gray-400 text-sm md:text-lg mb-5">Suivez les progrès des étudiants et accédez à leurs résultats en un clic.</p>

                    <a href="#" class="flex items-center justify-center xl:justify-start font-semibold text-green-500 text-lg gap-3 hover:text-green-700 transition ease-in-out duration-300">
                        En savoir plus
                        <i data-feather="chevron-right"></i>
                    </a>
                </div>
            </div>
        </div> <!-- container.// -->
    </section>

    <section class="py-8 md:py-16 bg-gray-100">

     <div class="container max-w-screen-xl mx-auto px-4">
        <div class="flex flex-wrap md:flex-nowrap justify-between mb-8">
            <div>
                <p class="font-normal text-gray-500 text-md md:text-lg uppercase mb-3">Let's tealk</p>

                <h1 class="font-bold text-gray-700 text-xl md:text-4xl">Do you have any Project?</h1>
            </div>

            <div class="mt-10">
                <a href="#" class="px-4 py-2 md:px-8 md:py-3 font-medium text-green-500 text-lg border-2 border-green-500 rounded-md hover:bg-green-500 hover:text-white transition ease-linear duration-300">
                    Contact us now
                </a>
            </div>
        </div>

        <hr class="text-gray-300 mb-8">

        <p class="font-normal text-gray-500 text-md md:text-lg mb-4 md:mb-10">Rejoignez des centaines d'établissements qui utilisent ClassConnect pour simplifier la gestion scolaire.</p>
    </div>

    </section>


    @include('layouts.footer')

</body>

</html>
