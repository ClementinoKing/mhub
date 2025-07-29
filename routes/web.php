<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('work', function () {
    return view('work');
});

Route::get('opportunity', function () {
    return view('opportunity');
});

Route::get('events', function () {
    return view('events');
});

Route::get('chat', function () {
    return view('chat');
});

Route::get('contact', function () {
    return view('contact');
});

