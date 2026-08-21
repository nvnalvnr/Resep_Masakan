<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Edit User | ResepKu
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
            background: #f7f6f3;
            color: #292524;
        }

        a {
            text-decoration: none;
        }

        button,
        input,
        select {
            font-family: inherit;
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

            width: 235px;

            background: #ffffff;

            border-right: 1px solid #e7e5e4;

            padding: 25px 16px;

            display: flex;
            flex-direction: column;

            z-index: 50;
        }

        .brand {
            padding: 0 12px;
            margin-bottom: 35px;
        }

        .brand a {
            color: #292524;
            font-size: 22px;
            font-weight: 700;
        }

        .brand a span {
            color: #ea580c;
        }

        .brand small {
            display: block;
            color: #a8a29e;
            font-size: 10px;
            margin-top: 5px;
        }

        .menu-label {
            color: #a8a29e;
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .6px;
            margin: 0 12px 10px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 11px;

            padding: 11px 12px;

            border-radius: 7px;

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
            width: 20px;
            min-width: 20px;
            text-align: center;
            font-size: 15px;
        }

        /* SIDEBAR BOTTOM */

        .sidebar-bottom {
            margin-top: auto;

            border-top: 1px solid #eeeae6;

            padding-top: 15px;
        }

        .profile-box {
            display: flex;
            align-items: center;

            gap: 10px;

            padding: 9px 10px;

            margin-bottom: 8px;
        }

        .avatar {
            width: 36px;
            height: 36px;

            border-radius: 50%;

            background: #ea580c;

            color: #fff;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 13px;
            font-weight: 600;
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
            color: #a8a29e;
            font-size: 10px;
            margin-top: 3px;
        }

        .logout-button {
            width: 100%;

            border: none;

            background: #fff1f2;

            color: #be123c;

            padding: 10px 12px;

            border-radius: 7px;

            font-size: 12px;

            cursor: pointer;

            text-align: left;
        }

        .logout-button:hover {
            background: #ffe4e6;
        }

        /* MAIN */

        .main {
            margin-left: 235px;
            min-height: 100vh;
        }

        /* TOPBAR */

        .topbar {
            height: 68px;

            background: #ffffff;

            border-bottom: 1px solid #e7e5e4;

            padding: 0 32px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .page-name {
            font-size: 17px;
            font-weight: 600;
        }

        .topbar-date {
            color: #a8a29e;
            font-size: 11px;
        }

        /* CONTENT */

        .content {
            padding: 30px 32px 50px;

            max-width: 950px;
        }

        .back-link {
            display: inline-block;

            color: #78716c;

            font-size: 11px;

            margin-bottom: 18px;
        }

        .back-link:hover {
            color: #ea580c;
        }

        .page-header {
            margin-bottom: 22px;
        }

        .page-header h1 {
            font-size: 24px;

            font-weight: 600;

            margin-bottom: 5px;
        }

        .page-header p {
            color: #a8a29e;

            font-size: 11px;
        }

        /* ALERT */

        .error-box {
            background: #fff1f2;

            border: 1px solid #fecdd3;

            color: #be123c;

            border-radius: 7px;

            padding: 12px 14px;

            margin-bottom: 18px;

            font-size: 11px;
        }

        .error-box ul {
            margin-top: 6px;

            padding-left: 18px;
        }

        /* FORM */

        .form-card {
            background: #ffffff;

            border: 1px solid #e7e5e4;

            border-radius: 10px;

            padding: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;

            font-size: 12px;

            font-weight: 600;

            margin-bottom: 7px;
        }

        .help-text {
            color: #a8a29e;

            font-size: 10px;

            line-height: 1.5;

            margin-top: 5px;
        }

        input,
        select {
            width: 100%;

            height: 42px;

            border: 1px solid #d6d3d1;

            border-radius: 7px;

            padding: 0 12px;

            background: #ffffff;

            color: #292524;

            font-size: 12px;

            outline: none;
        }

        input:focus,
        select:focus {
            border-color: #ea580c;

            box-shadow: 0 0 0 3px rgba(234, 88, 12, .08);
        }

        .field-error {
            display: block;

            color: #be123c;

            font-size: 10px;

            margin-top: 5px;
        }

        /* USER INFO */

        .user-preview {
            background: #fff7ed;

            border: 1px solid #fed7aa;

            border-radius: 8px;

            padding: 14px;

            margin-bottom: 23px;

            display: flex;

            align-items: center;

            gap: 11px;
        }

        .preview-avatar {
            width: 38px;
            height: 38px;

            border-radius: 50%;

            background: #ea580c;

            color: white;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 13px;
            font-weight: 600;
        }

        .preview-info strong {
            display: block;

            font-size: 12px;
        }

        .preview-info span {
            display: block;

            color: #78716c;

            font-size: 10px;

            margin-top: 3px;
        }

        /* FOOTER BUTTON */

        .form-footer {
            display: flex;

            justify-content: flex-end;

            gap: 8px;

            padding-top: 18px;

            margin-top: 5px;

            border-top: 1px solid #f0efed;
        }

        .btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 10px 15px;

            border-radius: 7px;

            border: none;

            font-size: 11px;

            font-weight: 600;

            cursor: pointer;
        }

        .btn-cancel {
            background: #f5f5f4;

            color: #57534e;
        }

        .btn-cancel:hover {
            background: #e7e5e4;
        }

        .btn-save {
            background: #ea580c;

            color: #ffffff;
        }

        .btn-save:hover {
            background: #c2410c;
        }

        /* RESPONSIVE */

        @media (max-width: 750px) {

            .sidebar {
                position: relative;

                width: 100%;

                height: auto;

                border-right: none;

                border-bottom: 1px solid #e7e5e4;
            }

            .main {
                margin-left: 0;
            }

            .topbar {
                padding: 0 18px;
            }

            .content {
                padding: 22px 18px 40px;
            }

            .form-card {
                padding: 20px;
            }

        }

    </style>

