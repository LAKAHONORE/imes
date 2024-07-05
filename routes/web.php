<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('accueil');


Route::get('/properties', function () {
    return view('properties');
})->name('properties');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/agents', function () {
    return view('agents');
})->name('agents');


Route::get('/about', function () {
    return view('about');
})->name('about');