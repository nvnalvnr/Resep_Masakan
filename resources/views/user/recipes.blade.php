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

        /* ==============================
           LAYOUT
        ============================== */

        .layout {
            min-height: 100vh;
        }


        /* ==============================
           SIDEBAR
        ============================== */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;

            width: 240px;

            background: #fff;

            border-right: 1px solid #e3e3e3;

            padding: 28px 18px;

            z-index: 100;
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

            text-align: center;

            font-size: 14px;
        }


        /* ==============================
           SIDEBAR BOTTOM
        ============================== */

        .sidebar-bottom {
            position: absolute;

            left: 18px;
            right: 18px;

            bottom: 20px;
        }


        .profile-box {
            display: flex;

            align-items: center;

            gap: 10px;

            padding: 11px;

            border: 1px solid #eee;

            border-radius: 8px;

            background: #fafafa;

            margin-bottom: 10px;
        }


        .avatar {
            width: 36px;
            height: 36px;

            border-radius: 50%;

            background: #e85d04;

            color: white;

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
            display: block;

            color: #333;

            font-size: 12px;

            font-weight: 600;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }


        .profile-role {
            display: block;

            color: #999;

            font-size: 10px;

            margin-top: 3px;
        }


        .logout-btn {
            width: 100%;

            border: none;

            background: #fff1f2;

            color: #be123c;

            padding: 10px;

            border-radius: 7px;

            cursor: pointer;

            font-size: 12px;
        }


        .logout-btn:hover {
            background: #ffe4e6;
        }


        /* ==============================
           MAIN
        ============================== */

        .main {
            margin-left: 240px;

            min-height: 100vh;
        }


        /* ==============================
           TOPBAR
        ============================== */

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


        .page-description {
            color: #999;

            font-size: 11px;

            margin-top: 4px;
        }


        .topbar-date {
            color: #999;

            font-size: 11px;
        }


        /* ==============================
           CONTENT
        ============================== */

        .content {
            padding: 30px 34px 50px;

            max-width: 1250px;
        }


        /* ==============================
           PAGE HEADER
        ============================== */

        .page-header {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 24px;
        }


        .page-header h1 {
            font-size: 24px;

            font-weight: 600;

            margin-bottom: 6px;
        }


        .page-header p {
            color: #999;

            font-size: 12px;
        }


        .add-button {
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


        /* ==============================
           SEARCH
        ============================== */

        .search-box {
            background: #fff;

            border: 1px solid #e3e3e3;

            border-radius: 8px;

            padding: 13px;

            margin-bottom: 22px;
        }


        .search-form {
            display: flex;

            gap: 8px;
        }


        .search-input {
            flex: 1;

            height: 40px;

            border: 1px solid #ddd;

            border-radius: 6px;

            padding: 0 12px;

            font-size: 12px;

            outline: none;
        }


        .search-input:focus {
            border-color: #e85d04;
        }


        .search-button {
            border: none;

            background: #292929;

            color: white;

            padding: 0 18px;

            border-radius: 6px;

            cursor: pointer;

            font-size: 12px;
        }


        .search-button:hover {
            background: #444;
        }


        /* ==============================
           SUCCESS
        ============================== */

        .success {
            background: #edf8f0;

            border: 1px solid #cce8d2;

            color: #26733b;

            border-radius: 6px;

            padding: 11px 14px;

            font-size: 12px;

            margin-bottom: 20px;
        }


        /* ==============================
           RECIPE GRID
        ============================== */

        .recipe-grid {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 18px;
        }


        /* ==============================
           CARD
        ============================== */

        .recipe-card {
            background: #fff;

            border: 1px solid #e3e3e3;

            border-radius: 9px;

            overflow: hidden;

            transition: .2s;
        }


        .recipe-card:hover {
            transform: translateY(-2px);

            border-color: #ccc;
        }


        .recipe-image {
            height: 165px;

            background: #eee;
        }


        .recipe-image img {
            width: 100%;

            height: 100%;

            object-fit: cover;
        }


        .no-image {
            height: 100%;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #999;

            font-size: 12px;
        }


        .recipe-content {
            padding: 16px;
        }


        .recipe-title {
            font-size: 15px;

            font-weight: 600;

            margin-bottom: 6px;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }


        .recipe-date {
            color: #999;

            font-size: 11px;

            margin-bottom: 15px;
        }


        .recipe-actions {
            display: flex;

            align-items: center;

            gap: 6px;

            padding-top: 12px;

            border-top: 1px solid #eee;
        }


        .view-btn {
            flex: 1;

            text-align: center;

            background: #fff1e8;

            color: #e85d04;

            padding: 8px;

            border-radius: 5px;

            font-size: 11px;

            font-weight: 600;
        }


        .view-btn:hover {
            background: #ffe5d1;
        }


        .edit-btn {
            background: #eff6ff;

            color: #2563eb;

            padding: 8px 10px;

            border-radius: 5px;

            font-size: 11px;

            font-weight: 600;
        }


        .edit-btn:hover {
            background: #dbeafe;
        }


        .delete-btn {
            border: none;

            background: #fff1f2;

            color: #be123c;

            padding: 8px 10px;

            border-radius: 5px;

            font-size: 11px;

            cursor: pointer;
        }


        .delete-btn:hover {
            background: #ffe4e6;
        }


        /* ==============================
           EMPTY
        ============================== */

        .empty {
            background: #fff;

            border: 1px solid #e3e3e3;

            border-radius: 9px;

            padding: 55px 20px;

            text-align: center;
        }


        .empty-icon {
            font-size: 35px;

            margin-bottom: 12px;
        }


        .empty h3 {
            font-size: 16px;

            margin-bottom: 7px;
        }


        .empty p {
            color: #999;

            font-size: 12px;

            margin-bottom: 17px;
        }


        /* ==============================
           PAGINATION
        ============================== */

        .pagination {
            margin-top: 25px;

            display: flex;

            justify-content: center;
        }


        /* ==============================
           RESPONSIVE
        ============================== */

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

                padding: 20px;
            }


            .sidebar-bottom {
                position: static;

                margin-top: 25px;
            }


            .main {
                margin-left: 0;
            }


            .topbar {
                padding: 0 20px;
            }


            .content {
                padding: 22px 18px 40px;
            }


            .recipe-grid {
                grid-template-columns: 1fr;
            }


            .page-header {
                align-items: flex-start;

                gap: 15px;
            }

        }


        @media (max-width: 500px) {

            .page-header {
                display: block;
            }


            .add-button {
                display: inline-block;

                margin-top: 15px;
            }


            .search-form {
                flex-direction: column;
            }


            .search-button {
                height: 40px;
            }


            .topbar-date {
                display: none;
            }

        }

    </style>

