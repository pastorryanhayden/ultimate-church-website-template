<footer class="bg-gray-700">
    <div class="max-w-7xl mx-auto p-8 text-white">
    <div class="my-8 text-center">
        <h2 class="text-white font-serif text-4xl uppercase tracking-wide">Experience <?php echo e(env('CHURCH_NAME')); ?></h2>
        <p class="mt-4 text-white font-sans italic text-lg">Join us this week for church.</p>
    </div>
    <div class="grid w-full md:grid-cols-2 lg:grid-cols-4 gap-6 px-8">
        <article>
            <h3 class="text-2xl font-sans uppercase font-bold mb-2">Bible Baptist Church</h3>
            <div class="text-sm font-sans">
            <?php echo $settings->footer_about; ?>

            </div>
        </article>
        <article>
            <h3 class="text-2xl font-sans uppercase font-bold mb-2">Schedule</h3>
            <div class="text-sm font-sans">
            <?php echo $settings->footer_schedule; ?>

            </div>
        </article>
        <article>
            <h3 class="text-2xl font-sans uppercase font-bold mb-2">Contact Us</h3>
            <div class="text-sm font-sans">
            <p class="flex items-center mb-2"><?php echo $__env->make('partials.icons.place', ['classes' => 'h-4 inline mr-2'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php echo e($settings->church_address); ?></p>
            <p class="flex items-center mb-2"><?php echo $__env->make('partials.icons.phone', ['classes' => 'h-4 inline mr-2'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  <?php echo e($settings->church_phone); ?></p>
            <p class="flex items-center mb-2"><?php echo $__env->make('partials.icons.mail', ['classes' => 'h-4 inline mr-2'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php echo e($settings->church_email); ?></p>
            <p class="flex items-center mb-2"><?php echo $__env->make('partials.icons.link', ['classes' => 'h-4 inline mr-2'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php echo e($settings->church_url); ?></p>
            </div>
        </article>
        <article>
            <h3 class="text-2xl font-sans uppercase font-bold mb-2">Useful Links</h3>
            <?php $__currentLoopData = $settings->useful_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="flex items-center mb-2"><?php echo $__env->make('partials.icons.chevright', ['classes' => 'h-4 inline mr-2'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <a href="<?php echo e($link['URL']); ?>"><?php echo e($link['text']); ?></a></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </article>
    </div>
    <section class="p-8">
        <p class="text-center italic text-sm text-gray-400 font-sans">&copy; 2024 - <a href="https://ultimatechurchwebsites./com">Ultimate Church Websites</a></p>
    </section>
    </div>
</footer>

<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/livewire/footer.blade.php ENDPATH**/ ?>