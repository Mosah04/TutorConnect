<section class="p-3 sm:p-5 space-y-3 sm:space-y-5">
    @if ($errors->any())
    <ul class="mb-3">
        @foreach ($errors->all() as $error)
            <li class="text-left list-disc text-red-500">{{$error}}</li>
        @endforeach
    </ul>
    @endif
    @if (count($parcoursProfessionnels)>0)
    <div class="relative shadow-md sm:rounded-lg">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">Entreprise</th>
                        <th scope="col" class="px-4 py-3">Poste occupé</th>
                        <th scope="col" class="px-4 py-3">Date de debut</th>
                        <th scope="col" class="px-4 py-3">Date de fin</th>
                        <th scope="col" class="px-4 py-3">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($parcoursProfessionnels as $parcoursProfessionnel)
                    <tr class="border-b dark:border-gray-700">
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$parcoursProfessionnel->entreprise}}</th>
                        <td class="px-4 py-3">{{$parcoursProfessionnel->poste}}</td>
                        <td class="px-4 py-3">{{$parcoursProfessionnel->date_debut->translatedFormat('d M Y', 'fr')}}</td>
                        <td class="px-4 py-3">{{is_null($parcoursProfessionnel->date_fin)?'':$parcoursProfessionnel->date_fin->translatedFormat('d M Y', 'fr')}}</td>
                        <td class="px-4 py-3 flex items-center justify-end">
                            <button id="{{$parcoursProfessionnel->id."-button"}}" data-dropdown-toggle="{{$parcoursProfessionnel->id}}-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                            <div id="{{$parcoursProfessionnel->id}}-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="{{$parcoursProfessionnel->id."-button"}}">
                                    <li>
                                        <button type="button" data-modal-target="modifier-{{$parcoursProfessionnel->id}}-modal" data-modal-toggle="modifier-{{$parcoursProfessionnel->id}}-modal" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Modifier</button>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <form action="{{route('deleteParcoursPro', $parcoursProfessionnel->id)}}" class="m-0" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    {{-- Change modal --}}
                    <div id="modifier-{{$parcoursProfessionnel->id}}-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modifier-{{$parcoursProfessionnel->id}}-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="px-6 py-6 lg:px-8">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Modifier le parcours professionnel</h3>
                                    <form class="space-y-6" action="{{route('modifierParcoursPro')}}" method="POST">
                                        @csrf
                                        @method('POST')
                                            <div class="pb-3">
                                                <label for="Entreprise" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Entreprise</label>
                                                <input type="text" name="entreprise" id="Entreprise" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$parcoursProfessionnel->entreprise}}" required>
                                            </div>
                                            <div>
                                            <div class="pb-3">
                                                <label for="Post" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Poste occupé</label>
                                                <input type="text" name="poste" id="Post" value="{{$parcoursProfessionnel->poste}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                            </div>
                                                </div>
                                            <div class="flex items-center justify-between space-x-4 pb-3">
                                            <div>
                                                <label for="datedebut" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de debut</label>
                                                <input type="date" min="1900" name="date_debut" id="datedebut" value="{{$parcoursProfessionnel->date_debut}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                            </div>
                                            <div>
                                                <label for="datefin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de fin</label>
                                                <input type="date" name="date_fin" id="datefin" value="{{$parcoursProfessionnel->date_debut}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                            </div>
                                            <input type="hidden" name="parcoursId" value="{{$parcoursProfessionnel->id}}">
                                            </div>
                                            <div class="flex items-center gap-4">
                                            <button type="submit" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                                    Modifier
                                            </button>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </table>
        </div>
    </div>
    @else
        <p>Vous n'avez pas ajouté de parcours professionnel!</p>
    @endif
    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="inline-block center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 50 50" id="Layer_1" version="1.1" viewBox="0 0 50 50" class="h-5 text-white inline-block text-white" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect fill="none" height="50" width="50"/><line fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="4" x1="9" x2="41" y1="25" y2="25"/><line fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="4" x1="25" x2="25" y1="9" y2="41"/></svg>
        Ajouter un parcours professionel
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
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Ajouter le parcours Professionnel</h3>
                    <form class="space-y-6" action="{{url('/ajouterParcoursPro')}}" method="POST">
                    @csrf
                    @method('POST')
                        <div>
                            <label for="Entreprise" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Entreprise</label>
                            <input type="text" name="entreprise" id="Entreprise" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="TEC SARL" required>
                        </div>
                        <div>
                        <div>
                            <label for="Post" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Poste occupé</label>
                            <input type="text" name="poste" id="Post" placeholder="Stagiaire" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                            </div>
                        <div class="flex items-center justify-between space-x-4 ">
                        <div>
                            <label for="datedebut" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de debut</label>
                            <input type="date" min="1900" name="date_debut" id="datedebut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="datefin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de fin</label>
                            <input type="date" name="date_fin" id="datefin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        </div>
                        </div>
                        <div class="flex items-center gap-4">
                        <button type="submit" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                Enregistrer
                        </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

