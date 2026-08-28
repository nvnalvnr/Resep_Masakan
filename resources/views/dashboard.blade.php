<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - ResepKu</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

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


        /* =========================================
           LAYOUT
        ========================================== */

        .layout {
            display: flex;
            min-height: 100vh;
        }


        /* =========================================
           SIDEBAR
        ========================================== */

        .sidebar {
            width: 245px;
            background: #ffffff;
            border-right: 1px solid #eee8e1;

            padding: 25px 18px;

            position: fixed;

            left: 0;
            top: 0;
            bottom: 0;

            z-index: 100;
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

            font-size: 22px;
        }


        .brand-text h2 {
            font-size: 17px;
            color: #292524;
        }


        .brand-text span {
            font-size: 11px;
            color: #a8a29e;
        }


        .menu-title {
            font-size: 10px;

            font-weight: bold;

            color: #a8a29e;

            margin: 5px 10px 10px;

            text-transform: uppercase;

            letter-spacing: 1px;
        }


        .menu {
            display: flex;

            flex-direction: column;

            gap: 6px;
        }


        .menu a {
            display: flex;

            align-items: center;

            gap: 12px;

            padding: 12px 13px;

            color: #57534e;

            border-radius: 10px;

            font-size: 13px;

            transition: 0.2s ease;

            position: relative;

            z-index: 101;
        }


        .menu a:hover {
            background: #fff7ed;

            color: #ea580c;
        }


        .menu a.active {
            background: #ffedd5;

            color: #ea580c;

            font-weight: bold;
        }


        .menu-icon {
            width: 28px;

            text-align: center;

            font-size: 17px;
        }


        /* =========================================
           SIDEBAR BOTTOM
        ========================================== */

        .sidebar-bottom {
            position: absolute;

            left: 18px;
            right: 18px;
            bottom: 20px;
        }


        .profile-mini {
            background: #fafaf9;

            border: 1px solid #eee8e1;

            border-radius: 12px;

            padding: 12px;

            display: flex;

            align-items: center;

            gap: 10px;

            margin-bottom: 10px;
        }


        .avatar {
            width: 38px;
            height: 38px;

            border-radius: 50%;

            background: #fed7aa;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #9a3412;

            font-weight: bold;
        }


        .profile-mini-info {
            overflow: hidden;
        }


        .profile-mini strong {
            display: block;

            font-size: 12px;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }


        .profile-mini span {
            font-size: 10px;

            color: #a8a29e;
        }


        .logout-btn {
            width: 100%;

            border: none;

            background: #fff1f2;

            color: #be123c;

            padding: 10px;

            border-radius: 9px;

            cursor: pointer;

            font-size: 12px;

            transition: 0.2s;
        }


        .logout-btn:hover {
            background: #ffe4e6;
        }


        /* =========================================
           MAIN
        ========================================== */

        .main {
            margin-left: 245px;

            width: calc(100% - 245px);

            padding: 30px 35px 50px;

            position: relative;

            z-index: 1;
        }


        /* =========================================
           TOPBAR
        ========================================== */

        .topbar {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 28px;
        }


        .welcome h1 {
            font-size: 26px;

            margin-bottom: 6px;
        }


        .welcome p {
            font-size: 13px;

            color: #a8a29e;
        }


        .date-box {
            background: white;

            border: 1px solid #eee8e1;

            padding: 10px 15px;

            border-radius: 10px;

            font-size: 12px;

            color: #78716c;
        }


        /* =========================================
           BANNER
        ========================================== */

        .banner {
            background: linear-gradient(
                120deg,
                #ffedd5,
                #fef3c7,
                #ecfccb
            );

            border-radius: 18px;

            padding: 25px 28px;

            margin-bottom: 25px;

            display: flex;

            justify-content: space-between;

            align-items: center;

            overflow: hidden;
        }


        .banner-text h2 {
            font-size: 21px;

            margin-bottom: 8px;
        }


        .banner-text p {
            font-size: 12px;

            color: #78716c;

            max-width: 500px;

            line-height: 1.6;
        }


        .banner-icon {
            font-size: 65px;

            transform: rotate(-5deg);
        }


        /* =========================================
           STATISTICS
        ========================================== */

        .stats {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 18px;

            margin-bottom: 25px;
        }


        .stat-card {
            background: white;

            border: 1px solid #eee8e1;

            border-radius: 15px;

            padding: 20px;

            display: flex;

            align-items: center;

            gap: 15px;
        }


        .stat-icon {
            width: 50px;
            height: 50px;

            border-radius: 13px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 23px;

            flex-shrink: 0;
        }


        .orange {
            background: #ffedd5;
        }


        .purple {
            background: #f3e8ff;
        }


        .green {
            background: #dcfce7;
        }


        .blue {
            background: #dbeafe;
        }


        .stat-content span {
            display: block;

            font-size: 11px;

            color: #a8a29e;

            margin-bottom: 5px;
        }


        .stat-content strong {
            display: block;

            font-size: 25px;
        }


        /* =========================================
           CONTENT GRID
        ========================================== */

        .content-grid {
            display: grid;

            grid-template-columns: 1.6fr 1fr;

            gap: 20px;

            position: relative;

            z-index: 2;
        }


        /* =========================================
           SECTION CARD
        ========================================== */

        .section-card {
            background: white;

            border: 1px solid #eee8e1;

            border-radius: 16px;

            padding: 22px;

            position: relative;

            z-index: 2;
        }


        .section-header {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 20px;
        }


        .section-header h3 {
            font-size: 16px;
        }


        .section-header span {
            font-size: 11px;

            color: #a8a29e;
        }


        /* =========================================
           MENU CARD
        ========================================== */

        .menu-card {
            display: flex;

            align-items: center;

            gap: 14px;

            width: 100%;

            padding: 15px;

            background: #fafaf9;

            border: 1px solid #eee8e1;

            border-radius: 12px;

            margin-bottom: 10px;

            color: #292524;

            text-decoration: none;

            cursor: pointer;

            position: relative;

            z-index: 10;

            transition: all 0.2s ease;
        }


        .menu-card:last-child {
            margin-bottom: 0;
        }


        .menu-card:hover {
            background: #fff7ed;

            border-color: #fed7aa;

            transform: translateY(-2px);

            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }


        .menu-card:active {
            transform: scale(0.99);
        }


        .menu-card-icon {
            width: 44px;
            height: 44px;

            border-radius: 11px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 21px;

            flex-shrink: 0;
        }


        .menu-card-info {
            flex: 1;

            pointer-events: none;
        }


        .menu-card-info strong {
            display: block;

            font-size: 13px;

            margin-bottom: 4px;
        }


        .menu-card-info span {
            display: block;

            font-size: 11px;

            color: #a8a29e;
        }


        .arrow {
            color: #a8a29e;

            font-size: 18px;

            pointer-events: none;
        }


        /* =========================================
           RESEP TERBARU
        ========================================== */

        .recipe-list {
            display: flex;

            flex-direction: column;

            gap: 10px;
        }


        .recipe-item {
            display: flex;

            align-items: center;

            gap: 13px;

            padding: 11px;

            background: #fafaf9;

            border: 1px solid #eee8e1;

            border-radius: 12px;

            color: #292524;

            transition: 0.2s ease;
        }


        .recipe-item:hover {
            background: #fff7ed;

            border-color: #fed7aa;

            transform: translateY(-1px);
        }


        .recipe-image {
            width: 62px;
            height: 62px;

            border-radius: 10px;

            object-fit: cover;

            flex-shrink: 0;
        }


        .recipe-no-image {
            width: 62px;
            height: 62px;

            border-radius: 10px;

            background: #ffedd5;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 24px;

            flex-shrink: 0;
        }


        .recipe-info {
            flex: 1;

            min-width: 0;
        }


        .recipe-info strong {
            display: block;

            font-size: 13px;

            margin-bottom: 5px;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }


        .recipe-info span {
            display: block;

            font-size: 11px;

            color: #a8a29e;

            line-height: 1.5;
        }


        .recipe-arrow {
            color: #a8a29e;

            font-size: 17px;

            flex-shrink: 0;
        }


        /* =========================================
           INFORMATION
        ========================================== */

        .info-box {
            background: #fff7ed;

            border-radius: 13px;

            padding: 17px;

            margin-bottom: 12px;
        }


        .info-box h4 {
            font-size: 13px;

            margin-bottom: 7px;
        }


        .info-box p {
            font-size: 11px;

            color: #78716c;

            line-height: 1.6;
        }


        .info-list {
            list-style: none;
        }


        .info-list li {
            display: flex;

            align-items: center;

            gap: 9px;

            padding: 10px 0;

            border-bottom: 1px solid #f5f5f4;

            font-size: 12px;
        }


        .info-list li:last-child {
            border-bottom: none;
        }


        /* =========================================
           EMPTY STATE
        ========================================== */

        .empty-state {
            text-align: center;

            padding: 30px 15px;

            color: #a8a29e;
        }


        .empty-state-icon {
            font-size: 35px;

            margin-bottom: 10px;
        }


        .empty-state p {
            font-size: 12px;

            margin-bottom: 15px;
        }


        .primary-btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            background: #ea580c;

            color: white;

            padding: 10px 15px;

            border-radius: 9px;

            font-size: 12px;

            font-weight: bold;

            transition: 0.2s ease;
        }


        .primary-btn:hover {
            background: #c2410c;

            transform: translateY(-1px);
        }


        /* =========================================
           FOOTER
        ========================================== */

        footer {
            text-align: center;

            padding-top: 30px;

            color: #a8a29e;

            font-size: 11px;
        }


        /* =========================================
           RESPONSIVE
        ========================================== */

        @media (max-width: 1000px) {

            .stats {
                grid-template-columns: 1fr 1fr;
            }


            .content-grid {
                grid-template-columns: 1fr;
            }

        }


        @media (max-width: 750px) {

            .sidebar {
                width: 70px;

                padding: 18px 10px;
            }


            .brand-text,
            .menu-title,
            .menu a span:not(.menu-icon),
            .sidebar-bottom {
                display: none;
            }


            .brand {
                justify-content: center;

                padding-bottom: 25px;
            }


            .menu a {
                justify-content: center;
            }


            .main {
                margin-left: 70px;

                width: calc(100% - 70px);

                padding: 22px 18px;
            }


            .topbar {
                align-items: flex-start;

                gap: 15px;
            }


            .date-box {
                display: none;
            }


            .banner {
                padding: 20px;
            }


            .banner-icon {
                font-size: 45px;
            }

        }


        @media (max-width: 550px) {

            .stats {
                grid-template-columns: 1fr;
            }


            .welcome h1 {
                font-size: 21px;
            }


            .banner-icon {
                display: none;
            }

        }

    </style>

