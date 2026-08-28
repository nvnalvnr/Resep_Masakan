<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Profil | ResepKu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

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


        body {
            font-family: "DM Sans", Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
        }


        a {
            color: inherit;
            text-decoration: none;
        }


        button,
        input {
            font-family: inherit;
        }


        .page {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 235px 1fr;
        }


        /* SIDEBAR */

        .sidebar {
            background: var(--surface-soft);
            border-right: 1px solid var(--border);
            padding: 30px 22px;
            min-height: 100vh;
            height: 100vh;
            position: sticky;
            top: 0;
            display: flex;
            flex-direction: column;
        }


        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            padding-bottom: 30px;
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
        }


        .brand-name {
            font-family: "Playfair Display", Georgia, serif;
            font-size: 21px;
            font-weight: 600;
        }


        .brand-sub {
            display: block;
            color: var(--muted);
            font-size: 8px;
            text-transform: uppercase;
            letter-spacing: 1.4px;
            margin-top: 2px;
        }


        .menu-title {
            color: #968d82;
            font-size: 9px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin: 26px 9px 10px;
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
            padding: 11px 10px;
            color: var(--muted);
            font-size: 11px;
            border-left: 2px solid transparent;
            transition: .2s ease;
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
            font-size: 13px;
        }


        .sidebar-bottom {
            margin-top: auto;
            padding-top: 18px;
            border-top: 1px solid var(--border);
        }


        .user-mini {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
        }


        .avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: var(--soft-brown);
            color: var(--brown);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 700;
        }


        .user-mini-info {
            min-width: 0;
        }


        .user-mini-info strong {
            display: block;
            font-size: 10px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }


        .user-mini-info span {
            display: block;
            color: var(--muted);
            font-size: 8px;
            margin-top: 2px;
        }


        .logout-button {
            width: 100%;
            background: transparent;
            color: var(--muted);
            border: 1px solid var(--border);
            padding: 9px;
            cursor: pointer;
            font-size: 9px;
            text-align: left;
        }


        .logout-button:hover {
            color: #9b3d2d;
            background: var(--soft-red);
        }


        /* MAIN */

        .main {
            min-width: 0;
            padding: 35px 48px 50px;
        }


        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--border);
        }


        .eyebrow {
            color: var(--terracotta);
            font-size: 8px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 7px;
        }


        .topbar h1 {
            font-family: "Playfair Display", Georgia, serif;
            font-size: 35px;
            font-weight: 500;
        }


        .topbar p {
            color: var(--muted);
            font-size: 10px;
            margin-top: 7px;
        }


        .date {
            color: var(--muted);
            font-size: 9px;
            border-bottom: 1px solid var(--brown);
            padding-bottom: 4px;
        }


        /* INTRO */

        .intro {
            display: grid;
            grid-template-columns: 1.4fr .8fr;
            gap: 30px;
            margin: 27px 0 28px;
            border-bottom: 1px solid var(--border);
            padding-bottom: 28px;
        }


        .intro h2 {
            font-family: "Playfair Display", Georgia, serif;
            font-size: 26px;
            font-weight: 500;
            line-height: 1.3;
        }


        .intro h2 span {
            color: var(--terracotta);
        }


        .intro-copy {
            color: var(--muted);
            font-size: 10px;
            line-height: 1.8;
            max-width: 380px;
            justify-self: end;
        }


        /* PROFILE HEADER */

        .profile-header {
            display: flex;
            align-items: center;
            gap: 17px;

            border-top: 1px solid var(--text);
            border-bottom: 1px solid var(--border);

            padding: 18px 0;

            margin-bottom: 28px;
        }


        .profile-avatar {
            width: 58px;
            height: 58px;

            border-radius: 50%;

            background: var(--brown);
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-family: "Playfair Display", Georgia, serif;

            font-size: 24px;
        }


        .profile-name {
            font-family: "Playfair Display", Georgia, serif;
            font-size: 23px;
            font-weight: 500;
        }


        .profile-email {
            color: var(--muted);
            font-size: 9px;
            margin-top: 3px;
        }


        .profile-role {
            color: var(--terracotta);
            font-size: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            margin-top: 5px;
        }


        /* SECTION */

        .profile-sections {
            max-width: 900px;
        }


        .section {
            margin-bottom: 24px;
        }


        .section-heading {
            margin-bottom: 11px;
        }


        .section-label {
            color: var(--terracotta);
            font-size: 8px;
            text-transform: uppercase;
            letter-spacing: 1.6px;
            font-weight: 700;
        }


        .section-title {
            font-family: "Playfair Display", Georgia, serif;
            font-size: 22px;
            font-weight: 500;
            margin-top: 3px;
        }


        .section-description {
            color: var(--muted);
            font-size: 9px;
            margin-top: 3px;
        }


        .profile-card {
            background: var(--surface);
            border: 1px solid var(--border);
            padding: 24px;
        }


        /* Breeze partial overrides */

        .profile-card h2,
        .profile-card h3 {
            color: var(--text) !important;
            font-family: "Playfair Display", Georgia, serif !important;
            font-weight: 500 !important;
        }


        .profile-card label {
            color: var(--text) !important;
            font-family: "DM Sans", Arial, sans-serif !important;
            font-size: 10px !important;
        }


        .profile-card input,
        .profile-card select {
            width: 100% !important;
            border: 1px solid var(--border) !important;
            background: #fffefa !important;
            color: var(--text) !important;
            font-size: 10px !important;
            border-radius: 0 !important;
            box-shadow: none !important;
        }


        .profile-card input:focus,
        .profile-card select:focus {
            border-color: var(--brown) !important;
            box-shadow: none !important;
            outline: none !important;
        }


        .profile-card p {
            font-family: "DM Sans", Arial, sans-serif !important;
            color: var(--muted) !important;
            font-size: 9px !important;
        }


        .profile-card button {
            background: var(--brown) !important;
            color: white !important;
            border: 1px solid var(--brown) !important;
            border-radius: 0 !important;
            font-size: 9px !important;
        }


        .profile-card button:hover {
            background: var(--terracotta) !important;
            border-color: var(--terracotta) !important;
        }


        .profile-card a {
            color: var(--brown);
            font-size: 9px;
        }


        /* FOOTER */

        .footer {
            border-top: 1px solid var(--border);
            margin-top: 45px;
            padding-top: 17px;
            color: var(--muted);
            font-size: 8px;
            display: flex;
            justify-content: space-between;
        }


        .footer strong {
            color: var(--brown);
        }


        @media (max-width: 900px) {

            .page {
                grid-template-columns: 200px 1fr;
            }


            .main {
                padding: 30px;
            }


            .intro {
                grid-template-columns: 1fr;
            }


            .intro-copy {
                justify-self: start;
            }

        }


        @media (max-width: 800px) {

            .page {
                display: block;
            }


            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
                min-height: auto;
                padding: 18px 20px;
                border-right: none;
                border-bottom: 1px solid var(--border);
            }


            .brand {
                padding-bottom: 15px;
                border-bottom: none;
            }


            .menu-title,
            .sidebar-bottom {
                display: none;
            }


            .menu {
                flex-direction: row;
                overflow-x: auto;
                margin-top: 7px;
            }


            .menu a {
                white-space: nowrap;
                border-left: none;
                border-bottom: 2px solid transparent;
            }


            .menu a.active {
                border-left: none;
                border-bottom-color: var(--brown);
            }


            .main {
                padding: 27px 20px 45px;
            }

        }


        @media (max-width: 600px) {

            .topbar {
                display: block;
            }


            .date {
                display: inline-block;
                margin-top: 12px;
            }


            .topbar h1 {
                font-size: 30px;
            }


            .profile-header {
                align-items: flex-start;
            }


            .profile-card {
                padding: 18px;
            }


            .footer {
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
                <span class="menu-icon">⌂</span>
                Dashboard
            </a>


            <a href="{{ route('recipes.my') }}">
                <span class="menu-icon">≡</span>
                Resep Saya
            </a>


            <a href="{{ route('recipes.create') }}">
                <span class="menu-icon">+</span>
                Tambah Resep
            </a>


            <a href="{{ route('user.favorites') }}">
                <span class="menu-icon">♡</span>
                Resep Tersimpan
            </a>


            <a
                href="{{ route('profile.edit') }}"
                class="active"
            >
                <span class="menu-icon">○</span>
                Profil
            </a>


            <a href="{{ route('recipes.index') }}">
                <span class="menu-icon">↗</span>
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
                        {{ auth()->user()->role === 'admin'
                            ? 'Administrator'
                            : 'Pengguna'
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
                    class="logout-button"
                >

                    🚪 &nbsp; Keluar

                </button>


            </form>


        </div>


    </aside>



    {{-- MAIN --}}

    <main class="main">


        <header class="topbar">


            <div>


                <div class="eyebrow">
                    ResepKu / User / Profil
                </div>


                <h1>
                    Profil
                </h1>


                <p>
                    Kelola informasi akun dan keamananmu.
                </p>


            </div>


            <div class="date">

                {{ now()->translatedFormat('l, d F Y') }}

            </div>


        </header>



        <section class="intro">


            <h2>

                Satu tempat untuk
                <span>mengatur akunmu</span>.

            </h2>


            <p class="intro-copy">

                Perbarui nama dan email, ganti password,
                atau hapus akun dari halaman ini.

            </p>


        </section>



        {{-- PROFILE HEADER --}}

        <div class="profile-header">


            <div class="profile-avatar">

                {{ strtoupper(
                    substr(
                        auth()->user()->name,
                        0,
                        1
                    )
                ) }}

            </div>


            <div>


                <div class="profile-name">

                    {{ auth()->user()->name }}

                </div>


                <div class="profile-email">

                    {{ auth()->user()->email }}

                </div>


                <div class="profile-role">

                    {{ auth()->user()->role === 'admin'
                        ? 'Administrator'
                        : 'Pengguna'
                    }}

                </div>


            </div>


        </div>



        {{-- PROFILE CONTENT --}}

        <div class="profile-sections">


            {{-- INFORMASI PROFIL --}}

            <section class="section">


                <div class="section-heading">

                    <div class="section-label">
                        Account
                    </div>

                    <h2 class="section-title">
                        Informasi Profil
                    </h2>

                    <p class="section-description">
                        Ubah nama dan alamat email akunmu.
                    </p>

                </div>


                <div class="profile-card">

                    @include(
                        'profile.partials.update-profile-information-form'
                    )

                </div>


            </section>



            {{-- PASSWORD --}}

            <section class="section">


                <div class="section-heading">

                    <div class="section-label">
                        Security
                    </div>

                    <h2 class="section-title">
                        Password
                    </h2>

                    <p class="section-description">
                        Gunakan password yang kuat untuk menjaga akunmu.
                    </p>

                </div>


                <div class="profile-card">

                    @include(
                        'profile.partials.update-password-form'
                    )

                </div>


            </section>



            {{-- HAPUS AKUN --}}

            <section class="section">


                <div class="section-heading">

                    <div class="section-label">
                        Danger Zone
                    </div>

                    <h2 class="section-title">
                        Hapus Akun
                    </h2>

                    <p class="section-description">
                        Tindakan ini bersifat permanen.
                    </p>

                </div>


                <div class="profile-card">

                    @include(
                        'profile.partials.delete-user-form'
                    )

                </div>


            </section>


        </div>



        <footer class="footer">


            <span>
                © {{ date('Y') }} <strong>ResepKu</strong>
            </span>


            <span>
                Culinary Journal · Profil
            </span>


        </footer>


    </main>


</div>


</body>

</html>