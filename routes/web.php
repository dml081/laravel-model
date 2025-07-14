<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {//controller - called the anonymous controller
    return view('welcome');
});

Route::get('/contact-us', [FormController::class, "ContactFormRender"]);

Route::post('/contact-us', [FormController::class, 'ContactForm'])->name("submit");

Route::get('/contacts', [FormController::class, 'ViewForm']);
