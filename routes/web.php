<?php

use App\Http\Controllers\Admin\{ForumController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::post('/forums', [ForumController::class, 'store'])->name('forums.store');
Route::get('/forums/create', [ForumController::class, 'create'])->name('forums.create');
Route::get('/forums', [ForumController::class, 'index'])->name('forums.index');

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
