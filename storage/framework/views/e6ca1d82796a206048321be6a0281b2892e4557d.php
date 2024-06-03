<div class="w-full bg-white grid divide-y lg:grid-cols-3 lg:divide-x divide-gray-300">
    <?php $__currentLoopData = $settings->action_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e($action['link_url']); ?>" target="_blank" class="flex flex-col items-center justify-center py-8 hover:bg-gray-100">
        <span class="font-sans text-gray-400"><?php echo e($action['link_subtext']); ?></span>
        <h3 class="text-xl uppercase text-gray-700"><?php echo e($action['link_text']); ?></h3>
    </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/livewire/home/actions.blade.php ENDPATH**/ ?>