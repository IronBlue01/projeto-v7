<?php

use App\Http\Middleware\AuthMiddleware;
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

Route::get('/page-login', 'SiteController@pageLogin')->name('page-login');

Route::post('authentication','AuthController@auth')->name('authentication');

Route::get('/', 'SiteController@home');

Route::get('home', 'SiteController@homeDash');

Route::get('modal', 'SiteController@modal');

Route::get('card', 'SiteController@card');

Route::get('form', 'SiteController@form');

Route::get('chart', 'SiteController@chart');

Route::get('button', 'SiteController@buttons');

Route::get('table', 'SiteController@table');

Route::get('sobre', 'SiteController@sobre');

Route::post('cadastro-cliente', 'CadastroController@cadastroBoleto')->name('cadastro-cliente');


Route::middleware(AuthMiddleware::class)
      ->get('page-cliente/{id_cliente}', 'UserController@PageCliente')
      ->name('page-cliente');


Route::get('download/{arquivo}/{nome_arquivo}','DownloadController@download')->name('download');





