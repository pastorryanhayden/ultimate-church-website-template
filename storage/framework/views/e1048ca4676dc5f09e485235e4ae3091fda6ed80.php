<?php
    $id = $getId();
    $isContained = $getContainer()->getParentComponent()->isContained();

    $visibleTabClasses = \Illuminate\Support\Arr::toCssClasses([
        'p-6' => $isContained,
        'mt-6' => ! $isContained,
    ]);

    $invisibleTabClasses = 'invisible h-0 overflow-y-hidden p-0';
?>

<div
    x-bind:class="tab === <?php echo \Illuminate\Support\Js::from($id)->toHtml() ?> ? <?php echo \Illuminate\Support\Js::from($visibleTabClasses)->toHtml() ?> : <?php echo \Illuminate\Support\Js::from($invisibleTabClasses)->toHtml() ?>"
    x-on:expand-concealing-component.window="
        error = $el.querySelector('[data-validation-error]')

        if (! error) {
            return
        }

        tab = <?php echo \Illuminate\Support\Js::from($id)->toHtml() ?>

        if (document.body.querySelector('[data-validation-error]') !== error) {
            return
        }

        setTimeout(
            () =>
                $el.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start',
                    inline: 'start',
                }),
            200,
        )
    "
    <?php echo e($attributes
            ->merge([
                'aria-labelledby' => $id,
                'id' => $id,
                'role' => 'tabpanel',
                'tabindex' => '0',
                'wire:key' => "{$this->getId()}.{$getStatePath()}." . \Filament\Forms\Components\Tab::class . ".tabs.{$id}",
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)
            ->class(['fi-fo-tabs-tab outline-none'])); ?>

>
    <?php echo e($getChildComponentContainer()); ?>

</div>
<?php /**PATH /Users/ryanhayden/Herd/examplesite/vendor/filament/forms/src/../resources/views/components/tabs/tab.blade.php ENDPATH**/ ?>