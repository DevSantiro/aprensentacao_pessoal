<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'CursosController@index')->name('index');


/* Rotinas de Controle */


Route::get('/cadastro_curso', 'CursosController@create')->middleware('auth');;
Route::post('/cadastro_curso', 'CursosController@store')->name('cadastro_curso')->middleware('auth');


/* Fim Rotinas Controle */


// Rotinas de Cadastro
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', 'HomeController@index')->name('home');
