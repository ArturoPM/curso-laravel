<?php

namespace App\Http\Controllers;

class TareaUnoController extends Controller
{
    public function sumarConParametros($n1, $n2) {
        $suma = $n1 + $n2;
        return "La suma de $n1 + $n2 es: $suma";
    }

    public function sumarSinParametros() {
        $numero1 = 50;
        $numero2 = 15;
        $suma = $this->sumarConParametros($numero1, $numero2);
        return $suma;
    }

    public function restarConParametros($n1, $n2) {
        $resta = $n1 - $n2;
        return "La resta de $n1 - $n2 es: $resta";
    }

    public function restarSinParametros() {
        $numero1 = 50;
        $numero2 = 15;
        $resta = $this->restarConParametros($numero1, $numero2);
        return $resta;
    }

    public function multiplicarConParametros($n1, $n2) {
        $multiplicacion = $n1 * $n2;
        return "La multiplicación de $n1 * $n2 es: $multiplicacion";
    }

    public function multiplicarSinParametros() {
        $numero1 = 50;
        $numero2 = 15;
        $multiplicacion = $this->multiplicarConParametros($numero1, $numero2);
        return $multiplicacion;
    }

    public function dividirConParametros($n1, $n2) {
        $division = $n1 / $n2;
        return "La división de $n1 / $n2 es: $division";
    }

    public function dividirSinParametros() {
        $numero1 = 50;
        $numero2 = 15;
        $division = $this->dividirConParametros($numero1, $numero2);
        return $division;
    }
}
