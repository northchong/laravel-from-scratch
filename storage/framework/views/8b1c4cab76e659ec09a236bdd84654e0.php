<?php if(session()->has('success')): ?>
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
        class="fixed bottom-3 right-3 bg-blue-500 text-white py-2 px-4 rounded-xl text-xl">

        <p><?php echo e(session('success')); ?></p>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\tonut\kta23e\laravel-from-scratch\resources\views/components/flash.blade.php ENDPATH**/ ?>