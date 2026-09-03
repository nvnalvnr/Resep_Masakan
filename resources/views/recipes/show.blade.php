<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>
    {{ $recipe->title }} | ResepKu
</title>


<link rel="preconnect" href="https://fonts.googleapis.com">

<link
    rel="preconnect"
    href="https://fonts.googleapis.com"
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
        font-family:
            "DM Sans",
            Arial,
            sans-serif;

        background: var(--bg);

        color: var(--text);

        font-size: 14px;

        line-height: 1.6;
    }


    a {
        color: inherit;

        text-decoration: none;
    }


    button {
        font-family: inherit;
    }


    /* =====================================================
       NAVBAR
    ====================================================== */

    .navbar {
        position: sticky;

        top: 0;

        z-index: 100;

        min-height: 72px;

        background: rgba(255, 253, 248, .96);

        border-bottom: 1px solid var(--border);

        backdrop-filter: blur(8px);

        padding: 0 42px;

        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 25px;
    }


    .brand {
        display: flex;

        align-items: center;

        gap: 10px;

        flex-shrink: 0;
    }


    .brand-mark {
        width: 38px;

        height: 38px;

        border-radius: 50%;

        background: var(--brown);

        color: white;

        display: flex;

        align-items: center;

        justify-content: center;

        font-family: Georgia, serif;

        font-size: 17px;
    }


    .brand-name {
        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: 21px;

        font-weight: 600;
    }


    .brand-subtitle {
        display: block;

        color: var(--muted);

        font-size: 10px;

        text-transform: uppercase;

        letter-spacing: 1.4px;

        margin-top: 1px;
    }


    .nav-links {
        display: flex;

        align-items: center;

        gap: 25px;

        margin-left: auto;
    }


    .nav-links a {
        color: var(--muted);

        font-size: 13px;

        padding: 4px 0;

        position: relative;
    }


    .nav-links a:hover {
        color: var(--brown);
    }


    .nav-actions {
        display: flex;

        align-items: center;

        gap: 7px;

        flex-shrink: 0;
    }


    .login-link {
        color: var(--muted);

        font-size: 12px;

        padding: 8px 10px;
    }


    .login-link:hover {
        color: var(--brown);
    }


    .dashboard-link {
        background: var(--brown);

        color: white;

        border: 1px solid var(--brown);

        padding: 9px 13px;

        font-size: 12px;

        font-weight: 700;

        transition: .2s;
    }


    .dashboard-link:hover {
        background: var(--terracotta);

        border-color: var(--terracotta);
    }


    .logout-button {
        background: transparent;

        color: var(--muted);

        border: 1px solid var(--border);

        padding: 8px 11px;

        font-size: 11px;

        cursor: pointer;

        transition: .2s;
    }


    .logout-button:hover {
        color: var(--brown);

        background: var(--surface-soft);
    }


    /* =====================================================
       MAIN
    ====================================================== */

    .page {
        max-width: 1120px;

        margin: 0 auto;

        padding: 38px 30px 70px;
    }


    /* =====================================================
       BREADCRUMB
    ====================================================== */

    .breadcrumb {
        display: flex;

        align-items: center;

        gap: 7px;

        color: var(--muted);

        font-size: 11px;

        margin-bottom: 22px;
    }


    .breadcrumb a {
        color: var(--brown);

        font-weight: 600;
    }


    .breadcrumb span {
        color: #a9a096;
    }


    /* =====================================================
       HEADER
    ====================================================== */

    .recipe-header {
        margin-bottom: 28px;

        border-top: 1px solid var(--text);

        padding-top: 24px;
    }


    .recipe-label {
        color: var(--terracotta);

        font-size: 10px;

        font-weight: 700;

        text-transform: uppercase;

        letter-spacing: 1.8px;

        margin-bottom: 8px;
    }


    .recipe-title {
        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: clamp(35px, 5vw, 53px);

        font-weight: 500;

        line-height: 1.08;

        max-width: 850px;
    }


    .recipe-meta {
        display: flex;

        align-items: center;

        gap: 13px;

        flex-wrap: wrap;

        margin-top: 12px;

        color: var(--muted);

        font-size: 11px;
    }


    .recipe-meta strong {
        color: var(--brown);
    }


    .meta-divider {
        width: 24px;

        height: 1px;

        background: var(--border);
    }


    /* =====================================================
       HERO
    ====================================================== */

    .recipe-hero {
        display: grid;

        grid-template-columns:
            minmax(0, 1.45fr)
            minmax(250px, .55fr);

        gap: 30px;

        margin-bottom: 36px;
    }


    .recipe-image {
        width: 100%;

        height: 475px;

        object-fit: cover;

        display: block;

        background: var(--soft-brown);

        border: 1px solid var(--border);

        filter: saturate(.88);
    }


    .no-image {
        width: 100%;

        height: 475px;

        display: flex;

        align-items: center;

        justify-content: center;

        background: #e8e0d5;

        color: #8b8076;

        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: 16px;

        border: 1px solid var(--border);
    }


    .recipe-aside {
        border-top: 1px solid var(--text);

        border-bottom: 1px solid var(--border);

        align-self: start;
    }


    .aside-item {
        padding: 17px 0;

        border-bottom: 1px solid var(--border);
    }


    .aside-item:last-child {
        border-bottom: none;
    }


    .aside-label {
        color: var(--muted);

        font-size: 10px;

        text-transform: uppercase;

        letter-spacing: 1.1px;

        margin-bottom: 5px;
    }


    .aside-value {
        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: 20px;

        line-height: 1.3;
    }


    .aside-small {
        color: var(--muted);

        font-size: 10px;

        margin-top: 3px;
    }


    /* =====================================================
       CONTENT
    ====================================================== */

    .content-grid {
        display: grid;

        grid-template-columns:
            minmax(0, 1fr)
            minmax(260px, .42fr);

        gap: 55px;
    }


    .section {
        margin-bottom: 40px;
    }


    .section-header {
        display: flex;

        align-items: end;

        justify-content: space-between;

        gap: 15px;

        border-bottom: 1px solid var(--text);

        padding-bottom: 10px;

        margin-bottom: 17px;
    }


    .section-number {
        color: var(--terracotta);

        font-size: 10px;

        font-weight: 700;

        letter-spacing: 1px;
    }


    .section-title {
        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: 27px;

        font-weight: 500;
    }


    .ingredients {
        white-space: pre-line;

        color: #524a43;

        font-size: 13px;

        line-height: 2;
    }


    .steps {
        white-space: pre-line;

        color: #524a43;

        font-size: 13px;

        line-height: 2.05;
    }


    /* =====================================================
       NOTE
    ====================================================== */

    .note {
        background: var(--soft-brown);

        border-left: 2px solid var(--terracotta);

        padding: 15px;

        margin-top: 18px;
    }


    .note-title {
        color: var(--brown);

        font-size: 10px;

        font-weight: 700;

        text-transform: uppercase;

        letter-spacing: 1px;

        margin-bottom: 5px;
    }


    .note p {
        color: var(--muted);

        font-size: 11px;

        line-height: 1.7;
    }


    /* =====================================================
       ACTIONS
    ====================================================== */

    .actions-title {
        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: 24px;

        font-weight: 500;

        padding-bottom: 10px;

        border-bottom: 1px solid var(--text);

        margin-bottom: 0;
    }


    .action-list {
        border-bottom: 1px solid var(--border);
    }


    .action-link {
        display: flex;

        align-items: center;

        justify-content: space-between;

        padding: 14px 0;

        border-bottom: 1px solid var(--border);

        color: var(--brown);

        font-size: 12px;

        font-weight: 700;

        transition: .2s;
    }


    .action-link:last-child {
        border-bottom: none;
    }


    .action-link:hover {
        color: var(--terracotta);

        padding-left: 4px;
    }


    .favorite-form {
        margin: 0;
    }


    .favorite-button {
        width: 100%;

        display: flex;

        align-items: center;

        justify-content: space-between;

        background: transparent;

        border: none;

        border-bottom: 1px solid var(--border);

        padding: 14px 0;

        color: var(--brown);

        cursor: pointer;

        font-size: 12px;

        font-weight: 700;

        text-align: left;

        transition: .2s;
    }


    .favorite-button:hover {
        color: var(--terracotta);

        padding-left: 4px;
    }


    .admin-note {
        margin-top: 20px;

        padding: 13px;

        border: 1px solid var(--border);

        background: var(--surface-soft);

        color: var(--muted);

        font-size: 10px;

        line-height: 1.7;
    }


    /* =====================================================
       BACK
    ====================================================== */

    .back-section {
        margin-top: 12px;

        padding-top: 20px;

        border-top: 1px solid var(--border);
    }


    .back-link {
        color: var(--brown);

        font-size: 12px;

        font-weight: 700;
    }


    .back-link:hover {
        color: var(--terracotta);
    }


    /* =====================================================
       SUCCESS
    ====================================================== */

    .success {
        background: var(--soft-green);

        border-left: 2px solid var(--olive);

        color: var(--olive);

        padding: 11px 13px;

        margin-bottom: 20px;

        font-size: 11px;
    }


    /* =====================================================
       FOOTER
    ====================================================== */

    .footer {
        background: var(--surface-soft);

        border-top: 1px solid var(--border);

        text-align: center;

        padding: 20px;

        color: var(--muted);

        font-size: 10px;
    }


    .footer strong {
        color: var(--brown);
    }


    /* =====================================================
       RESPONSIVE
    ====================================================== */

    @media (max-width: 900px) {

        .recipe-hero {
            grid-template-columns: 1fr;
        }


        .recipe-image,
        .no-image {
            height: 390px;
        }


        .content-grid {
            grid-template-columns: 1fr;
        }

    }


    @media (max-width: 700px) {

        .navbar {
            min-height: auto;

            padding: 14px 18px;

            flex-wrap: wrap;

            gap: 10px;
        }


        .nav-links {
            order: 3;

            width: 100%;

            overflow-x: auto;

            margin-left: 0;

            gap: 20px;
        }


        .nav-actions {
            margin-left: auto;
        }


        .page {
            padding:
                28px 18px
                50px;
        }


        .recipe-title {
            font-size: 36px;
        }


        .recipe-image,
        .no-image {
            height: 300px;
        }

    }


    @media (max-width: 500px) {

        .login-link {
            display: none;
        }


        .recipe-title {
            font-size: 31px;
        }


        .recipe-meta {
            gap: 8px;
        }


        .meta-divider {
            width: 15px;
        }

    }

