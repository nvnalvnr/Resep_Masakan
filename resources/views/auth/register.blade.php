<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Daftar - ResepKu</title>

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

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

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --bg: #f5f1e8;
            --surface: #fffdf8;
            --text: #2d2723;
            --muted: #81776e;
            --brown: #6b3424;
            --terracotta: #a95635;
            --border: #ded6ca;
            --error: #a04434;
        }

        html,
        body {
            width: 100%;
            min-height: 100%;
        }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: "DM Sans", Arial, sans-serif;
        }

        a {
            text-decoration: none;
        }

        button,
        input {
            font-family: inherit;
        }

        /* ================================
           PAGE
        ================================= */

        .register-page {
            min-height: 100vh;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 40px 24px;

            position: relative;

            overflow: hidden;
        }

        .decor {
            position: absolute;

            border-radius: 50%;

            border: 1px solid rgba(107, 52, 36, .08);

            pointer-events: none;
        }

        .decor-one {
            width: 420px;
            height: 420px;

            top: -220px;
            left: -180px;
        }

        .decor-two {
            width: 300px;
            height: 300px;

            right: -150px;
            bottom: -130px;
        }

        /* ================================
           CARD
        ================================= */

        .register-card {
            width: 100%;

            max-width: 1050px;

            min-height: 620px;

            display: grid;

            grid-template-columns: 45% 55%;

            background: var(--surface);

            border: 1px solid var(--border);

            box-shadow:
                0 25px 70px rgba(70, 45, 30, .10);

            position: relative;

            z-index: 2;

            overflow: hidden;
        }

        /* ================================
           LEFT
        ================================= */

        .register-left {
            background: var(--brown);

            color: white;

            padding: 55px;

            display: flex;

            flex-direction: column;

            justify-content: space-between;

            position: relative;

            overflow: hidden;
        }

        .register-left::before {
            content: "";

            position: absolute;

            width: 390px;
            height: 390px;

            border: 1px solid rgba(255,255,255,.10);

            border-radius: 50%;

            right: -240px;
            bottom: -210px;
        }

        .register-left::after {
            content: "";

            position: absolute;

            width: 220px;
            height: 220px;

            border: 1px solid rgba(255,255,255,.08);

            border-radius: 50%;

            right: -50px;
            bottom: -40px;
        }

        /* ================================
           BRAND
        ================================= */

        .brand {
            display: flex;

            align-items: center;

            gap: 13px;

            position: relative;

            z-index: 2;
        }

        .brand-icon {
            width: 45px;
            height: 45px;

            flex-shrink: 0;

            border-radius: 50%;

            background: #fffdf8;

            color: var(--brown);

            display: flex;

            align-items: center;

            justify-content: center;

            font-family: Georgia, serif;

            font-size: 20px;

            font-weight: 700;
        }

        .brand-name {
            font-family:
                "Playfair Display",
                Georgia,
                serif;

            font-size: 25px;

            line-height: 1;
        }

        .brand-sub {
            display: block;

            margin-top: 5px;

            color: rgba(255,255,255,.60);

            font-size: 9px;

            letter-spacing: 1.8px;

            text-transform: uppercase;
        }

        /* ================================
           INTRO
        ================================= */

        .intro {
            position: relative;

            z-index: 2;

            margin-top: auto;

            margin-bottom: auto;

            padding: 55px 0 45px;
        }

        .intro-label {
            color: #e6b29b;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 2px;

            text-transform: uppercase;

            margin-bottom: 17px;
        }

        .intro h1 {
            max-width: 390px;

            font-family:
                "Playfair Display",
                Georgia,
                serif;

            font-size: 42px;

            line-height: 1.17;

            font-weight: 500;

            margin-bottom: 20px;
        }

        .intro h1 span {
            color: #e6b29b;
        }

        .intro p {
            max-width: 390px;

            color: rgba(255,255,255,.70);

            font-size: 13px;

            line-height: 1.9;
        }

        .left-footer {
            position: relative;

            z-index: 2;

            color: rgba(255,255,255,.55);

            font-size: 10px;

            letter-spacing: .5px;
        }

        /* ================================
           RIGHT
        ================================= */

        .register-right {
            display: flex;

            align-items: center;

            justify-content: center;

            padding: 50px 70px;
        }

        .form-container {
            width: 100%;

            max-width: 390px;
        }

        .form-title {
            margin-bottom: 28px;
        }

        .form-title small {
            display: block;

            color: var(--terracotta);

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 2px;

            text-transform: uppercase;

            margin-bottom: 9px;
        }

        .form-title h2 {
            color: var(--text);

            font-family:
                "Playfair Display",
                Georgia,
                serif;

            font-size: 32px;

            line-height: 1.2;

            font-weight: 500;

            margin-bottom: 9px;
        }

        .form-title p {
            color: var(--muted);

            font-size: 12px;

            line-height: 1.6;
        }

        /* ================================
           ERRORS
        ================================= */

        .register-errors {
            padding: 12px 14px;

            margin-bottom: 18px;

            background: #f5e4df;

            border-left: 3px solid var(--error);

            color: var(--error);

            font-size: 11px;

            line-height: 1.6;
        }

        .register-errors ul {
            padding-left: 17px;
        }

        /* ================================
           FIELD
        ================================= */

        .form-group {
            margin-bottom: 17px;
        }

        .form-group label {
            display: block;

            margin-bottom: 7px;

            color: var(--text);

            font-size: 12px;

            font-weight: 700;
        }

        .input {
            width: 100%;

            height: 45px;

            border: 1px solid var(--border);

            background: white;

            color: var(--text);

            padding: 0 14px;

            outline: none;

            border-radius: 0;

            font-size: 13px;

            transition:
                border-color .2s ease,
                box-shadow .2s ease;
        }

        .input:hover {
            border-color: #c9bdaf;
        }

        .input:focus {
            border-color: var(--brown);

            box-shadow:
                0 0 0 3px rgba(107,52,36,.08);
        }

        .input::placeholder {
            color: #aaa099;
        }

        .field-error {
            margin-top: 5px;

            color: var(--error);

            font-size: 10px;

            line-height: 1.4;
        }

        /* ================================
           BUTTON
        ================================= */

        .register-button {
            width: 100%;

            height: 48px;

            border: none;

            background: var(--brown);

            color: white;

            font-size: 12px;

            font-weight: 700;

            letter-spacing: .2px;

            cursor: pointer;

            transition:
                background .2s ease,
                transform .2s ease;
        }

        .register-button:hover {
            background: var(--terracotta);

            transform: translateY(-1px);
        }

        .register-button:active {
            transform: translateY(0);
        }

        /* ================================
           LOGIN LINK
        ================================= */

        .login-link {
            text-align: center;

            border-top: 1px solid var(--border);

            margin-top: 22px;

            padding-top: 19px;

            color: var(--muted);

            font-size: 11px;
        }

        .login-link a {
            color: var(--brown);

            font-weight: 700;

            margin-left: 3px;
        }

        .login-link a:hover {
            color: var(--terracotta);

            text-decoration: underline;
        }

        /* ================================
           RESPONSIVE
        ================================= */

        @media (max-width: 850px) {

            .register-page {
                padding: 25px 18px;
            }

            .register-card {
                max-width: 600px;

                grid-template-columns: 1fr;

                min-height: auto;
            }

            .register-left {
                min-height: 330px;

                padding: 38px 40px;
            }

            .intro {
                padding: 40px 0 30px;
            }

            .intro h1 {
                font-size: 35px;
            }

            .register-right {
                padding: 45px 40px;
            }
        }

        @media (max-width: 500px) {

            .register-page {
                padding: 0;
            }

            .register-card {
                border: none;

                min-height: 100vh;

                box-shadow: none;
            }

            .register-left {
                min-height: 300px;

                padding: 30px 25px;
            }

            .brand-name {
                font-size: 23px;
            }

            .intro {
                padding: 35px 0 25px;
            }

            .intro h1 {
                font-size: 31px;
            }

            .intro p {
                font-size: 12px;
            }

            .register-right {
                padding: 38px 25px;
            }

            .form-title h2 {
                font-size: 28px;
            }
        }

    </style>
