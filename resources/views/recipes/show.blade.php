<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $recipe->title }}</title>
</head>

<body>

    <h1>{{ $recipe->title }}</h1>

    @if ($recipe->image)

        <img
            src="{{ $recipe->imageUrl() }}"
            alt="{{ $recipe->title }}"
            width="400"
        >

        <br><br>

    @endif

    <h2>Bahan-bahan</h2>

    <p>
        {!! nl2br(e($recipe->ingredients)) !!}
    </p>

    <h2>Langkah-langkah</h2>

    <p>
        {!! nl2br(e($recipe->steps)) !!}
    </p>

    <br>

    <a href="/recipes">
        Kembali
    </a>

    <a href="/recipes/{{ $recipe->id }}/edit">
        Edit
    </a>

</body>

</html>