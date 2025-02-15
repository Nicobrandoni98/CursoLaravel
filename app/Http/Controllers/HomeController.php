<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Invoke se usa cuando mi controlador tiene un unico metodo
    public function __invoke()
    {
    return view('home');
    }
}  
