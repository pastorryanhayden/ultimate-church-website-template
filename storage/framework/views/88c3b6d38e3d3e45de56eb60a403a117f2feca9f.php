<div>
  <div class="block">
    <div class="border-b border-gray-200">
      <nav class="-mb-px flex justify-center space-x-8" aria-label="Tabs">
        <a href="/sermons" class="<?php echo e($selected == "Sermons" ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:border-gray-200 hover:text-gray-700'); ?> flex whitespace-nowrap border-b-2 px-1 py-4 text-sm font-medium">
          Sermons
          <?php if(isset($sermonscount)): ?>
          <span class="<?php echo e($selected == "Sermons" ? 'bg-indigo-100 text-indigo-600' : 'bg-gray-100 text-gray-900'); ?> ml-3 hidden rounded-full  px-2.5 py-0.5 text-xs font-medium md:inline-block"><?php echo e($sermonscount); ?></span>
          <?php endif; ?>
        </a>
        <a href="/series" class="<?php echo e($selected == "Series" ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:border-gray-200 hover:text-gray-700'); ?> flex whitespace-nowrap border-b-2 px-1 py-4 text-sm font-medium">
          Series
           <?php if(isset($seriescount)): ?>
          <span class="<?php echo e($selected == "Series" ? 'bg-indigo-100 text-indigo-600' : 'bg-gray-100 text-gray-900'); ?> ml-3 hidden rounded-full  px-2.5 py-0.5 text-xs font-medium md:inline-block"><?php echo e($seriescount); ?></span>
          <?php endif; ?>
        </a>
        <a href="/speakers" class="<?php echo e($selected == "Speakers" ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:border-gray-200 hover:text-gray-700'); ?> flex whitespace-nowrap border-b-2 px-1 py-4 text-sm font-medium" aria-current="page">
          Speakers
           <?php if(isset($speakercount)): ?>
          <span class="<?php echo e($selected == "Speakers" ? 'bg-indigo-100 text-indigo-600' : 'bg-gray-100 text-gray-900'); ?> ml-3 hidden rounded-full  px-2.5 py-0.5 text-xs font-medium md:inline-block"><?php echo e($speakercount); ?></span>
          <?php endif; ?>
        </a>
      </nav>
    </div>
  </div>
</div>

<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/components/sermontabs.blade.php ENDPATH**/ ?>