<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }
    public function create()
    {
        return view('posts.create');
    }
    public function show($post, $category = null) // Le paso null para que sea un parametro opcional, solo tiene valor cuando se lo agrego en la url
    {
        return view('posts.show', compact('post', 'category'));
    }
}
