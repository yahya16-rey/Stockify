<?php $__env->startSection('content'); ?>
<div class="p-6">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">📦 Laporan Stok</h1>
        <span class="text-sm text-gray-500">Periode: <?php echo e($start); ?> - <?php echo e($end); ?></span>
    </div>

    <div class="overflow-x-auto rounded-xl shadow">
        <table class="w-full text-sm text-left text-gray-100">
            <thead class="text-xs uppercase bg-gray-500 text-gray-100">
                <tr>
                    <th class="px-4 py-3">Nama Produk</th>
                    <th class="px-4 py-3">Kategori</th>
                    <th class="px-4 py-3 text-center">Stok Sekarang</th>
                    <th class="px-4 py-3 text-center">Total Masuk</th>
                    <th class="px-4 py-3 text-center">Total Keluar</th>
                </tr>
            </thead>
            <tbody class="bg-black divide-y">
                <?php $__empty_1 = true; $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="px-4 py-3"><?php echo e($product->name); ?></td>
                    <td class="px-4 py-3"><?php echo e($product->category->name ?? '-'); ?></td>
                    <td class="px-4 py-3 text-center"><?php echo e($product->stock); ?></td>
                    <td class="px-4 py-3 text-center text-green-600 font-semibold">
                        <?php echo e($product->total_incoming); ?>

                    </td>
                    <td class="px-4 py-3 text-center text-red-600 font-semibold">
                        <?php echo e($product->total_outgoing); ?>

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5" class="px-4 py-3 text-center text-gray-500">Tidak ada data stok untuk periode ini.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CS_yahya\manager-gudang\resources\views/manager/report/stock.blade.php ENDPATH**/ ?>