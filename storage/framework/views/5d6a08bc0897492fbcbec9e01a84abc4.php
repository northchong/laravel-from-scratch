<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['post']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<article
                <?php echo e($attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'])); ?>>
                <div class="py-6 px-5">
                    <div>
                        <img src="/images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl">
                    </div>

                    <div class="mt-8 flex flex-col justify-between">
                        <header>
                            <div class="space-x-2">
                                <?php if (isset($component)) { $__componentOriginal63d366aae0c3c678a5fb08eef338605d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal63d366aae0c3c678a5fb08eef338605d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-button','data' => ['category' => $post->category]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['category' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post->category)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal63d366aae0c3c678a5fb08eef338605d)): ?>
<?php $attributes = $__attributesOriginal63d366aae0c3c678a5fb08eef338605d; ?>
<?php unset($__attributesOriginal63d366aae0c3c678a5fb08eef338605d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal63d366aae0c3c678a5fb08eef338605d)): ?>
<?php $component = $__componentOriginal63d366aae0c3c678a5fb08eef338605d; ?>
<?php unset($__componentOriginal63d366aae0c3c678a5fb08eef338605d); ?>
<?php endif; ?>
                            </div>

                            <div class="mt-4">
                                <h1 class="text-3xl">
                                    <a href="/posts/<?php echo e($post->slug); ?>">
                                        <?php echo e($post->title); ?>

                                    </a>
                                </h1>

                                <span class="mt-2 block text-gray-400 text-xs">
                                    Published <time><?php echo e($post->created_at->diffForHumans()); ?></time>
                                </span>
                            </div>
                        </header>

                        <div class="text-sm mt-4 space-y-4">
                                <?php echo $post->excerpt; ?>

                        </div>

                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                <div class="ml-3">
                                    <h5 class="font-bold">
                                        <a href="/?author=<?php echo e($post->author->username); ?>"><?php echo e($post->author->name); ?></a>
                                    </h5>
                                </div>
                            </div>

                            <div>
                                <a href="/posts/<?php echo e($post->slug); ?>"
                                   class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                >Read More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>
<?php /**PATH C:\Users\tonut\kta23e\laravel-from-scratch\resources\views/components/post-card.blade.php ENDPATH**/ ?>