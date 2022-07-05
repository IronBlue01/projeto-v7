<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('atualiza-status-pagamento/{id_user}','UpdateController@updateStatus')->name('atualiza-status-pagamento');

Route::post('atualiza-cpf','UpdateController@updateCpf')->name('atualiza-cpf');

Route::post('atualiza-nome','UpdateController@updateNome')->name('atualiza-nome');

Route::post('atualiza-boleto','UpdateController@updateBoleto')->name('atualiza-boleto');
