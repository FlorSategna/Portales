<?php if (isset($component)) { $__componentOriginal8a240419d16b3c1a159498153f053ed2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a240419d16b3c1a159498153f053ed2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> Blog <?php $__env->endSlot(); ?>
    <section class="container">
        <div class="titulo-posts">
            <h1 class="text-center mb-0">Blog</h1>
            <?php if(session()->has('user_id')): ?>
            <div class="mb-3">
                <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary"> Crear un nuevo post </a>
            </div>
            <?php endif; ?>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="mb-5 pb-5 border-bottom">
                        <h2 class="post-title"><?php echo e($post->title); ?></h2>
                        <p class="text-muted mb-2"><span class="badge rounded-pill tag-chip"><?php echo e($post->tag); ?></span> · <?php echo e($post->category); ?> · <?php echo e($post->format_date); ?></p>
                        <p><?php echo e(\Illuminate\Support\Str::limit($post->content, 200)); ?></p>
                        <div class="mt-2 d-flex gap-2">
                        <a href="<?php echo e(route('posts.show', ['id' => $post->post_id])); ?>" class="btn btn-primary">Leer más</a>
                            <?php if(session()->has('user_id')): ?>
                                    <a href="<?php echo e(route('posts.edit', ['id' => $post->post_id])); ?>" class="btn btn-secondary">Editar</a>
                                    <a href="<?php echo e(route('posts.delete', ['id' => $post->post_id])); ?>" class="btn btn-danger">Eliminar</a>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $attributes = $__attributesOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__attributesOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $component = $__componentOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__componentOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?>
<?php /**PATH C:\Users\fsate\Documentos de FlorSB\Da Vinci\2026\Portales\proyecto\resources\views/posts/index.blade.php ENDPATH**/ ?>