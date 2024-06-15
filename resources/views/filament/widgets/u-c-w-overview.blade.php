<x-filament-widgets::widget>
    <x-filament::section>
        <div class="flex items-center justify-center w-full mt-12">
        @include('partials.logo', ['class' => 'h-20 w-20 text-primary-600']) 
        <p class="ml-2 text-5xl uppercase tracking-tighter">Ultimate Church Websites</p>
        </div>
        <div class="flex mt-24 mb-12 flex-col lg:flex-row w-full justify-center">
            <div>
                <h2 class="text-xl font-bold">Useful Links</h2>
            <ul class="list-disc pl-6">
                <li><a href="#" class="text-primary-800 underline">Documentation</a></li>
                <li><a href="#" class="text-primary-800 underline">Website Best Practices</a></li>
                <li><a href="#" class="text-primary-800 underline">Contact Support</a></li>
            </ul>
            </div>
            <iframe class="ml-16" width="560" height="315" src="https://www.youtube.com/embed/RFP510VdeLM?si=PVjVmRe_mpqcaNLO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
