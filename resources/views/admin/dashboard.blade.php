
<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Dashboard - ResepKu</title>

<link
    rel="preconnect"
    href="https://fonts.googleapis.com"
>

<link
    rel="preconnect"
    href="https://fonts.gstatic.com"
>

<link
    rel="preconnect"
    href="https://fonts.googleapis.com"
>

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
        Helvetica,
        sans-serif;

    background:
        var(--paper);

    color:
        var(--ink);

    font-size:
        14px;

    line-height:
        1.65;
}

a {
    color:
        inherit;

    text-decoration:
        none;
}

button {
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
        1.4px;

    text-transform:
        uppercase;

    margin-top:
        3px;
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
        4px;
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

    line-height:
        1.4;

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

    padding-top:
        18px;
}

.admin-user {
    display:
        flex;

    align-items:
        center;

    gap:
        10px;

    padding-top:
        18px;

    border-top:
        1px solid var(--line);
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

    align-items:
        flex-start;

    justify-content:
        space-between;

    gap:
        25px;

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
        38px;

    font-weight:
        500;

    line-height:
        1.15;
}

.top p {
    color:
        var(--muted);

    font-size:
        13px;

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

    padding-bottom:
        5px;

    border-bottom:
        1px solid var(--brown);
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
    max-width:
        610px;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size:
        28px;

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
   STATISTICS
====================================================== */

.numbers {
    display:
        grid;

    grid-template-columns:
        repeat(3, minmax(0, 1fr));

    margin-bottom:
        38px;

    border-top:
        1px solid var(--ink);

    border-bottom:
        1px solid var(--line);
}

.number {
    border-right:
        1px solid var(--line);
}

.number:last-child {
    border-right:
        none;
}

.number-link {
    display:
        flex;

    flex-direction:
        column;

    justify-content:
        flex-start;

    width:
        100%;

    min-height:
        150px;

    height:
        100%;

    padding:
        19px 20px 20px;

    color:
        inherit;

    cursor:
        pointer;

    transition:
        .2s ease;
}

.number-link:hover {
    background:
        #eee7dc;
}

.number-link:focus-visible {
    outline:
        2px solid var(--terracotta);

    outline-offset:
        -2px;
}

.number-link:hover .number-value {
    color:
        var(--terracotta);

    transform:
        translateX(2px);
}

.number-label {
    color:
        var(--muted);

    font-size:
        10px;

    font-weight:
        600;

    letter-spacing:
        1.2px;

    text-transform:
        uppercase;

    margin-bottom:
        8px;
}

.number-value {
    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size:
        33px;

    font-weight:
        500;

    transition:
        .2s ease;
}

.number-note {
    color:
        var(--muted);

    font-size:
        10px;

    margin-top:
        3px;
}

.number-action {
    color:
        var(--terracotta);

    font-size:
        10px;

    font-weight:
        700;

    margin-top:
        8px;
}


/* =====================================================
   CONTENT
====================================================== */

.content-grid {
    display:
        grid;

    grid-template-columns:
        minmax(0, 1.65fr)
        minmax(250px, .75fr);

    gap:
        45px;
}

.section-heading {
    display:
        flex;

    align-items:
        baseline;

    justify-content:
        space-between;

    gap:
        15px;

    margin-bottom:
        18px;
}

.section-heading h3 {
    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size:
        24px;

    font-weight:
        500;
}

.section-heading a {
    flex-shrink:
        0;

    color:
        var(--terracotta);

    font-size:
        11px;

    font-weight:
        700;
}


/* =====================================================
   RECIPE GRID
====================================================== */

.recipe-grid {
    display:
        grid;

    grid-template-columns:
        repeat(3, minmax(0, 1fr));

    gap:
        15px;
}

.recipe {
    min-width:
        0;

    overflow:
        hidden;

    background:
        var(--white);

    border:
        1px solid var(--line);

    transition:
        .2s ease;
}

.recipe:hover {
    transform:
        translateY(-3px);

    border-color:
        #c5b7a5;

    box-shadow:
        0 7px 18px rgba(41, 35, 31, .05);
}

.recipe-image,
.no-image {
    width:
        100%;

    height:
        155px;
}

.recipe-image {
    display:
        block;

    object-fit:
        cover;
}

.no-image {
    display:
        flex;

    align-items:
        center;

    justify-content:
        center;

    background:
        #e9e3d9;

    color:
        #91887d;

    font-size:
        11px;
}

.recipe-body {
    padding:
        14px;
}

.recipe-number {
    color:
        var(--terracotta);

    font-size:
        10px;

    font-weight:
        700;

    margin-bottom:
        6px;
}

.recipe-title {
    min-height:
        44px;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size:
        18px;

    font-weight:
        500;

    line-height:
        1.3;
}

.recipe-author {
    color:
        var(--muted);

    font-size:
        10px;

    margin-top:
        8px;
}

.recipe-link {
    display:
        inline-block;

    margin-top:
        12px;

    padding-bottom:
        2px;

    border-bottom:
        1px solid var(--brown);

    color:
        var(--brown);

    font-size:
        10px;

    font-weight:
        700;
}

.recipe-link:hover {
    color:
        var(--terracotta);

    border-color:
        var(--terracotta);
}


/* =====================================================
   MANAGE
====================================================== */

.manage {
    border-top:
        1px solid var(--ink);
}

.manage-link {
    display:
        flex;

    align-items:
        center;

    justify-content:
        space-between;

    gap:
        12px;

    padding:
        16px 0;

    border-bottom:
        1px solid var(--line);

    font-size:
        12px;

    cursor:
        pointer;

    transition:
        .2s ease;
}

.manage-link:hover {
    color:
        var(--terracotta);

    padding-left:
        5px;
}

.manage-left {
    display:
        flex;

    align-items:
        center;

    gap:
        11px;

    min-width:
        0;
}

.manage-icon {
    width:
        29px;

    height:
        29px;

    flex-shrink:
        0;

    border:
        1px solid var(--line);

    display:
        flex;

    align-items:
        center;

    justify-content:
        center;

    font-size:
        11px;
}

.manage-description {
    display:
        block;

    color:
        var(--muted);

    font-size:
        10px;

    margin-top:
        2px;
}

.manage-arrow {
    flex-shrink:
        0;

    color:
        var(--muted);

    font-size:
        13px;
}


/* =====================================================
   EMPTY
====================================================== */

.empty {
    padding:
        45px 20px;

    border:
        1px dashed #cfc6b9;

    color:
        var(--muted);

    text-align:
        center;

    font-size:
        12px;
}

.empty a {
    display:
        inline-block;

    margin-top:
        12px;

    padding-bottom:
        2px;

    border-bottom:
        1px solid var(--brown);

    color:
        var(--brown);

    font-size:
        10px;
}


/* =====================================================
   FOOTER
====================================================== */

footer {
    display:
        flex;

    align-items:
        center;

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
   TABLET
====================================================== */

@media (max-width: 1100px) {

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
        padding:
            30px;
    }

    .recipe-grid {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));
    }

}


