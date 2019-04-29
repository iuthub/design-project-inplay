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

Route::get('/', 'MainController@index');

Route::get('/games', 'MainController@games');

Route::get('/games/{id}', [
    'as' => 'main.gameInfo', 'uses' => 'MainController@getGame'
]);


Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'Admin\IndexController@index');
    Route::post('/save', 'Admin\IndexController@save');
});

