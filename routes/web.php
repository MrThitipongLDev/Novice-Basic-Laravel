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

// forms
Route::get('/ideas', function () {
    $ideas = session()->get('ideas', []);
    // dd($ideas);
    return view('ideas', [
        'ideas' => $ideas
    ]);
});

Route::post('/ideas', function () {
    $idea = request('idea');

    session()->push('ideas', $idea);

    return redirect('ideas');
});

Route::get('/ideas/delete', function () {
    session()->forget('ideas');
    return redirect('/ideas');
});
