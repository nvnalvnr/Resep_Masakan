<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | ResepKu</title>

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

        /* SIDEBAR */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            width: 240px;
            background: #fff;
            border-right: 1px solid #e3e3e3;
            padding: 28px 18px;
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

        /* MAIN */

        .main {
            margin-left: 240px;
            min-height: 100vh;
        }

        /* TOPBAR */

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

        .user-name {
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

        /* CONTENT */

        .content {
            padding: 30px 34px 50px;
            max-width: 1250px;
        }

        /* WELCOME */

        .welcome {
            height: 190px;
            background: #fff;
            border: 1px solid #e3e3e3;
            border-radius: 10px;
            display: flex;
            overflow: hidden;
            margin-bottom: 25px;
        }

        .welcome-content {
            flex: 1;
            padding: 30px 32px;
        }

        .welcome-label {
            color: #e85d04;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .welcome h1 {
            font-size: 25px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .welcome p {
            color: #777;
            font-size: 13px;
            line-height: 1.6;
            max-width: 520px;
        }

        .welcome-image {
            width: 34%;
            background-image: url(
                'https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=900&q=80'
            );
            background-size: cover;
            background-position: center;
        }

        /* SUCCESS */

        .success {
            background: #edf8f0;
            border: 1px solid #cce8d2;
            color: #26733b;
            border-radius: 6px;
            padding: 12px 15px;
            font-size: 12px;
            margin-bottom: 20px;
        }

        /* STATS */

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 32px;
        }

        .stat-card {
            background: #fff;
            border: 1px solid #e3e3e3;
            border-radius: 8px;
            padding: 20px;
        }

        .stat-title {
            color: #777;
            font-size: 12px;
            margin-bottom: 12px;
        }

        .stat-number {
            font-size: 27px;
            font-weight: 600;
        }

        .stat-description {
            color: #999;
            font-size: 10px;
            margin-top: 5px;
        }

        /* SECTION */

        .section-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 17px;
        }

        .section-title h2 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .section-title p {
            color: #999;
            font-size: 12px;
        }

        .see-all {
            color: #e85d04;
            font-size: 12px;
            font-weight: 600;
        }

        .add-button {
            background: #e85d04;
            color: #fff;
            padding: 9px 14px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: 600;
        }

        .add-button:hover {
            background: #d65300;
        }

        /* RECIPE */

        .recipe-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-bottom: 35px;
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

        .recipe-content h3 {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .recipe-date {
            color: #999;
            font-size: 11px;
            margin-bottom: 13px;
        }

        .recipe-link {
            color: #e85d04;
            font-size: 12px;
            font-weight: 600;
        }

        /* LOWER */

        .lower-area {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 18px;
        }

        .panel {
            background: #fff;
            border: 1px solid #e3e3e3;
            border-radius: 9px;
            padding: 20px;
        }

        .panel-title {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 18px;
        }

        .recent-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 13px 0;
            border-bottom: 1px solid #eee;
        }

        .recent-item:last-child {
            border-bottom: none;
        }

        .recent-name {
            font-size: 13px;
            font-weight: 600;
        }

        .recent-date {
            color: #999;
            font-size: 11px;
            margin-top: 4px;
        }

        .recent-link {
            color: #e85d04;
            font-size: 11px;
            font-weight: 600;
        }

        /* QUICK ACTION */

        .quick-action {
            display: block;
            border: 1px solid #eee;
            border-radius: 7px;
            padding: 15px;
            margin-bottom: 10px;
            color: #333;
            transition: .2s;
        }

        .quick-action:last-child {
            margin-bottom: 0;
        }

        .quick-action:hover {
            border-color: #e85d04;
        }

        .quick-action strong {
            display: block;
            font-size: 13px;
        }

        .quick-action span {
            display: block;
            color: #999;
            font-size: 11px;
            margin-top: 5px;
        }

        /* EMPTY */

        .empty {
            background: #fff;
            border: 1px solid #e3e3e3;
            border-radius: 9px;
            padding: 45px 20px;
            text-align: center;
            margin-bottom: 35px;
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

        /* RESPONSIVE */

        @media (max-width: 1000px) {
            .recipe-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .lower-area {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 750px) {
            .layout {
                display: block;
            }

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

            .welcome {
                height: auto;
            }

            .welcome-image {
                display: none;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .recipe-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="layout">

    <!-- SIDEBAR -->

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

            {{-- Dashboard --}}
            <a
                href="{{ route('user.dashboard') }}"
                class="active"
            >
                <span class="menu-icon">⌂</span>
                Dashboard
            </a>


            {{-- Resep Saya --}}
            <a href="{{ route('recipes.index') }}">
                <span class="menu-icon">▣</span>
                Resep Saya
            </a>


            {{-- Tambah Resep --}}
            <a href="{{ route('recipes.create') }}">
                <span class="menu-icon">＋</span>
                Tambah Resep
            </a>


            {{-- Profil --}}
            <a href="{{ route('profile.edit') }}">
                <span class="menu-icon">○</span>
                Profil
            </a>

        </nav>

    </aside>


    <!-- MAIN -->

    <main class="main">

        <!-- TOPBAR -->

        <header class="topbar">

            <div class="page-name">
                Dashboard
            </div>

            <div class="user-area">

                <div>
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

            {{-- SUCCESS MESSAGE --}}

            @if (session('success'))

                <div class="success">
                    {{ session('success') }}
                </div>

            @endif


            <!-- WELCOME -->

            <div class="welcome">

                <div class="welcome-content">

                    <div class="welcome-label">
                        Dashboard User
                    </div>

                    <h1>
                        Selamat datang, {{ $user->name }}
                    </h1>

                    <p>
                        Kelola resep yang kamu buat, lihat resep terbaru,
                        atau tambahkan resep masakan baru dari halaman ini.
                    </p>

                </div>

                <div class="welcome-image"></div>

            </div>


            <!-- STATISTICS -->

            <div class="stats">

                <div class="stat-card">

                    <div class="stat-title">
                        Total Resep
                    </div>

                    <div class="stat-number">
                        {{ $totalRecipes }}
                    </div>

                    <div class="stat-description">
                        Jumlah resep yang kamu buat
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-title">
                        Resep Terbaru
                    </div>

                    <div class="stat-number">
                        {{ $latestRecipes->count() }}
                    </div>

                    <div class="stat-description">
                        Resep terbaru yang ditampilkan
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-title">
                        Status Akun
                    </div>

                    <div
                        class="stat-number"
                        style="font-size: 19px;"
                    >
                        Aktif
                    </div>

                    <div class="stat-description">
                        Akun kamu sedang aktif
                    </div>

                </div>

            </div>


            <!-- RESEP TERBARU -->

            <div class="section-header">

                <div class="section-title">

                    <h2>
                        Resep Terbaru
                    </h2>

                    <p>
                        Resep yang baru kamu tambahkan
                    </p>

                </div>

                <a
                    href="{{ route('recipes.create') }}"
                    class="add-button"
                >
                    + Tambah Resep
                </a>

            </div>


            @if ($latestRecipes->count() > 0)

                <div class="recipe-grid">

                    @foreach ($latestRecipes as $recipe)

                        <div class="recipe-card">

                            <div class="recipe-image">

                                @if ($recipe->image)

                                    <img
                                        src="{{ $recipe->image }}"
                                        alt="{{ $recipe->title }}"
                                    >

                                @else

                                    <div class="no-image">
                                        Tidak ada gambar
                                    </div>

                                @endif

                            </div>

                            <div class="recipe-content">

                                <h3>
                                    {{ $recipe->title }}
                                </h3>

                                <div class="recipe-date">
                                    {{ $recipe->created_at->format('d M Y') }}
                                </div>

                                <a
                                    href="{{ route('recipes.show', $recipe->slug) }}"
                                    class="recipe-link"
                                >
                                    Lihat resep →
                                </a>

                            </div>

                        </div>

                    @endforeach

                </div>

            @else

                <div class="empty">

                    <h3>
                        Belum ada resep
                    </h3>

                    <p>
                        Kamu belum membuat resep. Tambahkan resep pertama kamu.
                    </p>

                    <a
                        href="{{ route('recipes.create') }}"
                        class="add-button"
                    >
                        Tambah Resep
                    </a>

                </div>

            @endif


            <!-- BAGIAN BAWAH -->

            <div class="lower-area">

                <!-- RESEP TERAKHIR -->

                <div class="panel">

                    <div class="panel-title">
                        Resep yang Baru Ditambahkan
                    </div>

                    @if ($recipes->count() > 0)

                        @foreach ($recipes->take(4) as $recipe)

                            <div class="recent-item">

                                <div>

                                    <div class="recent-name">
                                        {{ $recipe->title }}
                                    </div>

                                    <div class="recent-date">
                                        {{ $recipe->created_at->format('d M Y, H:i') }}
                                    </div>

                                </div>

                                <a
                                    href="{{ route('recipes.show', $recipe->slug) }}"
                                    class="recent-link"
                                >
                                    Lihat
                                </a>

                            </div>

                        @endforeach

                    @else

                        <p style="font-size: 12px; color: #999;">
                            Belum ada resep.
                        </p>

                    @endif

                </div>


                <!-- MENU CEPAT -->

                <div class="panel">

                    <div class="panel-title">
                        Menu Cepat
                    </div>


                    <a
                        href="{{ route('recipes.create') }}"
                        class="quick-action"
                    >

                        <strong>
                            Tambah Resep
                        </strong>

                        <span>
                            Buat resep masakan baru.
                        </span>

                    </a>


                    <a
                        href="{{ route('recipes.index') }}"
                        class="quick-action"
                    >

                        <strong>
                            Resep Saya
                        </strong>

                        <span>
                            Lihat daftar resep.
                        </span>

                    </a>


                    <a
                        href="{{ route('profile.edit') }}"
                        class="quick-action"
                    >

                        <strong>
                            Profil
                        </strong>

                        <span>
                            Kelola informasi akun.
                        </span>

                    </a>

                </div>

            </div>

        </section>

    </main>

</div>

</body>

</html>