<?php

namespace App\Policies;

use App\Models\Recipe;
use App\Models\User;

class RecipePolicy
{
    /**
     * Menentukan apakah user boleh melihat daftar resep.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Menentukan apakah user boleh melihat detail resep.
     */
    public function view(User $user, Recipe $recipe): bool
    {
        return true;
    }

    /**
     * Menentukan apakah user boleh membuat resep.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Menentukan apakah user boleh mengubah resep.
     */
    public function update(User $user, Recipe $recipe): bool
    {
        return $user->role === 'admin'
            || $user->id === $recipe->user_id;
    }

    /**
     * Menentukan apakah user boleh menghapus resep.
     */
    public function delete(User $user, Recipe $recipe): bool
    {
        return $user->role === 'admin'
            || $user->id === $recipe->user_id;
    }
}