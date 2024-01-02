<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\CreatesApplication;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_home_page(): void
    {
        // Run the DatabaseSeeder...
        $this->seed();

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
