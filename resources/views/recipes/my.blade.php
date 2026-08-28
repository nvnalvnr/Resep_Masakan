<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Resep Saya | ResepKu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

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

            line-height: 1.6;
        }


        a {
            text-decoration: none;

            color: inherit;
        }


        button {
            font-family: inherit;
        }


        /* =====================================================
           LAYOUT
        ====================================================== */

        .page {
            min-height: 100vh;

            display: grid;

            grid-template-columns: 235px 1fr;
        }


        /* =====================================================
           SIDEBAR
        ====================================================== */

        .sidebar {
            background: var(--surface-soft);

            border-right: 1px solid var(--border);

            min-height: 100vh;

            padding: 30px 22px;

            display: flex;

            flex-direction: column;

            position: sticky;

            top: 0;

            height: 100vh;
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

            transition: .2s ease;
        }


        .menu a:hover {
            color: var(--brown);

            background: #f1eae0;
        }


        .menu a.active {
            color: var(--brown);

            background: #eee4d8;

            border-left-color: var(--brown);

            font-weight: 700;
        }


        .menu-icon {
            width: 19px;

            text-align: center;

            font-size: 13px;
        }


        /* =====================================================
           SIDEBAR BOTTOM
        ====================================================== */

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

            flex-shrink: 0;
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

            transition: .2s ease;
        }


        .logout-button:hover {
            color: #9b3d2d;

            border-color: #cdb1a7;

            background: var(--soft-red);
        }


        /* =====================================================
           MAIN
        ====================================================== */

        .main {
            min-width: 0;

            padding: 35px 48px 50px;
        }


        /* =====================================================
           HEADER
        ====================================================== */

        .topbar {
            display: flex;

            align-items: flex-start;

            justify-content: space-between;

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

            line-height: 1.15;
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


        /* =====================================================
           INTRO
        ====================================================== */

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

            max-width: 620px;
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


        /* =====================================================
           ACTION BAR
        ====================================================== */

        .action-bar {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            border-top: 1px solid var(--text);

            border-bottom: 1px solid var(--border);

            padding: 13px 0;

            margin-bottom: 25px;
        }


        .recipe-count {
            color: var(--muted);

            font-size: 9px;
        }


        .recipe-count strong {
            color: var(--brown);

            font-family: "Playfair Display", Georgia, serif;

            font-size: 21px;

            font-weight: 500;
        }


        .add-recipe {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 6px;

            background: var(--brown);

            color: white;

            padding: 10px 14px;

            font-size: 9px;

            font-weight: 700;

            transition: .2s ease;
        }


        .add-recipe:hover {
            background: var(--terracotta);
        }


        /* =====================================================
           ALERT
        ====================================================== */

        .success {
            background: var(--soft-green);

            border-left: 2px solid var(--olive);

            color: var(--olive);

            padding: 11px 13px;

            margin-bottom: 20px;

            font-size: 9px;
        }


        /* =====================================================
           SECTION HEADER
        ====================================================== */

        .section-header {
            display: flex;

            align-items: end;

            justify-content: space-between;

            gap: 15px;

            margin-bottom: 17px;
        }


        .section-label {
            color: var(--terracotta);

            font-size: 8px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1.8px;

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


        /* =====================================================
           RECIPE GRID
        ====================================================== */

        .recipe-grid {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 20px;
        }


        .recipe-card {
            background: var(--surface);

            border: 1px solid var(--border);

            overflow: hidden;

            transition: .22s ease;
        }


        .recipe-card:hover {
            transform: translateY(-3px);

            border-color: #c8b9a8;
        }


        .recipe-image {
            position: relative;

            height: 215px;

            background: var(--soft-brown);

            overflow: hidden;
        }


        .recipe-image img {
            width: 100%;

            height: 100%;

            object-fit: cover;

            display: block;

            filter: saturate(.85);

            transition: .3s ease;
        }


        .recipe-card:hover .recipe-image img {
            transform: scale(1.035);
        }


        .recipe-number {
            position: absolute;

            top: 11px;

            left: 11px;

            width: 28px;

            height: 28px;

            background: rgba(45, 39, 35, .9);

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 8px;

            font-weight: 700;
        }


        .no-image {
            width: 100%;

            height: 100%;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #e8e0d5;

            color: #8d8379;

            font-size: 10px;
        }


        .recipe-body {
            padding: 16px;
        }


        .recipe-label {
            color: var(--terracotta);

            font-size: 7px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1.1px;

            margin-bottom: 6px;
        }


        .recipe-title {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 20px;

            font-weight: 500;

            line-height: 1.25;

            min-height: 50px;
        }


        .recipe-date {
            color: var(--muted);

            font-size: 8px;

            margin-top: 7px;
        }


        .recipe-actions {
            display: flex;

            align-items: center;

            gap: 6px;

            border-top: 1px solid var(--border);

            margin-top: 12px;

            padding-top: 12px;
        }


        .view-link,
        .edit-link,
        .delete-button {
            flex: 1;

            text-align: center;

            padding: 7px 8px;

            font-size: 8px;

            font-weight: 700;
        }


        .view-link {
            color: var(--brown);

            background: var(--soft-brown);
        }


        .view-link:hover {
            background: #e4d8ca;
        }


        .edit-link {
            color: var(--olive);

            border: 1px solid #c6ceba;
        }


        .edit-link:hover {
            background: var(--soft-green);
        }


        .delete-button {
            color: #944233;

            border: 1px solid #d5bbb2;

            background: transparent;

            cursor: pointer;
        }


        .delete-button:hover {
            background: var(--soft-red);
        }


        /* =====================================================
           EMPTY
        ====================================================== */

        .empty {
            border-top: 1px solid var(--text);

            border-bottom: 1px solid var(--border);

            text-align: center;

            padding: 65px 20px;

            background: rgba(255,255,255,.16);
        }


        .empty-mark {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 28px;

            color: var(--brown);

            margin-bottom: 9px;
        }


        .empty h3 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 24px;

            font-weight: 500;

            margin-bottom: 6px;
        }


        .empty p {
            color: var(--muted);

            font-size: 9px;

            margin-bottom: 15px;
        }


        /* =====================================================
           PAGINATION
        ====================================================== */

        .pagination {
            display: flex;

            justify-content: center;

            margin-top: 30px;
        }


        .pagination svg {
            width: 15px;

            height: 15px;
        }


        /* =====================================================
           FOOTER
        ====================================================== */

        .footer {
            border-top: 1px solid var(--border);

            margin-top: 48px;

            padding-top: 17px;

            color: var(--muted);

            font-size: 8px;

            display: flex;

            justify-content: space-between;
        }


        .footer strong {
            color: var(--brown);
        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 1000px) {

            .page {
                grid-template-columns: 200px 1fr;
            }


            .main {
                padding: 30px;
            }


            .recipe-grid {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
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


            .menu-title {
                display: none;
            }


            .menu {
                flex-direction: row;

                overflow-x: auto;

                gap: 4px;

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


            .sidebar-bottom {
                display: none;
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


            .action-bar {
                align-items: flex-start;

                flex-direction: column;
            }


            .add-recipe {
                width: 100%;
            }


            .section-header {
                align-items: flex-start;

                flex-direction: column;
            }


            .recipe-grid {
                grid-template-columns: 1fr;
            }


            .recipe-image {
                height: 230px;
            }


            .recipe-actions {
                flex-wrap: wrap;
            }


            .view-link,
            .edit-link,
            .delete-button {
                min-width: 30%;
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


    {{-- =====================================================
         SIDEBAR
    ====================================================== --}}

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


            <a
                href="{{ route('user.dashboard') }}"
            >

                <span class="menu-icon">
                    ⌂
                </span>

                Dashboard

            </a>


            <a
                href="{{ route('recipes.my') }}"
                class="active"
            >

                <span class="menu-icon">
                    ≡
                </span>

                Resep Saya

            </a>


            <a
                href="{{ route('recipes.create') }}"
            >

                <span class="menu-icon">
                    +
                </span>

                Tambah Resep

            </a>


            <a
                href="{{ route('user.favorites') }}"
            >

                <span class="menu-icon">
                    ♡
                </span>

                Resep Tersimpan

            </a>


            <a
                href="{{ route('profile.edit') }}"
            >

                <span class="menu-icon">
                    ○
                </span>

                Profil

            </a>


            <a
                href="{{ route('recipes.index') }}"
            >

                <span class="menu-icon">
                    ↗
                </span>

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



    {{-- =====================================================
         MAIN
    ====================================================== --}}

    <main class="main">


        {{-- HEADER --}}

        <header class="topbar">


            <div>


                <div class="eyebrow">
                    ResepKu / User / Koleksi
                </div>


                <h1>
                    Resep Saya
                </h1>


                <p>
                    Kelola semua resep yang sudah kamu buat.
                </p>


            </div>


            <div class="date">

                {{ now()->translatedFormat('l, d F Y') }}

            </div>


        </header>



        {{-- INTRO --}}

        <section class="intro">


            <h2>

                Koleksi resep
                <span>{{ auth()->user()->name }}</span>.

            </h2>


            <p class="intro-copy">

                Semua resep yang kamu buat tersimpan di sini.
                Kamu bisa melihat, mengedit, atau menghapus
                resep kapan saja.

            </p>


        </section>



        {{-- SUCCESS --}}

        @if(session('success'))

            <div class="success">

                ✓

                {{ session('success') }}

            </div>

        @endif



        {{-- ACTION BAR --}}

        <div class="action-bar">


            <div class="recipe-count">

                Kamu memiliki

                <strong>
                    {{ $recipes->total() }}
                </strong>

                resep

            </div>


            <a
                href="{{ route('recipes.create') }}"
                class="add-recipe"
            >

                +

                Tambah Resep

            </a>


        </div>



        {{-- SECTION HEADER --}}

        <div class="section-header">


            <div>


                <div class="section-label">
                    My Collection
                </div>


                <h2 class="section-title">
                    Resep yang Kamu Buat
                </h2>


                <p class="section-description">
                    Semua resep pribadi dalam satu tempat.
                </p>


            </div>


        </div>



        {{-- RECIPE LIST --}}

        @if($recipes->count())


            <div class="recipe-grid">


                @foreach($recipes as $index => $recipe)


                    <article class="recipe-card">


                        <div class="recipe-image">


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


                            <div class="recipe-number">

                                {{ str_pad(
                                    $recipes->firstItem() + $index,
                                    2,
                                    '0',
                                    STR_PAD_LEFT
                                ) }}

                            </div>


                        </div>



                        <div class="recipe-body">


                            <div class="recipe-label">
                                Resep Saya
                            </div>


                            <h3 class="recipe-title">

                                {{ $recipe->title }}

                            </h3>


                            <div class="recipe-date">

                                Dibuat
                                {{ $recipe->created_at?->format('d M Y') ?? '-' }}

                            </div>


                            <div class="recipe-actions">


                                {{-- LIHAT --}}

                                <a
                                    href="{{ route(
                                        'recipes.show',
                                        $recipe->slug
                                    ) }}"
                                    class="view-link"
                                >
                                    Lihat
                                </a>


                                {{-- EDIT --}}

                                <a
                                    href="{{ route(
                                        'recipes.edit',
                                        $recipe->slug
                                    ) }}"
                                    class="edit-link"
                                >
                                    Edit
                                </a>


                                {{-- HAPUS --}}

                                <form
                                    action="{{ route(
                                        'recipes.destroy',
                                        $recipe->slug
                                    ) }}"
                                    method="POST"
                                    style="margin:0; flex:1;"
                                >

                                    @csrf

                                    @method('DELETE')


                                    <button
                                        type="submit"
                                        class="delete-button"
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


        @else


            {{-- EMPTY --}}

            <div class="empty">


                <div class="empty-mark">
                    ResepKu
                </div>


                <h3>
                    Belum ada resep
                </h3>


                <p>
                    Kamu belum membuat resep apa pun.
                    Yuk mulai tambahkan resep pertamamu.
                </p>


                <a
                    href="{{ route('recipes.create') }}"
                    class="add-recipe"
                >

                    + Tambah Resep

                </a>


            </div>


        @endif



        {{-- PAGINATION --}}

        @if($recipes->hasPages())

            <div class="pagination">

                {{ $recipes->links() }}

            </div>

        @endif



        {{-- FOOTER --}}

        <footer class="footer">


            <span>
                © {{ date('Y') }} <strong>ResepKu</strong>
            </span>


            <span>
                Culinary Journal · Resep Saya
            </span>


        </footer>


    </main>


</div>


</body>

</html>