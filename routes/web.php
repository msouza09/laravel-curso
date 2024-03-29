<?php

use App\Http\Controllers\Admin\{ForumController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::delete('forums/{id}', [ForumController::class, 'destroy'])->name('forums.destroy');
Route::put('forums/{id}', [ForumController::class, 'update'])->name('forums.update');
Route::get('forums/{id}/edit', [ForumController::class, 'edit'])->name('forums.edit');
Route::get('/forums/create', [ForumController::class, 'create'])->name('forums.create');
Route::get('/forums/{id}', [ForumController::class, 'show'])->name('forums.show');
Route::post('/forums', [ForumController::class, 'store'])->name('forums.store');
Route::get('/forums', [ForumController::class, 'index'])->name('forums.index');

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
