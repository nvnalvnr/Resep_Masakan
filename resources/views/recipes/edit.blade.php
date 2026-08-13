<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Resep</title>
</head>

<body>

    <h1>Edit Resep</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        action="/recipes/{{ $recipe->id }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf
        @method('PUT')

        <div>
            <label for="title">Nama Resep</label>
            <br>

            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title', $recipe->title) }}"
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
            >{{ old('ingredients', $recipe->ingredients) }}</textarea>
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
            >{{ old('steps', $recipe->steps) }}</textarea>
        </div>

        <br>

        {{-- FOTO LAMA --}}
        @if ($recipe->image)

            <div>
                <p>Foto saat ini:</p>

                <img
                    src="{{ $recipe->imageUrl() }}"
                    alt="{{ $recipe->title }}"
                    width="300"
                >
            </div>

            <br>

        @endif

        {{-- FOTO BARU --}}
        <div>
            <label for="image">
                Ganti Foto Resep
            </label>

            <br>

            <input
                type="file"
                id="image"
                name="image"
                accept="image/*"
            >

            <p>
                Kosongkan jika tidak ingin mengganti foto.
            </p>
        </div>

        <br>

        <button type="submit">
            Update Resep
        </button>

        <a href="/recipes">
            Batal
        </a>

    </form>

</body>

</html>