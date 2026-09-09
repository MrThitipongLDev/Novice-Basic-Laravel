<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');   //อยู่ใน resources/views/welcome.blade.php
});

Route::get('/about', function () {
    return view('about');   
});

//แบบย่อ
Route::view('/contact', 'contact');