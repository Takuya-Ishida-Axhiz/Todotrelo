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

Route::get('/','TodocardsController@index');
Route::get('/todocard/{id}','TodocardsController@show')->where('id','[0-9]+');
Route::get('/todocard/create','TodocardsController@create');
Route::post('/todocard/add','TodocardsController@store');
Route::get('/todocard/{id}/edit','TodocardsController@edit');
Route::patch('/todocard/{id}','TodocardsController@update');
//Route::delete('/todocard/{id}/','TodocardsController@destroy');
Route::delete('/todocard/{id}','TodocardsController@destroy');


// http://任意のサーバ名/dev/phpinfoにアクセスすればOK
Route::get('/phpinfo', function(){
        // これでルーティング完了。
    return view('phpsettings');
});