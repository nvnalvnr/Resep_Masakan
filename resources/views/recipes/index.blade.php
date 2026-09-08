<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ResepKu - Kumpulan Resep Masakan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
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
            background: var(--bg);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button,
        input {
            font-family: inherit;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            width: 100%;
            min-height: 76px;

            display: flex;
            align-items: center;

            padding: 0 7%;

            background: rgba(255, 253, 248, 0.96);
            border-bottom: 1px solid var(--border);

            position: sticky;
            top: 0;
            z-index: 1000;

            backdrop-filter: blur(10px);
        }

        /* =========================
           BRAND / LOGO
        ========================= */

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;

            flex-shrink: 0;

            position: relative;
            z-index: 2;
        }

        .brand-icon {
            width: 41px;
            height: 41px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: var(--brown);
            color: #fff;

            /* LOGO SEKARANG BULAT */
            border-radius: 50%;

            font-family: 'Playfair Display', serif;
            font-size: 20px;
            font-weight: 700;

            flex-shrink: 0;
        }

        .brand-text {
            font-family: 'Playfair Display', serif;
            font-size: 23px;
            font-weight: 700;
            color: var(--text);
        }

        .brand-text span {
            color: var(--terracotta);
        }

        /* =========================
           NAV MENU - TENGAH
        ========================= */

        .nav-menu {
            position: absolute;

            left: 50%;
            top: 50%;

            transform: translate(-50%, -50%);

            display: flex;
            align-items: center;
            justify-content: center;

            gap: 32px;

            white-space: nowrap;
        }

        .nav-menu a {
            color: var(--muted);

            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 600;

            transition: 0.2s ease;

            position: relative;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            color: var(--brown);
        }

        .nav-menu a.active::after {
            content: "";

            position: absolute;

            left: 0;
            right: 0;

            bottom: -8px;

            height: 2px;

            background: var(--brown);

            border-radius: 10px;
        }

        /* =========================
           NAV RIGHT
        ========================= */

        .nav-right {
            display: flex;
            align-items: center;
            gap: 12px;

            margin-left: auto;

            position: relative;
            z-index: 2;
        }

        .login-btn {
            color: var(--brown);

            font-size: 14px;
            font-weight: 600;

            padding: 9px 15px;

            transition: 0.2s ease;
        }

        .login-btn:hover {
            color: var(--terracotta);
        }

        .dashboard-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 9px 17px;

            background: var(--brown);
            color: #fff;

            border-radius: 9px;

            font-size: 13px;
            font-weight: 600;

            transition: 0.2s ease;
        }

        .dashboard-btn:hover {
            background: var(--brown-dark);
            transform: translateY(-1px);
        }

        /* =========================
           USER MENU
        ========================= */

        .user-menu {
            position: relative;
        }

        .user-button {
            display: flex;
            align-items: center;
            gap: 9px;

            border: none;
            background: transparent;

            padding: 5px 3px;

            cursor: pointer;

            color: var(--text);

            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 600;

            transition: 0.2s ease;
        }

        .user-button:hover {
            opacity: 0.8;
        }

        .user-avatar {
            width: 34px;
            height: 34px;

            flex-shrink: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: var(--brown);
            color: #fff;

            font-size: 13px;
            font-weight: 700;
        }

        .user-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;

            line-height: 1.2;
        }

        .user-name {
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 600;
            color: var(--text);
        }

        .user-role {
            font-family: 'DM Sans', sans-serif;
            font-size: 11px;
            font-weight: 500;
            color: var(--muted);

            margin-top: 2px;
        }

        .user-arrow {
            font-size: 12px;
            color: var(--muted);

            transition: transform 0.2s ease;

            margin-left: 2px;
        }

        .user-button.active .user-arrow {
            transform: rotate(180deg);
        }

        /* =========================
           DROPDOWN
        ========================= */

        .user-dropdown {
            position: absolute;

            top: calc(100% + 12px);
            right: 0;

            width: 215px;

            background: var(--surface);

            border: 1px solid var(--border);

            border-radius: 14px;

            box-shadow:
                0 14px 35px rgba(45, 39, 35, 0.13);

            padding: 8px;

            display: none;

            z-index: 2000;
        }

        .user-dropdown.show {
            display: block;

            animation: dropdownShow 0.18s ease;
        }

        @keyframes dropdownShow {
            from {
                opacity: 0;
                transform: translateY(-5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .user-dropdown-header {
            padding: 12px;

            border-bottom: 1px solid var(--border);

            margin-bottom: 5px;
        }

        .user-dropdown-name {
            display: block;

            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 700;

            color: var(--text);
        }

        .user-dropdown-role {
            display: block;

            font-family: 'DM Sans', sans-serif;
            font-size: 11px;
            font-weight: 500;

            color: var(--muted);

            margin-top: 3px;
        }

        .user-dropdown a,
        .user-dropdown button {
            width: 100%;

            display: block;

            padding: 10px 12px;

            border: none;
            border-radius: 9px;

            background: transparent;

            color: var(--text);

            text-decoration: none;
            text-align: left;

            font-family: 'DM Sans', sans-serif;
            font-size: 13px;
            font-weight: 500;

            cursor: pointer;

            transition: 0.2s ease;
        }

        .user-dropdown a:hover,
        .user-dropdown button:hover {
            background: var(--surface-soft);
            color: var(--brown);
        }

        .user-dropdown form {
            margin: 0;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            max-width: 1200px;

            margin: 0 auto;

            padding: 85px 30px 65px;

            display: grid;

            grid-template-columns: 1.15fr 0.85fr;

            gap: 60px;

            align-items: center;
        }

        .hero-content {
            max-width: 650px;
        }

        .hero-label {
            display: inline-flex;
            align-items: center;
            gap: 7px;

            padding: 7px 13px;

            background: var(--soft-brown);

            border-radius: 30px;

            color: var(--brown);

            font-size: 12px;
            font-weight: 700;

            margin-bottom: 20px;
        }

        .hero-label::before {
            content: "✦";
            color: var(--terracotta);
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;

            font-size: clamp(42px, 5vw, 68px);

            line-height: 1.05;

            letter-spacing: -1.5px;

            margin-bottom: 22px;

            color: var(--text);
        }

        .hero h1 span {
            color: var(--terracotta);
        }

        .hero-description {
            max-width: 570px;

            color: var(--muted);

            font-size: 16px;

            line-height: 1.8;

            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .primary-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 12px 20px;

            background: var(--brown);
            color: white;

            border-radius: 10px;

            font-size: 14px;
            font-weight: 600;

            transition: 0.2s ease;
        }

        .primary-btn:hover {
            background: var(--brown-dark);
            transform: translateY(-2px);
        }

        .secondary-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 11px 19px;

            background: transparent;

            color: var(--brown);

            border: 1px solid var(--border);

            border-radius: 10px;

            font-size: 14px;
            font-weight: 600;

            transition: 0.2s ease;
        }

        .secondary-btn:hover {
            background: var(--surface);
            border-color: var(--brown);
        }

        /* =========================
           HERO CARD
        ========================= */

        .hero-card {
            background: var(--surface);

            border: 1px solid var(--border);

            border-radius: 22px;

            padding: 18px;

            box-shadow: 0 15px 35px rgba(45, 39, 35, 0.08);
        }

        .hero-card-image {
            width: 100%;
            height: 360px;

            object-fit: cover;

            border-radius: 16px;

            background: var(--soft-brown);
        }

        .hero-card-info {
            padding: 18px 5px 3px;
        }

        .hero-card-info small {
            color: var(--terracotta);

            font-size: 11px;
            font-weight: 700;

            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hero-card-info h3 {
            font-family: 'Playfair Display', serif;

            font-size: 24px;

            margin-top: 5px;
        }

        /* =========================
           SEARCH
        ========================= */

        .search-section {
            max-width: 1200px;

            margin: 0 auto;

            padding: 10px 30px 60px;
        }

        .search-box {
            width: 100%;

            display: flex;
            align-items: center;

            background: var(--surface);

            border: 1px solid var(--border);

            border-radius: 14px;

            padding: 7px;

            box-shadow: 0 8px 20px rgba(45, 39, 35, 0.04);
        }

        .search-icon {
            padding: 0 12px;

            color: var(--muted);

            font-size: 17px;
        }

        .search-box input {
            flex: 1;

            min-width: 0;

            border: none;
            outline: none;

            background: transparent;

            color: var(--text);

            font-size: 14px;

            padding: 10px 5px;
        }

        .search-box input::placeholder {
            color: #aaa198;
        }

        .search-btn {
            border: none;

            background: var(--brown);

            color: white;

            padding: 10px 20px;

            border-radius: 9px;

            font-size: 13px;
            font-weight: 600;

            cursor: pointer;

            transition: 0.2s ease;

            white-space: nowrap;
        }

        .search-btn:hover {
            background: var(--brown-dark);
        }

        /* =========================
           RESET BUTTON
        ========================= */

        .reset-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 10px 17px;

            margin-left: 5px;

            background: var(--soft-red);

            color: #9b4634;

            border-radius: 9px;

            font-size: 13px;
            font-weight: 600;

            white-space: nowrap;

            transition: 0.2s ease;
        }

        .reset-btn:hover {
            background: #e8ccc5;
            color: #7f382b;
        }

        /* =========================
           SEARCH RESULT INFO
        ========================= */

        .search-result-info {
            margin-top: 13px;

            color: var(--muted);

            font-size: 12px;
        }

        .search-result-info strong {
            color: var(--brown);
        }

        /* =========================
           RECIPE SECTION
        ========================= */

        .recipe-section {
            max-width: 1200px;

            margin: 0 auto;

            padding: 10px 30px 80px;
        }

        .section-heading {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;

            gap: 20px;

            margin-bottom: 30px;
        }

        .section-heading small {
            display: block;

            color: var(--terracotta);

            font-size: 11px;
            font-weight: 700;

            text-transform: uppercase;
            letter-spacing: 1.3px;

            margin-bottom: 5px;
        }

        .section-heading h2 {
            font-family: 'Playfair Display', serif;

            font-size: 35px;

            line-height: 1.2;
        }

        .section-heading p {
            color: var(--muted);

            font-size: 13px;
        }

        /* =========================
           RECIPE GRID
        ========================= */

        .recipe-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 24px;
        }

        .recipe-card {
            background: var(--surface);

            border: 1px solid var(--border);

            border-radius: 17px;

            overflow: hidden;

            transition: 0.25s ease;
        }

        .recipe-card:hover {
            transform: translateY(-5px);

            box-shadow: 0 14px 30px rgba(45, 39, 35, 0.09);
        }

        .recipe-image-wrap {
            position: relative;

            width: 100%;
            height: 230px;

            overflow: hidden;

            background: var(--soft-brown);
        }

        .recipe-image {
            width: 100%;
            height: 100%;

            object-fit: cover;

            transition: transform 0.4s ease;
        }

        .recipe-card:hover .recipe-image {
            transform: scale(1.04);
        }

        .recipe-content {
            padding: 19px;
        }

        .recipe-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 8px;
        }

        .recipe-tag {
            display: inline-flex;

            padding: 5px 9px;

            background: var(--soft-green);

            color: var(--olive);

            border-radius: 20px;

            font-size: 10px;
            font-weight: 700;
        }

        .recipe-date {
            color: var(--muted);

            font-size: 10px;
        }

        .recipe-content h3 {
            font-family: 'Playfair Display', serif;

            font-size: 22px;

            line-height: 1.25;

            margin-bottom: 8px;
        }

        .recipe-content p {
            color: var(--muted);

            font-size: 12px;

            line-height: 1.7;

            margin-bottom: 16px;

            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;

            overflow: hidden;
        }

        .recipe-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;

            padding-top: 13px;

            border-top: 1px solid var(--border);
        }

        .recipe-author {
            color: var(--muted);

            font-size: 11px;
        }

        .recipe-detail {
            color: var(--brown);

            font-size: 12px;
            font-weight: 700;
        }

        .recipe-detail:hover {
            color: var(--terracotta);
        }

        /* =========================
           RECIPE ACTIONS
        ========================= */

        .recipe-actions {
            display: flex;
            gap: 7px;

            margin-top: 13px;
        }

        .edit-btn,
        .delete-btn {
            border-radius: 8px;

            padding: 7px 11px;

            font-size: 11px;
            font-weight: 600;

            cursor: pointer;
        }

        .edit-btn {
            background: var(--soft-green);
            color: var(--olive);
        }

        .delete-btn {
            background: var(--soft-red);
            color: #9b4634;

            border: none;
        }

        .delete-btn:hover {
            background: #e8ccc5;
        }

        /* =========================
           EMPTY STATE
        ========================= */

        .empty-state {
            background: var(--surface);

            border: 1px dashed var(--border);

            border-radius: 18px;

            padding: 60px 25px;

            text-align: center;
        }

        .empty-icon {
            font-size: 38px;
            margin-bottom: 12px;
        }

        .empty-state h3 {
            font-family: 'Playfair Display', serif;

            font-size: 25px;

            margin-bottom: 8px;
        }

        .empty-state p {
            color: var(--muted);

            font-size: 13px;

            margin-bottom: 20px;
        }

        /* =========================
           PAGINATION
        ========================= */

        .pagination-wrap {
            width: 100%;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-top: 45px;
        }

        .pagination {
            display: flex;

            align-items: center;
            justify-content: center;

            gap: 7px;
        }

        .pagination a,
        .pagination span {
            width: 38px;
            height: 38px;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            border: 1px solid var(--border);

            border-radius: 9px;

            background: var(--surface);

            color: var(--text);

            font-family: 'DM Sans', sans-serif;

            font-size: 13px;
            font-weight: 600;

            text-decoration: none;

            transition: all 0.2s ease;
        }

        .pagination a:hover {
            background: var(--soft-brown);

            border-color: var(--brown);

            color: var(--brown);

            transform: translateY(-1px);
        }

        .pagination span.active {
            background: var(--brown);

            border-color: var(--brown);

            color: #fff;

            box-shadow:
                0 4px 10px rgba(107, 52, 36, 0.18);
        }

        .pagination span.disabled {
            background: #f2eee7;

            color: #b7afa6;

            border-color: var(--border);

            cursor: not-allowed;
        }

        .pagination span.dots {
            border-color: transparent;

            background: transparent;

            color: var(--muted);

            cursor: default;
        }

        .pagination .arrow {
            font-size: 20px;
            font-weight: 400;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: var(--brown-dark);

            color: #fff;

            padding: 50px 7% 25px;
        }

        .footer-content {
            max-width: 1200px;

            margin: 0 auto;

            display: flex;
            justify-content: space-between;

            gap: 40px;
        }

        .footer-brand {
            max-width: 350px;
        }

        .footer-brand h3 {
            font-family: 'Playfair Display', serif;

            font-size: 26px;

            margin-bottom: 10px;
        }

        .footer-brand p {
            color: rgba(255, 255, 255, 0.65);

            font-size: 12px;

            line-height: 1.8;
        }

        .footer-links {
            display: flex;

            gap: 55px;
        }

        .footer-column h4 {
            font-size: 12px;

            margin-bottom: 13px;

            color: #fff;
        }

        .footer-column a {
            display: block;

            color: rgba(255, 255, 255, 0.65);

            font-size: 12px;

            margin-bottom: 8px;

            transition: 0.2s ease;
        }

        .footer-column a:hover {
            color: #fff;
        }

        .footer-bottom {
            max-width: 1200px;

            margin: 40px auto 0;

            padding-top: 18px;

            border-top: 1px solid rgba(255, 255, 255, 0.12);

            color: rgba(255, 255, 255, 0.45);

            font-size: 11px;

            text-align: center;
        }

        /* =========================
           RESPONSIVE TABLET
        ========================= */

        @media (max-width: 1000px) {

            .navbar {
                padding: 0 4%;
            }

            .nav-menu {
                gap: 20px;
            }

            .hero {
                grid-template-columns: 1fr;

                padding-top: 60px;
            }

            .hero-card {
                max-width: 600px;
            }

            .recipe-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* =========================
           RESPONSIVE MOBILE
        ========================= */

        @media (max-width: 750px) {

            .navbar {
                height: auto;

                min-height: 70px;

                padding: 12px 5%;

                flex-wrap: wrap;

                gap: 12px;
            }

            .nav-menu {
                position: static;

                order: 3;

                width: 100%;

                transform: none;

                justify-content: center;

                margin: 0;

                padding-top: 7px;

                gap: 24px;
            }

            .nav-menu a {
                font-size: 13px;
            }

            .hero {
                padding: 50px 20px;
            }

            .search-section,
            .recipe-section {
                padding-left: 20px;
                padding-right: 20px;
            }

            .recipe-grid {
                grid-template-columns: 1fr;
            }

            .section-heading {
                align-items: flex-start;

                flex-direction: column;
            }

            .footer-content {
                flex-direction: column;
            }

            .footer-links {
                gap: 40px;
            }
        }

        /* =========================
           RESPONSIVE SMALL MOBILE
        ========================= */

        @media (max-width: 600px) {

            .brand-text {
                font-size: 21px;
            }

            .brand-icon {
                width: 35px;
                height: 35px;
            }

            .user-name {
                font-size: 13px;
            }

            .user-role {
                font-size: 10px;
            }

            .user-avatar {
                width: 32px;
                height: 32px;
            }

            .hero h1 {
                font-size: 40px;
            }

            .hero-card-image {
                height: 280px;
            }

            .search-box {
                flex-wrap: wrap;
            }

            .search-box input {
                width: calc(100% - 40px);
            }

            .search-btn {
                width: 100%;
                margin-top: 5px;
            }

            .reset-btn {
                width: 100%;
                margin-left: 0;
                margin-top: 5px;
            }

            .footer-links {
                flex-direction: column;
                gap: 20px;
            }

            .pagination-wrap {
                margin-top: 35px;
            }

            .pagination {
                gap: 5px;
            }

            .pagination a,
            .pagination span {
                width: 34px;
                height: 34px;

                font-size: 12px;
            }

            .pagination .arrow {
                font-size: 18px;
            }
        }

        /* =========================
           RESPONSIVE EXTRA SMALL
        ========================= */

        @media (max-width: 450px) {

            .nav-menu {
                gap: 13px;
            }

            .nav-menu a {
                font-size: 11px;
            }

            .user-info {
                display: none;
            }

            .user-button {
                gap: 5px;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: stretch;
            }

            .primary-btn,
            .secondary-btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <!-- =========================
         NAVBAR
    ========================= -->

    <header class="navbar">

        <!-- LOGO KIRI -->

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


        <!-- MENU TENGAH -->

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


        <!-- LOGIN / USER KANAN -->

        <div class="nav-right">

            @auth

                <div class="user-menu">

                    <button
                        type="button"
                        class="user-button"
                        id="userMenuButton"
                        aria-label="Menu pengguna"
                        aria-expanded="false"
                    >

                        <div class="user-avatar">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>


                        <div class="user-info">

                            <span class="user-name">
                                {{ auth()->user()->name }}
                            </span>

                            <span class="user-role">
                                {{ ucfirst(auth()->user()->role) }}
                            </span>

                        </div>


                        <span class="user-arrow">
                            ▾
                        </span>

                    </button>


                    <!-- DROPDOWN USER -->

                    <div
                        class="user-dropdown"
                        id="userDropdown"
                    >

                        <div class="user-dropdown-header">

                            <span class="user-dropdown-name">
                                {{ auth()->user()->name }}
                            </span>

                            <span class="user-dropdown-role">
                                {{ ucfirst(auth()->user()->role) }}
                            </span>

                        </div>


                        @if(auth()->user()->role === 'admin')

                            <a href="{{ route('admin.dashboard') }}">
                                Dashboard
                            </a>

                        @else

                            <a href="{{ route('user.dashboard') }}">
                                Dashboard
                            </a>

                        @endif


                        <a href="{{ url('/profile') }}">
                            Profil
                        </a>


                        <form
                            method="POST"
                            action="{{ route('logout') }}"
                        >

                            @csrf

                            <button type="submit">
                                Logout
                            </button>

                        </form>

                    </div>

                </div>

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


    <!-- =========================
         HERO
    ========================= -->

    <section class="hero">

        <div class="hero-content">

            <div class="hero-label">
                Inspirasi Masakan Hari Ini
            </div>


            <h1>
                Masak Enak,<br>
                <span>Tanpa Ribet.</span>
            </h1>


            <p class="hero-description">
                Temukan berbagai resep masakan pilihan yang mudah dibuat,
                lezat, dan cocok untuk menemani setiap momen di rumah.
                Dari masakan rumahan hingga kreasi kekinian.
            </p>


            <div class="hero-buttons">

                <a
                    href="#resep"
                    class="primary-btn"
                >
                    Jelajahi Resep
                </a>


                @auth

                    <a
                        href="{{ route('recipes.create') }}"
                        class="secondary-btn"
                    >
                        + Tambah Resep
                    </a>

                @else

                    <a
                        href="{{ route('register') }}"
                        class="secondary-btn"
                    >
                        Gabung Sekarang
                    </a>

                @endauth

            </div>

        </div>


        <!-- HERO IMAGE -->

        <div class="hero-card">

            <img
                src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=900&q=85"
                alt="Masakan"
                class="hero-card-image"
            >


            <div class="hero-card-info">

                <small>
                    Resep Pilihan
                </small>

                <h3>
                    Sajian Lezat untuk Keluarga
                </h3>

            </div>

        </div>

    </section>


    <!-- =========================
         SEARCH
    ========================= -->

    <section class="search-section">

        <form
            method="GET"
            action="{{ route('recipes.index') }}"
            class="search-box"
        >

            <span class="search-icon">
                ⌕
            </span>


            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari resep favoritmu..."
                autocomplete="off"
            >


            <button
                type="submit"
                class="search-btn"
            >
                Cari Resep
            </button>


            @if(request('search'))

                <a
                    href="{{ route('recipes.index') }}"
                    class="reset-btn"
                >
                    Reset
                </a>

            @endif

        </form>


        @if(request('search'))

            <div class="search-result-info">

                Menampilkan hasil pencarian untuk:

                <strong>
                    "{{ request('search') }}"
                </strong>

                — ditemukan

                <strong>
                    {{ $recipes->total() }}
                </strong>

                resep.

            </div>

        @endif

    </section>


    <!-- =========================
         RECIPE SECTION
    ========================= -->

    <section
        class="recipe-section"
        id="resep"
    >

        <div class="section-heading">

            <div>

                <small>
                    Koleksi Resep
                </small>

                <h2>
                    Temukan Resep Favoritmu
                </h2>

            </div>


            <p>
                Resep pilihan yang bisa kamu coba di rumah.
            </p>

        </div>


        @if($recipes->count())

            <div class="recipe-grid">

                @foreach($recipes as $recipe)

                    <article class="recipe-card">

                        <div class="recipe-image-wrap">

                            @if($recipe->image)

                                <img
                                    src="{{ $recipe->imageUrl() }}"
                                    alt="{{ $recipe->title }}"
                                    class="recipe-image"
                                >

                            @else

                                <img
                                    src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=800&q=80"
                                    alt="{{ $recipe->title }}"
                                    class="recipe-image"
                                >

                            @endif

                        </div>


                        <div class="recipe-content">

                            <div class="recipe-meta">

                                <span class="recipe-tag">
                                    Resep
                                </span>


                                <span class="recipe-date">
                                    {{ $recipe->created_at->format('d M Y') }}
                                </span>

                            </div>


                            <h3>
                                {{ $recipe->title }}
                            </h3>


                            <p>
                                {{ Str::limit($recipe->ingredients, 100) }}
                            </p>


                            <div class="recipe-footer">

                                <span class="recipe-author">

                                    Oleh
                                    {{ $recipe->user->name ?? 'ResepKu' }}

                                </span>


                                <a
                                    href="{{ route('recipes.show', $recipe->slug) }}"
                                    class="recipe-detail"
                                >
                                    Lihat Resep →
                                </a>

                            </div>


                            @auth

                                @if(
                                    auth()->id() === $recipe->user_id ||
                                    auth()->user()->role === 'admin'
                                )

                                    <div class="recipe-actions">

                                        <a
                                            href="{{ route('recipes.edit', $recipe->slug) }}"
                                            class="edit-btn"
                                        >
                                            Edit
                                        </a>


                                        <form
                                            method="POST"
                                            action="{{ route('recipes.destroy', $recipe->slug) }}"
                                            onsubmit="return confirm('Yakin ingin menghapus resep ini?')"
                                        >

                                            @csrf
                                            @method('DELETE')


                                            <button
                                                type="submit"
                                                class="delete-btn"
                                            >
                                                Hapus
                                            </button>

                                        </form>

                                    </div>

                                @endif

                            @endauth

                        </div>

                    </article>

                @endforeach

            </div>


            <!-- =========================
                 PAGINATION
            ========================= -->

            @if($recipes->hasPages())

                <div class="pagination-wrap">

                    <div class="pagination">

                        @if($recipes->onFirstPage())

                            <span class="disabled arrow">
                                ‹
                            </span>

                        @else

                            <a
                                href="{{ $recipes->previousPageUrl() }}"
                                class="arrow"
                                aria-label="Halaman sebelumnya"
                            >
                                ‹
                            </a>

                        @endif


                        @php
                            $currentPage = $recipes->currentPage();
                            $lastPage = $recipes->lastPage();
                        @endphp


                        @for($page = 1; $page <= $lastPage; $page++)

                            @if(
                                $page == 1 ||
                                $page == $lastPage ||
                                abs($page - $currentPage) <= 1
                            )

                                @if($page == $currentPage)

                                    <span class="active">
                                        {{ $page }}
                                    </span>

                                @else

                                    <a href="{{ $recipes->url($page) }}">
                                        {{ $page }}
                                    </a>

                                @endif


                            @elseif(
                                ($page == 2 && $currentPage > 3) ||
                                ($page == $lastPage - 1 && $currentPage < $lastPage - 2)
                            )

                                <span class="dots">
                                    ...
                                </span>

                            @endif

                        @endfor


                        @if($recipes->hasMorePages())

                            <a
                                href="{{ $recipes->nextPageUrl() }}"
                                class="arrow"
                                aria-label="Halaman berikutnya"
                            >
                                ›
                            </a>

                        @else

                            <span class="disabled arrow">
                                ›
                            </span>

                        @endif

                    </div>

                </div>

            @endif


        @else

            <!-- EMPTY STATE -->

            <div class="empty-state">

                <div class="empty-icon">
                    🍳
                </div>


                @if(request('search'))

                    <h3>
                        Resep tidak ditemukan
                    </h3>


                    <p>
                        Tidak ada resep yang cocok dengan pencarian
                        "{{ request('search') }}".
                    </p>


                    <a
                        href="{{ route('recipes.index') }}"
                        class="primary-btn"
                    >
                        Tampilkan Semua Resep
                    </a>

                @else

                    <h3>
                        Resep belum ditemukan
                    </h3>


                    <p>
                        Coba gunakan kata kunci lain atau tambahkan resep baru.
                    </p>


                    @auth

                        <a
                            href="{{ route('recipes.create') }}"
                            class="primary-btn"
                        >
                            + Tambah Resep
                        </a>

                    @else

                        <a
                            href="{{ route('register') }}"
                            class="primary-btn"
                        >
                            Daftar untuk Tambah Resep
                        </a>

                    @endauth

                @endif

            </div>

        @endif

    </section>


    <!-- =========================
         FOOTER
    ========================= -->

    <footer>

        <div class="footer-content">

            <div class="footer-brand">

                <h3>
                    ResepKu
                </h3>

                <p>
                    Tempat berbagi inspirasi masakan sederhana,
                    lezat, dan mudah dibuat untuk semua orang.
                </p>

            </div>


            <div class="footer-links">

                <div class="footer-column">

                    <h4>
                        Navigasi
                    </h4>


                    <a href="{{ route('recipes.index') }}">
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

                </div>


                <div class="footer-column">

                    <h4>
                        Akun
                    </h4>


                    @auth

                        @if(auth()->user()->role === 'admin')

                            <a href="{{ route('admin.dashboard') }}">
                                Dashboard
                            </a>

                        @else

                            <a href="{{ route('user.dashboard') }}">
                                Dashboard
                            </a>

                        @endif


                        <a href="{{ url('/profile') }}">
                            Profil
                        </a>

                    @else

                        <a href="{{ route('login') }}">
                            Masuk
                        </a>


                        <a href="{{ route('register') }}">
                            Daftar
                        </a>

                    @endauth

                </div>

            </div>

        </div>


        <div class="footer-bottom">

            © {{ date('Y') }} ResepKu. Semua hak dilindungi.

        </div>

    </footer>


    <!-- =========================
         USER DROPDOWN JAVASCRIPT
    ========================= -->

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const userMenuButton =
                document.getElementById('userMenuButton');

            const userDropdown =
                document.getElementById('userDropdown');


            if (!userMenuButton || !userDropdown) {
                return;
            }


            /* =========================
               BUKA / TUTUP DROPDOWN
            ========================= */

            userMenuButton.addEventListener('click', function (event) {

                event.stopPropagation();

                const isOpen =
                    userDropdown.classList.toggle('show');


                userMenuButton.classList.toggle(
                    'active',
                    isOpen
                );


                userMenuButton.setAttribute(
                    'aria-expanded',
                    isOpen ? 'true' : 'false'
                );

            });


            /* =========================
               KLIK DI LUAR DROPDOWN
            ========================= */

            document.addEventListener('click', function (event) {

                if (
                    !userDropdown.contains(event.target) &&
                    !userMenuButton.contains(event.target)
                ) {

                    userDropdown.classList.remove('show');

                    userMenuButton.classList.remove('active');

                    userMenuButton.setAttribute(
                        'aria-expanded',
                        'false'
                    );

                }

            });


            /* =========================
               TOMBOL ESC
            ========================= */

            document.addEventListener('keydown', function (event) {

                if (event.key === 'Escape') {

                    userDropdown.classList.remove('show');

                    userMenuButton.classList.remove('active');

                    userMenuButton.setAttribute(
                        'aria-expanded',
                        'false'
                    );

                }

            });

        });

    </script>

</body>

</html>p