<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Tambah Resep | ResepKu
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
            background: #f6f6f4;
            color: #292929;
        }

        a {
            text-decoration: none;
        }

        button,
        input,
        textarea {
            font-family: inherit;
        }


        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;

            width: 240px;

            background: #ffffff;

            border-right: 1px solid #e3e3e3;

            padding: 28px 18px;

            z-index: 50;

            display: flex;
            flex-direction: column;
        }


        .brand {
            padding: 0 14px;

            margin-bottom: 42px;
        }

        .brand a {
            color: #e85d04;

            font-size: 25px;

            font-weight: 700;
        }

        .brand small {
            display: block;

            color: #999;

            font-size: 11px;

            margin-top: 5px;
        }


        .menu-label {
            color: #999;

            font-size: 10px;

            font-weight: 600;

            letter-spacing: .8px;

            text-transform: uppercase;

            margin: 0 14px 10px;
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

            padding: 12px 14px;

            color: #606060;

            border-radius: 7px;

            font-size: 13px;

            transition: .2s;

            min-height: 40px;
        }


        .menu a:hover {
            background: #f7f7f7;

            color: #e85d04;
        }


        .menu a.active {
            background: #fff1e8;

            color: #e85d04;

            font-weight: 600;
        }


        .menu-icon {
            width: 20px;

            min-width: 20px;

            text-align: center;

            font-size: 16px;

            line-height: 1;
        }


        /* =====================================================
           SIDEBAR BOTTOM
        ===================================================== */

        .sidebar-bottom {
            margin-top: auto;

            padding-top: 18px;

            border-top: 1px solid #eeeeee;
        }


        .profile-box {
            display: flex;

            align-items: center;

            gap: 10px;

            padding: 8px 10px;

            margin-bottom: 8px;
        }


        .avatar {
            width: 37px;

            height: 37px;

            background: #e85d04;

            color: #ffffff;

            border-radius: 50%;

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
            font-size: 12px;

            font-weight: 600;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }


        .profile-role {
            color: #999;

            font-size: 10px;

            margin-top: 3px;
        }


        .logout-button {
            width: 100%;

            border: none;

            background: #fff1f2;

            color: #be123c;

            padding: 10px;

            border-radius: 7px;

            cursor: pointer;

            font-size: 12px;

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
            margin-left: 240px;

            min-height: 100vh;
        }


        /* =====================================================
           TOPBAR
        ===================================================== */

        .topbar {
            height: 72px;

            background: #ffffff;

            border-bottom: 1px solid #e3e3e3;

            padding: 0 34px;

            display: flex;

            align-items: center;

            justify-content: space-between;
        }


        .page-name {
            font-size: 18px;

            font-weight: 600;
        }


        .user-area {
            display: flex;

            align-items: center;

            gap: 11px;
        }


        .user-info {
            text-align: right;
        }


        .user-name {
            display: block;

            font-size: 13px;

            color: #444;
        }


        .user-role {
            display: block;

            color: #999;

            font-size: 10px;

            margin-top: 2px;
        }


        /* =====================================================
           CONTENT
        ===================================================== */

        .content {
            padding: 30px 34px 50px;

            max-width: 1050px;
        }


        .page-header {
            margin-bottom: 25px;
        }


        .page-header h1 {
            font-size: 25px;

            font-weight: 600;

            margin-bottom: 7px;
        }


        .page-header p {
            color: #777;

            font-size: 13px;
        }


        /* =====================================================
           FORM
        ===================================================== */

        .form-container {
            background: #ffffff;

            border: 1px solid #e3e3e3;

            border-radius: 9px;

            padding: 28px;
        }


        .form-group {
            margin-bottom: 23px;
        }


        .form-group:last-child {
            margin-bottom: 0;
        }


        label {
            display: block;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 8px;
        }


        .label-description {
            font-size: 11px;

            color: #999;

            font-weight: normal;

            margin-bottom: 9px;
        }


        input,
        textarea {
            width: 100%;

            border: 1px solid #dcdcdc;

            border-radius: 5px;

            padding: 11px 12px;

            font-size: 13px;

            color: #333;

            outline: none;

            background: #fff;
        }


        input[type="file"] {
            padding: 9px 10px;

            cursor: pointer;
        }


        textarea {
            resize: vertical;

            min-height: 150px;

            line-height: 1.6;
        }


        input:focus,
        textarea:focus {
            border-color: #e85d04;
        }


        input::placeholder,
        textarea::placeholder {
            color: #aaa;
        }


        /* =====================================================
           IMAGE
        ===================================================== */

        .image-upload {
            border: 1px dashed #d8d8d8;

            border-radius: 7px;

            padding: 18px;

            background: #fafafa;
        }


        .image-upload-text {
            color: #888;

            font-size: 11px;

            line-height: 1.6;

            margin-top: 8px;
        }


        .image-preview {
            margin-top: 14px;

            display: none;
        }


        .image-preview img {
            width: 220px;

            height: 150px;

            object-fit: cover;

            border-radius: 7px;

            border: 1px solid #e3e3e3;
        }


        /* =====================================================
           ERROR
        ===================================================== */

        .error-box {
            background: #fff4f4;

            border: 1px solid #f0cccc;

            border-radius: 6px;

            padding: 13px 15px;

            margin-bottom: 20px;
        }


        .error-box strong {
            display: block;

            font-size: 12px;

            margin-bottom: 7px;

            color: #b42318;
        }


        .error-box ul {
            padding-left: 18px;

            color: #b42318;

            font-size: 12px;
        }


        .field-error {
            display: block;

            color: #c62828;

            font-size: 11px;

            margin-top: 6px;
        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .form-footer {
            display: flex;

            justify-content: flex-end;

            align-items: center;

            gap: 10px;

            padding-top: 8px;
        }


        .btn-cancel {
            padding: 10px 17px;

            border: 1px solid #ddd;

            border-radius: 5px;

            color: #555;

            font-size: 12px;

            background: #fff;
        }


        .btn-cancel:hover {
            background: #f7f7f7;
        }


        .btn-submit {
            border: none;

            background: #e85d04;

            color: #fff;

            padding: 10px 18px;

            border-radius: 5px;

            font-size: 12px;

            font-weight: 600;

            cursor: pointer;
        }


        .btn-submit:hover {
            background: #d65300;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 750px) {

            .sidebar {
                position: relative;

                width: 100%;

                height: auto;

                border-right: none;

                border-bottom: 1px solid #e3e3e3;
            }


            .main {
                margin-left: 0;
            }


            .content {
                padding: 22px 18px;
            }


            .topbar {
                padding: 0 18px;
            }


            .form-container {
                padding: 20px;
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

            <a href="{{ route('user.dashboard') }}">
                ResepKu
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

            <a href="{{ route('user.dashboard') }}">

                <span class="menu-icon">
                    ⌂
                </span>

                <span>
                    Dashboard
                </span>

            </a>


            <!-- RESEP SAYA -->

            <a href="{{ route('recipes.my') }}">

                <span class="menu-icon">
                    ▣
                </span>

                <span>
                    Resep Saya
                </span>

            </a>


            <!-- RESEP TERSIMPAN -->

            <a href="{{ route('user.favorites') }}">

                <span class="menu-icon">
                    ♥
                </span>

                <span>
                    Resep Tersimpan
                </span>

            </a>


            <!-- TAMBAH RESEP -->

            <a
                href="{{ route('recipes.create') }}"
                class="active"
            >

                <span class="menu-icon">
                    ＋
                </span>

                <span>
                    Tambah Resep
                </span>

            </a>


            <!-- PROFIL -->

            <a href="{{ route('profile.edit') }}">

                <span class="menu-icon">
                    ○
                </span>

                <span>
                    Profil
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

                        User

                    </div>


                </div>


            </div>


            <!-- LOGOUT -->

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

                Tambah Resep

            </div>


            <div class="user-area">


                <div class="user-info">

                    <span class="user-name">

                        {{ auth()->user()->name }}

                    </span>


                    <span class="user-role">

                        User

                    </span>

                </div>


                <div class="avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>


            </div>

        </header>


        <!-- CONTENT -->

        <section class="content">


            <div class="page-header">

                <h1>
                    Tambah Resep
                </h1>

                <p>
                    Masukkan informasi resep masakan yang ingin kamu simpan.
                </p>

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


            <!-- FORM -->

            <div class="form-container">


                <form
                    action="{{ route('recipes.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf


                    <!-- =================================================
                         NAMA RESEP
                    ================================================== -->

                    <div class="form-group">


                        <label for="title">
                            Nama Resep
                        </label>


                        <input
                            type="text"
                            id="title"
                            name="title"
                            value="{{ old('title') }}"
                            placeholder="Contoh: Nasi Bakar Kemangi Cumi Asin"
                            required
                        >


                        @error('title')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>


                    <!-- =================================================
                         BAHAN
                    ================================================== -->

                    <div class="form-group">


                        <label for="ingredients">
                            Bahan-bahan
                        </label>


                        <div class="label-description">

                            Tulis bahan dan takarannya.
                            Gunakan satu bahan per baris agar lebih mudah dibaca.

                        </div>


                        <textarea
                            id="ingredients"
                            name="ingredients"
                            placeholder="Contoh:

2 porsi nasi putih
100 gram cumi asin
5 lembar daun kemangi
3 siung bawang putih
5 buah cabai rawit
2 lembar daun jeruk
1 batang serai
1 sdm minyak
Garam secukupnya"
                            required
                        >{{ old('ingredients') }}</textarea>


                        @error('ingredients')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>


                    <!-- =================================================
                         LANGKAH
                    ================================================== -->

                    <div class="form-group">


                        <label for="steps">
                            Langkah-langkah
                        </label>


                        <div class="label-description">

                            Tulis proses memasak secara berurutan.

                        </div>


                        <textarea
                            id="steps"
                            name="steps"
                            placeholder="Contoh:

1. Cuci cumi asin lalu rebus sebentar agar rasa asinnya berkurang.
2. Tiriskan dan potong cumi menjadi bagian kecil.
3. Tumis bawang putih, cabai, daun jeruk, dan serai hingga harum.
4. Masukkan cumi asin lalu aduk beberapa menit.
5. Masukkan nasi putih dan aduk sampai bumbu tercampur rata.
6. Tambahkan daun kemangi dan masak sebentar.
7. Koreksi rasa lalu matikan api.
8. Bungkus nasi menggunakan daun pisang.
9. Panggang nasi sebentar hingga daun pisang harum.
10. Sajikan selagi hangat."
                            required
                        >{{ old('steps') }}</textarea>


                        @error('steps')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>


                    <!-- =================================================
                         FOTO RESEP
                    ================================================== -->

                    <div class="form-group">


                        <label for="image">
                            Foto Resep
                        </label>


                        <div class="label-description">

                            Pilih gambar dari komputer kamu.
                            Format JPG, JPEG, PNG, atau WEBP.

                        </div>


                        <div class="image-upload">


                            <input
                                type="file"
                                id="image"
                                name="image"
                                accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                            >


                            <div class="image-upload-text">

                                Maksimal ukuran file 2 MB.
                                Pilih foto makanan dengan kualitas yang jelas.

                            </div>


                            <div
                                class="image-preview"
                                id="imagePreview"
                            >

                                <img
                                    id="previewImage"
                                    src=""
                                    alt="Preview gambar resep"
                                >

                            </div>


                        </div>


                        @error('image')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>


                    <!-- BUTTON -->

                    <div class="form-footer">


                        <a
                            href="{{ route('recipes.my') }}"
                            class="btn-cancel"
                        >
                            Batal
                        </a>


                        <button
                            type="submit"
                            class="btn-submit"
                        >
                            Simpan Resep
                        </button>


                    </div>


                </form>


            </div>


        </section>


    </main>


</div>


<script>

    const imageInput = document.getElementById('image');

    const imagePreview = document.getElementById('imagePreview');

    const previewImage = document.getElementById('previewImage');


    imageInput.addEventListener('change', function () {

        const file = this.files[0];


        if (!file) {

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

</script>


</body>

</html>