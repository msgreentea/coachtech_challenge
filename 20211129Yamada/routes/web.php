<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

Route::get('/', [InquiryController::class, 'inquiry']);
Route::post('/', [InquiryController::class, 'TypeInfo']);
Route::get('/confirmation', [InquiryController::class, 'confirm']);
Route::post('/thanks', [InquiryController::class, 'send']);
// Route::get('/thanks', [InquiryController::class, 'thanks']);