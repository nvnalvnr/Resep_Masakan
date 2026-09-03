<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Resep | ResepKu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600&display=swap"
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
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        html {
            scroll-behavior: smooth;
        }


        body {
            font-family: "DM Sans", Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
            font-size: 14px;
        }


        a {
            text-decoration: none;
            color: inherit;
        }


        button,
        input,
        textarea {
            font-family: inherit;
        }


        /* =====================================================
           LAYOUT
        ====================================================== */

        .page {
            min-height: 100vh;

            display: grid;

            grid-template-columns: 240px minmax(0, 1fr);
        }


        /* =====================================================
           SIDEBAR
        ====================================================== */

        .sidebar {
            background: var(--surface-soft);

            border-right: 1px solid var(--border);

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

            padding: 5px 7px 31px;

            border-bottom: 1px solid var(--border);
        }


        .brand-mark {
            width: 40px;
            height: 40px;

            border-radius: 50%;

            background: var(--brown);

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

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


        .brand-sub {
            display: block;

            color: var(--muted);

            font-size: 10px;

            text-transform: uppercase;

            letter-spacing: 1.5px;

            margin-top: 5px;
        }


        .menu-title {
            color: #968d82;

            font-size: 10px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1.6px;

            margin: 28px 9px 11px;
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

            padding: 12px 10px;

            color: var(--muted);

            font-size: 13px;

            border-left: 2px solid transparent;

            transition:
                background .2s ease,
                color .2s ease,
                border-color .2s ease;
        }


        .menu a:hover {
            color: var(--brown);

            background: #f1eae0;
        }


        .menu a.active {
            color: var(--brown);

            background: var(--soft-brown);

            border-left-color: var(--brown);

            font-weight: 700;
        }


        .menu-icon {
            width: 19px;

            text-align: center;

            font-size: 15px;

            flex-shrink: 0;
        }


        /* =====================================================
           SIDEBAR BOTTOM
        ====================================================== */

        .sidebar-bottom {
            margin-top: auto;

            padding-top: 19px;

            border-top: 1px solid var(--border);
        }


        .user-mini {
            display: flex;

            align-items: center;

            gap: 10px;

            margin-bottom: 14px;
        }


        .avatar {
            width: 38px;
            height: 38px;

            border-radius: 50%;

            background: var(--soft-brown);

            color: var(--brown);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 13px;

            font-weight: 700;

            flex-shrink: 0;
        }


        .user-mini-info {
            min-width: 0;
        }


        .user-mini-info strong {
            display: block;

            font-size: 12px;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }


        .user-mini-info span {
            display: block;

            color: var(--muted);

            font-size: 10px;

            margin-top: 3px;
        }


        .logout-button {
            width: 100%;

            background: transparent;

            color: var(--muted);

            border: 1px solid var(--border);

            padding: 10px;

            cursor: pointer;

            font-size: 11px;

            text-align: left;

            transition: .2s ease;
        }


        .logout-button:hover {
            color: #9b3d2d;

            border-color: #cdb1a7;

            background: var(--soft-red);
        }


        /* =====================================================
           MAIN
        ====================================================== */

        .main {
            min-width: 0;

            padding: 38px 48px 50px;
        }


        /* =====================================================
           HEADER
        ====================================================== */

        .topbar {
            display: flex;

            align-items: flex-start;

            justify-content: space-between;

            padding-bottom: 26px;

            border-bottom: 1px solid var(--border);
        }


        .eyebrow {
            color: var(--terracotta);

            font-size: 10px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 2px;

            margin-bottom: 9px;
        }


        .topbar h1 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 36px;

            font-weight: 500;

            line-height: 1.15;
        }


        .topbar p {
            color: var(--muted);

            font-size: 13px;

            margin-top: 9px;

            line-height: 1.6;
        }


        .date {
            color: var(--muted);

            font-size: 11px;

            border-bottom: 1px solid var(--brown);

            padding-bottom: 6px;

            white-space: nowrap;
        }


        /* =====================================================
           INTRO
        ====================================================== */

        .intro {
            display: grid;

            grid-template-columns: 1.4fr .8fr;

            gap: 30px;

            margin: 28px 0 29px;

            border-bottom: 1px solid var(--border);

            padding-bottom: 29px;
        }


        .intro h2 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 27px;

            font-weight: 500;

            line-height: 1.3;

            max-width: 620px;
        }


        .intro h2 span {
            color: var(--terracotta);
        }


        .intro-copy {
            color: var(--muted);

            font-size: 13px;

            line-height: 1.8;

            max-width: 380px;

            justify-self: end;
        }


        /* =====================================================
           BACK
        ====================================================== */

        .back-link {
            display: inline-block;

            color: var(--brown);

            font-size: 11px;

            font-weight: 700;

            padding-bottom: 3px;

            border-bottom: 1px solid var(--brown);

            margin-bottom: 18px;
        }


        .back-link:hover {
            color: var(--terracotta);

            border-color: var(--terracotta);
        }


        /* =====================================================
           ALERTS
        ====================================================== */

        .alert {
            padding: 12px 14px;

            margin-bottom: 18px;

            font-size: 11px;

            line-height: 1.6;
        }


        .alert-success {
            color: var(--olive);

            background: var(--soft-green);

            border-left: 2px solid var(--olive);
        }


        .alert-error {
            color: #8f382b;

            background: var(--soft-red);

            border-left: 2px solid #9b3d2d;
        }


        .alert-error strong {
            display: block;

            margin-bottom: 6px;

            font-size: 12px;
        }


        .alert-error ul {
            padding-left: 18px;

            line-height: 1.7;
        }


        /* =====================================================
           RECIPE SUMMARY
        ====================================================== */

        .recipe-summary {
            display: grid;

            grid-template-columns: 145px minmax(0, 1fr);

            align-items: center;

            gap: 17px;

            border-top: 1px solid var(--text);

            border-bottom: 1px solid var(--border);

            padding: 17px 0;

            margin-bottom: 28px;
        }


        .summary-image,
        .summary-no-image {
            width: 145px;

            height: 105px;

            object-fit: cover;

            border: 1px solid var(--border);

            display: block;
        }


        .summary-no-image {
            background: #e9e2d7;

            color: #8d8379;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 11px;
        }


        .summary-label {
            color: var(--terracotta);

            font-size: 10px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1.3px;

            margin-bottom: 7px;
        }


        .summary-title {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 27px;

            font-weight: 500;

            line-height: 1.2;

            word-break: break-word;
        }


        .summary-author {
            color: var(--muted);

            font-size: 11px;

            margin-top: 8px;
        }


        .summary-author strong {
            color: var(--brown);
        }


        /* =====================================================
           FORM
        ====================================================== */

        .form-wrapper {
            max-width: 920px;
        }


        .form-head {
            display: flex;

            align-items: baseline;

            justify-content: space-between;

            gap: 20px;

            margin-bottom: 18px;
        }


        .form-head h3 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 23px;

            font-weight: 500;
        }


        .form-head span {
            color: var(--muted);

            font-size: 11px;
        }


        .form-card {
            background: var(--surface);

            border: 1px solid var(--border);

            padding: 27px;
        }


        .form-group {
            margin-bottom: 24px;
        }


        .form-group:last-child {
            margin-bottom: 0;
        }


        label {
            display: block;

            color: var(--text);

            font-size: 12px;

            font-weight: 700;

            margin-bottom: 8px;
        }


        .help-text {
            color: var(--muted);

            font-size: 11px;

            line-height: 1.6;

            margin-bottom: 9px;
        }


        input[type="text"],
        textarea {
            width: 100%;

            border: 1px solid var(--border);

            background: #fffefa;

            color: var(--text);

            outline: none;

            font-size: 13px;

            padding: 12px 13px;

            transition: .2s ease;
        }


        input[type="text"] {
            height: 44px;
        }


        textarea {
            min-height: 170px;

            resize: vertical;

            line-height: 1.75;
        }


        input[type="text"]:focus,
        textarea:focus {
            border-color: var(--brown);

            background: #fffdf9;
        }


        input::placeholder,
        textarea::placeholder {
            color: #a29a91;
        }


        .field-error {
            display: block;

            color: #9b3d2d;

            font-size: 10px;

            margin-top: 6px;
        }


        /* =====================================================
           CURRENT IMAGE
        ====================================================== */

        .current-image {
            margin-bottom: 14px;

            padding-bottom: 15px;

            border-bottom: 1px solid var(--border);
        }


        .current-label {
            color: var(--muted);

            text-transform: uppercase;

            letter-spacing: 1px;

            font-size: 10px;

            margin-bottom: 8px;
        }


        .current-image img {
            width: 240px;

            height: 160px;

            object-fit: cover;

            display: block;

            border: 1px solid var(--border);
        }


        .current-note {
            color: var(--muted);

            font-size: 10px;

            margin-top: 7px;

            line-height: 1.6;
        }


        /* =====================================================
           IMAGE INPUT
        ====================================================== */

        .image-upload {
            border: 1px dashed #c9bcae;

            background: var(--surface-soft);

            padding: 16px;
        }


        .image-upload input[type="file"] {
            width: 100%;

            color: var(--muted);

            font-size: 12px;

            cursor: pointer;
        }


        .image-upload input[type="file"]::file-selector-button {
            background: var(--brown);

            color: white;

            border: none;

            padding: 9px 12px;

            margin-right: 9px;

            font-family: inherit;

            font-size: 11px;

            cursor: pointer;
        }


        .image-note {
            color: var(--muted);

            font-size: 10px;

            line-height: 1.6;

            margin-top: 9px;
        }


        .image-preview {
            display: none;

            margin-top: 15px;

            padding-top: 15px;

            border-top: 1px solid var(--border);
        }


        .preview-label {
            color: var(--muted);

            font-size: 10px;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 8px;
        }


        .image-preview img {
            width: 240px;

            height: 160px;

            object-fit: cover;

            display: block;

            border: 1px solid var(--border);
        }


        /* =====================================================
           FOOTER BUTTONS
        ====================================================== */

        .form-footer {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            border-top: 1px solid var(--border);

            padding-top: 20px;

            margin-top: 7px;
        }


        .form-note {
            color: var(--muted);

            font-size: 10px;

            line-height: 1.6;
        }


        .form-actions {
            display: flex;

            gap: 8px;
        }


        .btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 10px 15px;

            font-size: 11px;

            font-weight: 700;

            border: 1px solid var(--border);

            transition: .2s ease;
        }


        .btn-cancel {
            background: transparent;

            color: var(--muted);
        }


        .btn-cancel:hover {
            background: var(--soft-brown);

            color: var(--brown);
        }


        .btn-submit {
            background: var(--brown);

            color: white;

            border-color: var(--brown);

            cursor: pointer;
        }


        .btn-submit:hover {
            background: var(--terracotta);

            border-color: var(--terracotta);
        }


        /* =====================================================
           FOOTER
        ====================================================== */

        .footer {
            border-top: 1px solid var(--border);

            margin-top: 50px;

            padding-top: 18px;

            color: var(--muted);

            font-size: 11px;

            display: flex;

            justify-content: space-between;

            gap: 20px;
        }


        .footer strong {
            color: var(--brown);
        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 950px) {

            .page {
                grid-template-columns: 210px minmax(0, 1fr);
            }


            .main {
                padding: 32px;
            }


            .intro {
                grid-template-columns: 1fr;
            }


            .intro-copy {
                justify-self: start;

                max-width: 520px;
            }

        }


        @media (max-width: 800px) {

            .page {
                display: block;
            }


            .sidebar {
                position: relative;

                width: 100%;

                min-height: auto;

                height: auto;

                padding: 18px 20px;

                border-right: none;

                border-bottom: 1px solid var(--border);
            }


            .brand {
                padding-bottom: 16px;

                border-bottom: none;
            }


            .menu-title {
                display: none;
            }


            .menu {
                flex-direction: row;

                overflow-x: auto;

                gap: 3px;

                margin-top: 10px;

                padding-bottom: 2px;
            }


            .menu a {
                white-space: nowrap;

                border-left: none;

                border-bottom: 2px solid transparent;

                padding: 10px 12px;
            }


            .menu a.active {
                border-left: none;

                border-bottom-color: var(--brown);
            }


            .sidebar-bottom {
                display: none;
            }


            .main {
                padding: 28px 20px 45px;
            }

        }


        @media (max-width: 600px) {

            .main {
                padding: 25px 17px 35px;
            }


            .topbar {
                display: block;
            }


            .topbar h1 {
                font-size: 30px;
            }


            .topbar p {
                font-size: 12px;
            }


            .date {
                display: inline-block;

                margin-top: 15px;
            }


            .intro {
                margin-top: 22px;

                gap: 15px;
            }


            .intro h2 {
                font-size: 23px;
            }


            .intro-copy {
                font-size: 12px;
            }


            .recipe-summary {
                grid-template-columns: 1fr;

                gap: 14px;
            }


            .summary-image,
            .summary-no-image {
                width: 100%;

                height: 210px;
            }


            .summary-title {
                font-size: 25px;
            }


            .form-card {
                padding: 19px;
            }


            .form-head {
                align-items: flex-start;

                flex-direction: column;

                gap: 5px;
            }


            .form-head h3 {
                font-size: 22px;
            }


            .form-footer {
                display: block;
            }


            .form-note {
                display: block;

                margin-bottom: 14px;
            }


            .form-actions {
                width: 100%;
            }


            .btn {
                flex: 1;

                text-align: center;
            }


            .current-image img,
            .image-preview img {
                width: 100%;

                height: 210px;
            }


            .footer {
                display: block;

                line-height: 1.8;
            }


            .footer span {
                display: block;
            }

        }


        @media (max-width: 380px) {

            .main {
                padding-left: 15px;

                padding-right: 15px;
            }


            .form-card {
                padding: 16px;
            }


            .summary-title {
                font-size: 23px;
            }


            .btn {
                font-size: 10px;

                padding-left: 10px;

                padding-right: 10px;
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
            href="{{ route('user.dashboard') }}"
            class="brand"
        >

            <div class="brand-mark">
                R
            </div>


            <div>

                <div class="brand-name">
                    ResepKu
                </div>


                <span class="brand-sub">
                    Culinary Journal
                </span>

            </div>

        </a>


        <div class="menu-title">
            Menu Utama
        </div>


        <nav class="menu">


            <a href="{{ route('user.dashboard') }}">

                <span class="menu-icon">
                    ⌂
                </span>

                Dashboard

            </a>


            <a
                href="{{ route('recipes.my') }}"
                class="active"
            >

                <span class="menu-icon">
                    ≡
                </span>

                Resep Saya

            </a>


            <a href="{{ route('recipes.create') }}">

                <span class="menu-icon">
                    +
                </span>

                Tambah Resep

            </a>


            <a href="{{ route('user.favorites') }}">

                <span class="menu-icon">
                    ♡
                </span>

                Resep Tersimpan

            </a>


            <a href="{{ route('profile.edit') }}">

                <span class="menu-icon">
                    ○
                </span>

                Profil

            </a>


            <a href="{{ route('recipes.index') }}">

                <span class="menu-icon">
                    ↗
                </span>

                Lihat Website

            </a>


        </nav>


        <div class="sidebar-bottom">


            <div class="user-mini">


                <div class="avatar">

                    {{ strtoupper(
                        substr(
                            auth()->user()->name,
                            0,
                            1
                        )
                    ) }}

                </div>


                <div class="user-mini-info">


                    <strong>
                        {{ auth()->user()->name }}
                    </strong>


                    <span>
                        Pengguna
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
                    class="logout-button"
                >

                    🚪 &nbsp; Keluar

                </button>


            </form>


        </div>


    </aside>



    {{-- =====================================================
         MAIN
    ====================================================== --}}

    <main class="main">


        {{-- HEADER --}}

        <header class="topbar">


            <div>


                <div class="eyebrow">
                    ResepKu / Resep Saya / Edit
                </div>


                <h1>
                    Edit Resep
                </h1>


                <p>
                    Perbarui resep yang sudah kamu buat.
                </p>


            </div>


            <div class="date">

                {{ now()->translatedFormat('l, d F Y') }}

            </div>


        </header>



        {{-- INTRO --}}

        <section class="intro">


            <h2>

                Rapikan kembali resep
                <span>{{ $recipe->title }}</span>.

            </h2>


            <p class="intro-copy">

                Kamu dapat mengubah nama resep, bahan-bahan,
                langkah memasak, maupun mengganti foto.
                Perubahan akan langsung tersimpan ke koleksimu.

            </p>


        </section>



        {{-- BACK --}}

        <a
            href="{{ route(
                'recipes.show',
                $recipe->slug
            ) }}"
            class="back-link"
        >

            ← Kembali ke resep

        </a>



        {{-- SUCCESS --}}

        @if(session('success'))

            <div class="alert alert-success">

                ✓
                {{ session('success') }}

            </div>

        @endif



        {{-- ERROR --}}

        @if($errors->any())

            <div class="alert alert-error">


                <strong>
                    Periksa kembali data yang dimasukkan.
                </strong>


                <ul>

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>


            </div>

        @endif



        {{-- =================================================
             RECIPE SUMMARY
        ================================================== --}}

        <div class="recipe-summary">


            @if($recipe->image)

                <img
                    src="{{ $recipe->imageUrl() }}"
                    alt="{{ $recipe->title }}"
                    class="summary-image"
                >

            @else

                <div class="summary-no-image">
                    Tidak ada foto
                </div>

            @endif


            <div>


                <div class="summary-label">
                    Resep yang sedang diedit
                </div>


                <div class="summary-title">
                    {{ $recipe->title }}
                </div>


                <div class="summary-author">

                    Dibuat oleh

                    <strong>
                        {{ auth()->user()->name }}
                    </strong>

                </div>


            </div>


        </div>



        {{-- =================================================
             FORM
        ================================================== --}}

        <div class="form-wrapper">


            <div class="form-head">


                <h3>
                    Informasi Resep
                </h3>


                <span>
                    * Wajib diisi
                </span>


            </div>



            <div class="form-card">


                <form
                    action="{{ route(
                        'recipes.update',
                        $recipe->slug
                    ) }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf

                    @method('PUT')



                    {{-- NAMA RESEP --}}

                    <div class="form-group">


                        <label for="title">
                            Nama Resep *
                        </label>


                        <input
                            type="text"
                            id="title"
                            name="title"
                            value="{{ old(
                                'title',
                                $recipe->title
                            ) }}"
                            placeholder="Masukkan nama resep"
                            required
                        >


                        @error('title')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>



                    {{-- BAHAN --}}

                    <div class="form-group">


                        <label for="ingredients">
                            Bahan-bahan *
                        </label>


                        <div class="help-text">

                            Tulis bahan dan takaran.
                            Gunakan satu baris untuk setiap bahan.

                        </div>


                        <textarea
                            id="ingredients"
                            name="ingredients"
                            placeholder="Contoh:
