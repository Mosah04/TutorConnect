@extends('layouts.tutor')
@section('main')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold mb-4">Foire aux questions (FAQ)</h1>
    <ul class="list-disc ml-6 mb-8">
        <li>
            <h3 class="text-xl font-bold mb-2">Comment puis-je m'inscrire en tant qu'étudiant sur TutorConnect ?</h3>
            <p>Pour vous inscrire en tant qu'étudiant, cliquez sur le bouton 'S'inscrire' en haut à droite de la page d'accueil. Remplissez le formulaire d'inscription en fournissant vos informations personnelles, votre adresse e-mail et choisissez un mot de passe. Une fois l'inscription terminée, vous pourrez vous connecter à votre compte et commencer à rechercher des tuteurs.</p>
        </li>
    </ul>

    <h1 class="text-4xl font-bold mb-4">Guides d'utilisation</h1>
    <ol class="list-decimal ml-8 mb-8">
        <li>
            <h3 class="text-xl font-bold mb-2">Comment réserver une session de tutorat sur TutorConnect ?</h3>
            <ol class="list-decimal ml-6">
                <li>Étape 1 : Connectez-vous à votre compte étudiant.</li>
                <li>Étape 2 : Recherchez un tuteur en utilisant le filtre de recherche ou en parcourant les profils.</li>
                <li>Étape 3 : Sélectionnez le tuteur souhaité et cliquez sur son profil pour voir ses disponibilités (agenda).</li>
                <li>Étape 4 : Choisissez un créneau horaire disponible dans l'agenda du tuteur.</li>
                <li>Étape 5 : Confirmez la réservation et procédez au paiement en utilisant le système de paiement sécurisé intégré.</li>
            </ol>
        </li>
    </ol>

    <h1 class="text-4xl font-bold mb-4">Vidéos tutorielles</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
        <h3 class="text-red-500">Les vidéos ne sont pas disponibles pour le moment</h3><br>
        <div class="border rounded-lg p-4">
            Vidéo 1
        </div>
        <div class="border rounded-lg p-4">
            Vidéo 2
        </div>
        <div class="border rounded-lg p-4">
            Vidéo 3
        </div>
        <div class="border rounded-lg p-4">
            Vidéo 4
        </div>
    </div>

    <h1 class="text-4xl font-bold mb-4">Contactez-nous</h1>
    <p class="mb-4">Pour toute question ou assistance, veuillez nous contacter :</p>
    <ul class="list-disc ml-6 mb-8">
        <li>E-mail : support@tutorconnect.com</li>
        <li>Numéro de téléphone : +229 -- -- -- --</li>
        <li><button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-blue-500 hover:underline">Ou cliquez-ici pour remplir le formulaire de contact</button>
            <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Fermez le module</span>
                        </button>
                        <div class="px-6 py-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Contactez-nous</h3>
                            <form class="space-y-6" action="#">
                              <div>
                                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                                  <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Kouadjo" required>
                              </div>
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
                                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="kouadjo225@gmail.com" required>
                                </div>
                                <div>
                                  <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Message</label>
                                  <textarea name="message" id="" cols="30" rows="5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Exposez votre problème" required></textarea>
                              </div>
                                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Envoyez</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <h1 class="text-4xl font-bold mb-4">Liens utiles</h1>
    <ul class="list-disc ml-6 mb-8">
        <li>
            <a href="{{ route('home') }}" class="text-blue-500 hover:underline">Découvrez notre blog éducatif pour des articles utiles sur divers sujets académiques
            </a>
        </li>
        <li>
            <a href="{{ route('cours') }}" class="text-blue-500 hover:underline">Découvrez les cours disponibles proposés par les professeurs qualifiés et certifiés
            </a>
        </li>
        <li>
            <a href="{{ route('sessions') }}" class="text-blue-500 hover:underline">Intégrez la discussion entre étudiant et tuteur
            </a>
        </li>
    </ul>

    <h1 class="text-4xl font-bold mb-4">Procédure en cas de problème</h1>
    <p class="mb-8">Si vous rencontrez un problème technique, veuillez nous contacter via le formulaire de contact ci-dessus, en fournissant autant de détails que possible sur le problème rencontré. Notre équipe de support technique vous répondra dans les plus brefs délais et vous assistera pour résoudre le problème.</p>

    <h1 class="text-4xl font-bold mb-4">Mises à jour récentes</h1>
    <p class="mb-8">Si des modifications ou des mises à jour importantes ont été apportées à l'application, nous les mentionnerons ici pour vous fournir une expérience utilisateur optimale.</p>

    <h1 class="text-4xl font-bold mb-4">Politiques de confidentialité et de sécurité</h1>
    <p class="mb-8">
        <div class="mb-8">
            <p class="mb-4">Chez TutorConnect, nous accordons une importance primordiale à la confidentialité de nos utilisateurs. Nous souhaitons vous informer en détail sur la manière dont nous collectons, utilisons et protégeons vos données sur notre plateforme.</p>

            <h2 class="font-bold text-lg mb-2">Collecte de données :</h2>
            <p class="mb-4">Lorsque vous utilisez TutorConnect, nous pouvons collecter des informations personnelles telles que votre nom, votre adresse e-mail et d'autres détails nécessaires à votre inscription et à l'utilisation de nos services. Nous pouvons également recueillir des informations démographiques et des données d'utilisation pour améliorer votre expérience sur notre site.</p>

            <h2 class="font-bold text-lg mb-2">Utilisation des données :</h2>
            <p class="mb-4">Les informations que nous collectons sont utilisées pour vous fournir un accès personnalisé à nos services et pour vous proposer des fonctionnalités adaptées à vos besoins. Nous pouvons également utiliser ces données pour vous envoyer des notifications importantes, des mises à jour de nos services ou des offres spéciales, toujours dans le respect de vos préférences de communication.</p>

            <h2 class="font-bold text-lg mb-2">Protection des données :</h2>
            <p class="mb-4">Nous comprenons l'importance de protéger vos données personnelles et avons mis en place des mesures de sécurité robustes pour éviter tout accès, divulgation ou utilisation non autorisés de vos informations. Nos systèmes sont régulièrement mis à jour et nous utilisons des technologies de cryptage pour sécuriser vos données lors de leur transmission.</p>

            <h2 class="font-bold text-lg mb-2">Accès restreint :</h2>
            <p class="mb-4">L'accès aux données personnelles est limité aux employés et aux prestataires de services autorisés qui ont besoin de ces informations pour fournir les services demandés. Nous avons mis en place des politiques strictes concernant l'accès et l'utilisation des données pour garantir qu'elles restent confidentielles.</p>

            <h2 class="font-bold text-lg mb-2">Partage de données :</h2>
            <p class="mb-4">Nous ne vendons pas, ne louons pas et ne partageons pas vos informations personnelles avec des tiers à des fins de marketing sans votre consentement explicite. Nous pouvons partager des informations de manière anonyme ou agrégée à des fins statistiques ou d'analyse, mais cela ne permet pas d'identifier individuellement nos utilisateurs.</p>

            <h2 class="font-bold text-lg mb-2">Cookies et suivi :</h2>
            <p class="mb-4">Nous utilisons des cookies et des technologies de suivi similaires pour améliorer votre expérience sur notre site web. Vous pouvez contrôler les cookies via les paramètres de votre navigateur, mais notez que certaines fonctionnalités de TutorConnect pourraient ne pas fonctionner correctement sans certains cookies.</p>

            <h2 class="font-bold text-lg mb-2">Modifications de la politique de confidentialité :</h2>
            <p class="mb-4">Nous nous réservons le droit de mettre à jour cette politique de confidentialité de temps à autre. Toute modification sera notifiée sur notre site web, et nous vous encourageons à consulter régulièrement cette page pour rester informé des changements éventuels.</p>

            <p class="mb-4">En choisissant TutorConnect, vous pouvez être assuré que nous nous engageons à protéger votre confidentialité et à respecter les normes de sécurité les plus élevées. Votre confiance est primordiale pour nous, et nous continuerons à prendre toutes les mesures nécessaires pour garantir la sécurité de vos données sur notre plateforme. Si vous avez des questions concernant notre politique de confidentialité, n'hésitez pas à nous contacter via notre page de support dédiée.</p>
        </div>

    </p>
</div>
@endsection
