<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::get('/ingresar', [\App\Http\Controllers\AuthController::class, 'loginForm'])
    ->name('auth.login.form');
    
Route::post('/ingresar', [\App\Http\Controllers\AuthController::class, 'loginProcess'])
    ->name('auth.login.process');

Route::post('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logout'])
    ->name('auth.logout');

Route::get('/mochilas/listado', [\App\Http\Controllers\BagsController::class, 'index'])
    ->name('bags.index');

Route::get('/mochilas/{id}', [\App\Http\Controllers\BagsController::class, 'show'])
    ->whereNumber('id')
    ->name('bags.show');

Route::get('/mochilas/nueva', [\App\Http\Controllers\BagsController::class, 'create'])
    ->name('bags.create');

Route::post('/mochilas/nueva', [\App\Http\Controllers\BagsController::class, 'store'])
    ->name('bags.store');
    
Route::get('/mochilas/{id}/editar', [\App\Http\Controllers\BagsController::class, 'edit'])
    ->name('bags.edit');

Route::post('/mochilas/{id}/editar', [\App\Http\Controllers\BagsController::class, 'update'])
    ->name('bags.update');

Route::get('/mochilas/{id}/eliminar', [\App\Http\Controllers\BagsController::class, 'delete'])
    ->name('bags.delete');

Route::post('/mochilas/{id}/eliminar', [\App\Http\Controllers\BagsController::class, 'destroy'])
    ->name('bags.destroy');

Route::get('/posts/listado', [\App\Http\Controllers\PostsController::class, 'index'])
    ->name('posts.index');

Route::get('/posts/{id}', [\App\Http\Controllers\PostsController::class, 'show'])
    ->whereNumber('id')
    ->name('posts.show');

Route::get('/posts/nuevo', [\App\Http\Controllers\PostsController::class, 'create'])
    ->name('posts.create');

Route::post('/posts/nueva', [\App\Http\Controllers\PostsController::class, 'store'])
    ->name('posts.store');
    
Route::get('/posts/{id}/editar', [\App\Http\Controllers\PostsController::class, 'edit'])
    ->name('posts.edit');

Route::post('/posts/{id}/editar', [\App\Http\Controllers\PostsController::class, 'update'])
    ->name('posts.update');

Route::get('/posts/{id}/eliminar', [\App\Http\Controllers\PostsController::class, 'delete'])
    ->name('posts.delete');

Route::post('/posts/{id}/eliminar', [\App\Http\Controllers\PostsController::class, 'destroy'])
    ->name('posts.destroy');