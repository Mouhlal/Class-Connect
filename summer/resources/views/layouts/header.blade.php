<section class="py-8 md:py-16 relative md:bottom-9">
    <div class="container max-w-screen-xl mx-auto px-4 font-serif">
        <nav class="flex-wrap lg:flex items-center justify-between mb-10 lg:mb-40" x-data="{navbarOpen:false}">
            <div class="flex items-center justify-between mb-10 lg:mb-0">
                <a href="/">
                    <img class="w-32" src="{{ asset('storage/images/lo.png') }}" alt="Logo">
                </a>

                <button class="flex items-center justify-center border border-green-500 w-10 h-10 text-black rounded-md bg-gray-100 outline-none lg:hidden ml-auto" @click="navbarOpen = !navbarOpen">
                    <i data-feather="menu">X</i>
                </button>
            </div>

            <ul class="hidden lg:block lg:flex flex-col lg:flex-row lg:items-center lg:space-x-20" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">
                <li class="text-green-500 text-lg hover:text-green-300 transition ease-in-out duration-300 mb-5 lg:mb-0">
                    <a href="/">Accueil</a>
                </li>

                <li class="text-green-500 text-lg hover:text-green-300 transition ease-in-out duration-300 mb-5 lg:mb-0">
                    <a href="{{route('profs.profs')}}">Professeurs</a>
                </li>

                <li class="text-green-500 text-lg hover:text-green-300 transition ease-in-out duration-300 mb-5 lg:mb-0">
                    <a href="{{route('profs.modules')}}">Modules</a>
                </li>

                <li class="text-green-500 text-lg hover:text-green-300 transition ease-in-out duration-300 mb-5 lg:mb-0">
                    <a href="#">Etudiants</a>
                </li>

                @guest
                <li class="px-8 py-3 text-green-500 text-lg text-center border-2 border-green-500 rounded-md hover:bg-green-500 hover:text-white transition ease-linear duration-300">
                    <a href="{{route('auth.Formlogin')}}">Connexion</a>
                </li>
                @endguest
                @auth
                <li class="px-8 py-3 text-green-500 text-lg text-center border-2 border-green-500 rounded-md hover:bg-green-500 hover:text-white transition ease-linear duration-300">
                    <a href="{{route('auth.logout')}}">Déconnexion</a>
                </li>
                @endauth

                @guest
                <li class="px-8 py-3 text-green-500 text-lg text-center border-2 border-green-500 rounded-md hover:bg-green-500 hover:text-white transition ease-linear duration-300">
                    <a href="{{route('auth.register')}}">Register</a>
                </li>
                @endguest

            </ul>
        </nav>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.0/dist/alpine.min.js" defer></script>


</section>
