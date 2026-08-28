<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Dashboard - ResepKu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;1,500&display=swap"
        rel="stylesheet"
    >

    <style>

        :root {
            --paper: #f5f1e8;
            --paper-light: #fbf9f4;
            --white: #fffdf8;

            --ink: #29231f;
            --muted: #777067;

            --brown: #6b3424;
            --terracotta: #a95635;
            --olive: #5d6947;

            --line: #ded7ca;
            --soft-brown: #eee3d8;
            --soft-green: #e7eadf;
        }


        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        html {
            scroll-behavior: smooth;
        }


        body {
            font-family: "DM Sans", Arial, sans-serif;
            background: var(--paper);
            color: var(--ink);
        }


        a {
            color: inherit;
            text-decoration: none;
        }


        button {
            font-family: inherit;
        }


        /* =========================================
           LAYOUT
        ========================================= */

        .page {
            min-height: 100vh;

            display: grid;

            grid-template-columns: 235px 1fr;
        }


        /* =========================================
           SIDEBAR
        ========================================= */

        .sidebar {
            background: var(--paper-light);

            border-right: 1px solid var(--line);

            min-height: 100vh;

            padding: 30px 22px;

            display: flex;

            flex-direction: column;

            position: sticky;

            top: 0;

            height: 100vh;
        }


        /* BRAND */

        .brand {
            display: flex;

            align-items: center;

            gap: 11px;

            padding-bottom: 31px;

            border-bottom: 1px solid var(--line);
        }


        .brand-mark {
            width: 40px;
            height: 40px;

            background: var(--brown);

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            font-family: Georgia, serif;

            font-size: 18px;

            border-radius: 50%;
        }


        .brand-name {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 21px;

            font-weight: 600;
        }


        .brand-small {
            display: block;

            color: var(--muted);

            font-size: 9px;

            letter-spacing: 1.5px;

            text-transform: uppercase;

            margin-top: 2px;
        }


        /* NAV TITLE */

        .nav-label {
            color: #968d82;

            font-size: 9px;

            font-weight: 700;

            letter-spacing: 1.6px;

            text-transform: uppercase;

            margin: 27px 9px 11px;
        }


        /* NAV */

        .nav {
            display: flex;

            flex-direction: column;

            gap: 3px;
        }


        .nav a {
            display: flex;

            align-items: center;

            gap: 11px;

            padding: 11px 10px;

            font-size: 12px;

            color: var(--muted);

            border-left: 2px solid transparent;

            transition: .2s ease;
        }


        .nav a:hover {
            color: var(--brown);

            background: #f4eee5;
        }


        .nav a.active {
            color: var(--brown);

            border-left-color: var(--brown);

            background: #eee5da;

            font-weight: 700;
        }


        .nav-icon {
            width: 19px;

            text-align: center;

            font-size: 14px;
        }


        /* SIDEBAR BOTTOM */

        .sidebar-bottom {
            margin-top: auto;
        }


        .user-profile {
            border-top: 1px solid var(--line);

            padding-top: 19px;

            display: flex;

            align-items: center;

            gap: 10px;
        }


        .avatar {
            width: 34px;
            height: 34px;

            background: var(--soft-brown);

            color: var(--brown);

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            font-size: 12px;

            font-weight: 700;

            flex-shrink: 0;
        }


        .user-info {
            min-width: 0;
        }


        .user-info strong {
            display: block;

            font-size: 11px;

            max-width: 125px;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }


        .user-info span {
            display: block;

            color: var(--muted);

            font-size: 9px;

            margin-top: 2px;
        }


        .logout {
            margin-top: 14px;

            width: 100%;

            background: transparent;

            border: 1px solid var(--line);

            padding: 9px;

            color: var(--muted);

            cursor: pointer;

            font-size: 10px;

            transition: .2s;
        }


        .logout:hover {
            color: #9b3d2d;

            border-color: #c9a397;

            background: #faf0ec;
        }


        /* =========================================
           MAIN
        ========================================= */

        .main {
            min-width: 0;

            padding: 36px 48px 45px;
        }


        /* =========================================
           HEADER
        ========================================= */

        .top {
            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            padding-bottom: 27px;

            border-bottom: 1px solid var(--line);
        }


        .eyebrow {
            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: 2px;

            color: var(--terracotta);

            font-weight: 700;

            margin-bottom: 8px;
        }


        .top h1 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 36px;

            font-weight: 500;

            line-height: 1.15;
        }


        .top p {
            margin-top: 8px;

            color: var(--muted);

            font-size: 12px;
        }


        .date {
            font-size: 10px;

            color: var(--muted);

            border-bottom: 1px solid var(--brown);

            padding-bottom: 5px;
        }


        /* =========================================
           INTRO
        ========================================= */

        .intro {
            display: grid;

            grid-template-columns: 1.5fr .8fr;

            margin: 28px 0 30px;

            border-bottom: 1px solid var(--line);

            padding-bottom: 30px;
        }


        .intro h2 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 27px;

            font-weight: 500;

            max-width: 610px;

            line-height: 1.3;
        }


        .intro h2 em {
            color: var(--terracotta);
        }


        .intro-text {
            color: var(--muted);

            font-size: 12px;

            line-height: 1.8;

            max-width: 390px;

            justify-self: end;
        }


        /* =========================================
           NUMBERS
        ========================================= */

        .numbers {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            border-top: 1px solid var(--ink);

            border-bottom: 1px solid var(--line);

            margin-bottom: 37px;
        }


        .number {
            padding: 18px 20px 19px;

            border-right: 1px solid var(--line);
        }


        .number:last-child {
            border-right: none;
        }


        .number-label {
            color: var(--muted);

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: 1.2px;

            margin-bottom: 8px;
        }


        .number-value {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 31px;

            font-weight: 500;
        }


        .number-note {
            color: var(--muted);

            font-size: 9px;

            margin-top: 3px;
        }


        /* =========================================
           CONTENT
        ========================================= */

        .content-grid {
            display: grid;

            grid-template-columns:
                minmax(0, 1.65fr)
                minmax(250px, .75fr);

            gap: 45px;
        }


        .section-heading {
            display: flex;

            justify-content: space-between;

            align-items: baseline;

            margin-bottom: 18px;
        }


        .section-heading h3 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 23px;

            font-weight: 500;
        }


        .section-heading a {
            font-size: 10px;

            color: var(--terracotta);

            font-weight: 700;
        }


        /* =========================================
           RECIPE GRID
        ========================================= */

        .recipe-grid {
            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 15px;
        }


        .recipe {
            background: var(--white);

            border: 1px solid var(--line);

            transition: .2s ease;
        }


        .recipe:hover {
            transform: translateY(-3px);

            border-color: #c5b7a5;
        }


        .recipe-image {
            height: 150px;

            width: 100%;

            object-fit: cover;

            display: block;
        }


        .no-image {
            height: 150px;

            background: #e9e3d9;

            color: #91887d;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 10px;
        }


        .recipe-body {
            padding: 14px;
        }


        .recipe-number {
            color: var(--terracotta);

            font-size: 9px;

            font-weight: 700;

            margin-bottom: 6px;
        }


        .recipe-title {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 17px;

            line-height: 1.25;

            font-weight: 500;

            min-height: 43px;
        }


        .recipe-author {
            color: var(--muted);

            font-size: 9px;

            margin-top: 8px;
        }


        .recipe-link {
            display: inline-block;

            margin-top: 12px;

            color: var(--brown);

            font-size: 9px;

            font-weight: 700;

            border-bottom: 1px solid var(--brown);

            padding-bottom: 2px;
        }


        /* =========================================
           MENU USER
        ========================================= */

        .manage {
            border-top: 1px solid var(--ink);
        }


        .manage-link {
            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 15px 0;

            border-bottom: 1px solid var(--line);

            font-size: 11px;

            transition: .2s;
        }


        .manage-link:hover {
            color: var(--terracotta);

            padding-left: 5px;
        }


        .manage-left {
            display: flex;

            align-items: center;

            gap: 11px;
        }


        .manage-icon {
            width: 28px;

            height: 28px;

            border: 1px solid var(--line);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 11px;
        }


        .manage-description {
            display: block;

            color: var(--muted);

            font-size: 8px;

            margin-top: 2px;
        }


        .manage-arrow {
            color: var(--muted);
        }


        /* =========================================
           EMPTY
        ========================================= */

        .empty {
            border: 1px dashed #cfc6b9;

            padding: 45px 20px;

            text-align: center;

            color: var(--muted);

            font-size: 11px;
        }


        .empty a {
            display: inline-block;

            margin-top: 12px;

            color: var(--brown);

            border-bottom: 1px solid var(--brown);

            padding-bottom: 2px;
        }


        /* =========================================
           FOOTER
        ========================================= */

        footer {
            border-top: 1px solid var(--line);

            margin-top: 50px;

            padding-top: 18px;

            color: var(--muted);

            font-size: 9px;

            display: flex;

            justify-content: space-between;
        }


        /* =========================================
           RESPONSIVE
        ========================================= */

        @media (max-width: 1100px) {

            .page {
                grid-template-columns: 200px 1fr;
            }


            .main {
                padding: 30px;
            }


            .recipe-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }


        @media (max-width: 850px) {

            .page {
                display: block;
            }


            .sidebar {
                position: relative;

                width: 100%;

                height: auto;

                min-height: auto;

                padding: 18px 22px;

                border-right: none;

                border-bottom: 1px solid var(--line);
            }


            .brand {
                padding-bottom: 15px;

                border-bottom: none;
            }


            .nav-label {
                display: none;
            }


            .nav {
                flex-direction: row;

                overflow-x: auto;

                margin-top: 10px;
            }


            .nav a {
                white-space: nowrap;

                border-left: none;

                border-bottom: 2px solid transparent;
            }


            .nav a.active {
                border-left: none;

                border-bottom-color: var(--brown);
            }


            .sidebar-bottom {
                display: none;
            }


            .intro {
                grid-template-columns: 1fr;

                gap: 18px;
            }


            .intro-text {
                justify-self: start;
            }


            .content-grid {
                grid-template-columns: 1fr;

                gap: 35px;
            }

        }


        @media (max-width: 600px) {

            .main {
                padding: 25px 18px;
            }


            .top {
                display: block;
            }


            .date {
                display: inline-block;

                margin-top: 15px;
            }


            .top h1 {
                font-size: 30px;
            }


            .numbers {
                grid-template-columns: 1fr;
            }


            .number {
                border-right: none;

                border-bottom: 1px solid var(--line);
            }


            .number:last-child {
                border-bottom: none;
            }


            .recipe-grid {
                grid-template-columns: 1fr;
            }


            footer {
                display: block;

                line-height: 1.7;
            }

        }

    </style>

