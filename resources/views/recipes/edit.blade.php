<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Resep - ResepKu</title>

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

            transition: 0.2s;
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

            position: relative;

            z-index: 1;
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

            transition: 0.2s;
        }


        .back-button:hover {
            background: #fff7ed;

            color: #ea580c;

            border-color: #fed7aa;
        }


        /* =========================================
           FORM CARD
        ========================================= */

        .form-card {
            background: white;

            border: 1px solid #eee8e1;

            border-radius: 17px;

            overflow: hidden;
        }


        /* =========================================
           FORM HEADER
        ========================================= */

        .form-header {
            background: linear-gradient(
                120deg,
                #ffedd5,
                #fef3c7,
                #ecfccb
            );

            padding: 25px 30px;

            display: flex;

            align-items: center;

            justify-content: space-between;
        }


        .form-header h2 {
            font-size: 21px;

            margin-bottom: 7px;
        }


        .form-header p {
            font-size: 12px;

            color: #78716c;

            line-height: 1.5;
        }


        .form-header-icon {
            font-size: 55px;
        }


        /* =========================================
           FORM BODY
        ========================================= */

        .form-body {
            padding: 30px;
        }


        .form-section {
            background: #fafaf9;

            border: 1px solid #eee8e1;

            border-radius: 14px;

            padding: 22px;

            margin-bottom: 20px;
        }


        .section-title {
            display: flex;

            align-items: center;

            gap: 9px;

            font-size: 15px;

            margin-bottom: 20px;

            padding-bottom: 12px;

            border-bottom: 1px solid #eee8e1;
        }


        /* =========================================
           FORM GROUP
        ========================================= */

        .form-group {
            margin-bottom: 19px;
        }


        .form-group:last-child {
            margin-bottom: 0;
        }


        .form-label {
            display: block;

            font-size: 12px;

            font-weight: bold;

            color: #44403c;

            margin-bottom: 8px;
        }


        .required {
            color: #ea580c;
        }


        .form-input,
        .form-textarea {
            width: 100%;

            border: 1px solid #e7e2dc;

            background: white;

            border-radius: 10px;

            padding: 12px 14px;

            font-family: Arial, Helvetica, sans-serif;

            font-size: 13px;

            color: #292524;

            outline: none;

            transition: 0.2s;
        }


        .form-input {
            height: 45px;
        }


        .form-textarea {
            min-height: 160px;

            resize: vertical;

            line-height: 1.7;
        }


        .form-input:focus,
        .form-textarea:focus {
            border-color: #fb923c;

            box-shadow: 0 0 0 3px rgba(251, 146, 60, 0.12);
        }


        .form-help {
            margin-top: 6px;

            font-size: 10px;

            color: #a8a29e;
        }


        /* =========================================
           ERROR
        ========================================= */

        .error-box {
            background: #fff1f2;

            border: 1px solid #fecdd3;

            color: #be123c;

            padding: 14px 16px;

            border-radius: 10px;

            font-size: 12px;

            margin-bottom: 20px;
        }


        .error-box strong {
            display: block;

            margin-bottom: 7px;
        }


        .error-box ul {
            padding-left: 18px;

            line-height: 1.7;
        }


        .field-error {
            color: #be123c;

            font-size: 10px;

            margin-top: 5px;
        }


        /* =========================================
           CURRENT IMAGE
        ========================================= */

        .current-image-box {
            margin-top: 12px;

            background: white;

            border: 1px solid #eee8e1;

            border-radius: 11px;

            padding: 10px;
        }


        .current-image {
            width: 100%;

            max-height: 250px;

            object-fit: cover;

            display: block;

            border-radius: 8px;
        }


        .image-caption {
            font-size: 10px;

            color: #a8a29e;

            margin-top: 8px;

            text-align: center;
        }


        /* =========================================
           FORM ACTIONS
        ========================================= */

        .form-actions {
            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 10px;

            padding-top: 5px;
        }


        .actions-right {
            display: flex;

            gap: 10px;
        }


        .button {
            border: none;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            padding: 11px 18px;

            border-radius: 9px;

            font-size: 12px;

            font-weight: bold;

            cursor: pointer;

            transition: 0.2s;
        }


        .cancel-button {
            background: #f5f5f4;

            color: #57534e;

            border: 1px solid #e7e5e4;
        }


        .cancel-button:hover {
            background: #e7e5e4;
        }


        .save-button {
            background: #ea580c;

            color: white;

            box-shadow: 0 5px 12px rgba(234, 88, 12, 0.18);
        }


        .save-button:hover {
            background: #c2410c;

            transform: translateY(-1px);
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


            .form-header {
                padding: 22px;
            }


            .form-header-icon {
                font-size: 42px;
            }


            .form-body {
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


            .form-header-icon {
                display: none;
            }


            .form-actions {
                flex-direction: column-reverse;

                align-items: stretch;
            }


            .actions-right {
                width: 100%;
            }


            .actions-right .button {
                flex: 1;
            }


            .form-actions > .button {
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


            <a
                href="{{ route('admin.recipes.index') }}"
                class="active"
            >

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


            <a href="{{ route('recipes.index') }}">

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
                    Edit Resep ✏️
                </h1>

                <p>
                    Perbarui informasi resep yang sudah tersimpan.
                </p>

            </div>


            <div class="date-box">

                📅
                {{ now()->format('d M Y') }}

            </div>


        </div>



        <!-- BACK -->

        <a
            href="{{ route('recipes.show', $recipe) }}"
            class="back-button"
        >

            ←
            Kembali ke Detail Resep

        </a>



        <!-- =========================================
             FORM CARD
        ========================================== -->

        <div class="form-card">


            <!-- HEADER -->

            <div class="form-header">


                <div>

                    <h2>
                        ✏️ Edit "{{ $recipe->title }}"
                    </h2>

                    <p>
                        Silakan ubah informasi resep sesuai kebutuhan.
                    </p>

                </div>


                <div class="form-header-icon">
                    👨‍🍳
                </div>


            </div>



            <!-- FORM BODY -->

            <div class="form-body">


                {{-- ERROR VALIDATION --}}

                @if ($errors->any())

                    <div class="error-box">

                        <strong>
                            ⚠️ Terdapat kesalahan:
                        </strong>

                        <ul>

                            @foreach ($errors->all() as $error)

                                <li>
                                    {{ $error }}
                                </li>

                            @endforeach

                        </ul>

                    </div>

                @endif



                <form
                    method="POST"
                    action="{{ route('recipes.update', $recipe) }}"
                >

                    @csrf

                    @method('PUT')



                    <!-- =====================================
                         INFORMASI RESEP
                    ====================================== -->

                    <div class="form-section">


                        <h3 class="section-title">

                            🍲
                            Informasi Resep

                        </h3>


                        <!-- NAMA -->

                        <div class="form-group">

                            <label
                                for="title"
                                class="form-label"
                            >

                                Nama Resep
                                <span class="required">*</span>

                            </label>


                            <input
                                type="text"
                                id="title"
                                name="title"
                                class="form-input"
                                value="{{ old('title', $recipe->title) }}"
                                placeholder="Contoh: Nasi Goreng Spesial"
                                required
                            >


                            @error('title')

                                <div class="field-error">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        <!-- GAMBAR -->

                        <div class="form-group">

                            <label
                                for="image"
                                class="form-label"
                            >

                                URL Gambar

                            </label>


                            <input
                                type="text"
                                id="image"
                                name="image"
                                class="form-input"
                                value="{{ old('image', $recipe->image) }}"
                                placeholder="https://contoh.com/gambar.jpg"
                            >


                            <div class="form-help">

                                Gunakan URL gambar langsung dari internet.

                            </div>


                            @error('image')

                                <div class="field-error">
                                    {{ $message }}
                                </div>

                            @enderror


                            @if ($recipe->image)

                                <div class="current-image-box">

                                    <img
                                        src="{{ $recipe->imageUrl() }}"
                                        alt="{{ $recipe->title }}"
                                        class="current-image"
                                    >

                                    <div class="image-caption">
                                        Gambar resep saat ini
                                    </div>

                                </div>

                            @endif

                        </div>


                    </div>



                    <!-- =====================================
                         BAHAN & LANGKAH
                    ====================================== -->

                    <div class="form-section">


                        <h3 class="section-title">

                            🥕
                            Bahan & Cara Memasak

                        </h3>


                        <!-- BAHAN -->

                        <div class="form-group">

                            <label
                                for="ingredients"
                                class="form-label"
                            >

                                Bahan-bahan
                                <span class="required">*</span>

                            </label>


                            <textarea
                                id="ingredients"
                                name="ingredients"
                                class="form-textarea"
                                placeholder="Contoh:

2 piring nasi putih
2 butir telur
3 siung bawang putih
2 sdm kecap manis"
                                required
                            >{{ old('ingredients', $recipe->ingredients) }}</textarea>


                            <div class="form-help">

                                Masukkan setiap bahan pada baris baru agar lebih mudah dibaca.

                            </div>


                            @error('ingredients')

                                <div class="field-error">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>



                        <!-- LANGKAH -->

                        <div class="form-group">

                            <label
                                for="steps"
                                class="form-label"
                            >

                                Langkah-langkah
                                <span class="required">*</span>

                            </label>


                            <textarea
                                id="steps"
                                name="steps"
                                class="form-textarea"
                                placeholder="Contoh:

1. Panaskan minyak.
2. Tumis bawang putih hingga harum.
3. Masukkan telur lalu orak-arik.
4. Masukkan nasi dan kecap.
5. Aduk hingga matang."
                                required
                            >{{ old('steps', $recipe->steps) }}</textarea>


                            <div class="form-help">

                                Tuliskan langkah memasak secara berurutan.

                            </div>


                            @error('steps')

                                <div class="field-error">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                    </div>



                    <!-- =====================================
                         ACTION
                    ====================================== -->

                    <div class="form-actions">


                        <a
                            href="{{ route('recipes.show', $recipe) }}"
                            class="button cancel-button"
                        >

                            ←
                            Batal

                        </a>


                        <div class="actions-right">


                            <a
                                href="{{ route('recipes.index') }}"
                                class="button cancel-button"
                            >

                                🍲
                                Daftar Resep

                            </a>


                            <button
                                type="submit"
                                class="button save-button"
                            >

                                💾
                                Simpan Perubahan

                            </button>


                        </div>


                    </div>


                </form>


            </div>


        </div>



        <!-- FOOTER -->

        <footer>

            © {{ date('Y') }} ResepKu.
            Admin Panel.

        </footer>


    </main>


</div>


</body>

</html>