/* =====================================================
   MOBILE
====================================================== */

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

        padding-bottom:
            2px;
    }

    .nav a {
        white-space:
            nowrap;

        border-left:
            none;

        border-bottom:
            2px solid transparent;

        font-size:
            13px;
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

    .intro {
        grid-template-columns:
            1fr;

        gap:
            17px;
    }

    .intro-text {
        justify-self:
            start;
    }

    .content-grid {
        grid-template-columns:
            1fr;

        gap:
            35px;
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
            31px;
    }

    .top p {
        font-size:
            12px;
    }

    .intro h2 {
        font-size:
            24px;
    }

    .intro-text {
        font-size:
            11px;
    }

    .numbers {
        grid-template-columns:
            1fr;
    }

    .number {
        border-right:
            none;

        border-bottom:
            1px solid var(--line);
    }

    .number:last-child {
        border-bottom:
            none;
    }

    .recipe-grid {
        grid-template-columns:
            1fr;
    }

    footer {
        display:
            block;

        line-height:
            1.8;
    }

}

</style>

</head>

<body>

<div class="page">


<!-- SIDEBAR -->

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
            class="active"
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



<!-- MAIN -->

<main class="main">


    <!-- HEADER -->

    <header class="top">

        <div>

            <div class="eyebrow">
                ResepKu / Admin
            </div>

            <h1>
                Dashboard
            </h1>

            <p>
                Ruang kerja untuk mengelola koleksi resep dan pengguna.
            </p>

        </div>


        <div class="date">

            {{ now()->translatedFormat('l, d F Y') }}

        </div>

    </header>



    <!-- INTRO -->

    <section class="intro">

        <h2>

            Selamat datang kembali,
            <em>{{ auth()->user()->name }}</em>.

            Mari rapikan koleksi resep hari ini.

        </h2>


        <p class="intro-text">

            Semua aktivitas utama website ResepKu
            tersedia dari satu tempat. Pantau resep,
            pengguna, dan tambahkan koleksi baru
            kapan saja.

        </p>

    </section>



    <!-- STATISTICS -->

    <section class="numbers">


        <!-- TOTAL RESEP -->

        <div class="number">

            <a
                href="{{ route('admin.recipes.index') }}"
                class="number-link"
            >

                <div class="number-label">
                    Total Resep
                </div>

                <div class="number-value">

                    {{ $totalRecipes }}

                </div>

                <div class="number-note">
                    seluruh koleksi resep
                </div>

                <div class="number-action">
                    Kelola resep →
                </div>

            </a>

        </div>



        <!-- TOTAL PENGGUNA -->

        <div class="number">

            <a
                href="{{ route('admin.users.index') }}"
                class="number-link"
            >

                <div class="number-label">
                    Total Pengguna
                </div>

                <div class="number-value">

                    {{ $totalUsers }}

                </div>

                <div class="number-note">
                    akun terdaftar
                </div>

                <div class="number-action">
                    Kelola pengguna →
                </div>

            </a>

        </div>



        <!-- RESEP HARI INI -->

        <div class="number">

            <a
                href="{{ route(
                    'admin.recipes.index',
                    ['today' => 1]
                ) }}"
                class="number-link"
            >

                <div class="number-label">
                    Resep Hari Ini
                </div>

                <div class="number-value">

                    {{ $todayRecipes }}

                </div>

                <div class="number-note">
                    resep baru hari ini
                </div>

                <div class="number-action">
                    Lihat hari ini →
                </div>

            </a>

        </div>

    </section>



    <!-- CONTENT -->

    <div class="content-grid">


        <!-- RESEP TERBARU -->

        <section>

            <div class="section-heading">

                <h3>
                    Resep terbaru
                </h3>


                <a
                    href="{{ route('admin.recipes.index') }}"
                >

                    Lihat semua →

                </a>

            </div>


            @if ($latestRecipes->count())


                <div class="recipe-grid">


                    @foreach (
                        $latestRecipes
                        as $index => $recipe
                    )

                        <article class="recipe">


                            @if ($recipe->image)

                                <img
                                    src="{{ $recipe->imageUrl() }}"
                                    alt="{{ $recipe->title }}"
                                    class="recipe-image"
                                >

                            @else

                                <div class="no-image">

                                    Tidak ada foto

                                </div>

                            @endif


                            <div class="recipe-body">


                                <div class="recipe-number">

                                    {{ str_pad(
                                        $index + 1,
                                        2,
                                        '0',
                                        STR_PAD_LEFT
                                    ) }}

                                </div>


                                <h4 class="recipe-title">

                                    {{ $recipe->title }}

                                </h4>


                                <p class="recipe-author">

                                    Oleh
                                    {{ $recipe->user->name ?? 'User' }}

                                </p>


                                <a
                                    href="{{ route(
                                        'admin.recipes.show',
                                        $recipe
                                    ) }}"
                                    class="recipe-link"
                                >

                                    Buka resep →

                                </a>


                            </div>


                        </article>


                    @endforeach


                </div>


            @else


                <div class="empty">

                    Belum ada resep di dalam koleksi.

                    <br>

                    <a
                        href="{{ route('recipes.create') }}"
                    >

                        Tambahkan resep pertama →

                    </a>

                </div>


            @endif


        </section>



        <!-- KELOLA -->

        <section>


            <div class="section-heading">

                <h3>
                    Kelola
                </h3>

            </div>


            <div class="manage">


                <!-- SEMUA RESEP -->

                <a
                    href="{{ route('admin.recipes.index') }}"
                    class="manage-link"
                >

                    <div class="manage-left">

                        <div class="manage-icon">
                            ≡
                        </div>


                        <div>

                            <strong>
                                Semua Resep
                            </strong>

                            <span class="manage-description">
                                Kelola koleksi resep
                            </span>

                        </div>

                    </div>


                    <span class="manage-arrow">
                        →
                    </span>

                </a>



                <!-- TAMBAH RESEP -->

                <a
                    href="{{ route('recipes.create') }}"
                    class="manage-link"
                >

                    <div class="manage-left">

                        <div class="manage-icon">
                            +
                        </div>


                        <div>

                            <strong>
                                Tambah Resep
                            </strong>

                            <span class="manage-description">
                                Buat resep baru
                            </span>

                        </div>

                    </div>


                    <span class="manage-arrow">
                        →
                    </span>

                </a>



                <!-- DATA USER -->

                <a
                    href="{{ route('admin.users.index') }}"
                    class="manage-link"
                >

                    <div class="manage-left">

                        <div class="manage-icon">
                            ○
                        </div>


                        <div>

                            <strong>
                                Data User
                            </strong>

                            <span class="manage-description">
                                Kelola pengguna
                            </span>

                        </div>

                    </div>


                    <span class="manage-arrow">
                        →
                    </span>

                </a>



                <!-- WEBSITE -->

                <a
                    href="{{ route('recipes.index') }}"
                    class="manage-link"
                >

                    <div class="manage-left">

                        <div class="manage-icon">
                            ↗
                        </div>


                        <div>

                            <strong>
                                Lihat Website
                            </strong>


                            <span class="manage-description">
                                Buka halaman publik
                            </span>

                        </div>

                    </div>


                    <span class="manage-arrow">
                        →
                    </span>

                </a>


            </div>


        </section>


    </div>



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

