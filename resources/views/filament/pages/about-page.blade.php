<x-filament-panels::page>
    <div class="overflow-hidden rounded-lg bg-white shadow">
        <div class="px-4 py-5 sm:p-6 prose">
            <p>The about page has four major sections:</p>
            <ul>
                <li>A section to cover what your services are like.</li>
                <li>A section to cover who your leaders are.</li>
                <li>A section to cover what your church is like.</li>
                <li>A section for everything else.</li>
            </ul>
            <p>Each section is represented by the tabs below and you can change the titles and make the page your own.</p>
        </div>
      </div>
    <x-filament-panels::form wire:submit="save">
        {{ $this->form }}
        <x-filament-panels::form.actions 
            :actions="$this->getFormActions()"
        /> 
    </x-filament-panels::form>
</x-filament-panels::page>
