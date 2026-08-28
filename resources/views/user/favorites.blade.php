<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Resep Tersimpan | ResepKu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600&display=swap"
        rel="stylesheet"
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

        :root {
            --bg: #f5f1e8;
            --surface: #fffdf8;
            --surface-soft: #faf7f1;

            --text: #2d2723;
            --muted: #81776e;

            --brown: #6b3424;
            --terracotta: #a95635;
            --olive: #5d6947;

            --border: #ded6ca;
            --soft-brown: #eee4d8;
            --soft-green: #e5eadf;
            --soft-red: #f1dfda;
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
            background: var(--bg);
            color: var(--text);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            font-family: inherit;
        }

        .page {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 235px 1fr;
        }

        /* SIDEBAR */

        .sidebar {
            background: var(--surface-soft);
            border-right: 1px solid var(--border);
            padding: 30px 22px;
            min-height: 100vh;
            height: 100vh;
            position: sticky;
            top: 0;
            display: flex;
            flex-direction: column;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            padding-bottom: 30px;
            border-bottom: 1px solid var(--border);
        }

        .brand-mark {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--brown);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Georgia, serif;
            font-size: 18px;
        }

        .brand-name {
            font-family: "Playfair Display", Georgia, serif;
            font-size: 21px;
            font-weight: 600;
        }

        .brand-sub {
            display: block;
            color: var(--muted);
            font-size: 8px;
            text-transform: uppercase;
            letter-spacing: 1.4px;
            margin-top: 2px;
        }

        .menu-title {
            color: #968d82;
            font-size: 9px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin: 26px 9px 10px;
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
            padding: 11px 10px;
            color: var(--muted);
            font-size: 11px;
            border-left: 2px solid transparent;
            transition: .2s;
        }

        .menu a:hover {
            color: var(--brown);
            background: #f1eae0;
        }

        .menu a.active {
            color: var(--brown);
            background: var(--soft-brown);
            border-left-color: var(--brown);
            font-weight: 700;
        }

        .menu-icon {
            width: 19px;
            text-align: center;
            font-size: 13px;
        }

        .sidebar-bottom {
            margin-top: auto;
            padding-top: 18px;
            border-top: 1px solid var(--border);
        }

        .user-mini {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
        }

        .avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: var(--soft-brown);
            color: var(--brown);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 700;
        }

        .user-mini-info {
            min-width: 0;
        }

        .user-mini-info strong {
            display: block;
            font-size: 10px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .user-mini-info span {
            display: block;
            color: var(--muted);
            font-size: 8px;
            margin-top: 2px;
        }

        .logout-button {
            width: 100%;
            background: transparent;
            color: var(--muted);
            border: 1px solid var(--border);
            padding: 9px;
            cursor: pointer;
            font-size: 9px;
            text-align: left;
        }

        .logout-button:hover {
            color: #9b3d2d;
            background: var(--soft-red);
        }

        /* MAIN */

        .main {
            min-width: 0;
            padding: 35px 48px 50px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--border);
        }

        .eyebrow {
            color: var(--terracotta);
            font-size: 8px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 7px;
        }

        .topbar h1 {
            font-family: "Playfair Display", Georgia, serif;
            font-size: 35px;
            font-weight: 500;
        }

        .topbar p {
            color: var(--muted);
            font-size: 10px;
            margin-top: 7px;
        }

        .date {
            color: var(--muted);
            font-size: 9px;
            border-bottom: 1px solid var(--brown);
            padding-bottom: 4px;
        }

        .intro {
            display: grid;
            grid-template-columns: 1.4fr .8fr;
            gap: 30px;
            margin: 27px 0 28px;
            border-bottom: 1px solid var(--border);
            padding-bottom: 28px;
        }

        .intro h2 {
            font-family: "Playfair Display", Georgia, serif;
            font-size: 26px;
            font-weight: 500;
            line-height: 1.3;
        }

        .intro h2 span {
            color: var(--terracotta);
        }

        .intro-copy {
            color: var(--muted);
            font-size: 10px;
            line-height: 1.8;
            max-width: 380px;
            justify-self: end;
        }

        .summary-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-top: 1px solid var(--text);
            border-bottom: 1px solid var(--border);
            padding: 13px 0;
            margin-bottom: 26px;
        }

        .summary-text {
            color: var(--muted);
            font-size: 9px;
        }

        .summary-text strong {
            color: var(--brown);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 21px;
            font-weight: 500;
        }

        .browse-link {
            color: var(--brown);
            font-size: 9px;
            font-weight: 700;
            border-bottom: 1px solid var(--brown);
            padding-bottom: 2px;
        }

        .browse-link:hover {
            color: var(--terracotta);
            border-color: var(--terracotta);
        }

        .section-heading {
            margin-bottom: 17px;
        }

        .section-label {
            color: var(--terracotta);
            font-size: 8px;
            text-transform: uppercase;
            letter-spacing: 1.8px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .section-title {
            font-family: "Playfair Display", Georgia, serif;
            font-size: 26px;
            font-weight: 500;
        }

        .section-description {
            color: var(--muted);
            font-size: 9px;
            margin-top: 4px;
        }

        .favorite-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
        }

        .favorite-card {
            background: var(--surface);
            border: 1px solid var(--border);
            overflow: hidden;
            transition: .2s ease;
        }

        .favorite-card:hover {
            transform: translateY(-3px);
            border-color: #c8b9a8;
        }

        .favorite-image {
            height: 215px;
            background: var(--soft-brown);
            position: relative;
            overflow: hidden;
        }

        .favorite-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            filter: saturate(.85);
            transition: .3s ease;
        }

        .favorite-card:hover .favorite-image img {
            transform: scale(1.035);
        }

        .no-image {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #8d8379;
            background: #e8e0d5;
            font-size: 10px;
        }

        .heart {
            position: absolute;
            top: 11px;
            right: 11px;
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,253,248,.92);
            color: var(--terracotta);
            font-size: 14px;
        }

        .favorite-body {
            padding: 16px;
        }

        .favorite-label {
            color: var(--terracotta);
            font-size: 7px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.1px;
            margin-bottom: 6px;
        }

        .favorite-title {
            font-family: "Playfair Display", Georgia, serif;
            font-size: 20px;
            font-weight: 500;
            line-height: 1.25;
            min-height: 50px;
        }

        .favorite-author {
            color: var(--muted);
            font-size: 8px;
            margin-top: 7px;
        }

        .favorite-footer {
            margin-top: 13px;
            padding-top: 12px;
            border-top: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 7px;
        }

        .view-link {
            color: var(--brown);
            font-size: 9px;
            font-weight: 700;
            border-bottom: 1px solid var(--brown);
            padding-bottom: 2px;
        }

        .view-link:hover {
            color: var(--terracotta);
            border-color: var(--terracotta);
        }

        .remove-button {
            border: 1px solid #d5bbb2;
            background: transparent;
            color: #944233;
            padding: 6px 8px;
            font-size: 8px;
            font-weight: 700;
            cursor: pointer;
        }

        .remove-button:hover {
            background: var(--soft-red);
        }

        .empty {
            border-top: 1px solid var(--text);
            border-bottom: 1px solid var(--border);
            padding: 65px 20px;
            text-align: center;
        }

        .empty-mark {
            font-family: "Playfair Display", Georgia, serif;
            color: var(--brown);
            font-size: 28px;
            margin-bottom: 8px;
        }

        .empty h3 {
            font-family: "Playfair Display", Georgia, serif;
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .empty p {
            color: var(--muted);
            font-size: 9px;
            margin-bottom: 15px;
        }

        .primary-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--brown);
            color: white;
            padding: 10px 14px;
            font-size: 9px;
            font-weight: 700;
        }

        .primary-button:hover {
            background: var(--terracotta);
        }

        .footer {
            border-top: 1px solid var(--border);
            margin-top: 45px;
            padding-top: 17px;
            color: var(--muted);
            font-size: 8px;
            display: flex;
            justify-content: space-between;
        }

        .footer strong {
            color: var(--brown);
        }

        @media (max-width: 1000px) {
            .page {
                grid-template-columns: 200px 1fr;
            }

            .main {
                padding: 30px;
            }

            .favorite-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 800px) {
            .page {
                display: block;
            }

            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
                min-height: auto;
                padding: 18px 20px;
                border-right: none;
                border-bottom: 1px solid var(--border);
            }

            .brand {
                padding-bottom: 15px;
                border-bottom: none;
            }

            .menu-title,
            .sidebar-bottom {
                display: none;
            }

            .menu {
                flex-direction: row;
                overflow-x: auto;
                margin-top: 7px;
            }

            .menu a {
                white-space: nowrap;
                border-left: none;
                border-bottom: 2px solid transparent;
            }

            .menu a.active {
                border-left: none;
                border-bottom-color: var(--brown);
            }

            .main {
                padding: 27px 20px 45px;
            }

            .intro {
                grid-template-columns: 1fr;
            }

            .intro-copy {
                justify-self: start;
            }
        }

        @media (max-width: 600px) {
            .topbar {
                display: block;
            }

            .date {
                display: inline-block;
                margin-top: 12px;
            }

            .topbar h1 {
                font-size: 30px;
            }

            .summary-bar {
                align-items: flex-start;
                flex-direction: column;
                gap: 10px;
            }

            .browse-link {
                align-self: flex-start;
            }

            .favorite-grid {
                grid-template-columns: 1fr;
            }

            .favorite-image {
                height: 230px;
            }

            .favorite-footer {
                align-items: flex-start;
                flex-direction: column;
            }

            .remove-button {
                width: 100%;
            }

            .footer {
                display: block;
                line-height: 1.7;
            }
        }

    </style>

