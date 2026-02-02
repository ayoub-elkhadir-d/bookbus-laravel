<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SegmentController;

Route::get('/segments', [SegmentController::class, 'index']);
Route::post('/segments/search', [SegmentController::class, 'search']);
