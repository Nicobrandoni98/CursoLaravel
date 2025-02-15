<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

// En el caso de '/' solo pongo el controller porque tengo un __invoke
Route::get('/', HomeController::class);
Route::get('/posts', [PostController::class, 'index']);
// si pongo el url /post/create debajo del otro post, me mostraria el msj del otro get, ya que coinciden el contenido esperado de la url
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}/{category?}', [PostController::class, 'show']);