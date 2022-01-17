<x-app-layout>
    <div class="flex flex-col min-h-screen bg-gray-100 w-full items-center justify-center">
        <div class="w-3/4 text-3xl mb-4 text-indigo-800 font-bold border-b-2 border-gray-400">
            <h1>About Me</h1>
        </div>
        <div class="bg-white w-3/4 h-96 rounded-lg shadow-lg">
            <div class="mx-12 mt-6">
                <h2 class="font-semibold text-2xl">I'm Ed Stuckey</h2>
            </div>
            <div class="flex p-8 leading-loose items-center">
                <img src="/images/profile-pic.png" class="h-52 rounded-2xl mx-4" alt="author">
                <p>I'm 31 years old and based in Plymouth, UK. For the past 12 years I've
                    been a gas and heating engineer but have decided to make the change in my
                    career to become a self-taught software developer.<br/>
                    I began my journey learning through Freecodecamp and then worked through the Harvard CS50x
                    course mixing in little side projects along the way.<br/>
                    Moving forward I have been studying PHP using mainly laravel with the help of laracasts and other online sources.<br/>
                    I love problem solving and am passionate about the idea of being able to
                    design code and build programs in a clean and efficient manner in regards
                    to any clients requirements.
                </p>
            </div>
        </div>
        <div class="flex mt-8">
            <x-fact-container>
                <x-icon name="dollar"/>
                <h4 class="font-bold text-xl my-2">Investor</h4>
                <h5>I love reading/learning about the stock markets</h5>
            </x-fact-container>

            <x-fact-container>
                <x-icon name="dumbbell"/>
                <h4 class="font-bold text-xl my-2">Passion for fitness</h4>
            </x-fact-container>

            <x-fact-container>
                <x-icon name="snowboard"/>
                <h4 class="font-bold text-xl my-2">100km+</h4>
                <h5>Finding amazing pistes to snowboard</h5>
            </x-fact-container>

            <x-fact-container>
                <x-icon name="toilet"/>
                <h4 class="font-bold text-xl my-2">100+</h4>
                <h5>Number of toilets fixed</h5>
            </x-fact-container>
        </div>
    </div>
</x-app-layout>
