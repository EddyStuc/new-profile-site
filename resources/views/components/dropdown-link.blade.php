@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block px-4 py-2 w-full text-sm leading-5 text-indigo-500 underline transition duration-150 ease-in-out'
            : 'block px-4 py-2 w-full text-sm leading-5 text-gray-700 transition duration-150 ease-in-out'
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
