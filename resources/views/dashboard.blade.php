<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Resep Masakan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Inter', Arial, sans-serif;
            background: #f7f5ff;
            color: #17203a;
        }

        .dashboard-wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            height: 82px;
            background: white;
            border-bottom: 1px solid #eeeafc;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 34px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: #5835d9;
            font-size: 23px;
            font-weight: 800;
        }

        .brand-icon {
            width: 43px;
            height: 43px;
            border-radius: 13px;
            background: linear-gradient(135deg, #7447ee, #5b2fd3);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .avatar {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: linear-gradient(135deg, #7650ef, #5630d0);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
        }

        .user-info {
            line-height: 1.3;
        }

        .user-name {
            font-weight: 700;
            font-size: 14px;
        }

        .user-role {
            color: #8a8fa3;
            font-size: 12px;
            margin-top: 3px;
        }

        .logout-btn {
            border: 1px solid #eadffb;
            background: white;
            color: #e74c4c;
            padding: 10px 17px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 13px;
            transition: .2s;
        }

        .logout-btn:hover {
            background: #fff5f5;
        }


        /* =========================
           MAIN LAYOUT
        ========================= */

        .main-layout {
            display: flex;
            flex: 1;
        }


        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {
            width: 270px;
            min-width: 270px;
            background: white;
            border-right: 1px solid #eeeafc;
            padding: 35px 20px;
            display: flex;
            flex-direction: column;
        }

        .menu-title {
            font-size: 12px;
            font-weight: 700;
            color: #8c8fa3;
            letter-spacing: .7px;
            margin: 0 0 18px 15px;
        }

        .menu-link {
            display: flex;
            align-items: center;
            gap: 14px;
            text-decoration: none;
            color: #646a80;
            padding: 14px 17px;
            border-radius: 14px;
            margin-bottom: 7px;
            font-size: 15px;
            font-weight: 500;
            transition: .2s;
        }

        .menu-link:hover {
            background: #f5f1ff;
            color: #6339db;
        }

        .menu-link.active {
            background: linear-gradient(
                90deg,
                #eee7ff,
                #f4efff
            );
            color: #5d36d4;
            font-weight: 700;
        }

        .menu-icon {
            width: 27px;
            height: 27px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 19px;
        }


        /* =========================
           CONTENT
        ========================= */

        .content {
            flex: 1;
            padding: 40px 42px 55px;
            overflow: hidden;
        }

        .welcome {
            margin-bottom: 27px;
        }

        .welcome h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 800;
            color: #17203a;
        }

        .welcome p {
            margin: 8px 0 0;
            color: #737991;
            font-size: 15px;
        }


        /* =========================
           STATISTICS
        ========================= */

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
            margin-bottom: 28px;
        }

        .stat-card {
            background: white;
            border: 1px solid #eeeafa;
            border-radius: 18px;
            padding: 23px;
            display: flex;
            align-items: center;
            gap: 18px;
            box-shadow: 0 5px 20px rgba(76, 52, 150, .05);
        }

        .stat-icon {
            width: 58px;
            height: 58px;
            border-radius: 17px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            flex-shrink: 0;
        }

        .purple-icon {
            background: #eee7ff;
        }

        .green-icon {
            background: #e7f8ec;
        }

        .blue-icon {
            background: #e7f1ff;
        }

        .stat-label {
            margin: 0;
            color: #656c82;
            font-size: 13px;
        }

        .stat-number {
            margin: 5px 0 2px;
            font-size: 29px;
            font-weight: 800;
            color: #5d35d6;
        }

        .green-number {
            color: #20a957;
        }

        .blue-number {
            color: #2274d8;
        }

        .stat-description {
            margin: 0;
            font-size: 12px;
            color: #9297aa;
        }


        /* =========================
           QUICK ACTION
        ========================= */

        .manage-card {
            background: linear-gradient(
                100deg,
                #f2edff,
                #f7f3ff
            );
            border: 1px solid #dfd3ff;
            border-radius: 18px;
            padding: 22px 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .manage-left {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .manage-icon {
            width: 54px;
            height: 54px;
            background: #e5dcff;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
        }

        .manage-title {
            margin: 0;
            font-size: 18px;
            font-weight: 750;
        }

        .manage-description {
            margin: 5px 0 0;
            color: #727990;
            font-size: 13px;
        }

        .primary-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            background: linear-gradient(
                135deg,
                #7041e5,
                #5730d2
            );
            color: white;
            padding: 12px 22px;
            border-radius: 11px;
            font-size: 13px;
            font-weight: 700;
            box-shadow: 0 7px 16px rgba(91, 48, 210, .20);
            transition: .2s;
        }

        .primary-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 10px 20px rgba(91, 48, 210, .28);
        }


        /* =========================
           RESEP TERBARU
        ========================= */

        .recipes-section {
            background: white;
            border: 1px solid #eeeafa;
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(76, 52, 150, .04);
        }

        .section-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 21px;
        }

        .section-title {
            margin: 0;
            font-size: 20px;
            font-weight: 800;
        }

        .section-subtitle {
            margin: 6px 0 0;
            color: #7b8195;
            font-size: 13px;
        }

        .view-all {
            text-decoration: none;
            color: #6338db;
            font-size: 13px;
            font-weight: 700;
        }

        .view-all:hover {
            text-decoration: underline;
        }

        .recipe-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .recipe-card {
            background: white;
            border: 1px solid #eceaf2;
            border-radius: 15px;
            overflow: hidden;
            transition: .25s;
        }

        .recipe-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(50, 35, 110, .10);
        }

        .recipe-image {
            width: 100%;
            height: 170px;
            object-fit: cover;
            display: block;
        }

        .no-image {
            height: 170px;
            background: #f1f2f5;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #9a9eac;
            font-size: 13px;
        }

        .recipe-body {
            padding: 17px 18px 18px;
        }

        .recipe-title {
            margin: 0;
            font-size: 15px;
            font-weight: 750;
            color: #17203a;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .recipe-author {
            color: #81879b;
            font-size: 12px;
            margin: 8px 0 13px;
        }

        .recipe-link {
            color: #6338db;
            text-decoration: none;
            font-size: 12px;
            font-weight: 700;
        }

        .recipe-link:hover {
            color: #4520b9;
        }


        /* =========================
           FOOTER
        ========================= */

        .footer {
            background: linear-gradient(
                135deg,
                #6738dd,
                #4f2cc5
            );
            color: white;
            padding: 21px;
            text-align: center;
            font-size: 12px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1100px) {

            .sidebar {
                width: 220px;
                min-width: 220px;
            }

            .content {
                padding: 30px;
            }

            .recipe-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }


        @media (max-width: 800px) {

            .sidebar {
                display: none;
            }

            .content {
                padding: 25px 18px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .recipe-grid {
                grid-template-columns: 1fr;
            }

            .manage-card {
                align-items: flex-start;
                gap: 20px;
                flex-direction: column;
            }

            .navbar {
                padding: 0 18px;
            }

            .user-info {
                display: none;
            }

        }
    </style>

</head>


<body>


<div class="dashboard-wrapper">


    {{-- =====================================================
         NAVBAR
    ====================================================== --}}

    <header class="navbar">


        {{-- BRAND --}}

        <a href="{{ route('dashboard') }}" class="brand">

            <span class="brand-icon">
                🍳
            </span>

            <span>
                Resep Masakan
            </span>

        </a>


        {{-- USER AREA --}}

        <div class="navbar-right">


            <div class="avatar">

                {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}

            </div>


            <div class="user-info">

                <div class="user-name">
                    {{ Auth::user()->name }}
                </div>

                <div class="user-role">
                    {{ ucfirst(Auth::user()->role) }}
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
                    ↪ Logout
                </button>

            </form>

        </div>

    </header>



    {{-- =====================================================
         MAIN
    ====================================================== --}}

    <div class="main-layout">


        {{-- =================================================
             SIDEBAR
        ================================================== --}}

        <aside class="sidebar">


            <p class="menu-title">
                MENU
            </p>


            {{-- DASHBOARD --}}

            <a
                href="{{ route('dashboard') }}"
                class="menu-link active"
            >

                <span class="menu-icon">
                    🏠
                </span>

                <span>
                    Dashboard
                </span>

            </a>


            {{-- RESEP --}}

            <a
                href="/recipes"
                class="menu-link"
            >

                <span class="menu-icon">
                    📖
                </span>

                <span>
                    Resep
                </span>

            </a>


            {{-- TAMBAH RESEP --}}

            <a
                href="/recipes/create"
                class="menu-link"
            >

                <span class="menu-icon">
                    ➕
                </span>

                <span>
                    Tambah Resep
                </span>

            </a>


            {{-- PROFILE --}}

            <a
                href="{{ route('profile.edit') }}"
                class="menu-link"
            >

                <span class="menu-icon">
                    👤
                </span>

                <span>
                    Profile
                </span>

            </a>


        </aside>



        {{-- =================================================
             CONTENT
        ================================================== --}}

        <main class="content">


            {{-- WELCOME --}}

            <section class="welcome">

                <h1>
                    Selamat datang,
                    {{ Auth::user()->name }} 👋
                </h1>

                <p>
                    Kelola resep masakan kamu dengan mudah dan praktis.
                </p>

            </section>



            {{-- =================================================
                 STATISTICS
            ================================================== --}}

            <section class="stats">


                {{-- TOTAL RESEP --}}

                <div class="stat-card">

                    <div class="stat-icon purple-icon">
                        🍴
                    </div>

                    <div>

                        <p class="stat-label">
                            Total Resep
                        </p>

                        <p class="stat-number">
                            {{ \App\Models\Recipe::count() }}
                        </p>

                        <p class="stat-description">
                            Semua resep tersedia
                        </p>

                    </div>

                </div>



                {{-- RESEP SAYA --}}

                <div class="stat-card">

                    <div class="stat-icon green-icon">
                        📝
                    </div>

                    <div>

                        <p class="stat-label">
                            Resep Saya
                        </p>

                        <p class="stat-number green-number">
                            {{
                                \App\Models\Recipe::where(
                                    'user_id',
                                    Auth::id()
                                )->count()
                            }}
                        </p>

                        <p class="stat-description">
                            Resep yang kamu buat
                        </p>

                    </div>

                </div>



                {{-- TOTAL USER --}}

                @if (Auth::user()->role === 'admin')

                    <div class="stat-card">

                        <div class="stat-icon blue-icon">
                            👥
                        </div>

                        <div>

                            <p class="stat-label">
                                Total User
                            </p>

                            <p class="stat-number blue-number">
                                {{ \App\Models\User::count() }}
                            </p>

                            <p class="stat-description">
                                Semua pengguna terdaftar
                            </p>

                        </div>

                    </div>

                @endif


            </section>



            {{-- =================================================
                 KELOLA RESEP
            ================================================== --}}

            <section class="manage-card">


                <div class="manage-left">

                    <div class="manage-icon">
                        📁
                    </div>

                    <div>

                        <h2 class="manage-title">
                            Kelola Resep
                        </h2>

                        <p class="manage-description">
                            Tambahkan atau kelola resep masakan dengan mudah.
                        </p>

                    </div>

                </div>


                <a
                    href="/recipes"
                    class="primary-btn"
                >
                    Lihat Resep →
                </a>


            </section>



            {{-- =================================================
                 RESEP TERBARU
            ================================================== --}}

            @php

                $latestRecipes = \App\Models\Recipe::with('user')
                    ->latest()
                    ->take(3)
                    ->get();

            @endphp


            <section class="recipes-section">


                <div class="section-header">


                    <div>

                        <h2 class="section-title">
                            Resep Terbaru
                        </h2>

                        <p class="section-subtitle">
                            Resep yang baru ditambahkan.
                        </p>

                    </div>


                    <a
                        href="/recipes"
                        class="view-all"
                    >
                        Lihat Semua →
                    </a>


                </div>



                @if ($latestRecipes->count() > 0)


                    <div class="recipe-grid">


                        @foreach ($latestRecipes as $recipe)


                            <article class="recipe-card">


                                {{-- GAMBAR --}}

                                @if ($recipe->image)

                                    <img
                                        src="{{ $recipe->imageUrl() }}"
                                        alt="{{ $recipe->title }}"
                                        class="recipe-image"
                                    >

                                @else

                                    <div class="no-image">
                                        Tidak ada gambar
                                    </div>

                                @endif



                                {{-- CONTENT --}}

                                <div class="recipe-body">


                                    <h3 class="recipe-title">
                                        {{ $recipe->title }}
                                    </h3>


                                    <p class="recipe-author">

                                        👤
                                        Oleh

                                        {{
                                            $recipe->user->name
                                            ?? 'User'
                                        }}

                                    </p>


                                    <a
                                        href="/recipes/{{ $recipe->slug }}"
                                        class="recipe-link"
                                    >
                                        Lihat Resep →
                                    </a>


                                </div>


                            </article>


                        @endforeach


                    </div>


                @else


                    <div
                        style="
                            text-align:center;
                            padding:50px 20px;
                            color:#8b90a3;
                        "
                    >

                        <div
                            style="
                                font-size:40px;
                                margin-bottom:12px;
                            "
                        >
                            🍳
                        </div>

                        <p>
                            Belum ada resep.
                        </p>

                        <a
                            href="/recipes/create"
                            class="primary-btn"
                            style="
                                display:inline-flex;
                                margin-top:15px;
                            "
                        >
                            + Tambah Resep
                        </a>

                    </div>


                @endif


            </section>


        </main>

    </div>



    {{-- =====================================================
         FOOTER
    ====================================================== --}}

    <footer class="footer">

        © {{ date('Y') }} Resep Masakan.
        All rights reserved.

    </footer>


</div>


</body>

</html>