</head>


<body>


<div class="layout">


    <!-- =========================================
         SIDEBAR USER
    ========================================== -->

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
                    User Area
                </span>

            </div>

        </div>


        <div class="menu-title">
            Menu Utama
        </div>


        <nav class="menu">


            <!-- DASHBOARD -->

            <a
                href="{{ route('user.dashboard') }}"
                class="active"
            >

                <span class="menu-icon">
                    🏠
                </span>

                <span>
                    Dashboard
                </span>

            </a>


            <!-- RESEP SAYA -->

            <a
                href="{{ route('recipes.my') }}"
            >

                <span class="menu-icon">
                    📖
                </span>

                <span>
                    Resep Saya
                </span>

            </a>


            <!-- TAMBAH RESEP -->

            <a
                href="{{ route('recipes.create') }}"
            >

                <span class="menu-icon">
                    ➕
                </span>

                <span>
                    Tambah Resep
                </span>

            </a>


            <!-- RESEP TERSIMPAN -->

            <a
                href="{{ route('user.favorites') }}"
            >

                <span class="menu-icon">
                    ❤️
                </span>

                <span>
                    Resep Tersimpan
                </span>

            </a>


            <!-- PROFILE -->

            <a
                href="{{ route('profile.edit') }}"
            >

                <span class="menu-icon">
                    👤
                </span>

                <span>
                    Profile
                </span>

            </a>


            <!-- LIHAT WEBSITE -->

            <a
                href="{{ route('recipes.index') }}"
            >

                <span class="menu-icon">
                    🌐
                </span>

                <span>
                    Lihat Website
                </span>

            </a>


        </nav>


        <!-- =========================================
             SIDEBAR BOTTOM
        ========================================== -->

        <div class="sidebar-bottom">


            <div class="profile-mini">


                <div class="avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>


                <div class="profile-mini-info">

                    <strong>
                        {{ auth()->user()->name }}
                    </strong>

                    <span>
                        Pengguna
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



    <!-- =========================================
         MAIN
    ========================================== -->

    <main class="main">


        <!-- =========================================
             TOPBAR
        ========================================== -->

        <div class="topbar">


            <div class="welcome">

                <h1>
                    Dashboard 👋
                </h1>

                <p>
                    Kelola resep masakan kamu dari satu tempat.
                </p>

            </div>


            <div class="date-box">

                📅
                {{ now()->format('d M Y') }}

            </div>


        </div>



        <!-- =========================================
             BANNER
        ========================================== -->

        <div class="banner">


            <div class="banner-text">

                <h2>
                    Selamat datang, {{ auth()->user()->name }}!
                </h2>

                <p>
                    Buat koleksi resep favoritmu, tambahkan
                    resep sendiri, dan simpan masakan yang
                    ingin kamu coba nanti.
                </p>

            </div>


            <div class="banner-icon">
                🍜
            </div>


        </div>



        <!-- =========================================
             STATISTICS
        ========================================== -->

        @php

            $myRecipes = \App\Models\Recipe::where(
                'user_id',
                auth()->id()
            )->count();

            $savedRecipes = 0;

            try {

                if (
                    \Illuminate\Support\Facades\Schema::hasTable('favorites')
                ) {

                    $savedRecipes = \Illuminate\Support\Facades\DB::table(
                        'favorites'
                    )
                    ->where('user_id', auth()->id())
                    ->count();

                }

            } catch (\Throwable $e) {

                $savedRecipes = 0;

            }

            $totalRecipes = \App\Models\Recipe::count();

        @endphp


        <div class="stats">


            <!-- RESEP SAYA -->

            <div class="stat-card">

                <div class="stat-icon orange">
                    🍲
                </div>


                <div class="stat-content">

                    <span>
                        RESEP SAYA
                    </span>

                    <strong>
                        {{ $myRecipes }}
                    </strong>

                </div>

            </div>



            <!-- RESEP TERSIMPAN -->

            <div class="stat-card">

                <div class="stat-icon purple">
                    ❤️
                </div>


                <div class="stat-content">

                    <span>
                        RESEP TERSIMPAN
                    </span>

                    <strong>
                        {{ $savedRecipes }}
                    </strong>

                </div>

            </div>



            <!-- TOTAL RESEP -->

            <div class="stat-card">

                <div class="stat-icon green">
                    📚
                </div>


                <div class="stat-content">

                    <span>
                        TOTAL RESEP
                    </span>

                    <strong>
                        {{ $totalRecipes }}
                    </strong>

                </div>

            </div>


        </div>



        <!-- =========================================
             CONTENT
        ========================================== -->

        <div class="content-grid">


            <!-- =====================================
                 MENU USER
            ====================================== -->

            <div class="section-card">


                <div class="section-header">

                    <h3>
                        Menu Saya
                    </h3>

                    <span>
                        Pengguna
                    </span>

                </div>


                <!-- RESEP SAYA -->

                <a
                    href="{{ route('recipes.my') }}"
                    class="menu-card"
                >

                    <div class="menu-card-icon orange">

                        📖

                    </div>


                    <div class="menu-card-info">

                        <strong>
                            Resep Saya
                        </strong>

                        <span>
                            Lihat dan kelola resep yang kamu buat
                        </span>

                    </div>


                    <div class="arrow">
                        →
                    </div>

                </a>



                <!-- TAMBAH RESEP -->

                <a
                    href="{{ route('recipes.create') }}"
                    class="menu-card"
                >

                    <div class="menu-card-icon green">

                        ➕

                    </div>


                    <div class="menu-card-info">

                        <strong>
                            Tambah Resep
                        </strong>

                        <span>
                            Buat dan bagikan resep masakan baru
                        </span>

                    </div>


                    <div class="arrow">
                        →
                    </div>

                </a>



                <!-- FAVORITE -->

                <a
                    href="{{ route('user.favorites') }}"
                    class="menu-card"
                >

                    <div class="menu-card-icon purple">

                        ❤️

                    </div>


                    <div class="menu-card-info">

                        <strong>
                            Resep Tersimpan
                        </strong>

                        <span>
                            Lihat resep yang kamu simpan
                        </span>

                    </div>


                    <div class="arrow">
                        →
                    </div>

                </a>



                <!-- PROFILE -->

                <a
                    href="{{ route('profile.edit') }}"
                    class="menu-card"
                >

                    <div class="menu-card-icon blue">

                        👤

                    </div>


                    <div class="menu-card-info">

                        <strong>
                            Profile
                        </strong>

                        <span>
                            Kelola informasi akun kamu
                        </span>

                    </div>


                    <div class="arrow">
                        →
                    </div>

                </a>


            </div>



            <!-- =====================================
                 RESEP TERBARU
            ====================================== -->

            <div class="section-card">


                <div class="section-header">

                    <h3>
                        Resep Terbaru
                    </h3>

                    <a
                        href="{{ route('recipes.index') }}"
                        style="
                            font-size:11px;
                            color:#ea580c;
                            font-weight:bold;
                        "
                    >
                        Lihat Semua →
                    </a>

                </div>


                @php

                    $latestRecipes = \App\Models\Recipe::latest()
                        ->take(4)
                        ->get();

                @endphp


                @if ($latestRecipes->count() > 0)


                    <div class="recipe-list">


                        @foreach ($latestRecipes as $recipe)


                            <a
                                href="{{ route('recipes.show', $recipe->slug) }}"
                                class="recipe-item"
                            >


                                @if ($recipe->image)

                                    <img
                                        src="{{ $recipe->imageUrl() }}"
                                        alt="{{ $recipe->title }}"
                                        class="recipe-image"
                                    >

                                @else

                                    <div class="recipe-no-image">
                                        🍲
                                    </div>

                                @endif


                                <div class="recipe-info">

                                    <strong>
                                        {{ $recipe->title }}
                                    </strong>

                                    <span>
                                        Lihat detail resep
                                    </span>

                                </div>


                                <div class="recipe-arrow">
                                    →
                                </div>


                            </a>


                        @endforeach


                    </div>


                @else


                    <div class="empty-state">


                        <div class="empty-state-icon">
                            🍳
                        </div>


                        <p>
                            Belum ada resep yang tersedia.
                        </p>


                        <a
                            href="{{ route('recipes.create') }}"
                            class="primary-btn"
                        >
                            + Tambah Resep
                        </a>


                    </div>


                @endif


            </div>


        </div>



        <!-- =========================================
             FOOTER
        ========================================== -->

        <footer>

            © {{ date('Y') }} ResepKu.
            User Dashboard.

        </footer>


    </main>


</div>


</body>

</html>