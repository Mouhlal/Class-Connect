
<footer class="bg-green-50 py-8 md:py-16 font-serif ">
    <div class="container max-w-screen-xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3">
            <div class="col-span-1 lg:col-span-1 text-center lg:text-left mb-5 md:mb-10">
                <img src="{{ asset('storage/images/lo.png') }}" alt="Logo" class="mx-auto w-36 lg:mx-0 mb-5 md:mb-10">

                <p class="font-normal w-80 text-gray-500 text-sm md:text-lg">ClassConnect est une solution complète pour la gestion scolaire, simplifiant les tâches administratives et permettant aux établissements de se concentrer sur l'éducation.</p>
            </div>

            <div class="col-span-1 lg:col-span-2">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 text-center lg:text-left">
                    <div class="mb-5 md:mb-10">
                        <h2 class="font-semibold text-black text-lg mb-5">Navigation</h2>

                        <ul class="font-normal text-gray-500 text-sm md:text-lg space-y-3">
                            <li>
                                <a href="/" class="hover:text-red-600 transition ease-in-out duration-300">Accueil</a>
                            </li>

                            <li>
                                <a href="#" class="hover:text-red-600 transition ease-in-out duration-300">Professeurs</a>
                            </li>

                            <li>
                                <a href="{{route('profs.modules')}}" class="hover:text-red-600 transition ease-in-out duration-300">Modules</a>
                            </li>
                        </ul>
                    </div>

                    <div class="mb-5 md:mb-10">
                        <h2 class="font-semibold text-black text-lg mb-5">Liens Utiles</h2>

                        <ul class="font-normal text-gray-500 text-sm md:text-lg space-y-3">
                            <li>
                                <a href="#" class="hover:text-red-600 transition ease-in-out duration-300">FAQ</a>
                            </li>

                            <li>
                                <a href="#" class="hover:text-red-600 transition ease-in-out duration-300">Support</a>
                            </li>

                            <li>
                                <a href="#" class="hover:text-red-600 transition ease-in-out duration-300">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="mb-5 md:mb-10">
                        <h2 class="font-semibold text-black text-lg mb-5">Suivez-nous</h2>

                        <ul class="font-normal text-gray-500 text-sm md:text-lg space-y-3">
                            <li>
                                <a href="#" class="hover:text-red-600 transition ease-in-out duration-300">Facebook</a>
                            </li>

                            <li>
                                <a href="#" class="hover:text-red-600 transition ease-in-out duration-300">Instagram</a>
                            </li>

                            <li>
                                <a href="#" class="hover:text-red-600 transition ease-in-out duration-300">LinkedIn</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-700 pt-5 mt-5 text-center">
            <p class="font-normal text-gray-500 text-sm md:text-lg">&copy; 2024 ClassConnect. Tous droits réservés.</p>
        </div>
    </div> <!-- container.// -->
</footer>
