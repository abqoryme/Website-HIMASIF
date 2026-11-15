<?php

namespace Tests\Feature;

use Tests\TestCase;

class StrukturTest extends TestCase
{
    public function test_halaman_struktur_tampil_dengan_data_periode(): void
    {
        // Entry Vite baru belum ada di manifest sebelum `npm run build`.
        $this->withoutVite();

        $response = $this->get(route('pages.struktur'));

        $response->assertOk();
        $response->assertSee('Di Balik', false);
        $response->assertSee('HIMASIF_STRUKTUR_PERIODE', false);
        $response->assertSee('Muhammad Irham', false);
        // Foto di config diubah jadi URL penuh oleh controller (img_asset()).
        $response->assertSee('hero_logo/HIMASIF.webp', false);
    }
}
