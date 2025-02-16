<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <?php if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))): ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php endif; ?>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 text-center">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Welcome to Laravel CRUD</h1>
        <p class="text-gray-600 mb-6">Click the button below to go to the Contacts CRUD page.</p>

        <a href="<?php echo e(route('contacts.index')); ?>"
            class="px-6 py-3 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transition">
            Go to Contacts CRUD
        </a>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\my-laravel-app\resources\views/welcome.blade.php ENDPATH**/ ?>