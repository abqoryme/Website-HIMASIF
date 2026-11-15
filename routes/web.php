<?php

use App\Http\Controllers\StrukturController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

// Halaman yang sudah dimigrasikan (punya route/controller sendiri).
Route::get(config('site.pages.struktur.uri'), [StrukturController::class, 'index'])->name('pages.struktur');

// Halaman lain sementara memakai placeholder "segera hadir" sampai dimigrasikan.
// Saat sebuah halaman siap, tambahkan route-nya di atas lalu masukkan kuncinya ke $migrated.
$migrated = ['struktur'];

foreach (config('site.pages') as $name => $page) {
    if (in_array($name, $migrated, true)) {
        continue;
    }

    Route::view($page['uri'], 'pages.coming-soon', ['pageTitle' => $page['title']])
        ->name("pages.{$name}");
}
