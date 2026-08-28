<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data User - ResepKu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;1,500&display=swap"
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
            font-family: "DM Sans", Arial, sans-serif;
            background: var(--paper);
            color: var(--ink);
        }


        a {
            color: inherit;
            text-decoration: none;
        }


        button {
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

            background: var(--soft-brown);

            color: var(--brown);

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

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

            background: #faf0ec;
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

            max-width: 620px;

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
           TOP ACTION
        ====================================================== */

        .top-actions {
            display: flex;

            justify-content: space-between;

            align-items: center;

            border-top: 1px solid var(--ink);

            border-bottom: 1px solid var(--line);

            padding: 14px 0;

            margin-bottom: 24px;
        }


        .collection-info {
            color: var(--muted);

            font-size: 10px;
        }


        .collection-info strong {
            font-family: "Playfair Display", Georgia, serif;

            color: var(--brown);

            font-size: 20px;

            font-weight: 500;

            margin: 0 4px;
        }


        .add-user {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            background: var(--brown);

            color: white;

            padding: 10px 14px;

            font-size: 10px;

            font-weight: 700;

            transition: .2s;
        }


        .add-user:hover {
            background: var(--terracotta);
        }


        /* =====================================================
           ALERT
        ====================================================== */

        .alert {
            padding: 13px 15px;

            margin-bottom: 20px;

            font-size: 10px;

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


        /* =====================================================
           SUMMARY
        ====================================================== */

        .summary {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            border-top: 1px solid var(--line);

            border-bottom: 1px solid var(--line);

            margin-bottom: 28px;
        }


        .summary-card {
            padding: 17px 20px;

            border-right: 1px solid var(--line);
        }


        .summary-card:last-child {
            border-right: none;
        }


        .summary-label {
            color: var(--muted);

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: 1.2px;

            margin-bottom: 7px;
        }


        .summary-number {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 28px;

            font-weight: 500;

            color: var(--ink);
        }


        .summary-description {
            color: var(--muted);

            font-size: 9px;

            margin-top: 3px;
        }


        /* =====================================================
           TABLE
        ====================================================== */

        .section-heading {
            display: flex;

            justify-content: space-between;

            align-items: baseline;

            margin-bottom: 16px;
        }


        .section-heading h3 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 23px;

            font-weight: 500;
        }


        .section-heading span {
            color: var(--muted);

            font-size: 9px;
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

            font-size: 9px;

            font-weight: 700;

            letter-spacing: 1px;

            text-transform: uppercase;

            text-align: left;

            padding: 13px 15px;

            background: #faf7f0;

            border-bottom: 1px solid var(--line);
        }


        td {
            padding: 14px 15px;

            border-bottom: 1px solid #eee8dd;

            font-size: 10px;

            vertical-align: middle;
        }


        tbody tr:last-child td {
            border-bottom: none;
        }


        tbody tr {
            transition: .2s ease;
        }


        tbody tr:hover {
            background: #fbf7ef;
        }


        /* =====================================================
           USER
        ====================================================== */

        .user-cell {
            display: flex;

            align-items: center;

            gap: 11px;
        }


        .user-avatar {
            width: 35px;

            height: 35px;

            border-radius: 50%;

            background: var(--soft-brown);

            color: var(--brown);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 11px;

            font-weight: 700;

            flex-shrink: 0;
        }


        .user-info {
            min-width: 0;
        }


        .user-name {
            font-size: 11px;

            font-weight: 700;

            color: var(--ink);
        }


        .user-email {
            color: var(--muted);

            font-size: 9px;

            margin-top: 3px;
        }


        .you-badge {
            display: inline-block;

            margin-left: 5px;

            color: var(--terracotta);

            border: 1px solid #d8b7aa;

            padding: 2px 5px;

            font-size: 7px;

            text-transform: uppercase;

            letter-spacing: .7px;
        }


        /* =====================================================
           ROLE
        ====================================================== */

        .role-badge {
            display: inline-block;

            padding: 5px 8px;

            font-size: 8px;

            text-transform: uppercase;

            letter-spacing: .7px;

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


        /* =====================================================
           DATE
        ====================================================== */

        .date-text {
            color: var(--muted);

            font-size: 9px;
        }


        /* =====================================================
           ACTION
        ====================================================== */

        .action-group {
            display: flex;

            align-items: center;

            gap: 7px;
        }


        .action-button {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            min-width: 42px;

            padding: 7px 9px;

            border: 1px solid var(--line);

            background: transparent;

            font-size: 8px;

            font-weight: 700;

            transition: .2s;

            cursor: pointer;
        }


        .edit-button {
            color: var(--brown);

            border-color: #cdbeb0;
        }


        .edit-button:hover {
            background: var(--brown);

            color: white;

            border-color: var(--brown);
        }


        .delete-button {
            color: #9b3d2d;

            border-color: #d8bdb4;

            background: transparent;
        }


        .delete-button:hover {
            background: #9b3d2d;

            color: white;

            border-color: #9b3d2d;
        }


        /* =====================================================
           EMPTY
        ====================================================== */

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

            font-size: 22px;

            font-weight: 500;

            color: var(--ink);

            margin-bottom: 7px;
        }


        .empty p {
            font-size: 10px;

            margin-bottom: 15px;
        }


        /* =====================================================
           PAGINATION
        ====================================================== */

        .pagination {
            margin-top: 24px;

            display: flex;

            justify-content: center;
        }


        .pagination svg {
            width: 15px;

            height: 15px;
        }


        .pagination a,
        .pagination span {
            font-size: 9px;
        }


        /* =====================================================
           FOOTER
        ====================================================== */

        footer {
            border-top: 1px solid var(--line);

            margin-top: 50px;

            padding-top: 18px;

            color: var(--muted);

            font-size: 9px;

            display: flex;

            justify-content: space-between;
        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 1000px) {

            .main {
                padding: 30px;
            }

            .page {
                grid-template-columns: 200px 1fr;
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


            .intro {
                grid-template-columns: 1fr;

                gap: 18px;
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


            .date {
                display: inline-block;

                margin-top: 15px;
            }


            .top h1 {
                font-size: 30px;
            }


            .top-actions {
                display: block;
            }


            .add-user {
                margin-top: 12px;
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


            {{-- DASHBOARD --}}

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


            {{-- SEMUA RESEP --}}

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


            {{-- TAMBAH RESEP --}}

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


            {{-- DATA USER --}}

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


            {{-- WEBSITE --}}

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



        {{-- INTRO --}}

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



        {{-- ALERT SUCCESS --}}

        @if(session('success'))

            <div class="alert alert-success">

                ✓

                {{ session('success') }}

            </div>

        @endif



        {{-- ALERT ERROR --}}

        @if(session('error'))

            <div class="alert alert-error">

                !

                {{ session('error') }}

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



        {{-- SUMMARY --}}

        <div class="summary">


            {{-- TOTAL --}}

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



            {{-- ADMIN --}}

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



            {{-- USER --}}

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



        {{-- TABLE HEADER --}}

        <div class="section-heading">


            <h3>
                Daftar Pengguna
            </h3>


            <span>
                Semua akun yang tersimpan
            </span>


        </div>



        {{-- TABLE --}}

        @if($users->count() > 0)


            <div class="table-box">


                <table>


                    <thead>

                        <tr>

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


                        @foreach($users as $user)


                            <tr>


                                {{-- USER --}}

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


                                        <div class="user-info">


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



                                {{-- ROLE --}}

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



                                {{-- TANGGAL --}}

                                <td>

                                    <span class="date-text">

                                        {{ $user->created_at?->format('d M Y') ?? '-' }}

                                    </span>

                                </td>



                                {{-- AKSI --}}

                                <td>


                                    <div class="action-group">


                                        {{-- EDIT --}}

                                        <a
                                            href="{{ route(
                                                'admin.users.edit',
                                                $user->id
                                            ) }}"
                                            class="action-button edit-button"
                                        >

                                            Edit

                                        </a>



                                        {{-- HAPUS --}}

                                        @if($user->id !== auth()->id())


                                            <form
                                                action="{{ route(
                                                    'admin.users.destroy',
                                                    $user->id
                                                ) }}"
                                                method="POST"
                                                style="margin: 0;"
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


            {{-- EMPTY --}}

            <div class="empty">


                <div class="empty-icon">
                    ResepKu
                </div>


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


            </div>


        @endif



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