</style>

</head>


<body>

{{-- =====================================================
NAVBAR
====================================================== --}}

<header class="navbar">


<a
    href="{{ route('recipes.index') }}"
    class="brand"
>

    <div class="brand-mark">
        R
    </div>


    <div>

        <div class="brand-name">
            ResepKu
        </div>


        <span class="brand-subtitle">
            Culinary Journal
        </span>

    </div>

</a>


<nav class="nav-links">


    <a href="{{ route('recipes.index') }}">
        Beranda
    </a>


    <a href="{{ route('recipes.index') }}#koleksi">
        Koleksi Resep
    </a>


    @auth

        <a href="{{ route('recipes.create') }}">
            Tambah Resep
        </a>

    @endauth


</nav>


<div class="nav-actions">


    @auth


        @if(auth()->user()->role === 'admin')

            <a
                href="{{ route('admin.dashboard') }}"
                class="dashboard-link"
            >
                Admin
            </a>

        @else

            <a
                href="{{ route('user.dashboard') }}"
                class="dashboard-link"
            >
                Dashboard
            </a>

        @endif


        <form
            method="POST"
            action="{{ route('logout') }}"
        >

            @csrf

            <button
                type="submit"
                class="logout-button"
            >
                Keluar
            </button>

        </form>


    @else


        <a
            href="{{ route('login') }}"
            class="login-link"
        >
            Masuk
        </a>


        <a
            href="{{ route('register') }}"
            class="dashboard-link"
        >
            Daftar
        </a>


    @endauth


