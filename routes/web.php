<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',[AdminController::class, 'index'])->name('admin');

Route::get('/categories',[CategoriesController::class, 'index'])->name('categories');

Route::get('/suppliers',[SuppliersController::class, 'index'])->name('suppliers');

Route::get('/items',[ItemsController::class, 'index'])->name('items');


