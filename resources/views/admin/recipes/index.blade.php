<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Resep - Admin</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f8f6f3;
            color: #292524;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 30px;
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 25px;
        }

        .title h1 {
            font-size: 26px;
            margin-bottom: 7px;
        }

        .title p {
            color: #a8a29e;
            font-size: 13px;
        }

        .back-btn {
            background: white;
            border: 1px solid #eee8e1;
            padding: 11px 16px;
            border-radius: 10px;
            font-size: 13px;
            color: #57534e;
            transition: 0.2s;
        }

        .back-btn:hover {
            background: #fff7ed;
            color: #ea580c;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 13px 16px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 13px;
        }

        .recipe-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .recipe-card {
            background: white;
            border: 1px solid #eee8e1;
            border-radius: 16px;
            overflow: hidden;
            transition: 0.2s;
        }

        .recipe-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.06);
        }

        .recipe-image {
            width: 100%;
            height: 190px;
            object-fit: cover;
            display: block;
            background: #f5f5f4;
        }

        .no-image {
            width: 100%;
            height: 190px;
            background: #ffedd5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 50px;
        }

        .recipe-body {
            padding: 18px;
        }

        .recipe-body h3 {
            font-size: 17px;
            margin-bottom: 8px;
        }

        .recipe-user {
            font-size: 11px;
            color: #a8a29e;
            margin-bottom: 15px;
        }

        .recipe-actions {
            display: flex;
            gap: 8px;
        }

        .btn {
            flex: 1;
            text-align: center;
            padding: 9px;
            border-radius: 8px;
            font-size: 11px;
            border: none;
            cursor: pointer;
        }

        .btn-view {
            background: #f3e8ff;
            color: #7e22ce;
        }

        .btn-edit {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .btn-delete {
            background: #ffe4e6;
            color: #be123c;
        }

        .pagination {
            margin-top: 25px;
            display: flex;
            justify-content: center;
        }

        @media (max-width: 900px) {

            .recipe-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media (max-width: 600px) {

            .container {
                padding: 18px;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .recipe-grid {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>


<div class="container">


    <!-- HEADER -->

    <div class="topbar">

        <div class="title">

            <h1>
                🍲 Daftar Resep
            </h1>

            <p>
                Kelola seluruh resep yang dibuat pengguna.
            </p>

        </div>


        <a
            href="{{ route('admin.dashboard') }}"
            class="back-btn"
        >
            ← Kembali ke Dashboard
        </a>

    </div>


    <!-- SUCCESS MESSAGE -->

    @if(session('success'))

        <div class="success">

            {{ session('success') }}

        </div>

    @endif


    <!-- RECIPE LIST -->

    @if($recipes->count() > 0)

        <div class="recipe-grid">


            @foreach($recipes as $recipe)

                <div class="recipe-card">


                    <!-- IMAGE -->

                    @if($recipe->image)

                        <img
                            src="{{ $recipe->imageUrl() }}"
                            alt="{{ $recipe->title }}"
                            class="recipe-image"
                        >

                    @else

                        <div class="no-image">
                            🍳
                        </div>

                    @endif


                    <!-- BODY -->

                    <div class="recipe-body">


                        <h3>
                            {{ $recipe->title }}
                        </h3>


                        <div class="recipe-user">

                            👤 Dibuat oleh:

                            {{ $recipe->user->name ?? 'User' }}

                        </div>


                        <div class="recipe-actions">


                            <!-- DETAIL -->

                            <a
                                href="{{ route('admin.recipes.show', $recipe) }}"
                                class="btn btn-view"
                            >
                                Lihat
                            </a>


                            <!-- EDIT -->

                            <a
                                href="{{ route('admin.recipes.edit', $recipe) }}"
                                class="btn btn-edit"
                            >
                                Edit
                            </a>


                            <!-- DELETE -->

                            <form
                                method="POST"
                                action="{{ route('admin.recipes.destroy', $recipe) }}"
                                style="flex:1;"
                            >

                                @csrf

                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-delete"
                                    style="width:100%;"
                                    onclick="return confirm('Yakin ingin menghapus resep ini?')"
                                >
                                    Hapus
                                </button>

                            </form>


                        </div>


                    </div>


                </div>

            @endforeach


        </div>


        <!-- PAGINATION -->

        <div class="pagination">

            {{ $recipes->links() }}

        </div>


    @else

        <div
            style="
                background:white;
                border:1px solid #eee8e1;
                border-radius:16px;
                padding:50px;
                text-align:center;
            "
        >

            <div style="font-size:50px;">
                🍳
            </div>

            <h3 style="margin-top:15px;">
                Belum ada resep
            </h3>

            <p
                style="
                    margin-top:8px;
                    color:#a8a29e;
                    font-size:13px;
                "
            >
                Belum ada resep yang tersimpan di database.
            </p>

        </div>

    @endif


</div>


</body>

</html>