<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Semua Resep - Admin | ResepKu</title>


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


    <style>

        :root {
            --paper: #f5f1e8;
            --paper-light: #fbf9f4;
            --white: #fffdf8;

            --ink: #29231f;
            --muted: #777067;

            --brown: #6b3424;
            --terracotta: #a95635;
            --olive: #5d6947;

            --line: #ded7ca;

            --soft-brown: #eee3d8;
            --soft-green: #e7eadf;
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
            min-height: 100vh;

            background: var(--paper);

            color: var(--ink);

            font-family: "DM Sans", Arial, sans-serif;

            font-size: 14px;

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


        /* =========================================
           LAYOUT
        ========================================== */

        .page {
            min-height: 100vh;

            display: grid;

            grid-template-columns: 235px minmax(0, 1fr);
        }


        /* =========================================
           SIDEBAR
        ========================================== */

        .sidebar {
            position: sticky;

            top: 0;

            height: 100vh;

            min-height: 100vh;

            overflow-y: auto;

            padding: 30px 22px;

            background: var(--paper-light);

            border-right: 1px solid var(--line);

            display: flex;

            flex-direction: column;

            z-index: 20;
        }


        .brand {
            display: flex;

            align-items: center;

            gap: 11px;

            padding-bottom: 30px;

            border-bottom: 1px solid var(--line);
        }


        .brand-mark {
            width: 40px;

            height: 40px;

            flex-shrink: 0;

            border-radius: 50%;

            background: var(--brown);

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            font-family: Georgia, serif;

            font-size: 18px;

            font-weight: 600;
        }


        .brand-name {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 21px;

            font-weight: 600;

            line-height: 1.2;
        }


        .brand-small {
            display: block;

            margin-top: 3px;

            color: var(--muted);

            font-size: 9px;

            letter-spacing: 1.5px;

            text-transform: uppercase;
        }


        .nav-label {
            margin: 27px 9px 11px;

            color: #968d82;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 1.5px;

            text-transform: uppercase;
        }


        .nav {
            display: flex;

            flex-direction: column;

            gap: 3px;
        }


        .nav a {
            display: flex;

            align-items: center;

            gap: 11px;

            padding: 11px 10px;

            border-left: 2px solid transparent;

            color: var(--muted);

            font-size: 13px;

            transition: .2s ease;
        }


        .nav a:hover {
            background: #f4eee5;

            color: var(--brown);
        }


        .nav a.active {
            background: #eee5da;

            border-left-color: var(--brown);

            color: var(--brown);

            font-weight: 700;
        }


        .nav-icon {
            width: 19px;

            flex-shrink: 0;

            text-align: center;

            font-size: 15px;
        }


        .sidebar-bottom {
            margin-top: auto;
        }


        .admin-user {
            display: flex;

            align-items: center;

            gap: 10px;

            padding-top: 19px;

            border-top: 1px solid var(--line);
        }


        .avatar {
            width: 35px;

            height: 35px;

            flex-shrink: 0;

            border-radius: 50%;

            background: var(--soft-brown);

            color: var(--brown);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 12px;

            font-weight: 700;
        }


        .admin-user-info {
            min-width: 0;
        }


        .admin-user strong {
            display: block;

            max-width: 125px;

            overflow: hidden;

            white-space: nowrap;

            text-overflow: ellipsis;

            font-size: 12px;
        }


        .admin-user span {
            display: block;

            margin-top: 2px;

            color: var(--muted);

            font-size: 10px;
        }


        .logout {
            width: 100%;

            margin-top: 14px;

            padding: 10px;

            border: 1px solid var(--line);

            background: transparent;

            color: var(--muted);

            font-size: 11px;

            cursor: pointer;

            transition: .2s ease;
        }


        .logout:hover {
            background: #faf0ec;

            border-color: #c9a397;

            color: #9b3d2d;
        }


        /* =========================================
           MAIN
        ========================================== */

        .main {
            min-width: 0;

            padding: 36px 48px 45px;
        }


        /* =========================================
           TOP
        ========================================== */

        .top {
            display: flex;

            align-items: flex-start;

            justify-content: space-between;

            gap: 20px;

            padding-bottom: 27px;

            border-bottom: 1px solid var(--line);
        }


        .eyebrow {
            margin-bottom: 8px;

            color: var(--terracotta);

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 2px;

            text-transform: uppercase;
        }


        .top h1 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 36px;

            font-weight: 500;

            line-height: 1.15;
        }


        .top p {
            margin-top: 8px;

            color: var(--muted);

            font-size: 12px;
        }


        .back-btn {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            margin-top: 5px;

            padding-bottom: 5px;

            border-bottom: 1px solid var(--brown);

            color: var(--brown);

            font-size: 10px;

            font-weight: 700;
        }


        .back-btn:hover {
            color: var(--terracotta);

            border-color: var(--terracotta);
        }


        /* =========================================
           INTRO
        ========================================== */

        .intro {
            display: grid;

            grid-template-columns:
                minmax(0, 1.5fr)
                minmax(230px, .8fr);

            gap: 30px;

            margin: 28px 0 30px;

            padding-bottom: 30px;

            border-bottom: 1px solid var(--line);
        }


        .intro h2 {
            max-width: 610px;

            font-family: "Playfair Display", Georgia, serif;

            font-size: 27px;

            font-weight: 500;

            line-height: 1.35;
        }


        .intro h2 em {
            color: var(--terracotta);

            font-style: normal;
        }


        .intro-text {
            max-width: 390px;

            justify-self: end;

            color: var(--muted);

            font-size: 12px;

            line-height: 1.8;
        }


        /* =========================================
           SUCCESS
        ========================================== */

        .success {
            margin-bottom: 25px;

            padding: 13px 16px;

            border: 1px solid #d5dac8;

            background: var(--soft-green);

            color: var(--olive);

            font-size: 11px;
        }


        /* =========================================
           TOOLBAR
        ========================================== */

        .toolbar {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            margin-bottom: 18px;

            padding: 14px 0;

            border-top: 1px solid var(--ink);

            border-bottom: 1px solid var(--line);
        }


        .toolbar-left {
            color: var(--muted);

            font-size: 11px;
        }


        .toolbar-left strong {
            color: var(--ink);

            font-size: 13px;
        }


        .add-btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            padding: 10px 14px;

            background: var(--brown);

            color: white;

            font-size: 10px;

            font-weight: 700;

            transition: .2s ease;
        }


        .add-btn:hover {
            background: var(--terracotta);
        }


        /* =========================================
           SEARCH
        ========================================== */

        .search-box {
            display: flex;

            align-items: stretch;

            gap: 8px;

            margin-bottom: 20px;

            padding: 14px;

            border: 1px solid var(--line);

            background: var(--white);
        }


        .search-input-wrapper {
            flex: 1;

            min-width: 0;
        }


        .search-input {
            width: 100%;

            height: 43px;

            padding: 0 14px;

            outline: none;

            border: 1px solid var(--line);

            background: white;

            color: var(--ink);

            font-size: 12px;

            transition: .2s ease;
        }


        .search-input::placeholder {
            color: #aaa099;
        }


        .search-input:focus {
            border-color: var(--brown);

            box-shadow: 0 0 0 3px rgba(107, 52, 36, .08);
        }


        .search-button,
        .reset-button {
            height: 43px;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 6px;

            padding: 0 18px;

            white-space: nowrap;

            font-size: 11px;

            font-weight: 700;

            cursor: pointer;

            transition: .2s ease;
        }


        .search-button {
            border: 1px solid var(--brown);

            background: var(--brown);

            color: white;
        }


        .search-button:hover {
            border-color: var(--terracotta);

            background: var(--terracotta);
        }


        .reset-button {
            border: 1px solid var(--line);

            background: var(--white);

            color: var(--muted);
        }


        .reset-button:hover {
            border-color: #c8b9a8;

            background: var(--soft-brown);

            color: var(--brown);
        }


        .search-result {
            margin-bottom: 20px;

            color: var(--muted);

            font-size: 11px;
        }


        .search-result strong {
            color: var(--brown);
        }


        /* =========================================
           RECIPE GRID
        ========================================== */

        .recipe-grid {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 18px;
        }


        .recipe-card {
            min-width: 0;

            overflow: hidden;

            border: 1px solid var(--line);

            background: var(--white);

            transition: .2s ease;
        }


        .recipe-card:hover {
            transform: translateY(-3px);

            border-color: #c5b7a5;

            box-shadow: 0 7px 18px rgba(41, 35, 31, .05);
        }


        .recipe-image-wrap {
            position: relative;
        }


        .recipe-image {
            display: block;

            width: 100%;

            height: 185px;

            object-fit: cover;
        }


        .no-image {
            width: 100%;

            height: 185px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #e9e3d9;

            color: #91887d;

            font-family: "Playfair Display", Georgia, serif;

            font-size: 12px;
        }


        .recipe-number {
            position: absolute;

            top: 12px;

            left: 12px;

            padding: 5px 8px;

            background: var(--brown);

            color: white;

            font-size: 10px;

            font-weight: 700;
        }


        .recipe-body {
            padding: 16px;
        }


        .recipe-title {
            min-height: 44px;

            overflow: hidden;

            display: -webkit-box;

            -webkit-box-orient: vertical;

            -webkit-line-clamp: 2;

            font-family: "Playfair Display", Georgia, serif;

            font-size: 16px;

            font-weight: 500;

            line-height: 1.35;
        }


        .recipe-user {
            margin-top: 8px;

            padding-bottom: 13px;

            border-bottom: 1px solid var(--line);

            color: var(--muted);

            font-size: 10px;
        }


        .recipe-user strong {
            color: var(--brown);
        }


        .recipe-actions {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 7px;

            margin-top: 13px;
        }


        .btn {
            display: flex;

            align-items: center;

            justify-content: center;

            padding: 9px 5px;

            border: 1px solid var(--line);

            background: transparent;

            font-size: 10px;

            font-weight: 700;

            cursor: pointer;

            transition: .2s ease;
        }


        .btn-view {
            border-color: #cdbeb0;

            color: var(--brown);
        }


        .btn-view:hover {
            border-color: var(--brown);

            background: var(--brown);

            color: white;
        }


        .btn-edit {
            border-color: #c8cfba;

            color: var(--olive);
        }


        .btn-edit:hover {
            border-color: var(--olive);

            background: var(--olive);

            color: white;
        }


        .delete-form {
            grid-column: span 2;
        }


        .btn-delete {
            width: 100%;

            border-color: #d8bdb4;

            color: #9b3d2d;
        }


        .btn-delete:hover {
            border-color: #9b3d2d;

            background: #9b3d2d;

            color: white;
        }


        /* =========================================
           EMPTY STATE
        ========================================== */

        .empty {
            padding: 55px 20px;

            border: 1px dashed #cfc6b9;

            text-align: center;

            color: var(--muted);

            font-size: 11px;
        }


        .empty-icon {
            margin-bottom: 10px;

            color: var(--brown);

            font-family: "Playfair Display", Georgia, serif;

            font-size: 30px;
        }


        .empty h3 {
            margin-bottom: 7px;

            color: var(--ink);

            font-family: "Playfair Display", Georgia, serif;

            font-size: 21px;

            font-weight: 500;
        }


        .empty p {
            margin-bottom: 15px;
        }


        /* =========================================
           CUSTOM PAGINATION
        ========================================== */

        .custom-pagination-wrapper {
            width: 100%;

            margin-top: 35px;

            padding-top: 22px;

            border-top: 1px solid var(--line);

            display: flex;

            align-items: center;

            justify-content: center;
        }


        .custom-pagination {
            display: flex;

            align-items: center;

            justify-content: center;

            gap: 6px;
        }


        .page-btn {
            width: 38px;

            height: 38px;

            flex-shrink: 0;

            display: flex;

            align-items: center;

            justify-content: center;

            border: 1px solid var(--line);

            background: var(--white);

            color: var(--muted);

            font-size: 11px;

            font-weight: 600;

            line-height: 1;

            text-decoration: none;

            cursor: pointer;

            transition:
                background .2s ease,
                color .2s ease,
                border-color .2s ease;
        }


        a.page-btn:hover {
            border-color: #c8b9a8;

            background: var(--soft-brown);

            color: var(--brown);
        }


        .page-btn.active {
            border-color: var(--brown);

            background: var(--brown);

            color: white;

            font-weight: 700;

            cursor: default;
        }


        .page-btn.disabled {
            border-color: var(--line);

            background: #f5f1eb;

            color: #b7aea5;

            cursor: default;
        }


        .page-arrow {
            font-size: 20px;

            font-family: Arial, sans-serif;

            font-weight: 400;
        }


        /* =========================================
           FOOTER
        ========================================== */

        footer {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-top: 50px;

            padding-top: 18px;

            border-top: 1px solid var(--line);

            color: var(--muted);

            font-size: 10px;
        }


        /* =========================================
           RESPONSIVE
        ========================================== */

        @media (max-width: 1100px) {

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


        @media (max-width: 850px) {

            .page {
                display: block;
            }


            .sidebar {
                position: relative;

                width: 100%;

                height: auto;

                min-height: auto;

                padding: 18px 22px;

                border-right: none;

                border-bottom: 1px solid var(--line);
            }


            .brand {
                padding-bottom: 15px;

                border-bottom: none;
            }


            .nav-label {
                display: none;
            }


            .nav {
                flex-direction: row;

                overflow-x: auto;

                margin-top: 10px;
            }


            .nav a {
                flex-shrink: 0;

                white-space: nowrap;

                border-left: none;

                border-bottom: 2px solid transparent;
            }


            .nav a.active {
                border-left: none;

                border-bottom-color: var(--brown);
            }


            .sidebar-bottom {
                display: none;
            }


            .intro {
                grid-template-columns: 1fr;
            }


            .intro-text {
                justify-self: start;
            }

        }


        @media (max-width: 600px) {

            .main {
                padding: 25px 18px;
            }


            .top {
                display: block;
            }


            .top h1 {
                font-size: 30px;
            }


            .back-btn {
                margin-top: 18px;
            }


            .toolbar {
                display: block;
            }


            .add-btn {
                margin-top: 12px;
            }


            .search-box {
                flex-direction: column;
            }


            .search-button,
            .reset-button {
                width: 100%;
            }


            .recipe-grid {
                grid-template-columns: 1fr;
            }


            .custom-pagination-wrapper {
                margin-top: 28px;

                padding-top: 18px;
            }


            .custom-pagination {
                gap: 5px;

                flex-wrap: wrap;
            }


            .page-btn {
                width: 34px;

                height: 34px;

                font-size: 10px;
            }


            .page-arrow {
                font-size: 18px;
            }


            footer {
                display: block;

                line-height: 1.8;
            }

        }

    </style>

</head>


<body>


<div class="page">


    {{-- =========================================
         SIDEBAR
    ========================================== --}}

    <aside class="sidebar">


        <a
            href="{{ route('admin.dashboard') }}"
            class="brand"
        >

            <div class="brand-mark">
                R
            </div>


            <div>

                <div class="brand-name">
                    ResepKu
                </div>

                <span class="brand-small">
                    Culinary Journal
                </span>

            </div>

        </a>



        <div class="nav-label">
            Menu Utama
        </div>



        <nav class="nav">


            <a href="{{ route('admin.dashboard') }}">

                <span class="nav-icon">
                    ⌂
                </span>

                Dashboard

            </a>



            <a
                href="{{ route('admin.recipes.index') }}"
                class="active"
            >

                <span class="nav-icon">
                    ≡
                </span>

                Semua Resep

            </a>



            <a href="{{ route('recipes.create') }}">

                <span class="nav-icon">
                    +
                </span>

                Tambah Resep

            </a>



            <a href="{{ route('admin.users.index') }}">

                <span class="nav-icon">
                    ○
                </span>

                Data User

            </a>



            <a href="{{ route('recipes.index') }}">

                <span class="nav-icon">
                    ↗
                </span>

                Lihat Website

            </a>


        </nav>



        <div class="sidebar-bottom">


            <div class="admin-user">


                <div class="avatar">

                    {{ strtoupper(
                        substr(
                            auth()->user()->name,
                            0,
                            1
                        )
                    ) }}

                </div>


                <div class="admin-user-info">

                    <strong>
                        {{ auth()->user()->name }}
                    </strong>

                    <span>
                        Administrator
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
                    class="logout"
                >
                    Keluar dari akun
                </button>

            </form>


        </div>


    </aside>



    {{-- =========================================
         MAIN
    ========================================== --}}

    <main class="main">


        {{-- TOP --}}

        <header class="top">


            <div>

                <div class="eyebrow">
                    ResepKu / Admin
                </div>


                <h1>
                    Semua Resep
                </h1>


                <p>
                    Kelola seluruh koleksi resep yang tersedia di website.
                </p>

            </div>


            <a
                href="{{ route('admin.dashboard') }}"
                class="back-btn"
            >

                ← Kembali ke Dashboard

            </a>


        </header>



        {{-- INTRO --}}

        <section class="intro">


            <h2>

                Koleksi resep

                <em>
                    ResepKu
                </em>

                dalam satu tempat.

            </h2>


            <p class="intro-text">

                Sebagai administrator, kamu dapat melihat,
                mengedit, dan menghapus resep yang dibuat
                oleh seluruh pengguna.

            </p>


        </section>



        {{-- SUCCESS MESSAGE --}}

        @if(session('success'))

            <div class="success">

                ✓

                {{ session('success') }}

            </div>

        @endif



        {{-- TOOLBAR --}}

        <div class="toolbar">


            <div class="toolbar-left">

                Menampilkan

                <strong>
                    {{ $recipes->total() }}
                </strong>

                resep

            </div>


            <a
                href="{{ route('recipes.create') }}"
                class="add-btn"
            >

                +

                Tambah Resep

            </a>


        </div>



        {{-- SEARCH --}}

        <form
            method="GET"
            action="{{ route('admin.recipes.index') }}"
            class="search-box"
        >


            <div class="search-input-wrapper">

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    class="search-input"
                    placeholder="Cari resep berdasarkan nama..."
                    autocomplete="off"
                >

            </div>


            <button
                type="submit"
                class="search-button"
            >

                🔍 Cari

            </button>


            <a
                href="{{ route('admin.recipes.index') }}"
                class="reset-button"
            >

                ↻ Reset

            </a>


        </form>



        {{-- SEARCH RESULT --}}

        @if(request('search'))

            <div class="search-result">

                Hasil pencarian:

                <strong>
                    "{{ request('search') }}"
                </strong>

                —

                <strong>
                    {{ $recipes->total() }}
                </strong>

                resep ditemukan.

            </div>

        @endif



        {{-- RECIPE LIST --}}

        @if($recipes->count() > 0)


            <div class="recipe-grid">


                @foreach($recipes as $index => $recipe)


                    <article class="recipe-card">


                        <div class="recipe-image-wrap">


                            @if($recipe->image)

                                <img
                                    src="{{ $recipe->imageUrl() }}"
                                    alt="{{ $recipe->title }}"
                                    class="recipe-image"
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


                            <h3 class="recipe-title">

                                {{ $recipe->title }}

                            </h3>


                            <div class="recipe-user">

                                Dibuat oleh

                                <strong>
                                    {{ $recipe->user->name ?? 'User' }}
                                </strong>

                            </div>



                            <div class="recipe-actions">


                                <a
                                    href="{{ route(
                                        'admin.recipes.show',
                                        $recipe
                                    ) }}"
                                    class="btn btn-view"
                                >

                                    Lihat

                                </a>



                                <a
                                    href="{{ route(
                                        'admin.recipes.edit',
                                        $recipe
                                    ) }}"
                                    class="btn btn-edit"
                                >

                                    Edit

                                </a>



                                <form
                                    method="POST"
                                    action="{{ route(
                                        'admin.recipes.destroy',
                                        $recipe
                                    ) }}"
                                    class="delete-form"
                                >

                                    @csrf

                                    @method('DELETE')


                                    <button
                                        type="submit"
                                        class="btn btn-delete"
                                        onclick="return confirm('Yakin ingin menghapus resep ini?')"
                                    >

                                        Hapus Resep

                                    </button>


                                </form>


                            </div>


                        </div>


                    </article>


                @endforeach


            </div>



            {{-- =====================================
                 CUSTOM PAGINATION
            ====================================== --}}

            @if($recipes->hasPages())

                <div class="custom-pagination-wrapper">


                    <div class="custom-pagination">


                        {{-- PREVIOUS --}}

                        @if($recipes->onFirstPage())

                            <span class="page-btn disabled page-arrow">
                                ‹
                            </span>

                        @else

                            <a
                                href="{{ $recipes->previousPageUrl() }}"
                                class="page-btn page-arrow"
                                aria-label="Halaman sebelumnya"
                            >
                                ‹
                            </a>

                        @endif



                        {{-- PAGE NUMBERS --}}

                        @php

                            $current = $recipes->currentPage();

                            $last = $recipes->lastPage();

                            $start = max(1, $current - 2);

                            $end = min($last, $current + 2);

                        @endphp



                        {{-- FIRST PAGE + DOTS --}}

                        @if($start > 1)


                            <a
                                href="{{ $recipes->url(1) }}"
                                class="page-btn"
                            >
                                1
                            </a>


                            @if($start > 2)

                                <span class="page-btn disabled">
                                    …
                                </span>

                            @endif


                        @endif



                        {{-- CURRENT RANGE --}}

                        @for(
                            $page = $start;
                            $page <= $end;
                            $page++
                        )


                            @if($page == $current)

                                <span
                                    class="page-btn active"
                                    aria-current="page"
                                >
                                    {{ $page }}
                                </span>

                            @else

                                <a
                                    href="{{ $recipes->url($page) }}"
                                    class="page-btn"
                                >
                                    {{ $page }}
                                </a>

                            @endif


                        @endfor



                        {{-- LAST PAGE + DOTS --}}

                        @if($end < $last)


                            @if($end < $last - 1)

                                <span class="page-btn disabled">
                                    …
                                </span>

                            @endif


                            <a
                                href="{{ $recipes->url($last) }}"
                                class="page-btn"
                            >
                                {{ $last }}
                            </a>


                        @endif



                        {{-- NEXT --}}

                        @if($recipes->hasMorePages())

                            <a
                                href="{{ $recipes->nextPageUrl() }}"
                                class="page-btn page-arrow"
                                aria-label="Halaman berikutnya"
                            >
                                ›
                            </a>

                        @else

                            <span class="page-btn disabled page-arrow">
                                ›
                            </span>

                        @endif


                    </div>


                </div>

            @endif


        @else


            {{-- EMPTY STATE --}}

            <div class="empty">


                <div class="empty-icon">
                    ResepKu
                </div>


                @if(request('search'))


                    <h3>
                        Resep tidak ditemukan
                    </h3>


                    <p>

                        Tidak ada resep yang cocok dengan
                        pencarian "{{ request('search') }}".

                    </p>


                    <a
                        href="{{ route('admin.recipes.index') }}"
                        class="add-btn"
                    >

                        ↻ Lihat Semua Resep

                    </a>


                @else


                    <h3>
                        Belum ada resep
                    </h3>


                    <p>
                        Belum ada resep yang tersimpan di database.
                    </p>


                    <a
                        href="{{ route('recipes.create') }}"
                        class="add-btn"
                    >

                        + Tambahkan resep pertama

                    </a>


                @endif


            </div>


        @endif



        {{-- FOOTER --}}

        <footer>


            <span>
                © {{ date('Y') }} ResepKu
            </span>


            <span>
                Culinary Journal · Administrator
            </span>


        </footer>


    </main>


</div>


</body>

</html>