 <footer>
 @if($show_map)
        <iframe src="{{$site_global->map_url}}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endif 
        <hgroup>
        <h2>Experience Bible Baptist</h2>
        <h4>Join us this week for church</h4>
        </hgroup>
        <section class="grid">
            <article>
            <h3>Bible Baptist</h3>
            {!! $site_global->footer_about !!}
            </article>
            <article>
            <h3>Schedule</h3>
            <div class="schedule">
            {!! $site_global->footer_schedule !!}
            </div>
            </article>
            <article>
            <h3>Contact Us</h3>
            <p>@include('partials.icons.place') {{$site_global->church_address}}</p>
            <p>@include('partials.icons.phone')  {{$site_global->church_phone}}</p>
            <p>@include('partials.icons.mail') {{$site_global->church_email}}</p>
            <p>@include('partials.icons.link') {{$site_global->church_url}}</p>
            </article>
            <article>
            <h3>Useful Links</h3>
            @foreach($site_global->useful_links as $link)
             <p>@include('partials.icons.chevright') <a href="{{$link['URL']}}" target="blank">{{$link['text']}}</a></p>
             @endforeach
            </article>
        </section>
        <section class="copywrite">
        </section>
        </footer>