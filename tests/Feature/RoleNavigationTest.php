<?php

namespace Tests\Feature;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoleNavigationTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_redirects_each_role_to_the_correct_dashboard(): void
    {
        $user = User::factory()->create(['role' => 'user']);
        $admin = User::factory()->create(['role' => 'admin']);

        $this->actingAs($user)
            ->get(route('dashboard'))
            ->assertRedirect(route('user.dashboard'));

        $this->actingAs($admin)
            ->get(route('dashboard'))
            ->assertRedirect(route('admin.dashboard'));
    }

    public function test_admin_recipe_pages_and_user_edit_page_are_available(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $user = User::factory()->create(['role' => 'user']);
        $recipe = Recipe::factory()->for($user)->create();

        $this->actingAs($admin)->get(route('admin.dashboard'))->assertOk();
        $this->actingAs($admin)->get(route('admin.recipes.index'))->assertOk();
        $this->actingAs($admin)->get(route('admin.recipes.create'))->assertOk();
        $this->actingAs($admin)->get(route('admin.recipes.show', $recipe))->assertOk();
        $this->actingAs($admin)->get(route('admin.recipes.edit', $recipe))->assertOk();
        $this->actingAs($admin)->get(route('admin.users.edit', $user))->assertOk();
    }

    public function test_normal_user_cannot_open_admin_pages(): void
    {
        $user = User::factory()->create(['role' => 'user']);

        $this->actingAs($user)
            ->get(route('admin.dashboard'))
            ->assertForbidden();
    }
}
