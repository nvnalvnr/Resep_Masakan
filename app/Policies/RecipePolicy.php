<?php

namespace App\Policies;

use App\Models\Recipe;
use App\Models\User;

class RecipePolicy
{
    /**
     * Admin boleh melakukan semua aksi terhadap resep.
     */
    public function before(User $user, string $ability): ?bool
    {
        if ($user->role === 'admin') {
            return true;
        }

        return null;
    }


    /**
     * User boleh melihat resep.
     */
    public function view(User $user, Recipe $recipe): bool
    {
        return true;
    }


    /**
     * User boleh membuat resep.
     */
    public function create(User $user): bool
    {
        return true;
    }


    /**
     * User hanya boleh mengubah resep miliknya.
     */
    public function update(User $user, Recipe $recipe): bool
    {
        return $recipe->user_id === $user->id;
    }


    /**
     * User hanya boleh menghapus resep miliknya.
     */
    public function delete(User $user, Recipe $recipe): bool
    {
        return $recipe->user_id === $user->id;
    }
}