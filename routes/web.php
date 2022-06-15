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


Route::get('/user', 'SiteController@login')->name('login');

Route::get('/', 'SiteController@home');

Route::get('/home', 'SiteController@homeDash');

Route::get('/modal', 'SiteController@modal');

Route::get('/card', 'SiteController@card');

Route::get('/form', 'SiteController@form');

Route::get('/chart', 'SiteController@chart');

Route::get('/button', 'SiteController@buttons');

Route::get('/table', 'SiteController@table');

Route::get('/sobre', 'SiteController@sobre');

Route::post('cadastro-cliente', 'CadastroController@cadastroBoleto')->name('cadastro-cliente');




