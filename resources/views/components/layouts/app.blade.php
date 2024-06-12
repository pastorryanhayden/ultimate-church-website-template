<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
         <style>
            [x-cloak] {
                display: none !important;
            }
         </style>
         @filamentStyles
         @vite('resources/css/app.css')
         {{-- @livewireStyles --}}
  
    </head>
    <body class="bg-gray-100 w-full font-serif antialiased">
        <livewire:announcement />
        <livewire:navigation/>
        <div class="max-w-7xl mx-auto bg-white">
        {{ $slot }}
        
        </div>
        <livewire:footer />
         {{-- @livewireScripts --}}
         @filamentScripts
         @vite('resources/js/app.js')
    </body>
</html>
