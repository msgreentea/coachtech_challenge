<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

Route::get('/', [InquiryController::class, 'inquiry']);
Route::post('/confirmation', [InquiryController::class, 'typeInfo']);
// Route::get('/confirmation', [InquiryController::class, 'confirm']);
Route::post('/thanks', [InquiryController::class, 'send']);
// Route::get('/thanks', [InquiryController::class, 'thanks']);