<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        // return view('welcome');
        // return "Bienvenido a la pag Home";
        return view('home');
    }
}
