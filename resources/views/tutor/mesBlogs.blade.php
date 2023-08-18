@extends('layouts.tutor')
@section('main')
<h2 class="text-center text-2xl font-semibold">Vos blogs sont présentés ici</h2>
@if (count($blogs)>0)
    @foreach ($blogs as $blog)
    <article class="p-6 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-4">
        <div class="flex items-center justify-between mb-3 text-gray-500">
            <span class="text-sm">Publié {{Carbon\Carbon::parse($blog->created_at)->locale('fr')->diffForHumans()}}</span>
            <button id="{{$blog->id}}-dropdown-button" data-dropdown-toggle="{{$blog->id}}-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                </svg>
            </button>
            <div id="{{$blog->id}}-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1219px, 176px);">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="{{$blog->id}}-dropdown-button">
                    <li>
                        <a href="{{route('blog.edit', $blog->id)}}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Modifier</a>
                    </li>
                </ul>
                <div class="py-1">
                    <form class="m-0" action="{{route('blog.destroy', $blog->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit"  class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>

        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$blog->titre}}</h2>

        <p class="mb-5 text-gray-500 dark:text-gray-400">{{$blog->sous_titre}}</p>
        <div class="flex items-center justify-between">
            <a class="flex items-center space-x-2" href="{{route('afficherProfil',$blog->user_id)}}">
                <img class="rounded-full w-7 h-7" src="{{asset('storage/usersImages/'.Auth::user()->image)}}" alt="Photo de profil">
                <span class="font-medium dark:text-white">{{Auth::user()->name}}</span>
            </a>
            <a class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500" href="{{url('blog/'.$blog->id)}}">
                Voir ce blog
                <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd">
                    </path>
                </svg>
            </a>
        </div>
    </article>
    @endforeach

@else
    <p class="m-4 text-center">Vous n'avez ajouté aucun blog!</p>
@endif

    <div data-dial-init class="fixed bottom-6 right-12 group">
        <div id="speed-dial-menu-dropdown-alternative" class="flex flex-col justify-end hidden py-1 mb-4 space-y-2 bg-white border border-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600">
            <ul class="text-sm text-gray-500 dark:text-gray-300">
                <li>
                    <a href="{{route('blog.create')}}" class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white dark:border-gray-600">
                        <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z"/>
                        </svg>
                        <span class="text-sm font-medium">Nouveau blog</span>
                    </a>
                </li>
            </ul>
        </div>
        <button type="button" data-dial-toggle="speed-dial-menu-dropdown-alternative" aria-controls="speed-dial-menu-dropdown-alternative" aria-expanded="false" class="flex items-center justify-center ml-auto text-white bg-blue-700 rounded-full w-14 h-14 shadow-md shadow-blue-400 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:outline-none">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
            <span class="sr-only">Open actions menu</span>
        </button>
    </div>
@endsection

