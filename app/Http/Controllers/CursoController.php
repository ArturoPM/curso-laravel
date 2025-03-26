<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function getName($nombre, $fecha)
    {
        return view('welcome', compact('nombre', 'fecha'));
    }

    public function sumar() {
        $numero1 = 5;
        $numero2 = 10;
        $suma = $this->sumarConParametros($numero1, $numero2);
        return $suma;
    }

    public function sumarConParametros($n1, $n2) {
        $suma = $n1 + $n2;
        return "La suma de $n1 + $n2 es: $suma";
    }
}
