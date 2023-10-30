<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['id','label','labelSrOnly','helperText','hint','hintActions','hintColor','hintIcon','statePath'])
<x-filament-forms::field-wrapper :id="$id" :label="$label" :label-sr-only="$labelSrOnly" :helper-text="$helperText" :hint="$hint" :hint-actions="$hintActions" :hint-color="$hintColor" :hint-icon="$hintIcon" :state-path="$statePath" >

{{ $slot ?? "" }}
</x-filament-forms::field-wrapper>