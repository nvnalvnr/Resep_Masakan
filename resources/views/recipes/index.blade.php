<!DOCTYPE html>

<html lang="id">

<head>


<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>
    ResepKu - Kumpulan Resep Masakan
</title>


<link rel="preconnect" href="https://fonts.googleapis.com">

<link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;1,500&display=swap"
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
        --brown-dark: #4c261b;
        --terracotta: #a95635;
        --olive: #5d6947;

        --border: #ded6ca;

        --soft-brown: #eee4d8;
        --soft-green: #e5eadf;
        --soft-red: #f1dfda;
    }


    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
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

        line-height: 1.6;
    }


    a {
        color: inherit;

        text-decoration: none;
    }


    button,
    input {
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

        padding: 0 42px;

        background:
            rgba(
                255,
                253,
                248,
                .97
            );

        border-bottom: 1px solid var(--border);

        backdrop-filter: blur(8px);

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


    .brand-icon {
        width: 38px;
        height: 38px;

        border-radius: 50%;

        background: var(--brown);

        color: #fff;

        display: flex;

        align-items: center;

        justify-content: center;

        font-family: Georgia, serif;

        font-size: 17px;
    }


    .brand-text {
        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: 21px;

        font-weight: 600;
    }


    .brand-text span {
        color: var(--terracotta);
    }


    .nav-menu {
        display: flex;

        align-items: center;

        gap: 25px;

        margin-left: auto;
    }


    .nav-menu a {
        position: relative;

        padding: 5px 0;

        color: var(--muted);

        font-size: 10px;
    }


    .nav-menu a:hover {
        color: var(--brown);
    }


    .nav-menu a.active {
        color: var(--brown);

        font-weight: 700;
    }


    .nav-menu a.active::after {
        content: "";

        position: absolute;

        left: 0;
        right: 0;

        bottom: -3px;

        height: 1px;

        background: var(--brown);
    }


    .nav-right {
        display: flex;

        align-items: center;

        gap: 7px;

        flex-shrink: 0;
    }


    .login-btn {
        color: var(--muted);

        padding: 8px 10px;

        font-size: 9px;
    }


    .login-btn:hover {
        color: var(--brown);
    }


    .dashboard-btn {
        background: var(--brown);

        color: white;

        border: 1px solid var(--brown);

        padding: 9px 13px;

        font-size: 9px;

        font-weight: 700;

        transition: .2s ease;
    }


    .dashboard-btn:hover {
        background: var(--terracotta);

        border-color: var(--terracotta);
    }


    .logout-btn {
        background: transparent;

        color: var(--muted);

        border: 1px solid var(--border);

        padding: 8px 11px;

        font-size: 9px;

        cursor: pointer;

        transition: .2s ease;
    }


    .logout-btn:hover {
        color: var(--brown);

        background: var(--surface-soft);
    }


    /* =====================================================
       HERO
    ====================================================== */

    .hero {
        max-width: 1200px;

        margin: 0 auto;

        padding: 55px 30px 40px;

        display: grid;

        grid-template-columns:
            1.25fr
            .9fr;

        gap: 45px;

        align-items: center;
    }


    .hero-eyebrow {
        color: var(--terracotta);

        font-size: 8px;

        font-weight: 700;

        text-transform: uppercase;

        letter-spacing: 2px;

        margin-bottom: 10px;
    }


    .hero-content h1 {
        max-width: 690px;

        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size:
            clamp(
                38px,
                4.3vw,
                55px
            );

        font-weight: 500;

        line-height: 1.08;
    }


    .hero-content h1 span {
        color: var(--terracotta);
    }


    .hero-content p {
        max-width: 590px;

        margin-top: 15px;

        margin-bottom: 22px;

        color: var(--muted);

        font-size: 11px;

        line-height: 1.9;
    }


    .hero-buttons {
        display: flex;

        align-items: center;

        gap: 9px;
    }


    .primary-btn {
        display: inline-flex;

        align-items: center;

        justify-content: center;

        padding: 10px 15px;

        background: var(--brown);

        color: #fff;

        border: 1px solid var(--brown);

        font-size: 9px;

        font-weight: 700;

        transition: .2s ease;
    }


    .primary-btn:hover {
        background: var(--terracotta);

        border-color: var(--terracotta);
    }


    .secondary-btn {
        display: inline-flex;

        align-items: center;

        justify-content: center;

        padding: 9px 15px;

        background: transparent;

        color: var(--brown);

        border: 1px solid var(--border);

        font-size: 9px;

        font-weight: 700;

        transition: .2s ease;
    }


    .secondary-btn:hover {
        background: var(--soft-brown);

        border-color: #c8b9a8;
    }


    .hero-image {
        height: 275px;

        overflow: hidden;

        position: relative;

        background: var(--soft-brown);

        border: 1px solid var(--border);
    }


    .hero-image img {
        width: 100%;
        height: 100%;

        display: block;

        object-fit: cover;

        filter: saturate(.82);
    }


    .hero-label {
        position: absolute;

        left: 15px;
        bottom: 15px;

        padding: 8px 11px;

        background:
            rgba(
                255,
                253,
                248,
                .94
            );

        border: 1px solid var(--border);

        color: var(--brown);

        font-size: 8px;

        font-weight: 700;
    }


    /* =====================================================
       CONTAINER
    ====================================================== */

    .container {
        max-width: 1200px;

        margin: 0 auto;

        padding: 10px 30px 65px;
    }


    /* =====================================================
       SECTION HEADER
    ====================================================== */

    .section-heading {
        display: flex;

        align-items: flex-end;

        justify-content: space-between;

        gap: 20px;

        padding-bottom: 15px;

        border-bottom: 1px solid var(--border);

        margin-bottom: 20px;
    }


    .section-label {
        color: var(--terracotta);

        font-size: 8px;

        font-weight: 700;

        text-transform: uppercase;

        letter-spacing: 1.8px;

        margin-bottom: 5px;
    }


    .section-heading h2 {
        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: 27px;

        font-weight: 500;
    }


    .section-heading p {
        color: var(--muted);

        font-size: 9px;

        margin-top: 3px;
    }


    .recipe-count {
        color: var(--muted);

        font-size: 9px;

        white-space: nowrap;
    }


    .recipe-count strong {
        color: var(--brown);

        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: 20px;

        font-weight: 500;
    }


    /* =====================================================
       SEARCH EDITORIAL
    ====================================================== */

    .search-area {
        width: 100%;

        max-width: 100%;

        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 30px;

        padding: 14px 0;

        margin-bottom: 30px;

        border-top: 1px solid var(--text);

        border-bottom: 1px solid var(--border);
    }


    .search-intro {
        flex-shrink: 0;
    }


    .search-kicker {
        color: var(--terracotta);

        font-size: 7px;

        font-weight: 700;

        text-transform: uppercase;

        letter-spacing: 1.5px;
    }


    .search-title {
        margin-top: 2px;

        color: var(--brown);

        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: 18px;

        font-weight: 500;
    }


    .search-box-wrapper {
        margin-left: auto;

        width: 530px;

        max-width: 100%;
    }


    .search-form {
        width: 100%;

        display: flex;

        align-items: center;

        justify-content: flex-end;

        gap: 0;
    }


    .search-field {
        position: relative;

        width: 360px;

        max-width: 100%;
    }


    .search-icon {
        position: absolute;

        left: 0;

        top: 50%;

        transform: translateY(-50%);

        color: var(--terracotta);

        font-size: 13px;

        pointer-events: none;
    }


    .search-input {
        width: 100%;

        height: 38px;

        padding:
            0
            8px
            0
            22px;

        background: transparent;

        border: none;

        border-bottom: 1px solid #bfb5a9;

        outline: none;

        color: var(--text);

        font-size: 10px;
    }


    .search-input::placeholder {
        color: #9a9188;
    }


    .search-input:focus {
        border-bottom-color: var(--brown);
    }


    .search-button {
        height: 38px;

        padding: 0 14px;

        background: var(--brown);

        color: #fff;

        border: 1px solid var(--brown);

        cursor: pointer;

        font-size: 8px;

        font-weight: 700;

        text-transform: uppercase;

        letter-spacing: .8px;

        transition: .2s ease;
    }


    .search-button:hover {
        background: var(--terracotta);

        border-color: var(--terracotta);
    }


    .reset-button {
        height: 38px;

        margin-left: 6px;

        padding: 0 11px;

        display: inline-flex;

        align-items: center;

        justify-content: center;

        border: 1px solid var(--border);

        background: transparent;

        color: var(--muted);

        font-size: 8px;

        font-weight: 700;

        text-transform: uppercase;

        letter-spacing: .6px;

        transition: .2s ease;
    }


    .reset-button:hover {
        color: var(--brown);

        background: var(--soft-brown);
    }


    .search-result {
        margin-top: 7px;

        color: var(--muted);

        font-size: 8px;

        text-align: right;
    }


    .search-result strong {
        color: var(--brown);
    }


    /* =====================================================
       SUCCESS
    ====================================================== */

    .success-message {
        margin-bottom: 20px;

        padding: 10px 12px;

        background: var(--soft-green);

        border-left: 2px solid var(--olive);

        color: var(--olive);

        font-size: 9px;
    }


    /* =====================================================
       RECIPE GRID
    ====================================================== */

    .recipe-grid {
        display: grid;

        grid-template-columns:
            repeat(
                3,
                minmax(
                    0,
                    1fr
                )
            );

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


    .recipe-image-wrapper {
        width: 100%;

        height: 230px;

        overflow: hidden;

        position: relative;

        background: var(--soft-brown);
    }


    .recipe-image {
        width: 100%;
        height: 100%;

        display: block;

        object-fit: cover;

        filter: saturate(.86);

        transition: .3s ease;
    }


    .recipe-card:hover .recipe-image {
        transform: scale(1.035);
    }


    .no-image {
        width: 100%;
        height: 100%;

        display: flex;

        align-items: center;

        justify-content: center;

        background: #e8e0d5;

        color: #8d8379;

        font-size: 9px;
    }


    .recipe-body {
        padding: 16px;
    }


    .recipe-category {
        color: var(--terracotta);

        font-size: 7px;

        font-weight: 700;

        text-transform: uppercase;

        letter-spacing: 1.2px;

        margin-bottom: 6px;
    }


    .recipe-title {
        min-height: 50px;

        margin-bottom: 7px;

        color: var(--text);

        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: 20px;

        font-weight: 500;

        line-height: 1.25;

        display: -webkit-box;

        -webkit-line-clamp: 2;

        -webkit-box-orient: vertical;

        overflow: hidden;
    }


    .recipe-author {
        color: var(--muted);

        font-size: 8px;

        margin-bottom: 12px;
    }


    .recipe-footer {
        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 8px;

        padding-top: 12px;

        border-top: 1px solid var(--border);
    }


    .detail-btn {
        color: var(--brown);

        border-bottom: 1px solid var(--brown);

        padding-bottom: 2px;

        font-size: 9px;

        font-weight: 700;

        transition: .2s ease;
    }


    .detail-btn:hover {
        color: var(--terracotta);

        border-color: var(--terracotta);
    }


    .manage-actions {
        display: flex;

        align-items: center;

        gap: 5px;
    }


    .edit-btn,
    .delete-btn {
        padding: 6px 8px;

        font-size: 8px;

        font-weight: 700;
    }


    .edit-btn {
        background: var(--soft-green);

        color: var(--olive);

        border: 1px solid #cad0c0;
    }


    .edit-btn:hover {
        background: #dce3d3;
    }


    .delete-btn {
        background: transparent;

        color: #944233;

        border: 1px solid #d5bbb2;

        cursor: pointer;
    }


    .delete-btn:hover {
        background: var(--soft-red);
    }


    /* =====================================================
       EMPTY
    ====================================================== */

    .empty {
        padding: 70px 20px;

        border-top: 1px solid var(--text);

        border-bottom: 1px solid var(--border);

        text-align: center;

        background:
            rgba(
                255,
                253,
                248,
                .28
            );
    }


    .empty-icon {
        color: var(--brown);

        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: 30px;

        margin-bottom: 8px;
    }


    .empty h3 {
        color: var(--text);

        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: 25px;

        font-weight: 500;

        margin-bottom: 6px;
    }


    .empty p {
        color: var(--muted);

        font-size: 9px;

        margin-bottom: 16px;
    }


    /* =====================================================
       EDITORIAL PAGINATION
    ====================================================== */

    .pagination {
        margin-top: 48px;

        padding-top: 20px;

        border-top: 1px solid var(--border);

        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 20px;
    }


    .pagination-side {
        min-width: 120px;
    }


    .pagination-side.right {
        text-align: right;
    }


    .pagination-arrow {
        display: inline-flex;

        align-items: center;

        gap: 8px;

        color: var(--brown);

        font-size: 8px;

        font-weight: 700;

        text-transform: uppercase;

        letter-spacing: 1px;

        transition: .2s ease;
    }


    .pagination-arrow:hover {
        color: var(--terracotta);

        transform: translateX(2px);
    }


    .pagination-arrow.previous:hover {
        transform: translateX(-2px);
    }


    .pagination-arrow.disabled {
        color: #b8afa5;

        pointer-events: none;
    }


    .pagination-arrow .arrow {
        font-size: 15px;

        line-height: 1;
    }


    .pagination-center {
        display: flex;

        align-items: center;

        justify-content: center;

        gap: 2px;
    }


    .pagination-number {
        position: relative;

        min-width: 34px;

        height: 34px;

        display: inline-flex;

        align-items: center;

        justify-content: center;

        color: var(--muted);

        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: 13px;

        font-weight: 500;
    }


    .pagination-number:hover {
        color: var(--brown);
    }


    .pagination-number.active {
        color: var(--brown);

        font-weight: 600;
    }


    .pagination-number.active::after {
        content: "";

        position: absolute;

        left: 50%;

        bottom: 1px;

        width: 20px;

        height: 2px;

        background: var(--terracotta);

        transform: translateX(-50%);
    }


    .pagination-dots {
        min-width: 24px;

        text-align: center;

        color: #a49b91;

        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: 13px;
    }


    .pagination-info {
        margin-top: 12px;

        color: var(--muted);

        text-align: center;

        font-size: 8px;

        letter-spacing: .4px;
    }


    .pagination-info strong {
        color: var(--brown);
    }


    /* =====================================================
       FOOTER
    ====================================================== */

    .footer {
        padding: 22px 25px;

        border-top: 1px solid var(--border);

        background: var(--surface-soft);

        color: var(--muted);

        text-align: center;

        font-size: 8px;
    }


    .footer strong {
        color: var(--brown);
    }


    /* =====================================================
       RESPONSIVE
    ====================================================== */

    @media (max-width: 1000px) {

        .hero {
            grid-template-columns: 1fr;

            gap: 25px;
        }


        .hero-image {
            height: 245px;
        }


        .recipe-grid {
            grid-template-columns:
                repeat(
                    2,
                    minmax(
                        0,
                        1fr
                    )
                );
        }


        .search-box-wrapper {
            width: 500px;
        }


        .search-field {
            width: 330px;
        }

    }


    @media (max-width: 800px) {

        .navbar {
            padding: 14px 20px;

            flex-wrap: wrap;

            gap: 10px;
        }


        .nav-menu {
            order: 3;

            width: 100%;

            margin-left: 0;

            gap: 20px;

            overflow-x: auto;
        }


        .nav-right {
            margin-left: auto;
        }


        .hero {
            padding:
                40px 20px
                30px;
        }


        .container {
            padding:
                10px 20px
                50px;
        }


        .section-heading {
            align-items: flex-start;

            flex-direction: column;
        }


        .recipe-count {
            margin-top: -7px;
        }


        .search-area {
            align-items: flex-start;

            gap: 14px;

            flex-direction: column;
        }


        .search-box-wrapper {
            width: 100%;

            margin-left: 0;
        }


        .search-form {
            width: 100%;

            justify-content: flex-start;
        }


        .search-field {
            width: min(
                100%,
                430px
            );
        }


        .search-result {
            text-align: left;
        }

    }


    @media (max-width: 600px) {

        .brand-text {
            font-size: 18px;
        }


        .nav-right .login-btn {
            display: none;
        }


        .hero-content h1 {
            font-size: 36px;
        }


        .hero-image {
            height: 215px;
        }


        .hero-buttons {
            flex-direction: column;

            align-items: stretch;
        }


        .primary-btn,
        .secondary-btn {
            width: 100%;
        }


        .search-form {
            flex-wrap: wrap;

            gap: 6px;
        }


        .search-field {
            width: 100%;
        }


        .search-button {
            flex: 1;
        }


        .reset-button {
            margin-left: 0;
        }


        .recipe-grid {
            grid-template-columns: 1fr;
        }


        .recipe-image-wrapper {
            height: 235px;
        }


        .recipe-footer {
            align-items: flex-start;

            flex-direction: column;
        }


        .manage-actions {
            width: 100%;
        }


        .edit-btn,
        .delete-btn {
            flex: 1;

            text-align: center;
        }


        .pagination {
            margin-top: 35px;

            padding-top: 17px;

            display: grid;

            grid-template-columns:
                1fr
                1fr;

            row-gap: 15px;
        }


        .pagination-center {
            grid-column: 1 / -1;

            grid-row: 1;

            order: -1;
        }


        .pagination-side {
            min-width: auto;
        }


        .pagination-side.right {
            text-align: right;
        }


        .pagination-arrow {
            font-size: 7px;
        }


        .pagination-number {
            min-width: 30px;

            height: 30px;

            font-size: 12px;
        }


        .pagination-number.active::after {
            width: 17px;
        }


        .footer {
            line-height: 1.7;
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

    <div class="brand-icon">
        R
    </div>


    <div class="brand-text">

        Resep<span>Ku</span>

    </div>

</a>



<nav class="nav-menu">


    <a
        href="{{ route('recipes.index') }}"
        class="active"
    >
        Beranda
    </a>


    <a href="#resep">
        Koleksi Resep
    </a>


    @auth

        <a href="{{ route('recipes.create') }}">
            Tambah Resep
        </a>

    @endauth


</nav>



<div class="nav-right">


    @auth


        @if(auth()->user()->role === 'admin')

            <a
                href="{{ route('admin.dashboard') }}"
                class="dashboard-btn"
            >
                Admin
            </a>

        @else

            <a
                href="{{ route('user.dashboard') }}"
                class="dashboard-btn"
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
                class="logout-btn"
            >
                Keluar
            </button>

        </form>


    @else


        <a
            href="{{ route('login') }}"
            class="login-btn"
        >
            Masuk
        </a>


        <a
            href="{{ route('register') }}"
            class="dashboard-btn"
        >
            Daftar
        </a>


    @endauth


</div>


</header>

{{-- =====================================================
HERO
====================================================== --}}

<section class="hero">


<div class="hero-content">


    <div class="hero-eyebrow">
        ResepKu · Culinary Journal
    </div>


    <h1>

        Masak lebih mudah,
        <span>rasanya tetap enak.</span>

    </h1>


    <p>

        Temukan resep masakan rumahan yang sederhana,
        praktis, dan mudah dibuat. Simpan resep favoritmu
        atau tambahkan resep buatanmu sendiri.

    </p>


    <div class="hero-buttons">


        <a
            href="#resep"
            class="primary-btn"
        >
            Lihat Koleksi →
        </a>


        @auth

            <a
                href="{{ route('recipes.create') }}"
                class="secondary-btn"
            >
                + Tambah Resep
            </a>

        @endauth


    </div>


</div>



<div class="hero-image">


    <img
        src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=1000&q=85"
        alt="Masakan ResepKu"
    >


    <div class="hero-label">

        Inspirasi masakan hari ini

    </div>


</div>


</section>

{{-- =====================================================
MAIN
====================================================== --}}

<main
    class="container"
    id="resep"
>


{{-- SECTION HEADER --}}

<div class="section-heading">


    <div>


        <div class="section-label">
            Recipe Collection
        </div>


        <h2>
            Kumpulan Resep
        </h2>


        <p>
            Cari dan temukan resep yang ingin kamu coba.
        </p>


    </div>


    <span class="recipe-count">

        Total

        <strong>
            {{ $recipes->total() }}
        </strong>

        resep

    </span>


</div>



{{-- =================================================
     SEARCH
================================================== --}}

<div class="search-area">


    {{-- JUDUL DI KIRI --}}

    <div class="search-intro">


        <div class="search-kicker">
            Find a recipe
        </div>


        <div class="search-title">
            Cari resep
        </div>


    </div>



    {{-- FORM DI KANAN --}}

    <div class="search-box-wrapper">


        <form
            action="{{ route('recipes.index') }}"
            method="GET"
            class="search-form"
        >


            <div class="search-field">


                <span class="search-icon">
                    ⌕
                </span>


                <input
                    type="text"
                    name="search"
                    class="search-input"
                    placeholder="ayam, mie, nasi..."
                    value="{{ request('search') }}"
                >


            </div>


            <button
                type="submit"
                class="search-button"
            >
                Cari
            </button>


            @if(request('search'))


                <a
                    href="{{ route('recipes.index') }}"
                    class="reset-button"
                >
                    Reset
                </a>


            @endif


        </form>



        @if(request('search'))


            <div class="search-result">

                Hasil pencarian:

                <strong>
                    "{{ request('search') }}"
                </strong>

            </div>


        @endif


    </div>


</div>



{{-- SUCCESS --}}

@if(session('success'))


    <div class="success-message">

        ✓

        {{ session('success') }}

    </div>


@endif



{{-- =================================================
     RECIPE LIST
================================================== --}}

@if($recipes->count())


    <div class="recipe-grid">


        @foreach($recipes as $recipe)


            <article class="recipe-card">


                <div class="recipe-image-wrapper">


                    @if($recipe->image)


                        <img
                            src="{{ $recipe->imageUrl() }}"
                            alt="{{ $recipe->title }}"
                            class="recipe-image"
                            loading="lazy"
                        >


                    @else


                        <div class="no-image">

                            Tidak ada foto resep

                        </div>


                    @endif


                </div>



                <div class="recipe-body">


                    <div class="recipe-category">

                        Resep Rumahan

                    </div>


                    <h3 class="recipe-title">

                        {{ $recipe->title }}

                    </h3>


                    <div class="recipe-author">

                        Oleh

                        {{ $recipe->user->name ?? 'Pengguna' }}

                    </div>



                    <div class="recipe-footer">


                        <a
                            href="{{ route(
                                'recipes.show',
                                $recipe->slug
                            ) }}"
                            class="detail-btn"
                        >

                            Lihat Resep →

                        </a>



                        @if(
                            auth()->check()
                            && auth()->id() === $recipe->user_id
                        )


                            <div class="manage-actions">


                                <a
                                    href="{{ route(
                                        'recipes.edit',
                                        $recipe->slug
                                    ) }}"
                                    class="edit-btn"
                                >
                                    Edit
                                </a>


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
                                        class="delete-btn"
                                        onclick="return confirm('Yakin ingin menghapus resep ini?')"
                                    >
                                        Hapus
                                    </button>


                                </form>


                            </div>


                        @endif


                    </div>


                </div>


            </article>


        @endforeach


    </div>


