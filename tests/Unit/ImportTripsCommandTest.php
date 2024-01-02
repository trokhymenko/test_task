<?php

namespace Tests\Unit;

use Tests\TestCase;

class ImportTripsCommandTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_console_command(): void
    {
        $this->artisan('import-trips')->assertSuccessful();
    }
}
