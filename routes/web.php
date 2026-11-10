<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectableController;

Route::get('/', [CollectableController::class, 'Index'])->name('index');

Route::get('/create', [CollectableController::class, 'Create'])->name('collectable.create');
Route::post('/store-collectable', [CollectableController::class, 'Store'])->name('collectable.store');