500 gram kentang
1 buah wortel
2 butir telur"
                            required
                        >{{ old(
                            'ingredients',
                            $recipe->ingredients
                        ) }}</textarea>


                        @error('ingredients')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>



                    {{-- LANGKAH --}}

                    <div class="form-group">


                        <label for="steps">
                            Langkah-langkah *
                        </label>


                        <div class="help-text">

                            Jelaskan proses memasak secara berurutan.

                        </div>


                        <textarea
                            id="steps"
                            name="steps"
                            placeholder="Contoh:
1. Siapkan semua bahan.
2. Rebus bahan hingga matang.
3. Campurkan semua bahan."
                            required
                        >{{ old(
                            'steps',
                            $recipe->steps
                        ) }}</textarea>


                        @error('steps')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>



                    {{-- FOTO SAAT INI --}}

                    <div class="form-group">


                        <label>
                            Foto Saat Ini
                        </label>


                        @if($recipe->image)

                            <div class="current-image">


                                <div class="current-label">
                                    Foto yang digunakan
                                </div>


                                <img
                                    src="{{ $recipe->imageUrl() }}"
                                    alt="{{ $recipe->title }}"
                                >


                                <div class="current-note">

                                    Foto ini akan tetap digunakan
                                    jika kamu tidak memilih foto baru.

                                </div>


                            </div>

                        @else

                            <div class="image-note">

                                Resep ini belum memiliki foto.

                            </div>

                        @endif


                    </div>



                    {{-- FOTO BARU --}}

                    <div class="form-group">


                        <label for="image">
                            Ganti Foto
                        </label>


                        <div class="help-text">

                            Pilih foto baru hanya jika ingin mengganti
                            foto yang sekarang.

                        </div>


                        <div class="image-upload">


                            <input
                                type="file"
                                id="image"
                                name="image"
                                accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                            >


                            <div class="image-note">

                                JPG, JPEG, PNG, atau WEBP.
                                Maksimal 2 MB.

                            </div>


                            {{-- PREVIEW --}}

                            <div
                                class="image-preview"
                                id="imagePreview"
                            >


                                <div class="preview-label">
                                    Preview foto baru
                                </div>


                                <img
                                    id="previewImage"
                                    src=""
                                    alt="Preview foto baru"
                                >


                            </div>


                        </div>


                        @error('image')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>



                    {{-- FOOTER FORM --}}

                    <div class="form-footer">


                        <div class="form-note">

                            Perubahan akan disimpan
                            ke koleksi resep kamu.

                        </div>


                        <div class="form-actions">


                            <a
                                href="{{ route(
                                    'recipes.show',
                                    $recipe->slug
                                ) }}"
                                class="btn btn-cancel"
                            >
                                Batal
                            </a>


                            <button
                                type="submit"
                                class="btn btn-submit"
                            >
                                Simpan Perubahan →
                            </button>


                        </div>


                    </div>


                </form>


            </div>


        </div>



        {{-- FOOTER --}}

        <footer class="footer">


            <span>
                © {{ date('Y') }} <strong>ResepKu</strong>
            </span>


            <span>
                Culinary Journal · Resep Saya
            </span>


        </footer>


    </main>


</div>



<script>

    const imageInput =
        document.getElementById('image');

    const imagePreview =
        document.getElementById('imagePreview');

    const previewImage =
        document.getElementById('previewImage');


    if (imageInput) {

        imageInput.addEventListener(
            'change',
            function () {

                const file =
                    this.files[0];


                if (!file) {

                    imagePreview.style.display =
                        'none';

                    previewImage.src = '';

                    return;

                }


                if (!file.type.startsWith('image/')) {

                    imagePreview.style.display =
                        'none';

                    previewImage.src = '';

                    return;

                }


                const reader =
                    new FileReader();


                reader.onload =
                    function (event) {

                        previewImage.src =
                            event.target.result;

                        imagePreview.style.display =
                            'block';

                    };


                reader.readAsDataURL(file);

            }
        );

    }

</script>


</body>

</html>