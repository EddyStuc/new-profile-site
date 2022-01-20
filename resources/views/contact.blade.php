<x-app-layout>
    <div class="flex flex-col min-h-screen bg-gray-100 w-full items-center justify-center">
        <div class="w-3/4 text-3xl my-4 text-indigo-800 font-bold border-b-2 border-gray-400">
            <h1>Contact Me</h1>
        </div>
        <div class="bg-white w-3/5 h-3/5 p-4 rounded-lg shadow-lg overflow-y-scroll">

            <x-form.layout action="{{ route('contact.create') }}">
                <x-form.input name="name"/>
                <x-form.input name="subject"/>
                <x-form.input name="email" type="email"/>
                <x-form.textarea name="message" placeholder="Enter your message.."/>

                <x-button >Send Message</x-button>
            </x-form.layout>

        </div>
    </div>
</x-app-layout>
