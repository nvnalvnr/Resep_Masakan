<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Resep - Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="admin-recipes-body">
    <x-role-sidebar active="recipes" />

    <main class="admin-recipes-page role-sidebar-content">
        <section class="admin-recipes-heading">
            <div>
                <p class="admin-recipes-eyebrow">Manajemen Resep</p>
                <h1>Daftar Resep</h1>
                <p>Kelola seluruh resep yang dibuat oleh admin dan pengguna.</p>
            </div>

            <a href="{{ route('admin.recipes.create') }}" class="admin-recipes-add">
                <x-nav-icon name="add" />
                <span>Tambah Resep</span>
            </a>
        </section>

        @if(session('success'))
            <div class="admin-recipes-alert" role="status">{{ session('success') }}</div>
        @endif

        @if($recipes->count() > 0)
            <section class="admin-recipes-grid" aria-label="Daftar resep">
                @foreach($recipes as $recipe)
                    <article class="admin-recipe-card">
                        <div class="admin-recipe-media">
                            @if($recipe->imageUrl())
                                <img src="{{ $recipe->imageUrl() }}" alt="{{ $recipe->title }}" loading="lazy">
                            @else
                                <div class="admin-recipe-placeholder">
                                    <x-nav-icon name="image" width="34" height="34" />
                                    <span>Belum ada gambar</span>
                                </div>
                            @endif
                        </div>

                        <div class="admin-recipe-content">
                            <h2>{{ $recipe->title }}</h2>
                            <p class="admin-recipe-author">
                                <x-nav-icon name="profile" width="15" height="15" />
                                <span>{{ $recipe->user->name ?? 'User tidak tersedia' }}</span>
                            </p>

                            <div class="admin-recipe-actions">
                                <a href="{{ route('admin.recipes.show', $recipe) }}" class="view">
                                    <x-nav-icon name="view" width="16" height="16" />
                                    <span>Lihat</span>
                                </a>
                                <a href="{{ route('admin.recipes.edit', $recipe) }}" class="edit">
                                    <x-nav-icon name="edit" width="16" height="16" />
                                    <span>Edit</span>
                                </a>
                                <form method="POST" action="{{ route('admin.recipes.destroy', $recipe) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete">
                                        <x-nav-icon name="delete" width="16" height="16" />
                                        <span>Hapus</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </article>
                @endforeach
            </section>

            <div class="admin-recipes-pagination">{{ $recipes->links() }}</div>
        @else
            <section class="admin-recipes-empty">
                <x-nav-icon name="recipes" width="42" height="42" />
                <h2>Belum ada resep</h2>
                <p>Tambahkan resep pertama untuk mulai mengisi daftar.</p>
                <a href="{{ route('admin.recipes.create') }}">Tambah Resep</a>
            </section>
        @endif
    </main>
</body>
</html>
