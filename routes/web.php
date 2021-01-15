<?php
 
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
 
Route::get('/', [PageController::class, 'index']);
Route::get('/impressum', [PageController::class, 'imprint']);
Route::get('/kontakt', [ContactController::class, 'index']);

Route::post('/kontakt', [ContactController::class, 'submit']);
