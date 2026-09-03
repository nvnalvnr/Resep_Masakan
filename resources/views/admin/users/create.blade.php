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


<link
    rel="preconnect"
    href="https://fonts.googleapis.com"
>

<link
    rel="preconnect"
    href="https://fonts.gstatic.com"
    crossorigin
>

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
        font-family:
            "DM Sans",
            Arial,
            sans-serif;

        background:
            var(--paper);

        color:
            var(--ink);

        font-size:
            14px;

        line-height:
            1.6;
    }


    a {
        color:
            inherit;

        text-decoration:
            none;
    }


    button,
    input,
    select {
        font-family:
            inherit;
    }


    /* =====================================================
       LAYOUT
    ====================================================== */

    .page {
        min-height:
            100vh;

        display:
            grid;

        grid-template-columns:
            235px
            minmax(0, 1fr);
    }


    /* =====================================================
       SIDEBAR
    ====================================================== */

    .sidebar {
        background:
            var(--paper-light);

        border-right:
            1px solid var(--line);

        min-height:
            100vh;

        height:
            100vh;

        padding:
            30px 22px;

        display:
            flex;

        flex-direction:
            column;

        position:
            sticky;

        top:
            0;

        z-index:
            20;

        overflow-y:
            auto;
    }


    .brand {
        display:
            flex;

        align-items:
            center;

        gap:
            11px;

        padding-bottom:
            31px;

        border-bottom:
            1px solid var(--line);
    }


    .brand-mark {
        width:
            40px;

        height:
            40px;

        flex-shrink:
            0;

        background:
            var(--brown);

        color:
            white;

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

        border-radius:
            50%;

        font-family:
            Georgia,
            serif;

        font-size:
            18px;
    }


    .brand-name {
        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size:
            21px;

        font-weight:
            600;
    }


    .brand-small {
        display:
            block;

        color:
            var(--muted);

        font-size:
            9px;

        letter-spacing:
            1.5px;

        text-transform:
            uppercase;

        margin-top:
            2px;
    }


    .nav-label {
        color:
            #968d82;

        font-size:
            10px;

        font-weight:
            700;

        letter-spacing:
            1.5px;

        text-transform:
            uppercase;

        margin:
            27px 9px 11px;
    }


    .nav {
        display:
            flex;

        flex-direction:
            column;

        gap:
            3px;
    }


    .nav a {
        display:
            flex;

        align-items:
            center;

        gap:
            11px;

        padding:
            11px 10px;

        color:
            var(--muted);

        font-size:
            13px;

        border-left:
            2px solid transparent;

        transition:
            .2s ease;
    }


    .nav a:hover {
        color:
            var(--brown);

        background:
            #f4eee5;
    }


    .nav a.active {
        color:
            var(--brown);

        background:
            #eee5da;

        border-left-color:
            var(--brown);

        font-weight:
            700;
    }


    .nav-icon {
        width:
            19px;

        flex-shrink:
            0;

        text-align:
            center;

        font-size:
            15px;
    }


    /* =====================================================
       SIDEBAR BOTTOM
    ====================================================== */

    .sidebar-bottom {
        margin-top:
            auto;
    }


    .admin-user {
        border-top:
            1px solid var(--line);

        padding-top:
            19px;

        display:
            flex;

        align-items:
            center;

        gap:
            10px;
    }


    .avatar {
        width:
            35px;

        height:
            35px;

        flex-shrink:
            0;

        background:
            var(--soft-brown);

        color:
            var(--brown);

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

        border-radius:
            50%;

        font-size:
            12px;

        font-weight:
            700;
    }


    .admin-user-info {
        min-width:
            0;
    }


    .admin-user strong {
        display:
            block;

        max-width:
            125px;

        white-space:
            nowrap;

        overflow:
            hidden;

        text-overflow:
            ellipsis;

        font-size:
            12px;
    }


    .admin-user span {
        display:
            block;

        color:
            var(--muted);

        font-size:
            10px;

        margin-top:
            2px;
    }


    .logout {
        width:
            100%;

        margin-top:
            14px;

        padding:
            10px;

        background:
            transparent;

        border:
            1px solid var(--line);

        color:
            var(--muted);

        cursor:
            pointer;

        font-size:
            11px;

        transition:
            .2s ease;
    }


    .logout:hover {
        color:
            #9b3d2d;

        border-color:
            #c9a397;

        background:
            #faf0ec;
    }


    /* =====================================================
       MAIN
    ====================================================== */

    .main {
        min-width:
            0;

        padding:
            36px 48px 45px;
    }


    /* =====================================================
       HEADER
    ====================================================== */

    .top {
        display:
            flex;

        justify-content:
            space-between;

        align-items:
            flex-start;

        gap:
            20px;

        padding-bottom:
            27px;

        border-bottom:
            1px solid var(--line);
    }


    .eyebrow {
        color:
            var(--terracotta);

        font-size:
            10px;

        font-weight:
            700;

        letter-spacing:
            2px;

        text-transform:
            uppercase;

        margin-bottom:
            8px;
    }


    .top h1 {
        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size:
            36px;

        font-weight:
            500;

        line-height:
            1.15;
    }


    .top p {
        color:
            var(--muted);

        font-size:
            12px;

        margin-top:
            8px;
    }


    .date {
        flex-shrink:
            0;

        color:
            var(--muted);

        font-size:
            11px;

        border-bottom:
            1px solid var(--brown);

        padding-bottom:
            5px;
    }


    /* =====================================================
       INTRO
    ====================================================== */

    .intro {
        display:
            grid;

        grid-template-columns:
            minmax(0, 1.5fr)
            minmax(230px, .8fr);

        gap:
            30px;

        margin:
            28px 0 30px;

        padding-bottom:
            30px;

        border-bottom:
            1px solid var(--line);
    }


    .intro h2 {
        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size:
            27px;

        font-weight:
            500;

        line-height:
            1.35;
    }


    .intro h2 em {
        color:
            var(--terracotta);

        font-style:
            normal;
    }


    .intro-text {
        max-width:
            390px;

        justify-self:
            end;

        color:
            var(--muted);

        font-size:
            12px;

        line-height:
            1.8;
    }


    /* =====================================================
       ERROR
    ====================================================== */

    .error-box {
        background:
            var(--soft-red);

        border:
            1px solid #d8bdb4;

        color:
            #8f382b;

        padding:
            14px 16px;

        margin-bottom:
            22px;

        font-size:
            11px;
    }


    .error-box strong {
        display:
            block;

        margin-bottom:
            7px;

        font-size:
            12px;
    }


    .error-box ul {
        padding-left:
            18px;

        line-height:
            1.7;
    }


    /* =====================================================
       FORM
    ====================================================== */

    .form-wrapper {
        max-width:
            850px;
    }


    .form-heading {
        display:
            flex;

        justify-content:
            space-between;

        align-items:
            baseline;

        gap:
            15px;

        margin-bottom:
            18px;
    }


    .form-heading h3 {
        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size:
            24px;

        font-weight:
            500;
    }


    .required-note {
        color:
            var(--muted);

        font-size:
            10px;
    }


    .form-card {
        background:
            var(--white);

        border:
            1px solid var(--line);

        padding:
            27px;
    }


    .form-group {
        margin-bottom:
            23px;
    }


    .form-group:last-child {
        margin-bottom:
            0;
    }


    label {
        display:
            block;

        font-size:
            12px;

        font-weight:
            700;

        margin-bottom:
            7px;
    }


    .field-description {
        color:
            var(--muted);

        font-size:
            10px;

        line-height:
            1.6;

        margin-bottom:
            9px;
    }


    input,
    select {
        width:
            100%;

        height:
            44px;

        padding:
            0 13px;

        border:
            1px solid var(--line);

        border-radius:
            0;

        background:
            #fffefb;

        color:
            var(--ink);

        font-size:
            13px;

        outline:
            none;

        transition:
            .2s ease;
    }


    input:focus,
    select:focus {
        border-color:
            var(--terracotta);

        background:
            #fffdf8;
    }


    input::placeholder {
        color:
            #aaa198;
    }


    .field-error {
        display:
            block;

        color:
            #a33b2c;

        font-size:
            10px;

        margin-top:
            6px;
    }


    /* =====================================================
       ROLE
    ====================================================== */

    .role-note {
        color:
            var(--muted);

        font-size:
            10px;

        line-height:
            1.6;

        margin-top:
            7px;
    }


    /* =====================================================
       FORM FOOTER
    ====================================================== */

    .form-footer {
        display:
            flex;

        justify-content:
            space-between;

        align-items:
            center;

        gap:
            20px;

        border-top:
            1px solid var(--line);

        margin-top:
            7px;

        padding-top:
            20px;
    }


    .footer-note {
        color:
            var(--muted);

        font-size:
            10px;
    }


    .form-buttons {
        display:
            flex;

        align-items:
            center;

        gap:
            9px;
    }


    .btn {
        display:
            inline-flex;

        align-items:
            center;

        justify-content:
            center;

        padding:
            10px 17px;

        font-size:
            11px;

        font-weight:
            700;

        cursor:
            pointer;

        transition:
            .2s ease;
    }


    .btn-cancel {
        background:
            transparent;

        color:
            var(--muted);

        border:
            1px solid var(--line);
    }


    .btn-cancel:hover {
        background:
            #f4eee5;

        color:
            var(--brown);
    }


    .btn-save {
        background:
            var(--brown);

        color:
            white;

        border:
            1px solid var(--brown);
    }


    .btn-save:hover {
        background:
            #54291d;

        border-color:
            #54291d;
    }


    /* =====================================================
       FOOTER
    ====================================================== */

    footer {
        display:
            flex;

        justify-content:
            space-between;

        gap:
            15px;

        margin-top:
            50px;

        padding-top:
            18px;

        border-top:
            1px solid var(--line);

        color:
            var(--muted);

        font-size:
            10px;
    }


    /* =====================================================
       RESPONSIVE
    ====================================================== */

    @media (max-width: 1000px) {

        .page {
            grid-template-columns:
                200px
                minmax(0, 1fr);
        }


        .main {
            padding:
                30px;
        }


        .intro {
            grid-template-columns:
                1fr;
        }


        .intro-text {
            justify-self:
                start;
        }

    }


    @media (max-width: 850px) {

        .page {
            display:
                block;
        }


        .sidebar {
            position:
                relative;

            width:
                100%;

            height:
                auto;

            min-height:
                auto;

            padding:
                18px 22px;

            overflow:
                visible;

            border-right:
                none;

            border-bottom:
                1px solid var(--line);
        }


        .brand {
            padding-bottom:
                15px;

            border-bottom:
                none;
        }


        .nav-label {
            display:
                none;
        }


        .nav {
            flex-direction:
                row;

            overflow-x:
                auto;

            margin-top:
                10px;
        }


        .nav a {
            white-space:
                nowrap;

            border-left:
                none;

            border-bottom:
                2px solid transparent;
        }


        .nav a.active {
            border-left:
                none;

            border-bottom-color:
                var(--brown);
        }


        .sidebar-bottom {
            display:
                none;
        }

    }


    @media (max-width: 600px) {

        .main {
            padding:
                25px 18px 40px;
        }


        .top {
            display:
                block;
        }


        .date {
            display:
                inline-block;

            margin-top:
                14px;
        }


        .top h1 {
            font-size:
                30px;
        }


        .intro h2 {
            font-size:
                23px;
        }


        .form-card {
            padding:
                19px;
        }


        .form-footer {
            display:
                block;
        }


        .footer-note {
            margin-bottom:
                14px;
        }


        .form-buttons {
            width:
                100%;
        }


        .btn {
            flex:
                1;
        }


        footer {
            display:
                block;

            line-height:
                1.7;
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


        <a href="{{ route('admin.recipes.index') }}">

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


        <a
            href="{{ route('admin.users.index') }}"
            class="active"
        >

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


    {{-- USER ADMIN --}}

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
                ResepKu / Admin / Users
            </div>


            <h1>
                Tambah User
            </h1>


            <p>
                Buat akun pengguna baru untuk website ResepKu.
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
            <em>ResepKu</em>
            dengan mudah.

        </h2>


        <p class="intro-text">

            Isi data pengguna dengan benar.
            Admin dapat menentukan apakah akun baru
            memiliki akses sebagai User atau Administrator.

        </p>


    </section>



    {{-- ERROR --}}

    @if($errors->any())


        <div class="error-box">


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



    {{-- FORM --}}

    <div class="form-wrapper">


        <div class="form-heading">


            <h3>
                Informasi Akun
            </h3>


            <span class="required-note">
                * Wajib diisi
            </span>


        </div>



        <div class="form-card">


            <form
                method="POST"
                action="{{ route('admin.users.store') }}"
            >

                @csrf


                {{-- NAMA --}}

                <div class="form-group">


                    <label for="name">
                        Nama User *
                    </label>


                    <div class="field-description">

                        Masukkan nama pengguna yang akan digunakan
                        untuk akun ResepKu.

                    </div>


                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Contoh: Novani"
                        required
                        autofocus
                        autocomplete="name"
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


                    <div class="field-description">

                        Gunakan alamat email yang belum terdaftar.

                    </div>


                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="contoh@email.com"
                        required
                        autocomplete="email"
                    >


                    @error('email')

                        <span class="field-error">
                            {{ $message }}
                        </span>

                    @enderror


                </div>



                {{-- ROLE --}}

                <div class="form-group">


                    <label for="role">
                        Role *
                    </label>


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


                    <div class="role-note">

                        User dapat mengelola resep miliknya sendiri.
                        Administrator dapat mengelola seluruh data website.

                    </div>


                    @error('role')

                        <span class="field-error">
                            {{ $message }}
                        </span>

                    @enderror


                </div>



                {{-- PASSWORD --}}

                <div class="form-group">


                    <label for="password">
                        Password *
                    </label>


                    <div class="field-description">

                        Password minimal 8 karakter.

                    </div>


                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                        required
                        autocomplete="new-password"
                    >


                    @error('password')

                        <span class="field-error">
                            {{ $message }}
                        </span>

                    @enderror


                </div>



                {{-- KONFIRMASI PASSWORD --}}

                <div class="form-group">


                    <label for="password_confirmation">
                        Konfirmasi Password *
                    </label>


                    <div class="field-description">

                        Masukkan kembali password yang sama.

                    </div>


                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Ulangi password"
                        required
                        autocomplete="new-password"
                    >


                </div>



                {{-- FOOTER FORM --}}

                <div class="form-footer">


                    <div class="footer-note">

                        Pastikan data akun sudah benar sebelum disimpan.

                    </div>


                    <div class="form-buttons">


                        <a
                            href="{{ route('admin.users.index') }}"
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
