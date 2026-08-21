<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Resep | ResepKu</title>

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


        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {
            position: fixed;

            top: 0;
            left: 0;
            bottom: 0;

            width: 240px;

            background: #fff;

            border-right: 1px solid #e3e3e3;

            padding: 28px 18px;

            display: flex;

            flex-direction: column;

            z-index: 10;
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
            width: 18px;

            text-align: center;
        }


        /* =========================
           MAIN
        ========================= */

        .main {
            margin-left: 240px;

            min-height: 100vh;
        }


        /* =========================
           TOPBAR
        ========================= */

        .topbar {
            height: 72px;

            background: #fff;

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

            gap: 10px;
        }

        .user-name {
            font-size: 13px;

            color: #444;
        }

        .avatar {
            width: 37px;

            height: 37px;

            background: #e85d04;

            color: white;

            border-radius: 50%;

            display: flex;

            justify-content: center;

            align-items: center;

            font-size: 13px;

            font-weight: 600;
        }


        /* =========================
           CONTENT
        ========================= */

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


        /* =========================
           SUCCESS
        ========================= */

        .success {
            background: #f0fdf4;

            border: 1px solid #bbf7d0;

            color: #15803d;

            border-radius: 6px;

            padding: 12px 14px;

            margin-bottom: 20px;

            font-size: 12px;
        }


        /* =========================
           ERROR
        ========================= */

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


        /* =========================
           FORM
        ========================= */

        .form-container {
            background: #fff;

            border: 1px solid #e3e3e3;

            border-radius: 9px;

            padding: 28px;
        }

        .form-group {
            margin-bottom: 23px;
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

            margin-bottom: 9px;
        }

        input,
        textarea {
            width: 100%;

            border: 1px solid #dcdcdc;

            border-radius: 5px;

            padding: 11px 12px;

            font-family: Arial, Helvetica, sans-serif;

            font-size: 13px;

            color: #333;

            outline: none;

            background: #fff;
        }

        input {
            height: 42px;
        }

        textarea {
            resize: vertical;

            line-height: 1.6;

            min-height: 150px;
        }

        input:focus,
        textarea:focus {
            border-color: #e85d04;
        }


        /* =========================
           FILE
        ========================= */

        .file-input {
            height: auto;

            padding: 8px;

            cursor: pointer;
        }


        /* =========================
           CURRENT IMAGE
        ========================= */

        .current-image {
            margin-bottom: 14px;
        }

        .current-image img {
            display: block;

            width: 260px;

            height: 180px;

            object-fit: cover;

            border-radius: 8px;

            border: 1px solid #ddd;
        }

        .current-image p {
            margin-top: 7px;

            color: #999;

            font-size: 10px;
        }


        /* =========================
           PREVIEW
        ========================= */

        .image-preview {
            display: none;

            margin-top: 12px;
        }

        .image-preview img {
            width: 260px;

            height: 180px;

            object-fit: cover;

            border-radius: 8px;

            border: 1px solid #ddd;
        }


        .image-note {
            background: #fafafa;

            border: 1px solid #eeeeee;

            border-radius: 5px;

            padding: 12px;

            margin-top: 8px;

            color: #888;

            font-size: 11px;

            line-height: 1.5;
        }


        /* =========================
           BUTTON
        ========================= */

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


        /* =========================
           RESPONSIVE
        ========================= */

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

            .current-image img,
            .image-preview img {
                width: 100%;

                height: auto;
            }

        }

    </style>

</head>


<body>


