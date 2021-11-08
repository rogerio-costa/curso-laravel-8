<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EventoController;

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

Route::get('/', [Controller::class, 'index'])->name('index');


Route::get('/aula4', [AulaController::class, 'aula4'])->name('aulas.aula4');


Route::get('/aula8/{id?}', [AulaController::class, 'aula8'])->name('aulas.aula8');

//Rotas EVENTOS

Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');

Route::get('/eventos/create', [EventoController::class, 'create'])->name('eventos.create');

Route::post('/eventos/store', [EventoController::class, 'store'])->name('eventos.store');

// END rotas EVENTOS

