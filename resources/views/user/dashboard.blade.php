<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Dashboard | ResepKu
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


        /* =====================================================
           LAYOUT
        ===================================================== */

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


        /* BRAND */

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


        /* MENU LABEL */

        .menu-label {

            color: #999;

            font-size: 10px;

            font-weight: 600;

            letter-spacing: .8px;

            text-transform: uppercase;

            margin: 0 14px 10px;
        }


        /* MENU */

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

            min-height: 40px;
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

            line-height: 1;
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

            transition: .2s;
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

            color: #444;

            font-size: 13px;
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


        /* =====================================================
           SUCCESS
        ===================================================== */

        .success {

            background: #edf8f0;

            border: 1px solid #cce8d2;

            color: #26733b;

            border-radius: 6px;

            padding: 12px 15px;

            font-size: 12px;

            margin-bottom: 20px;
        }


        /* =====================================================
           WELCOME
        ===================================================== */

        .welcome {

            background: #ffffff;

            border: 1px solid #e3e3e3;

            border-radius: 10px;

            padding: 28px 30px;

            margin-bottom: 25px;
        }

        .welcome-label {

            color: #e85d04;

            font-size: 10px;

            font-weight: 600;

            text-transform: uppercase;

            margin-bottom: 9px;
        }

        .welcome h1 {

            font-size: 25px;

            font-weight: 600;

            margin-bottom: 8px;
        }

        .welcome p {

            color: #777;

            font-size: 12px;

            line-height: 1.7;

            max-width: 650px;
        }


        /* =====================================================
           STATS
        ===================================================== */

        .stats {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 16px;

            margin-bottom: 30px;
        }

        .stat-card {

            background: #ffffff;

            border: 1px solid #e3e3e3;

            border-radius: 9px;

            padding: 19px;
        }

        .stat-label {

            color: #888;

            font-size: 11px;

            margin-bottom: 8px;
        }

        .stat-number {

            font-size: 25px;

            font-weight: 600;
        }

        .stat-description {

            color: #aaa;

            font-size: 10px;

            margin-top: 5px;
        }


        /* =====================================================
           SECTION HEADER
        ===================================================== */

        .section-header {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 16px;
        }

        .section-title h2 {

            font-size: 18px;

            font-weight: 600;

            margin-bottom: 4px;
        }

        .section-title p {

            color: #999;

            font-size: 11px;
        }

        .section-link {

            color: #e85d04;

            font-size: 11px;

            font-weight: 600;
        }

        .section-link:hover {

            color: #c2410c;
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

            box-shadow:
                0 5px 15px rgba(0, 0, 0, .04);
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

            padding: 16px;
        }

        .recipe-content h3 {

            font-size: 15px;

            font-weight: 600;

            margin-bottom: 7px;

            line-height: 1.4;
        }

        .recipe-author {

            color: #999;

            font-size: 10px;

            margin-bottom: 14px;

            line-height: 1.5;
        }

        .recipe-author strong {

            color: #666;
        }

        .view-button {

            display: inline-block;

            background: #fff1e8;

            color: #e85d04;

            padding: 8px 11px;

            border-radius: 5px;

            font-size: 10px;

            font-weight: 600;
        }

        .view-button:hover {

            background: #ffe3d1;
        }


        /* =====================================================
           EMPTY
        ===================================================== */

        .empty {

            background: #ffffff;

            border: 1px solid #e3e3e3;

            border-radius: 9px;

            padding: 50px 20px;

            text-align: center;
        }

        .empty h3 {

            font-size: 16px;

            margin-bottom: 7px;
        }

        .empty p {

            color: #999;

            font-size: 11px;

            margin-bottom: 16px;
        }

        .add-button {

            display: inline-block;

            background: #e85d04;

            color: #ffffff;

            padding: 10px 15px;

            border-radius: 6px;

            font-size: 11px;

            font-weight: 600;
        }

        .add-button:hover {

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

            .stats {

                grid-template-columns:
                    repeat(2, 1fr);
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

            .stats,
            .recipe-grid {

                grid-template-columns: 1fr;
            }
        }

    </style>

</head>


<body>

<div class="layout">


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <x-role-sidebar active="dashboard" />


    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="main">


        <!-- TOPBAR -->

        <header class="topbar">


            <div class="page-name">

                Dashboard

            </div>


            <div class="user-area">


                <div class="user-info">

                    <span class="user-name">

                        {{ $user->name }}

                    </span>


                    <span class="user-role">
                        {{ ucfirst(auth()->user()->role) }}
                    </span>

                </div>


                <div class="avatar">

                    {{ strtoupper(substr($user->name, 0, 1)) }}

                </div>


            </div>

        </header>


        <!-- =================================================
             CONTENT
        ================================================== -->

        <section class="content">


            <!-- SUCCESS -->

            @if(session('success'))

                <div class="success">

                    {{ session('success') }}

                </div>

            @endif


            <!-- =================================================
                 WELCOME
            ================================================== -->

            <div class="welcome">


                <div class="welcome-label">

                    Dashboard User

                </div>


                <h1>

                    Selamat datang,
                    {{ $user->name }}

                </h1>


                <p>

                    Kelola resep masakan kamu, lihat resep terbaru,
                    dan simpan resep yang ingin kamu coba nanti.

                </p>


            </div>


            <!-- =================================================
                 STATISTIK
            ================================================== -->

            <div class="stats">


                <!-- TOTAL RESEP -->

                <div class="stat-card">

                    <div class="stat-label">

                        Total Semua Resep

                    </div>


                    <div class="stat-number">

                        {{ $totalRecipes }}

                    </div>


                    <div class="stat-description">

                        Semua resep di ResepKu

                    </div>

                </div>


                <!-- RESEP SAYA -->

                <div class="stat-card">

                    <div class="stat-label">

                        Resep Saya

                    </div>


                    <div class="stat-number">

                        {{ $totalMyRecipes }}

                    </div>


                    <div class="stat-description">

                        Resep yang kamu buat

                    </div>

                </div>


                <!-- FAVORITE -->

                <div class="stat-card">

                    <div class="stat-label">

                        Resep Tersimpan

                    </div>


                    <div class="stat-number">

                        {{ $totalFavorites }}

                    </div>


                    <div class="stat-description">

                        Resep yang kamu simpan

                    </div>

                </div>


            </div>


            <!-- =================================================
                 RESEP TERBARU
            ================================================== -->

            <div class="section-header">


                <div class="section-title">

                    <h2>

                        Resep Terbaru

                    </h2>


                    <p>

                        Resep terbaru dari semua pengguna.

                    </p>

                </div>


                <a
                    href="{{ route('recipes.my') }}"
                    class="section-link"
                >

                    Resep Saya →

                </a>


            </div>


            @if($recipes->count() > 0)


                <div class="recipe-grid">


                    @foreach($recipes as $recipe)


                        <article class="recipe-card">


                            <!-- FOTO -->

                            <div class="recipe-image">


                                @if($recipe->imageUrl())

                                    <img
                                        src="{{ $recipe->imageUrl() }}"
                                        alt="{{ $recipe->title }}"
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


                            <!-- INFO -->

                            <div class="recipe-content">


                                <h3>

                                    {{ $recipe->title }}

                                </h3>


                                <div class="recipe-author">

                                    Dibuat oleh:

                                    <strong>

                                        {{ $recipe->user->name ?? 'Pengguna' }}

                                    </strong>

                                </div>


                                <a
                                    href="{{ route('recipes.show', $recipe->slug) }}"
                                    class="view-button"
                                >

                                    Lihat Resep

                                </a>


                            </div>


                        </article>


                    @endforeach


                </div>


            @else


                <div class="empty">


                    <h3>

                        Belum ada resep

                    </h3>


                    <p>

                        Belum ada resep yang tersedia.

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
