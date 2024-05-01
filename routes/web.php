<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
})->name('home');

Route::get('/mentorat', function () {
    return view('layouts.app');
})->name('mentorat');

Route::get('/documentaire', function () {
    return view('layouts.app');
})->name('documentaire');

Route::get('/safe', function () {
    return view('layouts.app');
})->name('safe');

Route::get('/dispositifs-safe', function () {
    return view('layouts.app');
})->name('dispositifs-safe');

Route::get('/sensibilisation', function () {
    return view('layouts.app');
})->name('sensibilisation');

Route::get('/brigadedulove', function () {
    return view('layouts.app');
})->name('brigadedulove');

Route::get('/reseau', function () {
    return view('layouts.app');
})->name('reseau');

Route::get('/charte', function () {
    return view('layouts.app');
})->name('charte');

Route::get('/medias', function () {
    return view('layouts.app');
})->name('medias');