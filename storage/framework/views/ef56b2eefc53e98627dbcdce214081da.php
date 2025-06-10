<?php $__env->startSection('title', 'Manajemen Kategori'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Manajemen Kategori</h1>

    <?php if(session('success')): ?>
    <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>

    <a href="<?php echo e(route('manager.categories.create')); ?>" class="bg-blue-500 hover:bg-blue-600 text-black px-4 py-2 rounded mb-4 inline-block">
        + Tambah Kategori
    </a>

    <div class="overflow-x-auto bg-black rounded shadow">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-500 text-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium">#</th>
                    <th class="px-6 py-3 text-left text-sm font-medium">Nama Kategori</th>
                    <th class="px-6 py-3 text-left text-sm font-medium">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-sm">
                <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="px-6 py-4"><?php echo e($index + 1); ?></td>
                    <td class="px-6 py-4"><?php echo e($category->name); ?></td>
                    <td class="px-6 py-4 space-x-2">
                        <a href="<?php echo e(route('manager.categories.edit', $category->id)); ?>" class="text-blue-600">Edit</a>
                        <form action="<?php echo e(route('manager.categories.destroy', $category->id)); ?>" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="3" class="px-6 py-4 text-center text-gray-500">Belum ada kategori.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CS_yahya\manager-gudang\resources\views/manager/category/index.blade.php ENDPATH**/ ?>