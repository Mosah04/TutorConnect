@php
    use App\Models\User;
@endphp
@extends('layouts.tutor')
@section('main')
<h2 class="text-center text-2xl font-semibold">Tous les blogs sont présentés ici</h2>
@if ($blogs)
    @foreach ($blogs as $blog)
    <article class="p-6 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-4">
        <div class="flex items-center justify-between mb-3 text-gray-500">
            <span class="text-sm">Publié {{Carbon\Carbon::parse($blog->created_at)->locale('fr')->diffForHumans()}}</span>
        </div>

        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$blog->titre}}</h2>

        <p class="mb-5 text-gray-500 dark:text-gray-400">{{$blog->sous_titre}}</p>
        <div class="flex items-center justify-between">
            <a class="flex items-center space-x-2" href="{{route('afficherProfil',$blog->user_id)}}">
                <img class="rounded-full w-7 h-7" src="{{asset('storage/usersImages/'.User::find($blog->user_id)->image)}}" alt="Photo de profil">
                <span class="font-medium dark:text-white">{{User::find($blog->user_id)->name}}</span>
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
    <p class="m-4 text-center">Aucun blog disponible!</p>
@endif
@endsection
