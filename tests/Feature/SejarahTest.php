<?php

namespace Tests\Feature;

use Tests\TestCase;

class SejarahTest extends TestCase
{
    public function test_halaman_sejarah_tampil(): void
    {
        // Entry Vite baru belum ada di manifest sebelum `npm run build`.
        $this->withoutVite();

        $response = $this->get(route('pages.sejarah'));

        $response->assertOk();
        $response->assertSee('Menelusuri Jejak', false);
        $response->assertSee('Jejak Kepengurusan HIMASIF', false);
        $response->assertSee('tk-sj-tree', false);
        $response->assertSee('images/hero_logo/HIMASIF.webp', false);
    }
}
