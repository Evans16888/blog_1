<?php
use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;
/**
 * routes::get      |CONSULTAR
 * routes::post     |GUARDAR
 * routes::delete   |Eliminar
 * routes::put      |ACTUALIZAR
 */

 /**
    Route::get('/',[pageController::class, 'home'])->name('home');
    Route::get('blog',[pageController::class, 'blog'] )->name('blog');
    Route::get('blog/{slug}', [pageController::class, 'post'])->name('post');
 */

 Route::controller(pageController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog/{slug}', 'post')->name('post');
 });
