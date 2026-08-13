<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Resep</title>
</head>

<body>

    <h1>Tambah Resep</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/recipes" method="POST" enctype="multipart/form-data">

        @csrf

        <div>
            <label for="title">Nama Resep</label>
            <br>

            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
                required
            >
        </div>

        <br>

        <div>
            <label for="ingredients">Bahan-bahan</label>
            <br>

            <textarea
                id="ingredients"
                name="ingredients"
                rows="8"
                required
            >{{ old('ingredients') }}</textarea>
        </div>

        <br>

        <div>
            <label for="steps">Langkah-langkah</label>
            <br>

            <textarea
                id="steps"
                name="steps"
                rows="8"
                required
            >{{ old('steps') }}</textarea>
        </div>

        <br>

        <div>
            <label for="image">Foto Resep</label>
            <br>

            <input
                type="file"
                id="image"
                name="image"
                accept="image/*"
            >
        </div>

        <br>

        <button type="submit">
            Simpan Resep
        </button>

        <a href="/recipes">
            Batal
        </a>

    </form>

</body>

</html>