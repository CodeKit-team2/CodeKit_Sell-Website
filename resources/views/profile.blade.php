<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div class="mb:mx-6 my-16 sm:mx-auto w-auto max-w-lg bg-white h-auto border border-indigo-600 rounded-2xl">
        <div class="w-full m-5 flex">
            <div class="w-24 h-24 border rounded-full"></div>
            <div class="p-5 text-xl">John Doe</div>
        </div>
    </div>
    <div class="mb:mx-6 sm:mx-auto w-auto max-w-lg bg-white h-auto border border-indigo-600 rounded-2xl">
        <x-profile.info-card>
            <x-slot name="title">
                Display name
            </x-slot>
            John Doe
        </x-profile.info-card>
        <x-profile.info-card>
            <x-slot name="title">
                Birhtday
            </x-slot>
            6/9/1996
        </x-profile.info-card>
        <x-profile.info-card>
            <x-slot name="title">
                Gender
            </x-slot>
            Unidentified
        </x-profile.info-card>
    </div>
</x-app-layout>