<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ResepKu - Kumpulan Resep Masakan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f8f6f3;
            color: #292524;
        }

        a {
            text-decoration: none;
        }

        button,
        input {
            font-family: inherit;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            height: 70px;
            background: #fff;
            border-bottom: 1px solid #eee8e1;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 45px;

            position: sticky;
            top: 0;
            z-index: 100;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #292524;
        }

        .brand-icon {
            width: 38px;
            height: 38px;
            background: #ffedd5;
            border-radius: 10px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 20px;
        }

        .brand-text {
            font-size: 18px;
            font-weight: 700;
        }

        .brand-text span {
            color: #ea580c;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav-menu a {
            color: #57534e;
            font-size: 13px;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            color: #ea580c;
        }

        .nav-menu a.active {
            font-weight: 600;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .login-btn {
            color: #57534e;
            font-size: 13px;
            padding: 9px 12px;
        }

        .dashboard-btn {
            background: #ea580c;
            color: white;

            padding: 9px 15px;
            border-radius: 8px;

            font-size: 12px;
            font-weight: 600;
        }

        .dashboard-btn:hover {
            background: #c2410c;
        }

        .logout-btn {
            border: none;
            background: #fff1f2;
            color: #be123c;

            padding: 9px 13px;
            border-radius: 8px;

            cursor: pointer;
            font-size: 12px;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            max-width: 1200px;
            margin: auto;

            padding: 50px 30px 35px;

            display: grid;
            grid-template-columns: 1.4fr 1fr;

            gap: 35px;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 39px;
            line-height: 1.15;
            margin-bottom: 15px;
        }

        .hero-content h1 span {
            color: #ea580c;
        }

        .hero-content p {
            color: #78716c;
            font-size: 14px;
            line-height: 1.7;

            max-width: 570px;
            margin-bottom: 23px;
        }

        .hero-buttons {
            display: flex;
            gap: 10px;
        }

        .primary-btn {
            display: inline-block;

            background: #ea580c;
            color: white;

            padding: 11px 18px;
            border-radius: 8px;

            font-size: 13px;
            font-weight: 600;
        }

        .primary-btn:hover {
            background: #c2410c;
        }

        .secondary-btn {
            display: inline-block;

            background: white;
            border: 1px solid #e7e1da;

            color: #57534e;

            padding: 10px 17px;
            border-radius: 8px;

            font-size: 13px;
        }

        .secondary-btn:hover {
            background: #fff7ed;
        }

        .hero-image {
            height: 245px;
            border-radius: 17px;

            overflow: hidden;
            position: relative;

            background: #ffedd5;
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-label {
            position: absolute;

            left: 15px;
            bottom: 15px;

            background: rgba(255, 255, 255, .94);

            padding: 9px 13px;
            border-radius: 8px;

            font-size: 11px;
            color: #57534e;
        }

        /* =========================
           CONTAINER
        ========================= */

        .container {
            max-width: 1200px;
            margin: auto;

            padding: 10px 30px 60px;
        }

        /* =========================
           SECTION HEADER
        ========================= */

        .section-heading {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;

            margin-bottom: 17px;
        }

        .section-heading h2 {
            font-size: 22px;
        }

        .section-heading p {
            margin-top: 5px;
            color: #a8a29e;
            font-size: 12px;
        }

        .recipe-count {
            color: #78716c;
            font-size: 12px;
        }

        /* =========================
           SEARCH
        ========================= */

        .search-wrapper {
            background: #fff;

            border: 1px solid #eee8e1;
            border-radius: 12px;

            padding: 14px;

            margin-bottom: 25px;
        }

        .search-title {
            font-size: 13px;
            font-weight: 600;

            margin-bottom: 9px;
        }

        .search-form {
            display: flex;
            gap: 8px;
        }

        .search-box {
            flex: 1;
            position: relative;
        }

        .search-icon {
            position: absolute;

            left: 13px;
            top: 50%;

            transform: translateY(-50%);

            color: #a8a29e;
            font-size: 14px;
        }

        .search-input {
            width: 100%;
            height: 43px;

            border: 1px solid #e7e1da;
            border-radius: 8px;

            padding: 0 14px 0 38px;

            outline: none;

            font-size: 13px;
            color: #292524;
        }

        .search-input::placeholder {
            color: #aaa39d;
        }

        .search-input:focus {
            border-color: #fdba74;

            box-shadow: 0 0 0 3px #fff7ed;
        }

        .search-button {
            border: none;

            background: #292524;
            color: white;

            padding: 0 20px;

            border-radius: 8px;

            cursor: pointer;

            font-size: 12px;
            font-weight: 600;
        }

        .search-button:hover {
            background: #44403c;
        }

        .reset-button {
            display: flex;
            align-items: center;

            height: 43px;

            padding: 0 14px;

            background: #f5f5f4;
            color: #57534e;

            border-radius: 8px;

            font-size: 12px;
        }

        .reset-button:hover {
            background: #e7e5e4;
        }

        .search-result {
            margin-top: 10px;

            font-size: 11px;
            color: #a8a29e;
        }

        .search-result strong {
            color: #57534e;
        }

        /* =========================
           SUCCESS
        ========================= */

        .success-message {
            background: #f0fdf4;

            border: 1px solid #bbf7d0;
            color: #15803d;

            padding: 12px 14px;

            border-radius: 9px;

            font-size: 12px;

            margin-bottom: 20px;
        }

        /* =========================
           RECIPE GRID
        ========================= */

        .recipe-grid {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 20px;
        }

        .recipe-card {
            background: #fff;

            border: 1px solid #eee8e1;
            border-radius: 14px;

            overflow: hidden;

            transition: .2s;
        }

        .recipe-card:hover {
            transform: translateY(-3px);

            border-color: #fed7aa;

            box-shadow:
                0 8px 22px rgba(41, 37, 36, .07);
        }

        .recipe-image-wrapper {
            width: 100%;
            height: 195px;

            background: #f5f5f4;

            overflow: hidden;
        }

        .recipe-image {
            width: 100%;
            height: 100%;

            object-fit: cover;
            display: block;

            transition: .3s;
        }

        .recipe-card:hover .recipe-image {
            transform: scale(1.03);
        }

        .no-image {
            width: 100%;
            height: 100%;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #fafaf9;

            color: #a8a29e;

            font-size: 12px;
        }

        .recipe-body {
            padding: 17px;
        }

        .recipe-title {
            font-size: 16px;
            font-weight: 700;

            color: #292524;

            margin-bottom: 8px;

            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .recipe-author {
            color: #a8a29e;
            font-size: 11px;

            margin-bottom: 15px;
        }

        .recipe-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;

            padding-top: 13px;

            border-top: 1px solid #f5f5f4;
        }

        .detail-btn {
            background: #fff7ed;
            color: #ea580c;

            padding: 8px 13px;

            border-radius: 8px;

            font-size: 11px;
            font-weight: 700;
        }

        .detail-btn:hover {
            background: #ffedd5;
        }

        .manage-actions {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .edit-btn {
            color: #2563eb;
            background: #eff6ff;

            padding: 7px 9px;

            border-radius: 7px;

            font-size: 10px;
        }

        .edit-btn:hover {
            background: #dbeafe;
        }

        .delete-btn {
            border: none;

            background: #fff1f2;
            color: #be123c;

            padding: 7px 9px;

            border-radius: 7px;

            font-size: 10px;

            cursor: pointer;
        }

        .delete-btn:hover {
            background: #ffe4e6;
        }

        /* =========================
           EMPTY
        ========================= */

        .empty {
            background: #fff;

            border: 1px solid #eee8e1;
            border-radius: 14px;

            text-align: center;

            padding: 60px 20px;
        }

        .empty-icon {
            font-size: 42px;
            margin-bottom: 12px;
        }

        .empty h3 {
            font-size: 17px;
            margin-bottom: 7px;
        }

        .empty p {
            font-size: 12px;
            color: #a8a29e;
            margin-bottom: 18px;
        }

        /* =========================
           PAGINATION
        ========================= */

        .pagination {
            display: flex;
            justify-content: center;

            margin-top: 30px;
        }

        /* =========================
           FOOTER
        ========================= */

        .footer {
            background: #fff;

            border-top: 1px solid #eee8e1;

            padding: 25px;

            text-align: center;

            color: #a8a29e;

            font-size: 11px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .hero {
                grid-template-columns: 1fr;
            }

            .hero-image {
                height: 220px;
            }

            .recipe-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .nav-menu {
                display: none;
            }
        }

        @media (max-width: 600px) {

            .navbar {
                padding: 0 18px;
            }

            .brand-text {
                font-size: 15px;
            }

            .hero {
                padding: 35px 18px 25px;
            }

            .hero-content h1 {
                font-size: 29px;
            }

            .container {
                padding: 10px 18px 45px;
            }

            .recipe-grid {
                grid-template-columns: 1fr;
            }

            .search-form {
                flex-direction: column;
            }

            .search-button,
            .reset-button {
                height: 42px;
                justify-content: center;
            }

            .nav-right .login-btn {
                display: none;
            }
        }
    </style>

</head>


<body>

    {{-- =========================
         NAVBAR
    ========================= --}}

    <header class="navbar">

        <a href="{{ route('recipes.index') }}" class="brand">

            <div class="brand-icon">
                🍳
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
                Resep
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
                        Dashboard
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


    {{-- =========================
         HERO
    ========================= --}}

    <section class="hero">

        <div class="hero-content">

            <h1>
                Masak lebih mudah,
                <span>rasanya tetap enak.</span>
            </h1>

            <p>
                Temukan berbagai resep masakan sederhana,
                makanan rumahan, hingga menu favorit yang
                bisa kamu coba sendiri di rumah.
            </p>


            <div class="hero-buttons">

                <a
                    href="#resep"
                    class="primary-btn"
                >
                    Lihat Resep
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
                src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=900&q=80"
                alt="Masakan"
            >

            <div class="hero-label">
                🍴 Inspirasi masakan hari ini
            </div>

        </div>

    </section>


    {{-- =========================
         MAIN
    ========================= --}}

    <main
        class="container"
        id="resep"
    >

        <div class="section-heading">

            <div>

                <h2>
                    Kumpulan Resep
                </h2>

                <p>
                    Cari dan temukan resep yang ingin kamu coba.
                </p>

            </div>

            <span class="recipe-count">

                Total
                <strong>{{ $recipes->total() }}</strong>
                resep

            </span>

        </div>


        {{-- =========================
             SEARCH
        ========================= --}}

        <div class="search-wrapper">

            <div class="search-title">
                Cari Resep
            </div>

            <form
                action="{{ route('recipes.index') }}"
                method="GET"
                class="search-form"
            >

                <div class="search-box">

                    <span class="search-icon">
                        🔎
                    </span>

                    <input
                        type="text"
                        name="search"
                        class="search-input"
                        placeholder="Cari nama resep, misalnya ayam, mie, nasi..."
                        value="{{ request('search') }}"
                    >

                </div>


                <button
                    type="submit"
                    class="search-button"
                >
                    Cari Resep
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

                    Hasil pencarian untuk:
                    <strong>"{{ request('search') }}"</strong>

                </div>

            @endif

        </div>


        {{-- =========================
             SUCCESS
        ========================= --}}

        @if(session('success'))

            <div class="success-message">
                ✓ {{ session('success') }}
            </div>

        @endif


        {{-- =========================
             RECIPE LIST
        ========================= --}}

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
                                >

                            @else

                                <div class="no-image">
                                    🍲 Tidak ada gambar
                                </div>

                            @endif

                        </div>


                        <div class="recipe-body">

                            <h3 class="recipe-title">
                                {{ $recipe->title }}
                            </h3>


                            <div class="recipe-author">

                                👨‍🍳
                                {{ $recipe->user->name ?? 'Pengguna' }}

                            </div>


                            <div class="recipe-footer">

                                <a
                                    href="{{ route('recipes.show', $recipe->slug) }}"
                                    class="detail-btn"
                                >
                                    Lihat Resep →
                                </a>


                                <div class="manage-actions">

                                    @if(
                                        auth()->check()
                                        && auth()->id() === $recipe->user_id
                                    )

                                        <a
                                            href="{{ route('recipes.edit', $recipe->slug) }}"
                                            class="edit-btn"
                                        >
                                            Edit
                                        </a>


                                        <form
                                            action="{{ route('recipes.destroy', $recipe->slug) }}"
                                            method="POST"
                                            style="margin: 0;"
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

                                    @endif

                                </div>

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
                        Yuk tambahkan resep pertama kamu.
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


        {{-- =========================
             PAGINATION
        ========================= --}}

        @if($recipes->hasPages())

            <div class="pagination">

                {{ $recipes->appends(request()->query())->links() }}

            </div>

        @endif

    </main>


    {{-- =========================
         FOOTER
    ========================= --}}

    <footer class="footer">

        © {{ date('Y') }} ResepKu.
        Kumpulan resep masakan untuk sehari-hari.

    </footer>

</body>

</html>