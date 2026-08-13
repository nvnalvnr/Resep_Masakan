<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Resep</title>
</head>

<body>

    <h1>Daftar Resep</h1>

    {{-- SEARCH --}}
    <form action="/recipes" method="GET">

        <input
            type="text"
            name="search"
            placeholder="Cari resep..."
            value="{{ request('search') }}"
        >

        <button type="submit">
            Cari
        </button>

    </form>

    <br>

    {{-- TAMBAH RESEP --}}
    <a href="/recipes/create">
        Tambah Resep
    </a>

    <hr>

    {{-- PESAN SUCCESS --}}
    @if (session('success'))

        <p>
            {{ session('success') }}
        </p>

    @endif

    {{-- DAFTAR RESEP --}}
    @forelse ($recipes as $recipe)

        <div>

            {{-- NAMA RESEP --}}
            <h2>
                {{ $recipe->title }}
            </h2>


            {{-- FOTO RESEP --}}
            @if ($recipe->image)

                <div>
                    <img
                        src="{{ $recipe->imageUrl() }}"
                        alt="{{ $recipe->title }}"
                        width="300"
                    >
                </div>

            @else

                <p>
                    Belum ada foto.
                </p>

            @endif


            <br>


            {{-- DETAIL --}}
            <a href="/recipes/{{ $recipe->slug }}">
                Lihat Detail
            </a>

            |


            {{-- EDIT --}}
            @can('update', $recipe)

                <a href="/recipes/{{ $recipe->slug }}">
    Lihat Detail
</a>

    @if (auth()->user()->role === 'admin' || auth()->id() === $recipe->user_id)

        <a href="/recipes/{{ $recipe->id }}/edit">
            Edit
        </a>

        <form
            action="/recipes/{{ $recipe->id }}"
            method="POST"
            style="display: inline;"
        >
            @csrf
            @method('DELETE')

            <button
                type="submit"
                onclick="return confirm('Yakin ingin menghapus resep ini?')"
            >
                Hapus
            </button>
    </form>

@endif
            @endcan

        </div>

        <hr>

    @empty

        {{-- JIKA TIDAK ADA RESEP --}}
        <p>

            @if (request('search'))

                Resep "{{ request('search') }}" tidak ditemukan.

            @else

                Belum ada resep.

            @endif

        </p>

    @endforelse


    {{-- PAGINATION --}}
    <div>

        {{ $recipes->links() }}

    </div>

</body>

</html>