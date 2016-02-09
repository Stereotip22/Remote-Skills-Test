<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adding-items', function () {
    return view('form');
});

Route::post('/adding-items', [
    'as' => 'adding-items',
    'uses' => 'ItemsController@addItem'
]);


/* Uploading */
Route::get('items-to-xml', [
    'as' => 'items-to-xml',
    'uses' => 'ItemsController@itemsToXml'
]);


Route::get('items-to-json', [
    'as' => 'items-to-json',
    'uses' => 'ItemsController@itemsToJson'
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
