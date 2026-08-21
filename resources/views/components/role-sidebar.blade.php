@props(['active' => null])

@php
    $currentUser = auth()->user();
    $isAdmin = $currentUser?->role === 'admin';
    $dashboardRoute = $isAdmin ? 'admin.dashboard' : 'user.dashboard';

    $items = $isAdmin
        ? [
            ['key' => 'dashboard', 'route' => 'admin.dashboard', 'icon' => 'dashboard', 'label' => 'Dashboard'],
            ['key' => 'recipes', 'route' => 'admin.recipes.index', 'icon' => 'recipes', 'label' => 'Daftar Resep'],
            ['key' => 'create', 'route' => 'admin.recipes.create', 'icon' => 'add', 'label' => 'Tambah Resep'],
            ['key' => 'users', 'route' => 'admin.users.index', 'icon' => 'users', 'label' => 'Data User'],
            ['key' => 'website', 'route' => 'recipes.index', 'icon' => 'globe', 'label' => 'Lihat Website'],
        ]
        : [
            ['key' => 'dashboard', 'route' => 'user.dashboard', 'icon' => 'dashboard', 'label' => 'Dashboard'],
            ['key' => 'recipes', 'route' => 'recipes.my', 'icon' => 'recipes', 'label' => 'Resep Saya'],
            ['key' => 'favorites', 'route' => 'user.favorites', 'icon' => 'favorite', 'label' => 'Resep Tersimpan'],
            ['key' => 'create', 'route' => 'recipes.create', 'icon' => 'add', 'label' => 'Tambah Resep'],
            ['key' => 'profile', 'route' => 'profile.edit', 'icon' => 'profile', 'label' => 'Profil'],
            ['key' => 'website', 'route' => 'recipes.index', 'icon' => 'globe', 'label' => 'Lihat Website'],
        ];
@endphp

<aside class="sidebar role-sidebar">
    <div class="brand">
        <a href="{{ route($dashboardRoute) }}" class="brand-link">
            <span class="brand-mark"><x-nav-icon name="logo" /></span>
            <span class="brand-copy">
                <strong>ResepKu</strong>
                <small>{{ $isAdmin ? 'Panel Admin' : 'Website Resep Masakan' }}</small>
            </span>
        </a>
    </div>

    <div class="{{ $isAdmin ? 'menu-title' : 'menu-label' }}">Menu Utama</div>

    <nav class="menu" aria-label="Navigasi {{ $isAdmin ? 'admin' : 'user' }}">
        @foreach ($items as $item)
            <a
                href="{{ route($item['route']) }}"
                @class(['active' => $active === $item['key']])
                @if ($active === $item['key']) aria-current="page" @endif
            >
                <span class="menu-icon"><x-nav-icon :name="$item['icon']" /></span>
                <span>{{ $item['label'] }}</span>
            </a>
        @endforeach
    </nav>

    <div class="sidebar-bottom">
        <div class="{{ $isAdmin ? 'profile-mini' : 'profile-box' }}">
            <div class="avatar">{{ strtoupper(substr($currentUser->name, 0, 1)) }}</div>

            @if ($isAdmin)
                <div class="profile-mini-info">
                    <strong>{{ $currentUser->name }}</strong>
                    <span>{{ ucfirst($currentUser->role) }}</span>
                </div>
            @else
                <div class="profile-info">
                    <span class="profile-name">{{ $currentUser->name }}</span>
                    <span class="profile-role">{{ ucfirst($currentUser->role) }}</span>
                </div>
            @endif
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="{{ $isAdmin ? 'logout-btn' : 'logout-button' }}">
                <x-nav-icon name="logout" />
                <span>Keluar</span>
            </button>
        </form>
    </div>
</aside>
