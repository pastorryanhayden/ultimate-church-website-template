<div>
<?php if(isset($event)): ?>
    <div class="w-full bg-gray-500 p-12 flex flex-col justify-center items-center">
        <a href="/events/<?php echo e($event->slug); ?>"><h2 class="text-white font-serif text-3xl"><?php echo e($event->title); ?></h2></a>
        <p class="text-gray-200 font-sans text-lg mt-2"><?php echo e(date_format($event->start_date, 'F j')); ?><?php if($event->end_date): ?>- <?php echo e(date_format($event->end_date, 'F j')); ?><?php endif; ?></p>
        <?php if($event->photo): ?>
            <a href="/events/<?php echo e($event->slug); ?>"><img class="w-96 mt-4 border border-gray-800" src="<?php echo e(Storage::disk('vultr')->url($event->photo)); ?>" alt="<?php echo e($event->title); ?>"></a>
        <?php else: ?>
            <a href="/events/<?php echo e($event->slug); ?>"><img src="/images/placeholder.jpg" alt="placeholder image"></a>
        <?php endif; ?>
        <a href="/events/<?php echo e($event->slug); ?>"  class="mt-4  text-gray-100 underline">Learn More</a>
    </div>
<?php endif; ?> 
</div>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/livewire/home/events.blade.php ENDPATH**/ ?>