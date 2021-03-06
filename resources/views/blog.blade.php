<x-app-layout>
        <div class="w-3/4 text-3xl my-4 text-indigo-800 font-bold border-b-2 border-gray-400">
            <h1>Blog</h1>
        </div>
        @foreach ($posts as $post)
            <div class="bg-white w-3/4 mb-4 p-8 rounded-lg shadow-lg flex flex-col">
                <h1 class="text-2xl font-bold">{{ $post['title'] }}</h1> <br>
                <div class="leading-relaxed mb-2">
                    {!! $post['body'] !!}
                </div>
                <div class="font-semibold text-indigo-400">
                    {{ $post['published'] }}
                </div>
            </div>
        @endforeach
</x-app-layout>
