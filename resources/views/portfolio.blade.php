<x-app-layout>
    <div class="flex flex-col min-h-screen bg-gray-100 w-full items-center justify-center">
        <div class="w-3/4 text-3xl mb-4 text-indigo-800 font-bold border-b-2 border-gray-400">
            <h1>Portfolio - A sample of work</h1>
        </div>

        <!-- Project 1 -->
        <div class="bg-white w-3/4 h-80 rounded-lg shadow-lg flex items-center p-4 mb-4"
            x-data="{ 'showBuilding': false, image: 'noticeboard-code' }"
            @keydown.escape="showBuilding = false"
        >
            <img src="/images/building-management.png" class="h-60 shadow-md mr-8" alt="building-management">
            <div class="h-full leading-loose">
                <button type="button"
                        class="font-semibold text-xl text-gray-600 border-b-2 mb-4 hover:text-indigo-700"
                        @click="showBuilding = true"
                >
                Building Management Website
                </button>
                <p>My first main project using laravel. I have created a website for building management companies that
                    manage blocks of appartments.
                </p>
                <p class="text-indigo-300">
                    - PHP/Laravel, AlpineJS, Tailwind
                </p>
                <div class="flex mt-2">
                    <a href="https://github.com/EddyStuc/building-management" target="_blank">
                        <x-icon name="github" fill="black" />
                    </a>
                </div>
            </div>

            <!-- Modal project 1-->
            <div class="absolute inset-0 rounded z-30 m-auto h-5/6 w-4/6 overflow-y-scroll bg-black bg-opacity-50"
                x-show="showBuilding"
                x-cloak
            >
                <div class="bg-gray-300 shadow-lg rounded px-8 py-4 mx-auto"
                    @click.away="showBuilding = false">
                    <button type="button"
                            class="text-xl mb-2"
                            @click="showBuilding = false">
                            &#9587;
                    </button>
                    <img src="/images/noticeboard-code.png" class="rounded" alt="code screenshot" x-show="image === 'noticeboard-code'">
                    <img src="/images/noticeboardModel-code.png" class="rounded" alt="code screenshot" x-show="image === 'noticeboardModel'">
                    <img src="/images/routes.png" class="rounded" alt="code screenshot" x-show="image === 'routes'">

                    <x-model-pic-button imageName="noticeboard-code">1</x-model-pic-button>
                    <x-model-pic-button imageName="noticeboardModel">2</x-model-pic-button>
                    <x-model-pic-button imageName="routes">3</x-model-pic-button>
                </div>
            </div>
        </div>

        <!-- Project 2-->
        <div class="bg-white w-3/4 h-80 rounded-lg shadow-lg flex items-center p-4"
            x-data="{ 'showTodo': false, image: 'todoApp' }"
            @keydown.escape="showTodo = false"
        >
            <img src="/images/todoApp.png" class="h-60 shadow-md mr-8" alt="todoApp">
        <div class="h-full leading-loose">
            <button type="button"
                    class="font-semibold text-xl text-gray-600 border-b-2 mb-4 hover:text-indigo-700"
                    @click="showTodo = true"
            >
            Todo App AlpineJS
            </button>
            <p>Some practice with alpineJS creating a simple todo app where users can add tasks, cross them off and choose to clear
                all completed tasks.
            </p>
            <p class="text-indigo-300">
                - PHP, AlpineJS, Tailwind
            </p>
            <div class="flex mt-2">
                <a href="https://github.com/EddyStuc/todo-alpine" target="_blank">
                    <x-icon name="github" fill="black" />
                </a>
            </div>
        </div>

        <!-- Modal project 2-->
        <div class="absolute inset-0 rounded z-30 m-auto h-5/6 w-4/6 overflow-y-scroll bg-black bg-opacity-50"
            x-show="showTodo"
            x-cloak
        >
            <div class="bg-gray-300 shadow-lg rounded px-8 py-4 mx-auto"
                @click.away="showTodo = false">
                <button type="button"
                        class="text-xl mb-2"
                        @click="showTodo = false">
                        &#9587;
                </button>
                <img src="/images/todoApp.png" class="rounded" alt="code screenshot" x-show="image === 'todoApp'">
                <img src="/images/todoPHP.png" class="rounded" alt="code screenshot" x-show="image === 'todoPHP'">
                <img src="/images/todoJS.png" class="rounded" alt="code screenshot" x-show="image === 'todoJS'">

                <x-model-pic-button imageName="todoApp">1</x-model-pic-button>
                <x-model-pic-button imageName="todoPHP">2</x-model-pic-button>
                <x-model-pic-button imageName="todoJS">3</x-model-pic-button>
            </div>
        </div>

        </div>
    </div>
</x-app-layout>
