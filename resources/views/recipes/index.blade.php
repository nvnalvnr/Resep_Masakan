<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Resep</title>
</head>

<body>

    <h1>Daftar Resep</h1>

    {{-- =========================
         SEARCH
    ========================== --}}
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

    {{-- =========================
         TAMBAH RESEP
    ========================== --}}
    <a href="/recipes/create">
        Tambah Resep
    </a>

    <hr>

    {{-- =========================
         PESAN SUCCESS
    ========================== --}}
    @if (session('success'))
        <p>
            {{ session('success') }}
        </p>
    @endif


    {{-- =========================
         DAFTAR RESEP
    ========================== --}}
    @forelse ($recipes as $recipe)

        <div>

            {{-- JUDUL --}}
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

            @endif

            <br>


            {{-- DETAIL --}}
            <a href="/recipes/{{ $recipe->slug }}">
                Lihat Detail
            </a>

            |


            {{-- EDIT --}}
            <a href="/recipes/{{ $recipe->id }}/edit">
                Edit
            </a>

            |


            {{-- HAPUS --}}
            <form
                action="/recipes/{{ $recipe->id }}"
                method="POST"
                style="display: inline;"
            >

                @csrf

                @method('DELETE')

                <button type="submit">
                    Hapus
                </button>

            </form>

        </div>

        <hr>


    @empty

        {{-- =========================
             JIKA TIDAK ADA RESEP
        ========================== --}}

        @if (request('search'))

            <p>
                Resep "{{ request('search') }}" tidak ditemukan.
            </p>

        @else

            <p>
                Belum ada resep.
            </p>

        @endif

    @endforelse


    {{-- =========================
         PAGINATION
    ========================== --}}
    @if ($recipes->hasPages())

        <div style="margin-top: 20px;">

            {{-- PREVIOUS --}}
            @if ($recipes->onFirstPage())

                <span>
                    Previous
                </span>

            @else

                <a href="{{ $recipes->previousPageUrl() }}">
                    Previous
                </a>

            @endif


            {{-- NOMOR HALAMAN --}}
            @foreach (
                $recipes->getUrlRange(1, $recipes->lastPage())
                as $page => $url
            )

                @if ($page == $recipes->currentPage())

                    <strong>
                        {{ $page }}
                    </strong>

                @else

                    <a href="{{ $url }}">
                        {{ $page }}
                    </a>

                @endif

            @endforeach


            {{-- NEXT --}}
            @if ($recipes->hasMorePages())

                <a href="{{ $recipes->nextPageUrl() }}">
                    Next
                </a>

            @else

                <span>
                    Next
                </span>

            @endif

        </div>

    @endif

</body>

</html>