<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\User;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'ingredients',
        'steps',
        'image',
        'user_id',
    ];

    /*
    |--------------------------------------------------------------------------
    | BUAT SLUG OTOMATIS
    |--------------------------------------------------------------------------
    */

    protected static function booted(): void
    {
        static::creating(function (Recipe $recipe) {

            $recipe->slug =
                static::generateUniqueSlug($recipe->title);

        });
    }


    /*
    |--------------------------------------------------------------------------
    | GENERATE SLUG UNIK
    |--------------------------------------------------------------------------
    */

    protected static function generateUniqueSlug(string $title): string
    {
        $slug = Str::slug($title);

        $original = $slug;

        $count = 1;

        while (static::where('slug', $slug)->exists()) {

            $slug = $original . '-' . $count;

            $count++;
        }

        return $slug;
    }


    /*
    |--------------------------------------------------------------------------
    | URL GAMBAR
    |--------------------------------------------------------------------------
    */

    public function imageUrl(): ?string
    {
        if (!$this->image) {
            return null;
        }

        /*
        | Kalau image sudah berupa URL
        | contoh:
        | https://images.unsplash.com/...
        |
        | langsung gunakan URL tersebut.
        */

        if (
            Str::startsWith(
                trim($this->image),
                ['http://', 'https://']
            )
        ) {
            return trim($this->image);
        }


        /*
        | Kalau image berupa path storage
        | contoh:
        | recipes/nasi-goreng.jpg
        |
        | gunakan storage Laravel.
        */

        return asset(
            'storage/' . ltrim($this->image, '/')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | RELASI USER
    |--------------------------------------------------------------------------
    */

    public function user()
    {
        return $this->belongsTo(
            User::class,
            'user_id'
        );
    }
}