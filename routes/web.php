<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs',[
        "jobs" => [
            [
                'id' => 1,
                'title' => 'director',
                'salary' => '$50000'
            ],
            [
                'id' => 2,
                'title' => 'teacher',
                'salary' => '$30000'
            ],
            [
                'id' => 3,
                'title' => 'developer',
                'salary' => '$10000'
            ],
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    dd($id);
    return view('contact');
});
Route::get('/contact', function () {
    return view('contact');
});
