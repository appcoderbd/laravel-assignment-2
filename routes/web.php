<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', function() {

    return view('dashboard');

})->name('admin');


// Categories All Route

Route::get('/categories', [CategorieController::class , 'create'])->name('create.categories');
Route::post('category/store', [CategorieController::class, 'store'])->name('category.store');
Route::get('/category/show', [CategorieController::class, 'show'])->name('category.show');