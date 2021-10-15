<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Normalize -->
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation') 
            <x-auth.card>
                <x-auth.card-title>{{ __('FashionKit') }}</x-auth.card-title>
                <x-auth.signin-form></x-auth.signin-form>
                <p class="text-center w-full mb-6 font-semibold">Or you can sign up <a class="text-indigo-600 underline" href="{{ route('signup') }}">here</a>.</p>
            </x-auth.card>
            
        </div>
    </body>
</html>
