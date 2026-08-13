<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Resep Masakan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">

    {{-- ================= NAVBAR ================= --}}
    <nav class="bg-white border-b border-gray-200">

        <div class="max-w-7xl mx-auto px-6">

            <div class="flex justify-between items-center h-16">

                {{-- LOGO --}}
                <a
                    href="{{ route('dashboard') }}"
                    class="text-xl font-bold text-indigo-600"
                >
                    Resep Masakan
                </a>

                {{-- USER --}}
                <div class="flex items-center gap-5">

                    <span class="text-sm text-gray-600">
                        {{ Auth::user()->name }}
                    </span>

                    <form
                        method="POST"
                        action="{{ route('logout') }}"
                    >
                        @csrf

                        <button
                            type="submit"
                            class="text-sm text-red-500 hover:text-red-700"
                        >
                            Logout
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </nav>


    {{-- ================= BODY ================= --}}
    <div class="flex min-h-[calc(100vh-64px)]">


        {{-- ================= SIDEBAR ================= --}}
        <aside class="w-64 bg-white border-r border-gray-200">

            <div class="p-6">

                <p class="text-xs font-semibold text-gray-400 uppercase mb-4">
                    Menu
                </p>

                <nav class="space-y-2">

                    {{-- DASHBOARD --}}
                    <a
                        href="{{ route('dashboard') }}"
                        class="block px-4 py-3 rounded-lg
                        {{ request()->routeIs('dashboard')
                            ? 'bg-indigo-50 text-indigo-600 font-semibold'
                            : 'text-gray-600 hover:bg-gray-50' }}"
                    >
                        Dashboard
                    </a>


                    {{-- SEMUA RESEP --}}
                    <a
                        href="/recipes"
                        class="block px-4 py-3 rounded-lg
                        text-gray-600 hover:bg-gray-50"
                    >
                        Semua Resep Masakan
                    </a>


                    {{-- TAMBAH RESEP --}}
                    <a
                        href="/recipes/create"
                        class="block px-4 py-3 rounded-lg
                        text-gray-600 hover:bg-gray-50"
                    >
                        Tambah Resep Masakan
                    </a>


                


                    {{-- PROFILE --}}
                    <a
                        href="{{ route('profile.edit') }}"
                        class="block px-4 py-3 rounded-lg
                        text-gray-600 hover:bg-gray-50"
                    >
                        Profile
                    </a>

                </nav>

            </div>

        </aside>


        {{-- ================= MAIN CONTENT ================= --}}
        <main class="flex-1 p-8">

            {{-- HEADER --}}
            <div class="mb-8">

                <h1 class="text-3xl font-bold text-gray-800">
                    Dashboard
                </h1>

                <p class="text-gray-500 mt-2">
                    Selamat datang,
                    {{ Auth::user()->name }}!
                </p>

            </div>


            {{-- ROLE --}}
            <div class="mb-6">

                @if (Auth::user()->role === 'admin')

                    <span
                        class="inline-flex items-center px-3 py-1
                        rounded-full text-sm font-medium
                        bg-purple-100 text-purple-700"
                    >
                        Administrator
                    </span>

                @else

                    <span
                        class="inline-flex items-center px-3 py-1
                        rounded-full text-sm font-medium
                        bg-blue-100 text-blue-700"
                    >
                        User
                    </span>

                @endif

            </div>


            {{-- ================= STATISTIK ================= --}}
            <div class="flex flex-row gap-6 w-full">


                {{-- TOTAL RESEP --}}
                <div class="flex-1 bg-white rounded-xl shadow-sm p-6">

                    <p class="text-sm text-gray-500">
                        Total Resep
                    </p>

                    <h2 class="text-3xl font-bold text-gray-800 mt-2">
                        {{ \App\Models\Recipe::count() }}
                    </h2>

                    <p class="text-xs text-gray-400 mt-2">
                        Semua resep
                    </p>

                </div>


                {{-- RESEP SAYA --}}
                <div class="flex-1 bg-white rounded-xl shadow-sm p-6">

                    <p class="text-sm text-gray-500">
                        Resep Saya
                    </p>

                    <h2 class="text-3xl font-bold text-gray-800 mt-2">
                        {{ \App\Models\Recipe::where('user_id', Auth::id())->count() }}
                    </h2>

                    <p class="text-xs text-gray-400 mt-2">
                        Resep yang saya buat
                    </p>

                </div>


                {{-- TOTAL USER --}}
                @if (Auth::user()->role === 'admin')

                    <div class="flex-1 bg-white rounded-xl shadow-sm p-6">

                        <p class="text-sm text-gray-500">
                            Total User
                        </p>

                        <h2 class="text-3xl font-bold text-gray-800 mt-2">
                            {{ \App\Models\User::count() }}
                        </h2>

                        <p class="text-xs text-gray-400 mt-2">
                            Pengguna terdaftar
                        </p>

                    </div>

                @endif

            </div>


            {{-- ================= AKSI CEPAT ================= --}}
            <div class="mt-8 bg-white rounded-xl shadow-sm p-6">

                <h2 class="text-xl font-semibold text-gray-800 mb-2">
                    Aksi Cepat
                </h2>

                <p class="text-sm text-gray-500 mb-5">
                    Kelola resep masakan kamu dengan mudah.
                </p>

                <div class="flex gap-3">

                    <a
                        href="/recipes"
                        class="px-5 py-3 bg-indigo-600 text-white
                        rounded-lg hover:bg-indigo-700 transition"
                    >
                        Lihat Semua Resep
                    </a>


                    <a
                        href="/recipes/create"
                        class="px-5 py-3 bg-green-600 text-white
                        rounded-lg hover:bg-green-700 transition"
                    >
                        + Tambah Resep
                    </a>

                </div>

            </div>


            {{-- ================= INFO ADMIN ================= --}}
            @if (Auth::user()->role === 'admin')

                <div class="mt-6 bg-purple-50 border border-purple-100
                            rounded-xl p-6">

                    <h2 class="font-semibold text-purple-800">
                        Panel Administrator
                    </h2>

                    <p class="text-sm text-purple-600 mt-2">
                        Sebagai admin, kamu dapat mengelola seluruh data
                        resep yang ada di website.
                    </p>

                </div>

            @endif


        </main>

    </div>


    {{-- ================= FOOTER ================= --}}
    <footer class="bg-white border-t border-gray-200">

        <div class="max-w-7xl mx-auto px-6 py-6 text-center">

            <p class="text-sm text-gray-500">
                © {{ date('Y') }} Resep Masakan.
                All rights reserved.
            </p>

        </div>

    </footer>

</body>

</html>