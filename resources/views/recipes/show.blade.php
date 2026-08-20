<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $recipe->title }} - ResepKu</title>

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


        /* =========================================
           LAYOUT
        ========================================= */

        .layout {
            display: flex;
            min-height: 100vh;
        }


        /* =========================================
           SIDEBAR
        ========================================= */

        .sidebar {
            width: 245px;

            background: #ffffff;

            border-right: 1px solid #eee8e1;

            padding: 25px 18px;

            position: fixed;

            left: 0;
            top: 0;
            bottom: 0;

            z-index: 100;
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

            font-size: 22px;
        }


        .brand-text h2 {
            font-size: 17px;

            color: #292524;
        }


        .brand-text span {
            font-size: 11px;

            color: #a8a29e;
        }


        .menu-title {
            font-size: 10px;

            font-weight: bold;

            color: #a8a29e;

            margin: 5px 10px 10px;

            text-transform: uppercase;

            letter-spacing: 1px;
        }


        .menu {
            display: flex;

            flex-direction: column;

            gap: 6px;
        }


        .menu a {
            display: flex;

            align-items: center;

            gap: 12px;

            padding: 12px 13px;

            color: #57534e;

            border-radius: 10px;

            font-size: 13px;

            transition: 0.2s ease;
        }


        .menu a:hover {
            background: #fff7ed;

            color: #ea580c;
        }


        .menu a.active {
            background: #ffedd5;

            color: #ea580c;

            font-weight: bold;
        }


        .menu-icon {
            width: 28px;

            text-align: center;

            font-size: 17px;
        }


        /* =========================================
           SIDEBAR BOTTOM
        ========================================= */

        .sidebar-bottom {
            position: absolute;

            left: 18px;
            right: 18px;
            bottom: 20px;
        }


        .profile-mini {
            background: #fafaf9;

            border: 1px solid #eee8e1;

            border-radius: 12px;

            padding: 12px;

            display: flex;

            align-items: center;

            gap: 10px;

            margin-bottom: 10px;
        }


        .avatar {
            width: 38px;
            height: 38px;

            border-radius: 50%;

            background: #fed7aa;

            display: flex;

            align-items: center;
            justify-content: center;

            color: #9a3412;

            font-weight: bold;
        }


        .profile-mini-info {
            overflow: hidden;
        }


        .profile-mini strong {
            display: block;

            font-size: 12px;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }


        .profile-mini span {
            font-size: 10px;

            color: #a8a29e;
        }


        .logout-btn {
            width: 100%;

            border: none;

            background: #fff1f2;

            color: #be123c;

            padding: 10px;

            border-radius: 9px;

            cursor: pointer;

            font-size: 12px;
        }


        .logout-btn:hover {
            background: #ffe4e6;
        }


        /* =========================================
           MAIN
        ========================================= */

        .main {
            margin-left: 245px;

            width: calc(100% - 245px);

            padding: 30px 35px 50px;
        }


        /* =========================================
           TOPBAR
        ========================================= */

        .topbar {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 25px;
        }


        .welcome h1 {
            font-size: 26px;

            margin-bottom: 6px;
        }


        .welcome p {
            font-size: 13px;

            color: #a8a29e;
        }


        .date-box {
            background: white;

            border: 1px solid #eee8e1;

            padding: 10px 15px;

            border-radius: 10px;

            font-size: 12px;

            color: #78716c;
        }


        /* =========================================
           BACK BUTTON
        ========================================= */

        .back-button {
            display: inline-flex;

            align-items: center;

            gap: 8px;

            background: white;

            border: 1px solid #eee8e1;

            color: #57534e;

            padding: 10px 15px;

            border-radius: 10px;

            font-size: 12px;

            font-weight: bold;

            margin-bottom: 20px;

            transition: .2s;
        }


        .back-button:hover {
            background: #fff7ed;

            color: #ea580c;

            border-color: #fed7aa;
        }


        /* =========================================
           RECIPE DETAIL
        ========================================= */

        .recipe-detail {
            background: white;

            border: 1px solid #eee8e1;

            border-radius: 17px;

            overflow: hidden;
        }


        /* =========================================
           RECIPE HEADER
        ========================================= */

        .recipe-header {
            background: linear-gradient(
                120deg,
                #ffedd5,
                #fef3c7,
                #ecfccb
            );

            padding: 28px 30px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;
        }


        .recipe-header-content {
            flex: 1;
        }


        .recipe-label {
            display: inline-block;

            background: #ffffff;

            color: #ea580c;

            padding: 6px 10px;

            border-radius: 7px;

            font-size: 10px;

            font-weight: bold;

            margin-bottom: 12px;
        }


        .recipe-header h2 {
            font-size: 27px;

            margin-bottom: 9px;

            color: #292524;
        }


        .recipe-meta {
            color: #78716c;

            font-size: 12px;
        }


        .recipe-header-icon {
            font-size: 65px;
        }


        /* =========================================
           RECIPE IMAGE
        ========================================= */

        .recipe-image-wrapper {
            padding: 25px 30px 0;
        }


        .recipe-image {
            width: 100%;

            max-height: 430px;

            object-fit: cover;

            border-radius: 14px;

            display: block;
        }


        .no-image {
            height: 300px;

            background: #ffedd5;

            border-radius: 14px;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #9a3412;

            font-size: 14px;
        }


        /* =========================================
           RECIPE BODY
        ========================================= */

        .recipe-body {
            padding: 30px;
        }


        .content-grid {
            display: grid;

            grid-template-columns: 1fr 1.5fr;

            gap: 20px;
        }


        .content-card {
            background: #fafaf9;

            border: 1px solid #eee8e1;

            border-radius: 14px;

            padding: 22px;
        }


        .content-card h3 {
            font-size: 16px;

            margin-bottom: 17px;

            display: flex;

            align-items: center;

            gap: 8px;
        }


        /* =========================================
           INGREDIENTS
        ========================================= */

        .ingredients {
            white-space: pre-line;

            font-size: 13px;

            color: #57534e;

            line-height: 1.8;
        }


        /* =========================================
           STEPS
        ========================================= */

        .steps {
            white-space: pre-line;

            font-size: 13px;

            color: #57534e;

            line-height: 1.9;
        }


        /* =========================================
           ACTIONS
        ========================================= */

        .recipe-actions {
            display: flex;

            gap: 10px;

            margin-top: 25px;

            padding-top: 20px;

            border-top: 1px solid #eee8e1;
        }


        .action-button {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            padding: 10px 16px;

            border-radius: 9px;

            font-size: 12px;

            font-weight: bold;

            transition: .2s;
        }


        .back-action {
            background: #ffedd5;

            color: #ea580c;
        }


        .back-action:hover {
            background: #ea580c;

            color: white;
        }


        .edit-action {
            background: #dbeafe;

            color: #1d4ed8;
        }


        .edit-action:hover {
            background: #2563eb;

            color: white;
        }


        .delete-action {
            background: #fff1f2;

            color: #be123c;

            border: none;

            cursor: pointer;
        }


        .delete-action:hover {
            background: #ffe4e6;
        }


        /* =========================================
           FOOTER
        ========================================= */

        footer {
            text-align: center;

            padding-top: 30px;

            color: #a8a29e;

            font-size: 11px;
        }


        /* =========================================
           RESPONSIVE
        ========================================= */

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


            .brand-text,
            .menu-title,
            .menu a span:not(.menu-icon),
            .sidebar-bottom {
                display: none;
            }


            .brand {
                justify-content: center;

                padding-bottom: 25px;
            }


            .menu a {
                justify-content: center;
            }


            .main {
                margin-left: 70px;

                width: calc(100% - 70px);

                padding: 22px 18px;
            }


            .date-box {
                display: none;
            }


            .recipe-header {
                padding: 22px;

            }


            .recipe-header h2 {
                font-size: 22px;
            }


            .recipe-header-icon {
                font-size: 45px;
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


            .welcome h1 {
                font-size: 21px;
            }


            .recipe-header-icon {
                display: none;
            }


            .recipe-actions {
                flex-direction: column;
            }


            .action-button {
                width: 100%;
            }

        }

    </style>

