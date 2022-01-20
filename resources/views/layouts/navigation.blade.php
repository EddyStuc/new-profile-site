<div class="hidden md:flex flex-col shrink-0 min-h-screen bg-cover bg-top w-full md:w-64" style="background-image: url(/images/keyboard.jpeg)">
    <div class="hidden md:flex flex-col text-center md:text-left items-center md:items-start md:space-x-4">
        <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="text-5xl leading-normal">
            {{ __('Ed Stuckey') }}
        </x-nav-link>
        <h1 class="text-white text-2xl mt-2">Hello and Welcome</h1>
        <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
            {{ __('About Me') }}
        </x-nav-link>
        <x-nav-link :href="route('portfolio')" :active="request()->routeIs('portfolio')">
            {{ __('Portfolio') }}
        </x-nav-link>
        <x-nav-link :href="route('blog')" :active="request()->routeIs('blog')">
            {{ __('Blog') }}
        </x-nav-link>
        <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
            {{ __('Contact') }}
        </x-nav-link>
        <div class="flex mt-8 space-x-4">
            <a href="https://www.linkedin.com/in/ed-stuckey-674195219/" target="_blank">
                <x-icon name="linkedin" />
            </a>
            <a href="https://github.com/EddyStuc" target="_blank">
                <x-icon name="github" fill="white" />
            </a>
            <a href="https://www.instagram.com/ejstuckey/?h1=en" target="_blank">
                <x-icon name="instagram" />
            </a>
        </div>
    </div>
</div>

 <!--Mobile Home page nav menu-->
 <div class="md:hidden flex justify-between content-center items-center sm:ml-6 w-full p-4 fixed bg-indigo-400 rounded">
     <a href="{{ route('home') }}" class="text-white font-bold text-2xl">Ed Stuckey</a>
    <div class="flex flex-col items-end ">
        <x-dropdown align="right">
            <x-slot name="trigger">
                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                    <x-icon name="hamburger"/>
                </button>
            </x-slot>
            <x-slot name="content">
                <x-dropdown-link :href="route('home')" :active="request()->routeIs('home')">Ed Stuckey</x-dropdown-link>
                <x-dropdown-link :href="route('about')" :active="request()->routeIs('about')">About Me</x-dropdown-link>
                <x-dropdown-link :href="route('portfolio')" :active="request()->routeIs('portfolio')">Portfolio</x-dropdown-link>
                <x-dropdown-link :href="route('blog')" :active="request()->routeIs('blog')">Blog</x-dropdown-link>
                <x-dropdown-link :href="route('contact')" :active="request()->routeIs('contact')">Contact</x-dropdown-link>
            </x-slot>
        </x-dropdown>
    </div>
</div>
