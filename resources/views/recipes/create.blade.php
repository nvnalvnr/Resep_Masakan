<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Resep | ResepKu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

        :root {
            --cream: #f5f0e7;
            --cream-light: #fbf9f4;
            --card: #fffdf9;

            --brown: #693728;
            --brown-dark: #4d261c;
            --terracotta: #ad6040;

            --text: #2e2723;
            --muted: #7d746c;

            --border: #ded6ca;
            --border-light: #ebe4da;

            --soft-brown: #f1e5dc;
            --soft-green: #e9ede3;
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
            font-family: "DM Sans", sans-serif;
            background: var(--cream);
            color: var(--text);
            font-size: 14px;
        }


        a {
            color: inherit;
            text-decoration: none;
        }


        button,
        input,
        textarea {
            font-family: inherit;
        }


        /* =====================================================
           PAGE
        ===================================================== */

        .page {
            min-height: 100vh;

            display: grid;

            grid-template-columns: 245px minmax(0, 1fr);
        }


        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sidebar {
            position: sticky;

            top: 0;

            height: 100vh;

            background: var(--cream-light);

            border-right: 1px solid var(--border);

            padding: 27px 20px;

            display: flex;

            flex-direction: column;
        }


        .brand {
            display: flex;

            align-items: center;

            gap: 11px;

            padding: 5px 8px 27px;

            border-bottom: 1px solid var(--border);
        }


        .brand-mark {
            width: 41px;
            height: 41px;

            display: flex;

            align-items: center;
            justify-content: center;

            background: var(--brown);

            color: white;

            border-radius: 50%;

            font-family: Georgia, serif;

            font-size: 18px;

            flex-shrink: 0;
        }


        .brand-name {
            font-family: "Playfair Display", serif;

            font-size: 22px;

            font-weight: 600;

            line-height: 1;
        }


        .brand-small {
            display: block;

            margin-top: 5px;

            color: var(--muted);

            font-size: 9px;

            letter-spacing: 1.7px;

            text-transform: uppercase;
        }


        .nav-label {
            margin: 28px 9px 10px;

            color: #988f86;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 1.5px;

            text-transform: uppercase;
        }


        .nav {
            display: flex;

            flex-direction: column;

            gap: 4px;
        }


        .nav a {
            display: flex;

            align-items: center;

            gap: 12px;

            padding: 12px 11px;

            color: var(--muted);

            font-size: 13px;

            border-radius: 5px;

            transition: .2s ease;
        }


        .nav a:hover {
            color: var(--brown);

            background: #f3ece3;
        }


        .nav a.active {
            color: var(--brown);

            background: var(--soft-brown);

            font-weight: 700;
        }


        .nav-icon {
            width: 19px;

            text-align: center;

            font-size: 16px;

            flex-shrink: 0;
        }


        /* =====================================================
           SIDEBAR USER
        ===================================================== */

        .sidebar-bottom {
            margin-top: auto;
        }


        .admin-user {
            display: flex;

            align-items: center;

            gap: 10px;

            padding-top: 18px;

            border-top: 1px solid var(--border);
        }


        .avatar {
            width: 39px;
            height: 39px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: var(--soft-brown);

            color: var(--brown);

            font-size: 13px;

            font-weight: 700;

            flex-shrink: 0;
        }


        .admin-user strong {
            display: block;

            max-width: 140px;

            overflow: hidden;

            text-overflow: ellipsis;

            white-space: nowrap;

            font-size: 12px;
        }


        .admin-user span {
            display: block;

            margin-top: 3px;

            color: var(--muted);

            font-size: 10px;
        }


        .logout {
            width: 100%;

            margin-top: 14px;

            padding: 10px;

            border: 1px solid var(--border);

            background: transparent;

            color: var(--muted);

            font-size: 11px;

            cursor: pointer;

            transition: .2s ease;
        }


        .logout:hover {
            background: #faf0ec;

            color: #9b3d2d;

            border-color: #d7b8ac;
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main {
            min-width: 0;

            padding: 42px 55px 55px;
        }


        .content {
            width: 100%;

            max-width: 1040px;

            margin: 0 auto;
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .top {
            display: flex;

            justify-content: space-between;

            align-items: flex-end;

            padding-bottom: 25px;

            border-bottom: 1px solid var(--border);
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
            font-family: "Playfair Display", serif;

            font-size: 38px;

            font-weight: 600;

            line-height: 1.15;
        }


        .top p {
            margin-top: 9px;

            color: var(--muted);

            font-size: 13px;

            line-height: 1.6;
        }


        .date {
            padding-bottom: 7px;

            color: var(--muted);

            border-bottom: 1px solid var(--brown);

            font-size: 11px;

            white-space: nowrap;
        }


        /* =====================================================
           INTRO
        ===================================================== */

        .intro {
            display: grid;

            grid-template-columns: 1.3fr .7fr;

            gap: 45px;

            padding: 32px 0 29px;

            border-bottom: 1px solid var(--border);
        }


        .intro-title {
            font-family: "Playfair Display", serif;

            font-size: 28px;

            font-weight: 500;

            line-height: 1.35;
        }


        .intro-title em {
            color: var(--terracotta);

            font-style: italic;
        }


        .intro-text {
            align-self: center;

            color: var(--muted);

            font-size: 13px;

            line-height: 1.8;
        }


        /* =====================================================
           FORM AREA
        ===================================================== */

        .form-area {
            padding-top: 31px;
        }


        .form-heading {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 16px;
        }


        .form-heading h2 {
            font-family: "Playfair Display", serif;

            font-size: 24px;

            font-weight: 600;
        }


        .required {
            color: var(--muted);

            font-size: 11px;
        }


        /* =====================================================
           FORM CARD
        ===================================================== */

        .form-card {
            background: var(--card);

            border: 1px solid var(--border);

            border-radius: 8px;

            overflow: hidden;
        }


        .form-section {
            padding: 27px 30px;

            border-bottom: 1px solid var(--border-light);
        }


        .form-section:last-child {
            border-bottom: none;
        }


        .section-title {
            display: flex;

            align-items: flex-start;

            gap: 13px;

            margin-bottom: 20px;
        }


        .section-number {
            width: 30px;
            height: 30px;

            display: flex;

            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            background: var(--soft-brown);

            color: var(--brown);

            border-radius: 50%;

            font-size: 11px;

            font-weight: 700;
        }


        .section-title h3 {
            font-size: 14px;

            font-weight: 700;
        }


        .section-title p {
            margin-top: 4px;

            color: var(--muted);

            font-size: 11px;

            line-height: 1.6;
        }


        /* =====================================================
           INPUT
        ===================================================== */

        .form-group {
            margin-bottom: 24px;
        }


        .form-group:last-child {
            margin-bottom: 0;
        }


        label {
            display: block;

            margin-bottom: 8px;

            font-size: 12px;

            font-weight: 700;
        }


        .label-help {
            margin-top: -2px;

            margin-bottom: 9px;

            color: var(--muted);

            font-size: 11px;

            line-height: 1.6;
        }


        input[type="text"],
        textarea {
            width: 100%;

            border: 1px solid var(--border);

            background: #fffefa;

            color: var(--text);

            outline: none;

            transition:
                border-color .2s ease,
                box-shadow .2s ease,
                background .2s ease;
        }


        input[type="text"] {
            height: 48px;

            padding: 0 15px;

            border-radius: 5px;

            font-size: 13px;
        }


        textarea {
            min-height: 190px;

            padding: 14px 15px;

            border-radius: 5px;

            resize: vertical;

            line-height: 1.75;

            font-size: 13px;
        }


        input[type="text"]:focus,
        textarea:focus {
            border-color: var(--terracotta);

            background: white;

            box-shadow: 0 0 0 3px rgba(169, 86, 53, .08);
        }


        input::placeholder,
        textarea::placeholder {
            color: #aaa198;
        }


        /* =====================================================
           RECIPE NAME
        ===================================================== */

        .title-input {
            font-family: "Playfair Display", serif !important;

            font-size: 18px !important;

            font-weight: 500;
        }


        /* =====================================================
           TEXTAREA COUNTER / HINT
        ===================================================== */

        .textarea-bottom {
            display: flex;

            justify-content: space-between;

            margin-top: 7px;

            color: #999087;

            font-size: 10px;
        }


        /* =====================================================
           IMAGE UPLOAD
        ===================================================== */

        .upload-area {
            display: grid;

            grid-template-columns: 1fr 220px;

            gap: 20px;

            padding: 19px;

            background: #faf7f1;

            border: 1px dashed #cfc5b7;

            border-radius: 6px;
        }


        .upload-left {
            display: flex;

            flex-direction: column;

            justify-content: center;
        }


        .upload-icon {
            width: 42px;
            height: 42px;

            display: flex;

            align-items: center;
            justify-content: center;

            margin-bottom: 12px;

            background: var(--soft-brown);

            color: var(--brown);

            border-radius: 50%;

            font-size: 18px;
        }


        .upload-left strong {
            display: block;

            margin-bottom: 5px;

            font-size: 13px;
        }


        .upload-left p {
            margin-bottom: 14px;

            color: var(--muted);

            font-size: 11px;

            line-height: 1.6;
        }


        .file-input-wrapper {
            position: relative;

            width: fit-content;
        }


        .file-button {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            padding: 10px 14px;

            background: var(--brown);

            color: white;

            border-radius: 4px;

            font-size: 11px;

            font-weight: 700;

            cursor: pointer;

            transition: .2s ease;
        }


        .file-button:hover {
            background: var(--brown-dark);
        }


        #image {
            position: absolute;

            width: 1px;
            height: 1px;

            opacity: 0;
        }


        .file-name {
            margin-top: 9px;

            color: var(--muted);

            font-size: 10px;
        }


        /* =====================================================
           IMAGE PREVIEW
        ===================================================== */

        .preview-box {
            display: none;

            overflow: hidden;

            background: white;

            border: 1px solid var(--border);

            border-radius: 5px;
        }


        .preview-box img {
            width: 100%;

            height: 145px;

            display: block;

            object-fit: cover;
        }


        .preview-caption {
            padding: 8px 10px;

            color: var(--muted);

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: 1px;
        }


        /* =====================================================
           ERROR
        ===================================================== */

        .error-box {
            margin-bottom: 18px;

            padding: 15px 17px;

            background: #faf0ec;

            border: 1px solid #dec1b5;

            border-radius: 5px;
        }


        .error-box strong {
            display: block;

            margin-bottom: 7px;

            color: #8b3426;

            font-size: 12px;
        }


        .error-box ul {
            padding-left: 18px;

            color: #8b3426;

            font-size: 11px;

            line-height: 1.7;
        }


        .field-error {
            display: block;

            margin-top: 6px;

            color: #a33b2c;

            font-size: 10px;
        }


        /* =====================================================
           FORM ACTION
        ===================================================== */

        .form-actions {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            padding: 21px 30px;

            background: #faf7f1;

            border-top: 1px solid var(--border-light);
        }


        .action-note {
            color: var(--muted);

            font-size: 10px;

            line-height: 1.5;
        }


        .buttons {
            display: flex;

            align-items: center;

            gap: 9px;
        }


        .btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            min-height: 40px;

            padding: 0 17px;

            border-radius: 4px;

            font-size: 11px;

            font-weight: 700;

            cursor: pointer;

            transition: .2s ease;
        }


        .btn-cancel {
            border: 1px solid var(--border);

            background: white;

            color: var(--muted);
        }


        .btn-cancel:hover {
            color: var(--brown);

            background: #f3ece3;
        }


        .btn-submit {
            border: 1px solid var(--brown);

            background: var(--brown);

            color: white;
        }


        .btn-submit:hover {
            background: var(--brown-dark);

            border-color: var(--brown-dark);

            transform: translateY(-1px);
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            margin-top: 35px;

            padding-top: 17px;

            border-top: 1px solid var(--border);

            color: var(--muted);

            font-size: 10px;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1100px) {

            .page {
                grid-template-columns: 215px minmax(0, 1fr);
            }


            .main {
                padding: 35px;
            }


            .upload-area {
                grid-template-columns: 1fr 190px;
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

                border-bottom: 1px solid var(--border);
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

                gap: 4px;

                margin-top: 8px;

                overflow-x: auto;

                padding-bottom: 2px;
            }


            .nav a {
                flex-shrink: 0;

                white-space: nowrap;

                padding: 10px 12px;
            }


            .sidebar-bottom {
                display: none;
            }


            .intro {
                grid-template-columns: 1fr;

                gap: 15px;
            }


            .intro-text {
                max-width: 600px;
            }

        }


        @media (max-width: 650px) {

            .main {
                padding: 27px 17px 35px;
            }


            .top {
                display: block;
            }


            .top h1 {
                font-size: 31px;
            }


            .date {
                display: inline-block;

                margin-top: 15px;
            }


            .intro {
                padding: 25px 0;
            }


            .intro-title {
                font-size: 24px;
            }


            .form-area {
                padding-top: 25px;
            }


            .form-heading h2 {
                font-size: 21px;
            }


            .form-section {
                padding: 22px 18px;
            }


            .form-actions {
                display: block;

                padding: 19px 18px;
            }


            .action-note {
                margin-bottom: 14px;
            }


            .buttons {
                width: 100%;
            }


            .btn {
                flex: 1;
            }


            .upload-area {
                grid-template-columns: 1fr;
            }


            .preview-box {
                width: 100%;
            }


            .preview-box img {
                height: 200px;
            }


            footer {
                display: block;

                line-height: 1.8;
            }


            footer span {
                display: block;
            }

        }


        @media (max-width: 400px) {

            .main {
                padding-left: 14px;
                padding-right: 14px;
            }


            .top h1 {
                font-size: 28px;
            }


            .form-section {
                padding: 19px 15px;
            }


            .form-heading {
                align-items: flex-start;

                flex-direction: column;

                gap: 4px;
            }


            .form-actions {
                padding-left: 15px;
                padding-right: 15px;
            }


            .btn {
                padding-left: 10px;
                padding-right: 10px;

                font-size: 10px;
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

                    <span class="nav-icon">
                        ⌂
                    </span>

                    <span>
                        Dashboard
                    </span>

                </a>


                <a href="{{ route('admin.recipes.index') }}">

                    <span class="nav-icon">
                        ≡
                    </span>

                    <span>
                        Semua Resep
                    </span>

                </a>


                <a
                    href="{{ route('recipes.create') }}"
                    class="active"
                >

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


            @else


                <a href="{{ route('user.dashboard') }}">

                    <span class="nav-icon">
                        ⌂
                    </span>

                    <span>
                        Dashboard
                    </span>

                </a>


                <a href="{{ route('recipes.my') }}">

                    <span class="nav-icon">
                        ≡
                    </span>

                    <span>
                        Resep Saya
                    </span>

                </a>


                <a href="{{ route('user.favorites') }}">

                    <span class="nav-icon">
                        ♡
                    </span>

                    <span>
                        Resep Tersimpan
                    </span>

                </a>


                <a
                    href="{{ route('recipes.create') }}"
                    class="active"
                >

                    <span class="nav-icon">
                        +
                    </span>

                    <span>
                        Tambah Resep
                    </span>

                </a>


                <a href="{{ route('profile.edit') }}">

                    <span class="nav-icon">
                        ○
                    </span>

                    <span>
                        Profil
                    </span>

                </a>


            @endif


        </nav>


        <!-- SIDEBAR USER -->

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
                            : 'User'
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

        <div class="content">


            <!-- HEADER -->

            <header class="top">

                <div>

                    <div class="eyebrow">

                        ResepKu /
                        {{ auth()->user()->role === 'admin'
                            ? 'Admin'
                            : 'User'
                        }}

                    </div>


                    <h1>
                        Tambah Resep
                    </h1>


                    <p>
                        Buat dan bagikan resep baru ke koleksi ResepKu.
                    </p>

                </div>


                <div class="date">

                    {{ now()->translatedFormat('l, d F Y') }}

                </div>

            </header>


            <!-- INTRO -->

            <section class="intro">

                <h2 class="intro-title">

                    Ceritakan resep
                    <em>favoritmu</em>
                    di sini.

                </h2>


                <p class="intro-text">

                    Isi informasi resep dengan lengkap mulai dari nama,
                    bahan, langkah memasak, hingga foto. Semakin lengkap
                    resepnya, semakin mudah untuk dibuat kembali.

                </p>

            </section>


            <!-- FORM AREA -->

            <section class="form-area">


                <div class="form-heading">

                    <h2>
                        Informasi Resep
                    </h2>


                    <span class="required">
                        * Wajib diisi
                    </span>

                </div>


                <!-- ERROR -->

                @if ($errors->any())

                    <div class="error-box">

                        <strong>
                            Periksa kembali data yang dimasukkan.
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


                <!-- FORM CARD -->

                <div class="form-card">


                    <form
                        action="{{ route('recipes.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >

                        @csrf


                        <!-- =================================================
                             SECTION 01
                        ================================================== -->

                        <div class="form-section">


                            <div class="section-title">

                                <div class="section-number">
                                    01
                                </div>


                                <div>

                                    <h3>
                                        Nama Resep
                                    </h3>

                                    <p>
                                        Berikan nama yang singkat dan mudah dikenali.
                                    </p>

                                </div>

                            </div>


                            <div class="form-group">


                                <label for="title">
                                    Nama resep *
                                </label>


                                <input
                                    type="text"
                                    id="title"
                                    name="title"
                                    class="title-input"
                                    value="{{ old('title') }}"
                                    placeholder="Contoh: Japanese Potato Salad"
                                    required
                                >


                                @error('title')

                                    <span class="field-error">
                                        {{ $message }}
                                    </span>

                                @enderror


                            </div>


                        </div>


                        <!-- =================================================
                             SECTION 02
                        ================================================== -->

                        <div class="form-section">


                            <div class="section-title">

                                <div class="section-number">
                                    02
                                </div>


                                <div>

                                    <h3>
                                        Bahan-bahan
                                    </h3>

                                    <p>
                                        Tulis setiap bahan beserta takarannya, satu bahan per baris.
                                    </p>

                                </div>

                            </div>


                            <div class="form-group">


                                <label for="ingredients">
                                    Daftar bahan *
                                </label>


                                <textarea
                                    id="ingredients"
                                    name="ingredients"
                                    placeholder="500 gram kentang
1 buah wortel
1 buah mentimun
2 butir telur
4 sdm mayones
1 sdt cuka
1 sdt gula
½ sdt garam
¼ sdt lada hitam"
                                    required
                                >{{ old('ingredients') }}</textarea>


                                <div class="textarea-bottom">

                                    <span>
                                        Satu bahan per baris
                                    </span>

                                    <span>
                                        Gunakan takaran yang jelas
                                    </span>

                                </div>


                                @error('ingredients')

                                    <span class="field-error">
                                        {{ $message }}
                                    </span>

                                @enderror


                            </div>


                        </div>


                        <!-- =================================================
                             SECTION 03
                        ================================================== -->

                        <div class="form-section">


                            <div class="section-title">

                                <div class="section-number">
                                    03
                                </div>


                                <div>

                                    <h3>
                                        Langkah Memasak
                                    </h3>

                                    <p>
                                        Jelaskan proses memasak secara berurutan dari awal sampai selesai.
                                    </p>

                                </div>

                            </div>


                            <div class="form-group">


                                <label for="steps">
                                    Cara memasak *
                                </label>


                                <textarea
                                    id="steps"
                                    name="steps"
                                    placeholder="1. Kupas kentang lalu potong menjadi beberapa bagian.
2. Rebus kentang sampai empuk.
3. Rebus telur sampai matang.
4. Iris tipis mentimun dan peras airnya.
5. Rebus wortel sebentar sampai agak lunak.
6. Haluskan kentang secara kasar.
7. Tambahkan cuka, gula, garam, dan lada.
8. Masukkan wortel, mentimun, telur, dan bahan lainnya.
9. Tambahkan mayones lalu aduk rata.
10. Simpan di kulkas sebelum disajikan."
                                    required
                                >{{ old('steps') }}</textarea>


                                <div class="textarea-bottom">

                                    <span>
                                        Gunakan nomor untuk setiap langkah
                                    </span>

                                    <span>
                                        Jelaskan dengan urutan yang jelas
                                    </span>

                                </div>


                                @error('steps')

                                    <span class="field-error">
                                        {{ $message }}
                                    </span>

                                @enderror


                            </div>


                        </div>


                        <!-- =================================================
                             SECTION 04
                        ================================================== -->

                        <div class="form-section">


                            <div class="section-title">

                                <div class="section-number">
                                    04
                                </div>


                                <div>

                                    <h3>
                                        Foto Resep
                                    </h3>

                                    <p>
                                        Tambahkan foto makanan agar resep terlihat lebih menarik.
                                    </p>

                                </div>

                            </div>


                            <div class="form-group">


                                <label for="image">
                                    Foto makanan
                                </label>


                                <div class="upload-area">


                                    <div class="upload-left">


                                        <div class="upload-icon">
                                            +
                                        </div>


                                        <strong>
                                            Tambahkan foto resep
                                        </strong>


                                        <p>
                                            Pilih foto makanan dengan kualitas yang jelas.
                                            Format JPG, JPEG, PNG, atau WEBP dengan ukuran maksimal 2 MB.
                                        </p>


                                        <div class="file-input-wrapper">


                                            <label
                                                for="image"
                                                class="file-button"
                                            >
                                                Pilih Foto
                                            </label>


                                            <input
                                                type="file"
                                                id="image"
                                                name="image"
                                                accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                                            >


                                        </div>


                                        <div
                                            class="file-name"
                                            id="fileName"
                                        >
                                            Belum ada foto dipilih
                                        </div>


                                    </div>


                                    <div
                                        class="preview-box"
                                        id="imagePreview"
                                    >

                                        <img
                                            id="previewImage"
                                            src=""
                                            alt="Preview foto resep"
                                        >


                                        <div class="preview-caption">
                                            Preview foto
                                        </div>

                                    </div>


                                </div>


                                @error('image')

                                    <span class="field-error">
                                        {{ $message }}
                                    </span>

                                @enderror


                            </div>


                        </div>


                        <!-- =================================================
                             ACTION
                        ================================================== -->

                        <div class="form-actions">


                            <div class="action-note">

                                Pastikan informasi resep sudah benar<br>
                                sebelum menyimpannya.

                            </div>


                            <div class="buttons">


                                @if(auth()->user()->role === 'admin')

                                    <a
                                        href="{{ route('admin.dashboard') }}"
                                        class="btn btn-cancel"
                                    >
                                        Batal
                                    </a>

                                @else

                                    <a
                                        href="{{ route('user.dashboard') }}"
                                        class="btn btn-cancel"
                                    >
                                        Batal
                                    </a>

                                @endif


                                <button
                                    type="submit"
                                    class="btn btn-submit"
                                >
                                    Simpan Resep →
                                </button>


                            </div>


                        </div>


                    </form>


                </div>


            </section>


            <!-- FOOTER -->

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


        </div>

    </main>


</div>


<!-- =====================================================
     IMAGE PREVIEW SCRIPT
====================================================== -->

<script>

    const imageInput = document.getElementById('image');

    const imagePreview = document.getElementById('imagePreview');

    const previewImage = document.getElementById('previewImage');

    const fileName = document.getElementById('fileName');


    if (imageInput) {

        imageInput.addEventListener('change', function () {

            const file = this.files[0];


            if (!file) {

                imagePreview.style.display = 'none';

                previewImage.src = '';

                fileName.textContent = 'Belum ada foto dipilih';

                return;

            }


            fileName.textContent = file.name;


            if (!file.type.startsWith('image/')) {

                imagePreview.style.display = 'none';

                previewImage.src = '';

                return;

            }


            const reader = new FileReader();


            reader.onload = function (event) {

                previewImage.src = event.target.result;

                imagePreview.style.display = 'block';

            };


            reader.readAsDataURL(file);

        });

    }

</script>


</body>

</html>