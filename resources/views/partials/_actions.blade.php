@if(count($site_global->action_links) > 0)
<section class="actions">
    @foreach($site_global->action_links as $action)
    <div>
    <p>{{$action['link_subtext']}}</p>
        <a href="{{$action['link_url']}}">{{$action['link_text']}}</a>
    </div>
    @endforeach
</section>
@endif 