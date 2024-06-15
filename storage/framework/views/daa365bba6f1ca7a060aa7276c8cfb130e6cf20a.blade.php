<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['badge','badgeColor','form','tag','xOn:click','wire:click','wire:target','href','target','type','color','keyBindings','tooltip','disabled','icon','iconSize','size','labelSrOnly','class','label'])
<x-filament::icon-button :badge="$badge" :badge-color="$badgeColor" :form="$form" :tag="$tag" :x-on:click="$xOnClick" :wire:click="$wireClick" :wire:target="$wireTarget" :href="$href" :target="$target" :type="$type" :color="$color" :key-bindings="$keyBindings" :tooltip="$tooltip" :disabled="$disabled" :icon="$icon" :icon-size="$iconSize" :size="$size" :label-sr-only="$labelSrOnly" :class="$class" :label="$label" >

{{ $slot ?? "" }}
</x-filament::icon-button>