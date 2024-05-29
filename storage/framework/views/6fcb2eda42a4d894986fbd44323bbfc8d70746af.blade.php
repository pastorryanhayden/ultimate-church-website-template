<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['badge','badgeColor','color','tooltip','icon','size','labelSrOnly','class','outlined','labeledFrom','iconPosition','iconSize','labeledFrom','iconPosition','iconSize'])
<x-filament::button :badge="$badge" :badge-color="$badgeColor" :color="$color" :tooltip="$tooltip" :icon="$icon" :size="$size" :label-sr-only="$labelSrOnly" :class="$class" :outlined="$outlined" :labeledFrom="$labeledFrom" :iconPosition="$iconPosition" :iconSize="$iconSize" :labeled-from="$labeledFrom" :icon-position="$iconPosition" :icon-size="$iconSize" >

{{ $slot ?? "" }}
</x-filament::button>