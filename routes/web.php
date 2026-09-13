<?php

use Illuminate\Support\Facades\Route;

// public page 
Route::get('/', fn () => view('home'))->name('home'); // Tambahkan ->name('home') di sini
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/program', fn () => view('program'));
Route::get('/news', fn () => view('news'));
Route::get('/gallery', fn () => view('gallery'));
Route::get('/document', fn () => view('document'));
Route::get('/contact', fn () => view('contact'))->name('contact');


// user login & register
Route::get('/login', fn () => view('auth.login'))->name('login');
Route::get('/register', fn () => view('auth.register'))->name('register');

?>