</head>


<body>


<div class="layout">


    <!-- =========================================
         SIDEBAR
    ========================================== -->

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
                    Admin Panel
                </span>

            </div>

        </div>


        <div class="menu-title">
            Menu Utama
        </div>


        <nav class="menu">


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


            <a href="{{ route('recipes.create') }}">

                <span class="menu-icon">
                    ➕
                </span>

                <span>
                    Tambah Resep
                </span>

            </a>


            <a
                href="{{ route('recipes.index') }}"
                class="active"
            >

                <span class="menu-icon">
                    🌐
                </span>

                <span>
                    Lihat Website
                </span>

            </a>


        </nav>


        <!-- SIDEBAR BOTTOM -->

        <div class="sidebar-bottom">


            <div class="profile-mini">


                <div class="avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>


                <div class="profile-mini-info">

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
                    class="logout-btn"
                >

                    🚪 Keluar

                </button>

            </form>


        </div>


    </aside>



    <!-- =========================================
         MAIN
    ========================================== -->

    <main class="main">


        <!-- TOPBAR -->

        <div class="topbar">


            <div class="welcome">

                <h1>
                    Detail Resep 🍲
                </h1>

                <p>
                    Lihat informasi lengkap resep yang tersedia di ResepKu.
                </p>

            </div>


            <div class="date-box">

                📅
                {{ now()->format('d M Y') }}

            </div>


        </div>



        <!-- BACK -->

        <a
            href="{{ route('recipes.index') }}"
            class="back-button"
        >

            ←
            Kembali ke Website

        </a>



        <!-- =========================================
             DETAIL
        ========================================== -->

        <article class="recipe-detail">


            <!-- HEADER -->

            <div class="recipe-header">


                <div class="recipe-header-content">


                    <span class="recipe-label">
                        🍽️ RESEP MASAKAN
                    </span>


                    <h2>
                        {{ $recipe->title }}
                    </h2>


                    <p class="recipe-meta">

                        👤
                        Dibuat oleh
                        <strong>
                            {{ $recipe->user->name ?? 'User' }}
                        </strong>

                        &nbsp; • &nbsp;

                        📅
                        {{ $recipe->created_at->format('d M Y') }}

                    </p>


                </div>


                <div class="recipe-header-icon">
                    🍜
                </div>


            </div>



            <!-- IMAGE -->

            <div class="recipe-image-wrapper">


                @if ($recipe->image)

                    <img
                        src="{{ $recipe->imageUrl() }}"
                        alt="{{ $recipe->title }}"
                        class="recipe-image"
                    >

                @else

                    <div class="no-image">

                        🍽️
                        Tidak ada gambar resep

                    </div>

                @endif


            </div>



            <!-- BODY -->

            <div class="recipe-body">


                <div class="content-grid">


                    <!-- BAHAN -->

                    <div class="content-card">


                        <h3>
                            🥕 Bahan-bahan
                        </h3>


                        <div class="ingredients">

                            {{ $recipe->ingredients }}

                        </div>


                    </div>



                    <!-- LANGKAH -->

                    <div class="content-card">


                        <h3>
                            👨‍🍳 Langkah-langkah
                        </h3>


                        <div class="steps">

                            {{ $recipe->steps }}

                        </div>


                    </div>


                </div>



                <!-- ACTIONS -->

                <div class="recipe-actions">


                    <a
                        href="{{ route('recipes.index') }}"
                        class="action-button back-action"
                    >

                        ←
                        Kembali ke Daftar Resep

                    </a>


                    @can('update', $recipe)

                        <a
                            href="{{ route('recipes.edit', $recipe) }}"
                            class="action-button edit-action"
                        >

                            ✏️
                            Edit Resep

                        </a>

                    @endcan


                    @can('delete', $recipe)

                        <form
                            method="POST"
                            action="{{ route('recipes.destroy', $recipe) }}"
                            style="margin:0;"
                        >

                            @csrf

                            @method('DELETE')

                            <button
                                type="submit"
                                class="action-button delete-action"
                                onclick="return confirm('Yakin ingin menghapus resep ini?')"
                            >

                                🗑️
                                Hapus Resep

                            </button>

                        </form>

                    @endcan


                </div>


            </div>


        </article>



        <!-- FOOTER -->

        <footer>

            © {{ date('Y') }} ResepKu.
            Website Resep Masakan.

        </footer>


    </main>


</div>


</body>

</html>