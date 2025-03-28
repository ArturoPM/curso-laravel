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

    public function ejemploLayoud()
    {
        $nombre = "Arturo";
        $edad = 24;

        // Opcion 1
        // return view('layout.child', ['nombre' => $nombre, 'edad' => $edad]);

        // Opcion 2
        // return view('layout.child')
        // ->with('nombre', $nombre)
        // ->with('edad', $edad);

        // Opcion 3
        return view('layout.child', compact('nombre', 'edad'));
    }
}
