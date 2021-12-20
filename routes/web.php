<?php

use App\Http\Controllers\PortfolioController;
use App\Models\Portfolio;
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

//INDEX

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('Portfolio/index', function () {
    return view('index');
})->name('index');

//CONTACTO
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('Portfolio/contacto', function () {
    return view('contacto');
})->name('contacto');

//COLECCION
Route::get('/coleccion', function () {
    return view('coleccion');
})->name('coleccion');

Route::get('Portfolio/coleccion', function () {
    return view('coleccion');
})->name('coleccion');

//NOSOTROS
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('Portfolio/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

//LOGIN - INCIO SESION
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('Portfolio/login', function () {
    return view('login');
})->name('login');

//REGISTRO 
Route::get('/registrarse', function () {
    return view('registrarse');
})->name('registrarse');

Route::get('Portfolio/registrarse', function () {
    return view('registrarse');
})->name('registrarse');
/*
Route::get('Portfolio/register', function () {
    return view('registrarse');
})->name('registrarse');
*/
//PERFIL USUARIO
Route::get('/perfil', function () { /* perfil de usuario */
    return view('perfil');
})->name('perfil');

Route::get('Portfolio/perfil', function () { /* perfil de usuario */
    return view('perfil');
})->name('perfil');

//PORTFOLIO

Route::resource('/Portfolio', PortfolioController::class);


Route::get('perfil/formPortfolio', function () { /* nuevo portfolio */
    return view('formPortfolio');
})->name('formPortfolio');

Route::get('Portfolio/formPortfolio', function () { /* nuevo portfolio */
    return view('formPortfolio');
})->name('formPortfolio');

Route::get('/formPortfolio', function () { /* nuevo portfolio */
    return view('formPortfolio');
})->name('formPortfolio');

Route::get('/portfolio', function () { /* visualizacion portfolio */
    return view('portfolio');
})->name('portfolio');


//CONFIG USUARIO
Route::get('perfil/configuracion', function () { /* configuracion perfil de usuario */
    return view('configuracion');
})->name('configuracion');
