<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'tasks' => [
            'abcd',
            'efgh',
            'ijkl'
        ],
    ]);   //อยู่ใน resources/views/welcome.blade.php
});

// Route::view('/about', 'about', [
//     'abc' => 'ssss',
//     'name' => 'aek',
//     'pass' => request('pass'),
// ]);

Route::get('/about', function () {
    return view('about', [
    'abc' => 'ssss',
    'name' => 'aek',
    'pass' => request('pass'),
    ]);
});

//แบบย่อ
Route::view('/contact', 'contact');