<div class="layout">


    {{-- =========================
         SIDEBAR
    ========================= --}}

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


            <a href="{{ route('user.dashboard') }}">

                <span class="menu-icon">
                    ⌂
                </span>

                Dashboard

            </a>


            <a
                href="{{ route('recipes.index') }}"
                class="active"
            >

                <span class="menu-icon">
                    ▣
                </span>

                Resep

            </a>


            <a href="{{ route('recipes.create') }}">

                <span class="menu-icon">
                    ＋
                </span>

                Tambah Resep

            </a>


            <a href="{{ route('profile.edit') }}">

                <span class="menu-icon">
                    ○
                </span>

                Profil

            </a>


        </nav>


    </aside>



    {{-- =========================
         MAIN
    ========================= --}}

    <main class="main">


        {{-- TOPBAR --}}

        <header class="topbar">


            <div class="page-name">
                Edit Resep
            </div>


            <div class="user-area">


                <span class="user-name">

                    {{ auth()->user()->name }}

                </span>


                <div class="avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>


            </div>


        </header>



        {{-- CONTENT --}}

        <section class="content">


            <div class="page-header">

                <h1>
                    Edit Resep
                </h1>

                <p>
                    Ubah informasi atau foto resep kamu.
                </p>

            </div>



            {{-- SUCCESS --}}

            @if(session('success'))

                <div class="success">

                    {{ session('success') }}

                </div>

            @endif



            {{-- ERROR --}}

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



            {{-- FORM --}}

            <div class="form-container">


                <form
                    action="{{ route('recipes.update', $recipe->slug) }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf

                    @method('PUT')



                    {{-- =========================
                         NAMA
                    ========================= --}}

                    <div class="form-group">


                        <label for="title">
                            Nama Resep
                        </label>


                        <input
                            type="text"
                            id="title"
                            name="title"
                            value="{{ old('title', $recipe->title) }}"
                            required
                        >


                        @error('title')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>



                    {{-- =========================
                         BAHAN
                    ========================= --}}

                    <div class="form-group">


                        <label for="ingredients">
                            Bahan-bahan
                        </label>


                        <div class="label-description">

                            Tulis bahan dan takaran yang dibutuhkan.

                        </div>


                        <textarea
                            id="ingredients"
                            name="ingredients"
                            required
                        >{{ old('ingredients', $recipe->ingredients) }}</textarea>


                        @error('ingredients')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>



                    {{-- =========================
                         LANGKAH
                    ========================= --}}

                    <div class="form-group">


                        <label for="steps">
                            Langkah-langkah Memasak
                        </label>


                        <div class="label-description">

                            Jelaskan langkah memasak secara berurutan.

                        </div>


                        <textarea
                            id="steps"
                            name="steps"
                            required
                        >{{ old('steps', $recipe->steps) }}</textarea>


                        @error('steps')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>



                    {{-- =========================
                         FOTO LAMA
                    ========================= --}}

                    <div class="form-group">


                        <label>
                            Foto Saat Ini
                        </label>


                        @if($recipe->image)

                            <div class="current-image">


                                <img
                                    src="{{ $recipe->imageUrl() }}"
                                    alt="{{ $recipe->title }}"
                                >


                                <p>
                                    Foto yang saat ini digunakan.
                                </p>


                            </div>

                        @else

                            <div class="image-note">

                                Resep ini belum memiliki foto.

                            </div>

                        @endif


                    </div>



                    {{-- =========================
                         FOTO BARU
                    ========================= --}}

                    <div class="form-group">


                        <label for="image">
                            Ganti Foto Resep
                        </label>


                        <div class="label-description">

                            Pilih foto baru dari komputer jika ingin mengganti foto lama.

                        </div>


                        <input
                            type="file"
                            id="image"
                            name="image"
                            class="file-input"
                            accept="image/jpeg,image/png,image/jpg,image/webp"
                        >


                        <div class="image-note">

                            Kosongkan bagian ini jika tidak ingin mengganti foto.
                            <br>
                            Format JPG, JPEG, PNG, atau WEBP.
                            <br>
                            Ukuran maksimal 2 MB.

                        </div>



                        {{-- PREVIEW FOTO BARU --}}

                        <div
                            id="imagePreview"
                            class="image-preview"
                        >

                            <img
                                id="previewImage"
                                src=""
                                alt="Preview foto baru"
                            >

                        </div>


                        @error('image')

                            <span class="field-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>



                    {{-- =========================
                         BUTTON
                    ========================= --}}

                    <div class="form-footer">


                        <a
                            href="{{ route('recipes.show', $recipe->slug) }}"
                            class="btn-cancel"
                        >

                            Batal

                        </a>


                        <button
                            type="submit"
                            class="btn-submit"
                        >

                            Simpan Perubahan

                        </button>


                    </div>


                </form>


            </div>


        </section>


    </main>


</div>



{{-- =========================
     PREVIEW FOTO BARU
========================= --}}

<script>

    const imageInput = document.getElementById('image');

    const imagePreview = document.getElementById('imagePreview');

    const previewImage = document.getElementById('previewImage');


    imageInput.addEventListener('change', function () {

        const file = this.files[0];


        if (file) {

            const reader = new FileReader();


            reader.onload = function (event) {

                previewImage.src = event.target.result;

                imagePreview.style.display = 'block';

            };


            reader.readAsDataURL(file);

        } else {

            previewImage.src = '';

            imagePreview.style.display = 'none';

        }

    });

</script>


</body>

</html>