<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Edit User | ResepKu</title>

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
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
            font-family:
                "DM Sans",
                Arial,
                sans-serif;

            background: var(--paper);
            color: var(--ink);

            font-size: 14px;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
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

            grid-template-columns:
                235px
                minmax(0, 1fr);
        }

        /* =====================================================
           SIDEBAR
        ====================================================== */

        .sidebar {
            position: sticky;

            top: 0;

            height: 100vh;
            min-height: 100vh;

            padding: 30px 22px;

            background: var(--paper-light);

            border-right:
                1px solid var(--line);

            display: flex;
            flex-direction: column;

            z-index: 20;
        }

        .brand {
            display: flex;
            align-items: center;

            gap: 11px;

            padding-bottom: 31px;

            border-bottom:
                1px solid var(--line);
        }

        .brand-mark {
            width: 40px;
            height: 40px;

            flex-shrink: 0;

            background: var(--brown);
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            font-family:
                Georgia,
                serif;

            font-size: 18px;
        }

        .brand-name {
            font-family:
                "Playfair Display",
                Georgia,
                serif;

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

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 1.5px;

            text-transform: uppercase;

            margin:
                27px 9px 11px;
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

            padding:
                11px 10px;

            color: var(--muted);

            font-size: 13px;

            border-left:
                2px solid transparent;

            transition: .2s ease;
        }

        .nav a:hover {
            color: var(--brown);

            background: #f4eee5;
        }

        .nav a.active {
            color: var(--brown);

            background: #eee5da;

            border-left-color:
                var(--brown);

            font-weight: 700;
        }

        .nav-icon {
            width: 19px;

            flex-shrink: 0;

            text-align: center;

            font-size: 15px;
        }

        /* =====================================================
           SIDEBAR BOTTOM
        ====================================================== */

        .sidebar-bottom {
            margin-top: auto;
        }

        .admin-user {
            border-top:
                1px solid var(--line);

            padding-top: 19px;

            display: flex;
            align-items: center;

            gap: 10px;
        }

        .avatar {
            width: 35px;
            height: 35px;

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

            max-width: 125px;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;

            font-size: 12px;
        }

        .admin-user span {
            display: block;

            color: var(--muted);

            font-size: 10px;

            margin-top: 2px;
        }

        .logout {
            width: 100%;

            margin-top: 14px;

            padding: 10px;

            background: transparent;

            border:
                1px solid var(--line);

            color: var(--muted);

            cursor: pointer;

            font-size: 11px;

            transition: .2s;
        }

        .logout:hover {
            color: #9b3d2d;

            border-color: #c9a397;

            background: #faf0ec;
        }

        /* =====================================================
           MAIN
        ====================================================== */

        .main {
            min-width: 0;

            padding:
                36px 48px 45px;
        }

        .top {
            display: flex;
            align-items: flex-start;

            justify-content: space-between;

            gap: 20px;

            padding-bottom: 27px;

            border-bottom:
                1px solid var(--line);
        }

        .page-heading {
            min-width: 0;
        }

        .eyebrow {
            color: var(--terracotta);

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 2px;

            text-transform: uppercase;

            margin-bottom: 8px;
        }

        .top h1 {
            font-family:
                "Playfair Display",
                Georgia,
                serif;

            font-size: 36px;

            font-weight: 500;

            line-height: 1.15;
        }

        .top p {
            color: var(--muted);

            font-size: 12px;

            margin-top: 8px;
        }

        .date {
            flex-shrink: 0;

            color: var(--muted);

            font-size: 11px;

            border-bottom:
                1px solid var(--brown);

            padding-bottom: 5px;
        }

        /* =====================================================
           CONTENT
        ====================================================== */

        .content {
            width: 100%;

            max-width: 900px;

            padding-top: 28px;
        }

        .back-link {
            display: inline-block;

            color: var(--brown);

            font-size: 11px;

            font-weight: 700;

            margin-bottom: 18px;

            padding-bottom: 3px;

            border-bottom:
                1px solid var(--brown);

            transition: .2s ease;
        }

        .back-link:hover {
            color: var(--terracotta);

            border-color:
                var(--terracotta);
        }

        .page-header {
            margin-bottom: 22px;
        }

        .page-header h2 {
            font-family:
                "Playfair Display",
                Georgia,
                serif;

            font-size: 26px;

            font-weight: 500;

            margin-bottom: 6px;
        }

        .page-header p {
            color: var(--muted);

            font-size: 11px;
        }

        /* =====================================================
           ERROR
        ====================================================== */

        .error-box {
            background: #faf0ec;

            border:
                1px solid #dec1b5;

            color: #8b3426;

            padding:
                14px 16px;

            margin-bottom: 20px;

            font-size: 11px;
        }

        .error-box strong {
            display: block;

            margin-bottom: 7px;

            font-size: 12px;
        }

        .error-box ul {
            padding-left: 18px;

            line-height: 1.7;
        }

        /* =====================================================
           SUCCESS / ERROR FLASH
        ====================================================== */

        .flash-success,
        .flash-error {
            padding:
                13px 15px;

            margin-bottom: 20px;

            font-size: 11px;

            border: 1px solid;
        }

        .flash-success {
            background: #edf3e7;

            border-color: #c7d5bc;

            color: #4d603d;
        }

        .flash-error {
            background: #faf0ec;

            border-color: #dec1b5;

            color: #8b3426;
        }

        /* =====================================================
           USER PREVIEW
        ====================================================== */

        .user-preview {
            background: #f7eee6;

            border:
                1px solid #e2cfc0;

            padding: 15px;

            margin-bottom: 23px;

            display: flex;
            align-items: center;

            gap: 12px;
        }

        .preview-avatar {
            width: 40px;
            height: 40px;

            border-radius: 50%;

            background: var(--brown);

            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 14px;

            font-weight: 700;

            flex-shrink: 0;
        }

        .preview-info strong {
            display: block;

            font-size: 13px;
        }

        .preview-info span {
            display: block;

            color: var(--muted);

            font-size: 10px;

            margin-top: 3px;
        }

        /* =====================================================
           FORM
        ====================================================== */

        .form-card {
            background: var(--white);

            border:
                1px solid var(--line);

            padding: 27px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }

        label {
            display: block;

            font-size: 12px;

            font-weight: 700;

            margin-bottom: 7px;
        }

        .help-text {
            color: var(--muted);

            font-size: 10px;

            line-height: 1.6;

            margin-top: 6px;
        }

        input,
        select {
            width: 100%;

            height: 44px;

            border:
                1px solid var(--line);

            background: #fffefb;

            color: var(--ink);

            padding:
                0 12px;

            font-size: 13px;

            outline: none;

            transition: .2s ease;
        }

        input:focus,
        select:focus {
            border-color:
                var(--terracotta);

            box-shadow:
                0 0 0 3px rgba(169, 86, 53, .08);
        }

        .field-error {
            display: block;

            color: #a33b2c;

            font-size: 10px;

            margin-top: 6px;
        }

        /* =====================================================
           FORM FOOTER
        ====================================================== */

        .form-footer {
            display: flex;

            justify-content: flex-end;

            gap: 9px;

            padding-top: 20px;

            margin-top: 5px;

            border-top:
                1px solid var(--line);
        }

        .btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding:
                10px 17px;

            font-size: 11px;

            font-weight: 700;

            border:
                1px solid transparent;

            cursor: pointer;

            transition: .2s ease;
        }

        .btn-cancel {
            background: transparent;

            color: var(--muted);

            border-color:
                var(--line);
        }

        .btn-cancel:hover {
            color: var(--brown);

            background: #f4eee5;
        }

        .btn-save {
            background: var(--brown);

            color: white;

            border-color:
                var(--brown);
        }

        .btn-save:hover {
            background: #54291d;

            border-color: #54291d;
        }

        /* =====================================================
           FOOTER
        ====================================================== */

        footer {
            border-top:
                1px solid var(--line);

            margin-top: 50px;

            padding-top: 18px;

            color: var(--muted);

            font-size: 10px;

            display: flex;

            justify-content: space-between;
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

            .sidebar {
                padding:
                    28px 18px;
            }

            .main {
                padding: 30px;
            }

        }

        @media (max-width: 750px) {

            .page {
                display: block;
            }

            .sidebar {
                position: relative;

                width: 100%;

                height: auto;

                min-height: auto;

                padding:
                    18px 22px;

                border-right: none;

                border-bottom:
                    1px solid var(--line);
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

                border-bottom:
                    2px solid transparent;
            }

            .nav a.active {
                border-left: none;

                border-bottom-color:
                    var(--brown);
            }

            .sidebar-bottom {
                display: none;
            }

            .main {
                padding:
                    25px 18px 40px;
            }

            .top {
                display: block;
            }

            .date {
                display: inline-block;

                margin-top: 14px;
            }

            .content {
                max-width: none;
            }

            .form-card {
                padding: 20px;
            }

            .form-footer {
                display: block;
            }

            .form-footer .btn {
                width: 100%;

                margin-top: 8px;
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

    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

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

            <a
                href="{{ route('admin.dashboard') }}"
            >

                <span class="nav-icon">
                    ⌂
                </span>

                <span>
                    Dashboard
                </span>

            </a>

            <a
                href="{{ route('admin.recipes.index') }}"
            >

                <span class="nav-icon">
                    ≡
                </span>

                <span>
                    Semua Resep
                </span>

            </a>

            {{-- 
                PENTING:
                Route ini menggunakan recipes.create karena
                route admin.recipes.create memang tidak tersedia
                pada routes/web.php kamu.
            --}}
            <a
                href="{{ route('recipes.create') }}"
            >

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

            <a
                href="{{ route('recipes.index') }}"
            >

                <span class="nav-icon">
                    ↗
                </span>

                <span>
                    Lihat Website
                </span>

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

    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="main">

        <header class="top">

            <div class="page-heading">

                <div class="eyebrow">
                    ResepKu / Admin / Users / Edit
                </div>

                <h1>
                    Edit User
                </h1>

                <p>
                    Ubah informasi akun pengguna yang dipilih.
                </p>

            </div>

            <div class="date">
                {{ now()->translatedFormat('l, d F Y') }}
            </div>

        </header>

        <section class="content">

            <a
                href="{{ route('admin.users.index') }}"
                class="back-link"
            >
                ← Kembali ke Data User
            </a>

            <div class="page-header">

                <h2>
                    Informasi Akun
                </h2>

                <p>
                    Perbarui data pengguna dan hak akses akun.
                </p>

            </div>

            {{-- SUCCESS MESSAGE --}}

            @if(session('success'))

                <div class="flash-success">
                    {{ session('success') }}
                </div>

            @endif

            {{-- ERROR MESSAGE --}}

            @if(session('error'))

                <div class="flash-error">
                    {{ session('error') }}
                </div>

            @endif

            {{-- VALIDATION ERROR --}}

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

            <!-- USER PREVIEW -->

            <div class="user-preview">

                <div class="preview-avatar">

                    {{ strtoupper(
                        substr(
                            $user->name,
                            0,
                            1
                        )
                    ) }}

                </div>

                <div class="preview-info">

                    <strong>
                        {{ $user->name }}
                    </strong>

                    <span>
                        {{ $user->email }}
                    </span>

                </div>

            </div>

            <!-- FORM -->

            <div class="form-card">

                <form
                    method="POST"
                    action="{{ route(
                        'admin.users.update',
                        $user->id
                    ) }}"
                >

                    @csrf

                    @method('PUT')

                    <!-- NAMA -->

                    <div class="form-group">

                        <label for="name">
                            Nama User
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old(
                                'name',
                                $user->name
                            ) }}"
                            autocomplete="name"
                            required
                        >

                        @error('name')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>

                    <!-- EMAIL -->

                    <div class="form-group">

                        <label for="email">
                            Email
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old(
                                'email',
                                $user->email
                            ) }}"
                            autocomplete="email"
                            required
                        >

                        @error('email')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>

                    <!-- ROLE -->

                    <div class="form-group">

                        <label for="role">
                            Role
                        </label>

                        <select
                            id="role"
                            name="role"
                            required
                        >

                            <option
                                value="user"
                                {{ old(
                                    'role',
                                    $user->role
                                ) === 'user'
                                    ? 'selected'
                                    : ''
                                }}
                            >
                                User
                            </option>

                            <option
                                value="admin"
                                {{ old(
                                    'role',
                                    $user->role
                                ) === 'admin'
                                    ? 'selected'
                                    : ''
                                }}
                            >
                                Administrator
                            </option>

                        </select>

                        <div class="help-text">
                            Role menentukan hak akses pengguna di website.
                        </div>

                        @error('role')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>

                    <!-- BUTTON -->

                    <div class="form-footer">

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
                            Simpan Perubahan →
                        </button>

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
                Culinary Journal · Administrator
            </span>

        </footer>

    </main>

</div>

</body>

</html>