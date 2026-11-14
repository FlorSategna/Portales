<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?> - PEAKGEAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= url('css/styles.css');?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(url('img/logos/peakgear-favicon.png')); ?>">
</head>
<body>
    <nav class="navbar navbar-expand-xl">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                    <img src="<?php echo e(url('img/logos/peakgear-imagotipo.svg')); ?>" alt="Logo de PEAKGEAR" class="logo">
                </a>
                <div class="d-flex order-lg-2 align-items-center icons-container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-4">
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>" href="<?= route('home');?>">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->is('posts*') ? 'active' : ''); ?>" href="<?= route('posts.index');?>">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->is('mochilas*') ? 'active' : ''); ?>" href="<?= route('bags.index');?>">Nuestras mochilas</a>
                        </li>
                        <?php if(session()->has('user_id')): ?>
                            <li class="nav-item">
                                <form action="<?php echo e(route('auth.logout')); ?>" method="post">
                                    <button type="submit" class="nav-link">Cerrar sesión</button>
                                </form>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(request()->is('ingresar') ? 'active' : ''); ?>" href="<?php echo e(route('auth.login.form')); ?>">Iniciar sesión</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
        </div>
    </nav>

    <main>
        <div class="container py-3">
        <?php if(session()->has('feedback.message')): ?>
            <div class="alert alert-<?php echo e(session('feedback.type', 'success')); ?>"><?php echo e(session('feedback.message')); ?></div>
        <?php endif; ?>
        </div>
        <?php echo e($slot); ?>

    </main>
    
    <footer class="py-5 mt-5 bg-footer">
            <div class="container">
                <div class="row gy-4">
                <div class="col-md-8">
                    <div class="d-flex align-items-center mb-2">
                        <img src="<?php echo e(url('img/logos/peakgear-imagotipo.svg')); ?>" alt="Logo de PEAKGEAR" class="logo-footer">
                    </div>
                    <p>Diseñado y desarrollado por Flor Sategna.</p>
                    <p>© 2026 PeakGear. Todos los derechos reservados.</p>
                </div>

                <div class="col-md-2">
                    <h2 class="fw-medium footer-heading">Links</h2>
                    <ul class="list-unstyled">
                    <li><a href="<?= route('home');?>" class="nav-link text-decoration-none">Inicio</a></li>
                    <li><a href="<?= route('posts.index');?>" class="nav-link text-decoration-none">Blog</a></li>
                    <li><a href="<?= route('bags.index');?>" class="nav-link text-decoration-none">Nuestras mochilas</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html><?php /**PATH C:\Users\fsate\Documentos de FlorSB\Da Vinci\2026\Portales\proyecto\resources\views/components/layouts/main.blade.php ENDPATH**/ ?>