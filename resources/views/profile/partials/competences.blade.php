<section>
    @if ($errors->any())
    <ul class="mb-3">
        @foreach ($errors->all() as $error)
            <li class="text-left list-disc text-red-500">{{$error}}</li>
        @endforeach
    </ul>
    @endif
    @if (count($userCompetences)>0)
    <h2>Vos compétences</h2>
    <ul>
        @foreach ($userCompetences as $userCompetence)
            <li class="flex justify-between w-full p-2 border rounded bg-gray-100 m-2">{{$userCompetence->nom}}
                <a href="{{url('/retirerCompetence/'.$userCompetence->id)}}" class="flex justify-between px-2 hover:border hover:border-red-400 hover:rounded hover:bg-red-200 transition-all duration-300 ease-in">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="w-5 h-5 text-red-400" viewBox="0 0 256 256" xml:space="preserve">

                        <defs>
                        </defs>
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                            <path d="M 86.5 48.5 h -83 C 1.567 48.5 0 46.933 0 45 s 1.567 -3.5 3.5 -3.5 h 83 c 1.933 0 3.5 1.567 3.5 3.5 S 88.433 48.5 86.5 48.5 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: currentColor; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                            <path d="M 86.5 48.5 h -83 C 1.567 48.5 0 46.933 0 45 s 1.567 -3.5 3.5 -3.5 h 83 c 1.933 0 3.5 1.567 3.5 3.5 S 88.433 48.5 86.5 48.5 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: currentColor; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                        </g>
                    </svg>
                </a>
            </li>
        @endforeach
    </ul>
    @else
        <p class="my-3">Vous n'avez ajouté aucune compétence pour le moment!</p>
    @endif

<!-- Modal toggle -->
<button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="inline-block center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 50 50" id="Layer_1" version="1.1" viewBox="0 0 50 50" class="h-5 text-white inline-block text-white" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect fill="none" height="50" width="50"/><line fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="4" x1="9" x2="41" y1="25" y2="25"/><line fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="4" x1="25" x2="25" y1="9" y2="41"/></svg>
    Ajouter une compétence
</button>
<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Ajout de compétence(s)</h3>
                <div class="inline-flex items-center justify-center w-full">
                <hr class="w-full h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
                <div class="absolute px-2 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
                    <p>Choisissez-en</p>
                </div>
            </div>
            @if (count($competences)>0)
            <form action="{{url('/editCompetences')}}" method="post">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    @foreach ($competences as $competence)
                        <div class="flex items-center h-5">
                            <input id="{{$competence->id}}" name="competences[]" type="checkbox" @checked($userCompetences->pluck('id')->contains($competence->id)) value="{{$competence->id}}" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
                            <label for="{{$competence->id}}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$competence->nom}}</label>
                        </div>
                    @endforeach
                </div>
                <x-primary-button type="submit" class="mt-4 w-full">
                    {{ __('OK') }}
                </x-primary-button>
            </form>
            @else
                <p>Aucune compétence disponible, ajoutez-en!</p>
            @endif

                <form class="space-y-6" action="{{url('/ajouterCompetence')}}" method="POST">
                @csrf
                <div class="inline-flex items-center justify-center w-full">
                    <hr class="w-full h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
                    <div class="absolute px-2 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
                        <p>Ou ajoutez-la si non disponible</p>
                    </div>
                </div>
                <input type="text" name="nomCompetence" id="nomCompetence" placeholder="Nouvelle compétence" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
