<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function bakery()
    {
        return view('bakery');
    }

    public function sobremesa()
    {
        return view('sobremesa');
    }

    // Nova rota "Sobre Nós"
    public function sobre()
    {
        return view('sobre');
    }
}