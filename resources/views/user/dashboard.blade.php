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
            background: #f7f6f3;
            color: #292524;
        }

        a {
            text-decoration: none;
        }

        /* =========================
           LAYOUT
        ========================= */

        .layout {
            min-height: 100vh;
        }

        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;

            width: 235px;

            background: #ffffff;

            border-right: 1px solid #e7e5e4;

            padding: 25px 16px;

            display: flex;
            flex-direction: column;

            z-index: 50;
        }

        .brand {
            padding: 0 12px;

            margin-bottom: 35px;
        }

        .brand a {
            color: #292524;

            font-size: 22px;

            font-weight: 700;
        }

        .brand a span {
            color: #ea580c;
        }

        .brand small {
            display: block;

            color: #a8a29e;

            font-size: 10px;

            margin-top: 5px;
        }

        .menu-label {
            color: #a8a29e;

            font-size: 10px;

            font-weight: 600;

            text-transform: uppercase;

            letter-spacing: .6px;

            margin: 0 12px 10px;
        }

        .menu {
            display: flex;

            flex-direction: column;

            gap: 4px;
        }

        .menu a {
            display: flex;

            align-items: center;

            gap: 11px;

            padding: 11px 12px;

            border-radius: 7px;

            color: #57534e;

            font-size: 13px;

            transition: .2s;
        }

        .menu a:hover {
            background: #fafaf9;

            color: #ea580c;
        }

        .menu a.active {
            background: #fff1e8;

            color: #ea580c;

            font-weight: 600;
        }

        .menu-icon {
            width: 20px;

            text-align: center;

            font-size: 15px;

            flex-shrink: 0;
        }

        /* =========================
           SIDEBAR USER
        ========================= */

        .sidebar-bottom {
            margin-top: auto;

            border-top: 1px solid #eeeae6;

            padding-top: 15px;
        }

        .profile-box {
            display: flex;

            align-items: center;

            gap: 10px;

            padding: 9px 10px;

            margin-bottom: 8px;
        }

        .avatar {
            width: 36px;
            height: 36px;

            border-radius: 50%;

            background: #ea580c;

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
            font-size: 12px;

            font-weight: 600;

            color: #292524;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }

        .profile-role {
            color: #a8a29e;

            font-size: 10px;

            margin-top: 3px;
        }

        .logout-form {
            width: 100%;
        }

        .logout-button {
            width: 100%;

            border: none;

            background: #fff1f2;

            color: #be123c;

            padding: 10px 12px;

            border-radius: 7px;

            font-size: 12px;

            cursor: pointer;

            text-align: left;

            transition: .2s;
        }

        .logout-button:hover {
            background: #ffe4e6;
        }

        /* =========================
           MAIN
        ========================= */

        .main {
            margin-left: 235px;

            min-height: 100vh;
        }

        /* =========================
           TOPBAR
        ========================= */

        .topbar {
            height: 68px;

            background: #ffffff;

            border-bottom: 1px solid #e7e5e4;

            padding: 0 32px;

            display: flex;

            align-items: center;

            justify-content: space-between;
        }

        .page-name {
            font-size: 17px;

            font-weight: 600;
        }

        .topbar-right {
            color: #a8a29e;

            font-size: 12px;
        }

        /* =========================
           CONTENT
        ========================= */

        .content {
            padding: 28px 32px 50px;

            max-width: 1250px;
        }

        /* =========================
           SUCCESS
        ========================= */

        .success {
            background: #f0fdf4;

            border: 1px solid #bbf7d0;

            color: #15803d;

            border-radius: 7px;

            padding: 11px 14px;

            font-size: 12px;

            margin-bottom: 20px;
        }

        /* =========================
           WELCOME
        ========================= */

        .welcome {
            background: #ffffff;

            border: 1px solid #e7e5e4;

            border-radius: 10px;

            display: flex;

            min-height: 175px;

            overflow: hidden;

            margin-bottom: 23px;
        }

        .welcome-content {
            flex: 1;

            padding: 28px 30px;
        }

        .welcome-label {
            color: #ea580c;

            font-size: 10px;

            font-weight: 600;

            text-transform: uppercase;

            margin-bottom: 9px;
        }

        .welcome h1 {
            font-size: 24px;

            font-weight: 600;

            margin-bottom: 9px;
        }

        .welcome p {
            color: #78716c;

            font-size: 12px;

            line-height: 1.7;

            max-width: 560px;
        }

        .welcome-image {
            width: 32%;

            background-image:
                url('https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=900&q=80');

            background-size: cover;

            background-position: center;
        }

        /* =========================
           STAT
        ========================= */

        .stats {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 15px;

            margin-bottom: 30px;
        }

        .stat-card {
            background: #ffffff;

            border: 1px solid #e7e5e4;

            border-radius: 9px;

            padding: 18px;
        }

        .stat-title {
            color: #78716c;

            font-size: 11px;

            margin-bottom: 10px;
        }

        .stat-number {
            font-size: 25px;

            font-weight: 600;
        }

        .stat-description {
            color: #a8a29e;

            font-size: 10px;

            margin-top: 5px;
        }

        /* =========================
           SECTION
        ========================= */

        .section-header {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 15px;
        }

        .section-title h2 {
            font-size: 17px;

            font-weight: 600;
        }

        .section-title p {
            color: #a8a29e;

            font-size: 11px;

            margin-top: 4px;
        }

        .add-button {
            background: #ea580c;

            color: white;

            padding: 9px 13px;

            border-radius: 7px;

            font-size: 11px;

            font-weight: 600;

            transition: .2s;
        }

        .add-button:hover {
            background: #c2410c;
        }

        /* =========================
           RECIPE GRID
        ========================= */

        .recipe-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 17px;

            margin-bottom: 32px;
        }

        .recipe-card {
            background: white;

            border: 1px solid #e7e5e4;

            border-radius: 9px;

            overflow: hidden;

            transition: .2s;
        }

        .recipe-card:hover {
            transform: translateY(-2px);

            border-color: #fed7aa;

            box-shadow: 0 5px 15px rgba(0,0,0,.05);
        }

        .recipe-image {
            height: 155px;

            background: #f5f5f4;
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

            color: #a8a29e;

            font-size: 11px;
        }

        .recipe-content {
            padding: 15px;
        }

        .recipe-content h3 {
            font-size: 14px;

            font-weight: 600;

            margin-bottom: 6px;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }

        .recipe-date {
            color: #a8a29e;

            font-size: 10px;

            margin-bottom: 12px;
        }

        .recipe-footer {
            display: flex;

            justify-content: space-between;

            align-items: center;
        }

        .recipe-link {
            color: #ea580c;

            font-size: 11px;

            font-weight: 600;
        }

        .edit-link {
            color: #2563eb;

            background: #eff6ff;

            padding: 6px 8px;

            border-radius: 6px;

            font-size: 10px;
        }

        /* =========================
           EMPTY
        ========================= */

        .empty {
            background: white;

            border: 1px solid #e7e5e4;

            border-radius: 9px;

            padding: 45px 20px;

            text-align: center;

            margin-bottom: 30px;
        }

        .empty-icon {
            font-size: 30px;

            margin-bottom: 10px;
        }

        .empty h3 {
            font-size: 15px;

            margin-bottom: 6px;
        }

        .empty p {
            color: #a8a29e;

            font-size: 11px;

            margin-bottom: 15px;
        }

        /* =========================
           LOWER
        ========================= */

        .lower-area {
            display: grid;

            grid-template-columns: 1.5fr 1fr;

            gap: 17px;
        }

        .panel {
            background: white;

            border: 1px solid #e7e5e4;

            border-radius: 9px;

            padding: 18px;
        }

        .panel-title {
            font-size: 14px;

            font-weight: 600;

            margin-bottom: 14px;
        }

        .recent-item {
            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 12px 0;

            border-bottom: 1px solid #f0efed;
        }

        .recent-item:last-child {
            border-bottom: none;
        }

        .recent-name {
            font-size: 12px;

            font-weight: 600;
        }

        .recent-date {
            color: #a8a29e;

            font-size: 10px;

            margin-top: 3px;
        }

        .recent-link {
            color: #ea580c;

            font-size: 10px;

            font-weight: 600;
        }

        /* =========================
           QUICK ACTION
        ========================= */

        .quick-action {
            display: block;

            border: 1px solid #eeeae6;

            border-radius: 7px;

            padding: 13px;

            margin-bottom: 9px;

            color: #292524;

            transition: .2s;
        }

        .quick-action:last-child {
            margin-bottom: 0;
        }

        .quick-action:hover {
            border-color: #fdba74;

            background: #fffaf5;
        }

        .quick-action strong {
            display: block;

            font-size: 12px;
        }

        .quick-action span {
            display: block;

            color: #a8a29e;

            font-size: 10px;

            margin-top: 4px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1000px) {

            .recipe-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .lower-area {
                grid-template-columns: 1fr;
            }

        }

        @media (max-width: 750px) {

            .sidebar {
                position: relative;

                width: 100%;

                height: auto;

                border-right: none;

                border-bottom: 1px solid #e7e5e4;
            }

            .main {
                margin-left: 0;
            }

            .sidebar-bottom {
                margin-top: 25px;
            }

            .content {
                padding: 20px 18px 40px;
            }

            .topbar {
                padding: 0 18px;
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


    {{-- =========================
         SIDEBAR
    ========================= --}}

    <aside class="sidebar">


        {{-- LOGO --}}

        <div class="brand">

            <a href="{{ route('user.dashboard') }}">
                Resep<span>Ku</span>
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

            <a
                href="{{ route('user.dashboard') }}"
                class="active"
            >

                <span class="menu-icon">
                    ▦
                </span>

                Dashboard

            </a>


            {{-- RESEP SAYA --}}

            <a href="{{ route('user.recipes') }}">

                <span class="menu-icon">
                    ▤
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
                    ◎
                </span>

                Profil

            </a>


        </nav>


        {{-- =========================
             USER SIDEBAR
        ========================= --}}

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


            {{-- KELUAR --}}

            <form
                method="POST"
                action="{{ route('logout') }}"
                class="logout-form"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-button"
                >

                    ⇥
                    &nbsp;
                    Keluar

                </button>

            </form>


        </div>


    </aside>



    {{-- =========================
         MAIN
    ========================= --}}

    <main class="main">


        {{-- TOPBAR --}}

        <header class="topbar">

            <div class="page-name">
                Dashboard
            </div>

            <div class="topbar-right">
                ResepKu
            </div>

        </header>



        {{-- CONTENT --}}

        <section class="content">


            {{-- SUCCESS --}}

            @if(session('success'))

                <div class="success">

                    {{ session('success') }}

                </div>

            @endif



            {{-- =========================
                 WELCOME
            ========================= --}}

            <div class="welcome">


                <div class="welcome-content">

                    <div class="welcome-label">
                        Dashboard User
                    </div>


                    <h1>
                        Selamat datang, {{ $user->name }}
                    </h1>


                    <p>

                        Kelola resep masakan kamu dari sini.
                        Kamu bisa melihat resep yang sudah dibuat,
                        menambahkan resep baru, atau mengubah
                        informasi resep yang sudah ada.

                    </p>

                </div>


                <div class="welcome-image"></div>


            </div>



            {{-- =========================
                 STATISTIK
            ========================= --}}

            <div class="stats">


                <div class="stat-card">

                    <div class="stat-title">
                        Total Resep
                    </div>

                    <div class="stat-number">
                        {{ $totalRecipes }}
                    </div>

                    <div class="stat-description">
                        Resep yang kamu buat
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
                        Resep yang tampil di dashboard
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
                        Akun kamu aktif
                    </div>

                </div>


            </div>



            {{-- =========================
                 RESEP TERBARU
            ========================= --}}

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



            @if($latestRecipes->count())


                <div class="recipe-grid">


                    @foreach($latestRecipes as $recipe)


                        <article class="recipe-card">


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



                            <div class="recipe-content">


                                <h3>
                                    {{ $recipe->title }}
                                </h3>


                                <div class="recipe-date">

                                    {{ $recipe->created_at->format('d M Y') }}

                                </div>


                                <div class="recipe-footer">


                                    <a
                                        href="{{ route('recipes.show', $recipe->slug) }}"
                                        class="recipe-link"
                                    >

                                        Lihat resep →

                                    </a>


                                    @if(auth()->id() === $recipe->user_id)

                                        <a
                                            href="{{ route('recipes.edit', $recipe->slug) }}"
                                            class="edit-link"
                                        >

                                            Edit

                                        </a>

                                    @endif


                                </div>


                            </div>


                        </article>


                    @endforeach


                </div>


            @else


                <div class="empty">


                    <div class="empty-icon">
                        🍳
                    </div>


                    <h3>
                        Belum ada resep
                    </h3>


                    <p>
                        Kamu belum membuat resep.
                        Tambahkan resep pertama kamu.
                    </p>


                    <a
                        href="{{ route('recipes.create') }}"
                        class="add-button"
                    >

                        + Tambah Resep

                    </a>


                </div>


            @endif



            {{-- =========================
                 BAGIAN BAWAH
            ========================= --}}

            <div class="lower-area">


                {{-- RESEP TERAKHIR --}}

                <div class="panel">


                    <div class="panel-title">
                        Resep yang Baru Ditambahkan
                    </div>


                    @if($recipes->count())


                        @foreach($recipes->take(4) as $recipe)


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


                        <p style="font-size: 11px; color: #a8a29e;">
                            Belum ada resep.
                        </p>


                    @endif


                </div>



                {{-- MENU CEPAT --}}

                <div class="panel">


                    <div class="panel-title">
                        Menu Cepat
                    </div>


                    <a
                        href="{{ route('recipes.create') }}"
                        class="quick-action"
                    >

                        <strong>
                            + Tambah Resep
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
                            Lihat Resep Saya
                        </strong>

                        <span>
                            Lihat semua resep yang kamu buat.
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