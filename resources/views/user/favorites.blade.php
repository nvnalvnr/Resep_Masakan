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

        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;

            width: 240px;

            background: #ffffff;

            border-right: 1px solid #e3e3e3;

            padding: 28px 18px;

            z-index: 50;

            display: flex;

            flex-direction: column;
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
            width: 20px;

            min-width: 20px;

            text-align: center;

            font-size: 16px;
        }

        /* =====================================================
           SIDEBAR BOTTOM
        ===================================================== */

        .sidebar-bottom {
            margin-top: auto;

            padding-top: 18px;

            border-top: 1px solid #eeeeee;
        }

        .profile-box {
            display: flex;

            align-items: center;

            gap: 10px;

            padding: 8px 10px;

            margin-bottom: 8px;
        }

        .avatar {
            width: 37px;

            height: 37px;

            background: #e85d04;

            color: #ffffff;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 13px;

            font-weight: 600;

            flex-shrink: 0;
        }

        .profile-info {
            min-width: 0;
        }

        .profile-name {
            font-size: 12px;

            font-weight: 600;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }

        .profile-role {
            color: #999;

            font-size: 10px;

            margin-top: 3px;
        }

        .logout-button {
            width: 100%;

            border: none;

            background: #fff1f2;

            color: #be123c;

            padding: 10px;

            border-radius: 7px;

            cursor: pointer;

            font-size: 12px;

            text-align: left;
        }

        .logout-button:hover {
            background: #ffe4e6;
        }

        /* =====================================================
           MAIN
        ===================================================== */

        .main {
            margin-left: 240px;

            min-height: 100vh;
        }

        /* =====================================================
           TOPBAR
        ===================================================== */

        .topbar {
            height: 72px;

            background: #ffffff;

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

        /* =====================================================
           CONTENT
        ===================================================== */

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

        .total-badge {
            background: #fff1e8;

            color: #e85d04;

            padding: 9px 13px;

            border-radius: 6px;

            font-size: 11px;

            font-weight: 600;
        }

        /* =====================================================
           RECIPE GRID
        ===================================================== */

        .recipe-grid {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 18px;
        }

        .recipe-card {
            background: #ffffff;

            border: 1px solid #e3e3e3;

            border-radius: 9px;

            overflow: hidden;

            transition: .2s;
        }

        .recipe-card:hover {
            transform: translateY(-2px);

            border-color: #fed7aa;
        }

        .recipe-image {
            width: 100%;

            height: 175px;

            background: #eeeeee;

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

        .recipe-title {
            display: block;

            color: #292929;

            font-size: 15px;

            font-weight: 600;

            line-height: 1.4;

            margin-bottom: 7px;
        }

        .recipe-title:hover {
            color: #e85d04;
        }

        .recipe-meta {
            color: #999;

            font-size: 10px;

            line-height: 1.6;

            margin-bottom: 15px;
        }

        .recipe-actions {
            display: flex;

            align-items: center;

            gap: 7px;
        }

        .view-button {
            flex: 1;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            background: #fff1e8;

            color: #e85d04;

            padding: 8px 10px;

            border-radius: 5px;

            font-size: 10px;

            font-weight: 600;
        }

        .view-button:hover {
            background: #ffe3d1;
        }

        .remove-button {
            width: 33px;

            height: 33px;

            border: none;

            background: #fff0f0;

            color: #c62828;

            border-radius: 5px;

            cursor: pointer;

            font-size: 15px;

            display: flex;

            align-items: center;

            justify-content: center;
        }

        .remove-button:hover {
            background: #ffe4e4;
        }

        /* =====================================================
           EMPTY
        ===================================================== */

        .empty {
            background: #ffffff;

            border: 1px solid #e3e3e3;

            border-radius: 9px;

            padding: 60px 20px;

            text-align: center;
        }

        .empty-icon {
            font-size: 35px;

            margin-bottom: 12px;
        }

        .empty h2 {
            font-size: 18px;

            margin-bottom: 8px;
        }

        .empty p {
            color: #999;

            font-size: 12px;

            margin-bottom: 18px;
        }

        .browse-button {
            display: inline-block;

            background: #e85d04;

            color: #ffffff;

            padding: 10px 15px;

            border-radius: 6px;

            font-size: 11px;

            font-weight: 600;
        }

        .browse-button:hover {
            background: #d65300;
        }

        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1000px) {

            .recipe-grid {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
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

            .topbar {
                padding: 0 18px;
            }

            .content {
                padding: 22px 18px 40px;
            }

            .recipe-grid {
                grid-template-columns: 1fr;
            }

            .page-header {
                align-items: flex-start;

                gap: 12px;

                flex-direction: column;
            }

        }

    </style>

</head>


<body>

<div class="layout">


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

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


            <!-- DASHBOARD -->

            <a href="{{ route('user.dashboard') }}">

                <span class="menu-icon">
                    ⌂
                </span>

                <span>
                    Dashboard
                </span>

            </a>


            <!-- RESEP SAYA -->

            <a href="{{ route('recipes.my') }}">

                <span class="menu-icon">
                    ▣
                </span>

                <span>
                    Resep Saya
                </span>

            </a>


            <!-- RESEP TERSIMPAN -->

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


            <!-- TAMBAH RESEP -->

            <a href="{{ route('recipes.create') }}">

                <span class="menu-icon">
                    ＋
                </span>

                <span>
                    Tambah Resep
                </span>

            </a>


            <!-- PROFIL -->

            <a href="{{ route('profile.edit') }}">

                <span class="menu-icon">
                    ○
                </span>

                <span>
                    Profil
                </span>

            </a>


        </nav>


        <!-- =================================================
             USER BOTTOM
        ================================================== -->

        <div class="sidebar-bottom">


            <div class="profile-box">

                <div class="avatar">

                    {{ strtoupper(substr($user->name, 0, 1)) }}

                </div>


                <div class="profile-info">

                    <div class="profile-name">

                        {{ $user->name }}

                    </div>


                    <div class="profile-role">

                        User

                    </div>

                </div>

            </div>


            <form
                method="POST"
                action="{{ route('logout') }}"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-button"
                >

                    🚪
                    &nbsp;
                    Keluar

                </button>

            </form>

        </div>

    </aside>


    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="main">


        <!-- TOPBAR -->

        <header class="topbar">

            <div class="page-name">
                Resep Tersimpan
            </div>


            <div class="user-area">

                <div class="user-info">

                    <span class="user-name">
                        {{ $user->name }}
                    </span>

                    <span class="user-role">
                        User
                    </span>

                </div>


                <div class="avatar">

                    {{ strtoupper(substr($user->name, 0, 1)) }}

                </div>

            </div>

        </header>


        <!-- CONTENT -->

        <section class="content">


            <!-- SUCCESS -->

            @if(session('success'))

                <div class="success">

                    {{ session('success') }}

                </div>

            @endif


            <!-- HEADER -->

            <div class="page-header">


                <div>

                    <h1>
                        Resep Tersimpan
                    </h1>

                    <p>
                        Kumpulan resep yang kamu simpan untuk dimasak nanti.
                    </p>

                </div>


                <div class="total-badge">

                    ♥ {{ $favorites->count() }} Resep

                </div>

            </div>


            <!-- RESEP -->

            @if($favorites->count() > 0)


                <div class="recipe-grid">


                    @foreach($favorites as $favorite)


                        @if($favorite->recipe)


                            <article class="recipe-card">


                                <!-- FOTO -->

                                <div class="recipe-image">


                                    @if($favorite->recipe->imageUrl())

                                        <img
                                            src="{{ $favorite->recipe->imageUrl() }}"
                                            alt="{{ $favorite->recipe->title }}"
                                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                                        >

                                        <div
                                            class="no-image"
                                            style="display:none;"
                                        >
                                            Gambar tidak tersedia
                                        </div>

                                    @else

                                        <div class="no-image">

                                            Tidak ada gambar

                                        </div>

                                    @endif


                                </div>


                                <!-- CONTENT -->

                                <div class="recipe-content">


                                    <a
                                        href="{{ route('recipes.show', $favorite->recipe->slug) }}"
                                        class="recipe-title"
                                    >

                                        {{ $favorite->recipe->title }}

                                    </a>


                                    <div class="recipe-meta">

                                        Dibuat oleh:

                                        {{ $favorite->recipe->user->name ?? 'Pengguna' }}

                                        <br>

                                        {{ $favorite->recipe->created_at?->format('d M Y') ?? '-' }}

                                    </div>


                                    <!-- ACTION -->

                                    <div class="recipe-actions">


                                        <a
                                            href="{{ route('recipes.show', $favorite->recipe->slug) }}"
                                            class="view-button"
                                        >

                                            Lihat Resep

                                        </a>


                                        <form
                                            action="{{ route('recipe.favorite', $favorite->recipe->id) }}"
                                            method="POST"
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


                            </article>


                        @endif


                    @endforeach


                </div>


            @else


                <!-- EMPTY -->

                <div class="empty">


                    <div class="empty-icon">
                        ♡
                    </div>


                    <h2>
                        Belum Ada Resep Tersimpan
                    </h2>


                    <p>
                        Kamu belum menyimpan resep apa pun.
                        Simpan resep favoritmu agar mudah ditemukan kembali.
                    </p>


                    <a
                        href="{{ route('recipes.my') }}"
                        class="browse-button"
                    >
                        Lihat Resep Saya
                    </a>


                </div>


            @endif


        </section>

    </main>

</div>

</body>

</html>