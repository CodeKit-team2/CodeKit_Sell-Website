<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Signup') }}
        </h2>
    </x-slot>
    <x-auth.card>
        <x-auth.card-title>{{ __('Join us today!') }}</x-auth.card-title>
        <x-auth.signup-form></x-auth.signup-form>
    </x-auth.card>
</x-app-layout>