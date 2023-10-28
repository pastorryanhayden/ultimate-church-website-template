<?php
    use Filament\Support\Enums\Alignment;
    use Filament\Support\Enums\VerticalAlignment;

    $color = $getColor() ?? 'gray';
    $isInline = $isInline();
?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-notifications::components.notification','data' => ['notification' => $notification,'xTransition:enterStart' => 
        \Illuminate\Support\Arr::toCssClasses([
            'opacity-0',
            ($this instanceof \Filament\Notifications\Livewire\Notifications)
            ? match (static::$alignment) {
                Alignment::Start, Alignment::Left => '-translate-x-12',
                Alignment::End, Alignment::Right => 'translate-x-12',
                Alignment::Center => match (static::$verticalAlignment) {
                    VerticalAlignment::Start => '-translate-y-12',
                    VerticalAlignment::End => 'translate-y-12',
                    default => null,
                },
            }
            : null,
        ])
    ,'xTransition:leaveEnd' => 
        \Illuminate\Support\Arr::toCssClasses([
            'opacity-0',
            'scale-95' => ! $isInline,
        ])
    ,'class' => \Illuminate\Support\Arr::toCssClasses([
        'w-full transition duration-300',
        ...match ($isInline) {
            true => [],
            false => [
                'max-w-sm rounded-xl bg-white shadow-lg ring-1 dark:bg-gray-900',
                match ($color) {
                    'gray' => 'ring-gray-950/5 dark:ring-white/10',
                    default => 'ring-custom-600/20 dark:ring-custom-400/30',
                },
            ],
        },
    ]),'style' => \Illuminate\Support\Arr::toCssStyles([
        \Filament\Support\get_color_css_variables($color, shades: [400, 600]) => ! ($isInline || $color === 'gray'),
    ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-notifications::notification'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['notification' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($notification),'x-transition:enter-start' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(
        \Illuminate\Support\Arr::toCssClasses([
            'opacity-0',
            ($this instanceof \Filament\Notifications\Livewire\Notifications)
            ? match (static::$alignment) {
                Alignment::Start, Alignment::Left => '-translate-x-12',
                Alignment::End, Alignment::Right => 'translate-x-12',
                Alignment::Center => match (static::$verticalAlignment) {
                    VerticalAlignment::Start => '-translate-y-12',
                    VerticalAlignment::End => 'translate-y-12',
                    default => null,
                },
            }
            : null,
        ])
    ),'x-transition:leave-end' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(
        \Illuminate\Support\Arr::toCssClasses([
            'opacity-0',
            'scale-95' => ! $isInline,
        ])
    ),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
        'w-full transition duration-300',
        ...match ($isInline) {
            true => [],
            false => [
                'max-w-sm rounded-xl bg-white shadow-lg ring-1 dark:bg-gray-900',
                match ($color) {
                    'gray' => 'ring-gray-950/5 dark:ring-white/10',
                    default => 'ring-custom-600/20 dark:ring-custom-400/30',
                },
            ],
        },
    ])),'style' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssStyles([
        \Filament\Support\get_color_css_variables($color, shades: [400, 600]) => ! ($isInline || $color === 'gray'),
    ]))]); ?>
    <div
        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'flex w-full gap-3 p-4',
            ...match ($isInline) {
                true => [],
                false => [
                    'rounded-xl',
                    match ($color) {
                        'gray' => null,
                        default => 'bg-custom-50 dark:bg-custom-400/10',
                    },
                ],
            },
        ]) ?>"
        style="<?php echo \Illuminate\Support\Arr::toCssStyles([
            \Filament\Support\get_color_css_variables($color, shades: [50, 400]) => ! ($isInline || $color === 'gray'),
        ]) ?>"
    >
        <?php if($icon = $getIcon()): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-notifications::components.icon','data' => ['color' => $getIconColor(),'icon' => $icon,'size' => $getIconSize()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-notifications::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getIconColor()),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'size' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getIconSize())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>

        <div class="mt-0.5 grid flex-1">
            <?php if(filled($title = $getTitle())): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-notifications::components.title','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-notifications::title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php echo e(str($title)->sanitizeHtml()->toHtmlString()); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if(filled($date = $getDate())): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-notifications::components.date','data' => ['class' => 'mt-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-notifications::date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-1']); ?>
                    <?php echo e($date); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if(filled($body = $getBody())): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-notifications::components.body','data' => ['class' => 'mt-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-notifications::body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-1']); ?>
                    <?php echo e(str($body)->sanitizeHtml()->toHtmlString()); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if($actions = $getActions()): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-notifications::components.actions','data' => ['actions' => $actions,'class' => 'mt-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-notifications::actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($actions),'class' => 'mt-3']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>

        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-notifications::components.close-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-notifications::close-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /Users/ryanhayden/code/church/biblebaptistmattoon.org/vendor/filament/notifications/src/../resources/views/notification.blade.php ENDPATH**/ ?>