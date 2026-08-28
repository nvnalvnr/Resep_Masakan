<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Semua Resep - Admin | ResepKu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

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


        /* =========================================
           LAYOUT
        ========================================= */

        .page {
            min-height: 100vh;

            display: grid;

            grid-template-columns: 235px 1fr;
        }


        /* =========================================
           SIDEBAR
        ========================================= */

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

            font-family: Georgia, serif;

            font-size: 18px;

            border-radius: 50%;
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


        /* =========================================
           MAIN
        ========================================= */

        .main {
            min-width: 0;

            padding: 36px 48px 45px;
        }


        /* =========================================
           HEADER
        ========================================= */

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


        .back-btn {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            font-size: 10px;

            color: var(--brown);

            border-bottom: 1px solid var(--brown);

            padding-bottom: 5px;

            margin-top: 5px;

            transition: .2s;
        }


        .back-btn:hover {
            color: var(--terracotta);

            border-color: var(--terracotta);
        }


        /* =========================================
           INFO
        ========================================= */

        .intro {
            display: grid;

            grid-template-columns: 1.5fr .8fr;

            margin: 28px 0 30px;

            border-bottom: 1px solid var(--line);

            padding-bottom: 30px;
        }


        .intro h2 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 27px;

            font-weight: 500;

            max-width: 610px;

            line-height: 1.3;
        }


        .intro h2 em {
            color: var(--terracotta);

            font-style: normal;
        }


        .intro-text {
            color: var(--muted);

            font-size: 12px;

            line-height: 1.8;

            max-width: 390px;

            justify-self: end;
        }


        /* =========================================
           SUCCESS
        ========================================= */

        .success {
            background: var(--soft-green);

            border: 1px solid #d5dac8;

            color: var(--olive);

            padding: 13px 16px;

            font-size: 11px;

            margin-bottom: 25px;
        }


        /* =========================================
           TOOLBAR
        ========================================= */

        .toolbar {
            display: flex;

            justify-content: space-between;

            align-items: center;

            border-top: 1px solid var(--ink);

            border-bottom: 1px solid var(--line);

            padding: 14px 0;

            margin-bottom: 25px;
        }


        .toolbar-left {
            color: var(--muted);

            font-size: 10px;
        }


        .toolbar-left strong {
            color: var(--ink);

            font-size: 12px;
        }


        .add-btn {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            background: var(--brown);

            color: white;

            padding: 10px 14px;

            font-size: 10px;

            transition: .2s;
        }


        .add-btn:hover {
            background: var(--terracotta);
        }


        /* =========================================
           RECIPE GRID
        ========================================= */

        .recipe-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 18px;
        }


        .recipe-card {
            background: var(--white);

            border: 1px solid var(--line);

            transition: .2s ease;
        }


        .recipe-card:hover {
            transform: translateY(-3px);

            border-color: #c5b7a5;
        }


        .recipe-image-wrap {
            position: relative;
        }


        .recipe-image {
            width: 100%;

            height: 185px;

            object-fit: cover;

            display: block;
        }


        .no-image {
            width: 100%;

            height: 185px;

            background: #e9e3d9;

            color: #91887d;

            display: flex;

            align-items: center;

            justify-content: center;

            font-family: "Playfair Display", Georgia, serif;

            font-size: 13px;
        }


        .recipe-number {
            position: absolute;

            top: 12px;

            left: 12px;

            background: var(--brown);

            color: white;

            padding: 5px 8px;

            font-size: 9px;

            font-weight: 700;
        }


        .recipe-body {
            padding: 16px;
        }


        .recipe-title {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 18px;

            line-height: 1.3;

            font-weight: 500;

            min-height: 47px;
        }


        .recipe-user {
            color: var(--muted);

            font-size: 9px;

            margin-top: 8px;

            padding-bottom: 13px;

            border-bottom: 1px solid var(--line);
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

            font-size: 9px;

            font-weight: 700;

            border: 1px solid var(--line);

            background: transparent;

            cursor: pointer;

            transition: .2s;
        }


        .btn-view {
            color: var(--brown);

            border-color: #cdbeb0;
        }


        .btn-view:hover {
            background: var(--brown);

            color: white;

            border-color: var(--brown);
        }


        .btn-edit {
            color: var(--olive);

            border-color: #c8cfba;
        }


        .btn-edit:hover {
            background: var(--olive);

            color: white;

            border-color: var(--olive);
        }


        .delete-form {
            grid-column: span 2;
        }


        .btn-delete {
            width: 100%;

            color: #9b3d2d;

            border-color: #d8bdb4;
        }


        .btn-delete:hover {
            background: #9b3d2d;

            color: white;

            border-color: #9b3d2d;
        }


        /* =========================================
           EMPTY
        ========================================= */

        .empty {
            border: 1px dashed #cfc6b9;

            padding: 55px 20px;

            text-align: center;

            color: var(--muted);

            font-size: 11px;
        }


        .empty-icon {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 30px;

            color: var(--brown);

            margin-bottom: 12px;
        }


        .empty h3 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 21px;

            color: var(--ink);

            margin-bottom: 7px;
        }


        .empty p {
            font-size: 10px;

            margin-bottom: 15px;
        }


        .empty a {
            display: inline-block;

            color: var(--brown);

            border-bottom: 1px solid var(--brown);

            padding-bottom: 3px;

            font-size: 10px;
        }


        /* =========================================
           PAGINATION
        ========================================= */

        .pagination {
            margin-top: 30px;
        }


        .pagination nav {
            display: flex;

            justify-content: center;
        }


        .pagination svg {
            width: 15px;
            height: 15px;
        }


        .pagination > nav > div:first-child {
            display: none;
        }


        .pagination > nav > div:last-child {
            display: flex;

            gap: 4px;
        }


        .pagination a,
        .pagination span {
            min-width: 32px;

            height: 32px;

            padding: 0 9px;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            border: 1px solid var(--line);

            background: var(--white);

            color: var(--muted);

            font-size: 10px;
        }


        .pagination a:hover {
            color: var(--brown);

            border-color: var(--brown);
        }


        .pagination span[aria-current="page"] {
            background: var(--brown);

            color: white;

            border-color: var(--brown);
        }


        /* =========================================
           FOOTER
        ========================================= */

        footer {
            border-top: 1px solid var(--line);

            margin-top: 50px;

            padding-top: 18px;

            color: var(--muted);

            font-size: 9px;

            display: flex;

            justify-content: space-between;
        }


        /* =========================================
           RESPONSIVE
        ========================================= */

        @media (max-width: 1100px) {

            .page {
                grid-template-columns: 200px 1fr;
            }

            .main {
                padding: 30px;
            }

            .recipe-grid {
                grid-template-columns: repeat(2, 1fr);
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


            .intro {
                grid-template-columns: 1fr;

                gap: 18px;
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


            .recipe-grid {
                grid-template-columns: 1fr;
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


        <a href="{{ route('admin.dashboard') }}" class="brand">

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

                <span class="nav-icon">⌂</span>

                <span>Dashboard</span>

            </a>


            <a
                href="{{ route('admin.recipes.index') }}"
                class="active"
            >

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


        </nav>


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
                <em>ResepKu</em>
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

                resep dalam koleksi.

            </div>


            <a
                href="{{ route('recipes.create') }}"
                class="add-btn"
            >

                <span>+</span>

                Tambah Resep

            </a>


        </div>



        {{-- RECIPE LIST --}}

        @if($recipes->count() > 0)


            <div class="recipe-grid">


                @foreach($recipes as $index => $recipe)


                    <article class="recipe-card">


                        {{-- IMAGE --}}

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

                                {{ str_pad($recipes->firstItem() + $index, 2, '0', STR_PAD_LEFT) }}

                            </div>


                        </div>



                        {{-- BODY --}}

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


                                {{-- LIHAT --}}

                                <a
                                    href="{{ route('admin.recipes.show', $recipe) }}"
                                    class="btn btn-view"
                                >
                                    Lihat
                                </a>


                                {{-- EDIT --}}

                                <a
                                    href="{{ route('admin.recipes.edit', $recipe) }}"
                                    class="btn btn-edit"
                                >
                                    Edit
                                </a>


                                {{-- DELETE --}}

                                <form
                                    method="POST"
                                    action="{{ route('admin.recipes.destroy', $recipe) }}"
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



            {{-- PAGINATION --}}

            @if($recipes->hasPages())

                <div class="pagination">

                    {{ $recipes->links() }}

                </div>

            @endif


        @else


            {{-- EMPTY --}}

            <div class="empty">


                <div class="empty-icon">
                    ResepKu
                </div>


                <h3>
                    Belum ada resep
                </h3>


                <p>
                    Belum ada resep yang tersimpan di database.
                </p>


                <a href="{{ route('recipes.create') }}">
                    + Tambahkan resep pertama
                </a>


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