</head>


<body>


<div class="layout">


    {{-- =====================================================
         SIDEBAR USER
    ====================================================== --}}

    <aside class="sidebar">


        {{-- BRAND --}}

        <div class="brand">

            <a href="{{ route('user.dashboard') }}">
                ResepKu
            </a>

            <small>
                Website Resep Masakan
            </small>

        </div>


        {{-- MENU --}}

        <div class="menu-label">
            Menu Utama
        </div>


        <nav class="menu">


            {{-- DASHBOARD --}}

            <a href="{{ route('user.dashboard') }}">

                <span class="menu-icon">
                    ⌂
                </span>

                Dashboard

            </a>


            {{-- RESEP SAYA --}}

            <a
                href="{{ route('user.recipes') }}"
                class="active"
            >

                <span class="menu-icon">
                    ▣
                </span>

                Resep Saya

            </a>


            {{-- TAMBAH RESEP --}}

            <a href="{{ route('recipes.create') }}">

                <span class="menu-icon">
                    ＋
                </span>

                Tambah Resep

            </a>


            {{-- PROFIL --}}

            <a href="{{ route('profile.edit') }}">

                <span class="menu-icon">
                    ○
                </span>

                Profil

            </a>


        </nav>


        {{-- =================================================
             USER DI BAWAH SIDEBAR
        ================================================== --}}

        <div class="sidebar-bottom">


            <div class="profile-box">


                <div class="avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>


                <div class="profile-info">

                    <span class="profile-name">

                        {{ auth()->user()->name }}

                    </span>


                    <span class="profile-role">

                        User

                    </span>

                </div>


            </div>


            {{-- LOGOUT --}}

            <form
                method="POST"
                action="{{ route('logout') }}"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-btn"
                >

                    Keluar

                </button>

            </form>


        </div>


    </aside>



    {{-- =====================================================
         MAIN
    ====================================================== --}}

    <main class="main">


        {{-- TOPBAR --}}

        <header class="topbar">


            <div>

                <div class="page-name">
                    Resep Saya
                </div>

                <div class="page-description">
                    Daftar resep yang kamu buat
                </div>

            </div>


            <div class="topbar-date">

                {{ now()->format('d M Y') }}

            </div>


        </header>



        {{-- CONTENT --}}

        <section class="content">


            {{-- PAGE HEADER --}}

            <div class="page-header">


                <div>

                    <h1>
                        Resep Saya
                    </h1>

                    <p>
                        Kelola resep masakan yang kamu buat sendiri.
                    </p>

                </div>


                <a
                    href="{{ route('recipes.create') }}"
                    class="add-button"
                >

                    + Tambah Resep

                </a>


            </div>



            {{-- SEARCH --}}

            <div class="search-box">

                <form
                    action="{{ route('user.recipes') }}"
                    method="GET"
                    class="search-form"
                >

                    <input
                        type="text"
                        name="search"
                        class="search-input"
                        placeholder="Cari resep saya..."
                        value="{{ request('search') }}"
                    >


                    <button
                        type="submit"
                        class="search-button"
                    >

                        Cari

                    </button>

                </form>

            </div>



            {{-- SUCCESS --}}

            @if(session('success'))

                <div class="success">

                    {{ session('success') }}

                </div>

            @endif



            {{-- RESEP --}}

            @if($recipes->count() > 0)


                <div class="recipe-grid">


                    @foreach($recipes as $recipe)


                        <article class="recipe-card">


                            {{-- GAMBAR --}}

                            <div class="recipe-image">


                                @if($recipe->image)

                                    <img
                                        src="{{ $recipe->imageUrl() }}"
                                        alt="{{ $recipe->title }}"
                                    >

                                @else

                                    <div class="no-image">

                                        Tidak ada gambar

                                    </div>

                                @endif


                            </div>



                            {{-- CONTENT --}}

                            <div class="recipe-content">


                                <h3 class="recipe-title">

                                    {{ $recipe->title }}

                                </h3>


                                <div class="recipe-date">

                                    Dibuat
                                    {{ optional($recipe->created_at)->format('d M Y') ?? '-' }}

                                </div>



                                {{-- ACTION --}}

                                <div class="recipe-actions">


                                    {{-- LIHAT --}}

                                    <a
                                        href="{{ route('recipes.show', $recipe->slug) }}"
                                        class="view-btn"
                                    >

                                        Lihat

                                    </a>


                                    {{-- EDIT --}}

                                    <a
                                        href="{{ route('recipes.edit', $recipe->slug) }}"
                                        class="edit-btn"
                                    >

                                        Edit

                                    </a>


                                    {{-- HAPUS --}}

                                    <form
                                        method="POST"
                                        action="{{ route('recipes.destroy', $recipe->slug) }}"
                                        style="margin: 0;"
                                    >

                                        @csrf

                                        @method('DELETE')


                                        <button
                                            type="submit"
                                            class="delete-btn"
                                            onclick="return confirm('Yakin ingin menghapus resep ini?')"
                                        >

                                            Hapus

                                        </button>

                                    </form>


                                </div>


                            </div>


                        </article>


                    @endforeach


                </div>


                {{-- PAGINATION --}}

                @if($recipes->hasPages())

                    <div class="pagination">

                        {{ $recipes->withQueryString()->links() }}

                    </div>

                @endif


            @else


                {{-- EMPTY --}}

                <div class="empty">


                    <div class="empty-icon">
                        🍳
                    </div>


                    @if(request('search'))

                        <h3>
                            Resep tidak ditemukan
                        </h3>

                        <p>
                            Tidak ada resep yang cocok dengan
                            "{{ request('search') }}".
                        </p>

                    @else

                        <h3>
                            Belum ada resep
                        </h3>

                        <p>
                            Kamu belum membuat resep.
                            Tambahkan resep pertamamu.
                        </p>

                    @endif


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