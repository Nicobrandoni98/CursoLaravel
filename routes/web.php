<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

// En el caso de '/' solo pongo el controller porque tengo un __invoke
Route::get('/', HomeController::class);
Route::get('/posts', [PostController::class, 'index']);

// si pongo el url /post/create debajo del otro post, me mostraria el msj del otro get, ya que coinciden el contenido esperado de la url
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);

Route::get('/posts/{post}/', [PostController::class, 'show']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);

Route::delete('/posts/{post}', [PostController::class, 'destroy']);


Route::get('prueba', function () {

    // Crear nuevo post 
    /* $post = new Post;

    $post->title = 'Titulo de PRUEBA 11';
    $post->content = 'CONTENIDO de prueba 11';
    $post->categoria = 'Categoria de prueba 11';
    $post->save(); 

    return $post; */

    
    // Buscar por ID

    /* $post = Post::find(1); 
    // return $post->published_at->format('d-m-Y');
    // dd($post->is_active); */
    
    /* 
    // Actualizar registro  

    // Busco por tabla (primer argumento nombre de la tabla, segundo arg el contenido que busco)
    $post = Post::where('title', 'Titulo de prueba 2')
                ->first(); // First me devuelve el primer 'registro que encuentra con esos argumentos'

    $post->categoria = 'Desarrollo Web'; // Cambio el contenido que tenia antes en categoria
    $post->save(); // Guardo el cambio.
    return $post; */

    /* 
    //Trae los registros con el id mayores o iguales a 3
    $posts = Post::where('id', '>=', '3')
                ->get();
    return $posts; 
    */

    // Listar Registros 

    // Trae todos los registros ordenados de manera descendente por id
    $posts = Post::orderBy('id',  'desc')
    ->select('id', 'title', 'category') // Selecciono que quiero que traiga
    ->take(2) // Trae los primeros 2
    ->get(); // IMPORTANTE paa que traiga los registros

    return $posts;


    // Para eliminar un registro

    /* $post = Post::find(1);
    $post->delete();

    return 'Eliminado'; */
});
