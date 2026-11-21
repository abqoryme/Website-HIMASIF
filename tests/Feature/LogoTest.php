<?php

namespace Tests\Feature;

use Tests\TestCase;

class LogoTest extends TestCase
{
    public function test_halaman_logo_tampil(): void
    {
        // Entry Vite baru belum ada di manifest sebelum `npm run build`.
        $this->withoutVite();

        $response = $this->get(route('pages.logo'));

        $response->assertOk();
        $response->assertSee('Cerita di Balik Setiap', false);
        $response->assertSee('Makna di Balik Logo Kami', false);
        $response->assertSee('#0747B1', false);
        $response->assertSee('images/hero_logo/HIMASIF.webp', false);
    }
}
