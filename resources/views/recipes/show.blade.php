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

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f6f6f4;
            color: #292929;
        }

        a {
            text-decoration: none;
        }

        button {
            font-family: inherit;
        }

        .layout {
            min-height: 100vh;
        }


        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sidebar {
            position: fixed;

            left: 0;
            top: 0;
            bottom: 0;

            width: 240px;

            background: #ffffff;

            border-right: 1px solid #e3e3e3;

            padding: 28px 18px;

            z-index: 50;

            display: flex;

            flex-direction: column;
        }

        .brand {
            padding: 0 14px;

            margin-bottom: 42px;
        }

        .brand a {
            color: #e85d04;

            font-size: 25px;

            font-weight: 700;
        }

        .brand small {
            display: block;

            color: #999;

            font-size: 11px;

            margin-top: 5px;
        }

        .menu-label {
            color: #999;

            font-size: 10px;

            font-weight: 600;

            letter-spacing: .8px;

            text-transform: uppercase;

            margin: 0 14px 10px;
        }

        .menu {
            display: flex;

            flex-direction: column;

            gap: 3px;
        }

        .menu a {
            display: flex;

            align-items: center;

            gap: 11px;

            padding: 12px 14px;

            color: #606060;

            border-radius: 7px;

            font-size: 13px;

            transition: .2s;

            min-height: 40px;
        }

        .menu a:hover {
            background: #f7f7f7;

            color: #e85d04;
        }

        .menu a.active {
            background: #fff1e8;

            color: #e85d04;

            font-weight: 600;
        }

        .menu-icon {
            width: 20px;

            min-width: 20px;

            text-align: center;

            font-size: 16px;

            line-height: 1;
        }


        /* =====================================================
           SIDEBAR BOTTOM
        ===================================================== */

        .sidebar-bottom {
            margin-top: auto;

            padding-top: 18px;

            border-top: 1px solid #eeeeee;
        }

        .profile-box {
            display: flex;

            align-items: center;

            gap: 10px;

            padding: 8px 10px;

            margin-bottom: 8px;
        }

        .avatar {
            width: 37px;

            height: 37px;

            background: #e85d04;

            color: #ffffff;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 13px;

            font-weight: 600;

            flex-shrink: 0;
        }

        .profile-info {
            min-width: 0;
        }

        .profile-name {
            font-size: 12px;

            font-weight: 600;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }

        .profile-role {
            color: #999;

            font-size: 10px;

            margin-top: 3px;
        }

        .logout-button {
            width: 100%;

            border: none;

            background: #fff1f2;

            color: #be123c;

            padding: 10px;

            border-radius: 7px;

            cursor: pointer;

            font-size: 12px;

            text-align: left;

            transition: .2s;
        }

        .logout-button:hover {
            background: #ffe4e6;
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main {
            margin-left: 240px;

            min-height: 100vh;
        }


        /* =====================================================
           TOPBAR
        ===================================================== */

        .topbar {
            height: 72px;

            background: #ffffff;

            border-bottom: 1px solid #e3e3e3;

            padding: 0 34px;

            display: flex;

            align-items: center;

            justify-content: space-between;
        }

        .page-name {
            font-size: 18px;

            font-weight: 600;
        }

        .user-area {
            display: flex;

            align-items: center;

            gap: 11px;
        }

        .user-info {
            text-align: right;
        }

        .user-name {
            display: block;

            font-size: 13px;

            color: #444;
        }

        .user-role {
            display: block;

            color: #999;

            font-size: 10px;

            margin-top: 2px;
        }


        /* =====================================================
           CONTENT
        ===================================================== */

        .content {
            padding: 30px 34px 50px;

            max-width: 1250px;
        }


        /* =====================================================
           BACK
        ===================================================== */

        .back-link {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            color: #777;

            font-size: 12px;

            margin-bottom: 20px;
        }

        .back-link:hover {
            color: #e85d04;
        }


        /* =====================================================
           SUCCESS
        ===================================================== */

        .success {
            background: #edf8f0;

            border: 1px solid #cce8d2;

            color: #26733b;

            border-radius: 6px;

            padding: 12px 15px;

            font-size: 12px;

            margin-bottom: 20px;
        }


        /* =====================================================
           DETAIL
        ===================================================== */

        .recipe-detail {
            background: #ffffff;

            border: 1px solid #e3e3e3;

            border-radius: 10px;

            overflow: hidden;
        }


        /* =====================================================
           IMAGE
        ===================================================== */

        .recipe-cover {
            width: 100%;

            height: 390px;

            background: #eeeeee;

            overflow: hidden;
        }

        .recipe-cover img {
            width: 100%;

            height: 100%;

            object-fit: cover;

            display: block;
        }

        .no-image {
            width: 100%;

            height: 100%;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #999;

            font-size: 13px;
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .recipe-header {
            padding: 28px 30px 24px;

            border-bottom: 1px solid #eeeeee;
        }

        .recipe-category {
            display: inline-block;

            background: #fff1e8;

            color: #e85d04;

            border-radius: 20px;

            padding: 6px 11px;

            font-size: 10px;

            font-weight: 600;

            margin-bottom: 12px;
        }

        .recipe-title {
            font-size: 28px;

            line-height: 1.25;

            font-weight: 600;

            color: #292929;

            margin-bottom: 10px;

            overflow-wrap: anywhere;
        }

        .recipe-description {
            color: #777;

            font-size: 13px;

            line-height: 1.7;

            margin-bottom: 18px;
        }


        /* =====================================================
           AUTHOR
        ===================================================== */

        .author {
            display: flex;

            align-items: center;

            gap: 10px;
        }

        .author-avatar {
            width: 34px;

            height: 34px;

            border-radius: 50%;

            background: #f1f1f1;

            color: #666;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 12px;

            font-weight: 600;
        }

        .author-name {
            font-size: 12px;

            color: #444;

            font-weight: 600;
        }

        .author-date {
            font-size: 10px;

            color: #999;

            margin-top: 3px;
        }


        /* =====================================================
           BODY
        ===================================================== */

        .recipe-body {
            display: grid;

            grid-template-columns: 320px minmax(0, 1fr);

            gap: 35px;

            padding: 30px;
        }

        .section-title {
            font-size: 17px;

            font-weight: 600;

            margin-bottom: 15px;

            color: #292929;
        }

        .ingredients-box {
            background: #fafafa;

            border: 1px solid #eeeeee;

            border-radius: 8px;

            padding: 18px;
        }

        .ingredients {
            color: #555;

            font-size: 13px;

            line-height: 1.8;

            white-space: pre-line;

            overflow-wrap: anywhere;
        }

        .steps-box {
            color: #555;

            font-size: 13px;

            line-height: 1.9;

            white-space: pre-line;

            overflow-wrap: anywhere;
        }


        /* =====================================================
           INFO
        ===================================================== */

        .info-wrapper {
            padding: 0 30px 25px;
        }

        .recipe-info {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 12px;
        }

        .info-item {
            border: 1px solid #eeeeee;

            background: #ffffff;

            border-radius: 7px;

            padding: 14px;
        }

        .info-label {
            color: #999;

            font-size: 10px;

            margin-bottom: 5px;
        }

        .info-value {
            color: #444;

            font-size: 12px;

            font-weight: 600;
        }


        /* =====================================================
           ACTION
        ===================================================== */

        .recipe-actions {
            display: flex;

            align-items: center;

            gap: 8px;

            padding: 22px 30px;

            border-top: 1px solid #eeeeee;

            background: #fcfcfc;

            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 9px 14px;

            border-radius: 5px;

            font-size: 11px;

            font-weight: 600;

            border: none;

            cursor: pointer;
        }

        .btn-back {
            background: #f1f1f1;

            color: #555;
        }

        .btn-back:hover {
            background: #e8e8e8;
        }

        .btn-edit {
            background: #fff1e8;

            color: #e85d04;
        }

        .btn-edit:hover {
            background: #ffe6d5;
        }

        .btn-delete {
            background: #fff0f0;

            color: #c62828;
        }

        .btn-delete:hover {
            background: #ffe4e4;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 950px) {

            .recipe-body {
                grid-template-columns: 1fr;
            }

            .recipe-info {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 750px) {

            .sidebar {
                position: relative;

                width: 100%;

                height: auto;

                border-right: none;

                border-bottom: 1px solid #e3e3e3;
            }

            .main {
                margin-left: 0;
            }

            .topbar {
                padding: 0 18px;
            }

            .content {
                padding: 22px 18px;
            }

            .recipe-cover {
                height: 260px;
            }

            .recipe-header {
                padding: 22px;
            }

            .recipe-title {
                font-size: 23px;
            }

            .recipe-body {
                padding: 22px;

                gap: 25px;
            }

            .info-wrapper {
                padding: 0 22px 22px;
            }

            .recipe-actions {
                padding: 18px 22px;
            }

            .recipe-info {
                grid-template-columns: 1fr;
            }
        }

    </style>

</head>


<body>

<div class="layout">


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <x-role-sidebar active="recipes" />


    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="main">


        <!-- TOPBAR -->

        <header class="topbar">

            <div class="page-name">

                Detail Resep

            </div>


            <div class="user-area">

                <div class="user-info">

                    <span class="user-name">

                        {{ auth()->user()->name }}

                    </span>

                    <span class="user-role">

                        {{ ucfirst(auth()->user()->role) }}

                    </span>

                </div>


                <div class="avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>

            </div>

        </header>


        <!-- CONTENT -->

        <section class="content">


            <!-- KEMBALI -->

            <a
                href="{{ auth()->user()->role === 'admin'
                    ? route('admin.recipes.index')
                    : route('recipes.my') }}"
                class="back-link"
            >
                ← Kembali ke Resep Saya
            </a>


            <!-- SUCCESS -->

            @if(session('success'))

                <div class="success">

                    {{ session('success') }}

                </div>

            @endif


            <!-- DETAIL -->

            <article class="recipe-detail">


                <!-- =================================================
                     FOTO RESEP
                ================================================== -->

                <div class="recipe-cover">


                    @if($recipe->imageUrl())

                        <img
                            src="{{ $recipe->imageUrl() }}"
                            alt="{{ $recipe->title }}"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >

                        <div
                            class="no-image"
                            style="display:none;"
                        >
                            Gambar tidak tersedia
                        </div>


                    @else

                        <div class="no-image">

                            Tidak ada gambar resep

                        </div>

                    @endif


                </div>


                <!-- =================================================
                     HEADER RESEP
                ================================================== -->

                <div class="recipe-header">


                    <span class="recipe-category">

                        RESEP MASAKAN

                    </span>


                    <h1 class="recipe-title">

                        {{ $recipe->title }}

                    </h1>


                    <p class="recipe-description">

                        Resep masakan yang dibagikan di ResepKu.
                        Ikuti bahan dan langkah memasak di bawah ini.

                    </p>


                    <!-- PEMBUAT -->

                    <div class="author">


                        <div class="author-avatar">

                            @if($recipe->user)

                                {{ strtoupper(substr($recipe->user->name, 0, 1)) }}

                            @else

                                ?

                            @endif

                        </div>


                        <div>

                            <div class="author-name">

                                {{ $recipe->user->name ?? 'Pengguna' }}

                            </div>


                            <div class="author-date">

                                Dibuat
                                {{ $recipe->created_at?->format('d M Y') ?? '-' }}

                            </div>

                        </div>

                    </div>

                </div>


                <!-- =================================================
                     BAHAN DAN LANGKAH
                ================================================== -->

                <div class="recipe-body">


                    <!-- BAHAN -->

                    <div>

                        <h2 class="section-title">

                            Bahan-bahan

                        </h2>


                        <div class="ingredients-box">

                            <div class="ingredients">

                                {{ $recipe->ingredients ?? 'Belum ada bahan yang ditambahkan.' }}

                            </div>

                        </div>

                    </div>


                    <!-- LANGKAH -->

                    <div>

                        <h2 class="section-title">

                            Langkah-langkah

                        </h2>


                        <div class="steps-box">

                            {{ $recipe->steps ?? 'Belum ada langkah yang ditambahkan.' }}

                        </div>

                    </div>

                </div>


                <!-- =================================================
                     INFO RESEP
                ================================================== -->

                <div class="info-wrapper">

                    <div class="recipe-info">


                        <div class="info-item">

                            <div class="info-label">
                                Dibuat oleh
                            </div>

                            <div class="info-value">

                                {{ $recipe->user->name ?? 'Pengguna' }}

                            </div>

                        </div>


                        <div class="info-item">

                            <div class="info-label">
                                Tanggal dibuat
                            </div>

                            <div class="info-value">

                                {{ $recipe->created_at?->format('d M Y') ?? '-' }}

                            </div>

                        </div>


                        <div class="info-item">

                            <div class="info-label">
                                Terakhir diperbarui
                            </div>

                            <div class="info-value">

                                {{ $recipe->updated_at?->format('d M Y') ?? '-' }}

                            </div>

                        </div>


                    </div>

                </div>


                <!-- =================================================
                     ACTION
                ================================================== -->

                <div class="recipe-actions">


                    <!-- KEMBALI -->

                    <a
                        href="{{ auth()->user()->role === 'admin'
                            ? route('admin.recipes.index')
                            : route('recipes.my') }}"
                        class="btn btn-back"
                    >
                        ← Kembali
                    </a>


                    @if(auth()->user()->role === 'admin' || $recipe->user_id == auth()->id())


                        <!-- EDIT -->

                        <a
                            href="{{ auth()->user()->role === 'admin'
                                ? route('admin.recipes.edit', $recipe)
                                : route('recipes.edit', $recipe->slug) }}"
                            class="btn btn-edit"
                        >
                            Edit Resep
                        </a>


                        <!-- HAPUS -->

                        <form
                            action="{{ auth()->user()->role === 'admin'
                                ? route('admin.recipes.destroy', $recipe)
                                : route('recipes.destroy', $recipe->slug) }}"
                            method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus resep ini?')"
                            style="margin:0;"
                        >

                            @csrf

                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-delete"
                            >
                                Hapus Resep
                            </button>

                        </form>

                    @endif


                </div>

            </article>


        </section>


    </main>


</div>

</body>

</html>
