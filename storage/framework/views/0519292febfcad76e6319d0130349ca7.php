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

        <header class="text-center my-5">
            <h2>Blog</h2>
            <p>
                Consejos, novedades y contenido para acompañarte en cada viaje.
            </p>
        </header>

        <div class="row justify-content-center">

            <div class="col-lg-10">

                <article class="mb-5 pb-5 border-bottom">
                    <p class="mb-2">VIAJES · 7 OCTUBRE 2026</p>

                    <h3>Cómo elegir la mochila ideal para viajar</h3>

                    <p>
                        Capacidad, comodidad y organización: qué tener en cuenta
                        antes de elegir una mochila para tu próximo viaje.
                    </p>

                    <a href="#" class="btn btn-primary">
                        Leer más
                    </a>
                </article>

                <article class="mb-5 pb-5 border-bottom">
                    <p class="mb-2">URBANO · 5 OCTUBRE 2026</p>

                    <h3>Mochilas urbanas para el día a día</h3>

                    <p>
                        Qué características buscar en una mochila para moverte
                        por la ciudad con comodidad y llevar todo lo necesario.
                    </p>

                    <a href="#" class="btn btn-primary">
                        Leer más
                    </a>
                </article>

                <article class="mb-5 pb-5 border-bottom">
                    <p class="mb-2">VIAJES · 2 OCTUBRE 2026</p>

                    <h3>¿Cuántos litros necesito para viajar?</h3>

                    <p>
                        Una guía sencilla para entender qué capacidad elegir
                        según la duración y el tipo de viaje.
                    </p>

                    <a href="#" class="btn btn-primary">
                        Leer más
                    </a>
                </article>

                <article class="mb-5 pb-5">
                    <p class="mb-2">PEAKGEAR · 30 SEPTIEMBRE 2026</p>

                    <h3>Cómo cuidar tu mochila para que dure más</h3>

                    <p>
                        Algunos consejos simples para mantener tu mochila
                        en buenas condiciones y extender su vida útil.
                    </p>

                    <a href="#" class="btn btn-primary">
                        Leer más
                    </a>
                </article>

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
<?php endif; ?><?php /**PATH C:\Users\fsate\Documentos de FlorSB\Da Vinci\2026\Portales\proyecto\resources\views/about.blade.php ENDPATH**/ ?>