</head>


<body>

<div class="register-page">

    <div class="decor decor-one"></div>
    <div class="decor decor-two"></div>


    <div class="register-card">


        {{-- =========================================
             LEFT SIDE
        ========================================== --}}

        <section class="register-left">


            <div class="brand">

                <div class="brand-icon">
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

            </div>


            <div class="intro">

                <div class="intro-label">
                    Bergabung Bersama Kami
                </div>

                <h1>
                    Mulai perjalanan
                    <span>kulinermu.</span>
                </h1>

                <p>
                    Buat akun ResepKu dan mulai simpan
                    resep favoritmu, bagikan kreasi masakan,
                    serta temukan inspirasi baru setiap hari.
                </p>

            </div>


            <div class="left-footer">
                ✦ Satu akun, banyak cerita di dapur.
            </div>


        </section>



        {{-- =========================================
             RIGHT SIDE
        ========================================== --}}

        <section class="register-right">


            <div class="form-container">


                <div class="form-title">

                    <small>
                        Create Account
                    </small>

                    <h2>
                        Buat akunmu
                    </h2>

                    <p>
                        Isi data berikut untuk mulai menggunakan
                        ResepKu.
                    </p>

                </div>



                {{-- ERRORS --}}

                @if ($errors->any())

                    <div class="register-errors">

                        <ul>

                            @foreach ($errors->all() as $error)

                                <li>
                                    {{ $error }}
                                </li>

                            @endforeach

                        </ul>

                    </div>

                @endif



                <form
                    method="POST"
                    action="{{ route('register') }}"
                >

                    @csrf


                    {{-- NAME --}}

                    <div class="form-group">

                        <label for="name">
                            Nama
                        </label>

                        <input
                            id="name"
                            class="input"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Masukkan nama kamu"
                            required
                            autofocus
                            autocomplete="name"
                        >

                        @error('name')

                            <div class="field-error">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    {{-- EMAIL --}}

                    <div class="form-group">

                        <label for="email">
                            Email
                        </label>

                        <input
                            id="email"
                            class="input"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="nama@email.com"
                            required
                            autocomplete="username"
                        >

                        @error('email')

                            <div class="field-error">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    {{-- PASSWORD --}}

                    <div class="form-group">

                        <label for="password">
                            Password
                        </label>

                        <input
                            id="password"
                            class="input"
                            type="password"
                            name="password"
                            placeholder="Buat password"
                            required
                            autocomplete="new-password"
                        >

                        @error('password')

                            <div class="field-error">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    {{-- CONFIRM PASSWORD --}}

                    <div class="form-group">

                        <label for="password_confirmation">
                            Konfirmasi Password
                        </label>

                        <input
                            id="password_confirmation"
                            class="input"
                            type="password"
                            name="password_confirmation"
                            placeholder="Ulangi password"
                            required
                            autocomplete="new-password"
                        >

                        @error('password_confirmation')

                            <div class="field-error">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    {{-- BUTTON --}}

                    <button
                        type="submit"
                        class="register-button"
                    >
                        Buat Akun ResepKu
                    </button>


                </form>



                {{-- LOGIN --}}

                <div class="login-link">

                    Sudah punya akun?

                    <a href="{{ route('login') }}">
                        Masuk sekarang
                    </a>

                </div>


            </div>


        </section>


    </div>

</div>

</body>
</html>