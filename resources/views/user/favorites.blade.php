<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Resep Tersimpan - ResepKu
    </title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f8f6f3;
            color: #292524;
        }

        a {
            text-decoration: none;
        }

        .layout {
            min-height: 100vh;
        }

        /* SIDEBAR */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;

            width: 245px;

            background: #ffffff;

            border-right: 1px solid #eee8e1;

            padding: 25px 18px;

            z-index: 10;
        }

        .brand {
            display: flex;
            align-items: center;

            gap: 10px;

            padding: 8px 10px 30px;
        }

        .brand-icon {
            width: 42px;
            height: 42px;

            background: #ffedd5;

            border-radius: 12px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 21px;
        }

        .brand-text h2 {
            font-size: 17px;
        }

        .brand-text span {
            display: block;

            color: #a8a29e;

            font-size: 10px;

            margin-top: 3px;
        }

        .menu-title {
            color: #a8a29e;

            font-size: 10px;

            font-weight: bold;

            letter-spacing: .8px;

            margin: 5px 10px 10px;

            text-transform: uppercase;
        }

        .menu {
            display: flex;

            flex-direction: column;

            gap: 5px;
        }

        .menu a {
            display: flex;

            align-items: center;

            gap: 11px;

            padding: 12px 13px;

            border-radius: 9px;

            color: #57534e;

            font-size: 13px;

            transition: .2s;
        }

        .menu a:hover {
            background: #fff7ed;

            color: #ea580c;
        }

        .menu a.active {
            background: #ffedd5;

            color: #ea580c;

            font-weight: 600;
        }

        .menu-icon {
            width: 22px;

            text-align: center;

            font-size: 16px;
        }

        /* SIDEBAR BOTTOM */

        .sidebar-bottom {
            position: absolute;

            left: 18px;
            right: 18px;

            bottom: 20px;
        }

        .profile-mini {
            display: flex;

            align-items: center;

            gap: 10px;

            padding: 11px;

            margin-bottom: 9px;

            background: #fafaf9;

            border: 1px solid #eee8e1;

            border-radius: 10px;
        }

        .avatar {
            width: 37px;
            height: 37px;

            flex-shrink: 0;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: #fed7aa;

            color: #9a3412;

            font-size: 13px;

            font-weight: bold;
        }

        .profile-info {
            min-width: 0;
        }

        .profile-info strong {
            display: block;

            font-size: 12px;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }

        .profile-info span {
            display: block;

            color: #a8a29e;

            font-size: 10px;

            margin-top: 3px;
        }

        .logout-btn {
            width: 100%;

            border: none;

            background: #fff1f2;

            color: #be123c;

            padding: 10px;

            border-radius: 8px;

            cursor: pointer;

            font-size: 12px;
        }

        .logout-btn:hover {
            background: #ffe4e6;
        }

        /* MAIN */

        .main {
            margin-left: 245px;

            padding: 30px 35px 50px;

            min-height: 100vh;
        }

        /* TOPBAR */

        .topbar {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 22px;
        }

        .topbar h1 {
            font-size: 25px;

            margin-bottom: 5px;
        }

        .topbar p {
            color: #a8a29e;

            font-size: 12px;
        }

        .date-box {
            background: white;

            border: 1px solid #eee8e1;

            border-radius: 9px;

            padding: 10px 13px;

            color: #78716c;

            font-size: 11px;
        }

        /* SUCCESS */

        .success-message {
            background: #f0fdf4;

            color: #15803d;

            border: 1px solid #bbf7d0;

            padding: 11px 14px;

            border-radius: 9px;

            margin-bottom: 18px;

            font-size: 12px;
        }

        /* HEADER */

        .page-header {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 22px;
        }

        .page-header h2 {
            font-size: 20px;

            margin-bottom: 5px;
        }

        .page-header p {
            color: #a8a29e;

            font-size: 12px;
        }

        .total-badge {
            background: #ffedd5;

            color: #ea580c;

            padding: 9px 13px;

            border-radius: 8px;

            font-size: 11px;

            font-weight: 600;
        }

        /* RECIPE GRID */

        .recipe-grid {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 18px;
        }

        .recipe-card {
            background: white;

            border: 1px solid #eee8e1;

            border-radius: 13px;

            overflow: hidden;

            transition: .2s;
        }

        .recipe-card:hover {
            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(0, 0, 0, .05);
        }

        .recipe-image {
            width: 100%;

            height: 190px;

            object-fit: cover;

            display: block;
        }

        .no-image {
            width: 100%;

            height: 190px;

            background: #fff7ed;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #a8a29e;

            font-size: 13px;
        }

        .recipe-content {
            padding: 17px;
        }

        .recipe-title {
            font-size: 15px;

            font-weight: 600;

            color: #292524;

            margin-bottom: 8px;

            display: block;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }

        .recipe-meta {
            color: #a8a29e;

            font-size: 11px;

            line-height: 1.6;

            margin-bottom: 14px;
        }

        .recipe-actions {
            display: flex;

            align-items: center;

            gap: 7px;
        }

        .view-button {
            flex: 1;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #ffedd5;

            color: #ea580c;

            padding: 9px;

            border-radius: 8px;

            font-size: 11px;

            font-weight: 600;
        }

        .view-button:hover {
            background: #fed7aa;
        }

        .remove-button {
            border: none;

            background: #fff1f2;

            color: #be123c;

            padding: 9px 11px;

            border-radius: 8px;

            cursor: pointer;

            font-size: 11px;
        }

        .remove-button:hover {
            background: #ffe4e6;
        }

        /* EMPTY */

        .empty-state {
            background: white;

            border: 1px solid #eee8e1;

            border-radius: 13px;

            padding: 60px 30px;

            text-align: center;
        }

        .empty-icon {
            width: 65px;

            height: 65px;

            margin: 0 auto 15px;

            border-radius: 50%;

            background: #fff7ed;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 27px;
        }

        .empty-state h3 {
            font-size: 17px;

            margin-bottom: 7px;
        }

        .empty-state p {
            color: #a8a29e;

            font-size: 12px;

            margin-bottom: 18px;
        }

        .browse-button {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            background: #ea580c;

            color: white;

            padding: 10px 15px;

            border-radius: 8px;

            font-size: 11px;

            font-weight: 600;
        }

        .browse-button:hover {
            background: #c2410c;
        }

        footer {
            text-align: center;

            padding: 25px 0 0;

            color: #a8a29e;

            font-size: 11px;
        }

        /* RESPONSIVE */

        @media (max-width: 1050px) {

            .recipe-grid {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }

        }

        @media (max-width: 750px) {

            .sidebar {
                width: 70px;

                padding: 18px 10px;
            }

            .brand {
                justify-content: center;

                padding-bottom: 25px;
            }

            .brand-text,
            .menu-title,
            .menu a span:not(.menu-icon),
            .sidebar-bottom {
                display: none;
            }

            .menu a {
                justify-content: center;
            }

            .main {
                margin-left: 70px;

                padding: 22px 18px;
            }

            .recipe-grid {
                grid-template-columns: 1fr;
            }

        }

        @media (max-width: 550px) {

            .topbar {
                display: block;
            }

            .date-box {
                display: none;
            }

            .page-header {
                display: block;
            }

            .total-badge {
                display: inline-block;

                margin-top: 12px;
            }

        }

    </style>

