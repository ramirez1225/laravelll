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

////mostrar los articulos y su comentarioo
Route::get('articulos/comentarios','lider\mycontroller@rex');


////regresa el articulo y su comentario por id
Route::get('articulos/{Id}/comentarios','lider\mycontroller@soso');

////mostrar registros de las tablas con su id o mostrar todos los registros
Route::get('wos/{id?}','lider\mycontroller@hola');
Route::get('papo/{id?}','lider\mycontroller@comentarioss');

///insertar registros con variables en insomnia
Route::post('trueno','lider\mycontroller@insertarcomentarios');
Route::post('wolf','lider\mycontroller@insertararticulos');

///eliminar registros 
Route::delete('beltran/{Id}','lider\mycontroller@borrar');
Route::delete('replica/{Id}','lider\mycontroller@quit');

////actualizar datos de tabla articulos
Route::put('sub/{Id}','lider\mycontroller@updateid');
Route::put('red/{Id}','lider\mycontroller@updatearticulo');
Route::put('bull/{Id}','lider\mycontroller@updateidcomentario');


////actualizar datos de tabla comentarios
Route::put('mecha/{Id}','lider\mycontroller@zticma');
Route::put('cacha/{Id}','lider\mycontroller@ruido');

