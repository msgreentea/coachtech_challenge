<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

Route::get('/', [InquiryController::class, 'inquiry']);
Route::post('/confirmation', [InquiryController::class, 'confirm']);