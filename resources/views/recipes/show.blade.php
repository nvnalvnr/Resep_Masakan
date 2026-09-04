<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $recipe->title }} | ResepKu</title>

    {{-- GOOGLE FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>

        :root {
            --cream: #f5f1e8;
            --paper: #fffdf8;
            --paper-soft: #faf7f1;

            --ink: #2d2723;
            --muted: #81776e;

            --brown: #6b3424;
            --brown-dark: #4c261b;

            --terracotta: #a95635;

            --olive: #5d6947;
            --olive-soft: #e7eadf;

            --line: #ded6ca;
            --soft-brown: #eee5da;

            --serif: "DM Serif Display", Georgia, serif;
            --sans: "Manrope", Arial, sans-serif;
        }


        /* =====================================================
           RESET
        ====================================================== */

        * {
            box-sizing: border-box;
        }


        html {
            scroll-behavior: smooth;
        }


        body {
            margin: 0;

            background: var(--cream);
            color: var(--ink);

            font-family: var(--sans);

            font-size: 14px;

            line-height: 1.7;
        }


        a {
            color: inherit;
            text-decoration: none;
        }


        button {
            font-family: inherit;
        }


        /* =====================================================
           NAVBAR
        ====================================================== */

        .navbar {
            position: sticky;

            top: 0;

            z-index: 100;

            width: 100%;

            background: rgba(245, 241, 232, .95);

            border-bottom: 1px solid rgba(107, 52, 36, .12);

            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
        }


        .navbar-inner {
            width: min(1180px, calc(100% - 48px));

            min-height: 76px;

            margin: auto;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 28px;
        }


        /* BRAND */

        .brand {
            display: flex;

            align-items: center;

            gap: 11px;

            flex-shrink: 0;
        }


        .brand-mark {
            width: 38px;
            height: 38px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            background: var(--brown);

            color: white;

            font-family: var(--serif);

            font-size: 18px;

            box-shadow:
                0 5px 16px rgba(76, 38, 27, .14);
        }


        .brand-text {
            display: flex;

            flex-direction: column;

            line-height: 1.1;
        }


        .brand-name {
            color: var(--brown-dark);

            font-family: var(--serif);

            font-size: 21px;
        }


        .brand-subtitle {
            margin-top: 3px;

            color: var(--muted);

            font-size: 9px;

            font-weight: 700;

            letter-spacing: .15em;

            text-transform: uppercase;
        }


        /* NAV */

        .nav-menu {
            display: flex;

            align-items: center;

            justify-content: center;

            gap: 30px;

            margin-left: auto;
        }


        .nav-link {
            position: relative;

            color: #756b62;

            font-size: 12px;

            font-weight: 700;

            transition: color .2s ease;
        }


        .nav-link::after {
            content: "";

            position: absolute;

            left: 0;
            right: 0;

            bottom: -8px;

            width: 0;
            height: 2px;

            margin: auto;

            background: var(--terracotta);

            transition: width .2s ease;
        }


        .nav-link:hover,
        .nav-link.active {
            color: var(--brown);
        }


        .nav-link:hover::after,
        .nav-link.active::after {
            width: 18px;
        }


        /* NAV ACTION */

        .nav-actions {
            display: flex;

            align-items: center;

            gap: 9px;

            flex-shrink: 0;
        }


        .nav-button {
            min-height: 36px;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 0 15px;

            border: 1px solid var(--line);

            border-radius: 8px;

            background: transparent;

            color: var(--brown);

            font-size: 11px;

            font-weight: 700;

            cursor: pointer;

            transition: all .2s ease;
        }


        .nav-button:hover {
            border-color: var(--brown);

            background: var(--paper);
        }


        .nav-button.primary {
            border-color: var(--brown);

            background: var(--brown);

            color: white;
        }


        .nav-button.primary:hover {
            background: var(--brown-dark);
        }


        .logout-form {
            margin: 0;
        }


        /* =====================================================
           PAGE
        ====================================================== */

        .page {
            width: min(1180px, calc(100% - 48px));

            margin: auto;

            padding: 32px 0 85px;
        }


        /* =====================================================
           BREADCRUMB
        ====================================================== */

        .breadcrumb {
            display: flex;

            align-items: center;

            gap: 8px;

            margin-bottom: 34px;

            color: var(--muted);

            font-size: 11px;

            font-weight: 600;
        }


        .breadcrumb a {
            transition: color .2s ease;
        }


        .breadcrumb a:hover {
            color: var(--brown);
        }


        .breadcrumb-current {
            max-width: 300px;

            overflow: hidden;

            color: var(--brown);

            font-weight: 700;

            text-overflow: ellipsis;

            white-space: nowrap;
        }


        .breadcrumb-separator {
            color: #b8aea3;
        }


        /* =====================================================
           SUCCESS
        ====================================================== */

        .success-message {
            margin-bottom: 25px;

            padding: 13px 17px;

            border: 1px solid #cbd4bc;

            border-radius: 10px;

            background: #edf1e8;

            color: #52603d;

            font-size: 12px;

            font-weight: 600;
        }


        /* =====================================================
           HERO
        ====================================================== */

        .recipe-hero {
            display: grid;

            grid-template-columns: 390px minmax(0, 1fr);

            align-items: center;

            gap: 65px;

            margin-bottom: 55px;
        }


        /* =====================================================
           PHOTO
        ====================================================== */

        .photo-area {
            position: relative;

            display: flex;

            justify-content: center;
        }


        .photo-frame {
            position: relative;

            width: 100%;

            max-width: 390px;

            aspect-ratio: 3 / 4;

            overflow: hidden;

            border-radius: 18px;

            background: var(--soft-brown);

            box-shadow:
                0 20px 45px rgba(76, 38, 27, .13),
                0 3px 8px rgba(76, 38, 27, .05);
        }


        .photo-frame::before {
            content: "";

            position: absolute;

            inset: 0;

            z-index: 1;

            background:
                linear-gradient(
                    to bottom,
                    rgba(45, 39, 35, .02) 0%,
                    transparent 45%,
                    rgba(45, 39, 35, .30) 100%
                );

            pointer-events: none;
        }


        .photo-frame img {
            width: 100%;
            height: 100%;

            display: block;

            object-fit: cover;

            transition: transform .6s ease;
        }


        .photo-frame:hover img {
            transform: scale(1.025);
        }


        .photo-placeholder {
            width: 100%;
            height: 100%;

            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: center;

            gap: 8px;

            background:
                linear-gradient(
                    145deg,
                    #eee4d8,
                    #e2d6c8
                );

            color: var(--brown);
        }


        .placeholder-icon {
            font-size: 38px;

            opacity: .7;
        }


        .placeholder-text {
            font-family: var(--serif);

            font-size: 20px;
        }


        .photo-label {
            position: absolute;

            z-index: 3;

            top: 18px;
            left: 18px;

            padding: 7px 11px;

            border: 1px solid rgba(255, 255, 255, .35);

            border-radius: 7px;

            background: rgba(45, 39, 35, .62);

            color: white;

            font-size: 9px;

            font-weight: 700;

            letter-spacing: .13em;

            text-transform: uppercase;

            backdrop-filter: blur(7px);
        }


        .photo-number {
            position: absolute;

            z-index: 3;

            right: 18px;
            bottom: 17px;

            color: white;

            font-family: var(--serif);

            font-size: 25px;

            text-shadow:
                0 2px 12px rgba(0, 0, 0, .25);
        }


        /* =====================================================
           HERO CONTENT
        ====================================================== */

        .hero-content {
            max-width: 650px;
        }


        .eyebrow {
            display: flex;

            align-items: center;

            gap: 10px;

            margin-bottom: 15px;

            color: var(--terracotta);

            font-size: 10px;

            font-weight: 800;

            letter-spacing: .17em;

            text-transform: uppercase;
        }


        .eyebrow::before {
            content: "";

            width: 27px;

            height: 1px;

            background: var(--terracotta);
        }


        .recipe-title {
            margin: 0;

            color: var(--brown-dark);

            font-family: var(--serif);

            font-size: clamp(40px, 5vw, 58px);

            font-weight: 400;

            line-height: 1.08;

            letter-spacing: -.02em;
        }


        .recipe-description {
            max-width: 570px;

            margin: 19px 0 0;

            color: var(--muted);

            font-size: 14px;

            line-height: 1.85;
        }


        /* =====================================================
           AUTHOR
        ====================================================== */

        .author-row {
            display: flex;

            align-items: center;

            margin-top: 27px;

            padding-top: 21px;

            border-top: 1px solid var(--line);
        }


        .author-avatar {
            width: 40px;
            height: 40px;

            display: flex;

            align-items: center;

            justify-content: center;

            flex-shrink: 0;

            border-radius: 50%;

            background: var(--brown);

            color: white;

            font-family: var(--serif);

            font-size: 17px;
        }


        .author-info {
            margin-left: 12px;
        }


        .author-name {
            color: var(--ink);

            font-size: 12px;

            font-weight: 800;
        }


        .author-date {
            margin-top: 1px;

            color: var(--muted);

            font-size: 11px;
        }


        /* =====================================================
           STATS
        ====================================================== */

        .stats {
            display: flex;

            align-items: stretch;

            margin-top: 25px;
        }


        .stat {
            min-width: 125px;

            padding: 0 20px;

            border-left: 1px solid var(--line);
        }


        .stat:first-child {
            padding-left: 0;

            border-left: none;
        }


        .stat-value {
            color: var(--brown);

            font-family: var(--serif);

            font-size: 23px;

            line-height: 1.1;
        }


        .stat-label {
            margin-top: 4px;

            color: var(--muted);

            font-size: 10px;

            font-weight: 700;

            letter-spacing: .05em;

            text-transform: uppercase;
        }


        /* =====================================================
           SAVE BAR
        ====================================================== */

        .action-bar {
            width: 100%;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            margin-bottom: 62px;

            padding: 15px 0;

            border-top: 1px solid var(--line);

            border-bottom: 1px solid var(--line);
        }


        .action-label {
            color: var(--muted);

            font-size: 11px;

            font-weight: 700;
        }


        .favorite-form {
            margin: 0;

            margin-left: auto;
        }


        .favorite-button {
            min-height: 40px;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            padding: 0 18px;

            border: 1px solid var(--brown);

            border-radius: 8px;

            background: var(--brown);

            color: white;

            font-size: 11px;

            font-weight: 800;

            cursor: pointer;

            transition: all .2s ease;
        }


        .favorite-button:hover {
            background: var(--brown-dark);

            transform: translateY(-1px);
        }


        .favorite-icon {
            font-size: 16px;
        }


        /* =====================================================
           CONTENT
        ====================================================== */

        .recipe-content {
            display: grid;

            grid-template-columns: minmax(0, 1fr) 270px;

            align-items: start;

            gap: 70px;
        }


        .main-column {
            min-width: 0;
        }


        .section {
            scroll-margin-top: 105px;
        }


        .section + .section {
            margin-top: 66px;
        }


        /* =====================================================
           SECTION HEADING
        ====================================================== */

        .section-heading {
            display: flex;

            align-items: flex-end;

            justify-content: space-between;

            padding-bottom: 17px;

            border-bottom: 1px solid var(--line);
        }


        .section-heading-left {
            display: flex;

            align-items: baseline;

            gap: 12px;
        }


        .section-number {
            color: var(--terracotta);

            font-family: var(--serif);

            font-size: 17px;
        }


        .section-title {
            margin: 0;

            color: var(--brown-dark);

            font-family: var(--serif);

            font-size: 29px;

            font-weight: 400;

            line-height: 1.2;
        }


        .section-caption {
            color: var(--muted);

            font-size: 10px;

            font-weight: 700;

            letter-spacing: .08em;

            text-transform: uppercase;
        }


        /* =====================================================
           INGREDIENTS
        ====================================================== */

        .ingredients-grid {
            display: grid;

            grid-template-columns: repeat(2, minmax(0, 1fr));

            margin-top: 7px;
        }


        .ingredient-item {
            min-height: 54px;

            display: flex;

            align-items: center;

            gap: 12px;

            padding: 13px 10px 13px 0;

            border-bottom: 1px solid var(--line);

            color: #494039;

            font-size: 13px;

            line-height: 1.6;
        }


        .ingredient-dot {
            width: 7px;
            height: 7px;

            flex-shrink: 0;

            border-radius: 50%;

            background: var(--terracotta);
        }


        /* =====================================================
           STEPS
        ====================================================== */

        .steps-list {
            margin-top: 8px;
        }


        .step {
            display: grid;

            grid-template-columns: 46px minmax(0, 1fr);

            gap: 17px;

            padding: 22px 0;

            border-bottom: 1px solid var(--line);
        }


        .step:last-child {
            border-bottom: none;
        }


        .step-number {
            width: 38px;
            height: 38px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            background: var(--olive-soft);

            color: var(--olive);

            font-family: var(--serif);

            font-size: 17px;
        }


        .step-content {
            padding-top: 3px;
        }


        .step-title {
            margin: 0 0 5px;

            color: var(--brown-dark);

            font-size: 13px;

            font-weight: 800;
        }


        .step-text {
            margin: 0;

            color: #5f564e;

            font-size: 14px;

            line-height: 1.85;
        }


        /* =====================================================
           RECIPE TIP
        ====================================================== */

        .recipe-tip {
            margin-top: 40px;

            padding: 22px 24px;

            border-left: 3px solid var(--terracotta);

            background: var(--paper-soft);
        }


        .tip-label {
            margin-bottom: 5px;

            color: var(--terracotta);

            font-size: 10px;

            font-weight: 800;

            letter-spacing: .12em;

            text-transform: uppercase;
        }


        .tip-text {
            margin: 0;

            color: #655c54;

            font-size: 13px;

            line-height: 1.8;
        }


        /* =====================================================
           SIDE COLUMN
        ====================================================== */

        .side-column {
            position: sticky;

            top: 105px;
        }


        .side-card {
            padding: 23px;

            border: 1px solid var(--line);

            border-radius: 12px;

            background: rgba(255, 253, 248, .56);
        }


        .side-card + .side-card {
            margin-top: 18px;
        }


        .side-card-title {
            margin: 0 0 18px;

            color: var(--brown-dark);

            font-family: var(--serif);

            font-size: 21px;

            font-weight: 400;
        }


        /* SIDE MENU */

        .side-menu {
            display: flex;

            flex-direction: column;
        }


        .side-menu a {
            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 11px 0;

            border-bottom: 1px solid var(--line);

            color: #625950;

            font-size: 11px;

            font-weight: 700;

            transition: all .2s ease;
        }


        .side-menu a:last-child {
            border-bottom: none;
        }


        .side-menu a span:last-child {
            color: #a59b90;

            transition: transform .2s ease;
        }


        .side-menu a:hover {
            color: var(--brown);
        }


        .side-menu a:hover span:last-child {
            transform: translateX(3px);
        }


        /* =====================================================
           INFORMATION
        ====================================================== */

        .info-list {
            display: flex;

            flex-direction: column;
        }


        .info-row {
            padding: 12px 0;

            border-bottom: 1px solid var(--line);
        }


        .info-row:last-child {
            padding-bottom: 0;

            border-bottom: none;
        }


        .info-label {
            margin-bottom: 2px;

            color: var(--muted);

            font-size: 9px;

            font-weight: 800;

            letter-spacing: .08em;

            text-transform: uppercase;
        }


        .info-value {
            color: #4d443d;

            font-size: 11px;

            font-weight: 700;
        }


        /* =====================================================
           ADMIN
        ====================================================== */

        .admin-card {
            border-color: #d8c9bd;

            background: #f3ebe2;
        }


        .admin-description {
            margin: -8px 0 15px;

            color: var(--muted);

            font-size: 11px;

            line-height: 1.7;
        }


        .admin-button {
            width: 100%;

            min-height: 38px;

            display: flex;

            align-items: center;

            justify-content: center;

            border: 1px solid var(--brown);

            border-radius: 7px;

            background: transparent;

            color: var(--brown);

            font-size: 11px;

            font-weight: 800;

            transition: all .2s ease;
        }


        .admin-button:hover {
            background: var(--brown);

            color: white;
        }


        /* =====================================================
           NEW FOOTER
        ====================================================== */

        .footer {
            position: relative;

            overflow: hidden;

            padding: 58px 24px 26px;

            background: var(--brown-dark);

            color: rgba(255, 255, 255, .72);
        }


        .footer::before {
            content: "";

            position: absolute;

            width: 240px;
            height: 240px;

            top: -150px;
            left: -80px;

            border-radius: 50%;

            border: 1px solid rgba(255, 255, 255, .07);
        }


        .footer::after {
            content: "";

            position: absolute;

            width: 300px;
            height: 300px;

            right: -150px;
            bottom: -210px;

            border-radius: 50%;

            border: 1px solid rgba(255, 255, 255, .07);
        }


        .footer-inner {
            position: relative;

            z-index: 2;

            width: min(1180px, 100%);

            margin: auto;
        }


        .footer-main {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 40px;

            padding-bottom: 35px;

            border-bottom: 1px solid rgba(255, 255, 255, .12);
        }


        .footer-brand-area {
            display: flex;

            align-items: center;

            gap: 13px;
        }


        .footer-logo {
            width: 43px;
            height: 43px;

            display: flex;

            align-items: center;

            justify-content: center;

            border: 1px solid rgba(255, 255, 255, .25);

            border-radius: 50%;

            color: white;

            font-family: var(--serif);

            font-size: 19px;
        }


        .footer-brand-text {
            display: flex;

            flex-direction: column;
        }


        .footer-brand-name {
            color: white;

            font-family: var(--serif);

            font-size: 25px;

            line-height: 1.1;
        }


        .footer-tagline {
            margin-top: 4px;

            color: rgba(255, 255, 255, .55);

            font-size: 10px;

            letter-spacing: .06em;
        }


        .footer-links {
            display: flex;

            align-items: center;

            gap: 25px;
        }


        .footer-link {
            color: rgba(255, 255, 255, .66);

            font-size: 10px;

            font-weight: 700;

            transition: color .2s ease;
        }


        .footer-link:hover {
            color: white;
        }


        .footer-bottom {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            padding-top: 21px;
        }


        .footer-copy {
            color: rgba(255, 255, 255, .42);

            font-size: 9px;

            font-weight: 600;
        }


        .footer-note {
            color: rgba(255, 255, 255, .42);

            font-size: 9px;

            text-align: right;
        }


        /* =====================================================
           TABLET
        ====================================================== */

        @media (max-width: 980px) {

            .navbar-inner {
                gap: 20px;
            }


            .nav-menu {
                gap: 18px;
            }


            .recipe-hero {
                grid-template-columns: 330px minmax(0, 1fr);

                gap: 45px;
            }


            .recipe-content {
                grid-template-columns: minmax(0, 1fr);

                gap: 50px;
            }


            .side-column {
                position: static;

                display: grid;

                grid-template-columns: repeat(2, minmax(0, 1fr));

                gap: 18px;
            }


            .side-card + .side-card {
                margin-top: 0;
            }

        }


        /* =====================================================
           MOBILE
        ====================================================== */

        @media (max-width: 760px) {

            body {
                font-size: 13px;
            }


            .navbar-inner {
                width: min(100% - 28px, 560px);

                min-height: 66px;

                gap: 10px;
            }


            .brand-subtitle {
                display: none;
            }


            .brand-name {
                font-size: 19px;
            }


            .brand-mark {
                width: 35px;
                height: 35px;
            }


            .nav-menu {
                display: none;
            }


            .nav-actions {
                gap: 6px;
            }


            .nav-button {
                padding: 0 10px;

                font-size: 10px;
            }


            .page {
                width: min(100% - 28px, 560px);

                padding-top: 23px;

                padding-bottom: 65px;
            }


            .breadcrumb {
                margin-bottom: 25px;

                font-size: 10px;
            }


            /* HERO */

            .recipe-hero {
                display: flex;

                flex-direction: column;

                align-items: stretch;

                gap: 31px;

                margin-bottom: 42px;
            }


            .photo-area {
                justify-content: center;
            }


            .photo-frame {
                width: min(100%, 355px);

                aspect-ratio: 4 / 5;

                border-radius: 15px;
            }


            .hero-content {
                max-width: none;
            }


            .eyebrow {
                margin-bottom: 12px;

                font-size: 9px;
            }


            .recipe-title {
                font-size: clamp(36px, 11vw, 47px);

                line-height: 1.1;
            }


            .recipe-description {
                margin-top: 15px;

                font-size: 13px;

                line-height: 1.8;
            }


            .author-row {
                margin-top: 22px;

                padding-top: 18px;
            }


            .stats {
                margin-top: 21px;
            }


            .stat {
                min-width: 0;

                flex: 1;

                padding: 0 13px;
            }


            .stat:first-child {
                padding-left: 0;
            }


            .stat-value {
                font-size: 20px;
            }


            .stat-label {
                font-size: 8px;
            }


            /* SAVE */

            .action-bar {
                display: flex;

                align-items: center;

                justify-content: space-between;

                gap: 12px;

                margin-bottom: 45px;

                padding: 13px 0;
            }


            .action-label {
                font-size: 10px;
            }


            .favorite-button {
                min-height: 38px;

                padding: 0 13px;

                font-size: 10px;
            }


            /* CONTENT */

            .recipe-content {
                display: block;
            }


            .section + .section {
                margin-top: 50px;
            }


            .section-heading {
                align-items: flex-start;

                flex-direction: column;

                gap: 5px;

                padding-bottom: 13px;
            }


            .section-title {
                font-size: 26px;
            }


            .section-caption {
                font-size: 8px;
            }


            /* INGREDIENTS */

            .ingredients-grid {
                grid-template-columns: 1fr;
            }


            .ingredient-item {
                min-height: 48px;

                padding: 11px 0;

                font-size: 12px;
            }


            /* STEPS */

            .step {
                grid-template-columns: 38px minmax(0, 1fr);

                gap: 12px;

                padding: 19px 0;
            }


            .step-number {
                width: 34px;

                height: 34px;

                font-size: 15px;
            }


            .step-title {
                font-size: 12px;
            }


            .step-text {
                font-size: 13px;

                line-height: 1.8;
            }


            /* TIP */

            .recipe-tip {
                margin-top: 30px;

                padding: 18px;
            }


            /* SIDE */

            .side-column {
                display: block;

                margin-top: 48px;
            }


            .side-card {
                padding: 19px;
            }


            .side-card + .side-card {
                margin-top: 14px;
            }


            /* FOOTER */

            .footer {
                padding: 45px 22px 22px;
            }


            .footer-main {
                flex-direction: column;

                align-items: flex-start;

                gap: 25px;

                padding-bottom: 27px;
            }


            .footer-links {
                flex-wrap: wrap;

                gap: 15px 22px;
            }


            .footer-bottom {
                align-items: flex-start;

                flex-direction: column;

                gap: 7px;

                padding-top: 18px;
            }


            .footer-note {
                text-align: left;
            }

        }


        /* =====================================================
           SMALL MOBILE
        ====================================================== */

        @media (max-width: 430px) {

            .nav-button.dashboard-text {
                display: none;
            }


            .photo-frame {
                width: 100%;

                aspect-ratio: 4 / 5;
            }


            .recipe-title {
                font-size: 38px;
            }


            .recipe-description {
                font-size: 12px;
            }


            .stat-label {
                letter-spacing: 0;
            }


            .footer-brand-name {
                font-size: 23px;
            }

        }

    </style>

</head>


<body id="top">


    {{-- =====================================================
         NAVBAR
    ====================================================== --}}

    <header class="navbar">

        <div class="navbar-inner">


            {{-- BRAND --}}

            <a
                href="{{ route('recipes.index') }}"
                class="brand"
            >

                <span class="brand-mark">
                    R
                </span>


                <span class="brand-text">

                    <span class="brand-name">
                        ResepKu
                    </span>


                    <span class="brand-subtitle">
                        Culinary Journal
                    </span>

                </span>

            </a>



            {{-- NAVIGATION --}}

            <nav class="nav-menu">

                <a
                    href="{{ route('recipes.index') }}"
                    class="nav-link"
                >
                    Beranda
                </a>


                <a
                    href="{{ route('recipes.index') }}#koleksi"
                    class="nav-link active"
                >
                    Koleksi Resep
                </a>


                @auth

                    <a
                        href="{{ route('recipes.create') }}"
                        class="nav-link"
                    >
                        Tambah Resep
                    </a>

                @endauth

            </nav>



            {{-- ACTIONS --}}

            <div class="nav-actions">

                @auth

                    @if(auth()->user()->role === 'admin')

                        <a
                            href="{{ route('admin.dashboard') }}"
                            class="nav-button primary"
                        >
                            Admin
                        </a>

                    @else

                        <a
                            href="{{ route('user.dashboard') }}"
                            class="nav-button primary dashboard-text"
                        >
                            Dashboard
                        </a>

                    @endif


                    <form
                        method="POST"
                        action="{{ route('logout') }}"
                        class="logout-form"
                    >

                        @csrf

                        <button
                            type="submit"
                            class="nav-button"
                        >
                            Keluar
                        </button>

                    </form>

                @else

                    <a
                        href="{{ route('login') }}"
                        class="nav-button"
                    >
                        Masuk
                    </a>


                    <a
                        href="{{ route('register') }}"
                        class="nav-button primary"
                    >
                        Daftar
                    </a>

                @endauth

            </div>

        </div>

    </header>



    {{-- =====================================================
         MAIN
    ====================================================== --}}

    <main class="page">


        {{-- BREADCRUMB --}}

        <div class="breadcrumb">

            <a href="{{ route('recipes.index') }}">
                Beranda
            </a>


            <span class="breadcrumb-separator">
                /
            </span>


            <a href="{{ route('recipes.index') }}#koleksi">
                Koleksi Resep
            </a>


            <span class="breadcrumb-separator">
                /
            </span>


            <span class="breadcrumb-current">
                {{ $recipe->title }}
            </span>

        </div>



        {{-- SUCCESS --}}

        @if(session('success'))

            <div class="success-message">
                {{ session('success') }}
            </div>

        @endif



        {{-- =================================================
             HERO
        ================================================== --}}

        <section class="recipe-hero">


            {{-- PHOTO --}}

            <div class="photo-area">

                <div class="photo-frame">


                    @if($recipe->image)

                        <img
                            src="{{ $recipe->imageUrl() }}"
                            alt="{{ $recipe->title }}"
                        >

                    @else

                        <div class="photo-placeholder">

                            <div class="placeholder-icon">
                                🍲
                            </div>


                            <div class="placeholder-text">
                                Resep Rumahan
                            </div>

                        </div>

                    @endif


                    <div class="photo-label">
                        Resep Rumahan
                    </div>


                    <div class="photo-number">
                        01
                    </div>


                </div>

            </div>



            {{-- INFORMATION --}}

            <div class="hero-content">


                <div class="eyebrow">
                    Koleksi Resep
                </div>


                <h1 class="recipe-title">
                    {{ $recipe->title }}
                </h1>


                <p class="recipe-description">
                    Nikmati resep rumahan yang sederhana, hangat,
                    dan cocok untuk menemani waktu makan sehari-hari.
                    Ikuti bahan dan langkahnya untuk mendapatkan
                    hasil masakan yang lezat.
                </p>



                {{-- AUTHOR --}}

                <div class="author-row">

                    <div class="author-avatar">
                        {{ strtoupper(substr($recipe->user->name ?? 'P', 0, 1)) }}
                    </div>


                    <div class="author-info">

                        <div class="author-name">
                            {{ $recipe->user->name ?? 'Pengguna' }}
                        </div>


                        <div class="author-date">
                            Dipublikasikan
                            {{ $recipe->created_at?->format('d M Y') ?? '-' }}
                        </div>

                    </div>

                </div>



                {{-- STATS --}}

                <div class="stats">


                    <div class="stat">

                        <div class="stat-value">

                            {{
                                count(
                                    array_filter(
                                        preg_split(
                                            '/\r\n|\r|\n/',
                                            trim($recipe->ingredients)
                                        )
                                    )
                                )
                            }}

                        </div>


                        <div class="stat-label">
                            Bahan
                        </div>

                    </div>



                    <div class="stat">

                        <div class="stat-value">

                            {{
                                count(
                                    array_filter(
                                        preg_split(
                                            '/\r\n|\r|\n/',
                                            trim($recipe->steps)
                                        )
                                    )
                                )
                            }}

                        </div>


                        <div class="stat-label">
                            Langkah
                        </div>

                    </div>



                    <div class="stat">

                        <div class="stat-value">
                            •
                        </div>


                        <div class="stat-label">
                            Rumahan
                        </div>

                    </div>


                </div>

            </div>

        </section>



        {{-- =================================================
             SAVE
        ================================================== --}}

        <div class="action-bar">


            <div class="action-label">
                Simpan resep ini
            </div>


            <form
                method="POST"
                action="{{ route('recipe.favorite', $recipe) }}"
                class="favorite-form"
            >

                @csrf


                <button
                    type="submit"
                    class="favorite-button"
                >

                    <span class="favorite-icon">
                        ♡
                    </span>


                    Simpan Resep

                </button>

            </form>


        </div>



        {{-- =================================================
             CONTENT
        ================================================== --}}

        <div class="recipe-content">


            {{-- MAIN COLUMN --}}

            <div class="main-column">


                {{-- =================================================
                     INGREDIENTS
                ================================================== --}}

                <section
                    id="bahan"
                    class="section"
                >


                    <div class="section-heading">


                        <div class="section-heading-left">

                            <span class="section-number">
                                01
                            </span>


                            <h2 class="section-title">
                                Bahan-bahan
                            </h2>

                        </div>


                        <span class="section-caption">
                            Siapkan terlebih dahulu
                        </span>


                    </div>



                    @php

                        $ingredients = array_filter(
                            preg_split(
                                '/\r\n|\r|\n/',
                                trim($recipe->ingredients)
                            )
                        );

                    @endphp



                    <div class="ingredients-grid">


                        @foreach($ingredients as $ingredient)

                            <div class="ingredient-item">

                                <span class="ingredient-dot"></span>


                                <span>
                                    {{ trim($ingredient) }}
                                </span>

                            </div>

                        @endforeach


                    </div>


                </section>



                {{-- =================================================
                     STEPS
                ================================================== --}}

                <section
                    id="cara-memasak"
                    class="section"
                >


                    <div class="section-heading">


                        <div class="section-heading-left">

                            <span class="section-number">
                                02
                            </span>


                            <h2 class="section-title">
                                Cara Memasak
                            </h2>

                        </div>


                        <span class="section-caption">
                            Ikuti langkahnya
                        </span>


                    </div>



                    @php

                        $steps = array_filter(
                            preg_split(
                                '/\r\n|\r|\n/',
                                trim($recipe->steps)
                            )
                        );

                        $stepNumber = 1;

                    @endphp



                    <div class="steps-list">


                        @foreach($steps as $step)

                            <div class="step">


                                <div class="step-number">
                                    {{ $stepNumber }}
                                </div>


                                <div class="step-content">

                                    <h3 class="step-title">
                                        Langkah {{ $stepNumber }}
                                    </h3>


                                    <p class="step-text">
                                        {{ trim($step) }}
                                    </p>

                                </div>


                            </div>


                            @php
                                $stepNumber++;
                            @endphp


                        @endforeach


                    </div>



                    {{-- TIP --}}

                    <div class="recipe-tip">


                        <div class="tip-label">
                            Catatan Resep
                        </div>


                        <p class="tip-text">
                            Gunakan bahan yang masih segar dan sesuaikan
                            bumbu dengan selera. Masak dengan api yang
                            sesuai agar rasa dan tekstur makanan tetap
                            maksimal.
                        </p>


                    </div>


                </section>


            </div>



            {{-- =================================================
                 SIDE COLUMN
            ================================================== --}}

            <aside class="side-column">


                {{-- NAVIGATION --}}

                <div class="side-card">


                    <h3 class="side-card-title">
                        Di Halaman Ini
                    </h3>


                    <div class="side-menu">


                        <a href="#bahan">

                            <span>
                                Bahan-bahan
                            </span>


                            <span>
                                →
                            </span>

                        </a>


                        <a href="#cara-memasak">

                            <span>
                                Cara Memasak
                            </span>


                            <span>
                                →
                            </span>

                        </a>


                        <a href="#top">

                            <span>
                                Kembali ke Atas
                            </span>


                            <span>
                                ↑
                            </span>

                        </a>


                    </div>


                </div>



                {{-- INFORMATION --}}

                <div class="side-card">


                    <h3 class="side-card-title">
                        Informasi
                    </h3>


                    <div class="info-list">


                        <div class="info-row">

                            <div class="info-label">
                                Dibuat oleh
                            </div>


                            <div class="info-value">
                                {{ $recipe->user->name ?? 'Pengguna' }}
                            </div>

                        </div>



                        <div class="info-row">

                            <div class="info-label">
                                Dipublikasikan
                            </div>


                            <div class="info-value">
                                {{ $recipe->created_at?->format('d M Y') ?? '-' }}
                            </div>

                        </div>



                        <div class="info-row">

                            <div class="info-label">
                                Diperbarui
                            </div>


                            <div class="info-value">
                                {{ $recipe->updated_at?->format('d M Y') ?? '-' }}
                            </div>

                        </div>



                        <div class="info-row">

                            <div class="info-label">
                                Kategori
                            </div>


                            <div class="info-value">
                                Masakan Rumahan
                            </div>

                        </div>


                    </div>


                </div>



                {{-- ADMIN --}}

                @auth

                    @if(auth()->user()->role === 'admin')

                        <div class="side-card admin-card">


                            <h3 class="side-card-title">
                                Kelola Resep
                            </h3>


                            <p class="admin-description">
                                Kamu memiliki akses administrator
                                untuk mengubah informasi resep ini.
                            </p>


                            <a
                                href="{{ route('admin.recipes.edit', $recipe) }}"
                                class="admin-button"
                            >
                                Edit Resep
                            </a>


                        </div>

                    @endif

                @endauth


            </aside>


        </div>


    </main>



    {{-- =====================================================
         FOOTER
    ====================================================== --}}

    <footer class="footer">

        <div class="footer-inner">


            <div class="footer-main">


                {{-- FOOTER BRAND --}}

                <div class="footer-brand-area">


                    <div class="footer-logo">
                        R
                    </div>


                    <div class="footer-brand-text">

                        <div class="footer-brand-name">
                            ResepKu
                        </div>


                        <div class="footer-tagline">
                            Cerita sederhana dari dapur untuk meja makan.
                        </div>

                    </div>


                </div>



                {{-- FOOTER LINKS --}}

                <div class="footer-links">


                    <a
                        href="{{ route('recipes.index') }}"
                        class="footer-link"
                    >
                        Beranda
                    </a>


                    <a
                        href="{{ route('recipes.index') }}#koleksi"
                        class="footer-link"
                    >
                        Koleksi Resep
                    </a>


                    @auth

                        <a
                            href="{{ route('recipes.create') }}"
                            class="footer-link"
                        >
                            Tambah Resep
                        </a>

                    @endauth


                </div>


            </div>



            {{-- FOOTER BOTTOM --}}

            <div class="footer-bottom">


                <div class="footer-copy">
                    © {{ date('Y') }} ResepKu. Semua hak dilindungi.
                </div>


                <div class="footer-note">
                    Dibuat untuk pecinta masakan rumahan.
                </div>


            </div>


        </div>

    </footer>


</body>

</html>