<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectableController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/create', [CollectableController::class, 'Create'])->name('collectable.create');
