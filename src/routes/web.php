<?php

use Illuminate\Support\Facades\Route;
use Maninderjeet\EmailTemplate\Controllers\EmailTemplateController;
use Maninderjeet\EmailTemplate\Controllers\MediaController;

// template routes
Route::get('email-templates', [EmailTemplateController::class,'index'])->name('email-templates.index');
Route::post('email-templates', [EmailTemplateController::class, 'store'])->name('email-templates.store');
Route::get('email-templates/create', [EmailTemplateController::class, 'create'])->name('email-templates.create');
Route::get('email-templates/{id}/edit', [EmailTemplateController::class, 'edit'])->name('email-templates.edit');
Route::get('email-templates/{id}', [EmailTemplateController::class, 'show'])->name('email-templates.show');
Route::put('email-templates/{id}', [EmailTemplateController::class, 'update'])->name('email-templates.update');
Route::put('email-templates/{id}/duplicate', [EmailTemplateController::class, 'duplicate'])->name('email-templates.duplicate');
Route::delete('email-templates/{id}', [EmailTemplateController::class, 'destroy'])->name('email-templates.destroy');
// media routes
Route::get('medias', [MediaController::class,'index'])->name('medias.index');
