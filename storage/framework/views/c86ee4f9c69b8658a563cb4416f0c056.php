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
        <div class="text-center py-10 px-4 bg-gradient-to-r from-blue-100 via-pink-100 to-purple-100 dark:from-[#1e1e2e] dark:via-[#2a2a3d] dark:to-[#1f1f2e] shadow-md rounded-xl">
            <h2 class="text-4xl font-extrabold text-gray-800 dark:text-white">
                Blog Management
            </h2>
            <div class="w-20 h-1 mx-auto mt-2 bg-gradient-to-r from-purple-500 via-pink-500 to-indigo-500 rounded-full"></div>
            <p class="mt-3 text-sm text-gray-600 dark:text-gray-300">Manage, update, and view all blog posts ✍️</p>

            <div class="mt-5">
                <a href="<?php echo e(route('posts.create')); ?>"
                    class="bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-white px-6 py-2 rounded-full font-medium shadow-lg transition">
                    ➕ Create New Post
                </a>
            </div>
        </div>
     <?php $__env->endSlot(); ?>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            
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

            
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-premium')): ?>
                <div class="mb-8 bg-green-100 dark:bg-green-900 border-l-4 border-green-500 text-green-900 dark:text-green-100 p-4 rounded-md shadow">
                    🌟 You are a premium user with <strong><?php echo e(auth()->user()->points); ?></strong> points!
                </div>
            <?php endif; ?>

            
            <div class="mb-10 bg-white dark:bg-[#222235] p-6 rounded-2xl shadow-md border border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-3">📊 Monthly Stats</h3>
                <div class="grid grid-cols-2 gap-4 text-sm text-gray-700 dark:text-gray-300">
                    <div>🧑 New Users: <strong><?php echo e($monthlyStats['new_users'] ?? 0); ?></strong></div>
                    <div>📝 Posts Created: <strong><?php echo e($monthlyStats['posts_created'] ?? 0); ?></strong></div>
                </div>
            </div>

            
            <div class="grid md:grid-cols-2 gap-6">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div
                        class="relative bg-white dark:bg-[#1c1c2c] border border-transparent dark:border-[#3a3a4d] rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 hover:scale-[1.01] group">

                        
                        <?php if($post->image): ?>
                            <img src="<?php echo e(asset('storage/' . $post->image)); ?>" alt="Post Image"
                                class="w-full h-48 object-cover rounded-t-2xl border-b border-gray-200 dark:border-gray-600" />
                        <?php endif; ?>

                        <div class="p-5">
                            
                            <h3 class="text-xl font-bold text-indigo-700 dark:text-indigo-400 mb-1">
                                <?php echo e($post->title); ?>

                            </h3>

                            
                            <p class="text-xs text-gray-500 dark:text-gray-400 mb-2">
                                👤 <?php echo e($post->user->name); ?> | 📂 <?php echo e($post->category->name); ?>

                            </p>

                            
                            <div class="flex flex-wrap gap-2 mb-3">
                                <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span
                                        class="text-xs px-3 py-1 rounded-full bg-gradient-to-r from-purple-200 to-pink-200 dark:from-purple-700 dark:to-pink-700 text-gray-800 dark:text-white font-medium shadow-sm">
                                        #<?php echo e($tag->name); ?>

                                    </span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            
                            <p class="text-sm text-gray-700 dark:text-gray-200 mb-4">
                                <?php echo e($post->ShortBody); ?>

                            </p>

                            
                            <div class="flex flex-wrap gap-2">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $post)): ?>
                                    <a href="<?php echo e(route('posts.edit', $post)); ?>"
                                        class="bg-blue-600 hover:bg-blue-500 text-white px-5 py-2 rounded-full text-sm font-semibold transition shadow">
                                        ✏️ Edit
                                    </a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $post)): ?>
                                    <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST"
                                        onsubmit="return confirm('Delete this post?');">
                                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                        <button type="submit"
                                            class="bg-red-600 hover:bg-red-500 text-white px-5 py-2 rounded-full text-sm font-semibold transition shadow">
                                            ❌ Delete
                                        </button>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <div class="mt-12 text-center">
                <?php echo e($posts->links()); ?>

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
<?php /**PATH C:\laragon\www\Blog-website\resources\views/blogs/index.blade.php ENDPATH**/ ?>