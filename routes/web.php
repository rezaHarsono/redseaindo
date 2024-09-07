<?php

use Illuminate\Support\Facades\Route;
use App\Models\Person;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['people' => Person::all()]);
});

Route::get('/contact', function () {
    return view('contact');
});
