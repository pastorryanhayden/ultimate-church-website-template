<nav class="main-navigation">
    <a href="/" class="logo">{{ env('CHURCH_NAME') }}</a> 
    @include('partials._menu')
    <button class="mobile-toggle" onclick="document.querySelector('.mobile-menu').style.display = 'flex'">Menu</button>
</nav>