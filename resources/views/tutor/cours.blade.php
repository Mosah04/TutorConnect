@php
    use App\Models\User;
@endphp
@extends('layouts.tutor')
@section('main')
<div>
    <img width="1340" height="400" alt="" src="https://img-c.udemycdn.com/notices/featured_carousel_slide/image/487fb3b7-4b6e-4c2f-a3fe-67eb51016502.jpg">
</div>
<div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
    <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Quel sera votre prochain sujet d'apprentissage ?</h2>
    </div>
    <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2 lg:grid-cols-3 mx-12 sm:mx-0">
        @if ($Cours)
        @foreach ($Cours as $cours)
            <div class="flex flex-col max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white">
                <a href="#{{$cours->id}}">
                    <img class="rounded-t-lg w-full h-40" src="{{asset('storage/coursImages/'.$cours->image)}}" alt="Bonnie Avatar">
                    <div class="m-2 space-y-3">
                        <h3 class="font-bold text-lg text-left">{{$cours->titre}}</h3>
                        <div class="flex flex-row">
                            <img src="{{asset('storage/usersImages/'.User::find($cours->user_id)->image)}}" class="rounded-full h-10 w-10" alt="">
                            <div class="pl-3">
                                <div class="">
                                    <p class="text-left"><span class="text-gray-400">par </span>{{User::find($cours->user_id)->name}}</p>
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
                </a>
            </div>
        @endforeach
        @endif
    </div>
</div>
@endsection

