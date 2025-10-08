<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="bg-gradient-to-br from-[#f5f7fa] to-[#c3cfe2] dark:from-[#0f0f0f] dark:to-[#1a1a1a] min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-xl text-center">
        
        <h1
            class="text-5xl lg:text-6xl font-extrabold bg-gradient-to-r from-blue-600 via-purple-500 to-pink-500 text-transparent bg-clip-text mb-10 drop-shadow-lg">
            Blog ✨
        </h1>

        <?php echo e($slot); ?>

    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\Blog-website\resources\views/layouts/guest.blade.php ENDPATH**/ ?>