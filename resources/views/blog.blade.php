<x-app-layout>
    <div class="flex flex-col min-h-screen bg-gray-100 w-full items-center justify-center">
        <div class="w-3/4 text-3xl my-4 text-indigo-800 font-bold border-b-2 border-gray-400">
            <h1>Blog</h1>
        </div>
        @foreach ($posts as $post)
            <div class="bg-white w-3/4 h-80 mb-4 p-8 rounded-lg shadow-lg flex flex-col">
                <h1 class="text-2xl font-bold">{{ $post['title'] }}</h1> <br>
                {!! $post['body'] !!}
            </div>
        @endforeach

    </div>
</x-app-layout>
