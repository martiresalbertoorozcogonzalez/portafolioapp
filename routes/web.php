<?php

use App\Models\CategoriaPortafolio;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortafolioController;



/* Ruta para la pagina de inicio  */
Route::get('/', function () {
    return view('welcome');
})->name('home');

/**Ruta oara el home de admin */

Route::get('/dashboard', function () {
    $categorias = CategoriaPortafolio::all(['id','nombre']);
    return view('admin.home')->with('categorias',$categorias);
})->middleware(['auth'])->name('dashboard');


/**Rutas para el portafolio */

Route::get('/portafolio', [PortafolioController::class, 'index'])->name('portafolio.index');

Route::get('/portafolio/create', [PortafolioController::class, 'create'])->name('portafolio.create');

Route::post('/portafolio', [PortafolioController::class, 'store'])->name('portafolio.store');

Route::get('/portafolio/{portafolio}/edit', [PortafolioController::class, 'edit'])->name('portafolio.edit');

Route::put('/portafolio/{portafolio}', [PortafolioController::class, 'update'])->name('portafolio.update');

Route::delete('/portafolio/{portafolio}', [PortafolioController::class, 'destroy'])->name('portafolio.destroy');

require __DIR__.'/auth.php';
