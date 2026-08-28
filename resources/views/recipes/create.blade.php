<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Resep | ResepKu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;1,500&display=swap"
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
            font-family: "DM Sans", Arial, sans-serif;
            background: var(--paper);
            color: var(--ink);
        }


        a {
            color: inherit;
            text-decoration: none;
        }


        button,
        input,
        textarea {
            font-family: inherit;
        }


        /* =====================================================
           LAYOUT
        ===================================================== */

        .page {
            min-height: 100vh;

            display: grid;

            grid-template-columns: 235px 1fr;
        }


        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sidebar {
            background: var(--paper-light);

            border-right: 1px solid var(--line);

            min-height: 100vh;

            padding: 30px 22px;

            position: sticky;

            top: 0;

            height: 100vh;

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
        ===================================================== */

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
        ===================================================== */

        .main {
            min-width: 0;

            padding: 36px 48px 45px;
        }


        /* =====================================================
           HEADER
        ===================================================== */

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
           FORM INTRO
        ===================================================== */

        .intro {
            display: grid;

            grid-template-columns: 1.5fr .8fr;

            gap: 35px;

            margin: 28px 0 30px;

            border-bottom: 1px solid var(--line);

            padding-bottom: 30px;
        }


        .intro h2 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 27px;

            font-weight: 500;

            line-height: 1.3;
        }


        .intro h2 em {
            color: var(--terracotta);
        }


        .intro-text {
            color: var(--muted);

            font-size: 12px;

            line-height: 1.8;

            max-width: 390px;

            justify-self: end;
        }


        /* =====================================================
           FORM
        ===================================================== */

        .form-wrapper {
            max-width: 900px;
        }


        .form-heading {
            display: flex;

            justify-content: space-between;

            align-items: baseline;

            margin-bottom: 18px;
        }


        .form-heading h3 {
            font-family: "Playfair Display", Georgia, serif;

            font-size: 23px;

            font-weight: 500;
        }


        .required-note {
            color: var(--muted);

            font-size: 9px;
        }


        .form-container {
            background: var(--white);

            border: 1px solid var(--line);

            padding: 27px;

            border-radius: 2px;
        }


        .form-group {
            margin-bottom: 24px;
        }


        .form-group:last-child {
            margin-bottom: 0;
        }


        label {
            display: block;

            font-size: 11px;

            font-weight: 700;

            letter-spacing: .3px;

            margin-bottom: 7px;
        }


        .label-description {
            color: var(--muted);

            font-size: 10px;

            line-height: 1.6;

            margin-bottom: 9px;
        }


        input[type="text"],
        textarea {
            width: 100%;

            border: 1px solid var(--line);

            background: #fffefb;

            color: var(--ink);

            padding: 12px 13px;

            font-size: 12px;

            outline: none;

            border-radius: 0;

            transition: .2s ease;
        }


        input[type="text"] {
            height: 44px;
        }


        textarea {
            min-height: 170px;

            resize: vertical;

            line-height: 1.7;
        }


        input[type="text"]:focus,
        textarea:focus {
            border-color: var(--terracotta);

            background: #fffdf8;
        }


        input::placeholder,
        textarea::placeholder {
            color: #aaa198;
        }


        /* =====================================================
           IMAGE
        ===================================================== */

        .image-box {
            border: 1px dashed #cfc6b9;

            background: #faf7f0;

            padding: 18px;
        }


        .image-box input[type="file"] {
            width: 100%;

            font-size: 11px;

            color: var(--muted);

            cursor: pointer;
        }


        .image-box input[type="file"]::file-selector-button {
            background: var(--brown);

            color: white;

            border: none;

            padding: 9px 13px;

            margin-right: 10px;

            cursor: pointer;

            font-family: inherit;

            font-size: 10px;
        }


        .image-info {
            color: var(--muted);

            font-size: 9px;

            line-height: 1.6;

            margin-top: 9px;
        }


        .image-preview {
            display: none;

            margin-top: 15px;

            padding-top: 15px;

            border-top: 1px solid var(--line);
        }


        .image-preview-label {
            color: var(--muted);

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 8px;
        }


        .image-preview img {
            width: 230px;

            height: 155px;

            object-fit: cover;

            display: block;

            border: 1px solid var(--line);
        }


        /* =====================================================
           ERROR
        ===================================================== */

        .error-box {
            background: #faf0ec;

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
           FORM FOOTER
        ===================================================== */

        .form-footer {
            display: flex;

            justify-content: space-between;

            align-items: center;

            border-top: 1px solid var(--line);

            padding-top: 20px;

            margin-top: 7px;
        }


        .form-footer-note {
            color: var(--muted);

            font-size: 9px;
        }


        .form-buttons {
            display: flex;

            gap: 9px;
        }


        .btn-cancel {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 10px 16px;

            border: 1px solid var(--line);

            background: transparent;

            color: var(--muted);

            font-size: 10px;

            transition: .2s;
        }


        .btn-cancel:hover {
            background: #f4eee5;

            color: var(--brown);
        }


        .btn-submit {
            border: 1px solid var(--brown);

            background: var(--brown);

            color: white;

            padding: 10px 18px;

            font-size: 10px;

            font-weight: 700;

            cursor: pointer;

            transition: .2s;
        }


        .btn-submit:hover {
            background: #54291d;

            border-color: #54291d;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

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
        ===================================================== */

        @media (max-width: 1100px) {

            .page {
                grid-template-columns: 200px 1fr;
            }

            .main {
                padding: 30px;
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


            .intro h2 {
                font-size: 23px;
            }


            .form-container {
                padding: 19px;
            }


            .form-footer {
                display: block;
            }


            .form-footer-note {
                margin-bottom: 14px;
            }


            .form-buttons {
                width: 100%;
            }


            .btn-cancel,
            .btn-submit {
                flex: 1;

                text-align: center;
            }


            .image-preview img {
                width: 100%;

                height: 190px;
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


        <!-- BRAND -->

        <a
            href="{{ auth()->user()->role === 'admin'
                ? route('admin.dashboard')
                : route('user.dashboard') }}"
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


            @if(auth()->user()->role === 'admin')


                <!-- ADMIN -->


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


                <a
                    href="{{ route('recipes.create') }}"
                    class="active"
                >

                    <span class="nav-icon">
                        +
                    </span>

                    <span>
                        Tambah Resep
                    </span>

                </a>


                <a href="{{ route('admin.users.index') }}">

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


            @else


                <!-- USER -->


                <a href="{{ route('user.dashboard') }}">

                    <span class="nav-icon">
                        ⌂
                    </span>

                    <span>
                        Dashboard
                    </span>

                </a>


                <a href="{{ route('recipes.my') }}">

                    <span class="nav-icon">
                        ≡
                    </span>

                    <span>
                        Resep Saya
                    </span>

                </a>


                <a href="{{ route('user.favorites') }}">

                    <span class="nav-icon">
                        ♡
                    </span>

                    <span>
                        Resep Tersimpan
                    </span>

                </a>


                <a
                    href="{{ route('recipes.create') }}"
                    class="active"
                >

                    <span class="nav-icon">
                        +
                    </span>

                    <span>
                        Tambah Resep
                    </span>

                </a>


                <a href="{{ route('profile.edit') }}">

                    <span class="nav-icon">
                        ○
                    </span>

                    <span>
                        Profil
                    </span>

                </a>


            @endif


        </nav>


        <!-- SIDEBAR BOTTOM -->

        <div class="sidebar-bottom">


            <div class="admin-user">


                <div class="avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>


                <div>

                    <strong>
                        {{ auth()->user()->name }}
                    </strong>

                    <span>

                        {{ auth()->user()->role === 'admin'
                            ? 'Administrator'
                            : 'User'
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


        <!-- HEADER -->

        <header class="top">


            <div>

                <div class="eyebrow">
                    ResepKu / {{ auth()->user()->role === 'admin' ? 'Admin' : 'User' }}
                </div>


                <h1>
                    Tambah Resep
                </h1>


                <p>
                    Tambahkan resep baru ke dalam koleksi ResepKu.
                </p>

            </div>


            <div class="date">

                {{ now()->translatedFormat('l, d F Y') }}

            </div>


        </header>


        <!-- INTRO -->

        <section class="intro">


            <h2>

                Bagikan resep masakan
                <em>favoritmu</em>
                ke dalam koleksi.

            </h2>


            <p class="intro-text">

                Lengkapi nama resep, bahan-bahan, langkah memasak,
                dan foto agar resep mudah dibaca dan ditemukan kembali.

            </p>


        </section>


        <!-- FORM -->

        <div class="form-wrapper">


            <div class="form-heading">


                <h3>
                    Informasi Resep
                </h3>


                <span class="required-note">
                    * Wajib diisi
                </span>


            </div>


            <!-- ERROR -->

            @if ($errors->any())

                <div class="error-box">


                    <strong>
                        Periksa kembali data yang dimasukkan.
                    </strong>


                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>


                </div>

            @endif


            <div class="form-container">


                <form
                    action="{{ route('recipes.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf


                    <!-- NAMA RESEP -->

                    <div class="form-group">


                        <label for="title">
                            Nama Resep *
                        </label>


                        <div class="label-description">
                            Gunakan nama yang singkat dan mudah dikenali.
                        </div>


                        <input
                            type="text"
                            id="title"
                            name="title"
                            value="{{ old('title') }}"
                            placeholder="Contoh: Japanese Potato Salad"
                            required
                        >


                        @error('title')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>


                    <!-- BAHAN -->

                    <div class="form-group">


                        <label for="ingredients">
                            Bahan-bahan *
                        </label>


                        <div class="label-description">
                            Tulis bahan beserta takarannya. Sebaiknya satu bahan per baris.
                        </div>


                        <textarea
                            id="ingredients"
                            name="ingredients"
                            placeholder="Contoh:

500 gram kentang
1 buah wortel
1 buah mentimun
2 butir telur
4 sdm mayones
1 sdt cuka
1 sdt gula
½ sdt garam
¼ sdt lada hitam"
                            required
                        >{{ old('ingredients') }}</textarea>


                        @error('ingredients')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>


                    <!-- LANGKAH -->

                    <div class="form-group">


                        <label for="steps">
                            Langkah-langkah *
                        </label>


                        <div class="label-description">
                            Jelaskan proses memasak secara berurutan dari awal sampai selesai.
                        </div>


                        <textarea
                            id="steps"
                            name="steps"
                            placeholder="Contoh:

1. Kupas kentang lalu potong menjadi beberapa bagian.
2. Rebus kentang sampai empuk.
3. Rebus telur sampai matang.
4. Iris tipis mentimun dan peras airnya.
5. Rebus wortel sebentar sampai agak lunak.
6. Haluskan kentang secara kasar.
7. Tambahkan cuka, gula, garam, dan lada.
8. Masukkan wortel, mentimun, telur, dan bahan lainnya.
9. Tambahkan mayones lalu aduk rata.
10. Simpan di kulkas sebelum disajikan."
                            required
                        >{{ old('steps') }}</textarea>


                        @error('steps')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>


                    <!-- FOTO -->

                    <div class="form-group">


                        <label for="image">
                            Foto Resep
                        </label>


                        <div class="label-description">
                            Foto akan membuat resep lebih menarik. Bagian ini boleh dikosongkan.
                        </div>


                        <div class="image-box">


                            <input
                                type="file"
                                id="image"
                                name="image"
                                accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                            >


                            <div class="image-info">

                                Format yang didukung:
                                JPG, JPEG, PNG, WEBP.
                                Maksimal ukuran 2 MB.

                            </div>


                            <div
                                class="image-preview"
                                id="imagePreview"
                            >


                                <div class="image-preview-label">
                                    Preview foto
                                </div>


                                <img
                                    id="previewImage"
                                    src=""
                                    alt="Preview foto resep"
                                >


                            </div>


                        </div>


                        @error('image')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>


                    <!-- FOOTER FORM -->

                    <div class="form-footer">


                        <div class="form-footer-note">

                            Pastikan semua informasi resep sudah benar.

                        </div>


                        <div class="form-buttons">


                            @if(auth()->user()->role === 'admin')

                                <a
                                    href="{{ route('admin.dashboard') }}"
                                    class="btn-cancel"
                                >
                                    Batal
                                </a>

                            @else

                                <a
                                    href="{{ route('user.dashboard') }}"
                                    class="btn-cancel"
                                >
                                    Batal
                                </a>

                            @endif


                            <button
                                type="submit"
                                class="btn-submit"
                            >

                                Simpan Resep →

                            </button>


                        </div>


                    </div>


                </form>


            </div>


        </div>


        <!-- FOOTER -->

        <footer>


            <span>
                © {{ date('Y') }} ResepKu
            </span>


            <span>
                Culinary Journal ·
                {{ auth()->user()->role === 'admin' ? 'Administrator' : 'Member' }}
            </span>


        </footer>


    </main>


</div>


<!-- =====================================================
     PREVIEW GAMBAR
====================================================== -->

<script>

    const imageInput = document.getElementById('image');

    const imagePreview = document.getElementById('imagePreview');

    const previewImage = document.getElementById('previewImage');


    if (imageInput) {

        imageInput.addEventListener('change', function () {

            const file = this.files[0];


            if (!file) {

                imagePreview.style.display = 'none';

                previewImage.src = '';

                return;

            }


            if (!file.type.startsWith('image/')) {

                imagePreview.style.display = 'none';

                previewImage.src = '';

                return;

            }


            const reader = new FileReader();


            reader.onload = function (event) {

                previewImage.src = event.target.result;

                imagePreview.style.display = 'block';

            };


            reader.readAsDataURL(file);

        });

    }

</script>


</body>

</html>