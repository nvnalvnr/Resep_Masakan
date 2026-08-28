<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        {{ $recipe->title }} | ResepKu
    </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;1,500&display=swap"
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
            font-family: "DM Sans", Arial, sans-serif;
            background: var(--paper);
            color: var(--ink);
        }


        a {
            color: inherit;
            text-decoration: none;
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
            background: var(--paper-light);

            border-right: 1px solid var(--line);

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

            padding-bottom: 31px;

            border-bottom: 1px solid var(--line);
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
        }


        .brand-name {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 21px;

            font-weight: 600;
        }


        .brand-small {
            display: block;

            color: var(--muted);

            font-size: 9px;

            letter-spacing: 1.5px;

            text-transform: uppercase;

            margin-top: 2px;
        }


        .nav-label {
            color: #968d82;

            font-size: 9px;

            font-weight: 700;

            letter-spacing: 1.6px;

            text-transform: uppercase;

            margin: 27px 9px 11px;
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

            font-size: 12px;

            color: var(--muted);

            border-left: 2px solid transparent;

            transition: .2s ease;
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

            font-size: 14px;
        }


        /* =====================================================
           SIDEBAR BOTTOM
        ====================================================== */

        .sidebar-bottom {
            margin-top: auto;
        }


        .admin-user {
            border-top: 1px solid var(--line);

            padding-top: 19px;

            display: flex;

            align-items: center;

            gap: 10px;
        }


        .avatar {
            width: 34px;
            height: 34px;

            background: var(--soft-brown);

            color: var(--brown);

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            font-size: 12px;

            font-weight: 700;

            flex-shrink: 0;
        }


        .admin-user-info {
            min-width: 0;
        }


        .admin-user strong {
            display: block;

            font-size: 11px;

            max-width: 125px;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }


        .admin-user span {
            display: block;

            color: var(--muted);

            font-size: 9px;

            margin-top: 2px;
        }


        .logout {
            margin-top: 14px;

            width: 100%;

            background: transparent;

            border: 1px solid var(--line);

            padding: 9px;

            color: var(--muted);

            cursor: pointer;

            font-size: 10px;

            transition: .2s;
        }


        .logout:hover {
            color: #9b3d2d;

            border-color: #c9a397;

            background: #faf0ec;
        }


        /* =====================================================
           MAIN
        ====================================================== */

        .main {
            min-width: 0;

            padding: 36px 48px 45px;
        }


        /* =====================================================
           HEADER
        ====================================================== */

        .top {
            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            padding-bottom: 27px;

            border-bottom: 1px solid var(--line);
        }


        .eyebrow {
            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: 2px;

            color: var(--terracotta);

            font-weight: 700;

            margin-bottom: 8px;
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


        .date {
            font-size: 10px;

            color: var(--muted);

            border-bottom: 1px solid var(--brown);

            padding-bottom: 5px;
        }


        /* =====================================================
           BACK LINK
        ====================================================== */

        .back-link {
            display: inline-block;

            margin-top: 25px;

            margin-bottom: 20px;

            color: var(--brown);

            font-size: 10px;

            font-weight: 700;

            border-bottom: 1px solid var(--brown);

            padding-bottom: 3px;

            transition: .2s;
        }


        .back-link:hover {
            color: var(--terracotta);

            border-color: var(--terracotta);
        }


        /* =====================================================
           SUCCESS
        ====================================================== */

        .success {
            background: var(--soft-green);

            border: 1px solid #d5dac8;

            color: var(--olive);

            padding: 13px 16px;

            margin-bottom: 20px;

            font-size: 11px;
        }


        /* =====================================================
           RECIPE HEADER
        ====================================================== */

        .recipe-heading {
            margin-bottom: 25px;
        }


        .recipe-heading h2 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 32px;

            line-height: 1.25;

            font-weight: 500;

            max-width: 800px;
        }


        .recipe-author {
            margin-top: 9px;

            color: var(--muted);

            font-size: 10px;
        }


        .recipe-author strong {
            color: var(--brown);
        }


        /* =====================================================
           RECIPE HERO
        ====================================================== */

        .recipe-hero {
            display: grid;

            grid-template-columns:
                minmax(0, 1.15fr)
                minmax(280px, .85fr);

            gap: 28px;

            margin-bottom: 30px;
        }


        .recipe-image {
            width: 100%;

            height: 350px;

            object-fit: cover;

            display: block;

            border: 1px solid var(--line);

            background: #e9e3d9;
        }


        .no-image {
            width: 100%;

            height: 350px;

            border: 1px solid var(--line);

            background: #e9e3d9;

            color: #91887d;

            display: flex;

            align-items: center;

            justify-content: center;

            font-family: "Playfair Display", Georgia, serif;

            font-size: 16px;
        }


        .quick-info {
            border-top: 1px solid var(--ink);

            border-bottom: 1px solid var(--line);

            align-self: start;
        }


        .quick-info-row {
            padding: 16px 0;

            border-bottom: 1px solid var(--line);
        }


        .quick-info-row:last-child {
            border-bottom: none;
        }


        .quick-info-label {
            color: var(--muted);

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: 1.2px;

            margin-bottom: 5px;
        }


        .quick-info-value {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 18px;

            font-weight: 500;
        }


        /* =====================================================
           CONTENT
        ====================================================== */

        .recipe-content {
            display: grid;

            grid-template-columns:
                minmax(0, 1.5fr)
                minmax(250px, .7fr);

            gap: 45px;
        }


        .content-section {
            margin-bottom: 35px;
        }


        .section-title {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 23px;

            font-weight: 500;

            padding-bottom: 10px;

            border-bottom: 1px solid var(--ink);

            margin-bottom: 18px;
        }


        .ingredients {
            white-space: pre-line;

            font-size: 12px;

            line-height: 1.9;

            color: #4f4842;
        }


        .steps {
            white-space: pre-line;

            font-size: 12px;

            line-height: 2;

            color: #4f4842;
        }


        /* =====================================================
           ADMIN ACTIONS
        ====================================================== */

        .admin-actions {
            border-top: 1px solid var(--ink);

            margin-top: 10px;
        }


        .action-link {
            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 15px 0;

            border-bottom: 1px solid var(--line);

            font-size: 11px;

            transition: .2s;
        }


        .action-link:hover {
            color: var(--terracotta);

            padding-left: 5px;
        }


        .action-left {
            display: flex;

            align-items: center;

            gap: 10px;
        }


        .action-icon {
            width: 28px;

            height: 28px;

            border: 1px solid var(--line);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 11px;
        }


        .action-description {
            display: block;

            color: var(--muted);

            font-size: 8px;

            margin-top: 2px;
        }


        .delete-form {
            border-bottom: 1px solid var(--line);
        }


        .delete-button {
            width: 100%;

            display: flex;

            justify-content: space-between;

            align-items: center;

            padding: 15px 0;

            background: transparent;

            border: none;

            color: #9b3d2d;

            cursor: pointer;

            font-size: 11px;

            text-align: left;

            transition: .2s;
        }


        .delete-button:hover {
            padding-left: 5px;

            color: #7f3024;
        }


        /* =====================================================
           FOOTER
        ====================================================== */

        footer {
            border-top: 1px solid var(--line);

            margin-top: 50px;

            padding-top: 18px;

            color: var(--muted);

            font-size: 9px;

            display: flex;

            justify-content: space-between;
        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 1000px) {

            .recipe-hero {
                grid-template-columns: 1fr;
            }


            .recipe-content {
                grid-template-columns: 1fr;
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

        }


        @media (max-width: 600px) {

            .main {
                padding: 25px 18px;
            }


            .top {
                display: block;
            }


            .date {
                display: inline-block;

                margin-top: 15px;
            }


            .recipe-heading h2 {
                font-size: 27px;
            }


            .recipe-image,
            .no-image {
                height: 260px;
            }


            footer {
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

                <span>
                    Dashboard
                </span>

            </a>


            <a
                href="{{ route('admin.recipes.index') }}"
                class="active"
            >

                <span class="nav-icon">
                    ≡
                </span>

                <span>
                    Semua Resep
                </span>

            </a>


            <a href="{{ route('recipes.create') }}">

                <span class="nav-icon">
                    +
                </span>

                <span>
                    Tambah Resep
                </span>

            </a>


            <a href="{{ route('admin.users.index') }}">

                <span class="nav-icon">
                    ○
                </span>

                <span>
                    Data User
                </span>

            </a>


            <a href="{{ route('recipes.index') }}">

                <span class="nav-icon">
                    ↗
                </span>

                <span>
                    Lihat Website
                </span>

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



    {{-- =====================================================
         MAIN
    ====================================================== --}}

    <main class="main">


        {{-- HEADER --}}

        <header class="top">


            <div>

                <div class="eyebrow">
                    ResepKu / Admin / Detail
                </div>


                <h1>
                    Detail Resep
                </h1>


                <p>
                    Informasi lengkap resep yang dipilih.
                </p>

            </div>


            <div class="date">

                {{ now()->translatedFormat('l, d F Y') }}

            </div>


        </header>


        {{-- BACK --}}

        <a
            href="{{ route('admin.recipes.index') }}"
            class="back-link"
        >
            ← Kembali ke Semua Resep
        </a>


        {{-- SUCCESS --}}

        @if(session('success'))

            <div class="success">

                {{ session('success') }}

            </div>

        @endif


        {{-- RECIPE TITLE --}}

        <div class="recipe-heading">


            <h2>
                {{ $recipe->title }}
            </h2>


            <p class="recipe-author">

                Dibuat oleh
                <strong>
                    {{ $recipe->user->name ?? 'User' }}
                </strong>

            </p>


        </div>


        {{-- RECIPE HERO --}}

        <div class="recipe-hero">


            {{-- IMAGE --}}

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


            {{-- QUICK INFO --}}

            <div class="quick-info">


                <div class="quick-info-row">


                    <div class="quick-info-label">
                        Pembuat
                    </div>


                    <div class="quick-info-value">
                        {{ $recipe->user->name ?? 'User' }}
                    </div>


                </div>


                <div class="quick-info-row">


                    <div class="quick-info-label">
                        Dibuat
                    </div>


                    <div class="quick-info-value">

                        {{ $recipe->created_at?->format('d M Y') ?? '-' }}

                    </div>


                </div>


                <div class="quick-info-row">


                    <div class="quick-info-label">
                        Terakhir diperbarui
                    </div>


                    <div class="quick-info-value">

                        {{ $recipe->updated_at?->format('d M Y') ?? '-' }}

                    </div>


                </div>


            </div>


        </div>


        {{-- CONTENT --}}

        <div class="recipe-content">


            {{-- RECIPE INFORMATION --}}

            <div>


                {{-- BAHAN --}}

                <section class="content-section">


                    <h3 class="section-title">
                        Bahan-bahan
                    </h3>


                    <div class="ingredients">
                        {{ $recipe->ingredients }}
                    </div>


                </section>


                {{-- LANGKAH --}}

                <section class="content-section">


                    <h3 class="section-title">
                        Langkah-langkah
                    </h3>


                    <div class="steps">
                        {{ $recipe->steps }}
                    </div>


                </section>


            </div>


            {{-- ADMIN ACTION --}}

            <aside>


                <h3 class="section-title">
                    Kelola Resep
                </h3>


                <div class="admin-actions">


                    {{-- EDIT --}}

                    <a
                        href="{{ route(
                            'admin.recipes.edit',
                            $recipe
                        ) }}"
                        class="action-link"
                    >


                        <div class="action-left">


                            <div class="action-icon">
                                ✎
                            </div>


                            <div>


                                <strong>
                                    Edit Resep
                                </strong>


                                <span class="action-description">
                                    Ubah informasi resep
                                </span>


                            </div>


                        </div>


                        <span>
                            →
                        </span>


                    </a>


                    {{-- BACK --}}

                    <a
                        href="{{ route('admin.recipes.index') }}"
                        class="action-link"
                    >


                        <div class="action-left">


                            <div class="action-icon">
                                ≡
                            </div>


                            <div>


                                <strong>
                                    Semua Resep
                                </strong>


                                <span class="action-description">
                                    Kembali ke koleksi
                                </span>


                            </div>


                        </div>


                        <span>
                            →
                        </span>


                    </a>


                    {{-- DELETE --}}

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
                            class="delete-button"
                            onclick="return confirm('Yakin ingin menghapus resep ini?')"
                        >


                            <span class="action-left">


                                <span class="action-icon">
                                    ×
                                </span>


                                <span>


                                    <strong>
                                        Hapus Resep
                                    </strong>


                                    <span class="action-description">
                                        Hapus permanen dari koleksi
                                    </span>


                                </span>


                            </span>


                            <span>
                                →
                            </span>


                        </button>


                    </form>


                </div>


            </aside>


        </div>


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