<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bible Baptist Church - Mattoon, IL</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,400&family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
         @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="home">
    @include('partials._mobile-menu')
    @include('partials._announcements')
        <header>
            <section class="top" style="background-image: linear-gradient(rgba(0,0,0, .5), rgba(0,0,0, .5));">
            <div class="overlay"></div>
            <video  autoplay muted loop poster="/storage/{{$site_global->header_image}}">
            <source src="/storage/{{$site_global->header_video}}" type="video/mp4">
            </video>
            @include('partials._main-nav')
            <h1>{{ $site_global->heading }}</h1>
        </section>
        </header>
      
          @include('partials._actions')
          @include('partials._event')
        @include('partials._ministries')  
       @include('partials._footer', ['show_map' => true])
    </body>
</html>
