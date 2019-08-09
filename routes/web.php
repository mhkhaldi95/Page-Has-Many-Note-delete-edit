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

Route::get('/show', function () {
    return view('show');
});
Route::get('/showall','ControllerPages@show');
Route::post('/pagesstore','ControllerPages@store');
Route::get('/delete/{id}','ControllerPages@delete');
//----------------------------------------------------------
Route::get('/shownoteforpage/{page}','ControllerPages@onepage');
Route::post('/notestore/{page}','ControllerPages@storenote');

