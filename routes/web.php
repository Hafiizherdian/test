<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'Hafiizh Herdian']);
});

Route::get('/projects', function () {
    return view('projects', ['title' => 'Projects']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
