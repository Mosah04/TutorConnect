@extends('layouts.student')
@section('main')
<div class="py-12">
    <div class="mx-auto sm:px-6 lg:px-8 space-y-6">

        <div class="relative p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-screen-xl lg:h-[60vh] h-[40vh] bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
                {{-- <img class="h-auto max-w-lg rounded-lg" src="" alt="image description"> --}}
            </div>
            <div class="transform translate-x-1/2 -translate-y-1/2 inline-block rounded-full bg-blue-800 p-2">
                <img class="w-[100px] h-[100px] rounded-full" src="https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg" alt="Rounded avatar">
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
@endsection
