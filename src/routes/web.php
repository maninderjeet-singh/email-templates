<?php

use Illuminate\Support\Facades\Route;
use Maninderjeet\EmailTemplate\Controllers\EmailTemplateController;

Route::get('email-templates', [EmailTemplateController::class,'index'])->name('email-templates.index');
Route::post('email-templates', [EmailTemplateController::class, 'store'])->name('email-templates.store');
Route::get('email-templates/create', [EmailTemplateController::class, 'create'])->name('email-templates.create');
Route::get('email-templates/{id}', [EmailTemplateController::class, 'edit'])->name('email-templates.edit');
Route::put('email-templates/{id}', [EmailTemplateController::class, 'update'])->name('email-templates.update');
Route::delete('email-templates/{id}', [EmailTemplateController::class, 'destroy'])->name('email-templates.destroy');
