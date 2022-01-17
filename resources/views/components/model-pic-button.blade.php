@props(['imageName'])

<button type="button"
    class="text-xl mx-px my-2 bg-indigo-500 text-white px-2 rounded hover:bg-indigo-800 "
    @click.prevent="image = '{{ $imageName }}'">
    {{ $slot }}
</button>
