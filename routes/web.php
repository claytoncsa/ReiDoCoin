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

Route::get('/', function () {
    return view('index');
});

Route::get('/teste', function () {
    return view('teste');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard/', 'DashboardController@index')->name('dashboard');


Route::get('infopag/', 'InfoPagController@index')->name('infopag');
Route::get('infopag/create/{id_moeda}', 'InfoPagController@create')->name('infopag.create');
Route::post('infopag/store', 'InfoPagController@store')->name('infopag.store');
Route::get('infopag/listar', 'InfoPagController@listar')->name('infopag.listar');

Route::get('moedas/', 'MoedasController@index')->name('moedas');
Route::get('moedas/listar', 'MoedasController@listar')->name('moedas.listar');
Route::get('moedas/create', 'MoedasController@create')->name('moedas.create');
Route::post('moedas/store', 'MoedasController@store')->name('moedas.store');


//Route::get('infopag/visualizar/{id}', 	['as' =>'museus.visualizar',  			'uses' => 'MuseusController@visualizar']);

