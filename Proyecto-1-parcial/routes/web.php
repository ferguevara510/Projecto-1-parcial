<?php

use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', [EstudianteController::class,'listarEstudiantes'])->name('estudianteIndex');
Route::get('/registrarEstudiante', [EstudianteController::class,'vistaRegistrarEstudiante'])->name('estudianteRoot');

Route::post('/registrarEstudiante', [EstudianteController::class,'registrarEstudiante'])->name('estudianteStorage');

Route::get('/', [EstudianteController::class,'listarEstudiantes'])->name('estudianteList');

Route::get('/editarEstudiante/{estudiante}', [EstudianteController::class,'vistaEditarEstudiante'])->name('estudianteEdit');

Route::put('/editarEstudiante/{estudiante}', [EstudianteController::class,'editarEstudiante'])->name('estudianteUpdate');

Route::delete('/borrarEstudiante/{estudiante}', [EstudianteController::class,'eliminarEstudiante'])->name('estudianteDelete');
