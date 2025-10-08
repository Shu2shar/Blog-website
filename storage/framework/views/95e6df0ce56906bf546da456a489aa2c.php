
<?php if(session('success')): ?>
<div id="alert-success" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
  ✅ <span class="ml-3 text-sm font-medium"><?php echo e(session('success')); ?></span>
</div>
<?php endif; ?>


<?php if(session('error')): ?>
<div id="alert-error" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50" role="alert">
  ❌ <span class="ml-3 text-sm font-medium"><?php echo e(session('error')); ?></span>
</div>
<?php endif; ?>


<?php if(session('info')): ?>
<div id="alert-info" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50" role="alert">
  ℹ️ <span class="ml-3 text-sm font-medium"><?php echo e(session('info')); ?></span>
</div>
<?php endif; ?>


<?php if(session('warning')): ?>
<div id="alert-warning" class="flex items-center p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-50" role="alert">
  ⚠️ <span class="ml-3 text-sm font-medium"><?php echo e(session('warning')); ?></span>
</div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\Blog-website\resources\views/components/flash-data.blade.php ENDPATH**/ ?>