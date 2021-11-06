<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/aula4', function () {

    $nome = "Korra";
    $idade = 23;
    $elementos = ["terra", "fogo", "ar", "água"];
    return view(
        'aula4',
        [
            'nome' => $nome,
            'idade' => $idade,
            'elementos' => $elementos
        ]
    );
});
