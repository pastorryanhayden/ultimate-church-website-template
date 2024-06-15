    <?php $__env->startComponent($layout->view, $layout->params); ?>
        <?php $__env->slot($layout->slotOrSection); ?>
            <?php echo $content; ?>

        <?php $__env->endSlot(); ?>

        <?php
        // Manually forward slots defined in the Livewire template into the layout component...
        foreach ($layout->slots as $name => $slot) {
            $__env->slot($name, attributes: $slot->attributes->getAttributes());
            echo $slot->toHtml();
            $__env->endSlot();
        }
        ?>
    <?php echo $__env->renderComponent(); ?><?php /**PATH /Users/ryanhayden/Herd/examplesite/storage/framework/views/82c102668bcdc10401b585366304af9fbee1383d.blade.php ENDPATH**/ ?>