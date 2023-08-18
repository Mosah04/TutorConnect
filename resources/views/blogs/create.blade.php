@extends('layouts.tutor')
@section('main')
    <h2 class="text-semibold text-center text-2xl">Créez un blog éducatif sur un sujet qui vous plaît</h2>
    @if ($errors->any())
    <ul class="mb-3">
        @foreach ($errors->all() as $error)
            <li class="text-left list-disc text-red-500">{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{route('blog.store')}}" method="post" class="space-y-3">
        @csrf
        <div>
            <x-input-label for="titre" :value="__('Titre de votre blog')" />
            <x-text-input id="titre" name="titre" type="text" class="mt-1 block w-full" :value="old('titre')" autofocus autocomplete="titre" />
            <x-input-error class="mt-2" :messages="$errors->get('titre')" />
        </div>

        <div>
            <x-input-label for="sous_titre" :value="__('Sous-titre de votre blog')" />
            <x-text-input id="sous_titre" name="sous_titre" type="text" class="mt-1 block w-full" :value="old('sous_titre')" autofocus autocomplete="sous_titre" />
            <x-input-error class="mt-2" :messages="$errors->get('sous_titre')" />
        </div>

        <x-forms.tinymce-editor/>
        <x-primary-button>{{ __('Publier le blog') }}</x-primary-button>
    </form>
@endsection
