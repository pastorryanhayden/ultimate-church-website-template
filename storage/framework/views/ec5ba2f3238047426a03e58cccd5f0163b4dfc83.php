<?php if($announcement): ?>
<dialog id="anouncment"  class="announcment">
<div class="text">
<div class="icon">
<?php echo $__env->make('partials.icons.exclamation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<h2>Important Announcement</h2>
<p><?php echo e($announcement->announcement); ?></p>
</div>
<div class="action">
<button type="button" onclick="document.getElementById('anouncment').close()">Close</button>
</div>
</dialog>
<script>

 document.getElementById('anouncment').showModal();
   

</script>
<?php endif; ?><?php /**PATH /Users/ryanhayden/code/church/biblebaptistmattoon.org/resources/views/partials/_announcements.blade.php ENDPATH**/ ?>