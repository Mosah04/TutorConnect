@extends('layouts.tutor')
@section('main')
    <h2 class="text-semibold text-center text-2xl">Modifier votre blog</h2>
    <form action="{{route('blog.update', $blog->id)}}" method="post" class="space-y-3">
        @method('PATCH')
        @csrf
        <div>
            <x-input-label for="titre" :value="__('Titre de votre blog')" />
            <input type="text" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-gray-600 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" id="titre" name="titre" value={{$blog->titre}}>
            <x-input-error class="mt-2" :messages="$errors->get('titre')" />
        </div>

        <div>
            <x-input-label for="sous_titre" :value="__('Sous-titre de votre blog')" />
            <input type="text" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-gray-600 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" id="sous_titre" name="sous_titre" value={{$blog->sous_titre}}>
            <x-input-error class="mt-2" :messages="$errors->get('sous_titre')" />
        </div>

        <x-forms.tinymce-editor/>
        <x-primary-button>{{ __('Modifier le blog') }}</x-primary-button>
    </form>
@endsection
