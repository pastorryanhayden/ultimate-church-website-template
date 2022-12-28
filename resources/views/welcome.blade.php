<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,400&family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
         @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="home">
    @include('partials._mobile-menu')
        <header>
            <section class="top" style="background-image: linear-gradient(rgba(0,0,0, .5), rgba(0,0,0, .5)), url('/homephoto.jpg');">
            @include('partials._main-nav')
            <h1>Find hope, purpose, and fellowship at BBC.</h1>
        </section>
        </header>
      
      
          @include('partials._actions')
        
       @include('partials._footer', ['show_map' => true])
    </body>
</html>
