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

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
                    {{ $header }}
                    <div class="flex justify-center relative">
                        <a href="{{route('shirt')}}">
                            <img width="60" class="mx-5" src="{{ URL::to('images/icons/shirt_shop.png') }}" alt="">
                        </a>
                        <a href="{{route('shoes')}}">
                            <img width="70" class="mx-5" src="{{ URL::to('images/icons/shoe_shop.png') }}" alt="">
                        </a>
                        <a href="{{route('jean')}}">
                            <img width="60" class="mx-5" src="{{ URL::to('images/icons/jeans_shop.png') }}" alt="">
                        </a>
                        <a href="{{route('handbag')}}">
                            <img width="60" class="mx-5" src="{{ URL::to('images/icons/handbag_shop.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
