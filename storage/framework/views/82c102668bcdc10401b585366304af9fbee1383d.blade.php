    @component($layout->view, $layout->params)
        @slot($layout->slotOrSection)
            {!! $content !!}
        @endslot

        <?php
        // Manually forward slots defined in the Livewire template into the layout component...
        foreach ($layout->slots as $name => $slot) {
            $__env->slot($name, attributes: $slot->attributes->getAttributes());
            echo $slot->toHtml();
            $__env->endSlot();
        }
        ?>
    @endcomponent