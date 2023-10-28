<nav class="main-navigation">
    <a href="/" class="logo">Bible Baptist Church</a> 
    <?php echo $__env->make('partials._menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <button class="mobile-toggle" onclick="document.querySelector('.mobile-menu').style.display = 'flex'">Menu</button>
</nav><?php /**PATH /Users/ryanhayden/code/church/biblebaptistmattoon.org/resources/views/partials/_main-nav.blade.php ENDPATH**/ ?>