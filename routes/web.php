<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SegmentController;
use App\Http\Controllers\SearchController;

Route::get('/segments', [SegmentController::class, 'index']);
Route::post('/segments/search', [SegmentController::class, 'search']);




Route::get('/', [SearchController::class, 'index'])->name('search.form');
Route::get('/search', [SearchController::class, 'search'])->name('search.results');

