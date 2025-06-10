<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto py-8 px-4">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-100 mb-2">Daftar Transaksi Stok</h2>
        <a href="<?php echo e(route('manager.stock.create')); ?>" class="mt-3 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            + Tambah Transaksi
        </a>
    </div>

    <div class="bg-black shadow-md rounded-lg overflow-x-auto">
        <table class="min-w-full text-sm text-left text-gray-100">
            <thead class="bg-gray-500 text-gray-100 text-sm font-semibold">
                <tr>
                    <th class="px-6 py-3">Tanggal</th>
                    <th class="px-6 py-3">Produk</th>
                    <th class="px-6 py-3">Tipe</th>
                    <th class="px-6 py-3">Jumlah</th>
                    <th class="px-6 py-3">Keterangan</th>
                    <th class="px-6 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="border-b hover:bg-gray-900">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <?php echo e(\Carbon\Carbon::parse($transaction->transaction_date)->format('d M Y')); ?>

                    </td>
                    <td class="px-6 py-4"><?php echo e($transaction->product->name); ?></td>
                    <td class="px-6 py-4">
                        <?php if($transaction->type === 'in'): ?>
                        <span class="text-green-600 font-semibold">Masuk</span>
                        <?php else: ?>
                        <span class="text-red-600 font-semibold">Keluar</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-6 py-4"><?php echo e($transaction->quantity); ?></td>
                    <td class="px-6 py-4"><?php echo e($transaction->note ?? '-'); ?></td>
                    <td class="px-6 py-4 text-right space-x-2">
                        <a href="<?php echo e(route('manager.stock.edit', $transaction->id)); ?>" class="text-blue-600 hover:underline">Edit</a>
                        <form action="<?php echo e(route('manager.stock.destroy', $transaction->id)); ?>" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus transaksi ini?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" class="px-6 py-4 text-center text-gray-500">Belum ada transaksi stok.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CS_yahya\manager-gudang\resources\views/manager/stock/index.blade.php ENDPATH**/ ?>