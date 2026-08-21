<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Data User | ResepKu
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

        button {
            font-family: inherit;
        }


        /* =====================================================
           LAYOUT
        ===================================================== */

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


        /* =====================================================
           SIDEBAR BOTTOM
        ===================================================== */

        .sidebar-bottom {
            margin-top: auto;

            padding-top: 15px;

            border-top: 1px solid #eeeae6;
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

            color: #ffffff;

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
            color: #292524;

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

            transition: .2s;
        }


        .logout-button:hover {
            background: #ffe4e6;
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main {
            margin-left: 235px;

            min-height: 100vh;
        }


        /* =====================================================
           TOPBAR
        ===================================================== */

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


        .topbar-right {
            color: #a8a29e;

            font-size: 11px;
        }


        /* =====================================================
           CONTENT
        ===================================================== */

        .content {
            padding: 30px 32px 50px;

            max-width: 1250px;
        }


        /* =====================================================
           PAGE HEADER
        ===================================================== */

        .page-header {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

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


        .add-user-button {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 6px;

            background: #ea580c;

            color: #ffffff;

            padding: 10px 14px;

            border-radius: 7px;

            font-size: 11px;

            font-weight: 600;

            white-space: nowrap;

            transition: .2s;
        }


        .add-user-button:hover {
            background: #c2410c;
        }


        /* =====================================================
           ALERT
        ===================================================== */

        .alert {
            border-radius: 7px;

            padding: 11px 14px;

            margin-bottom: 18px;

            font-size: 11px;
        }


        .alert-success {
            background: #f0fdf4;

            border: 1px solid #bbf7d0;

            color: #15803d;
        }


        .alert-error {
            background: #fff1f2;

            border: 1px solid #fecdd3;

            color: #be123c;
        }


        /* =====================================================
           SUMMARY
        ===================================================== */

        .summary {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 14px;

            margin-bottom: 20px;
        }


        .summary-card {
            background: #ffffff;

            border: 1px solid #e7e5e4;

            border-radius: 9px;

            padding: 17px;
        }


        .summary-label {
            color: #a8a29e;

            font-size: 10px;

            margin-bottom: 8px;

            text-transform: uppercase;

            font-weight: 600;
        }


        .summary-number {
            font-size: 23px;

            font-weight: 600;
        }


        .summary-description {
            color: #a8a29e;

            font-size: 9px;

            margin-top: 4px;
        }


        /* =====================================================
           TABLE CARD
        ===================================================== */

        .table-card {
            background: #ffffff;

            border: 1px solid #e7e5e4;

            border-radius: 10px;

            overflow: hidden;
        }


        .table-header {
            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 17px 18px;

            border-bottom: 1px solid #eeeae6;
        }


        .table-title {
            font-size: 14px;

            font-weight: 600;
        }


        .table-subtitle {
            color: #a8a29e;

            font-size: 9px;

            margin-top: 4px;
        }


        .table-wrapper {
            width: 100%;

            overflow-x: auto;
        }


        table {
            width: 100%;

            border-collapse: collapse;

            min-width: 720px;
        }


        th {
            background: #fafaf9;

            color: #78716c;

            font-size: 10px;

            font-weight: 600;

            text-align: left;

            padding: 12px 15px;

            border-bottom: 1px solid #eeeae6;
        }


        td {
            padding: 13px 15px;

            border-bottom: 1px solid #f0efed;

            font-size: 11px;

            vertical-align: middle;
        }


        tbody tr:hover {
            background: #fffcf9;
        }


        tbody tr:last-child td {
            border-bottom: none;
        }


        .user-cell {
            display: flex;

            align-items: center;

            gap: 10px;
        }


        .user-avatar {
            width: 34px;

            height: 34px;

            border-radius: 50%;

            background: #fff1e8;

            color: #c2410c;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 11px;

            font-weight: 700;

            flex-shrink: 0;
        }


        .user-details {
            min-width: 0;
        }


        .user-name {
            color: #292524;

            font-size: 11px;

            font-weight: 600;
        }


        .user-email {
            color: #a8a29e;

            font-size: 9px;

            margin-top: 3px;
        }


        .role-badge {
            display: inline-block;

            padding: 5px 8px;

            border-radius: 20px;

            font-size: 9px;

            font-weight: 600;
        }


        .role-user {
            background: #eff6ff;

            color: #2563eb;
        }


        .role-admin {
            background: #fff1e8;

            color: #ea580c;
        }


        .date-text {
            color: #78716c;

            font-size: 10px;
        }


        .action-group {
            display: flex;

            align-items: center;

            gap: 6px;
        }


        .action-button {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 7px 9px;

            border-radius: 6px;

            font-size: 9px;

            font-weight: 600;
        }


        .edit-button {
            background: #eff6ff;

            color: #2563eb;
        }


        .edit-button:hover {
            background: #dbeafe;
        }


        .delete-button {
            border: none;

            background: #fff1f2;

            color: #be123c;

            cursor: pointer;
        }


        .delete-button:hover {
            background: #ffe4e6;
        }


        .you-badge {
            display: inline-block;

            margin-left: 5px;

            padding: 3px 5px;

            background: #f5f5f4;

            color: #78716c;

            border-radius: 4px;

            font-size: 8px;
        }


        /* =====================================================
           EMPTY
        ===================================================== */

        .empty {
            text-align: center;

            padding: 60px 20px;
        }


        .empty-icon {
            font-size: 34px;

            margin-bottom: 12px;
        }


        .empty h2 {
            font-size: 17px;

            margin-bottom: 6px;
        }


        .empty p {
            color: #a8a29e;

            font-size: 11px;

            margin-bottom: 17px;
        }


        /* =====================================================
           PAGINATION
        ===================================================== */

        .pagination-wrapper {
            padding: 16px 18px;

            border-top: 1px solid #eeeae6;
        }


        .pagination-wrapper nav {
            display: flex;

            justify-content: center;
        }


        .pagination-wrapper svg {
            width: 18px;

            height: 18px;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .footer {
            text-align: center;

            color: #a8a29e;

            font-size: 9px;

            padding-top: 25px;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 900px) {

            .summary {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }

        }


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


            .page-header {
                align-items: flex-start;

                flex-direction: column;
            }


            .summary {
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


            <!-- DASHBOARD -->

            <a href="{{ route('admin.dashboard') }}">

                <span class="menu-icon">
                    🏠
                </span>

                <span>
                    Dashboard
                </span>

            </a>


            <!-- DAFTAR RESEP -->

            <a href="{{ route('admin.recipes.index') }}">

                <span class="menu-icon">
                    🍲
                </span>

                <span>
                    Daftar Resep
                </span>

            </a>


            <!-- TAMBAH RESEP -->

            <a href="{{ route('admin.recipes.create') }}">

                <span class="menu-icon">
                    ＋
                </span>

                <span>
                    Tambah Resep
                </span>

            </a>


            <!-- DATA USER -->

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


            <!-- LIHAT WEBSITE -->

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


    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="main">


        <!-- TOPBAR -->

        <header class="topbar">


            <div class="page-name">

                Data User

            </div>


            <div class="topbar-right">

                {{ now()->format('d M Y') }}

            </div>


        </header>


        <!-- CONTENT -->

        <section class="content">


            <!-- =================================================
                 SUCCESS
            ================================================== -->

            @if(session('success'))

                <div class="alert alert-success">

                    ✓
                    {{ session('success') }}

                </div>

            @endif


            <!-- =================================================
                 ERROR
            ================================================== -->

            @if(session('error'))

                <div class="alert alert-error">

                    !
                    {{ session('error') }}

                </div>

            @endif


            <!-- =================================================
                 HEADER
            ================================================== -->

            <div class="page-header">


                <div>

                    <h1>

                        Data User

                    </h1>


                    <p>

                        Kelola akun pengguna yang terdaftar di website ResepKu.

                    </p>

                </div>


                <!-- TAMBAH USER -->

                <a
                    href="{{ route('admin.users.create') }}"
                    class="add-user-button"
                >

                    ＋ Tambah User

                </a>


            </div>


            <!-- =================================================
                 SUMMARY
            ================================================== -->

            <div class="summary">


                <div class="summary-card">


                    <div class="summary-label">

                        Total User

                    </div>


                    <div class="summary-number">

                        {{ \App\Models\User::count() }}

                    </div>


                    <div class="summary-description">

                        Semua akun terdaftar

                    </div>


                </div>


                <div class="summary-card">


                    <div class="summary-label">

                        Admin

                    </div>


                    <div class="summary-number">

                        {{ \App\Models\User::where('role', 'admin')->count() }}

                    </div>


                    <div class="summary-description">

                        Akun dengan akses admin

                    </div>


                </div>


                <div class="summary-card">


                    <div class="summary-label">

                        User

                    </div>


                    <div class="summary-number">

                        {{ \App\Models\User::where('role', 'user')->count() }}

                    </div>


                    <div class="summary-description">

                        Akun pengguna biasa

                    </div>


                </div>


            </div>


            <!-- =================================================
                 TABLE
            ================================================== -->

            <div class="table-card">


                <div class="table-header">


                    <div>

                        <div class="table-title">

                            Daftar Pengguna

                        </div>


                        <div class="table-subtitle">

                            Semua akun yang tersedia di sistem.

                        </div>

                    </div>


                </div>


                @if($users->count() > 0)


                    <div class="table-wrapper">


                        <table>


                            <thead>

                                <tr>

                                    <th>
                                        USER
                                    </th>

                                    <th>
                                        ROLE
                                    </th>

                                    <th>
                                        BERGABUNG
                                    </th>

                                    <th>
                                        AKSI
                                    </th>

                                </tr>

                            </thead>


                            <tbody>


                                @foreach($users as $user)


                                    <tr>


                                        <!-- USER -->

                                        <td>


                                            <div class="user-cell">


                                                <div class="user-avatar">

                                                    {{ strtoupper(substr($user->name, 0, 1)) }}

                                                </div>


                                                <div class="user-details">


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


                                        <!-- ROLE -->

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


                                        <!-- TANGGAL -->

                                        <td>


                                            <span class="date-text">

                                                {{ $user->created_at?->format('d M Y') ?? '-' }}

                                            </span>


                                        </td>


                                        <!-- AKSI -->

                                        <td>


                                            <div class="action-group">


                                                <!-- EDIT -->

                                                <a
                                                    href="{{ route('admin.users.edit', $user->id) }}"
                                                    class="action-button edit-button"
                                                >

                                                    Edit

                                                </a>


                                                <!-- HAPUS -->

                                                @if($user->id !== auth()->id())


                                                    <form
                                                        action="{{ route('admin.users.destroy', $user->id) }}"
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


                    <!-- PAGINATION -->

                    <div class="pagination-wrapper">

                        {{ $users->links() }}

                    </div>


                @else


                    <!-- EMPTY -->

                    <div class="empty">


                        <div class="empty-icon">

                            👥

                        </div>


                        <h2>

                            Belum Ada User

                        </h2>


                        <p>

                            Belum ada pengguna lain yang terdaftar.

                        </p>


                        <a
                            href="{{ route('admin.users.create') }}"
                            class="add-user-button"
                        >

                            ＋ Tambah User

                        </a>


                    </div>


                @endif


            </div>


            <!-- FOOTER -->

            <div class="footer">

                © {{ date('Y') }} ResepKu.
                Panel Administrasi.

            </div>


        </section>


    </main>


</div>

</body>

</html>