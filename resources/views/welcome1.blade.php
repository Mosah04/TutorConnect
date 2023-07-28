<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-blue-800">


    <section class="bg-white dark:bg-gray-900 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 rounded-2xl">
        <div class="flex justify-center">
            <x-application-logo class="fill-current text-gray-500"/>
        </div>
        <div class="pb-8 px-4 mx-auto max-w-screen-xl text-center lg:pb-16">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">TutorConnect</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-8 lg:px-10 dark:text-gray-400">
                TutorConnect est une plateforme en ligne qui met en relation des tuteurs
                qualifiés avec des étudiants cherchant à recevoir de l'aide dans divers domaines
                académiques ou compétences spécialisées. L'application vise à offrir une solution
                pratique et efficace pour faciliter l'apprentissage et le développement des
                compétences.
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="{{url('/howToRegister')}}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    S'inscrire
                </a>
                <a href="{{url('/howToConnect')}}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Se connecter
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

</body>
</html>

