<div>
    @if($show)
<div class="w-full bg-white grid divide-y lg:grid-cols-{{count($settings->action_links)}} lg:divide-x divide-gray-300">
    @foreach($settings->action_links as $action)
    <a href="{{$action['link_url']}}" target="_blank" class="flex flex-col items-center justify-center py-8 hover:bg-gray-100">
        <span class="font-sans text-gray-400">{{$action['link_subtext']}}</span>
        <h3 class="text-xl uppercase text-gray-700">{{$action['link_text']}}</h3>
    </a>
    @endforeach
</div>
@endif
</div>

