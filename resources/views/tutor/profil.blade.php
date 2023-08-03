@extends('layouts.tutor')
@section('main')
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-8 space-y-6">

                <div class="flex flex-col items-center p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="w-[90%] bg-gray-700 bg-blend-multiply rounded-lg">
                        <img class="lg:h-[60vh] h-[30vh] w-[100%] rounded-lg" src="{{asset('img/conference.jpg')}}" alt="image description">
                    </div>
                    <div class="transform -translate-y-1/2 inline-block flex flex-col">
                        <div class="inline-block rounded-full bg-white p-2 my-0">
                            <img id="img" class="w-[10rem] h-[10rem] rounded-full" src="https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg" alt="Rounded avatar">
                        </div>
                        <label for="img" class="border-2 border-gray-200 border-dashed -mt-200 text-center">{{Auth::user()->name}}</label>
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
    </div>
 </div>
@endsection
