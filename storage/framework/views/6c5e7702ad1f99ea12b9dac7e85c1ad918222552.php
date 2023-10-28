<?php if(count($site_global->action_links) > 0): ?>
<section class="actions">
    <?php $__currentLoopData = $site_global->action_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
    <p><?php echo e($action['link_subtext']); ?></p>
        <a href="<?php echo e($action['link_url']); ?>"><?php echo e($action['link_text']); ?></a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php endif; ?> <?php /**PATH /Users/ryanhayden/code/church-web/biblebaptistmattoon/resources/views/partials/_actions.blade.php ENDPATH**/ ?>