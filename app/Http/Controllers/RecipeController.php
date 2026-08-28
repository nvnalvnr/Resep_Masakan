<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RecipeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HOMEPAGE
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {
        $search = trim(
            $request->input('search', '')
        );

        $recipes = Recipe::with('user')
            ->when(
                $search !== '',
                function ($query) use ($search) {
                    $query->where(
                        'title',
                        'like',
                        '%' . $search . '%'
                    );
                }
            )
            ->latest()
            ->paginate(9)
            ->withQueryString();

        return view(
            'recipes.index',
            compact('recipes')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | RESEP SAYA
    |--------------------------------------------------------------------------
    */

    public function my()
    {
        $recipes = Recipe::where(
                'user_id',
                Auth::id()
            )
            ->latest()
            ->paginate(9);

        return view(
            'recipes.my',
            compact('recipes')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | TAMBAH RESEP
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        $this->authorize('create', Recipe::class);

        return view('recipes.create');
    }


    /*
    |--------------------------------------------------------------------------
    | SIMPAN RESEP
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $this->authorize('create', Recipe::class);

        $validated = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
            ],

            'ingredients' => [
                'required',
                'string',
            ],

            'steps' => [
                'required',
                'string',
            ],

            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | SLUG
        |--------------------------------------------------------------------------
        */

        $slug = Str::slug(
            $validated['title']
        );

        if ($slug === '') {
            $slug = 'resep';
        }

        $slug = $this->generateUniqueSlug(
            $slug
        );


        /*
        |--------------------------------------------------------------------------
        | GAMBAR
        |--------------------------------------------------------------------------
        */

        $imagePath = null;

        if ($request->hasFile('image')) {

            $imagePath = $request
                ->file('image')
                ->store(
                    'recipes',
                    'public'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | SIMPAN RESEP
        |--------------------------------------------------------------------------
        */

        Recipe::create([
            'user_id' => Auth::id(),
            'title' => $validated['title'],
            'slug' => $slug,
            'ingredients' => $validated['ingredients'],
            'steps' => $validated['steps'],
            'image' => $imagePath,
        ]);


        return redirect()
            ->route('recipes.my')
            ->with(
                'success',
                'Resep berhasil ditambahkan.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | DETAIL RESEP
    |--------------------------------------------------------------------------
    */

    public function show($slug)
    {
        $recipe = Recipe::with('user')
            ->where(
                'slug',
                $slug
            )
            ->firstOrFail();

        return view(
            'recipes.show',
            compact('recipe')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | EDIT RESEP
    |--------------------------------------------------------------------------
    */

    public function edit($slug)
    {
        $recipe = Recipe::where(
                'slug',
                $slug
            )
            ->firstOrFail();


        /*
        | Policy:
        | User hanya boleh edit resep miliknya.
        | Admin diizinkan melalui before().
        */

        $this->authorize(
            'update',
            $recipe
        );


        return view(
            'recipes.edit',
            compact('recipe')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | UPDATE RESEP
    |--------------------------------------------------------------------------
    */

    public function update(
        Request $request,
        $slug
    ) {
        $recipe = Recipe::where(
                'slug',
                $slug
            )
            ->firstOrFail();


        /*
        | Policy:
        | User hanya boleh update resep miliknya.
        | Admin diizinkan melalui before().
        */

        $this->authorize(
            'update',
            $recipe
        );


        /*
        |--------------------------------------------------------------------------
        | VALIDASI
        |--------------------------------------------------------------------------
        */

        $validated = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
            ],

            'ingredients' => [
                'required',
                'string',
            ],

            'steps' => [
                'required',
                'string',
            ],

            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | SLUG BARU
        |--------------------------------------------------------------------------
        */

        $newSlug = Str::slug(
            $validated['title']
        );

        if ($newSlug === '') {
            $newSlug = 'resep';
        }


        if ($newSlug !== $recipe->slug) {

            $newSlug = $this->generateUniqueSlug(
                $newSlug,
                $recipe->id
            );

        } else {

            $newSlug = $recipe->slug;
        }


        /*
        |--------------------------------------------------------------------------
        | GAMBAR
        |--------------------------------------------------------------------------
        */

        $imagePath = $recipe->image;

        if ($request->hasFile('image')) {


            /*
            | Hapus gambar lama jika file lokal.
            */

            if (
                $recipe->image &&
                !str_starts_with(
                    $recipe->image,
                    'http://'
                ) &&
                !str_starts_with(
                    $recipe->image,
                    'https://'
                )
            ) {

                Storage::disk('public')
                    ->delete(
                        $recipe->image
                    );
            }


            /*
            | Simpan gambar baru.
            */

            $imagePath = $request
                ->file('image')
                ->store(
                    'recipes',
                    'public'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | UPDATE
        |--------------------------------------------------------------------------
        */

        $recipe->update([
            'title' => $validated['title'],
            'slug' => $newSlug,
            'ingredients' => $validated['ingredients'],
            'steps' => $validated['steps'],
            'image' => $imagePath,
        ]);


        return redirect()
            ->route(
                'recipes.show',
                $recipe->slug
            )
            ->with(
                'success',
                'Resep berhasil diperbarui.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | HAPUS RESEP
    |--------------------------------------------------------------------------
    */

    public function destroy($slug)
    {
        $recipe = Recipe::where(
                'slug',
                $slug
            )
            ->firstOrFail();


        /*
        | Policy:
        | User hanya boleh hapus resep miliknya.
        | Admin diizinkan melalui before().
        */

        $this->authorize(
            'delete',
            $recipe
        );


        /*
        |--------------------------------------------------------------------------
        | HAPUS GAMBAR
        |--------------------------------------------------------------------------
        */

        if (
            $recipe->image &&
            !str_starts_with(
                $recipe->image,
                'http://'
            ) &&
            !str_starts_with(
                $recipe->image,
                'https://'
            )
        ) {

            Storage::disk('public')
                ->delete(
                    $recipe->image
                );
        }


        /*
        |--------------------------------------------------------------------------
        | HAPUS RESEP
        |--------------------------------------------------------------------------
        */

        $recipe->delete();


        return redirect()
            ->route('recipes.my')
            ->with(
                'success',
                'Resep berhasil dihapus.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | GENERATE UNIQUE SLUG
    |--------------------------------------------------------------------------
    */

    private function generateUniqueSlug(
        string $slug,
        ?int $exceptId = null
    ): string {

        $originalSlug = $slug;

        $counter = 1;


        while (
            Recipe::where(
                'slug',
                $slug
            )
            ->when(
                $exceptId !== null,
                function ($query) use ($exceptId) {

                    $query->where(
                        'id',
                        '!=',
                        $exceptId
                    );

                }
            )
            ->exists()
        ) {

            $slug =
                $originalSlug .
                '-' .
                $counter;

            $counter++;
        }


        return $slug;
    }
}