</head>


<body>


<div class="page">


    {{-- =====================================================
         SIDEBAR USER
    ====================================================== --}}

    <aside class="sidebar">


        {{-- BRAND --}}

        <a
            href="{{ route('user.dashboard') }}"
            class="brand"
        >

            <div class="brand-mark">
                R
            </div>


            <div>

                <div class="brand-name">
                    ResepKu
                </div>

                <span class="brand-small">
                    Culinary Journal
                </span>

            </div>

        </a>



        {{-- MENU --}}

        <div class="nav-label">
            Menu Utama
        </div>


        <nav class="nav">


            {{-- DASHBOARD --}}

            <a
                href="{{ route('user.dashboard') }}"
                class="active"
            >

                <span class="nav-icon">
                    ⌂
                </span>

                <span>
                    Dashboard
                </span>

            </a>


            {{-- RESEP SAYA --}}

            <a
                href="{{ route('recipes.my') }}"
            >

                <span class="nav-icon">
                    ≡
                </span>

                <span>
                    Resep Saya
                </span>

            </a>


            {{-- TAMBAH RESEP --}}

            <a
                href="{{ route('recipes.create') }}"
            >

                <span class="nav-icon">
                    +
                </span>

                <span>
                    Tambah Resep
                </span>

            </a>


            {{-- RESEP TERSIMPAN --}}

            <a
                href="{{ route('user.favorites') }}"
            >

                <span class="nav-icon">
                    ♡
                </span>

                <span>
                    Resep Tersimpan
                </span>

            </a>


            {{-- PROFILE --}}

            <a
                href="{{ route('profile.edit') }}"
            >

                <span class="nav-icon">
                    ○
                </span>

                <span>
                    Profile
                </span>

            </a>


            {{-- WEBSITE --}}

            <a
                href="{{ route('recipes.index') }}"
            >

                <span class="nav-icon">
                    ↗
                </span>

                <span>
                    Lihat Website
                </span>

            </a>


        </nav>



        {{-- SIDEBAR USER --}}

        <div class="sidebar-bottom">


            <div class="user-profile">


                <div class="avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>


                <div class="user-info">

                    <strong>
                        {{ auth()->user()->name }}
                    </strong>

                    <span>
                        Pengguna
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
                    class="logout"
                >
                    Keluar dari akun
                </button>

            </form>


        </div>


    </aside>



    {{-- =====================================================
         MAIN
    ====================================================== --}}

    <main class="main">


        {{-- HEADER --}}

        <header class="top">


            <div>

                <div class="eyebrow">
                    ResepKu / User
                </div>


                <h1>
                    Dashboard
                </h1>


                <p>
                    Kelola resep pribadi dan koleksi masakan favoritmu.
                </p>

            </div>


            <div class="date">

                {{ now()->translatedFormat('l, d F Y') }}

            </div>


        </header>



        {{-- =================================================
             INTRO
        ================================================== --}}

        <section class="intro">


            <h2>

                Selamat datang,
                <em>{{ auth()->user()->name }}</em>.

                Mari buat sesuatu yang
                <em>lezat</em> hari ini.

            </h2>


            <p class="intro-text">

                Simpan resep yang ingin kamu coba,
                buat koleksi masakan sendiri, dan
                temukan inspirasi baru dari koleksi
                ResepKu.

            </p>


        </section>



        {{-- =================================================
             STATISTICS
        ================================================== --}}

        <section class="numbers">


            {{-- RESEP SAYA --}}

            <div class="number">

                <div class="number-label">
                    Resep Saya
                </div>


                <div class="number-value">

                    {{ $totalMyRecipes }}

                </div>


                <div class="number-note">
                    resep yang kamu buat
                </div>

            </div>



            {{-- RESEP TERSIMPAN --}}

            <div class="number">

                <div class="number-label">
                    Resep Tersimpan
                </div>


                <div class="number-value">

                    {{ $totalFavorites }}

                </div>


                <div class="number-note">
                    koleksi favoritmu
                </div>

            </div>



            {{-- TOTAL RESEP --}}

            <div class="number">

                <div class="number-label">
                    Koleksi Resep
                </div>


                <div class="number-value">

                    {{ $totalRecipes }}

                </div>


                <div class="number-note">
                    seluruh resep ResepKu
                </div>

            </div>


        </section>



        {{-- =================================================
             CONTENT
        ================================================== --}}

        <div class="content-grid">


            {{-- =============================================
                 RESEP TERBARU
            ============================================== --}}

            <section>


                <div class="section-heading">


                    <h3>
                        Resep terbaru
                    </h3>


                    <a
                        href="{{ route('recipes.index') }}"
                    >
                        Lihat semua →
                    </a>


                </div>



                @if ($recipes->count())


                    <div class="recipe-grid">


                        @foreach ($recipes as $index => $recipe)


                            <article class="recipe">


                                {{-- IMAGE --}}

                                @if ($recipe->image)

                                    <img
                                        src="{{ $recipe->imageUrl() }}"
                                        alt="{{ $recipe->title }}"
                                        class="recipe-image"
                                    >

                                @else

                                    <div class="no-image">
                                        Tidak ada foto
                                    </div>

                                @endif



                                <div class="recipe-body">


                                    <div class="recipe-number">

                                        {{ str_pad(
                                            $index + 1,
                                            2,
                                            '0',
                                            STR_PAD_LEFT
                                        ) }}

                                    </div>



                                    <h4 class="recipe-title">

                                        {{ $recipe->title }}

                                    </h4>



                                    <p class="recipe-author">

                                        Oleh
                                        {{ $recipe->user->name ?? 'User' }}

                                    </p>



                                    <a
                                        href="{{ route(
                                            'recipes.show',
                                            $recipe->slug
                                        ) }}"
                                        class="recipe-link"
                                    >
                                        Buka resep →
                                    </a>


                                </div>


                            </article>


                        @endforeach


                    </div>


                @else


                    <div class="empty">

                        Belum ada resep yang tersedia.

                        <br>


                        <a
                            href="{{ route('recipes.create') }}"
                        >
                            Buat resep pertama →
                        </a>

                    </div>


                @endif


            </section>



            {{-- =============================================
                 MENU SAYA
            ============================================== --}}

            <section>


                <div class="section-heading">

                    <h3>
                        Menu Saya
                    </h3>

                </div>



                <div class="manage">


                    {{-- RESEP SAYA --}}

                    <a
                        href="{{ route('recipes.my') }}"
                        class="manage-link"
                    >

                        <div class="manage-left">


                            <div class="manage-icon">
                                ≡
                            </div>


                            <div>

                                <strong>
                                    Resep Saya
                                </strong>


                                <span class="manage-description">
                                    Lihat resep yang kamu buat
                                </span>

                            </div>


                        </div>


                        <span class="manage-arrow">
                            →
                        </span>

                    </a>



                    {{-- TAMBAH RESEP --}}

                    <a
                        href="{{ route('recipes.create') }}"
                        class="manage-link"
                    >

                        <div class="manage-left">


                            <div class="manage-icon">
                                +
                            </div>


                            <div>

                                <strong>
                                    Tambah Resep
                                </strong>


                                <span class="manage-description">
                                    Buat resep masakan baru
                                </span>

                            </div>


                        </div>


                        <span class="manage-arrow">
                            →
                        </span>

                    </a>



                    {{-- FAVORITE --}}

                    <a
                        href="{{ route('user.favorites') }}"
                        class="manage-link"
                    >

                        <div class="manage-left">


                            <div class="manage-icon">
                                ♡
                            </div>


                            <div>

                                <strong>
                                    Resep Tersimpan
                                </strong>


                                <span class="manage-description">
                                    Lihat resep favoritmu
                                </span>

                            </div>


                        </div>


                        <span class="manage-arrow">
                            →
                        </span>

                    </a>



                    {{-- PROFILE --}}

                    <a
                        href="{{ route('profile.edit') }}"
                        class="manage-link"
                    >

                        <div class="manage-left">


                            <div class="manage-icon">
                                ○
                            </div>


                            <div>

                                <strong>
                                    Profile
                                </strong>


                                <span class="manage-description">
                                    Kelola informasi akun
                                </span>

                            </div>


                        </div>


                        <span class="manage-arrow">
                            →
                        </span>

                    </a>



                    {{-- WEBSITE --}}

                    <a
                        href="{{ route('recipes.index') }}"
                        class="manage-link"
                    >

                        <div class="manage-left">


                            <div class="manage-icon">
                                ↗
                            </div>


                            <div>

                                <strong>
                                    Lihat Website
                                </strong>


                                <span class="manage-description">
                                    Jelajahi semua resep
                                </span>

                            </div>


                        </div>


                        <span class="manage-arrow">
                            →
                        </span>

                    </a>


                </div>


            </section>


        </div>



        {{-- =================================================
             FOOTER
        ================================================== --}}

        <footer>


            <span>
                © {{ date('Y') }} ResepKu
            </span>


            <span>
                Culinary Journal · User
            </span>


        </footer>


    </main>


</div>


</body>

</html>