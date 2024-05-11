<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['field'])
<x-filament-forms::field-wrapper :field="$field" >
<x-slot name="labelSuffix" >{{ $labelSuffix }}</x-slot>
{{ $slot ?? "" }}
</x-filament-forms::field-wrapper>