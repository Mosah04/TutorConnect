@props(['name', 'label', 'type'=>'text', 'value' => null, 'placeholder' => null])

<div class="relative">
    <input type="{{ $type }}"
           id="{{ $name }}"
           name="{{ $name }}"
           value="{{ $value }}"
           placeholder="{{ $placeholder }}"
           {{ $attributes->merge(['class' => 'block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-white appearance-none dark:text-gray-600 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer']) }} />
    <label for="{{ $name }}"
           class="absolute text-sm text-gray-800 dark:text-gray-700 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white peer-focus:bg-white dark:peer-focus:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:bg-transparent peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">{{ $label }}</label>
</div>
