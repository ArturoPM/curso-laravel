<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\TareaUnoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ======================================== E J E M P L O S   D E L   C U R S O========================================
// Ruta principal con variables obligatorias
// Route::get('/', function () {
//     $nombre = "Arturo";
//     $fecha = date('d-m-Y');
//     return view('welcome', compact('nombre', 'fecha'));
// })->name('home');
Route::get('/', function(){
    return redirect()->route('home', ['nombre' => 'Arturo', 'fecha' => date('d-m-Y')]);
})->name('home');
Route::get('/home/{nombre}/{fecha}', [CursoController::class, 'getName'])->name('home');

// Ruta de Hola Mundo
Route::get('/hola', function () {
    return "Hola Mundo";
})->name('hola');

// Ruta de suma de dos números
// Route::get('/sumar', [CursoController::class, 'sumar'])->name('sumar');

// Ruta de suma de dos números con parámetros
// Route::get('/suma/{n1}/{n2}', [CursoController::class, 'sumarConParametros'])->where('n1', '[0-9]+')->where('n2', '[0-9]+');

// Ruta de saludo con parámetro opcional
Route::get('/nombre/{nombre?}', function ($nombre = "Arturo") {
    return "Hola $nombre";
})->where('nombre', '[A-Za-z]+');

// Ruta que redirecciona a otra ruta
Route::redirect('/h', '/hola', 301);

// Ruta que verifica si la ruta actual es 'hola'
Route::get('/verificar', function (Request $request) {
    if($request->route()->named() == 'hola') {
        return "Esta ruta si existe";
    } else {
        return "Esta ruta no existe";
    }
})->name('verificar');

// Verificar si existe una ruta llamada 'hola'
Route::get('/verificar2', function () {
    $nombreRuta = 'hola';
    if(Route::has($nombreRuta)) {
        return "Esta ruta si existe";
    } else {
        return "Esta ruta no existe";
    }
})->name('verificar2');

// Grupo de rutas con prefijo
Route::prefix('admin')->group(function () {
    Route::get('/primero', function () {
        return "Primero";
    })->name('primero');

    Route::get('/segundo', function () {
        return "Segundo";
    })->name('segundo');
});

// ======================================== T A R E A   1   D E L   C U R S O ========================================

// Suma de dos números
Route::prefix('sumar')->group(function () {
    Route::get('/con-parametros/{n1}/{n2}', [TareaUnoController::class, 'sumarConParametros'])->where('n1', '[0-9]+')->where('n2', '[0-9]+')->name('sumar.conParametros');
    Route::get('/sin-parametros', [TareaUnoController::class, 'sumarSinParametros'])->name('sumar.sinParametros');
});

// Resta de dos números
Route::prefix('restar')->group(function () {
    Route::get('/con-parametros/{n1}/{n2}', [TareaUnoController::class, 'restarConParametros'])->where('n1', '[0-9]+')->where('n2', '[0-9]+')->name('restar.conParametros');
    Route::get('/sin-parametros', [TareaUnoController::class, 'restarSinParametros'])->name('restar.sinParametros');
});

// Multiplicación de dos números
Route::prefix('multiplicar')->group(function () {
    Route::get('/con-parametros/{n1}/{n2}', [TareaUnoController::class, 'multiplicarConParametros'])->where('n1', '[0-9]+')->where('n2', '[0-9]+')->name('multiplicar.conParametros');
    Route::get('/sin-parametros', [TareaUnoController::class, 'multiplicarSinParametros'])->name('multiplicar.sinParametros');
});

// División de dos números
Route::prefix('dividir')->group(function () {
    Route::get('/con-parametros/{n1}/{n2}', [TareaUnoController::class, 'dividirConParametros'])->where('n1', '[0-9]+')->where('n2', '[0-9]+')->name('dividir.conParametros');
    Route::get('/sin-parametros', [TareaUnoController::class, 'dividirSinParametros'])->name('dividir.sinParametros');
});