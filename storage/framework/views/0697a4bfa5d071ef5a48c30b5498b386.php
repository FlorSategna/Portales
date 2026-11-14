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
     <?php $__env->slot('title', null, []); ?> <?php echo e($post->title); ?> <?php $__env->endSlot(); ?>
    <section class="container">
        <div class="titulo-post">
            <h1 class="text-center mb-4"><?php echo e($post->title); ?></h1>
            <p class="text-muted mb-2"><span class="badge rounded-pill tag-chip"><?php echo e($post->tag); ?></span> · <?php echo e($post->category); ?> · <?php echo e($post->format_date); ?></p>
        </div>

        <div class="contenido-post mt-4">
            <p><?php echo e($post->content); ?></p>
        </div>

        <div class="acciones mt-4 d-flex justify-content-end gap-2">
            <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-primary">Volver al blog</a>
            <?php if(session()->has('user_id')): ?>
                <a href="<?php echo e(route('posts.edit', ['id' => $post->post_id])); ?>" class="btn btn-secondary">Editar</a>
                <a href="<?php echo e(route('posts.delete', ['id' => $post->post_id])); ?>" class="btn btn-danger">Eliminar</a>
            <?php endif; ?>
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
<?php endif; ?><?php /**PATH C:\Users\fsate\Documentos de FlorSB\Da Vinci\2026\Portales\proyecto\resources\views/posts/show.blade.php ENDPATH**/ ?>