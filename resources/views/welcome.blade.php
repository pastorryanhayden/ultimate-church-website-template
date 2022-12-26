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
        <header>
            <section class="top" style="background: linear-gradient(rgba(0,0,0, .5), rgba(0,0,0, .5)), url('/homephoto.jpg');">
            <nav class="main-navigation">
                <a href="#" class="logo">Bible Baptist Church</a> 
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Ministries</a></li>
                    <li><a href="#">Sermons</a></li>
                </ul>
                <button class="hamburger">Menu</button>
            </nav>
            <h1>A church home for you and your family.</h1>
        </section>
        
        <section class="actions">
            <div>
                <a href="#">Learn More</a>
            </div>
            <div>
                <a href="#">Watch Live</a>
            </div>
            <div>
                <a href="#">Give Online</a>
            </div>
        </section>
        </header>
        <main>

        </main>
        <footer>

        </footer>
    </body>
</html>
