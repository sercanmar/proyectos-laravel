<?php

use App\Http\Controllers\PostController;

Route::get('/nuevoPrueba', [PostController::class, 'nuevoPrueba'])->name('posts.nuevoPrueba');
Route::get('/editarPrueba/{id}', [PostController::class, 'editarPrueba'])->name('posts.editarPrueba');

Route::resource('posts', PostController::class);
