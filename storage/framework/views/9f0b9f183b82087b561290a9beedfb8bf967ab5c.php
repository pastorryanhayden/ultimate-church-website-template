 <footer>
 <?php if($show_map): ?>
        <iframe src="<?php echo e($site_global->map_url); ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<?php endif; ?> 
        <hgroup>
        <h2>Experience Bible Baptist</h2>
        <h4>Join us this week for church</h4>
        </hgroup>
        <section class="grid">
            <article>
            <h3>Bible Baptist</h3>
            <?php echo $site_global->footer_about; ?>

            </article>
            <article>
            <h3>Schedule</h3>
            <div class="schedule">
            <?php echo $site_global->footer_schedule; ?>

            </div>
            </article>
            <article>
            <h3>Contact Us</h3>
            <p><?php echo $__env->make('partials.icons.place', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php echo e($site_global->church_address); ?></p>
            <p><?php echo $__env->make('partials.icons.phone', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  <?php echo e($site_global->church_phone); ?></p>
            <p><?php echo $__env->make('partials.icons.mail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php echo e($site_global->church_email); ?></p>
            <p><?php echo $__env->make('partials.icons.link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php echo e($site_global->church_url); ?></p>
            </article>
            <article>
            <h3>Useful Links</h3>
            <?php $__currentLoopData = $site_global->useful_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <p><?php echo $__env->make('partials.icons.chevright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <a href="<?php echo e($link['URL']); ?>" target="blank"><?php echo e($link['text']); ?></a></p>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
        </section>
        <section class="copywrite">
        </section>
        </footer><?php /**PATH /Users/ryanhayden/code/church/biblebaptistmattoon.org/resources/views/partials/_footer.blade.php ENDPATH**/ ?>