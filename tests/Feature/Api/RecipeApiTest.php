<?php

namespace Tests\Feature\Api;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class RecipeApiTest extends TestCase
{
    use RefreshDatabase;

    /*
    |--------------------------------------------------------------------------
    | DAFTAR RESEP — PUBLIK
    |--------------------------------------------------------------------------
    */

    public function test_siapa_saja_bisa_lihat_daftar_resep_tanpa_login(): void
    {
        Recipe::factory()->count(3)->create();

        $response = $this->getJson('/api/recipes');

        $response->assertStatus(200)
            ->assertJson(['success' => true]);
    }

    public function test_daftar_resep_bisa_dicari_pakai_judul(): void
    {
        Recipe::factory()->create(['title' => 'Nasi Goreng Spesial']);
        Recipe::factory()->create(['title' => 'Sate Ayam']);

        $response = $this->getJson('/api/recipes?search=Nasi');

        $response->assertStatus(200);
        $titles = collect($response->json('data.data'))->pluck('title');
        $this->assertTrue($titles->contains('Nasi Goreng Spesial'));
        $this->assertFalse($titles->contains('Sate Ayam'));
    }

    /*
    |--------------------------------------------------------------------------
    | DETAIL RESEP — PUBLIK
    |--------------------------------------------------------------------------
    */

    public function test_siapa_saja_bisa_lihat_detail_resep_tanpa_login(): void
    {
        $recipe = Recipe::factory()->create();

        $response = $this->getJson('/api/recipes/' . $recipe->id);

        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
                'data' => ['id' => $recipe->id],
            ]);
    }

    public function test_detail_resep_404_kalau_id_tidak_ada(): void
    {
        $response = $this->getJson('/api/recipes/999999');

        $response->assertStatus(404)
            ->assertJson(['success' => false]);
    }

    /*
    |--------------------------------------------------------------------------
    | TAMBAH RESEP — WAJIB LOGIN
    |--------------------------------------------------------------------------
    */

    public function test_tambah_resep_gagal_kalau_belum_login(): void
    {
        $response = $this->postJson('/api/recipes', [
            'title' => 'Resep Baru',
            'ingredients' => 'Bahan A, Bahan B',
            'steps' => 'Langkah 1, Langkah 2',
        ]);

        $response->assertStatus(401);
    }

    public function test_user_login_bisa_tambah_resep(): void
    {
        $user = User::factory()->create();
        Sanctum::actingAs($user);

        $response = $this->postJson('/api/recipes', [
            'title' => 'Resep Baru',
            'ingredients' => 'Bahan A, Bahan B',
            'steps' => 'Langkah 1, Langkah 2',
        ]);

        $response->assertStatus(201)
            ->assertJson(['success' => true]);

        $this->assertDatabaseHas('recipes', [
            'title' => 'Resep Baru',
            'user_id' => $user->id,
        ]);
    }

    public function test_tambah_resep_gagal_kalau_judul_kosong(): void
    {
        $user = User::factory()->create();
        Sanctum::actingAs($user);

        $response = $this->postJson('/api/recipes', [
            'title' => '',
            'ingredients' => 'Bahan A',
            'steps' => 'Langkah 1',
        ]);

        $response->assertStatus(422);
    }

    /*
    |--------------------------------------------------------------------------
    | UBAH RESEP — MILIK SENDIRI
    |--------------------------------------------------------------------------
    */

    public function test_user_bisa_ubah_resep_miliknya_sendiri(): void
    {
        $user = User::factory()->create();
        $recipe = Recipe::factory()->create(['user_id' => $user->id]);
        Sanctum::actingAs($user);

        $response = $this->putJson('/api/recipes/' . $recipe->id, [
            'title' => 'Judul Diubah',
            'ingredients' => $recipe->ingredients,
            'steps' => $recipe->steps,
        ]);

        $response->assertStatus(200)
            ->assertJson(['success' => true]);

        $this->assertDatabaseHas('recipes', [
            'id' => $recipe->id,
            'title' => 'Judul Diubah',
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | UBAH RESEP — MILIK ORANG LAIN (HARUS DITOLAK)
    |--------------------------------------------------------------------------
    */

    public function test_user_tidak_bisa_ubah_resep_milik_orang_lain(): void
    {
        $owner = User::factory()->create();
        $recipe = Recipe::factory()->create(['user_id' => $owner->id]);

        $otherUser = User::factory()->create();
        Sanctum::actingAs($otherUser);

        $response = $this->putJson('/api/recipes/' . $recipe->id, [
            'title' => 'Coba Diubah Orang Lain',
            'ingredients' => $recipe->ingredients,
            'steps' => $recipe->steps,
        ]);

        $response->assertStatus(403)
            ->assertJson(['success' => false]);

        $this->assertDatabaseHas('recipes', [
            'id' => $recipe->id,
            'title' => $recipe->title,
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | ADMIN BOLEH UBAH RESEP SIAPA PUN
    |--------------------------------------------------------------------------
    */

    public function test_admin_bisa_ubah_resep_milik_siapa_saja(): void
    {
        $owner = User::factory()->create();
        $recipe = Recipe::factory()->create(['user_id' => $owner->id]);

        $admin = User::factory()->create(['role' => 'admin']);
        Sanctum::actingAs($admin);

        $response = $this->putJson('/api/recipes/' . $recipe->id, [
            'title' => 'Diubah Admin',
            'ingredients' => $recipe->ingredients,
            'steps' => $recipe->steps,
        ]);

        $response->assertStatus(200)
            ->assertJson(['success' => true]);
    }

    /*
    |--------------------------------------------------------------------------
    | HAPUS RESEP — MILIK SENDIRI VS ORANG LAIN
    |--------------------------------------------------------------------------
    */

    public function test_user_bisa_hapus_resep_miliknya_sendiri(): void
    {
        $user = User::factory()->create();
        $recipe = Recipe::factory()->create(['user_id' => $user->id]);
        Sanctum::actingAs($user);

        $response = $this->deleteJson('/api/recipes/' . $recipe->id);

        $response->assertStatus(200)
            ->assertJson(['success' => true]);

        $this->assertDatabaseMissing('recipes', ['id' => $recipe->id]);
    }

    public function test_user_tidak_bisa_hapus_resep_milik_orang_lain(): void
    {
        $owner = User::factory()->create();
        $recipe = Recipe::factory()->create(['user_id' => $owner->id]);

        $otherUser = User::factory()->create();
        Sanctum::actingAs($otherUser);

        $response = $this->deleteJson('/api/recipes/' . $recipe->id);

        $response->assertStatus(403);

        $this->assertDatabaseHas('recipes', ['id' => $recipe->id]);
    }

    public function test_hapus_resep_gagal_kalau_belum_login(): void
    {
        $recipe = Recipe::factory()->create();

        $response = $this->deleteJson('/api/recipes/' . $recipe->id);

        $response->assertStatus(401);

        $this->assertDatabaseHas('recipes', ['id' => $recipe->id]);
    }
}
