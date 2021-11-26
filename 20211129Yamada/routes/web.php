<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

Route::get('/', [InquiryController::class, 'inquiry']);
Route::post('/', [InquiryController::class, 'typeInfo']);
Route::post('/confirmation', [InquiryController::class, 'confirm']);