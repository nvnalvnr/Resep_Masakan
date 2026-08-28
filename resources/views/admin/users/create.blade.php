<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Tambah User | ResepKu
    </title>


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

            background: var(--paper);

            color: var(--ink);

            line-height: 1.6;
        }


        a {
            color: inherit;

            text-decoration: none;
        }


        button,
        input,
        select {
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

            height: 100vh;

            padding: 30px 22px;

            position: sticky;

            top: 0;

            display: flex;

            flex-direction: column;
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

            border-radius: 50%;

            background: var(--brown);

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

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

            border-radius: 50%;

            background: var(--soft-brown);

            color: var(--brown);

            display: flex;

            align-items: center;

            justify-content: center;

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

            background: var(--soft-red);
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
           INTRO
        ====================================================== */

        .intro {
            display: grid;

            grid-template-columns: 1.5fr .8fr;

            gap: 30px;

            margin: 28px 0 30px;

            border-bottom: 1px solid var(--line);

            padding-bottom: 30px;
        }


        .intro h2 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 27px;

            font-weight: 500;

            max-width: 640px;

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


        /* =====================================================
           BACK
        ====================================================== */

        .back-link {
            display: inline-block;

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
           ERROR
        ====================================================== */

        .error-box {
            background: var(--soft-red);

            border: 1px solid #dec1b5;

            padding: 14px 16px;

            margin-bottom: 20px;
        }


        .error-box strong {
            display: block;

            color: #8b3426;

            font-size: 11px;

            margin-bottom: 7px;
        }


        .error-box ul {
            padding-left: 18px;

            color: #8b3426;

            font-size: 10px;

            line-height: 1.7;
        }


        .field-error {
            display: block;

            color: #a33b2c;

            font-size: 9px;

            margin-top: 6px;
        }


        /* =====================================================
           FORM LAYOUT
        ====================================================== */

        .content-grid {
            display: grid;

            grid-template-columns:
                minmax(0, 1.5fr)
                minmax(250px, .65fr);

            gap: 45px;

            align-items: start;
        }


        .form-heading {
            display: flex;

            justify-content: space-between;

            align-items: baseline;

            margin-bottom: 18px;
        }


        .form-heading h3 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 24px;

            font-weight: 500;
        }


        .form-note {
            color: var(--muted);

            font-size: 9px;
        }


        .form-card {
            background: var(--white);

            border: 1px solid var(--line);

            padding: 28px;
        }


        .form-group {
            margin-bottom: 22px;
        }


        label {
            display: block;

            font-size: 10px;

            font-weight: 700;

            margin-bottom: 7px;
        }


        .description {
            color: var(--muted);

            font-size: 9px;

            line-height: 1.6;

            margin-bottom: 9px;
        }


        input,
        select {
            width: 100%;

            height: 44px;

            border: 1px solid var(--line);

            background: #fffefb;

            color: var(--ink);

            padding: 0 12px;

            font-size: 11px;

            outline: none;

            border-radius: 0;

            transition: .2s ease;
        }


        input:focus,
        select:focus {
            border-color: var(--terracotta);

            background: var(--white);

            box-shadow: none;
        }


        input::placeholder {
            color: #aaa198;
        }


        /* =====================================================
           PASSWORD NOTE
        ====================================================== */

        .password-note {
            background: var(--soft-brown);

            border-left: 2px solid var(--terracotta);

            padding: 13px;

            margin-bottom: 22px;
        }


        .password-note strong {
            display: block;

            color: var(--brown);

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 5px;
        }


        .password-note span {
            display: block;

            color: var(--muted);

            font-size: 8px;

            line-height: 1.7;
        }


        /* =====================================================
           ROLE
        ====================================================== */

        .role-options {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 9px;

            margin-top: 9px;
        }


        .role-option {
            border: 1px solid var(--line);

            padding: 12px;

            cursor: pointer;

            transition: .2s;
        }


        .role-option:hover {
            background: #f4eee5;
        }


        .role-option strong {
            display: block;

            font-size: 10px;

            margin-bottom: 3px;
        }


        .role-option span {
            display: block;

            color: var(--muted);

            font-size: 8px;

            line-height: 1.5;
        }


        /* =====================================================
           INFO PANEL
        ====================================================== */

        .side-panel {
            border-top: 1px solid var(--ink);
        }


        .side-panel-title {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 22px;

            font-weight: 500;

            padding: 14px 0;

            border-bottom: 1px solid var(--line);
        }


        .side-item {
            padding: 15px 0;

            border-bottom: 1px solid var(--line);
        }


        .side-item strong {
            display: block;

            color: var(--brown);

            font-size: 10px;

            margin-bottom: 4px;
        }


        .side-item span {
            display: block;

            color: var(--muted);

            font-size: 9px;

            line-height: 1.7;
        }


        .side-highlight {
            margin-top: 18px;

            background: var(--soft-green);

            border-left: 2px solid var(--olive);

            padding: 13px;
        }


        .side-highlight strong {
            display: block;

            color: var(--olive);

            font-size: 9px;

            margin-bottom: 5px;
        }


        .side-highlight span {
            color: var(--muted);

            font-size: 8px;

            line-height: 1.7;
        }


        /* =====================================================
           FOOTER
        ====================================================== */

        .form-footer {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            border-top: 1px solid var(--line);

            margin-top: 25px;

            padding-top: 18px;
        }


        .footer-note {
            color: var(--muted);

            font-size: 8px;
        }


        .form-buttons {
            display: flex;

            gap: 8px;
        }


        .btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 10px 15px;

            font-size: 9px;

            font-weight: 700;

            border: 1px solid var(--line);

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


        .btn-save {
            border-color: var(--brown);

            background: var(--brown);

            color: white;

            cursor: pointer;
        }


        .btn-save:hover {
            border-color: var(--terracotta);

            background: var(--terracotta);
        }


        footer {
            border-top: 1px solid var(--line);

            margin-top: 50px;

            padding-top: 18px;

            color: var(--muted);

            font-size: 9px;

            display: flex;

            justify-content: space-between;
        }


        footer strong {
            color: var(--brown);
        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 1000px) {

            .page {
                grid-template-columns: 200px 1fr;
            }


            .main {
                padding: 30px;
            }


            .content-grid {
                grid-template-columns: 1fr;
            }


            .intro {
                grid-template-columns: 1fr;
            }


            .intro-text {
                justify-self: start;
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


            .top h1 {
                font-size: 30px;
            }


            .form-card {
                padding: 19px;
            }


            .role-options {
                grid-template-columns: 1fr;
            }


            .form-footer {
                display: block;
            }


            .footer-note {
                margin-bottom: 12px;
            }


            .form-buttons {
                width: 100%;
            }


            .btn {
                flex: 1;
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

                Dashboard

            </a>


            <a href="{{ route('admin.recipes.index') }}">

                <span class="nav-icon">
                    ≡
                </span>

                Semua Resep

            </a>


            <a href="{{ route('recipes.create') }}">

                <span class="nav-icon">
                    +
                </span>

                Tambah Resep

            </a>


            <a
                href="{{ route('admin.users.index') }}"
                class="active"
            >

                <span class="nav-icon">
                    ○
                </span>

                Data User

            </a>


            <a href="{{ route('recipes.index') }}">

                <span class="nav-icon">
                    ↗
                </span>

                Lihat Website

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
                    ResepKu / Admin / Data User
                </div>


                <h1>
                    Tambah User
                </h1>


                <p>
                    Buat akun baru untuk pengguna website.
                </p>


            </div>


            <div class="date">

                {{ now()->translatedFormat('l, d F Y') }}

            </div>


        </header>



        {{-- INTRO --}}

        <section class="intro">


            <h2>

                Tambahkan pengguna baru
                <em>ke ResepKu</em>.

            </h2>


            <p class="intro-text">

                Lengkapi informasi akun di bawah.
                Kamu dapat menentukan apakah akun ini
                merupakan pengguna biasa atau Administrator.

            </p>


        </section>



        {{-- BACK --}}

        <a
            href="{{ route('admin.users.index') }}"
            class="back-link"
        >

            ← Kembali ke Data User

        </a>



        {{-- ERROR --}}

        @if($errors->any())

            <div class="error-box">


                <strong>
                    Ada beberapa data yang perlu diperbaiki.
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



        {{-- CONTENT GRID --}}

        <div class="content-grid">


            {{-- FORM --}}

            <section>


                <div class="form-heading">


                    <h3>
                        Informasi Akun
                    </h3>


                    <span class="form-note">
                        * Wajib diisi
                    </span>


                </div>



                <div class="form-card">


                    <form
                        action="{{ route('admin.users.store') }}"
                        method="POST"
                    >

                        @csrf



                        {{-- NAMA --}}

                        <div class="form-group">


                            <label for="name">
                                Nama User *
                            </label>


                            <div class="description">

                                Nama yang akan tampil pada akun pengguna.

                            </div>


                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Contoh: Novani Alefniar"
                                required
                            >


                            @error('name')

                                <span class="field-error">
                                    {{ $message }}
                                </span>

                            @enderror


                        </div>



                        {{-- EMAIL --}}

                        <div class="form-group">


                            <label for="email">
                                Email *
                            </label>


                            <div class="description">

                                Gunakan alamat email yang belum terdaftar.

                            </div>


                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="contoh@email.com"
                                required
                            >


                            @error('email')

                                <span class="field-error">
                                    {{ $message }}
                                </span>

                            @enderror


                        </div>



                        {{-- PASSWORD NOTE --}}

                        <div class="password-note">


                            <strong>
                                Keamanan akun
                            </strong>


                            <span>

                                Password minimal 8 karakter.
                                Pastikan password diberikan kepada
                                pengguna dengan aman.

                            </span>


                        </div>



                        {{-- PASSWORD --}}

                        <div class="form-group">


                            <label for="password">
                                Password *
                            </label>


                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Masukkan password"
                                required
                            >


                            @error('password')

                                <span class="field-error">
                                    {{ $message }}
                                </span>

                            @enderror


                        </div>



                        {{-- CONFIRM PASSWORD --}}

                        <div class="form-group">


                            <label for="password_confirmation">
                                Konfirmasi Password *
                            </label>


                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                placeholder="Ulangi password"
                                required
                            >


                        </div>



                        {{-- ROLE --}}

                        <div class="form-group">


                            <label for="role">
                                Role *
                            </label>


                            <div class="description">

                                Tentukan hak akses akun di dalam website.

                            </div>


                            <select
                                id="role"
                                name="role"
                                required
                            >


                                <option
                                    value="user"
                                    {{ old('role', 'user') === 'user'
                                        ? 'selected'
                                        : ''
                                    }}
                                >
                                    User
                                </option>


                                <option
                                    value="admin"
                                    {{ old('role') === 'admin'
                                        ? 'selected'
                                        : ''
                                    }}
                                >
                                    Administrator
                                </option>


                            </select>


                            @error('role')

                                <span class="field-error">
                                    {{ $message }}
                                </span>

                            @enderror


                        </div>



                        {{-- BUTTON --}}

                        <div class="form-footer">


                            <div class="footer-note">

                                Data akun akan langsung
                                tersimpan setelah dikirim.

                            </div>


                            <div class="form-buttons">


                                <a
                                    href="{{ route(
                                        'admin.users.index'
                                    ) }}"
                                    class="btn btn-cancel"
                                >
                                    Batal
                                </a>


                                <button
                                    type="submit"
                                    class="btn btn-save"
                                >

                                    Simpan User →

                                </button>


                            </div>


                        </div>


                    </form>


                </div>


            </section>



            {{-- INFORMATION --}}

            <aside>


                <div class="side-panel">


                    <h3 class="side-panel-title">
                        Tentang Akun
                    </h3>


                    <div class="side-item">


                        <strong>
                            User
                        </strong>


                        <span>

                            Akun biasa dapat menggunakan
                            fitur website seperti membuat,
                            mengedit, dan menyimpan resep.

                        </span>


                    </div>


                    <div class="side-item">


                        <strong>
                            Administrator
                        </strong>


                        <span>

                            Administrator memiliki akses
                            ke dashboard, semua resep,
                            dan pengelolaan data pengguna.

                        </span>


                    </div>


                    <div class="side-item">


                        <strong>
                            Email
                        </strong>


                        <span>

                            Setiap alamat email harus unik
                            dan hanya dapat digunakan oleh
                            satu akun.

                        </span>


                    </div>


                    <div class="side-highlight">


                        <strong>
                            ResepKu · Culinary Journal
                        </strong>


                        <span>

                            Pastikan data yang dimasukkan
                            sudah benar sebelum membuat
                            akun baru.

                        </span>


                    </div>


                </div>


            </aside>


        </div>



        {{-- FOOTER --}}

        <footer>


            <span>
                © {{ date('Y') }} <strong>ResepKu</strong>
            </span>


            <span>
                Culinary Journal · Administrator
            </span>


        </footer>


    </main>


</div>


</body>

</html>