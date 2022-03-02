<?php

use Illuminate\Support\Facades\Route;

Route::get('/contact-us', [ContactController::class,'index']);
Route::post('/contact-us', [ContactController::class,'store']);