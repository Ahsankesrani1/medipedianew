<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\SearchController::class, 'index'])->name('client.search');
Route::get('medicines', [App\Http\Controllers\SearchController::class, 'medicines'])->name('client.medicines');
Route::get('medicine', [App\Http\Controllers\MedicineController::class, 'index'])->name('client.medicine');
Route::get('medicine/show/api', [App\Http\Controllers\MedicineController::class, 'show'])->name('client.medicine.show');

// ABOUT
Route::get('about', [App\Http\Controllers\AboutController::class, 'index'])->name('client.about');
Route::post('about/store', [App\Http\Controllers\AboutController::class, 'store'])->name('client.about.store');

// ADMIN
Route::get('admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('fetch/messages', [App\Http\Controllers\AdminController::class, 'messages'])->name('admin.messages');

// ARTICLE
Route::get('articles/api', [App\Http\Controllers\SearchController::class, 'articles'])->name('articles');
Route::get('article/show', [App\Http\Controllers\AdminController::class, 'articleDetail'])->name('article.show');
Route::post('articles/update/api', [App\Http\Controllers\AdminController::class, 'updateArticle'])->name('article.update');


Route::view('/register','pages.auth.register');
Route::view('/login','pages.auth.login');