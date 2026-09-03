<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Data User - ResepKu</title>


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


        body {
            font-family: "DM Sans", Arial, sans-serif;

            background: var(--paper);

            color: var(--ink);

            font-size: 14px;

            line-height: 1.6;
        }


        a {
            color: inherit;

            text-decoration: none;
        }


        button,
        input {
            font-family: inherit;
        }


        /* =========================
           LAYOUT
        ========================== */

        .page {
            min-height: 100vh;

            display: grid;

            grid-template-columns:
                235px
                minmax(0, 1fr);
        }


        /* =========================
           SIDEBAR
        ========================== */

        .sidebar {
            background: var(--paper-light);

            border-right: 1px solid var(--line);

            min-height: 100vh;

            height: 100vh;

            padding: 30px 22px;

            display: flex;

            flex-direction: column;

            position: sticky;

            top: 0;

            z-index: 20;
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

            background: var(--brown);

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

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
        }


        .nav-label {
            color: #968d82;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 1.5px;

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

            font-size: 13px;

            color: var(--muted);

            border-left: 2px solid transparent;

            transition: .2s;
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
        }


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


        .admin-user-info {
            min-width: 0;
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
            color: var(--muted);

            font-size: 10px;
        }


        .logout {
            margin-top: 14px;

            width: 100%;

            background: transparent;

            border: 1px solid var(--line);

            padding: 10px;

            color: var(--muted);

            cursor: pointer;

            font-size: 11px;
        }


        .logout:hover {
            color: #9b3d2d;

            background: var(--soft-red);
        }


        /* =========================
           MAIN
        ========================== */

        .main {
            min-width: 0;

            padding: 36px 48px 45px;
        }


        .top {
            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            gap: 20px;

            padding-bottom: 27px;

            border-bottom: 1px solid var(--line);
        }


        .eyebrow {
            font-size: 10px;

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
        }


        .top p {
            margin-top: 8px;

            color: var(--muted);

            font-size: 12px;
        }


        .date {
            color: var(--muted);

            font-size: 11px;

            border-bottom: 1px solid var(--brown);

            padding-bottom: 5px;
        }


        /* =========================
           INTRO
        ========================== */

        .intro {
            display: grid;

            grid-template-columns:
                minmax(0, 1.5fr)
                minmax(230px, .8fr);

            gap: 30px;

            margin: 28px 0 30px;

            border-bottom: 1px solid var(--line);

            padding-bottom: 30px;
        }


        .intro h2 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 27px;

            font-weight: 500;

            line-height: 1.35;
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


        /* =========================
           ALERT
        ========================== */

        .alert {
            padding: 13px 15px;

            margin-bottom: 20px;

            font-size: 11px;

            border: 1px solid;
        }


        .alert-success {
            background: var(--soft-green);

            border-color: #d3d8c8;

            color: var(--olive);
        }


        .alert-error {
            background: var(--soft-red);

            border-color: #d8bdb4;

            color: #8f382b;
        }


        /* =========================
           TOP ACTION
        ========================== */

        .top-actions {
            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;

            border-top: 1px solid var(--ink);

            border-bottom: 1px solid var(--line);

            padding: 14px 0;

            margin-bottom: 18px;
        }


        .collection-info {
            color: var(--muted);

            font-size: 11px;
        }


        .collection-info strong {
            color: var(--brown);

            font-family: "Playfair Display", Georgia, serif;

            font-size: 21px;

            font-weight: 500;
        }


        .add-user {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            background: var(--brown);

            color: white;

            padding: 10px 15px;

            font-size: 11px;

            font-weight: 700;

            transition: .2s;
        }


        .add-user:hover {
            background: var(--terracotta);
        }


        /* =========================
           SEARCH
        ========================== */

        .search-box {
            display: flex;

            align-items: stretch;

            gap: 8px;

            margin-bottom: 25px;

            padding: 14px;

            background: var(--white);

            border: 1px solid var(--line);
        }


        .search-input-wrapper {
            flex: 1;
        }


        .search-input {
            width: 100%;

            height: 43px;

            border: 1px solid var(--line);

            background: white;

            color: var(--ink);

            padding: 0 14px;

            font-size: 12px;

            outline: none;
        }


        .search-input:focus {
            border-color: var(--brown);

            box-shadow:
                0 0 0 3px rgba(107,52,36,.08);
        }


        .search-button,
        .reset-button {
            height: 43px;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 6px;

            padding: 0 18px;

            font-size: 11px;

            font-weight: 700;

            cursor: pointer;
        }


        .search-button {
            background: var(--brown);

            color: white;

            border: 1px solid var(--brown);
        }


        .search-button:hover {
            background: var(--terracotta);

            border-color: var(--terracotta);
        }


        .reset-button {
            background: var(--white);

            color: var(--muted);

            border: 1px solid var(--line);
        }


        .reset-button:hover {
            background: var(--soft-brown);

            color: var(--brown);
        }


        .search-result {
            color: var(--muted);

            font-size: 11px;

            margin-top: -10px;

            margin-bottom: 20px;
        }


        .search-result strong {
            color: var(--brown);
        }


        /* =========================
           SUMMARY
        ========================== */

        .summary {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            border-top: 1px solid var(--line);

            border-bottom: 1px solid var(--line);

            margin-bottom: 30px;
        }


        .summary-card {
            padding: 18px 20px;

            border-right: 1px solid var(--line);
        }


        .summary-card:last-child {
            border-right: none;
        }


        .summary-label {
            color: var(--muted);

            font-size: 10px;

            text-transform: uppercase;

            letter-spacing: 1.2px;
        }


        .summary-number {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 30px;

            font-weight: 500;

            margin-top: 5px;
        }


        .summary-description {
            color: var(--muted);

            font-size: 10px;
        }


        /* =========================
           TABLE
        ========================== */

        .section-heading {
            display: flex;

            justify-content: space-between;

            align-items: baseline;

            margin-bottom: 16px;
        }


        .section-heading h3 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 24px;

            font-weight: 500;
        }


        .section-heading span {
            color: var(--muted);

            font-size: 10px;
        }


        .table-box {
            background: var(--white);

            border-top: 1px solid var(--ink);

            border-bottom: 1px solid var(--line);

            overflow-x: auto;
        }


        table {
            width: 100%;

            min-width: 760px;

            border-collapse: collapse;
        }


        th {
            color: var(--muted);

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 1px;

            text-transform: uppercase;

            text-align: left;

            padding: 14px 15px;

            background: #faf7f0;

            border-bottom: 1px solid var(--line);
        }


        td {
            padding: 15px;

            border-bottom: 1px solid #eee8dd;

            font-size: 11px;

            vertical-align: middle;
        }


        tbody tr:hover {
            background: #fbf7ef;
        }


        .number-column {
            width: 60px;

            text-align: center;
        }


        .row-number {
            font-family: "Playfair Display", Georgia, serif;

            color: var(--brown);

            font-size: 15px;

            font-weight: 500;
        }


        /* =========================
           USER
        ========================== */

        .user-cell {
            display: flex;

            align-items: center;

            gap: 11px;
        }


        .user-avatar {
            width: 36px;

            height: 36px;

            border-radius: 50%;

            background: var(--soft-brown);

            color: var(--brown);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 12px;

            font-weight: 700;
        }


        .user-name {
            font-size: 12px;

            font-weight: 700;
        }


        .user-email {
            color: var(--muted);

            font-size: 10px;

            margin-top: 3px;
        }


        .you-badge {
            display: inline-block;

            margin-left: 5px;

            color: var(--terracotta);

            border: 1px solid #d8b7aa;

            padding: 2px 5px;

            font-size: 8px;

            text-transform: uppercase;
        }


        /* =========================
           ROLE
        ========================== */

        .role-badge {
            display: inline-block;

            padding: 5px 9px;

            font-size: 9px;

            text-transform: uppercase;

            font-weight: 700;
        }


        .role-user {
            background: var(--soft-green);

            color: var(--olive);
        }


        .role-admin {
            background: var(--soft-brown);

            color: var(--brown);
        }


        .date-text {
            color: var(--muted);

            font-size: 10px;
        }


        /* =========================
           ACTION
        ========================== */

        .action-group {
            display: flex;

            align-items: center;

            gap: 7px;
        }


        .action-button {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            min-width: 46px;

            padding: 8px 10px;

            border: 1px solid var(--line);

            background: transparent;

            font-size: 9px;

            font-weight: 700;

            cursor: pointer;

            transition: .2s;
        }


        .edit-button {
            color: var(--brown);

            border-color: #cdbeb0;
        }


        .edit-button:hover {
            background: var(--brown);

            color: white;
        }


        .delete-button {
            color: #9b3d2d;

            border-color: #d8bdb4;
        }


        .delete-button:hover {
            background: #9b3d2d;

            color: white;
        }


        /* =========================
           EMPTY
        ========================== */

        .empty {
            border: 1px dashed #cfc6b9;

            padding: 60px 20px;

            text-align: center;

            color: var(--muted);
        }


        .empty-icon {
            font-family: "Playfair Display", Georgia, serif;

            color: var(--brown);

            font-size: 30px;

            margin-bottom: 10px;
        }


        .empty h3 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 23px;

            font-weight: 500;

            color: var(--ink);

            margin-bottom: 7px;
        }


        .empty p {
            font-size: 11px;

            margin-bottom: 15px;
        }


        /* =========================
           PAGINATION
        ========================== */

        .pagination {
            margin-top: 28px;

            display: flex;

            justify-content: center;
        }


        .pagination nav {
            display: flex;

            justify-content: center;
        }


        .pagination a,
        .pagination span {
            min-width: 34px;

            height: 34px;

            padding: 0 9px;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            border: 1px solid var(--line);

            background: var(--white);

            color: var(--muted);

            font-size: 10px;
        }


        .pagination a:hover {
            color: var(--brown);

            border-color: var(--brown);
        }


        .pagination span[aria-current="page"] {
            background: var(--brown);

            color: white;

            border-color: var(--brown);
        }


        .pagination svg {
            width: 15px;

            height: 15px;
        }


        /* =========================
           FOOTER
        ========================== */

        footer {
            border-top: 1px solid var(--line);

            margin-top: 50px;

            padding-top: 18px;

            color: var(--muted);

            font-size: 10px;

            display: flex;

            justify-content: space-between;
        }


        /* =========================
           RESPONSIVE
        ========================== */

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

            .intro {
                grid-template-columns: 1fr;
            }

            .intro-text {
                justify-self: start;
            }

        }


        @media (max-width: 600px) {

            .main {
                padding: 25px 18px;
            }

            .top {
                display: block;
            }

            .top h1 {
                font-size: 30px;
            }

            .date {
                display: inline-block;

                margin-top: 15px;
            }

            .top-actions {
                display: block;
            }

            .add-user {
                margin-top: 12px;
            }

            .search-box {
                flex-direction: column;
            }

            .search-button,
            .reset-button {
                width: 100%;
            }

            .summary {
                grid-template-columns: 1fr;
            }

            .summary-card {
                border-right: none;

                border-bottom: 1px solid var(--line);
            }

            .summary-card:last-child {
                border-bottom: none;
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


    {{-- SIDEBAR --}}

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



    {{-- MAIN --}}

    <main class="main">


        <header class="top">


            <div>

                <div class="eyebrow">
                    ResepKu / Admin / Users
                </div>


                <h1>
                    Data User
                </h1>


                <p>
                    Kelola akun dan hak akses pengguna ResepKu.
                </p>

            </div>


            <div class="date">

                {{ now()->translatedFormat('l, d F Y') }}

            </div>


        </header>



        <section class="intro">


            <h2>

                Kelola pengguna
                <em>ResepKu</em>
                dengan lebih teratur.

            </h2>


            <p class="intro-text">

                Lihat seluruh akun yang terdaftar,
                periksa peran pengguna, ubah data,
                atau tambahkan akun baru dari halaman ini.

            </p>


        </section>



        @if(session('success'))

            <div class="alert alert-success">

                ✓ {{ session('success') }}

            </div>

        @endif


        @if(session('error'))

            <div class="alert alert-error">

                ! {{ session('error') }}

            </div>

        @endif



        {{-- TOP ACTION --}}

        <div class="top-actions">


            <div class="collection-info">

                Total pengguna

                <strong>
                    {{ $users->total() }}
                </strong>

                akun

            </div>


            <a
                href="{{ route('admin.users.create') }}"
                class="add-user"
            >

                +

                Tambah User

            </a>


        </div>



        {{-- SEARCH --}}

        <form
            method="GET"
            action="{{ route('admin.users.index') }}"
            class="search-box"
        >


            <div class="search-input-wrapper">

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    class="search-input"
                    placeholder="Cari berdasarkan nama atau email..."
                    autocomplete="off"
                >

            </div>


            <button
                type="submit"
                class="search-button"
            >

                🔍 Cari

            </button>


            <a
                href="{{ route('admin.users.index') }}"
                class="reset-button"
            >

                ↻ Reset

            </a>


        </form>



        @if(request('search'))

            <div class="search-result">

                Hasil pencarian:

                <strong>
                    "{{ request('search') }}"
                </strong>

                —

                <strong>
                    {{ $users->total() }}
                </strong>

                user ditemukan.

            </div>

        @endif



        {{-- SUMMARY --}}

        <div class="summary">


            <div class="summary-card">

                <div class="summary-label">
                    Total User
                </div>

                <div class="summary-number">
                    {{ \App\Models\User::count() }}
                </div>

                <div class="summary-description">
                    seluruh akun terdaftar
                </div>

            </div>


            <div class="summary-card">

                <div class="summary-label">
                    Administrator
                </div>

                <div class="summary-number">
                    {{ \App\Models\User::where('role', 'admin')->count() }}
                </div>

                <div class="summary-description">
                    akun dengan akses admin
                </div>

            </div>


            <div class="summary-card">

                <div class="summary-label">
                    Pengguna
                </div>

                <div class="summary-number">
                    {{ \App\Models\User::where('role', 'user')->count() }}
                </div>

                <div class="summary-description">
                    akun pengguna biasa
                </div>

            </div>


        </div>



        <div class="section-heading">


            <h3>
                Daftar Pengguna
            </h3>


            <span>
                Semua akun yang tersimpan
            </span>


        </div>



        @if($users->count() > 0)


            <div class="table-box">


                <table>


                    <thead>

                        <tr>

                            {{-- NOMOR --}}

                            <th class="number-column">
                                No.
                            </th>


                            <th>
                                Pengguna
                            </th>


                            <th>
                                Role
                            </th>


                            <th>
                                Bergabung
                            </th>


                            <th>
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        @foreach($users as $index => $user)


                            <tr>


                                {{-- NOMOR URUT --}}

                                <td class="number-column">

                                    <span class="row-number">

                                        {{ str_pad(
                                            $users->firstItem() + $index,
                                            2,
                                            '0',
                                            STR_PAD_LEFT
                                        ) }}

                                    </span>

                                </td>


                                <td>


                                    <div class="user-cell">


                                        <div class="user-avatar">

                                            {{ strtoupper(
                                                substr(
                                                    $user->name,
                                                    0,
                                                    1
                                                )
                                            ) }}

                                        </div>


                                        <div>


                                            <div class="user-name">

                                                {{ $user->name }}


                                                @if($user->id === auth()->id())

                                                    <span class="you-badge">
                                                        Kamu
                                                    </span>

                                                @endif


                                            </div>


                                            <div class="user-email">

                                                {{ $user->email }}

                                            </div>


                                        </div>


                                    </div>


                                </td>


                                <td>


                                    @if($user->role === 'admin')

                                        <span class="role-badge role-admin">
                                            Administrator
                                        </span>

                                    @else

                                        <span class="role-badge role-user">
                                            User
                                        </span>

                                    @endif


                                </td>


                                <td>


                                    <span class="date-text">

                                        {{ $user->created_at?->format('d M Y') ?? '-' }}

                                    </span>


                                </td>


                                <td>


                                    <div class="action-group">


                                        <a
                                            href="{{ route(
                                                'admin.users.edit',
                                                $user->id
                                            ) }}"
                                            class="action-button edit-button"
                                        >
                                            Edit
                                        </a>


                                        @if($user->id !== auth()->id())


                                            <form
                                                action="{{ route(
                                                    'admin.users.destroy',
                                                    $user->id
                                                ) }}"
                                                method="POST"
                                                style="margin:0;"
                                                onsubmit="return confirm('Yakin ingin menghapus user ini?')"
                                            >

                                                @csrf

                                                @method('DELETE')


                                                <button
                                                    type="submit"
                                                    class="action-button delete-button"
                                                >
                                                    Hapus
                                                </button>


                                            </form>


                                        @endif


                                    </div>


                                </td>


                            </tr>


                        @endforeach


                    </tbody>


                </table>


            </div>



            {{-- PAGINATION --}}

            @if($users->hasPages())

                <div class="pagination">

                    {{ $users->links() }}

                </div>

            @endif


        @else


            <div class="empty">


                <div class="empty-icon">
                    ResepKu
                </div>


                @if(request('search'))

                    <h3>
                        User tidak ditemukan
                    </h3>


                    <p>
                        Tidak ada user yang cocok dengan
                        pencarian "{{ request('search') }}".
                    </p>


                    <a
                        href="{{ route('admin.users.index') }}"
                        class="add-user"
                    >
                        ↻ Lihat Semua User
                    </a>

                @else

                    <h3>
                        Belum ada pengguna
                    </h3>


                    <p>
                        Belum ada akun pengguna yang tersimpan.
                    </p>


                    <a
                        href="{{ route('admin.users.create') }}"
                        class="add-user"
                    >
                        + Tambah User
                    </a>

                @endif


            </div>


        @endif



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