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
    <body class="bg-white prose w-full font-serif antialiased">
        
        {{ $slot }}
        
         @filamentScripts
         @vite('resources/js/app.js')
         <script>
            window.onload = function() {
                window.print();
            };
        </script>
    </body>
</html>
