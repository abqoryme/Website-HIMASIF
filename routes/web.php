<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'));
Route::get('/about', fn () => view('about'));
Route::get('/program', fn () => view('program'));
Route::get('/news', fn () => view('news'));
Route::get('/gallery', fn () => view('gallery'));
Route::get('/document', fn () => view('document'));
Route::get('/contact', fn () => view('contact'));
