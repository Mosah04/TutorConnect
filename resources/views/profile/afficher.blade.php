@extends('layouts.'.$page)
@section('main')
<section class="text-sm">
    <header class="bg-white lg:h-[calc(40vh+6rem)]">
        <div class="w-full h-[40vh]">
            <img class="w-full h-full" src="{{asset('img/conference.jpg')}}" alt="">
        </div>
        <div class="flex lg:flex-row flex-col">
            <div class="bg-white inline-block lg:rounded-full p-1 lg:ml-10 lg:-translate-y-1/2 flex-shrink-0">
                <img class="m-auto rounded-full h-30 w-30" src="{{asset('img/profile-picture-5.jpg')}}" alt="">
            </div>
            <div class="mt-4 w-full lg:pl-5 lg:pr-10">
                <div class="flex lg:flex-row flex-col lg:justify-between justify-center w-full lg:text-left text-center">
                    <div class="lg:inline-block text-3xl font-bold lg:pt-3 lg:w-[60%]">
                        ZAKARI
                    </div>
                    <button class="text-sm mt-2 py-3 rounded-md border border-gray-300 hover:bg-gray-100 lg:w-[40%] flex-shrink lg:mb-0 mb-3">
                        Contacter
                    </button>
                </div>

            </div>
        </div>

    </header>
    <section class="flex lg:flex-row flex-col py-8 space-y-2">
        <aside class="space-y-2 lg:space-y-4 pr-4 mx-auto lg:w-[35%]">
            <div  onclick='document.getElementById("bio").classList.toggle("truncate")' class=" flex flex-col cursor-pointer p-5 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white">
                <h3 class="mb-2 font-semibold text-left">Bio</h3>
                <p id="bio" class="text-left truncate">“Je suis conceptrice-rédactrice en communication depuis 4 ans. Grâce à mon expertise dans le domaine de la communication je sais jouer des mots, faire preuve d’une qualité d’écoute et des attentes souhaitées.
                    La rigueur est ma devise. J’aime ce que je fais, mon intuition et ma créativité ont pour but de faire ressortir le meilleur de vous.</p>
                </div>
            <div class="flex flex-col p-3 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white">
                <h3 class="font-semibold text-left">Compétences</h3>
                <ul class="pl-2 text-left list-disc list-inside">
                    <li>Développement web</li>
                    <li>Développement web</li>
                    <li>Développement web</li>
                </ul>
            </div>
            <div class="flex flex-col p-3 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white">
                <h3 class="font-semibold text-left">Parcours académique</h3>
                <ul class="pl-2 text-left">
                    <li class="flex flex-col pb-3">
                        <span class="border-l-2 border-green-400 pl-3 font-bold">Université XYZ</span>
                        <span class="pl-4 italic">Licence en Informatique</span>
                        <span class="pl-4 text-gray-400">(2015 - 2019)</span>
                    </li>
                    <li class="flex flex-col pb-3">
                        <span class="border-l-2 border-green-400 pl-3 font-bold">Université XYZ</span>
                        <span class="pl-4 italic">Licence en Informatique</span>
                        <span class="pl-4 text-gray-400">(2015 - 2019)</span>
                    </li>
                    <li class="flex flex-col pb-3">
                        <span class="border-l-2 border-green-400 pl-3 font-bold">Université XYZ</span>
                        <span class="pl-4 italic">Licence en Informatique</span>
                        <span class="pl-4 text-gray-400">(2015 - 2019)</span>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col p-3 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white">
                <h3 class="font-semibold text-left">Parcours professionnel</h3>
                <ul class="pl-2 text-left">
                    <li class="flex flex-col pb-3">
                        <span class="border-l-2 border-green-400 pl-3 font-bold">MA-INFO</span>
                        <span class="pl-4 italic">Stagiaire</span>
                        <span class="pl-4 text-gray-400">Août 2019 à Septembre 2019</span>
                    </li>
                    <li class="flex flex-col pb-3">
                        <span class="border-l-2 border-green-400 pl-3 font-bold">TEC-SARL</span>
                        <span class="pl-4 italic">Stagiaire</span>
                        <span class="pl-4 text-gray-400">Janvier 1943 à Octobre 1943</span>
                    </li>
                    <li class="flex flex-col pb-3">
                        <span class="border-l-2 border-green-400 pl-3 font-bold">Art Creativity</span>
                        <span class="pl-4 italic">Stagiaire</span>
                        <span class="pl-4 text-gray-400">Décembre 2015 à Janvier 2019</span>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col p-3 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white">
                <h3 class="font-semibold text-left">Statistiques tuteur</h3>
                <ul class="sellerStats">
                    <li>
                        <ul class="list-none p-0 mb-0">
                            <li class="sellerStat sellerStat--review flex items-center">
                                <img src="https://comeup.com/built/frontend/images/icon-thumb_up_alt-24px.svg" alt="" width="16" height="16" class="mr-2">
                                Avis positifs
                                <strong class="ml-2">
                                    472
                                </strong>
                            </li>
                            <li class="sellerStat sellerStat--review flex items-center">
                                <img src="https://comeup.com/built/frontend/images/icon-thumb_down_alt-24px.svg" alt="" width="16" height="16" class="mr-2">
                                Avis négatifs
                                <strong class="ml-2">
                                    2
                                </strong>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <article class="lg:w-[65%]">
            <div class="pl-4 mx-auto max-w-screen-xl">
                <div class="grid lg:grid-cols-2 gap-6 xl:gap-10 grid-cols-1">
                    <!-- Pricing Card -->
                    <div class="flex flex-col max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white">
                        <a href="#">
                            <img class="rounded-t-lg w-full" src="https://img-c.udemycdn.com/course/240x135/4045058_f063.jpg" alt="Bonnie Avatar">
                            <div class="m-2 space-y-3">
                                <h3 class="font-bold text-lg text-left">Formation en big_data</h3>
                                <div class="flex flex-row">
                                    <img src="https://img-c.udemycdn.com/course/240x135/4045058_f063.jpg" class="rounded-full h-10 w-10" alt="">
                                    <div class="pl-3">
                                        <p class="text-left"><span class="text-gray-400">par</span> ZAKARI</p>
                                        <div class="">
                                            <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                            <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                            <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                            <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                            <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                            <span>(20)</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="w-full p-3 bg-gray-300 font-bold">$35</p>
                            </div>
                        </a>
                    </div>
                    <div class="flex flex-col max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white">
                        <a href="#">
                            <img class="rounded-t-lg w-full" src="https://img-c.udemycdn.com/course/240x135/4045058_f063.jpg" alt="Bonnie Avatar">
                            <div class="m-2 space-y-3">
                                <h3 class="font-bold text-lg text-left">Formation en big_data</h3>
                                <div class="flex flex-row">
                                    <img src="https://img-c.udemycdn.com/course/240x135/4045058_f063.jpg" class="rounded-full h-10 w-10" alt="">
                                    <div class="pl-3">
                                        <p class="text-left"><span class="text-gray-400">par</span> ZAKARI</p>
                                        <div class="">
                                            <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                            <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                            <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                            <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                            <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                            <span>(20)</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="w-full p-3 bg-gray-300 font-bold">$35</p>
                            </div>
                        </a>
                    </div>
                    <div class="flex flex-col max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white">
                        <a href="#">
                            <img class="rounded-t-lg w-full" src="https://img-c.udemycdn.com/course/240x135/4045058_f063.jpg" alt="Bonnie Avatar">
                            <div class="m-2 space-y-3">
                                <h3 class="font-bold text-lg text-left">Formation en big_data</h3>
                                <div class="flex flex-row">
                                    <img src="https://img-c.udemycdn.com/course/240x135/4045058_f063.jpg" class="rounded-full h-10 w-10" alt="">
                                    <div class="pl-3">
                                        <p class="text-left"><span class="text-gray-400">par</span> ZAKARI</p>
                                        <div class="">
                                            <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                            <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                            <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                            <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                            <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                            <span>(20)</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="w-full p-3 bg-gray-300 font-bold">$35</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </article>
    </section>
</section>
@endsection
