<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resep Saya | ResepKu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

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
            --light-muted: #a8a099;

            --brown: #6b3424;
            --brown-dark: #512719;
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
            font-family: "DM Sans", Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
            font-size: 14px;
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
           LAYOUT
        ===================================================== */

        .page {
            min-height: 100vh;

            display: grid;

            grid-template-columns: 240px minmax(0, 1fr);
        }


        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sidebar {
            background: #fbf9f4;

            border-right: 1px solid var(--border);

            min-height: 100vh;

            padding: 30px 22px;

            position: sticky;

            top: 0;

            height: 100vh;

            display: flex;

            flex-direction: column;
        }


        .brand {
            display: flex;

            align-items: center;

            gap: 11px;

            padding: 5px 7px 31px;

            border-bottom: 1px solid var(--border);
        }


        .brand-mark {
            width: 40px;
            height: 40px;

            background: var(--brown);

            color: white;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 50%;

            font-family: Georgia, serif;

            font-size: 18px;

            flex-shrink: 0;
        }


        .brand-name {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 22px;

            font-weight: 600;

            line-height: 1;
        }


        .brand-small {
            display: block;

            color: var(--muted);

            font-size: 10px;

            letter-spacing: 1.5px;

            text-transform: uppercase;

            margin-top: 5px;
        }


        .nav-label {
            color: #968d82;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 1.6px;

            text-transform: uppercase;

            margin: 28px 9px 11px;
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

            padding: 12px 10px;

            font-size: 13px;

            color: var(--muted);

            border-left: 2px solid transparent;

            transition:
                background .2s ease,
                color .2s ease,
                border-color .2s ease;
        }


        .nav a:hover {
            color: var(--brown);

            background: #f4eee5;
        }


        .nav a.active {
            color: var(--brown);

            border-left-color: var(--brown);

            background: #eee5da;

            font-weight: 700;
        }


        .nav-icon {
            width: 19px;

            text-align: center;

            font-size: 15px;

            flex-shrink: 0;
        }


        /* =====================================================
           SIDEBAR USER
        ===================================================== */

        .sidebar-bottom {
            margin-top: auto;
        }


        .admin-user {
            border-top: 1px solid var(--border);

            padding-top: 19px;

            display: flex;

            align-items: center;

            gap: 10px;
        }


        .avatar {
            width: 38px;
            height: 38px;

            background: var(--soft-brown);

            color: var(--brown);

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 50%;

            font-size: 13px;

            font-weight: 700;

            flex-shrink: 0;
        }


        .admin-user strong {
            display: block;

            font-size: 12px;

            max-width: 135px;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }


        .admin-user span {
            display: block;

            color: var(--muted);

            font-size: 10px;

            margin-top: 3px;
        }


        .logout {
            margin-top: 14px;

            width: 100%;

            background: transparent;

            border: 1px solid var(--border);

            padding: 10px;

            color: var(--muted);

            cursor: pointer;

            font-size: 12px;

            transition: .2s ease;
        }


        .logout:hover {
            color: #9b3d2d;

            border-color: #c9a397;

            background: #faf0ec;
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main {
            min-width: 0;

            padding: 38px 48px 45px;
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .top {
            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            padding-bottom: 26px;

            border-bottom: 1px solid var(--border);
        }


        .eyebrow {
            font-size: 10px;

            text-transform: uppercase;

            letter-spacing: 2px;

            color: var(--terracotta);

            font-weight: 700;

            margin-bottom: 9px;
        }


        .top h1 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 36px;

            font-weight: 500;

            line-height: 1.15;
        }


        .top p {
            margin-top: 9px;

            color: var(--muted);

            font-size: 13px;

            line-height: 1.6;
        }


        .date {
            font-size: 12px;

            color: var(--muted);

            border-bottom: 1px solid var(--brown);

            padding-bottom: 6px;

            white-space: nowrap;
        }


        /* =====================================================
           INTRO
        ===================================================== */

        .intro {
            display: flex;

            justify-content: space-between;

            align-items: flex-end;

            gap: 30px;

            margin: 27px 0 25px;
        }


        .intro h2 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 27px;

            font-weight: 500;

            line-height: 1.3;
        }


        .intro h2 em {
            color: var(--terracotta);

            font-style: italic;
        }


        .intro-text {
            color: var(--muted);

            font-size: 13px;

            line-height: 1.7;

            max-width: 400px;

            text-align: right;
        }


        /* =====================================================
           ACTION BAR
        ===================================================== */

        .action-bar {
            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;

            padding: 16px 0;

            border-top: 1px solid var(--border);

            border-bottom: 1px solid var(--border);

            margin-bottom: 18px;
        }


        .recipe-count {
            color: var(--muted);

            font-size: 13px;
        }


        .recipe-count strong {
            color: var(--brown);

            font-size: 14px;
        }


        .add-button {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            min-height: 40px;

            padding: 0 17px;

            background: var(--brown);

            border: 1px solid var(--brown);

            color: white;

            font-size: 12px;

            font-weight: 700;

            transition: .2s ease;
        }


        .add-button:hover {
            background: var(--brown-dark);

            border-color: var(--brown-dark);
        }


        /* =====================================================
           SEARCH
        ===================================================== */

        .search-box {
            display: grid;

            grid-template-columns: minmax(0, 1fr) auto auto;

            gap: 8px;

            margin-bottom: 25px;
        }


        .search-input-wrapper {
            min-width: 0;
        }


        .search-input {
            width: 100%;

            height: 44px;

            padding: 0 14px;

            border: 1px solid var(--border);

            background: var(--surface);

            color: var(--text);

            outline: none;

            font-size: 13px;

            transition: .2s ease;
        }


        .search-input:focus {
            border-color: var(--terracotta);

            background: #fffefb;
        }


        .search-input::placeholder {
            color: #aaa198;
        }


        .search-button,
        .reset-button {
            height: 44px;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 0 16px;

            font-size: 12px;

            font-weight: 600;

            cursor: pointer;

            transition: .2s ease;
        }


        .search-button {
            border: 1px solid var(--brown);

            background: var(--brown);

            color: white;
        }


        .search-button:hover {
            background: var(--brown-dark);

            border-color: var(--brown-dark);
        }


        .reset-button {
            border: 1px solid var(--border);

            background: var(--surface);

            color: var(--muted);
        }


        .reset-button:hover {
            background: var(--soft-brown);

            color: var(--brown);

            border-color: #c8b9a8;
        }


        .search-result {
            padding: 12px 14px;

            margin-top: -10px;

            margin-bottom: 20px;

            background: var(--soft-brown);

            border-left: 3px solid var(--brown);

            color: var(--muted);

            font-size: 12px;
        }


        .search-result strong {
            color: var(--brown);
        }


        /* =====================================================
           RECIPE GRID
        ===================================================== */

        .recipe-grid {
            display: grid;

            grid-template-columns: repeat(3, minmax(0, 1fr));

            gap: 24px;
        }


        /* =====================================================
           RECIPE CARD
        ===================================================== */

        .recipe-card {
            background: var(--surface);

            border: 1px solid var(--border);

            min-width: 0;

            display: flex;

            flex-direction: column;

            transition:
                transform .2s ease,
                box-shadow .2s ease;
        }


        .recipe-card:hover {
            transform: translateY(-2px);

            box-shadow: 0 8px 22px rgba(80, 55, 40, .07);
        }


        .recipe-image {
            width: 100%;

            height: 245px;

            background: #e9e2d8;

            position: relative;

            overflow: hidden;
        }


        .recipe-image img {
            width: 100%;

            height: 100%;

            object-fit: cover;

            display: block;

            transition: transform .35s ease;
        }


        .recipe-card:hover .recipe-image img {
            transform: scale(1.025);
        }


        .image-placeholder {
            width: 100%;

            height: 100%;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #eee7dd;

            color: #a69b8e;

            font-family: "Playfair Display", Georgia, serif;

            font-size: 18px;

            font-style: italic;
        }


        .recipe-number {
            position: absolute;

            top: 14px;

            left: 14px;

            min-width: 42px;

            height: 42px;

            padding: 0 8px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: rgba(45, 39, 35, .88);

            color: white;

            font-size: 12px;

            font-weight: 700;

            letter-spacing: .5px;
        }


        .recipe-content {
            padding: 21px 20px 18px;

            display: flex;

            flex-direction: column;

            flex: 1;
        }


        .recipe-label {
            color: var(--terracotta);

            font-size: 10px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1.5px;

            margin-bottom: 8px;
        }


        .recipe-card-title {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 29px;

            font-weight: 500;

            line-height: 1.18;

            color: var(--text);

            margin-bottom: 9px;

            word-break: break-word;
        }


        .recipe-date {
            color: var(--muted);

            font-size: 12px;

            line-height: 1.5;

            margin-bottom: 16px;
        }


        /* =====================================================
           CARD ACTIONS
        ===================================================== */

        .recipe-actions {
            display: grid;

            grid-template-columns: repeat(3, minmax(0, 1fr));

            gap: 7px;

            border-top: 1px solid var(--border);

            padding-top: 15px;

            margin-top: auto;
        }


        .recipe-actions a,
        .recipe-actions button {
            min-height: 40px;

            display: flex;

            align-items: center;

            justify-content: center;

            border: 1px solid var(--border);

            background: transparent;

            font-family: inherit;

            font-size: 12px;

            font-weight: 600;

            cursor: pointer;

            transition: .2s ease;
        }


        .btn-view {
            background: var(--soft-brown) !important;

            border-color: var(--soft-brown) !important;

            color: var(--brown);
        }


        .btn-view:hover {
            background: #e6d9cb !important;

            border-color: #e6d9cb !important;
        }


        .btn-edit {
            color: var(--olive);

            background: #fffdf8;
        }


        .btn-edit:hover {
            background: var(--soft-green);

            border-color: #c9d0be;
        }


        .btn-delete {
            color: #a33b2c;

            background: #fffdf8;
        }


        .btn-delete:hover {
            background: var(--soft-red);

            border-color: #d9b8af;
        }


        /* =====================================================
           EMPTY STATE
        ===================================================== */

        .empty-state {
            grid-column: 1 / -1;

            padding: 70px 25px;

            text-align: center;

            background: var(--surface);

            border: 1px solid var(--border);
        }


        .empty-icon {
            width: 54px;
            height: 54px;

            margin: 0 auto 17px;

            border-radius: 50%;

            display: flex;

            align-items: center;
            justify-content: center;

            background: var(--soft-brown);

            color: var(--brown);

            font-size: 22px;
        }


        .empty-state h3 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 24px;

            font-weight: 500;

            margin-bottom: 8px;
        }


        .empty-state p {
            color: var(--muted);

            font-size: 13px;

            line-height: 1.7;

            max-width: 430px;

            margin: 0 auto 20px;
        }


        .empty-button {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            min-height: 40px;

            padding: 0 17px;

            background: var(--brown);

            color: white;

            font-size: 12px;

            font-weight: 700;
        }


        .empty-button:hover {
            background: var(--brown-dark);
        }


        /* =====================================================
           PAGINATION
        ===================================================== */

        .pagination-wrapper {
            width: 100%;

            margin-top: 35px;

            padding-top: 22px;

            border-top: 1px solid var(--border);

            display: flex;

            justify-content: center;

            text-align: center;
        }


        .pagination {
            display: flex;

            align-items: center;

            justify-content: center;

            gap: 6px;

            flex-wrap: wrap;
        }


        .page-btn {
            width: 38px;
            height: 38px;

            flex-shrink: 0;

            display: flex;

            align-items: center;
            justify-content: center;

            border: 1px solid var(--border);

            background: var(--surface);

            color: var(--muted);

            font-size: 12px;

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
            border-color: var(--border);

            background: #f5f1eb;

            color: #b7aea5;

            cursor: default;
        }


        .page-arrow {
            font-size: 20px;

            font-family: Arial, sans-serif;

            font-weight: 400;
        }


        .pagination-info {
            color: var(--muted);

            font-size: 11px;

            margin-top: 12px;
        }


        .pagination-info strong {
            color: var(--brown);
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {
            border-top: 1px solid var(--border);

            margin-top: 50px;

            padding-top: 18px;

            color: var(--muted);

            font-size: 11px;

            display: flex;

            justify-content: space-between;

            gap: 20px;
        }


        /* =====================================================
           TABLET
        ===================================================== */

        @media (max-width: 1200px) {

            .main {
                padding: 32px;
            }


            .recipe-grid {
                gap: 18px;
            }


            .recipe-image {
                height: 220px;
            }


            .recipe-card-title {
                font-size: 26px;
            }

        }


        @media (max-width: 1050px) {

            .page {
                grid-template-columns: 210px minmax(0, 1fr);
            }


            .sidebar {
                padding-left: 17px;
                padding-right: 17px;
            }


            .main {
                padding: 30px 25px;
            }


            .recipe-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

        }


        /* =====================================================
           MOBILE NAV
        ===================================================== */

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
                padding-bottom: 16px;

                border-bottom: none;
            }


            .nav-label {
                display: none;
            }


            .nav {
                flex-direction: row;

                overflow-x: auto;

                gap: 3px;

                margin-top: 10px;

                padding-bottom: 2px;
            }


            .nav a {
                white-space: nowrap;

                border-left: none;

                border-bottom: 2px solid transparent;

                padding: 10px 12px;

                font-size: 13px;
            }


            .nav a.active {
                border-left: none;

                border-bottom-color: var(--brown);
            }


            .sidebar-bottom {
                display: none;
            }


            .intro {
                display: grid;

                grid-template-columns: 1fr;

                align-items: start;

                gap: 14px;
            }


            .intro-text {
                max-width: 520px;

                text-align: left;
            }

        }


        /* =====================================================
           SMALL MOBILE
        ===================================================== */

        @media (max-width: 600px) {

            .main {
                padding: 25px 17px 35px;
            }


            .top {
                display: block;
            }


            .top h1 {
                font-size: 30px;
            }


            .top p {
                font-size: 13px;
            }


            .date {
                display: inline-block;

                margin-top: 15px;

                font-size: 12px;
            }


            .intro {
                margin-top: 22px;
            }


            .intro h2 {
                font-size: 23px;
            }


            .intro-text {
                font-size: 13px;
            }


            .action-bar {
                align-items: flex-start;

                flex-direction: column;

                gap: 12px;
            }


            .recipe-count {
                font-size: 13px;
            }


            .add-button {
                width: 100%;

                font-size: 12px;
            }


            .search-box {
                grid-template-columns: 1fr;

                gap: 7px;
            }


            .search-input {
                font-size: 13px;
            }


            .search-button,
            .reset-button {
                width: 100%;

                font-size: 12px;
            }


            .recipe-grid {
                grid-template-columns: 1fr;

                gap: 18px;
            }


            .recipe-image {
                height: 235px;
            }


            .recipe-content {
                padding: 19px 17px 16px;
            }


            .recipe-card-title {
                font-size: 28px;
            }


            .recipe-date {
                font-size: 12px;
            }


            .recipe-actions {
                gap: 6px;
            }


            .recipe-actions a,
            .recipe-actions button {
                min-height: 40px;

                font-size: 12px;
            }


            .pagination-wrapper {
                margin-top: 28px;

                padding-top: 18px;
            }


            .pagination {
                gap: 5px;
            }


            .page-btn {
                width: 34px;
                height: 34px;

                font-size: 11px;
            }


            .page-arrow {
                font-size: 18px;
            }


            .pagination-info {
                font-size: 11px;
            }


            footer {
                display: block;

                line-height: 1.8;

                font-size: 11px;
            }


            footer span {
                display: block;
            }

        }


        @media (max-width: 380px) {

            .recipe-card-title {
                font-size: 25px;
            }


            .recipe-image {
                height: 210px;
            }


            .recipe-actions a,
            .recipe-actions button {
                font-size: 11px;
            }

        }

    </style>

