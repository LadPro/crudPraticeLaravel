<?php

use App\Http\Controllers\CommentController;
use App\Models\Comment;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;


Route::get('/inicio', [CommentController::class, 'index'])->name('inicio');
Route::post('/store', [CommentController::class, 'store'])->name('store');