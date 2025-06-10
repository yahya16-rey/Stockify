 

<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Produk</h1>

    <a href="<?php echo e(route('manager.products.create')); ?>" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Produk</a>

    <div class="overflow-x-auto">
        <table class="table-auto w-full bg-black shadow rounded-lg">
            <thead class="bg-gray-500">
                <tr>
                    <th class="px-4 py-2 text-left">#</th>
                    <th class="px-4 py-2 text-left">Nama Produk</th>
                    <th class="px-4 py-2 text-left">Kategori</th>
                    <th class="px-4 py-2 text-left">Harga</th>
                    <th class="px-4 py-2 text-left">Stok</th>
                    <th class="px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="border-t">
                    <td class="px-4 py-2"><?php echo e($index + 1); ?></td>
                    <td class="px-4 py-2"><?php echo e($product->name); ?></td>
                    <td class="px-4 py-2"><?php echo e($product->category->name ?? '-'); ?></td>
                    <td class="px-4 py-2">Rp<?php echo e(number_format($product->price, 0, ',', '.')); ?></td>
                    <td class="px-4 py-2"><?php echo e($product->stock); ?></td>
                    <td class="px-4 py-2">
                        <a href="<?php echo e(route('manager.products.show', $product->id)); ?>" class="text-blue-500 hover:underline">Lihat</a>
                        |
                        <a href="<?php echo e(route('manager.products.edit', $product->id)); ?>" class="text-yellow-500 hover:underline">Edit</a>
                        |
                        <form action="<?php echo e(route('manager.products.destroy', $product->id)); ?>" method="POST" class="inline" onsubmit="return confirm('Yakin hapus produk ini?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" class="text-center py-4 text-gray-500">Belum ada produk.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CS_yahya\manager-gudang\resources\views/manager/product/index.blade.php ENDPATH**/ ?>