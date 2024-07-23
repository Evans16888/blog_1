<?php

use App\Http\Controllers\ProfileController;
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
    Route::get('blog/{zslug}', 'post')->name('post');
 });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
