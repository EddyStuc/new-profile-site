<div class="flex flex-col shrink-0 min-h-screen bg-cover bg-top w-64" style="background-image: url(/images/keyboard.jpeg)">
    <div class="flex flex-col space-x-4">
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
