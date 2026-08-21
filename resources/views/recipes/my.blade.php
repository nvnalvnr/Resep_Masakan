<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resep Saya | ResepKu</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f6f6f4;
            color: #292929;
        }

        a {
            text-decoration: none;
        }

        button {
            font-family: inherit;
        }

        .layout {
            min-height: 100vh;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            width: 240px;
            background: #fff;
            border-right: 1px solid #e3e3e3;
            padding: 28px 18px;
            z-index: 20;
        }

        .brand {
            padding: 0 14px;
            margin-bottom: 42px;
        }

        .brand a {
            color: #e85d04;
            font-size: 25px;
            font-weight: 700;
        }

        .brand small {
            display: block;
            color: #999;
            font-size: 11px;
            margin-top: 5px;
        }

        .menu-label {
            color: #999;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .8px;
            text-transform: uppercase;
            margin: 0 14px 10px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 12px 14px;
            color: #606060;
            border-radius: 7px;
            font-size: 13px;
            transition: .2s;
        }

        .menu a:hover {
            background: #f7f7f7;
            color: #e85d04;
        }

        .menu a.active {
            background: #fff1e8;
            color: #e85d04;
            font-weight: 600;
        }

        .menu-icon {
            width: 18px;
            min-width: 18px;
            text-align: center;
            font-size: 14px;
        }

        .main {
            margin-left: 240px;
            min-height: 100vh;
        }

        .topbar {
            height: 72px;
            background: #fff;
            border-bottom: 1px solid #e3e3e3;
            padding: 0 34px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .page-name {
            font-size: 18px;
            font-weight: 600;
        }

        .user-area {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .user-info {
            text-align: right;
        }

        .user-name {
            display: block;
            font-size: 13px;
            color: #444;
        }

        .user-role {
            display: block;
            color: #999;
            font-size: 10px;
            margin-top: 2px;
        }

        .avatar {
            width: 37px;
            height: 37px;
            background: #e85d04;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 600;
        }

        .content {
            padding: 30px 34px 50px;
            max-width: 1250px;
        }

        .success {
            background: #edf8f0;
            border: 1px solid #cce8d2;
            color: #26733b;
            border-radius: 6px;
            padding: 12px 15px;
            font-size: 12px;
            margin-bottom: 20px;
        }

        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 25px;
        }

        .page-header h1 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .page-header p {
            color: #888;
            font-size: 12px;
        }

        .add-button {
            display: inline-block;
            background: #e85d04;
            color: #fff;
            padding: 10px 15px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
        }

        .add-button:hover {
            background: #d65300;
        }

        .recipe-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .recipe-card {
            background: #fff;
            border: 1px solid #e3e3e3;
            border-radius: 9px;
            overflow: hidden;
            transition: .2s;
        }

        .recipe-card:hover {
            border-color: #ccc;
            transform: translateY(-2px);
        }

        .recipe-image {
            height: 175px;
            background: #eee;
            overflow: hidden;
        }

        .recipe-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .no-image {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 12px;
        }

        .recipe-content {
            padding: 17px;
        }

        .recipe-content h2 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .recipe-date {
            color: #999;
            font-size: 11px;
            margin-bottom: 16px;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .btn {
            display: inline-block;
            padding: 8px 11px;
            border-radius: 5px;
            font-size: 11px;
            font-weight: 600;
            border: none;
        }

        .btn-view {
            background: #f5f5f5;
            color: #444;
        }

        .btn-edit {
            background: #fff1e8;
            color: #e85d04;
        }

        .btn-delete {
            background: #fff0f0;
            color: #c62828;
            cursor: pointer;
        }

        .btn:hover {
            opacity: .8;
        }

        .empty {
            background: #fff;
            border: 1px solid #e3e3e3;
            border-radius: 9px;
            padding: 60px 20px;
            text-align: center;
        }

        .empty h2 {
            font-size: 18px;
            margin-bottom: 8px;
        }

        .empty p {
            color: #999;
            font-size: 12px;
            margin-bottom: 20px;
        }

        .pagination {
            margin-top: 25px;
        }

        @media (max-width: 1000px) {
            .recipe-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 750px) {

            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
                border-right: none;
                border-bottom: 1px solid #e3e3e3;
            }

            .main {
                margin-left: 0;
            }

            .content {
                padding: 22px 18px;
            }

            .topbar {
                padding: 0 18px;
            }

            .page-header {
                align-items: flex-start;
                gap: 15px;
                flex-direction: column;
            }

            .recipe-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="layout">

    <aside class="sidebar">

        <div class="brand">

            <a href="{{ route('user.dashboard') }}">
                ResepKu
            </a>

            <small>
                Website Resep Masakan
            </small>

        </div>

        <div class="menu-label">
            Menu Utama
        </div>

        <nav class="menu">

            <a href="{{ route('user.dashboard') }}">
                <span class="menu-icon">⌂</span>
                Dashboard
            </a>

            <a href="{{ route('recipes.my') }}" class="active">
                <span class="menu-icon">▣</span>
                Resep Saya
            </a>

            <a href="{{ route('recipes.create') }}">
                <span class="menu-icon">＋</span>
                Tambah Resep
            </a>

            <a href="{{ route('profile.edit') }}">
                <span class="menu-icon">○</span>
                Profil
            </a>

        </nav>

    </aside>


    <main class="main">

        <header class="topbar">

            <div class="page-name">
                Resep Saya
            </div>

            <div class="user-area">

                <div class="user-info">

                    <span class="user-name">
                        {{ auth()->user()->name }}
                    </span>

                    <span class="user-role">
                        User
                    </span>

                </div>

                <div class="avatar">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>

            </div>

        </header>


        <section class="content">

            @if (session('success'))

                <div class="success">
                    {{ session('success') }}
                </div>

            @endif


            <div class="page-header">

                <div>

                    <h1>
                        Resep Saya
                    </h1>

                    <p>
                        Kelola resep masakan yang kamu buat.
                    </p>

                </div>

                <a
                    href="{{ route('recipes.create') }}"
                    class="add-button"
                >
                    + Tambah Resep
                </a>

            </div>


            @if ($recipes->count() > 0)

                <div class="recipe-grid">

                    @foreach ($recipes as $recipe)

                        <div class="recipe-card">

                            <div class="recipe-image">

                                @if ($recipe->image)

                                    <img
                                        src="{{ $recipe->image }}"
                                        alt="{{ $recipe->title }}"
                                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                                    >

                                    <div class="no-image" style="display:none;">
                                        Gambar tidak dapat dimuat
                                    </div>

                                @else

                                    <div class="no-image">
                                        Tidak ada gambar
                                    </div>

                                @endif

                            </div>


                            <div class="recipe-content">

                                <h2>
                                    {{ $recipe->title }}
                                </h2>

                                <div class="recipe-date">
                                    Dibuat {{ $recipe->created_at->format('d M Y') }}
                                </div>


                                <div class="actions">

                                    <a
                                        href="{{ route('recipes.show', $recipe->slug) }}"
                                        class="btn btn-view"
                                    >
                                        Lihat
                                    </a>

                                    <a
                                        href="{{ route('recipes.edit', $recipe->slug) }}"
                                        class="btn btn-edit"
                                    >
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('recipes.destroy', $recipe->slug) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus resep ini?')"
                                        style="margin:0;"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-delete"
                                        >
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>


                <div class="pagination">
                    {{ $recipes->links() }}
                </div>

            @else

                <div class="empty">

                    <h2>
                        Belum ada resep
                    </h2>

                    <p>
                        Kamu belum memiliki resep.
                        Yuk, tambahkan resep pertama kamu.
                    </p>

                    <a
                        href="{{ route('recipes.create') }}"
                        class="add-button"
                    >
                        + Tambah Resep
                    </a>

                </div>

            @endif

        </section>

    </main>

</div>

</body>

</html>