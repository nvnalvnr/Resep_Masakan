<?php

namespace Tests\Feature\Api;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthApiTest extends TestCase
{
    use RefreshDatabase;

    /*
    |--------------------------------------------------------------------------
    | LOGIN BERHASIL
    |--------------------------------------------------------------------------
    */

    public function test_user_bisa_login_lewat_api_dan_dapat_token(): void
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
        ]);

        $response = $this->postJson('/api/login', [
            'email' => 'test@example.com',
            'password' => 'password123',
        ]);

        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
            ])
            ->assertJsonStructure([
                'data' => [
                    'user',
                    'token',
                ],
            ]);
    }

    /*
    |--------------------------------------------------------------------------
    | EMAIL TIDAK TERDAFTAR
    |--------------------------------------------------------------------------
    */

    public function test_login_gagal_kalau_email_tidak_terdaftar(): void
    {
        $response = $this->postJson('/api/login', [
            'email' => 'gaada@example.com',
            'password' => 'password123',
        ]);

        $response->assertStatus(401)
            ->assertJson(['success' => false]);
    }

    /*
    |--------------------------------------------------------------------------
    | PASSWORD SALAH
    |--------------------------------------------------------------------------
    */

    public function test_login_gagal_kalau_password_salah(): void
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
        ]);

        $response = $this->postJson('/api/login', [
            'email' => 'test@example.com',
            'password' => 'password-salah',
        ]);

        $response->assertStatus(401)
            ->assertJson(['success' => false]);
    }

    /*
    |--------------------------------------------------------------------------
    | VALIDASI FIELD KOSONG
    |--------------------------------------------------------------------------
    */

    public function test_login_gagal_kalau_email_atau_password_kosong(): void
    {
        $response = $this->postJson('/api/login', [
            'email' => '',
            'password' => '',
        ]);

        $response->assertStatus(422);
    }

    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    public function test_user_bisa_logout_dan_token_jadi_tidak_valid(): void
    {
        $user = User::factory()->create();
        $token = $user->createToken('test-token')->plainTextToken;

        $response = $this->withHeader('Authorization', 'Bearer ' . $token)
            ->postJson('/api/logout');

        $response->assertStatus(200)
            ->assertJson(['success' => true]);

        $this->assertDatabaseCount('personal_access_tokens', 0);
    }

    /*
    |--------------------------------------------------------------------------
    | LOGOUT TANPA TOKEN
    |--------------------------------------------------------------------------
    */

    public function test_logout_gagal_kalau_tidak_bawa_token(): void
    {
        $response = $this->postJson('/api/logout');

        $response->assertStatus(401);
    }
}
