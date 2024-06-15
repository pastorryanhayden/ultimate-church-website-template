<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('CHURCH_NAME') }} - {{ env('CHURCH_CITY') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,400&family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
         {{-- @livewireStyles --}}
         @filamentStyles
         @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100 w-full font-serif antialiased">

        <livewire:announcement />
        <livewire:navigation :transparent="true" />
        <div class="max-w-7xl mx-auto bg-white">
        <livewire:home.hero />
        <livewire:home.actions />
        <livewire:home.events />
        <livewire:home.ministries />
        <livewire:home.blog />
        <livewire:home.featured-series />
        <livewire:home.devotions />
        <livewire:home.map />
        <livewire:footer />
        </div>
         
        {{-- @livewireScripts --}}
        @filamentScripts
        @vite('resources/js/app.js')
</html>
