<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReportPageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_report_page(): void
    {
        // Run the DatabaseSeeder...
        $this->seed();

        $response = $this->get('/report');

        $response->assertStatus(200);
    }
}
