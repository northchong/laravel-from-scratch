<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
            <?php if (isset($component)) { $__componentOriginalbdb2217b90ad8e0422614ea82dcd24ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbdb2217b90ad8e0422614ea82dcd24ff = $attributes; } ?>
<?php $component = App\View\Components\CategoryDropdown::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CategoryDropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbdb2217b90ad8e0422614ea82dcd24ff)): ?>
<?php $attributes = $__attributesOriginalbdb2217b90ad8e0422614ea82dcd24ff; ?>
<?php unset($__attributesOriginalbdb2217b90ad8e0422614ea82dcd24ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbdb2217b90ad8e0422614ea82dcd24ff)): ?>
<?php $component = $__componentOriginalbdb2217b90ad8e0422614ea82dcd24ff; ?>
<?php unset($__componentOriginalbdb2217b90ad8e0422614ea82dcd24ff); ?>
<?php endif; ?>
            

        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/? <?php echo e(request()->getQueryString()); ?>">
                <?php if(request('category')): ?>
                    <input type="hidden" name="category" value="<?php echo e(request('category')); ?>">
                <?php endif; ?>
                <input
                    type="text"
                    name="search"
                    placeholder="Find something"
                    class="bg-transparent placeholder-black font-semibold text-sm"
                    value="<?php echo e(request('search')); ?>">
            </form>
        </div>
    </div>
</header>
<?php /**PATH C:\Users\tonut\kta23e\laravel-from-scratch\resources\views/posts/_header.blade.php ENDPATH**/ ?>