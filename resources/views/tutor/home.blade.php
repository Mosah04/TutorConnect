@extends('layouts.tutor')
@section('main')
<div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:px-6">
    <div class="mx-auto mb-8 max-w-screen-sm">
        <h2 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Nos tuteurs</h2>
        <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Nous disposons de tuteurs prêts à vous aider</p>
    </div>
    <div class="px-4 text-center">
        @if ($tuteurs)
        <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
            @foreach ($tuteurs as $tuteur)
            <div class="text-center text-gray-500 dark:text-gray-400 p-3 rounded-lg hover:bg-white hover:shadow-lg hover:shadow-gray-800 transition-hover duration-500 ease-out border border-gray-500">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{asset('storage/usersImages/'.$tuteur->image)}}" alt="Image du tuteur">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="{{route('afficherProfil', $tuteur->id)}}">{{$tuteur->name}}</a>
                </h3>
                <p>{{$tuteur->specialite->nom??""}}</p>
                <p>Note</p>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
<div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
    <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Quel sera votre prochain sujet d'apprentissage ?</h2>
    </div>
    <div class="grid gap-8 mb-6 md:grid-cols-2 lg:grid-cols-3 mx-12 sm:mx-0">
        @if ($Cours)
        @foreach ($Cours as $cours)
            <div class="flex flex-col max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white">
                {{-- <a href="#{{$cours->id}}"> --}}
                    <img class="rounded-t-lg w-full h-40" src="{{asset('storage/coursImages/'.$cours->image)}}" alt="">
                    <div class="m-2 space-y-3 flex flex-col">
                        <h3 class="font-bold text-lg text-left truncate">{{$cours->titre}}</h3>
                        <div class="flex flex-row">
                            <img src="{{asset('storage/usersImages/'.$cours->user->image)}}" class="rounded-full h-10 w-10" alt="">
                            <div class="pl-3">
                                <div class="">
                                    <p class="text-left"><span class="text-gray-400">par </span>{{$cours->user->name}}</p>
                                    <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                    <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                    <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                    <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                    <img src="https://comeup.com/built/frontend/images/icon-star-full.svg" alt="" class="inline-block">
                                    <span>(20)</span>
                                </div>
                            </div>
                        </div>
                        <p class="w-full p-3 bg-gray-300 font-bold">{{$cours->tarif}}FCFA</p>
                    </div>
                {{-- </a> --}}
            </div>
        @endforeach
        @endif
    </div>
</div>
<div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
    <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-gray-900 dark:text-white">Suivez des blogs éducatifs</h2>
</div>
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
                    <img class="rounded-full w-7 h-7" src="{{asset('storage/usersImages/'.$blog->user->image)}}" alt="Photo de profil">
                    <span class="font-medium dark:text-white">{{$blog->user->name}}</span>
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
    @endif
@endsection
