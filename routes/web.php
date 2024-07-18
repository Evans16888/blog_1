<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/**
 * routes::get      |CONSULTAR
 * routes::post     |GUARDAR
 * routes::delete   |Eliminar
 * routes::put      |ACTUALIZAR
 */
Route::get('/', function () {
    return view('welcome');
});
Route::get('blog/{slug}', function ($slug) {
    return $slug;
});
Route::get('buscar', function (Request $request){
    return $request->all();
});
