<x-app-layout>
        <div class="w-3/4 text-3xl my-4 text-indigo-800 font-bold border-b-2 border-gray-400">
            <h1>Contact Me</h1>
        </div>
        <div class="bg-white flex flex-col w-4/5 p-4 rounded-lg shadow-lg">

            {{-- <x-form.layout action="{{ route('contact.create') }}"> --}}
            <form netlify>
                @csrf
                <x-form.input name="name"/>
                <x-form.input name="subject"/>
                <x-form.input name="email" type="email"/>
                <x-form.textarea name="message" placeholder="Enter your message.."/>

                <x-button >Send Message</x-button>
            </form>
            {{-- </x-form.layout> --}}

        </div>
</x-app-layout>
