<?php if(Session::has('success')): ?>
    <div class="bg-green-100 border-green-600 text-green-800 p-4 rounded-sm mb-3 shadow-sm">
        <?php echo e(Session::get('success')); ?>

    </div>
<?php endif; ?>

<?php if(Session::has('error')): ?>
    <div class="bg-red-100 border-red-600 text-red-800 p-4 rounded-sm mb-3 shadow-sm">
        <?php echo e(Session::get('error')); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\Blog-website\resources\views/components/flashdata.blade.php ENDPATH**/ ?>