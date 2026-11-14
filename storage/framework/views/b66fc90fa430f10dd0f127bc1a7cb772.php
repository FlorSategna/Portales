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
     <?php $__env->slot('title', null, []); ?> Eliminar post <?php $__env->endSlot(); ?>
    <div class="container">
        <div class="row justify-content-center">

            <h1 class="text-center my-5">¿Estás seguro que deseás eliminar este post?</h1>

            <div class="card-detalle col-12 col-md-10 p-4 rounded-4 shadow-sm">
                <div class="row g-4">

                    <div class="col-md-12">
                        <h2 class="card-title fw-semibold mb-3"><?php echo e($post->title); ?></h2>
                        <p class="text-muted mb-2"><span class="badge rounded-pill tag-chip"><?php echo e($post->tag); ?></span> · <?php echo e($post->category); ?> · <?php echo e($post->format_date); ?></p>

                        <p class="mb-3"><?php echo e($post->content); ?></p>

                        <div class="card-footer mt-auto">
                            <form action="<?php echo e(route('posts.destroy', ['id' => $post->post_id])); ?>" method="post">
                                <button type="submit" class="btn btn-danger">Eliminar post</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $attributes = $__attributesOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__attributesOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $component = $__componentOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__componentOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?><?php /**PATH C:\Users\fsate\Documentos de FlorSB\Da Vinci\2026\Portales\proyecto\resources\views/posts/delete.blade.php ENDPATH**/ ?>