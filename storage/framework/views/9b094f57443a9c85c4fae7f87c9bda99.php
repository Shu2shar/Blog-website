<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <?php echo e(__('Categories')); ?>

            </h2>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check("create categories")): ?>
                <a href="<?php echo e(route('categories.create')); ?>"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create
                    Post</a>
            <?php endif; ?>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="my-3 mx-[10%]">
            <?php echo e($categories->links()); ?>

        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <?php if (isset($component)) { $__componentOriginal2323fe5a71ea8c2076c619d10e884d00 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2323fe5a71ea8c2076c619d10e884d00 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flash-data','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flash-data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2323fe5a71ea8c2076c619d10e884d00)): ?>
<?php $attributes = $__attributesOriginal2323fe5a71ea8c2076c619d10e884d00; ?>
<?php unset($__attributesOriginal2323fe5a71ea8c2076c619d10e884d00); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2323fe5a71ea8c2076c619d10e884d00)): ?>
<?php $component = $__componentOriginal2323fe5a71ea8c2076c619d10e884d00; ?>
<?php unset($__componentOriginal2323fe5a71ea8c2076c619d10e884d00); ?>
<?php endif; ?>
                    <h2 class="text-xl font-bold mb-4">All Blog Posts</h2>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bg-white p-4 rounded shadow mb-3 flex justify-between items-center">
                            <div><?php echo e($category->name); ?></div>
                            <div class="flex gap-3">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update categories')): ?>
                                    <a href="<?php echo e(route('categories.edit', $category)); ?>" class="text-blue-600">Edit</a>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete categories')): ?>
                                    <form method="POST" action="<?php echo e(route('categories.destroy', $category)); ?>"
                                        onsubmit="return confirm('Delete this category?')">
                                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                        <button class="text-red-600">Delete</button>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="my-3">
                <?php echo e($categories->links()); ?>

            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\Blog-website\resources\views/categories/index.blade.php ENDPATH**/ ?>