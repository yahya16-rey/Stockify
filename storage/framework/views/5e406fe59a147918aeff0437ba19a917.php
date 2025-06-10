<!-- resources/views/layouts/manager.blade.php -->
<!DOCTYPE html>
<html lang="en" class="dark"> <!-- Sudah benar -->

<head>
    <meta charset="UTF-8">
    <title>Stockify Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body class="bg-slate-900 text-white"> 
    
    <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <div class="ml-64 min-h-screen p-6">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>

</html>
<?php /**PATH D:\CS_yahya\manager-gudang\resources\views/layouts/manager.blade.php ENDPATH**/ ?>