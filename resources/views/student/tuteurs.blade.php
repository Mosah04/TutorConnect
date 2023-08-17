@extends('layouts.student')
@section('main')
@php
    use Illuminate\Support\Facades\Route;
    use App\Models\Competence;
@endphp

<div class="py-8 px-4 text-center">
    <div class="mb-8 bg-blue-300 space-y-2 pb-2">
        <h2 class="mb-2 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Trouvez des tuteurs</h2>
        <p class="font-light text-gray-500 sm:text-xl {{Route::currentRouteName() === 'viewFoundTutor'?"text-left pl-3":""}}">{{Route::currentRouteName() === 'viewFoundTutor'?"Résultats des tuteurs ayant pour ".request('cr')." : ".(!is_numeric(request('val'))?request('val'):(is_null(Competence::find(request('val')))?'':Competence::find(request('val'))->nom)):"TutorConnect vous présente une liste de tuteurs prêts à vous aider"}}</p>

    <form class="m-4" method="POST" action="{{route('searchTutor')}}">
        @method('POST')
        @csrf
        <div class="flex">
            <button id="search-dropdown-button" data-dropdown-toggle="search-dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-white bg-blue-700 border border-gray-300 rounded-l-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-indigo-200" type="button">
                <span id="search-button-text">Tous les tuteurs</span>
                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
            <div id="search-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="search-dropdown-button">
                <li>
                    <button type="button" onclick="document.getElementById('search-button-text').textContent='Spécialité'; document.getElementById('search-criteria').value='specialite'; let searchBar=document.getElementById('search-bar'); if(searchBar.classList.contains('hidden')){searchBar.classList.toggle('hidden'); document.getElementById('competences').classList.toggle('hidden');}" class="inline-flex w-full px-4 py-2 hover:bg-gray-300 dark:hover:text-white">Spécialité</button>
                </li>
                <li>
                    <button type="button" onclick="document.getElementById('search-button-text').textContent='Compétences'; document.getElementById('search-criteria').value='competence';  document.getElementById('search-bar').classList.toggle('hidden'); document.getElementById('competences').classList.toggle('hidden');" class="inline-flex w-full px-4 py-2 hover:bg-gray-300 dark:hover:text-white">Compétences</button>
                </li>
                <li>
                    <button type="button" onclick="document.getElementById('search-button-text').textContent='Niveau d\'études'; document.getElementById('search-criteria').value='niveau'; let searchBar=document.getElementById('search-bar'); if(searchBar.classList.contains('hidden')){searchBar.classList.toggle('hidden'); document.getElementById('competences').classList.toggle('hidden');}"  class="inline-flex w-full px-4 py-2 hover:bg-gray-300 dark:hover:text-white">Niveau d'étude</button>
                </li>
                </ul>
            </div>
            <div class="relative w-full">
                <input type="search" id="search-bar" name="search_bar" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-transparent rounded-r-lg border-l-2 border border-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Cherchez un tuteur selon un de vos critères">
                <label for="competences" class="sr-only">Choisissez une compétence</label>
                <select id="competences" name="competences" :value="{{old('competences')}}" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-transparent rounded-r-lg border-l-2 border border-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500 hidden">
                    <option selected value="">Choisissez une compétence</option>
                    @foreach ($competences as $competence)
                        <option value="{{$competence->id}}">{{$competence->nom}}</option>
                    @endforeach
                </select>
                <input type="hidden" name="search_criteria" id="search-criteria" value="">
                <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </div>
    </form>

    </div>
    @if ($tuteurs)
    <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
        @foreach ($tuteurs as $tuteur)
        <div class="text-center text-gray-500 dark:text-gray-400 p-3 rounded-lg hover:bg-white hover:shadow-lg hover:shadow-gray-800 transition-hover duration-500 ease-out border border-gray-500">
            <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{asset('storage/usersImages/'.$tuteur->image)}}" alt="Image du tuteur">
            <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                <a href="{{url('/user/'.$tuteur->id)}}">{{$tuteur->name}}</a>
            </h3>
            <p>{{$tuteur->specialite->nom??""}}</p>
            <p>Note</p>
        </div>
        @endforeach
    </div>
    @else
        <p>Aucun tuteur ne correspond à votre recherche!</p>
    @endif
</div>
@endsection