</head>


<body>

<div class="page">


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <aside class="sidebar">

        <a
            href="{{ auth()->user()->role === 'admin'
                ? route('admin.dashboard')
                : route('user.dashboard') }}"
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

            @if(auth()->user()->role === 'admin')

                <a href="{{ route('admin.dashboard') }}">

                    <span class="nav-icon">⌂</span>

                    <span>Dashboard</span>

                </a>


                <a href="{{ route('admin.recipes.index') }}">

                    <span class="nav-icon">≡</span>

                    <span>Semua Resep</span>

                </a>


                <a href="{{ route('recipes.create') }}">

                    <span class="nav-icon">+</span>

                    <span>Tambah Resep</span>

                </a>


                <a href="{{ route('admin.users.index') }}">

                    <span class="nav-icon">○</span>

                    <span>Data User</span>

                </a>


                <a href="{{ route('recipes.index') }}">

                    <span class="nav-icon">↗</span>

                    <span>Lihat Website</span>

                </a>

            @else

                <a href="{{ route('user.dashboard') }}">

                    <span class="nav-icon">⌂</span>

                    <span>Dashboard</span>

                </a>


                <a
                    href="{{ route('recipes.my') }}"
                    class="active"
                >

                    <span class="nav-icon">≡</span>

                    <span>Resep Saya</span>

                </a>


                <a href="{{ route('recipes.create') }}">

                    <span class="nav-icon">+</span>

                    <span>Tambah Resep</span>

                </a>


                <a href="{{ route('user.favorites') }}">

                    <span class="nav-icon">♡</span>

                    <span>Resep Tersimpan</span>

                </a>


                <a href="{{ route('profile.edit') }}">

                    <span class="nav-icon">○</span>

                    <span>Profil</span>

                </a>


                <a href="{{ route('recipes.index') }}">

                    <span class="nav-icon">↗</span>

                    <span>Lihat Website</span>

                </a>

            @endif

        </nav>


        <!-- =================================================
             SIDEBAR BOTTOM
        ================================================== -->

        <div class="sidebar-bottom">

            <div class="admin-user">

                <div class="avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>


                <div>

                    <strong>
                        {{ auth()->user()->name }}
                    </strong>

                    <span>
                        {{ auth()->user()->role === 'admin'
                            ? 'Administrator'
                            : 'Pengguna'
                        }}
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


    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="main">


        <!-- HEADER -->

        <header class="top">

            <div>

                <div class="eyebrow">
                    ResepKu / Koleksi Pribadi
                </div>


                <h1>
                    Resep Saya
                </h1>


                <p>
                    Semua resep pribadi dalam satu tempat.
                </p>

            </div>


            <div class="date">

                {{ now()->translatedFormat('l, d F Y') }}

            </div>

        </header>


        <!-- INTRO -->

        <section class="intro">

            <h2>
                Koleksi masakan
                <em>favoritmu.</em>
            </h2>


            <p class="intro-text">

                Kelola resep yang sudah kamu buat,
                lihat detailnya, edit informasi,
                atau hapus resep yang sudah tidak digunakan.

            </p>

        </section>


        <!-- ACTION BAR -->

        <div class="action-bar">

            <div class="recipe-count">

                Menampilkan

                <strong>
                    {{ $recipes->total() }}
                </strong>

                resep milikmu.

            </div>


            <a
                href="{{ route('recipes.create') }}"
                class="add-button"
            >
                + Tambah Resep
            </a>

        </div>


        <!-- SEARCH -->

        <form
            method="GET"
            action="{{ route('recipes.my') }}"
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
                🔍 &nbsp; Cari
            </button>


            <a
                href="{{ route('recipes.my') }}"
                class="reset-button"
            >
                ↻ &nbsp; Reset
            </a>

        </form>


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


        <!-- =================================================
             RECIPE GRID
        ================================================== -->

        <section class="recipe-grid">


            @forelse($recipes as $index => $recipe)

                <article class="recipe-card">


                    <!-- IMAGE -->

                    <div class="recipe-image">


                        @if($recipe->image)

                            @if(
                                str_starts_with($recipe->image, 'http://') ||
                                str_starts_with($recipe->image, 'https://')
                            )

                                <img
                                    src="{{ $recipe->image }}"
                                    alt="{{ $recipe->title }}"
                                    loading="lazy"
                                >

                            @else

                                <img
                                    src="{{ asset('storage/' . $recipe->image) }}"
                                    alt="{{ $recipe->title }}"
                                    loading="lazy"
                                >

                            @endif

                        @else

                            <div class="image-placeholder">
                                ResepKu
                            </div>

                        @endif


                        <div class="recipe-number">

                            {{ str_pad(
                                ($recipes->firstItem() ?? 1) + $index,
                                2,
                                '0',
                                STR_PAD_LEFT
                            ) }}

                        </div>


                    </div>


                    <!-- CONTENT -->

                    <div class="recipe-content">


                        <div class="recipe-label">
                            Resep Saya
                        </div>


                        <h2 class="recipe-card-title">
                            {{ $recipe->title }}
                        </h2>


                        <div class="recipe-date">

                            Dibuat
                            {{ optional($recipe->created_at)->translatedFormat('d F Y') }}

                        </div>


                        <!-- ACTIONS -->

                        <div class="recipe-actions">


                            <a
                                href="{{ route('recipes.show', $recipe->slug) }}"
                                class="btn-view"
                            >
                                Lihat
                            </a>


                            <a
                                href="{{ route('recipes.edit', $recipe->slug) }}"
                                class="btn-edit"
                            >
                                Edit
                            </a>


                            <form
                                action="{{ route('recipes.destroy', $recipe->slug) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus resep ini?');"
                            >

                                @csrf

                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn-delete"
                                >
                                    Hapus
                                </button>

                            </form>


                        </div>


                    </div>


                </article>


            @empty


                @if(request('search'))

                    <div class="empty-state">

                        <div class="empty-icon">
                            🔍
                        </div>


                        <h3>
                            Resep tidak ditemukan
                        </h3>


                        <p>
                            Tidak ada resep yang cocok dengan
                            pencarian "{{ request('search') }}".
                            Coba gunakan kata kunci lain.
                        </p>


                        <a
                            href="{{ route('recipes.my') }}"
                            class="empty-button"
                        >
                            ↻ Reset Pencarian
                        </a>

                    </div>

                @else

                    <div class="empty-state">

                        <div class="empty-icon">
                            +
                        </div>


                        <h3>
                            Belum ada resep
                        </h3>


                        <p>
                            Kamu belum memiliki resep.
                            Yuk tambahkan resep pertama ke koleksi ResepKu.
                        </p>


                        <a
                            href="{{ route('recipes.create') }}"
                            class="empty-button"
                        >
                            + Tambah Resep
                        </a>

                    </div>

                @endif

            @endforelse


        </section>


        <!-- =================================================
             PAGINATION
        ================================================== -->

        @if($recipes->hasPages())

            <div class="pagination-wrapper">

                <div>

                    <div class="pagination">


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


                        @php

                            $current = $recipes->currentPage();

                            $last = $recipes->lastPage();

                            $start = max(1, $current - 2);

                            $end = min($last, $current + 2);

                        @endphp


                        {{-- FIRST PAGE --}}

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


                        {{-- PAGE NUMBERS --}}

                        @for($page = $start; $page <= $end; $page++)

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


                        {{-- LAST PAGE --}}

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


                    <!-- PAGINATION INFO -->

                    <div class="pagination-info">

                        Menampilkan

                        <strong>
                            {{ $recipes->firstItem() }}
                        </strong>

                        sampai

                        <strong>
                            {{ $recipes->lastItem() }}
                        </strong>

                        dari

                        <strong>
                            {{ $recipes->total() }}
                        </strong>

                        resep

                    </div>

                </div>

            </div>

        @endif


        <!-- =================================================
             FOOTER
        ================================================== -->

        <footer>

            <span>
                © {{ date('Y') }} ResepKu
            </span>


            <span>
                Culinary Journal ·
                {{ auth()->user()->role === 'admin'
                    ? 'Administrator'
                    : 'Member'
                }}
            </span>

        </footer>


    </main>

</div>

</body>

</html>