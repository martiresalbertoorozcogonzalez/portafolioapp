<?php

use App\Models\CategoriaPortafolio;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\HabilidadController;
use App\Http\Controllers\AcercaController;
use App\Http\Controllers\CertificacionController;
use App\Http\Controllers\MensajeController;



/* Ruta para la pagina de inicio  */
Route::get('/', function () {
    return view('welcome');
})->name('home');

/**Ruta oara el home de admin */

Route::get('/dashboard', function () {
    $categorias = CategoriaPortafolio::all(['id','nombre']);
    return view('admin.home')->with('categorias',$categorias);
})->middleware(['auth'])->name('dashboard');


/**Rutas para las habilidades */

Route::get('/habilidad', [HabilidadController::class, 'index'])->name('habilidad.index');

Route::get('/habilidad/create', [HabilidadController::class, 'create'])->name('habilidad.create');

Route::post('/habilidad', [HabilidadController::class, 'store'])->name('habilidad.store');

Route::get('/habilidad/{habilidad}/edit', [HabilidadController::class, 'edit'])->name('habilidad.edit');

Route::put('/habilidad/{habilidad}', [HabilidadController::class, 'update'])->name('habilidad.update');

Route::delete('/habilidad/{habilidad}', [HabilidadController::class, 'destroy'])->name('habilidad.destroy');

/**Rutas para Acerca de mi */

Route::get('/acerca', [AcercaController::class, 'index'])->name('acerca.index');

Route::get('/acerca/create', [AcercaController::class, 'create'])->name('acerca.create');

Route::post('/acerca', [AcercaController::class, 'store'])->name('acerca.store');

Route::get('/acerca/{acerca}/edit', [AcercaController::class, 'edit'])->name('acerca.edit');

Route::put('/acerca/{acerca}', [AcercaController::class, 'update'])->name('acerca.update');

Route::delete('/acerca/{acerca}', [AcercaController::class, 'destroy'])->name('acerca.destroy');

/**Rutas para Certificaciones*/

Route::get('/certificacion', [CertificacionController::class, 'index'])->name('certificacion.index');

Route::get('/certificacion/create', [CertificacionController::class, 'create'])->name('certificacion.create');

Route::post('/certificacion', [CertificacionController::class, 'store'])->name('certificacion.store');

Route::get('/certificacion/{certificacion}/edit', [CertificacionController::class, 'edit'])->name('certificacion.edit');

Route::put('/certificacion/{certificacion}', [CertificacionController::class, 'update'])->name('certificacion.update');

Route::delete('/certificacion/{certificacion}', [CertificacionController::class, 'destroy'])->name('certificacion.destroy');

/**Rutas para el portafolio */

Route::get('/portafolio', [PortafolioController::class, 'index'])->name('portafolio.index');

Route::get('/portafolio/create', [PortafolioController::class, 'create'])->name('portafolio.create');

Route::post('/portafolio', [PortafolioController::class, 'store'])->name('portafolio.store');

Route::get('/portafolio/{portafolio}/edit', [PortafolioController::class, 'edit'])->name('portafolio.edit');

Route::put('/portafolio/{portafolio}', [PortafolioController::class, 'update'])->name('portafolio.update');

Route::delete('/portafolio/{portafolio}', [PortafolioController::class, 'destroy'])->name('portafolio.destroy');

// Mensajes
Route::get('/mensaje', [MensajeController::class, 'index'])->name('mensaje.index');

/** Requerimiento de auth */
require __DIR__.'/auth.php';
