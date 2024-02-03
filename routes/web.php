<?php

use App\Http\Controllers\Admin\{ForumController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
