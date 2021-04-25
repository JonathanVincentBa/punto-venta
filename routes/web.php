<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

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

Route::get('/', function () {
    return view('contenido/contenido');
});

Route::get('/categoria', [CategoriaController::class, 'index']);
Route::post('/categoria/registrar', [CategoriaController::class, 'store']);
Route::put('/categoria/actualizar', [CategoriaController::class, 'update']);
Route::put('/categoria/activar', [CategoriaController::class, 'activar']);
Route::put('/categoria/desactivar', [CategoriaController::class, 'desactivar']);


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
