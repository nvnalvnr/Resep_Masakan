<x-app-layout>

    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>

            <a
                href="{{ url('/recipes') }}"
                class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700"
            >
                Lihat Resep
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Welcome --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold mb-2">
                        Halo, {{ Auth::user()->name }} 👋
                    </h3>

                    <p class="text-gray-600">
                        Selamat datang di Platform Resep Masakan.
                        Yuk lihat atau tambahkan resep favoritmu!
                    </p>
                </div>
            </div>


            {{-- Recipe Menu --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Daftar Resep --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">

                        <h3 class="text-xl font-semibold text-gray-800 mb-2">
                            🍳 Daftar Resep
                        </h3>

                        <p class="text-gray-600 mb-4">
                            Lihat semua resep masakan yang tersedia.
                        </p>

                        <a
                            href="{{ url('/recipes') }}"
                            class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700"
                        >
                            Lihat Resep
                        </a>

                    </div>
                </div>


                {{-- Tambah Resep --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">

                        <h3 class="text-xl font-semibold text-gray-800 mb-2">
                            ➕ Tambah Resep
                        </h3>

                        <p class="text-gray-600 mb-4">
                            Bagikan resep masakan favoritmu.
                        </p>

                        <a
                            href="{{ url('/recipes/create') }}"
                            class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700"
                        >
                            Tambah Resep
                        </a>

                    </div>
                </div>

            </div>

        </div>
    </div>

</x-app-layout>