@else


    <div class="empty">


        <div class="empty-icon">
            ResepKu
        </div>


        @if(request('search'))


            <h3>
                Resep tidak ditemukan
            </h3>


            <p>

                Tidak ada resep dengan kata

                "{{ request('search') }}".

            </p>


            <a
                href="{{ route('recipes.index') }}"
                class="secondary-btn"
            >

                Lihat Semua Resep

            </a>


        @else


            <h3>
                Belum ada resep
            </h3>


            <p>
                Yuk tambahkan resep pertama ke koleksi.
            </p>


            @auth

                <a
                    href="{{ route('recipes.create') }}"
                    class="primary-btn"
                >

                    + Tambah Resep

                </a>

            @endauth


        @endif


    </div>


@endif



{{-- =================================================
     PAGINATION
================================================== --}}

@if($recipes->hasPages())


    <div class="pagination">


        {{-- SEBELUMNYA --}}

        <div class="pagination-side">


            @if($recipes->onFirstPage())


                <span
                    class="pagination-arrow disabled previous"
                >

                    <span class="arrow">
                        ←
                    </span>

                    Sebelumnya

                </span>


            @else


                <a
                    href="{{ $recipes->previousPageUrl() }}"
                    class="pagination-arrow previous"
                >

                    <span class="arrow">
                        ←
                    </span>

                    Sebelumnya

                </a>


            @endif


        </div>



        {{-- NOMOR HALAMAN --}}

        <div class="pagination-center">


            @if($recipes->currentPage() > 3)


                <a
                    href="{{ $recipes->url(1) }}"
                    class="pagination-number"
                >
                    1
                </a>


                @if($recipes->currentPage() > 4)

                    <span class="pagination-dots">
                        …
                    </span>

                @endif


            @endif



            @for(
                $page = max(
                    1,
                    $recipes->currentPage() - 2
                );

                $page <= min(
                    $recipes->lastPage(),
                    $recipes->currentPage() + 2
                );

                $page++
            )


                @if(
                    $page === $recipes->currentPage()
                )


                    <span
                        class="pagination-number active"
                    >

                        {{ $page }}

                    </span>


                @else


                    <a
                        href="{{ $recipes->url($page) }}"
                        class="pagination-number"
                    >

                        {{ $page }}

                    </a>


                @endif


            @endfor



            @if(
                $recipes->currentPage()
                <
                $recipes->lastPage() - 2
            )


                @if(
                    $recipes->currentPage()
                    <
                    $recipes->lastPage() - 3
                )

                    <span class="pagination-dots">
                        …
                    </span>

                @endif


                <a
                    href="{{
                        $recipes->url(
                            $recipes->lastPage()
                        )
                    }}"
                    class="pagination-number"
                >

                    {{ $recipes->lastPage() }}

                </a>


            @endif


        </div>



        {{-- BERIKUTNYA --}}

        <div class="pagination-side right">


            @if($recipes->hasMorePages())


                <a
                    href="{{ $recipes->nextPageUrl() }}"
                    class="pagination-arrow"
                >

                    Berikutnya

                    <span class="arrow">
                        →
                    </span>

                </a>


            @else


                <span class="pagination-arrow disabled">

                    Berikutnya

                    <span class="arrow">
                        →
                    </span>

                </span>


            @endif


        </div>


    </div>



    <div class="pagination-info">

        Menampilkan

        <strong>
            {{ $recipes->firstItem() }}
        </strong>

        –

        <strong>
            {{ $recipes->lastItem() }}
        </strong>

        dari

        <strong>
            {{ $recipes->total() }}
        </strong>

        resep

    </div>


@endif


</main>

{{-- =====================================================
FOOTER
====================================================== --}}

<footer class="footer">


© {{ date('Y') }}

<strong>
    ResepKu
</strong>

· Culinary Journal
· Kumpulan resep masakan untuk sehari-hari.


</footer>

</body>

</html>
