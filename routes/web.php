<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/', function () {//controller - called the anonymous controller
    return view('extender');
});

Route::get('/react', function(){
    return view("react");
});


Route::get('/contact-us', [FormController::class, "ContactFormRender"]);

Route::post('/contact-us', [FormController::class, 'ContactForm'])->name("submit");

Route::get('/contacts', [FormController::class, 'ViewForm']);

Route::get("/shop", [ProductController::class, "show_shop"]);

Route::get("/login", function(){
    return view("login");
});

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get("/register", function(){
    return view("register");
});

Route::post('/register', [UserController::class, 'register'])->name('register');
