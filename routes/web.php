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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/test', ['as'=>'test', 'uses'=>'TestController@test']);

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/*Route::group(['prefix'=>'{location?}'], function (){

    Route::get('/', ['as'=>'test', 'uses'=>'TestController@test']);
    //Route::get('/', ['as'=>'test', 'uses'=>'TestController@item_test']);

});*/



