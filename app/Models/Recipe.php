<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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


    /*
    |--------------------------------------------------------------------------
    | USER PEMILIK RESEP
    |--------------------------------------------------------------------------
    */

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    /*
    |--------------------------------------------------------------------------
    | URL GAMBAR
    |--------------------------------------------------------------------------
    */

    public function imageUrl()
    {
        if (!$this->image) {
            return null;
        }

        return $this->image;
    }
}