</div>

</header>


{{-- =====================================================
PAGE
====================================================== --}}

<main class="page">


{{-- BREADCRUMB --}}

<div class="breadcrumb">


    <a href="{{ route('recipes.index') }}">
        Beranda
    </a>


    <span>
        /
    </span>


    <span>
        Detail Resep
    </span>


</div>


{{-- SUCCESS --}}

@if(session('success'))

    <div class="success">

        ✓
        {{ session('success') }}

    </div>

@endif


{{-- RECIPE HEADER --}}

<header class="recipe-header">


    <div class="recipe-label">
        Recipe Journal
    </div>


    <h1 class="recipe-title">

        {{ $recipe->title }}

    </h1>


    <div class="recipe-meta">


        <span>

            Oleh

            <strong>
                {{ $recipe->user->name ?? 'Pengguna' }}
            </strong>

        </span>


        <span class="meta-divider"></span>


        <span>

            {{ $recipe->created_at?->format('d M Y') ?? '-' }}

        </span>


        <span class="meta-divider"></span>


        <span>
            Resep Rumahan
        </span>


    </div>


</header>


{{-- HERO --}}

<section class="recipe-hero">


    <div>


        @if($recipe->image)

            <img
                src="{{ $recipe->imageUrl() }}"
                alt="{{ $recipe->title }}"
                class="recipe-image"
            >

        @else

            <div class="no-image">
                Tidak ada foto resep
            </div>

        @endif


    </div>


    <aside class="recipe-aside">


        <div class="aside-item">


            <div class="aside-label">
                Dibuat oleh
            </div>


            <div class="aside-value">
                {{ $recipe->user->name ?? 'Pengguna' }}
            </div>


        </div>


        <div class="aside-item">


            <div class="aside-label">
                Dipublikasikan
            </div>


            <div class="aside-value">
                {{ $recipe->created_at?->format('d M Y') ?? '-' }}
            </div>


        </div>


        <div class="aside-item">


            <div class="aside-label">
                Terakhir diperbarui
            </div>


            <div class="aside-value">
                {{ $recipe->updated_at?->format('d M Y') ?? '-' }}
            </div>


        </div>


        <div class="aside-item">


            <div class="aside-label">
                Kategori
            </div>


            <div class="aside-value">
                Masakan Rumahan
            </div>


            <div class="aside-small">
                Koleksi ResepKu
            </div>


        </div>


    </aside>


