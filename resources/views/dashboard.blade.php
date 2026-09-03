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

        :root {
            --bg: #f7f3ed;
            --white: #ffffff;
            --surface: #fffdf9;
            --surface-soft: #faf7f2;

            --text: #2d2723;
            --muted: #81776e;
            --light-muted: #a8a099;

            --border: #e7dfd5;

            --brown: #6b3424;
            --brown-dark: #512719;

            --orange: #ea580c;
            --orange-dark: #c2410c;

            --soft-orange: #ffedd5;
            --soft-purple: #f3e8ff;
            --soft-green: #dcfce7;
            --soft-blue: #dbeafe;
            --soft-red: #fff1f2;
        }


        html {
            scroll-behavior: smooth;
        }


        body {
            font-family: Arial, Helvetica, sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
        }


        a {
            text-decoration: none;
            color: inherit;
        }


        button,
        input {
            font-family: inherit;
        }


        /* =========================================
           LAYOUT
        ========================================== */

        .layout {
            min-height: 100vh;
        }


        /* =========================================
           SIDEBAR
        ========================================== */

        .sidebar {
            position: fixed;

            top: 0;
            left: 0;
            bottom: 0;

            width: 250px;

            background: var(--white);

            border-right: 1px solid var(--border);

            padding: 24px 18px;

            display: flex;
            flex-direction: column;

            z-index: 100;
        }


        /* =========================================
           BRAND
        ========================================== */

        .brand {
            display: flex;
            align-items: center;

            gap: 11px;

            padding: 5px 10px 28px;
        }


        .brand-icon {
            width: 44px;
            height: 44px;

            background: var(--soft-orange);

            border-radius: 13px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 23px;

            flex-shrink: 0;
        }


        .brand-text h2 {
            font-size: 18px;

            line-height: 1.2;

            color: var(--text);
        }


        .brand-text span {
            display: block;

            margin-top: 3px;

            font-size: 11px;

            color: var(--light-muted);
        }


        /* =========================================
           MENU
        ========================================== */

        .menu-title {
            margin: 4px 10px 10px;

            color: var(--light-muted);

            font-size: 10px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1px;
        }


        .menu {
            display: flex;
            flex-direction: column;

            gap: 5px;
        }


        .menu a {
            position: relative;

            display: flex;
            align-items: center;

            gap: 12px;

            width: 100%;

            padding: 13px 13px;

            border-radius: 11px;

            color: #57534e;

            font-size: 13px;
            font-weight: 500;

            transition:
                background .2s ease,
                color .2s ease,
                transform .2s ease;
        }


        .menu a:hover {
            background: #fff7ed;

            color: var(--orange);

            transform: translateX(2px);
        }


        .menu a.active {
            background: var(--soft-orange);

            color: var(--orange);

            font-weight: 700;
        }


        .menu-icon {
            width: 28px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 18px;

            flex-shrink: 0;
        }


        /* =========================================
           SIDEBAR BOTTOM
        ========================================== */

        .sidebar-bottom {
            margin-top: auto;
        }


        .profile-mini {
            display: flex;
            align-items: center;

            gap: 10px;

            padding: 12px;

            margin-bottom: 10px;

            background: var(--surface-soft);

            border: 1px solid var(--border);

            border-radius: 13px;
        }


        .avatar {
            width: 40px;
            height: 40px;

            border-radius: 50%;

            background: #fed7aa;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #9a3412;

            font-size: 14px;
            font-weight: 700;

            flex-shrink: 0;
        }


        .profile-mini-info {
            min-width: 0;
        }


        .profile-mini-info strong {
            display: block;

            font-size: 12px;

            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }


        .profile-mini-info span {
            display: block;

            margin-top: 3px;

            color: var(--light-muted);

            font-size: 10px;
        }


        .logout-btn {
            width: 100%;

            border: none;

            background: var(--soft-red);

            color: #be123c;

            padding: 11px 12px;

            border-radius: 10px;

            cursor: pointer;

            font-size: 12px;
            font-weight: 600;

            transition: .2s ease;
        }


        .logout-btn:hover {
            background: #ffe4e6;

            transform: translateY(-1px);
        }


        /* =========================================
           MAIN
        ========================================== */

        .main {
            margin-left: 250px;

            width: calc(100% - 250px);

            padding: 32px 38px 50px;
        }


        /* =========================================
           TOPBAR
        ========================================== */

        .topbar {
            display: flex;

            align-items: center;
            justify-content: space-between;

            gap: 20px;

            margin-bottom: 28px;
        }


        .welcome h1 {
            font-size: 28px;

            line-height: 1.25;

            margin-bottom: 7px;
        }


        .welcome p {
            color: var(--muted);

            font-size: 14px;

            line-height: 1.5;
        }


        .date-box {
            display: flex;
            align-items: center;

            gap: 7px;

            padding: 11px 15px;

            background: var(--white);

            border: 1px solid var(--border);

            border-radius: 11px;

            color: var(--muted);

            font-size: 12px;

            white-space: nowrap;
        }


        /* =========================================
           WELCOME BANNER
        ========================================== */

        .banner {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 30px;

            padding: 28px 30px;

            margin-bottom: 25px;

            background:
                linear-gradient(
                    120deg,
                    #ffedd5 0%,
                    #fef3c7 52%,
                    #ecfccb 100%
                );

            border: 1px solid #f1e1cc;

            border-radius: 19px;

            overflow: hidden;
        }


        .banner-text {
            min-width: 0;
        }


        .banner-text h2 {
            font-size: 22px;

            line-height: 1.35;

            margin-bottom: 8px;
        }


        .banner-text p {
            max-width: 620px;

            color: #716860;

            font-size: 13px;

            line-height: 1.7;
        }


        .banner-icon {
            width: 90px;
            height: 90px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: rgba(255,255,255,.55);

            border-radius: 25px;

            font-size: 53px;

            transform: rotate(-5deg);

            flex-shrink: 0;
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
            display: flex;
            align-items: center;

            gap: 16px;

            min-height: 105px;

            padding: 20px;

            background: var(--white);

            border: 1px solid var(--border);

            border-radius: 16px;

            transition: .2s ease;
        }


        .stat-card:hover {
            transform: translateY(-2px);

            box-shadow: 0 8px 25px rgba(70, 50, 30, .06);
        }


        .stat-icon {
            width: 53px;
            height: 53px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 14px;

            font-size: 24px;

            flex-shrink: 0;
        }


        .orange {
            background: var(--soft-orange);
        }


        .purple {
            background: var(--soft-purple);
        }


        .green {
            background: var(--soft-green);
        }


        .blue {
            background: var(--soft-blue);
        }


        .stat-content span {
            display: block;

            margin-bottom: 6px;

            color: var(--light-muted);

            font-size: 11px;
            font-weight: 700;

            letter-spacing: .4px;
        }


        .stat-content strong {
            display: block;

            color: var(--text);

            font-size: 27px;

            line-height: 1;
        }


        /* =========================================
           CONTENT GRID
        ========================================== */

        .content-grid {
            display: grid;

            grid-template-columns: minmax(0, 1.35fr) minmax(330px, 1fr);

            gap: 20px;
        }


        /* =========================================
           SECTION CARD
        ========================================== */

        .section-card {
            min-width: 0;

            padding: 23px;

            background: var(--white);

            border: 1px solid var(--border);

            border-radius: 17px;
        }


        .section-header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 15px;

            margin-bottom: 18px;
        }


        .section-header h3 {
            font-size: 17px;
        }


        .section-header span {
            color: var(--light-muted);

            font-size: 11px;
        }


        .section-header a {
            color: var(--orange);

            font-size: 11px;
            font-weight: 700;

            transition: .2s ease;
        }


        .section-header a:hover {
            color: var(--orange-dark);
        }


        /* =========================================
           USER MENU CARDS
        ========================================== */

        .menu-card {
            display: flex;
            align-items: center;

            gap: 14px;

            width: 100%;

            padding: 15px;

            margin-bottom: 10px;

            background: var(--surface-soft);

            border: 1px solid var(--border);

            border-radius: 13px;

            color: var(--text);

            cursor: pointer;

            transition:
                background .2s ease,
                border-color .2s ease,
                transform .2s ease,
                box-shadow .2s ease;
        }


        .menu-card:last-child {
            margin-bottom: 0;
        }


        .menu-card:hover {
            background: #fffaf4;

            border-color: #f0cfae;

            transform: translateY(-2px);

            box-shadow: 0 7px 20px rgba(70, 50, 30, .06);
        }


        .menu-card:active {
            transform: translateY(0);
        }


        .menu-card-icon {
            width: 45px;
            height: 45px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 12px;

            font-size: 21px;

            flex-shrink: 0;
        }


        .menu-card-info {
            flex: 1;

            min-width: 0;
        }


        .menu-card-info strong {
            display: block;

            margin-bottom: 4px;

            font-size: 13px;
        }


        .menu-card-info span {
            display: block;

            color: var(--light-muted);

            font-size: 11px;

            line-height: 1.5;
        }


        .arrow {
            color: #b0a69d;

            font-size: 20px;

            flex-shrink: 0;

            transition: .2s ease;
        }


        .menu-card:hover .arrow {
            color: var(--orange);

            transform: translateX(3px);
        }


        /* =========================================
           RECIPE LIST
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

            width: 100%;

            padding: 11px;

            background: var(--surface-soft);

            border: 1px solid var(--border);

            border-radius: 12px;

            color: var(--text);

            transition: .2s ease;
        }


        .recipe-item:hover {
            background: #fffaf4;

            border-color: #f0cfae;

            transform: translateY(-1px);
        }


        .recipe-image,
        .recipe-no-image {
            width: 62px;
            height: 62px;

            border-radius: 10px;

            flex-shrink: 0;
        }


        .recipe-image {
            object-fit: cover;
        }


        .recipe-no-image {
            display: flex;
            align-items: center;
            justify-content: center;

            background: var(--soft-orange);

            font-size: 25px;
        }


        .recipe-info {
            flex: 1;

            min-width: 0;
        }


        .recipe-info strong {
            display: block;

            margin-bottom: 5px;

            font-size: 13px;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }


        .recipe-info span {
            display: block;

            color: var(--light-muted);

            font-size: 11px;

            line-height: 1.5;
        }


        .recipe-arrow {
            color: #b0a69d;

            font-size: 19px;

            flex-shrink: 0;

            transition: .2s ease;
        }


        .recipe-item:hover .recipe-arrow {
            color: var(--orange);

            transform: translateX(3px);
        }


        /* =========================================
           EMPTY STATE
        ========================================== */

        .empty-state {
            padding: 32px 15px;

            text-align: center;

            color: var(--light-muted);
        }


        .empty-state-icon {
            margin-bottom: 10px;

            font-size: 38px;
        }


        .empty-state p {
            margin-bottom: 16px;

            font-size: 12px;
        }


        .primary-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            gap: 7px;

            padding: 11px 16px;

            background: var(--orange);

            color: white;

            border-radius: 10px;

            font-size: 12px;
            font-weight: 700;

            transition: .2s ease;
        }


        .primary-btn:hover {
            background: var(--orange-dark);

            transform: translateY(-1px);
        }


        /* =========================================
           FOOTER
        ========================================== */

        footer {
            padding-top: 30px;

            color: var(--light-muted);

            text-align: center;

            font-size: 11px;
        }


        /* =========================================
           RESPONSIVE 1100
        ========================================== */

        @media (max-width: 1100px) {

            .main {
                padding-left: 28px;
                padding-right: 28px;
            }


            .content-grid {
                grid-template-columns: 1fr;
            }

        }


        /* =========================================
           RESPONSIVE 900
        ========================================== */

        @media (max-width: 900px) {

            .stats {
                grid-template-columns: 1fr 1fr;
            }


            .stats .stat-card:last-child {
                grid-column: span 2;
            }

        }


        /* =========================================
           RESPONSIVE 750
        ========================================== */

        @media (max-width: 750px) {

            .sidebar {
                width: 74px;

                padding: 18px 10px;
            }


            .brand {
                justify-content: center;

                padding: 5px 0 25px;
            }


            .brand-text,
            .menu-title,
            .menu a span:not(.menu-icon),
            .sidebar-bottom {
                display: none;
            }


            .menu a {
                justify-content: center;

                padding: 13px 8px;
            }


            .menu-icon {
                width: auto;

                font-size: 19px;
            }


            .main {
                margin-left: 74px;

                width: calc(100% - 74px);

                padding: 25px 20px 40px;
            }


            .welcome h1 {
                font-size: 24px;
            }


            .welcome p {
                font-size: 13px;
            }


            .date-box {
                display: none;
            }


            .banner {
                padding: 23px;
            }


            .banner-text h2 {
                font-size: 20px;
            }


            .banner-text p {
                font-size: 12px;
            }

        }


        /* =========================================
           RESPONSIVE 550
        ========================================== */

        @media (max-width: 550px) {

            .main {
                padding: 20px 15px 35px;
            }


            .topbar {
                margin-bottom: 20px;
            }


            .welcome h1 {
                font-size: 21px;
            }


            .welcome p {
                font-size: 12px;
            }


            .banner {
                padding: 20px;

                margin-bottom: 18px;
            }


            .banner-icon {
                display: none;
            }


            .banner-text h2 {
                font-size: 18px;
            }


            .banner-text p {
                font-size: 11px;
            }


            .stats {
                grid-template-columns: 1fr;

                gap: 10px;

                margin-bottom: 18px;
            }


            .stats .stat-card:last-child {
                grid-column: auto;
            }


            .stat-card {
                min-height: 90px;

                padding: 16px;
            }


            .stat-icon {
                width: 46px;
                height: 46px;

                font-size: 21px;
            }


            .stat-content strong {
                font-size: 24px;
            }


            .section-card {
                padding: 17px;
            }


            .section-header h3 {
                font-size: 15px;
            }


            .menu-card {
                padding: 13px;
            }


            .menu-card-icon {
                width: 41px;
                height: 41px;

                font-size: 19px;
            }


            .menu-card-info strong {
                font-size: 12px;
            }


            .menu-card-info span {
                font-size: 10px;
            }


            .recipe-image,
            .recipe-no-image {
                width: 55px;
                height: 55px;
            }

        }


        /* =========================================
           VERY SMALL SCREEN
        ========================================== */

        @media (max-width: 400px) {

            .sidebar {
                width: 62px;

                padding-left: 7px;
                padding-right: 7px;
            }


            .main {
                margin-left: 62px;

                width: calc(100% - 62px);
            }


            .menu a {
                padding: 12px 5px;
            }


            .menu-icon {
                font-size: 18px;
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


        <!-- BRAND -->

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


        <!-- MENU TITLE -->

        <div class="menu-title">
            Menu Utama
        </div>


        <!-- MENU -->

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

            <a href="{{ route('recipes.my') }}">

                <span class="menu-icon">
                    📖
                </span>

                <span>
                    Resep Saya
                </span>

            </a>


            <!-- TAMBAH RESEP -->

            <a href="{{ route('recipes.create') }}">

                <span class="menu-icon">
                    ➕
                </span>

                <span>
                    Tambah Resep
                </span>

            </a>


            <!-- RESEP TERSIMPAN -->

            <a href="{{ route('user.favorites') }}">

                <span class="menu-icon">
                    ❤️
                </span>

                <span>
                    Resep Tersimpan
                </span>

            </a>


            <!-- PROFILE -->

            <a href="{{ route('profile.edit') }}">

                <span class="menu-icon">
                    👤
                </span>

                <span>
                    Profile
                </span>

            </a>


            <!-- WEBSITE -->

            <a href="{{ route('recipes.index') }}">

                <span class="menu-icon">
                    🌐
                </span>

                <span>
                    Lihat Website
                </span>

            </a>


        </nav>


        <!-- =================================================
             SIDEBAR BOTTOM
        ================================================== -->

        <div class="sidebar-bottom">


            <!-- USER -->

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


            <!-- LOGOUT -->

            <form
                method="POST"
                action="{{ route('logout') }}"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-btn"
                >

                    🚪&nbsp; Keluar

                </button>

            </form>


        </div>


    </aside>



    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->

    <main class="main">


        <!-- =================================================
             TOPBAR
        ================================================== -->

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

                <span>
                    📅
                </span>

                <span>
                    {{ now()->format('d M Y') }}
                </span>

            </div>


        </div>



        <!-- =================================================
             WELCOME BANNER
        ================================================== -->

        <section class="banner">


            <div class="banner-text">

                <h2>
                    Selamat datang, {{ auth()->user()->name }}! 👋
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


        </section>



        <!-- =================================================
             STATISTICS
        ================================================== -->

        @php

            /*
            |--------------------------------------------------------------------------
            | RESEP MILIK USER
            |--------------------------------------------------------------------------
            */

            $myRecipes = \App\Models\Recipe::where(
                'user_id',
                auth()->id()
            )->count();


            /*
            |--------------------------------------------------------------------------
            | RESEP TERSIMPAN
            |--------------------------------------------------------------------------
            */

            $savedRecipes = 0;

            try {

                if (
                    \Illuminate\Support\Facades\Schema::hasTable('favorites')
                ) {

                    $savedRecipes =
                        \Illuminate\Support\Facades\DB::table('favorites')
                            ->where('user_id', auth()->id())
                            ->count();

                }

            } catch (\Throwable $e) {

                $savedRecipes = 0;

            }


            /*
            |--------------------------------------------------------------------------
            | TOTAL SEMUA RESEP
            |--------------------------------------------------------------------------
            */

            $totalRecipes =
                \App\Models\Recipe::count();


            /*
            |--------------------------------------------------------------------------
            | RESEP TERBARU
            |--------------------------------------------------------------------------
            */

            $latestRecipes =
                \App\Models\Recipe::latest()
                    ->take(4)
                    ->get();

        @endphp


        <section class="stats">


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


        </section>



        <!-- =================================================
             CONTENT GRID
        ================================================== -->

        <section class="content-grid">


            <!-- =================================================
                 MENU SAYA
            ================================================== -->

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



                <!-- RESEP TERSIMPAN -->

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



            <!-- =================================================
                 RESEP TERBARU
            ================================================== -->

            <div class="section-card">


                <div class="section-header">

                    <h3>
                        Resep Terbaru
                    </h3>


                    <a href="{{ route('recipes.index') }}">
                        Lihat Semua →
                    </a>

                </div>


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
                                        Lihat detail resep →
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


        </section>



        <!-- =================================================
             FOOTER
        ================================================== -->

        <footer>

            © {{ date('Y') }} ResepKu.
            User Dashboard.

        </footer>


    </main>


</div>


</body>

</html>