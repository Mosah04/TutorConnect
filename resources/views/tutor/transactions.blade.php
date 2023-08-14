@extends('layouts.tutor')
@section('main')

<section class="flex flex-col items-center">
    <div class="w-full">
        <img src="https://thumbor.comeup.com/unsafe/960x267/filters:quality(90):no_upscale()/user/cf7759c6-f30c-435e-bb64-5810bd80e867.png" srcset="
        https://thumbor.comeup.com/unsafe/320x89/filters:quality(90):no_upscale()/user/cf7759c6-f30c-435e-bb64-5810bd80e867.png 320w,
        https://thumbor.comeup.com/unsafe/480x133/filters:quality(90):no_upscale()/user/cf7759c6-f30c-435e-bb64-5810bd80e867.png 480w,
        https://thumbor.comeup.com/unsafe/640x178/filters:quality(90):no_upscale()/user/cf7759c6-f30c-435e-bb64-5810bd80e867.png 640w,
        https://thumbor.comeup.com/unsafe/960x267/filters:quality(90):no_upscale()/user/cf7759c6-f30c-435e-bb64-5810bd80e867.png 960w
        " class="u-aspect-ratio d-block" alt="">
    </div>
    <div class="mt-4">
        <img class="rounded-full overflow-hidden flex-shrink-0 w-full h-full object-contain" src="https://thumbor.comeup.com/unsafe/158x158/filters:quality(90):no_upscale()/user/53632c87-449c-45d6-89ac-252b8395ef81.png" alt="">
    </div>
    <div class="mt-4 text-center">
        <div class="text-lg font-bold">
            ZAKARI
        </div>
        <div role="link" class="btn-base btn-white text-center flex-shrink-0 text-sm cursor-pointer js-fakeLink mt-2 px-4 py-2 rounded-md border border-gray-300 hover:bg-gray-100" data-id="aureliedm" data-type="poser-une-question-au-vendeur" data-cy="fake-contact-link">
            Contacter
        </div>
    </div>
</section>
<div class="bg-white dark:bg-gray-900">
    <div class="space-y-8 py-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                <h3 class="mb-4 text-2xl font-semibold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Un peu sur le tuteur</font></font></h3>
                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">“Je suis conceptrice-rédactrice en communication depuis 4 ans. Grâce à mon expertise dans le domaine de la communication je sais jouer des mots, faire preuve d’une qualité d’écoute et des attentes souhaitées.
                    La rigueur est ma devise. J’aime ce que je fais, mon intuition et ma créativité ont pour but de faire ressortir le meilleur de vous.</font></font></p>
            </div>
    </div>
</div>
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="space-y-8 lg:grid lg:grid-cols-2 sm:gap-6 xl:gap-10 lg:space-y-0">
            <!-- Pricing Card -->
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                <h3 class="mb-4 text-2xl font-semibold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entreprise123</font></font></h3>
                <a href="#">
                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://img-c.udemycdn.com/course/240x135/4045058_f063.jpg" alt="Bonnie Avatar">
                </a>
                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formation en big_data</font></font></p>
                <ul class="flex justify-center mt-4 space-x-4">
                    <li>
                        <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path></svg>
                        </a>
                        <li>
                            <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                                Par ZAKARI
                            </a>
                        </li>

                </ul>

                <!-- List -->
                <ul role="list" class="mb-8 space-y-4 text-left">

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pas d'installation ni de frais cachés</font></font></span>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                <h3 class="mb-4 text-2xl font-semibold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entreprise</font></font></h3>
                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Idéal pour les utilisations à grande échelle et les droits de redistribution étendus.</font></font></p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">499 $</font></font></span>
                    <span class="text-gray-500 dark:text-gray-400"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">/mois</font></font></span>
                </div>
                <!-- List -->
                <ul role="list" class="mb-8 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Configuration individuelle</font></font></span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pas d'installation ni de frais cachés</font></font></span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Taille de l'équipe&nbsp;: </font></font><span class="font-semibold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">plus de 100&nbsp;développeurs</font></font></span></span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Assistance Premium : </font></font><span class="font-semibold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">36 mois</font></font></span></span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mises à jour gratuites : </font></font><span class="font-semibold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">36 mois</font></font></span></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  </section>

<div class="pb-4 pb-lg-7 flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
    <h3 class="mb-4 text-2xl font-semibold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Un peu sur moi</font></font></h3>
        <p class="mb-8 space-y-4 text-left">
            “Je suis conceptrice-rédactrice en communication depuis 4 ans. Grâce à mon expertise dans le domaine de la communication je sais jouer des mots, faire preuve d’une qualité d’écoute et des attentes souhaitées. <br>
            La rigueur est ma devise. J’aime ce que je fais, mon intuition et ma créativité ont pour but de faire ressortir le meilleur de vous.
        </p>
</div>
<div class="mainBlock pb-4 pb-lg-7">
    <header class="mainBlock-Header mainBlock-Header--medium mb-3 mb-lg-6 justify-center">
        <h2 class="mainBlock-Title">Statistiques vendeur</h2>
    </header>
    <ul class="sellerStats">
        <li>
            <ul class="list-none p-0 mb-0">
                <li class="sellerStat sellerStat--review flex items-center">
                    <img src="/built/frontend/images/icon-thumb_up_alt-24px.svg" alt="" width="16" height="16" class="mr-2">
                    Avis positifs
                    <strong class="ml-2">
                        472
                    </strong>
                </li>
                <li class="sellerStat sellerStat--review flex items-center">
                    <img src="/built/frontend/images/icon-thumb_down_alt-24px.svg" alt="" width="16" height="16" class="mr-2">
                    Avis négatifs
                    <strong class="ml-2">
                        2
                    </strong>
                </li>
            </ul>
        </li>
        <li>
            <ul class="list-none p-0 mb-0">
                <li class="sellerStat flex items-center">
                    <img loading="lazy" src="/built/frontend/images/icon-forward.svg" alt="" width="16" height="16" class="mr-2">
                    Temps de réponse moy.
                    <strong class="ml-2">
                        5h
                    </strong>
                </li>
                <li class="sellerStat flex items-center">
                    <img loading="lazy" src="/built/frontend/images/icon-person-check.svg" alt="" width="16" height="16" class="mr-2">
                    Taux de prise en charge
                    <strong class="ml-2">91%</strong>
                </li>
                <li class="sellerStat flex items-center">
                    <img loading="lazy" src="/built/frontend/images/icon-check-round.svg" alt="" width="16" height="16" class="mr-2">
                    Taux de complétion
                    <strong class="ml-2">100%</strong>
                </li>
                <li class="sellerStat sellerStat--delais flex items-center">
                    <img loading="lazy" src="/built/frontend/images/icon-clock-bold.svg" alt="" width="16" height="16" class="mr-2">
                    Respect des délais
                    <strong class="ml-2">100%</strong>
                </li>
            </ul>
        </li>
    </ul>
</div>

    </div>
</main>


   RECEVOIR LES NOTIFICATIONS DES ACHATS DES FORMATIONS DU TUTEUR
@endsection