</head>


<body>

<div class="layout">


    <!-- SIDEBAR -->

    <aside class="sidebar">


        <div class="brand">

            <a href="{{ route('admin.dashboard') }}">
                Resep<span>Ku</span>
            </a>

            <small>
                Website Resep Masakan
            </small>

        </div>


        <div class="menu-label">
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


            <a href="{{ route('admin.recipes.create') }}">

                <span class="menu-icon">
                    ＋
                </span>

                <span>
                    Tambah Resep
                </span>

            </a>


            <a
                href="{{ route('admin.users.index') }}"
                class="active"
            >

                <span class="menu-icon">
                    👥
                </span>

                <span>
                    Data User
                </span>

            </a>


            <a
                href="{{ route('recipes.index') }}"
                target="_blank"
            >

                <span class="menu-icon">
                    ↗
                </span>

                <span>
                    Lihat Website
                </span>

            </a>

        </nav>


        <!-- SIDEBAR BOTTOM -->

        <div class="sidebar-bottom">


            <div class="profile-box">

                <div class="avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>

                <div class="profile-info">

                    <div class="profile-name">

                        {{ auth()->user()->name }}

                    </div>

                    <div class="profile-role">

                        Administrator

                    </div>

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

                    🚪
                    &nbsp;
                    Keluar

                </button>

            </form>

        </div>

    </aside>


    <!-- MAIN -->

    <main class="main">


        <!-- TOPBAR -->

        <header class="topbar">

            <div class="page-name">

                Edit User

            </div>


            <div class="topbar-date">

                {{ now()->format('d M Y') }}

            </div>

        </header>


        <!-- CONTENT -->

        <section class="content">


            <!-- BACK -->

            <a
                href="{{ route('admin.users.index') }}"
                class="back-link"
            >

                ← Kembali ke Data User

            </a>


            <!-- HEADER -->

            <div class="page-header">

                <h1>

                    Edit User

                </h1>

                <p>

                    Ubah informasi akun pengguna yang dipilih.

                </p>

            </div>


            <!-- ERROR -->

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

                    {{ strtoupper(substr($user->name, 0, 1)) }}

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
                    action="{{ route('admin.users.update', $user->id) }}"
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
                            value="{{ old('name', $user->name) }}"
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
                            value="{{ old('email', $user->email) }}"
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
                                {{ old('role', $user->role) === 'user' ? 'selected' : '' }}
                            >
                                User
                            </option>


                            <option
                                value="admin"
                                {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}
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


                    <!-- TOMBOL -->

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

                            Simpan Perubahan

                        </button>


                    </div>


                </form>


            </div>


        </section>


    </main>


</div>

</body>

</html>