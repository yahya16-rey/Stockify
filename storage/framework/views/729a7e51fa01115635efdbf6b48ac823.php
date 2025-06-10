<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold text-white mb-6">Manajemen Supplier</h1>

    
    <div class="bg-slate-800 p-6 rounded-lg shadow mb-8">
        <form action="<?php echo e(route('manager.suppliers.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-white mb-1">Nama Supplier</label>
                    <input type="text" name="name" id="name" class="w-full bg-slate-700 text-white border border-slate-600 rounded p-2" required>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-white mb-1">Email</label>
                    <input type="email" name="email" id="email" class="w-full bg-slate-700 text-white border border-slate-600 rounded p-2">
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-white mb-1">Nomor Telepon</label>
                    <input type="text" name="phone" id="phone" class="w-full bg-slate-700 text-white border border-slate-600 rounded p-2">
                </div>

                <div>
                    <label for="address" class="block text-sm font-medium text-white mb-1">Alamat</label>
                    <textarea name="address" id="address" rows="2" class="w-full bg-slate-700 text-white border border-slate-600 rounded p-2"></textarea>
                </div>
            </div>
            <div class="mt-6">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                    Tambah Supplier
                </button>
            </div>
        </form>
    </div>

    
    <div class="bg-slate-800 p-4 rounded-lg shadow">
        <h2 class="text-xl font-semibold text-white mb-4">Daftar Supplier</h2>
        <table class="min-w-full table-auto text-white">
            <thead>
                <tr class="bg-slate-700 text-white">
                    <th class="px-4 py-2 text-left">#</th>
                    <th class="px-4 py-2 text-left">Nama</th>
                    <th class="px-4 py-2 text-left">Telepon</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="border-b border-slate-600">
                    <td class="px-4 py-2"><?php echo e($index + 1); ?></td>
                    <td class="px-4 py-2"><?php echo e($supplier->name); ?></td>
                    <td class="px-4 py-2"><?php echo e($supplier->phone ?? '-'); ?></td>
                    <td class="px-4 py-2"><?php echo e($supplier->email ?? '-'); ?></td>
                    <td class="px-4 py-2"><?php echo e($supplier->address ?? '-'); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5" class="text-center py-4 text-gray-300">Belum ada supplier.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CS_yahya\manager-gudang\resources\views/manager/supplier/index.blade.php ENDPATH**/ ?>