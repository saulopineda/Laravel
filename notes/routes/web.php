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
Route::get('/',function(){
    return view('welcome');

});
Route::get('/notes', 'NotesController@index');
Route::get('/notes/crear','NotesController@crear');
Route::get('/notes/{note}', 'NotesController@show');
Route::get('/notes/{note}/edit', 'NotesController@edit');
Route::patch('/notes/{note}', 'NotesController@update');
Route::post('/notes', 'NotesController@store');

Route::get('/contact', function () {
    return view('Contacto');
});
