<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Signin') }}
        </h2>
    </x-slot>
    <x-auth.card>
        <x-auth.card-title>{{ __('FashionKit') }}</x-auth.card-title>
        <x-auth.signin-form></x-auth.signin-form>
        <p class="text-center w-full mb-6 font-semibold">Or you can sign up <a class="text-indigo-600 underline" href="{{ route('signup') }}">here</a>.</p>
    </x-auth.card>
</x-app-layout>