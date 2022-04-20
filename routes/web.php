<?php

use Illuminate\Support\Facades\Route;

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

//ruta del home 
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//ruta detalle cada curso
Route::get('/post', [App\Http\Controllers\HomeController::class, 'post'])->name('post');

//ruta del login del admin
Route::get('/home', function(){
    return view("admin.categories.index");
    //middleware especifica que esta vista debera ser autenticada
})->middleware("auth");

//rutas del administrador
Route::get('/admin/categories', [App\Http\Controllers\Admin\CategoriesController::class, 'index'])->name('admin.categories');
Route::post('/admin/categories/store', [App\Http\Controllers\Admin\CategoriesController::class, 'store'])->name('admin.categories.store');

Auth::routes();


