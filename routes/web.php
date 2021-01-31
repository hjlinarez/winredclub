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
    return view('pagina');
});




Route::post('jugador', 'JugadorController@store')->name('jugador.store');
Route::post('deposito', 'DepositoController@store')->name('deposito.store');
Route::post('retiro', 'RetiroController@store')->name('retiro.store');

Route::post('aprobardeposito', 'DepositoController@aprobar')->name('deposito.aprobar');
Route::post('rechazardeposito', 'DepositoController@rechazar')->name('deposito.rechazar');

Route::post('aprobarretiro', 'RetiroController@aprobar')->name('retiro.aprobar');
Route::post('rechazarretiro', 'RetiroController@rechazar')->name('retiro.rechazar');

Route::get('jugadores', 'JugadorController@show')->middleware('auth');
Route::get('depositos', 'DepositoController@show')->middleware('auth');
Route::get('retiros', 'RetiroController@show')->middleware('auth');

Route::post('depositosjugador', 'DepositoController@depositosjugador')->middleware('auth');
Route::post('retirosjugador', 'RetiroController@retirosjugador')->middleware('auth');



Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home')->middleware('auth');


