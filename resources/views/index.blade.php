<x-app-layout>
    <div class="h-full w-full flex md:flex-col grow">
        <!--Normal homepage -->
        <div class="hidden md:flex min-h-screen bg-cover bg-center" style="background-image: url(/images/profile-home-laptop.png)">
        </div>

        <!--Mobile homepage -->
        <div class="flex flex-col md:hidden justify-center items-center w-full bg-gray-600 text-white text-2xl">
            <div class="px-4">
                <p><span class="text-red-500">$person</span> = <span class="text-green-400">[</span></p>
                <p class="ml-4">'name' <span class="text-blue-400">=></span> 'Ed Stuckey',</p>
                <p class="ml-4">'type' <span class="text-blue-400">=></span> 'Software Developer',</p>
                <p class="ml-4">'location' <span class="text-blue-400">=></span> 'Plymouth'</p>
                <p><span class="text-green-400">];</span></p>
            </div>
            <div class="flex space-x-4 mb-10 fixed bottom-0">
               @include('layouts.social')
            </div>
        </div>
    </div>
</x-app-layout>
