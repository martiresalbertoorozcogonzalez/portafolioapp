<?php

use App\Models\CategoriaPortafolio;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\HabilidadController;
use App\Http\Controllers\AcercaController;
use App\Http\Controllers\CertificacionController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\FrontController;


/* Ruta para la pagina de inicio  */
Route::get('/', [FrontController::class, 'acerca'])->name('front.index');


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

/**Rutas para el portafolio */
Route::resource('portafolio', PortafolioController::class);

//Ruta para mostrar portafolio
Route::get('/portafolio/{portafolio}', [FrontController::class, 'show'])->name('front.show');


/**Rutas para Certificaciones*/

Route::resource('certificacion', CertificacionController::class);


//Ruta para mostrar portafolio
Route::get('/certificacion/{certificacion}', [FrontController::class, 'vercertificacion'])->name('front.vercertificacion');


// Mensajes

Route::post('mensaje',[MensajeController::class, 'store'])->name('mensaje');

      /** Requerimiento de auth */

require __DIR__.'/auth.php';



// Route::get('/', function () {
//     return view('inicio');
// })->name('home');

/* Ruta para la pagina de inicio de Mariobros */
// Route::get('/playmario', [WelcomeController::class, '__invoke'])->name('welcome');;

