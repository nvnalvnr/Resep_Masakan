<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data User - ResepKu</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

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

        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */

        .sidebar {
            width: 245px;
            background: #fff;
            border-right: 1px solid #eee8e1;
            padding: 25px 18px;

            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;

            z-index: 10;
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

            transition: .2s;
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

        /* BOTTOM */

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
        }

        /* MAIN */

        .main {
            margin-left: 245px;

            width: calc(100% - 245px);

            padding: 30px 35px 50px;
        }

        /* HEADER */

        .topbar {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 25px;
        }

        .welcome h1 {
            font-size: 25px;
            margin-bottom: 6px;
        }

        .welcome p {
            font-size: 13px;
            color: #a8a29e;
        }

        .back-btn {
            background: #fff;

            border: 1px solid #eee8e1;

            color: #57534e;

            padding: 10px 15px;

            border-radius: 9px;

            font-size: 12px;
        }

        .back-btn:hover {
            background: #fff7ed;
            color: #ea580c;
        }

        /* CARD */

        .card {
            background: #fff;

            border: 1px solid #eee8e1;

            border-radius: 16px;

            padding: 22px;
        }

        .card-header {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 20px;
        }

        .card-header h2 {
            font-size: 17px;
        }

        .card-header span {
            font-size: 12px;
            color: #a8a29e;
        }

        /* ALERT */

        .alert-success {
            background: #dcfce7;

            color: #166534;

            border-radius: 10px;

            padding: 12px 15px;

            font-size: 12px;

            margin-bottom: 15px;
        }

        .alert-error {
            background: #ffe4e6;

            color: #be123c;

            border-radius: 10px;

            padding: 12px 15px;

            font-size: 12px;

            margin-bottom: 15px;
        }

        /* TABLE */

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;

            border-collapse: collapse;
        }

        th {
            background: #fafaf9;

            color: #78716c;

            font-size: 11px;

            text-align: left;

            padding: 13px;

            border-bottom: 1px solid #eee8e1;
        }

        td {
            padding: 14px 13px;

            border-bottom: 1px solid #f5f5f4;

            font-size: 12px;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .user-info {
            display: flex;

            align-items: center;

            gap: 10px;
        }

        .user-avatar {
            width: 35px;
            height: 35px;

            border-radius: 50%;

            background: #ffedd5;

            display: flex;

            align-items: center;
            justify-content: center;

            color: #9a3412;

            font-weight: bold;
        }

        .user-name {
            font-weight: bold;
            margin-bottom: 3px;
        }

        .user-email {
            color: #a8a29e;
            font-size: 11px;
        }

        /* ROLE */

        .role {
            display: inline-block;

            padding: 5px 9px;

            border-radius: 20px;

            font-size: 10px;

            font-weight: bold;
        }

        .role-admin {
            background: #f3e8ff;
            color: #7e22ce;
        }

        .role-user {
            background: #dbeafe;
            color: #1d4ed8;
        }

        /* RECIPE */

        .recipe-count {
            font-weight: bold;
        }

        /* BUTTON */

        .actions {
            display: flex;
            gap: 6px;
        }

        .btn {
            border: none;

            padding: 7px 10px;

            border-radius: 7px;

            font-size: 10px;

            cursor: pointer;
        }

        .btn-edit {
            background: #ffedd5;
            color: #c2410c;
        }

        .btn-delete {
            background: #ffe4e6;
            color: #be123c;
        }

        .btn:hover {
            opacity: .8;
        }

        /* EMPTY */

        .empty {
            text-align: center;

            padding: 40px;

            color: #a8a29e;

            font-size: 13px;
        }

        /* PAGINATION */

        .pagination {
            margin-top: 20px;

            display: flex;

            justify-content: center;
        }

        .pagination nav {
            display: flex;
            gap: 5px;
        }

        /* FOOTER */

        footer {
            text-align: center;

            padding-top: 30px;

            color: #a8a29e;

            font-size: 11px;
        }

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
            }

            .menu a {
                justify-content: center;
            }

            .main {
                margin-left: 70px;

                width: calc(100% - 70px);

                padding: 22px 18px;
            }

        }

    </style>

</head>


<body>


<div class="layout">


    <!-- SIDEBAR -->

    <x-role-sidebar active="users" />



    <!-- MAIN -->

    <main class="main">


        <!-- TOPBAR -->

        <div class="topbar">


            <div class="welcome">

                <h1>
                    Data User
                </h1>

                <p>
                    Kelola pengguna yang terdaftar di website ResepKu.
                </p>

            </div>


            <a href="{{ route('admin.users.create') }}" class="back-btn">
                + Tambah User
            </a>


        </div>



        <!-- CARD -->

        <div class="card">


            <div class="card-header">

                <h2>
                    Daftar Pengguna
                </h2>

                <span>
                    {{ $users->total() }} pengguna
                </span>

            </div>


            <!-- SUCCESS -->

            @if(session('success'))

                <div class="alert-success">
                    {{ session('success') }}
                </div>

            @endif


            <!-- ERROR -->

            @if(session('error'))

                <div class="alert-error">
                    {{ session('error') }}
                </div>

            @endif


            <!-- TABLE -->

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
                                    JUMLAH RESEP
                                </th>

                                <th>
                                    TERDAFTAR
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

                                        <div class="user-info">

                                            <div class="user-avatar">

                                                {{ strtoupper(substr($user->name, 0, 1)) }}

                                            </div>


                                            <div>

                                                <div class="user-name">

                                                    {{ $user->name }}

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

                                            <span class="role role-admin">
                                                ADMIN
                                            </span>

                                        @else

                                            <span class="role role-user">
                                                USER
                                            </span>

                                        @endif

                                    </td>


                                    <!-- JUMLAH RESEP -->

                                    <td>

                                        <span class="recipe-count">

                                            {{ $user->recipes_count }}

                                            resep

                                        </span>

                                    </td>


                                    <!-- TANGGAL -->

                                    <td>

                                        {{ $user->created_at->format('d M Y') }}

                                    </td>


                                    <!-- AKSI -->

                                    <td>

                                        <div class="actions">


                                            <!-- EDIT -->

                                            <a
                                                href="{{ route('admin.users.edit', $user) }}"
                                                class="btn btn-edit"
                                            >
                                                Edit
                                            </a>


                                            <!-- DELETE -->

                                            @if($user->id !== auth()->id())

                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.users.destroy', $user) }}"
                                                    onsubmit="return confirm('Yakin ingin menghapus user ini?')"
                                                >

                                                    @csrf

                                                    @method('DELETE')

                                                    <button
                                                        type="submit"
                                                        class="btn btn-delete"
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

                <div class="pagination">

                    {{ $users->links() }}

                </div>


            @else

                <div class="empty">

                    Belum ada user yang terdaftar.

                </div>

            @endif


        </div>


        <footer>

            © {{ date('Y') }} ResepKu.
            Admin Dashboard.

        </footer>


    </main>


</div>


</body>

</html>
