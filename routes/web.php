<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ContactanosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     // return view('welcome');
//     return "Bienvenido a la pag HOME";
// });
Route::get('/', HomeController::class)->name('home');
// Route::get('/', 'HomeController');

// Route::get('cursos', function () {
//     return "bienvenido a la pag cursos";
// });

// rutas usadas
// Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

// Route::get('cursos', 'CursoController@index');

// Route::get('cursos/create', function () {
//     return "En esta pag podrás crear un curso";
// });

// rutas usadas
// Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');
// Route::post('cursos',[CursoController::class, 'store'])->name('cursos.store');

// Route::get('cursos/{curso}', function ($curso) {
//     return "Bienvenido al curso: $curso";
// });
// Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {
//     return "Bienvenido al curso: $curso de la categoria $categoria";
// });
// variable categoria opcional
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     if ($categoria) {
//         return "Bienvenido al curso: $curso de la categoria $categoria";
//     } else {
//         return "Bienvenido al curso: $curso";
//     }
// });
// Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');

// rutas usadas
// Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');
// Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
// Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
// Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

// COMO ASIGNAR RUTA A CONTROLADOR: use App\Http\Controllers\HomeController;
// EN LARAVEL 8
//Route::get('/', HomeController::class);


//names -> nombre de ruta en codigo y parameters sirve par el nombre de la ruta
Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

// para contenido estatico  uri, viewname
Route::view('nosotros', 'nosotros')->name('nosotros')->middleware('age');

//para mandar correos electronicos
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

Route::get('no-autorizado', function () {
    return "Usted no es mayor de edad";
});