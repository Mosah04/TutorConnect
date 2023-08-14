@extends('layouts.student')
@section('main')
<div class="p-8">
    <h2 class="text-2xl font-bold mb-4" data-purpose="title">Les participants ont également acheté</h2>
    <div class="relative">
        <span id="u157-show-more--79" data-type="checkbox" data-checked="checked" style="display: none;"></span>
        <div class="max-h-96 overflow-y-auto border-t border-gray-300 mt-2">
            <div tabindex="0">
                <div class="space-y-4" data-purpose="show-more-content-container">
                    <div class="bg-white shadow-md p-4 rounded-lg">
                        <div class="flex space-x-4">
                            <div class="flex-shrink-0">
                                <img src="https://img-c.udemycdn.com/course/50x50/5286490_e25b_9.jpg" srcset="https://img-c.udemycdn.com/course/50x50/5286490_e25b_9.jpg 1x, https://img-c.udemycdn.com/course/100x100/5286490_e25b_9.jpg 2x" alt="" width="64" height="64" class="w-16 h-16 object-cover">
                            </div>
                            <div class="flex-grow">
                                <a href="/course/developpement-personnel-reussite-succes-leadership/" class="text-blue-500 font-semibold hover:underline">RENAISSANCE : le développement personnel pour réussir !</a>
                                <div class="flex items-center space-x-2 text-sm text-gray-500">
                                    <span class="flex items-center">
                                        <svg aria-hidden="true" focusable="false" class="h-4 w-4 text-gray-600 mr-1"><use xlink:href="#icon-people"></use></svg>
                                        <span>32</span>
                                    </span>
                                    <span>Mise à jour 04/2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 mt-2">
                            <span class="flex items-center space-x-1 text-yellow-500">
                                <svg aria-hidden="true" class="h-4 w-4"><use xlink:href="#icon-rating-star"></use></svg>
                                <span class="font-semibold">5,0</span>
                            </span>
                            <div class="flex-grow"></div>
                            <div class="text-right">
                                <span class="text-green-500 font-semibold">$19,99&nbsp;US</span>
                            </div>
                        </div>
                        {{-- <div class="mt-2">
                            <button type="button" aria-pressed="false" aria-label="Ajouter à la liste de souhaits" class="bg-gray-200 hover:bg-gray-300 px-3 py-1 rounded-full">
                                <svg aria-hidden="true" focusable="false" class="h-4 w-4 text-gray-600" style="fill: transparent; padding: 1px; stroke: currentcolor; stroke-width: 2;"><use xlink:href="#icon-wishlisted"></use></svg>
                            </button>
                        </div> --}}
                    </div>
                    <!-- Add more similar content blocks here -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


