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
    return view('index');
})->name('index');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/coleccion', function () {
    return view('coleccion');
})->name('coleccion');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/registrarse', function () {
    return view('registrarse');
})->name('registrarse');

Route::get('/perfil', function () { /* perfil de usuario */
    return view('perfil');
})->name('perfil');

Route::get('/formPortfolio', function () { /* nuevo portfolio */
    return view('formPortfolio');
})->name('formPortfolio');

Route::get('/portfolio', function () { /* visualizacion portfolio */
    return view('portfolio');
})->name('portfolio');

Route::get('/configuracion', function () { /* configuracion perfil de usuario */
    return view('configuracion');
})->name('configuracion');