</section>


{{-- =====================================================
CONTENT
====================================================== --}}

<div class="content-grid">


    {{-- LEFT --}}

    <div>


        {{-- BAHAN --}}

        <section class="section">


            <div class="section-header">


                <h2 class="section-title">
                    Bahan-bahan
                </h2>


                <span class="section-number">
                    01
                </span>


            </div>


            <div class="ingredients">

                {{ $recipe->ingredients }}

            </div>


        </section>


        {{-- LANGKAH --}}

        <section class="section">


            <div class="section-header">


                <h2 class="section-title">
                    Cara Memasak
                </h2>


                <span class="section-number">
                    02
                </span>


            </div>


            <div class="steps">

                {{ $recipe->steps }}

            </div>


        </section>


        {{-- NOTE --}}

        <div class="note">


            <div class="note-title">
                Catatan
            </div>


            <p>

                Simpan resep ini sebagai referensi
                untuk memasak di lain waktu.
                Selamat mencoba dan semoga hidangannya
                berhasil!

            </p>


        </div>


    </div>


    {{-- RIGHT --}}

    <aside>


        <h2 class="actions-title">
            Resep ini
        </h2>


        <div class="action-list">


            {{-- FAVORITE --}}

            @auth

                <form
                    method="POST"
                    action="{{ route(
                        'recipe.favorite',
                        $recipe
                    ) }}"
                    class="favorite-form"
                >

                    @csrf


                    <button
                        type="submit"
                        class="favorite-button"
                    >

                        <span>
                            ♡ &nbsp; Simpan Resep
                        </span>


                        <span>
                            →
                        </span>

                    </button>


                </form>

            @endauth


            {{-- TAMBAH RESEP --}}

            @auth

                <a
                    href="{{ route('recipes.create') }}"
                    class="action-link"
                >

                    <span>
                        + &nbsp; Tambah Resep
                    </span>


                    <span>
                        →
                    </span>

                </a>

            @endauth


            {{-- HOME --}}

            <a
                href="{{ route('recipes.index') }}"
                class="action-link"
            >

                <span>
                    ← &nbsp; Semua Resep
                </span>


                <span>
                    →
                </span>

            </a>


        </div>


        {{-- ADMIN --}}

        @auth

            @if(auth()->user()->role === 'admin')


                <div class="admin-note">

                    Kamu sedang melihat halaman
                    publik sebagai Administrator.
                    Untuk mengelola resep ini,
                    gunakan panel admin.

                </div>


                <a
                    href="{{ route(
                        'admin.recipes.edit',
                        $recipe
                    ) }}"
                    class="action-link"
                >

                    <span>
                        Edit melalui Admin
                    </span>


                    <span>
                        →
                    </span>

                </a>


            @endif

        @endauth


    </aside>


</div>


{{-- BACK --}}

<div class="back-section">


    <a
        href="{{ route('recipes.index') }}"
        class="back-link"
    >

        ← Kembali ke koleksi resep

    </a>


</div>


</main>


{{-- FOOTER --}}

<footer class="footer">


© {{ date('Y') }}

<strong>
    ResepKu
</strong>

· Culinary Journal

· Masakan rumahan untuk sehari-hari.


</footer>


</body>

</html>