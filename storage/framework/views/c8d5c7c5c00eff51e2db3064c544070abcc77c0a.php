<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'column',
    'isClickDisabled' => false,
    'record',
    'recordAction' => null,
    'recordKey' => null,
    'recordUrl' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'column',
    'isClickDisabled' => false,
    'record',
    'recordAction' => null,
    'recordKey' => null,
    'recordUrl' => null,
]); ?>
<?php foreach (array_filter(([
    'column',
    'isClickDisabled' => false,
    'record',
    'recordAction' => null,
    'recordKey' => null,
    'recordUrl' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    use Filament\Support\Enums\Alignment;

    $action = $column->getAction();
    $name = $column->getName();
    $shouldOpenUrlInNewTab = $column->shouldOpenUrlInNewTab();
    $tooltip = $column->getTooltip();
    $url = $column->getUrl();

    $columnClasses = \Illuminate\Support\Arr::toCssClasses([
        'flex w-full disabled:pointer-events-none',
        match ($column->getAlignment()) {
            Alignment::Center, 'center' => 'justify-center text-center',
            Alignment::End, 'end' => 'justify-end text-end',
            Alignment::Left, 'left' => 'justify-start text-left',
            Alignment::Right, 'right' => 'justify-end text-right',
            Alignment::Justify, 'justify' => 'justify-between text-justify',
            default => 'justify-start text-start',
        },
    ]);

    $slot = $column->viewData(['recordKey' => $recordKey]);
?>

<div
    <?php if($tooltip): ?>
        x-data="{}"
        x-tooltip="{
            content: <?php echo \Illuminate\Support\Js::from($tooltip)->toHtml() ?>,
            theme: $store.theme,
        }"
    <?php endif; ?>
    <?php echo e($attributes->class(['fi-ta-col-wrp'])); ?>

>
    <?php if(($url || ($recordUrl && $action === null)) && (! $isClickDisabled)): ?>
        <a
            href="<?php echo e($url ?: $recordUrl); ?>"
            <?php if($shouldOpenUrlInNewTab): ?> target="_blank" <?php endif; ?>
            class="<?php echo e($columnClasses); ?>"
        >
            <?php echo e($slot); ?>

        </a>
    <?php elseif(($action || $recordAction) && (! $isClickDisabled)): ?>
        <?php
            if ($action instanceof \Filament\Tables\Actions\Action) {
                $wireClickAction = "mountTableAction('{$action->getName()}', '{$recordKey}')";
            } elseif ($action) {
                $wireClickAction = "callTableColumnAction('{$name}', '{$recordKey}')";
            } else {
                if ($this->getTable()->getAction($recordAction)) {
                    $wireClickAction = "mountTableAction('{$recordAction}', '{$recordKey}')";
                } else {
                    $wireClickAction = "{$recordAction}('{$recordKey}')";
                }
            }
        ?>

        <button
            type="button"
            wire:click="<?php echo e($wireClickAction); ?>"
            wire:loading.attr="disabled"
            wire:target="<?php echo e($wireClickAction); ?>"
            class="<?php echo e($columnClasses); ?>"
        >
            <?php echo e($slot); ?>

        </button>
    <?php else: ?>
        <div class="<?php echo e($columnClasses); ?>">
            <?php echo e($slot); ?>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/forge/biblebaptistmattoon.org/vendor/filament/tables/src/../resources/views/components/columns/column.blade.php ENDPATH**/ ?>