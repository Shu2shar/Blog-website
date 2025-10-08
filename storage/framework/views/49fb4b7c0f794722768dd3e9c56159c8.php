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
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <?php echo e(__('Users')); ?>

            </h2>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create user')): ?>
                <a href="<?php echo e(route('user.create')); ?>" class="bg-slate-700 text-md rounded-md px-4 py-2 text-white">Create</a>
            <?php endif; ?>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="w-full bg-white shadow-md rounded-lg overflow-hidden ">
                <thead class="bg-gray-800 text-white ">
                    <tr>
                        <th class="px-6 py-4 text-left" width="60">ID</th>
                        <th class="px-6 py-4 text-left">Name</th>
                        <th class="px-6 py-4 text-left">Email</th>
                        <th class="px-6 py-4 text-left">Role</th>
                        <th class="px-6 py-4 text-left" width="180">Created</th>
                        <th class="px-6 py-4 text-left" width="180">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php if (isset($component)) { $__componentOriginalcff26fc34c3f6c37ef09be86276b72c9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcff26fc34c3f6c37ef09be86276b72c9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flashdata','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flashdata'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcff26fc34c3f6c37ef09be86276b72c9)): ?>
<?php $attributes = $__attributesOriginalcff26fc34c3f6c37ef09be86276b72c9; ?>
<?php unset($__attributesOriginalcff26fc34c3f6c37ef09be86276b72c9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcff26fc34c3f6c37ef09be86276b72c9)): ?>
<?php $component = $__componentOriginalcff26fc34c3f6c37ef09be86276b72c9; ?>
<?php unset($__componentOriginalcff26fc34c3f6c37ef09be86276b72c9); ?>
<?php endif; ?>
                    <?php $__empty_1 = true; $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-6 py-4"><?php echo e($loop->iteration); ?></td>
                            <td class="px-6 py-4 capitalize"><?php echo e($users->name); ?></td>
                            <td class="px-6 py-4 "><?php echo e($users->email); ?></td>
                            <td class="px-6 py-4 capitalize "><?php echo e($users->roles->pluck('name')->implode(',')); ?></td>
                            <td class="px-6 py-4 capitalize">
                                <?php echo e(\carbon\carbon::parse($users->created_at)->format('d M, Y')); ?></td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-3">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit user')): ?>
                                        <a href="<?php echo e(route('user.edit', $users->id)); ?>"
                                            class="bg-blue-500 hover:bg-blue-400 hover:text-black text-white px-4 py-2 rounded">Edit</a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete user')): ?>
                                        <button onclick="deletePremission(<?php echo e($users->id); ?>)"
                                            class="bg-red-500 hover:bg-red-400 hover:text-red-950 text-white px-4 py-2 rounded">Delete</button>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center">No permissions found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <div class="my-3">
                <?php echo e($user->links()); ?>

            </div>
        </div>
    </div>

     <?php $__env->slot('script', null, []); ?> 

        <script type="text/javascript">
            function deletePremission(id) {
                if (confirm("Are you sure you want to delete this permission?")) {
                    $.ajax({
                        url: "<?php echo e(url('user')); ?>/" + id,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                        },
                        success: function(response) {
                            if (response.status) {
                                window.location.href = "<?php echo e(route('user.index')); ?>";
                            } else {
                                alert("Failed to delete permission.");
                            }
                        },
                        error: function(xhr) {
                            alert("An error occurred while deleting the permission.");
                        }
                    });
                }
            }
        </script>
     <?php $__env->endSlot(); ?>
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
<?php /**PATH C:\laragon\www\Blog-website\resources\views/user/list.blade.php ENDPATH**/ ?>