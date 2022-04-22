<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

//ruta del home 
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//ruta detalle cada curso
Route::get('/post', [App\Http\Controllers\HomeController::class, 'post'])->name('post');

//ruta del login del admin
Route::get('/home', function(){
    return redirect()->route("admin.categories.index");
    //middleware especifica que esta vista debera ser autenticada
})->middleware("auth");

//rutas del administrador
Route::get('/admin/categories/index', [App\Http\Controllers\Admin\CategoriesController::class, 'index'])->name('admin.categories.index');
Route::post('/admin/categories/store', [App\Http\Controllers\Admin\CategoriesController::class, 'store'])->name('admin.categories.store');
Route::post('/admin/categories/{eventId}/update', [App\Http\Controllers\Admin\CategoriesController::class, 'update'])->name('admin.categories.update');
Route::delete('/admin/categories/{eventId}/delete', [App\Http\Controllers\Admin\CategoriesController::class, 'delete'])->name('admin.categories.delete');

Route::get('/admin/cursos/index', [App\Http\Controllers\Admin\CursosController::class, 'index'])->name('admin.cursos.index');
Route::post('/admin/cursos/store', [App\Http\Controllers\Admin\CursosController::class, 'store'])->name('admin.cursos.store');
Route::post('/admin/cursos/{cursoId}/update', [App\Http\Controllers\Admin\CursosController::class, 'update'])->name('admin.cursos.update');
Route::delete('/admin/cursos/{cursoId}/delete', [App\Http\Controllers\Admin\CursosController::class, 'delete'])->name('admin.cursos.delete');

Auth::routes();


