<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class StrukturController extends Controller
{
    public function index(): View
    {
        $periode = config('struktur.periode');

        // Nama file foto di config -> URL penuh (public/images/ via img_asset()). Foto kosong dibiarkan
        // supaya JS menampilkan inisial.
        array_walk_recursive($periode, static function (&$value, $key): void {
            if ($key === 'foto' && is_string($value) && $value !== '') {
                $value = img_asset($value);
            }
        });

        return view('pages.struktur', ['periode' => $periode]);
    }
}
