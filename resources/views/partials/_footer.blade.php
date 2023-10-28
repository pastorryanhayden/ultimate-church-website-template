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
            <p>The best way to experience Bible Baptist is by visiting us for one of our weekly services. We want to extend a personal invitation to you and your family to join us this week for church!</p>
            </article>
            <article>
            <h3>Schedule</h3>
            <h4>Sunday Schedule</h4>
            <p>9:30 AM - Sunday School</p>
            <p>10:30 AM - Morning Worship</p>
            <p>6:00 PM - Evening Worship*</p>
            <p class="explanation">On the first Sunday of the month, there is no evening service.  Instead, a meal is provided after the morning service and an afternoon service is held at 1PM.</p>
             <h4>Midweek Schedule</h4>
             <p>Wednesday @ 7PM - Midweek Service</p>
             <p>Thursday @ 9AM - Seed Sowers</p>
             <p>Thursday @ 6:30PM - Youth Group/Awana</p>
            </article>
            <article>
            <h3>Contact Us</h3>
            <p>@include('partials.icons.place') 3401 Marion Ave. Mattoon, IL 61938</p>
            <p>@include('partials.icons.phone')  (217) 499-0822</p>
            <p>@include('partials.icons.mail')  office@biblebaptistmattoon.org</p>
            <p>@include('partials.icons.link')  https://biblebaptistmattoon.org</p>
            </article>
            <article>
            <h3>Useful Links</h3>
             <p>@include('partials.icons.chevright') <a href="https://tithe.ly/give?c=247580" target="blank">Give Online</a></p>
             <p>@include('partials.icons.chevright') <a href="https://www.youtube.com/@biblebaptistchurch7203/streams" target="blank">Watch Live</a></p>
             <p>@include('partials.icons.chevright') <a href="#">Church Facebook</a></p>
            
             <p>@include('partials.icons.chevright') <a href="/documents/constitution.pdf" target="blank">Church Constitution</a></p>
             <p>@include('partials.icons.chevright') <a href="/documents/ChurchCovenant.pdf" target="blank">Church Covenant</a></p>
            </article>
        </section>
        <section class="copywrite">
        </section>
        </footer>