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
     <?php $__env->slot('title', null, []); ?> Nuestras mochilas <?php $__env->endSlot(); ?>
    <section class="container">
        <div class="titulo-mochilas">
            <h1 class="text-center mb-0">Nuestras mochilas</h1>
            <?php if(session()->has('user_id')): ?>
            <div class="mb-3">
                <a href="<?php echo e(route('bags.create')); ?>" class="btn btn-primary"> Crear una nueva mochila </a>
            </div>
            <?php endif; ?>
        </div>

        <div class="d-flex justify-content-end mb-4">
            <form method="GET" action="<?php echo e(route('bags.index')); ?>" class="d-flex">
                <select name="gender" id="gender" class="form-select me-2" >
                    <option value="Todas" <?php echo e($selectedGender == 'Todas' ? 'selected' : ''); ?>>Todas</option>
                    <option value="Unisex" <?php echo e($selectedGender == 'Unisex' ? 'selected' : ''); ?>>Unisex</option>
                    <option value="Mujer" <?php echo e($selectedGender == 'Mujer' ? 'selected' : ''); ?>>Mujer</option>
                    <option value="Hombre" <?php echo e($selectedGender == 'Hombre' ? 'selected' : ''); ?>>Hombre</option>
                </select>
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </form>
        </div>

                <div class="row"> 
                        <?php $__currentLoopData = $bags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-center">
                                <div class="card mx-auto h-100 d-flex flex-column">
                                    <img src="<?php echo e(url('img/' . $bag->photo)); ?>" class="card-img-top" alt="Foto de <?php echo e($bag->name); ?>">
                                        <div class="card-body d-flex flex-column flex-grow-1">
                                            <h2 class="card-title"><?php echo e($bag->name); ?></h2>
                                            <p class="card-text"><strong>Categoría:</strong> <?php echo e($bag->category); ?></p>
                                            <p class="card-text"><?php echo e($bag->description); ?></p>
                                            <p class="card-text"><strong>Litraje:</strong> <?php echo e($bag->liters); ?> lts.</p>
                                            <p class="card-text"><strong>Género:</strong> <?php echo e($bag->gender); ?></p>
                                        </div>
                                        <div class="card-footer mt-auto text-center">
                                            <p class="price text-bold fs-4 mb-3">$<?php echo e($bag->price); ?></p>
                                            <div class="d-flex flex-column align-items-center">
                                                <a href="<?php echo e(route('bags.show', ['id' => $bag->bag_id])); ?>" class="btn btn-primary mb-2 w-100">Ver mochila</a>
                                                <?php if(session()->has('user_id')): ?>
                                                    <a href="<?php echo e(route('bags.edit', ['id' => $bag->bag_id])); ?>" class="btn btn-secondary mb-2 w-100">Editar</a>
                                                    <a href="<?php echo e(route('bags.delete', ['id' => $bag->bag_id])); ?>" class="btn btn-danger w-100">Eliminar</a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                </div>
                            </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php endif; ?><?php /**PATH C:\Users\fsate\Documentos de FlorSB\Da Vinci\2026\Portales\proyecto\resources\views/bags/index.blade.php ENDPATH**/ ?>