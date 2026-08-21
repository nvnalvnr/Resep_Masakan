<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'ingredients',
        'steps',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }

    public function imageUrl()
    {
        if (!$this->image) {
            return null;
        }

        // Kalau masih ada data lama berupa URL
        if (
            str_starts_with($this->image, 'http://') ||
            str_starts_with($this->image, 'https://')
        ) {
            return $this->image;
        }

        // Kalau gambar merupakan hasil upload
        return asset('storage/' . ltrim($this->image, '/'));
    }
}