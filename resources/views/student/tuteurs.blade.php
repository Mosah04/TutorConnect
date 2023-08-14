@extends('layouts.student')
@section('main')

<div class="py-8 px-4 text-center">
    <div class="mb-8 bg-green-300 py-2">
        <h2 class="mb-2 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Trouvez des tuteurs</h2>
        <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">TutorConnect vous présente une liste de tuteurs prêts à vous aider </p>
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
    @endif

</div>
@endsection

