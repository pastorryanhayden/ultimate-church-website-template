<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('CHURCH_NAME') }} - {{ env('CHURCH_CITY') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,400&family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
         @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="page font-serif">
    @include('partials._mobile-menu')
     @include('partials._announcements')
     <header>
        @include('partials._main-nav')
        @yield('header')
    </header>
    <main class="prose">
        @yield('content')
    </main>
          @include('partials._footer', ['show_map' => false])
    </body>
    </html>