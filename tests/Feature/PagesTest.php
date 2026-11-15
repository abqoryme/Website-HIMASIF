<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // Test tidak butuh hasil build Vite.
        $this->withoutVite();
    }

    public function test_home_page_renders(): void
    {
        $this->get(route('home'))
            ->assertOk()
            ->assertSee(config('site.full_name'));
    }

    public function test_every_registered_page_renders(): void
    {
        foreach (array_keys(config('site.pages')) as $name) {
            $this->get(route("pages.{$name}"))->assertOk();
        }
    }
}
