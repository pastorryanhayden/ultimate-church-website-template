<div>
<style>
    .attachment__caption {
        display: none;
    }
</style>
    <livewire:about.header :sections="$sections" :details="$details" />
    @foreach($sections as $section)
    <livewire:about.section :section="$section" :place="$loop->iteration" /> 
        @unless($loop->last)
            <hr class="mb-24">
        @endunless
    @endforeach

</div>
