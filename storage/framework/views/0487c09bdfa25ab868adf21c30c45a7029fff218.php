    <aside class="mobile-menu">
    <button class="close" onclick="document.querySelector('.mobile-menu').style.display = 'none'">
   <?php echo $__env->make('partials.icons.close', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </button>
     <?php echo $__env->make('partials._menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </aside><?php /**PATH /home/forge/biblebaptistmattoon.org/resources/views/partials/_mobile-menu.blade.php ENDPATH**/ ?>