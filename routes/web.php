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
    return view('welcome');
});

Route::get('test', 'TestController@index');

// if you change order of the route, the method what is called by route config may change.
Route::get('test/before', 'TestController@before');

Route::get('test/after', 'TestController@after');

Route::get('test/checkMetaData', 'TestController@checkMetaData');

Route::get('test/{id?}/{pass?}', 'TestController@routeParam');

Route::get('singleAction', 'SingleActionController');

// php template
Route::get('phpTemplate', function() {
    return view('practice.testView');
});