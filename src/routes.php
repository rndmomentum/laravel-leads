<?php

use App\Http\Controllers\PackageDevelopmentController;
use Illuminate\Support\Facades\Route;
use Momentumplanet\LaravelLeads\Http\Controllers\SaleLeadController;

Route::prefix('/leads')->group(function()
{
    Route::get('/bulk-upload',[SaleLeadController::class,'bulk_upload']);
    Route::post('/bulk-upload',[SaleLeadController::class,'processing_upload']);

    Route::get('/download/template',[SaleLeadController::class,'download_template'])->name('laravel-lead.download.bulk-update.template');
});