</head>


<body>

<div class="layout">


    {{-- SIDEBAR --}}

    <aside class="sidebar">

        <div class="brand">

            <div class="brand-icon">
                🍳
            </div>

            <div class="brand-text">

                <h2>
                    ResepKu
                </h2>

                <span>
                    Website Resep Masakan
                </span>

            </div>

        </div>


        <div class="menu-title">
            Menu Utama
        </div>


        <nav class="menu">

            <a href="{{ route('user.dashboard') }}">

                <span class="menu-icon">
                    🏠
                </span>

                <span>
                    Dashboard
                </span>

            </a>


            <a href="{{ route('user.recipes') }}">

                <span class="menu-icon">
                    🍲
                </span>

                <span>
                    Resep Saya
                </span>

            </a>


            <a
                href="{{ route('user.favorites') }}"
                class="active"
            >

                <span class="menu-icon">
                    ♥
                </span>

                <span>
                    Resep Tersimpan
                </span>

            </a>


            <a href="{{ route('recipes.create') }}">

                <span class="menu-icon">
                    ＋
                </span>

                <span>
                    Tambah Resep
                </span>

            </a>


            <a href="{{ route('profile.edit') }}">

                <span class="menu-icon">
                    ○
                </span>

                <span>
                    Profil
                </span>

            </a>

        </nav>


        {{-- USER --}}

        <div class="sidebar-bottom">

            <div class="profile-mini">

                <div class="avatar">

                    {{ strtoupper(substr($user->name, 0, 1)) }}

                </div>

                <div class="profile-info">

                    <strong>
                        {{ $user->name }}
                    </strong>

                    <span>
                        User
                    </span>

                </div>

            </div>


            <form
                method="POST"
                action="{{ route('logout') }}"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-btn"
                >
                    🚪 Keluar
                </button>

            </form>

        </div>

    </aside>


    {{-- MAIN --}}

    <main class="main">


        {{-- TOPBAR --}}

        <div class="topbar">

            <div>

                <h1>
                    Resep Tersimpan
                </h1>

                <p>
                    Kumpulan resep yang kamu simpan untuk dimasak nanti.
                </p>

            </div>


            <div class="date-box">

                📅
                {{ now()->format('d M Y') }}

            </div>

        </div>


        {{-- SUCCESS MESSAGE --}}

        @if(session('success'))

            <div class="success-message">

                ✓ {{ session('success') }}

            </div>

        @endif


        {{-- PAGE HEADER --}}

        <div class="page-header">

            <div>

                <h2>
                    Koleksi Resep
                </h2>

                <p>
                    Resep favorit yang sudah kamu simpan.
                </p>

            </div>


            <div class="total-badge">

                ♥ {{ $favorites->count() }} Resep

            </div>

        </div>


        {{-- ADA FAVORITE --}}

        @if($favorites->count() > 0)

            <div class="recipe-grid">

                @foreach($favorites as $favorite)

                    @if($favorite->recipe)

                        <div class="recipe-card">


                            {{-- GAMBAR --}}

                            @if($favorite->recipe->image)

                                <img
                                    src="{{ $favorite->recipe->imageUrl() }}"
                                    alt="{{ $favorite->recipe->title }}"
                                    class="recipe-image"
                                >

                            @else

                                <div class="no-image">

                                    🍽️

                                    &nbsp;

                                    Tidak ada gambar

                                </div>

                            @endif


                            {{-- CONTENT --}}

                            <div class="recipe-content">


                                <a
                                    href="{{ route('recipes.show', $favorite->recipe->slug) }}"
                                    class="recipe-title"
                                >

                                    {{ $favorite->recipe->title }}

                                </a>


                                <div class="recipe-meta">

                                    👨‍🍳
                                    {{ $favorite->recipe->user->name ?? 'Pengguna' }}

                                    <br>

                                    📅
                                    {{ $favorite->recipe->created_at?->format('d M Y') ?? '-' }}

                                </div>


                                <div class="recipe-actions">


                                    {{-- LIHAT --}}

                                    <a
                                        href="{{ route('recipes.show', $favorite->recipe->slug) }}"
                                        class="view-button"
                                    >
                                        👀 Lihat Resep
                                    </a>


                                    {{-- HAPUS FAVORITE --}}

                                    <form
                                        method="POST"
                                        action="{{ route('recipe.favorite', $favorite->recipe->id) }}"
                                        style="margin:0;"
                                    >

                                        @csrf

                                        <button
                                            type="submit"
                                            class="remove-button"
                                            title="Hapus dari resep tersimpan"
                                        >
                                            ♥
                                        </button>

                                    </form>

                                </div>

                            </div>

                        </div>

                    @endif

                @endforeach

            </div>


        {{-- BELUM ADA FAVORITE --}}

        @else

            <div class="empty-state">

                <div class="empty-icon">
                    ♡
                </div>


                <h3>
                    Belum Ada Resep Tersimpan
                </h3>


                <p>
                    Kamu belum menyimpan resep apa pun.
                    Yuk cari resep yang ingin kamu masak.
                </p>


                <a
                    href="{{ route('recipes.index') }}"
                    class="browse-button"
                >
                    🍲 Cari Resep
                </a>

            </div>

        @endif


        <footer>

            © {{ date('Y') }} ResepKu.
            Website Resep Masakan.

        </footer>


    </main>

</div>

</body>

</html>