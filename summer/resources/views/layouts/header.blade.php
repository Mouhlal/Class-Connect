<section class="py-8 md:py-16 relative md:bottom-9">
    <div class="container max-w-screen-xl mx-auto px-4">
        <nav class="flex-wrap lg:flex items-center justify-between mb-10 lg:mb-40" x-data="{navbarOpen:false}">
            <div class="flex items-center justify-between mb-10 lg:mb-0">
                <img class="w-32" src="{{ asset('storage/images/lo.png') }}" alt="Logo">

                <button class="flex items-center justify-center border border-green-500 w-10 h-10 text-black rounded-md bg-gray-100 outline-none lg:hidden ml-auto" @click="navbarOpen = !navbarOpen">
                    <i data-feather="menu">X</i>
                </button>
            </div>

            <ul class="hidden lg:block lg:flex flex-col lg:flex-row lg:items-center lg:space-x-20" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">
                <li class="font-medium text-green-500 text-lg hover:text-green-300 transition ease-in-out duration-300 mb-5 lg:mb-0">
                    <a href="#">Accueil</a>
                </li>

                <li class="font-medium text-green-500 text-lg hover:text-green-300 transition ease-in-out duration-300 mb-5 lg:mb-0">
                    <a href="#">Professeurs</a>
                </li>

                <li class="font-medium text-green-500 text-lg hover:text-green-300 transition ease-in-out duration-300 mb-5 lg:mb-0">
                    <a href="#">Matières</a>
                </li>

                <li class="px-8 py-3 font-medium text-green-500 text-lg text-center border-2 border-green-500 rounded-md hover:bg-green-500 hover:text-white transition ease-linear duration-300">
                    <a href="#">Connexion</a>
                </li>
            </ul>
        </nav>

        <header class="flex-col xl:flex-row flex justify-between">
            <div class="mx-auto text-center xl:text-left xl:mx-0 mb-20 xl:mb-0">
                <h1 class="font-bold text-gray-700 text-3xl md:text-6xl leading-tight mb-10">Bienvenue sur ClassConnect</h1>

                <p class="font-normal text-gray-500 text-sm md:text-lg mb-10">Votre portail de gestion scolaire simplifiée. Suivez les performances des élèves, gérez les emplois du temps, et accédez aux informations clés en un seul endroit.</p>

                <div class="flex items-center justify-center lg:justify-start">
                    <a href="#" class="px-8 py-3 bg-green-500 font-medium text-white text-md md:text-lg rounded-md hover:bg-green-700 transition ease-in-out duration-300 mr-14">En savoir plus</a>
                </div>
            </div>

            <div class="mx-auto xl:mx-0">
                <img src="{{ asset('storage/fonts/home-img.svg') }}" alt="Image">
            </div>

        </header>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.0/dist/alpine.min.js" defer></script>


</section>