</head>


<body>

<div class="page">


    {{-- SIDEBAR --}}

    <aside class="sidebar">

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

                <span class="brand-sub">
                    Culinary Journal
                </span>

            </div>

        </a>


        <div class="menu-title">
            Menu Utama
        </div>


        <nav class="menu">

            <a href="{{ route('user.dashboard') }}">

                <span class="menu-icon">⌂</span>

                Dashboard

            </a>


            <a href="{{ route('recipes.my') }}">

                <span class="menu-icon">≡</span>

                Resep Saya

            </a>


            <a href="{{ route('recipes.create') }}">

                <span class="menu-icon">+</span>

                Tambah Resep

            </a>


            <a
                href="{{ route('user.favorites') }}"
                class="active"
            >

                <span class="menu-icon">♡</span>

                Resep Tersimpan

            </a>


            <a href="{{ route('profile.edit') }}">

                <span class="menu-icon">○</span>

                Profil

            </a>


            <a href="{{ route('recipes.index') }}">

                <span class="menu-icon">↗</span>

                Lihat Website

            </a>

        </nav>


        <div class="sidebar-bottom">

            <div class="user-mini">

                <div class="avatar">

                    {{ strtoupper(
                        substr(
                            auth()->user()->name,
                            0,
                            1
                        )
                    ) }}

                </div>

                <div class="user-mini-info">

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
                    class="logout-button"
                >

                    🚪 &nbsp; Keluar

                </button>

            </form>

        </div>

    </aside>



    {{-- MAIN --}}

    <main class="main">


        <header class="topbar">

            <div>

                <div class="eyebrow">
                    ResepKu / User / Tersimpan
                </div>

                <h1>
                    Resep Tersimpan
                </h1>

                <p>
                    Koleksi resep yang ingin kamu coba kembali.
                </p>

            </div>


            <div class="date">
                {{ now()->translatedFormat('l, d F Y') }}
            </div>

        </header>


        <section class="intro">

            <h2>

                Koleksi kecil
                <span>favoritmu</span>.

            </h2>


            <p class="intro-copy">

                Resep yang kamu simpan akan muncul di sini.
                Kamu bisa membukanya kembali kapan saja
                atau menghapusnya dari koleksi.

            </p>

        </section>


        <div class="summary-bar">

            <div class="summary-text">

                Total resep tersimpan

                <strong>
                    {{ $favorites->count() }}
                </strong>

                resep

            </div>


            <a
                href="{{ route('recipes.index') }}"
                class="browse-link"
            >
                Cari resep lainnya →
            </a>

        </div>


        <div class="section-heading">

            <div class="section-label">
                Saved Collection
            </div>

            <h2 class="section-title">
                Favorit Kamu
            </h2>

            <p class="section-description">
                Resep yang sudah kamu tandai untuk disimpan.
            </p>

        </div>


        @if($favorites->count())


            <div class="favorite-grid">


                @foreach($favorites as $index => $favorite)


                    @php
                        $recipe = $favorite->recipe;
                    @endphp


                    @if($recipe)


                        <article class="favorite-card">


                            <div class="favorite-image">


                                @if($recipe->image)

                                    <img
                                        src="{{ $recipe->imageUrl() }}"
                                        alt="{{ $recipe->title }}"
                                        loading="lazy"
                                    >

                                @else

                                    <div class="no-image">
                                        Tidak ada foto
                                    </div>

                                @endif


                                <div class="heart">
                                    ♥
                                </div>


                            </div>


                            <div class="favorite-body">


                                <div class="favorite-label">
                                    Resep Tersimpan
                                </div>


                                <h3 class="favorite-title">
                                    {{ $recipe->title }}
                                </h3>


                                <div class="favorite-author">

                                    Oleh

                                    <strong>
                                        {{ $recipe->user->name ?? 'Pengguna' }}
                                    </strong>

                                </div>


                                <div class="favorite-footer">


                                    <a
                                        href="{{ route(
                                            'recipes.show',
                                            $recipe->slug
                                        ) }}"
                                        class="view-link"
                                    >
                                        Lihat resep →
                                    </a>


                                    <form
                                        method="POST"
                                        action="{{ route(
                                            'recipe.favorite',
                                            $recipe
                                        ) }}"
                                        style="margin:0;"
                                    >

                                        @csrf

                                        <button
                                            type="submit"
                                            class="remove-button"
                                        >
                                            Hapus dari tersimpan
                                        </button>

                                    </form>


                                </div>


                            </div>


                        </article>


                    @endif


                @endforeach


            </div>


        @else


            <div class="empty">


                <div class="empty-mark">
                    ResepKu
                </div>


                <h3>
                    Belum ada resep tersimpan
                </h3>


                <p>
                    Simpan resep yang menarik agar mudah kamu temukan lagi.
                </p>


                <a
                    href="{{ route('recipes.index') }}"
                    class="primary-button"
                >
                    Jelajahi Resep →
                </a>


            </div>


        @endif


        <footer class="footer">

            <span>
                © {{ date('Y') }} <strong>ResepKu</strong>
            </span>

            <span>
                Culinary Journal · Resep Tersimpan
            </span>

        </footer>


    </main>

</div>

</body>

</html>