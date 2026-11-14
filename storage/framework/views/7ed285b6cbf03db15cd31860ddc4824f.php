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
     <?php $__env->slot('title', null, []); ?> Eliminar mochila <?php $__env->endSlot(); ?>
        <div class="container">
        <div class="row justify-content-center">

            <h1 class="text-center my-5">¿Estás seguro que deseás eliminar esta mochila?</h1>

            <div class="card-detalle col-12 col-md-10 p-4 rounded-4 shadow-sm">
                <div class="row align-items-center g-4">
                    
                    <div class="col-md-6 text-center">
                        <img src="<?php echo e(url('img/' . $bag->photo)); ?>" 
                                alt="Foto de <?php echo e($bag->name); ?>" 
                                class="img-fluid rounded-4 detalle-img">
                    </div>

                    <div class="col-md-6">

                        <h2 class="card-title fw-semibold mb-3"><?php echo e($bag->name); ?></h2>
                        <p class="mb-3"><?php echo e($bag->description); ?></p>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Categoría:</strong> <?php echo e($bag->category); ?></li>
                            <li><strong>Litraje:</strong> <?php echo e($bag->liters); ?> lts.</li>
                            <li><strong>Género:</strong> <?php echo e($bag->gender); ?></li>
                        </ul>

                        <div class="card-footer mt-auto">
                            <p class="price text-bold fs-4 mb-2">$<?php echo e($bag->price); ?></p>

                            <form action="<?php echo e(route('bags.destroy', ['id' => $bag->bag_id])); ?>" method="post">
                                <button type="submit" class="btn btn-danger">Eliminar mochila</button>
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
<?php endif; ?><?php /**PATH C:\Users\fsate\Documentos de FlorSB\Da Vinci\2026\Portales\proyecto\resources\views/bags/delete.blade.php ENDPATH**/ ?>