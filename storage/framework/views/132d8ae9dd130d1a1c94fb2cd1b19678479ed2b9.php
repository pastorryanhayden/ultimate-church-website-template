<div>
<style>
    .attachment__caption {
        display: none;
    }
</style>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('about.header', ['sections' => $sections,'details' => $details]);

$__html = app('livewire')->mount($__name, $__params, 'THnXED1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('about.section', ['section' => $section,'place' => $loop->iteration]);

$__html = app('livewire')->mount($__name, $__params, 'a3MsCaB', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?> 
        <?php if (! ($loop->last)): ?>
            <hr class="mb-24">
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/livewire/about/page.blade.php ENDPATH**/ ?>