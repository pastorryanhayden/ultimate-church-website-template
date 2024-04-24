<nav class="main-navigation">
    <a href="/" class="logo"><?php echo e(env('CHURCH_NAME')); ?></a> 
    <?php echo $__env->make('partials._menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <button class="mobile-toggle" onclick="document.querySelector('.mobile-menu').style.display = 'flex'">Menu</button>
</nav><?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/partials/_main-nav.blade.php ENDPATH**/ ?>