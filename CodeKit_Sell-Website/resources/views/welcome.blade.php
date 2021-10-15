<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
{{--         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Normalize -->
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style>
        </style>
    </head>
    <body class="font-sans antialiased w-full">
        @include('layouts.navigation')
        
        {{-- carousel --}}

        {{-- <div class="">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
          
          
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
          
                <div class="item active">
                  <img class="" src="{{ URL::to('/assets/img/main1.jpg') }}">
                </div>
          
                <div class="item">      
                  <img class=""   src="{{ URL::to('/assets/img/main2.jpg') }}">
                </div>
              
                <div class="item">
                  <img class="" src="{{ URL::to('/assets/img/main3.jpg') }}">
                </div>
                <div class="item">     
                    <img class="" src="{{ URL::to('/assets/img/main2.jpg') }}">
                </div>
                {{-- <a class="left carousel-control w-full" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  </a>
                  <a class="right carousel-control w-full" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  </a> --}}
            {{-- </div>
          </div>  --}}

          
        <div class="min-h-screen bg-gray-100">
            <!-- Page Content -->
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            {{-- <x-welcome.content>
        
                            </x-welcome.content> --}}
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <x-welcome.footer>
        
        </x-welcome.footer>
    </body>
</html>

