<?php $__env->startSection('content'); ?>
<div class="p-6 bg-gradient-to-br from-gray-50 to-white dark:from-slate-900 dark:to-slate-800 min-h-screen transition-all">
    <h1 class="text-3xl font-extrabold text-gray-800 dark:text-white mb-6">📦 Dashboard Manajer Gudang</h1>

    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <div class="bg-blue-100 dark:bg-blue-900 p-5 rounded-2xl shadow-md hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
            <p class="text-sm text-gray-700 dark:text-gray-300">Total Produk</p>
            <p class="text-3xl font-bold text-blue-800 dark:text-blue-200"><?php echo e($totalProducts); ?></p>
        </div>
        <div class="bg-red-100 dark:bg-red-900 p-5 rounded-2xl shadow-md hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
            <p class="text-sm text-gray-700 dark:text-gray-300">Stok Menipis</p>
            <p class="text-3xl font-bold text-red-800 dark:text-red-200"><?php echo e($lowStockCount); ?></p>
        </div>
        <div class="bg-green-100 dark:bg-green-900 p-5 rounded-2xl shadow-md hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
            <p class="text-sm text-gray-700 dark:text-gray-300">Barang Masuk Hari Ini</p>
            <p class="text-3xl font-bold text-green-800 dark:text-green-200"><?php echo e($incomingToday); ?></p>
        </div>
        <div class="bg-indigo-100 dark:bg-indigo-900 p-5 rounded-2xl shadow-md hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
            <p class="text-sm text-gray-700 dark:text-gray-300">Barang Keluar Hari Ini</p>
            <p class="text-3xl font-bold text-indigo-800 dark:text-indigo-200"><?php echo e($outgoingToday); ?></p>
        </div>
    </div>

    
    <div class="bg-white dark:bg-gray-800 shadow-md rounded-xl p-6 mb-6">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">📉 Produk dengan Stok Menipis</h2>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200">
                        <th class="px-4 py-2 text-left">Nama Produk</th>
                        <th class="px-4 py-2 text-left">Kategori</th>
                        <th class="px-4 py-2 text-left">Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $lowStockProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="border-t border-gray-300 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                        <td class="px-4 py-2"><?php echo e($product->name); ?></td>
                        <td class="px-4 py-2"><?php echo e($product->category->name ?? '-'); ?></td>
                        <td class="px-4 py-2 font-bold text-red-600 dark:text-red-300"><?php echo e($product->stock); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="3" class="px-4 py-3 text-center text-gray-500 dark:text-gray-400">Semua stok aman</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-xl p-6">
            <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">📥 Barang Masuk Terbaru</h2>
            <ul class="space-y-2">
                <?php $__empty_1 = true; $__currentLoopData = $recentIncoming; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="border-b border-gray-200 dark:border-gray-600 pb-2">
                    <span class="font-medium"><?php echo e($trx->product->name ?? '-'); ?></span> — <?php echo e($trx->quantity); ?> pcs
                    <div class="text-sm text-gray-500 dark:text-gray-400">(<?php echo e($trx->created_at->format('d M Y H:i')); ?>)</div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <li class="text-gray-500 dark:text-gray-400">Tidak ada data</li>
                <?php endif; ?>
            </ul>
        </div>

        <div class="bg-white dark:bg-gray-800 shadow-md rounded-xl p-6">
            <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">📤 Barang Keluar Terbaru</h2>
            <ul class="space-y-2">
                <?php $__empty_1 = true; $__currentLoopData = $recentOutgoing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="border-b border-gray-200 dark:border-gray-600 pb-2">
                    <span class="font-medium"><?php echo e($trx->product->name ?? '-'); ?></span> — <?php echo e($trx->quantity); ?> pcs
                    <div class="text-sm text-gray-500 dark:text-gray-400">(<?php echo e($trx->created_at->format('d M Y H:i')); ?>)</div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <li class="text-gray-500 dark:text-gray-400">Tidak ada data</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CS_yahya\manager-gudang\resources\views/manager/dashboard.blade.php ENDPATH**/ ?>