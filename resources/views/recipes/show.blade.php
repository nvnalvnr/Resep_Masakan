<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        {{ $recipe->title }} - ResepKu
    </title>

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

        .layout {
            min-height: 100vh;
        }

        /* SIDEBAR */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;

            width: 245px;

            background: #ffffff;

            border-right: 1px solid #eee8e1;

            padding: 25px 18px;

            z-index: 10;
        }

        .brand {
            display: flex;
            align-items: center;

            gap: 10px;

            padding: 8px 10px 30px;
        }

        .brand-icon {
            width: 42px;
            height: 42px;

            background: #ffedd5;

            border-radius: 12px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 21px;
        }

        .brand-text h2 {
            font-size: 17px;
        }

        .brand-text span {
            display: block;

            color: #a8a29e;

            font-size: 10px;

            margin-top: 3px;
        }

        .menu-title {
            color: #a8a29e;

            font-size: 10px;

            font-weight: bold;

            letter-spacing: .8px;

            margin: 5px 10px 10px;

            text-transform: uppercase;
        }

        .menu {
            display: flex;
            flex-direction: column;

            gap: 5px;
        }

        .menu a {
            display: flex;
            align-items: center;

            gap: 11px;

            padding: 12px 13px;

            border-radius: 9px;

            color: #57534e;

            font-size: 13px;

            transition: .2s;
        }

        .menu a:hover {
            background: #fff7ed;
            color: #ea580c;
        }

        .menu a.active {
            background: #ffedd5;
            color: #ea580c;

            font-weight: 600;
        }

        .menu-icon {
            width: 22px;

            text-align: center;

            font-size: 16px;
        }

        /* SIDEBAR BOTTOM */

        .sidebar-bottom {
            position: absolute;

            left: 18px;
            right: 18px;

            bottom: 20px;
        }

        .profile-mini {
            display: flex;
            align-items: center;

            gap: 10px;

            padding: 11px;

            margin-bottom: 9px;

            background: #fafaf9;

            border: 1px solid #eee8e1;

            border-radius: 10px;
        }

        .avatar {
            width: 37px;
            height: 37px;

            flex-shrink: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: #fed7aa;

            color: #9a3412;

            font-size: 13px;

            font-weight: bold;
        }

        .profile-info {
            min-width: 0;
        }

        .profile-info strong {
            display: block;

            font-size: 12px;

            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .profile-info span {
            display: block;

            color: #a8a29e;

            font-size: 10px;

            margin-top: 3px;
        }

        .logout-btn {
            width: 100%;

            border: none;

            background: #fff1f2;

            color: #be123c;

            padding: 10px;

            border-radius: 8px;

            cursor: pointer;

            font-size: 12px;
        }

        .logout-btn:hover {
            background: #ffe4e6;
        }

        /* MAIN */

        .main {
            margin-left: 245px;

            padding: 30px 35px 50px;

            min-height: 100vh;
        }

        /* TOPBAR */

        .topbar {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 22px;
        }

        .topbar h1 {
            font-size: 25px;

            margin-bottom: 5px;
        }

        .topbar p {
            color: #a8a29e;

            font-size: 12px;
        }

        .date-box {
            background: white;

            border: 1px solid #eee8e1;

            border-radius: 9px;

            padding: 10px 13px;

            color: #78716c;

            font-size: 11px;
        }

        /* BACK */

        .back-button {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            background: white;

            border: 1px solid #eee8e1;

            color: #57534e;

            padding: 9px 13px;

            border-radius: 8px;

            font-size: 12px;

            margin-bottom: 18px;
        }

        .back-button:hover {
            background: #fff7ed;

            color: #ea580c;

            border-color: #fed7aa;
        }

        /* DETAIL */

        .recipe-detail {
            background: white;

            border: 1px solid #eee8e1;

            border-radius: 14px;

            overflow: hidden;
        }

        /* HEADER */

        .recipe-header {
            padding: 28px 30px;

            background: #fff7ed;

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;
        }

        .recipe-header-content {
            min-width: 0;
        }

        .recipe-label {
            display: inline-block;

            background: white;

            color: #ea580c;

            padding: 6px 9px;

            border-radius: 6px;

            font-size: 10px;

            font-weight: bold;

            margin-bottom: 11px;
        }

        .recipe-header h2 {
            font-size: 27px;

            margin-bottom: 9px;

            word-break: break-word;
        }

        .recipe-meta {
            color: #78716c;

            font-size: 12px;

            line-height: 1.7;
        }

        .recipe-header-icon {
            font-size: 58px;

            flex-shrink: 0;
        }

        /* IMAGE */

        .recipe-image-wrapper {
            padding: 25px 30px 0;
        }

        .recipe-image {
            width: 100%;

            max-height: 430px;

            object-fit: cover;

            display: block;

            border-radius: 12px;
        }

        .no-image {
            height: 300px;

            background: #fafaf9;

            border: 1px solid #eee8e1;

            border-radius: 12px;

            display: flex;

            align-items: center;
            justify-content: center;

            color: #a8a29e;

            font-size: 13px;
        }

        /* BODY */

        .recipe-body {
            padding: 30px;
        }

        .content-grid {
            display: grid;

            grid-template-columns: 1fr 1.5fr;

            gap: 18px;
        }

        .content-card {
            background: #fafaf9;

            border: 1px solid #eee8e1;

            border-radius: 11px;

            padding: 20px;
        }

        .content-card h3 {
            font-size: 15px;

            margin-bottom: 15px;
        }

        .ingredients,
        .steps {
            color: #57534e;

            font-size: 13px;

            line-height: 1.8;

            white-space: pre-line;

            overflow-wrap: break-word;
        }

        /* ACTION */

        .recipe-actions {
            display: flex;

            align-items: center;

            gap: 8px;

            margin-top: 22px;

            padding-top: 20px;

            border-top: 1px solid #eee8e1;
        }

        .action-button {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 6px;

            border: none;

            padding: 10px 14px;

            border-radius: 8px;

            font-size: 11px;

            font-weight: 600;

            cursor: pointer;
        }

        .back-action {
            background: #ffedd5;

            color: #ea580c;
        }

        .back-action:hover {
            background: #fed7aa;
        }

        .edit-action {
            background: #eff6ff;

            color: #2563eb;
        }

        .edit-action:hover {
            background: #dbeafe;
        }

        .delete-action {
            background: #fff1f2;

            color: #be123c;
        }

        .delete-action:hover {
            background: #ffe4e6;
        }

        footer {
            text-align: center;

            padding: 25px 0 0;

            color: #a8a29e;

            font-size: 11px;
        }

        /* RESPONSIVE */

        @media (max-width: 900px) {

            .content-grid {
                grid-template-columns: 1fr;
            }

        }

        @media (max-width: 750px) {

            .sidebar {
                width: 70px;

                padding: 18px 10px;
            }

            .brand {
                justify-content: center;

                padding-bottom: 25px;
            }

            .brand-text,
            .menu-title,
            .menu a span:not(.menu-icon),
            .sidebar-bottom {
                display: none;
            }

            .menu a {
                justify-content: center;
            }

            .main {
                margin-left: 70px;

                padding: 22px 18px;
            }

            .recipe-header {
                padding: 22px;
            }

            .recipe-header h2 {
                font-size: 22px;
            }

            .recipe-header-icon {
                font-size: 43px;
            }

            .recipe-image-wrapper {
                padding: 20px 20px 0;
            }

            .recipe-body {
                padding: 20px;
            }

        }

        @media (max-width: 550px) {

            .topbar {
                display: block;
            }

            .date-box {
                display: none;
            }

            .recipe-header-icon {
                display: none;
            }

            .recipe-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .action-button {
                width: 100%;
            }

        }

    </style>

</head>


<body>

<div class="layout">

    {{-- SIDEBAR --}}

    <aside class="sidebar">

        <div class="brand">

            <div class="brand-icon">
                🍳
            </div>

            <div class="brand-text">

                <h2>
                    ResepKu
                </h2>

                <span>
                    Website Resep Masakan
                </span>

            </div>

        </div>


        <div class="menu-title">
            Menu Utama
        </div>


        <nav class="menu">

            @auth

                @if(auth()->user()->role === 'admin')

                    <a href="{{ route('admin.dashboard') }}">

                        <span class="menu-icon">
                            🏠
                        </span>

                        <span>
                            Dashboard
                        </span>

                    </a>

                    <a href="{{ route('admin.recipes.index') }}">

                        <span class="menu-icon">
                            🍲
                        </span>

                        <span>
                            Daftar Resep
                        </span>

                    </a>

                    <a href="{{ route('admin.users.index') }}">

                        <span class="menu-icon">
                            👥
                        </span>

                        <span>
                            Manajemen User
                        </span>

                    </a>

                @else

                    <a href="{{ route('user.dashboard') }}">

                        <span class="menu-icon">
                            🏠
                        </span>

                        <span>
                            Dashboard
                        </span>

                    </a>

                    <a href="{{ route('user.recipes') }}">

                        <span class="menu-icon">
                            🍲
                        </span>

                        <span>
                            Resep Saya
                        </span>

                    </a>

                    <a href="{{ route('recipes.create') }}">

                        <span class="menu-icon">
                            ＋
                        </span>

                        <span>
                            Tambah Resep
                        </span>

                    </a>

                    <a href="{{ route('profile.edit') }}">

                        <span class="menu-icon">
                            ○
                        </span>

                        <span>
                            Profil
                        </span>

                    </a>

                @endif

            @else

                <a href="{{ route('recipes.index') }}" class="active">

                    <span class="menu-icon">
                        🏠
                    </span>

                    <span>
                        Beranda
                    </span>

                </a>

                <a href="{{ route('recipes.index') }}">

                    <span class="menu-icon">
                        🍲
                    </span>

                    <span>
                        Daftar Resep
                    </span>

                </a>

            @endauth

        </nav>


        {{-- SIDEBAR USER --}}

        @auth

            <div class="sidebar-bottom">

                <div class="profile-mini">

                    <div class="avatar">

                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                    </div>

                    <div class="profile-info">

                        <strong>
                            {{ auth()->user()->name }}
                        </strong>

                        <span>
                            {{ auth()->user()->role === 'admin' ? 'Administrator' : 'User' }}
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
                        class="logout-btn"
                    >
                        🚪 Keluar
                    </button>

                </form>

            </div>

        @endauth

    </aside>


    {{-- MAIN --}}

    <main class="main">


        {{-- TOPBAR --}}

        <div class="topbar">

            <div>

                <h1>
                    Detail Resep
                </h1>

                <p>
                    Lihat informasi lengkap resep yang tersedia.
                </p>

            </div>


            <div class="date-box">

                📅
                {{ now()->format('d M Y') }}

            </div>

        </div>


        {{-- BACK --}}

        @auth

            @if(auth()->user()->role === 'admin')

                <a
                    href="{{ route('admin.recipes.index') }}"
                    class="back-button"
                >
                    ← Kembali ke Daftar Resep
                </a>

            @else

                <a
                    href="{{ route('user.recipes') }}"
                    class="back-button"
                >
                    ← Kembali ke Resep Saya
                </a>

            @endif

        @else

            <a
                href="{{ route('recipes.index') }}"
                class="back-button"
            >
                ← Kembali ke Website
            </a>

        @endauth


        {{-- DETAIL RESEP --}}

        <article class="recipe-detail">


            {{-- HEADER RESEP --}}

            <div class="recipe-header">

                <div class="recipe-header-content">

                    <span class="recipe-label">
                        🍽️ RESEP MASAKAN
                    </span>


                    <h2>
                        {{ $recipe->title }}
                    </h2>


                    <p class="recipe-meta">

                        👨‍🍳
                        Dibuat oleh

                        <strong>
                            {{ $recipe->user->name ?? 'Pengguna' }}
                        </strong>

                        &nbsp; • &nbsp;

                        📅

                        {{ $recipe->created_at?->format('d M Y') ?? '-' }}

                    </p>

                </div>


                <div class="recipe-header-icon">
                    🍜
                </div>

            </div>


            {{-- GAMBAR --}}

            <div class="recipe-image-wrapper">

                @if($recipe->image)

                    <img
                        src="{{ $recipe->imageUrl() }}"
                        alt="{{ $recipe->title }}"
                        class="recipe-image"
                    >

                @else

                    <div class="no-image">
                        🍽️ Tidak ada gambar resep
                    </div>

                @endif

            </div>


            {{-- ISI --}}

            <div class="recipe-body">

                <div class="content-grid">


                    {{-- BAHAN --}}

                    <div class="content-card">

                        <h3>
                            🥕 Bahan-bahan
                        </h3>

                        <div class="ingredients">

                            {{ $recipe->ingredients ?? 'Belum ada bahan yang ditambahkan.' }}

                        </div>

                    </div>


                    {{-- LANGKAH --}}

                    <div class="content-card">

                        <h3>
                            👨‍🍳 Langkah-langkah
                        </h3>

                        <div class="steps">

                            {{ $recipe->steps ?? 'Belum ada langkah yang ditambahkan.' }}

                        </div>

                    </div>


                </div>


                {{-- ACTION --}}

                <div class="recipe-actions">


                    @auth

                        @if(auth()->user()->role === 'admin')

                            <a
                                href="{{ route('admin.recipes.index') }}"
                                class="action-button back-action"
                            >
                                ← Daftar Resep
                            </a>

                        @else

                            <a
                                href="{{ route('user.recipes') }}"
                                class="action-button back-action"
                            >
                                ← Resep Saya
                            </a>

                        @endif


                        {{-- USER PEMILIK RESEP --}}

                        @if(auth()->id() === $recipe->user_id)

                            <a
                                href="{{ route('recipes.edit', $recipe->slug) }}"
                                class="action-button edit-action"
                            >
                                ✏️ Edit Resep
                            </a>


                            <form
                                method="POST"
                                action="{{ route('recipes.destroy', $recipe->slug) }}"
                                style="margin: 0;"
                            >

                                @csrf

                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="action-button delete-action"
                                    onclick="return confirm('Yakin ingin menghapus resep ini?')"
                                >
                                    🗑️ Hapus Resep
                                </button>

                            </form>

                        @endif


                    @else

                        <a
                            href="{{ route('recipes.index') }}"
                            class="action-button back-action"
                        >
                            ← Kembali ke Resep
                        </a>

                    @endauth

                </div>

            </div>

        </article>


        <footer>

            © {{ date('Y') }} ResepKu.
            Website Resep Masakan.

        </footer>


    </main>

</div>

</body>

</html>