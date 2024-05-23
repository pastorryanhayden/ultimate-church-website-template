<footer class="bg-gray-800 p-8 text-white">
    <div class="my-8 text-center">
        <h2 class="text-white font-serif text-4xl uppercase tracking-wide">Experience {{ env('CHURCH_NAME')}}</h2>
        <p class="mt-4 text-white font-sans italic text-lg">Join us this week for church.</p>
    </div>
    <div class="grid w-full md:grid-cols-2 lg:grid-cols-4 gap-6 px-8">
        <article>
            <h3 class="text-2xl font-sans uppercase font-bold mb-2">Bible Baptist Church</h3>
            <div class="text-sm font-sans">
            {!! $settings->footer_about !!}
            </div>
        </article>
        <article>
            <h3 class="text-2xl font-sans uppercase font-bold mb-2">Schedule</h3>
            <div class="text-sm font-sans">
            {!! $settings->footer_schedule !!}
            </div>
        </article>
        <article>
            <h3 class="text-2xl font-sans uppercase font-bold mb-2">Contact Us</h3>
            <div class="text-sm font-sans">
            <p class="flex items-center mb-2">@include('partials.icons.place', ['classes' => 'h-4 inline mr-2']) {{$site_global->church_address}}</p>
            <p class="flex items-center mb-2">@include('partials.icons.phone', ['classes' => 'h-4 inline mr-2'])  {{$site_global->church_phone}}</p>
            <p class="flex items-center mb-2">@include('partials.icons.mail', ['classes' => 'h-4 inline mr-2']) {{$site_global->church_email}}</p>
            <p class="flex items-center mb-2">@include('partials.icons.link', ['classes' => 'h-4 inline mr-2']) {{$site_global->church_url}}</p>
            </div>
        </article>
        <article>
            <h3 class="text-2xl font-sans uppercase font-bold mb-2">Useful Links</h3>
            @foreach($settings->useful_links as $link)
            <p class="flex items-center mb-2">@include('partials.icons.chevright', ['classes' => 'h-4 inline mr-2']) <a href="{{$link['URL']}}">{{$link['text']}}</a></p>
            @endforeach
        </article>
    </div>
    <section class="p-8">
        <p class="text-center italic text-sm text-gray-400 font-sans">&copy; 2024 - Ryan Hayden</p>
    </section>
</footer>

