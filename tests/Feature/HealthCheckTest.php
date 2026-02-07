<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HealthCheckTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_application_is_running(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
