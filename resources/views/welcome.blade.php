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
    <aside class="mobile-menu">
    <button class="close" onclick="document.querySelector('.mobile-menu').style.display = 'none'">
   @include('partials.icons.close')

    </button>
     @include('partials._menu')
    </aside>
        <header>
            <section class="top" style="background-image: linear-gradient(rgba(0,0,0, .5), rgba(0,0,0, .5)), url('/homephoto.jpg');">
            <nav class="main-navigation">
                <a href="#" class="logo">Bible Baptist Church</a> 
                @include('partials._menu')
                <button class="mobile-toggle" onclick="document.querySelector('.mobile-menu').style.display = 'flex'">Menu</button>
            </nav>
            <h1>Find hope, purpose, and fellowship at BBC.</h1>
        </section>
        
        <section class="actions">
            <div>
            <p>New to BBC?</p>
                <a href="#">Learn More</a>
            </div>
            <div>
            <p>Can't Make It?</p>
                <a href="https://www.youtube.com/@biblebaptistchurch7203/streams" target="blank">Watch Live</a>
            </div>
            <div>
            <p>Quick Link</p>
                <a href="https://tithe.ly/give?c=247580" target="blank">Give Online</a>
            </div>
        </section>
        </header>
        <main>

        </main>
       @include('partials._footer')
    </body>
</html>
