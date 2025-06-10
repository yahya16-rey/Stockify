<?php $__env->startSection('content'); ?>
<div class="max-w-3xl mx-auto bg-white dark:bg-slate-800 shadow-md rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Edit Transaksi Stok</h2>

    <form action="<?php echo e(route('manager.stock.update', $transaction->id)); ?>" method="POST" class="space-y-4">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <!-- Tanggal Transaksi -->
        <div>
            <label for="transaction_date" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Tanggal Transaksi</label>
            <input type="date" name="transaction_date" id="transaction_date" value="<?php echo e(\Carbon\Carbon::parse($transaction->transaction_date)->format('Y-m-d')); ?>" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm dark:bg-slate-700 dark:text-white" required>
        </div>

        <!-- Produk -->
        <div>
            <label for="product_id" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Produk</label>
            <select name="product_id" id="product_id" class="mt-1 block w-full rounded-md dark:bg-slate-700 dark:text-white" required>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($product->id); ?>" <?php echo e($transaction->product_id == $product->id ? 'selected' : ''); ?>>
                    <?php echo e($product->name); ?>

                </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Supplier -->
        <div>
            <label for="supplier_id" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Supplier</label>
            <select name="supplier_id" id="supplier_id" class="mt-1 block w-full rounded-md dark:bg-slate-700 dark:text-white" required>
                <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($supplier->id); ?>" <?php echo e($transaction->supplier_id == $supplier->id ? 'selected' : ''); ?>>
                    <?php echo e($supplier->name); ?>

                </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Jumlah -->
        <div>
            <label for="quantity" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Jumlah</label>
            <input type="number" name="quantity" id="quantity" min="1" value="<?php echo e($transaction->quantity); ?>" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm dark:bg-slate-700 dark:text-white" required>
        </div>

        <!-- Tipe Transaksi -->
        <div>
            <label for="type" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Tipe Transaksi</label>
            <select name="type" id="type" class="mt-1 block w-full rounded-md dark:bg-slate-700 dark:text-white" required>
                <option value="in" <?php echo e($transaction->type == 'in' ? 'selected' : ''); ?>>Masuk</option>
                <option value="out" <?php echo e($transaction->type == 'out' ? 'selected' : ''); ?>>Keluar</option>
            </select>
        </div>

        <!-- Catatan -->
        <div>
            <label for="note" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Catatan</label>
            <textarea name="note" id="note" rows="3" class="mt-1 block w-full rounded-md dark:bg-slate-700 dark:text-white"><?php echo e($transaction->note); ?></textarea>
        </div>

        <!-- Tombol -->
        <div class="flex justify-end gap-2">
            <a href="<?php echo e(route('manager.stock.index')); ?>" class="px-4 py-2 bg-gray-300 dark:bg-gray-600 text-black dark:text-white rounded hover:bg-gray-400 dark:hover:bg-gray-700">Batal</a>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Perbarui</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CS_yahya\manager-gudang\resources\views/manager/stock/edit.blade.php ENDPATH**/ ?>