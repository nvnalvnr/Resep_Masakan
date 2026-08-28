<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /*
    |--------------------------------------------------------------------------
    | HALAMAN UTAMA
    |--------------------------------------------------------------------------
    |
    | Memastikan halaman utama ResepKu dapat dibuka
    | tanpa menghasilkan error.
    |
    */

    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
