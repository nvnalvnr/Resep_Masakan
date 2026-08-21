<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">

    <!-- Primary Navigation -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex justify-between h-16">

            <!-- LEFT -->
            <div class="flex items-center">

                <!-- LOGO -->
                <div class="shrink-0 flex items-center">

                    <a href="{{ route('user.dashboard') }}"
                       class="text-xl font-bold text-gray-800">

                        Resep<span class="text-orange-600">Ku</span>

                    </a>

                </div>


                <!-- MENU DESKTOP -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">


                    <!-- Dashboard -->
                    <x-nav-link
                        :href="route('user.dashboard')"
                        :active="request()->routeIs('user.dashboard')"
                    >
                        {{ __('Dashboard') }}
                    </x-nav-link>


                    <!-- Resep Saya -->
                    <x-nav-link
                        :href="route('user.recipes')"
                        :active="request()->routeIs('user.recipes')"
                    >
                        {{ __('Resep Saya') }}
                    </x-nav-link>


                    <!-- Resep Tersimpan -->
                    <x-nav-link
                        :href="route('user.favorites')"
                        :active="request()->routeIs('user.favorites')"
                    >
                        {{ __('Resep Tersimpan') }}
                    </x-nav-link>


                    <!-- Tambah Resep -->
                    <x-nav-link
                        :href="route('recipes.create')"
                        :active="request()->routeIs('recipes.create')"
                    >
                        {{ __('Tambah Resep') }}
                    </x-nav-link>


                    <!-- Profil -->
                    <x-nav-link
                        :href="route('profile.edit')"
                        :active="request()->routeIs('profile.*')"
                    >
                        {{ __('Profil') }}
                    </x-nav-link>

                </div>

            </div>


            <!-- USER DROPDOWN -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">

                <x-dropdown align="right" width="48">

                    <x-slot name="trigger">

                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition"
                        >

                            <div>
                                {{ Auth::user()->name }}
                            </div>

                            <div class="ms-1">

                                <svg
                                    class="fill-current h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                >

                                    <path
                                        fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    />

                                </svg>

                            </div>

                        </button>

                    </x-slot>


                    <!-- DROPDOWN -->
                    <x-slot name="content">


                        <!-- Profile -->
                        <x-dropdown-link
                            :href="route('profile.edit')"
                        >
                            {{ __('Profil') }}
                        </x-dropdown-link>


                        <!-- Logout -->
                        <form
                            method="POST"
                            action="{{ route('logout') }}"
                        >

                            @csrf

                            <x-dropdown-link
                                :href="route('logout')"
                                onclick="event.preventDefault();
                                    this.closest('form').submit();"
                            >

                                {{ __('Keluar') }}

                            </x-dropdown-link>

                        </form>


                    </x-slot>

                </x-dropdown>

            </div>


            <!-- HAMBURGER -->
            <div class="-me-2 flex items-center sm:hidden">

                <button
                    @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none transition"
                >

                    <svg
                        class="h-6 w-6"
                        stroke="currentColor"
                        fill="none"
                        viewBox="0 0 24 24"
                    >

                        <path
                            :class="{
                                'hidden': open,
                                'inline-flex': ! open
                            }"
                            class="inline-flex"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />

                        <path
                            :class="{
                                'hidden': ! open,
                                'inline-flex': open
                            }"
                            class="hidden"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />

                    </svg>

                </button>

            </div>

        </div>

    </div>


    <!-- RESPONSIVE MENU -->
    <div
        :class="{
            'block': open,
            'hidden': ! open
        }"
        class="hidden sm:hidden"
    >

        <div class="pt-2 pb-3 space-y-1">


            <!-- Dashboard -->
            <x-responsive-nav-link
                :href="route('user.dashboard')"
                :active="request()->routeIs('user.dashboard')"
            >
                {{ __('Dashboard') }}
            </x-responsive-nav-link>


            <!-- Resep Saya -->
            <x-responsive-nav-link
                :href="route('user.recipes')"
                :active="request()->routeIs('user.recipes')"
            >
                {{ __('Resep Saya') }}
            </x-responsive-nav-link>


            <!-- Resep Tersimpan -->
            <x-responsive-nav-link
                :href="route('user.favorites')"
                :active="request()->routeIs('user.favorites')"
            >
                {{ __('Resep Tersimpan') }}
            </x-responsive-nav-link>


            <!-- Tambah Resep -->
            <x-responsive-nav-link
                :href="route('recipes.create')"
                :active="request()->routeIs('recipes.create')"
            >
                {{ __('Tambah Resep') }}
            </x-responsive-nav-link>


            <!-- Profil -->
            <x-responsive-nav-link
                :href="route('profile.edit')"
                :active="request()->routeIs('profile.*')"
            >
                {{ __('Profil') }}
            </x-responsive-nav-link>

        </div>


        <!-- RESPONSIVE USER -->
        <div class="pt-4 pb-1 border-t border-gray-200">

            <div class="px-4">

                <div class="font-medium text-base text-gray-800">
                    {{ Auth::user()->name }}
                </div>

                <div class="font-medium text-sm text-gray-500">
                    {{ Auth::user()->email }}
                </div>

            </div>


            <div class="mt-3 space-y-1">


                <!-- Profile -->
                <x-responsive-nav-link
                    :href="route('profile.edit')"
                >
                    {{ __('Profil') }}
                </x-responsive-nav-link>


                <!-- Logout -->
                <form
                    method="POST"
                    action="{{ route('logout') }}"
                >

                    @csrf

                    <x-responsive-nav-link
                        :href="route('logout')"
                        onclick="event.preventDefault();
                            this.closest('form').submit();"
                    >
                        {{ __('Keluar') }}
                    </x-responsive-nav-link>

                </form>

            </div>

        </div>

    </div>

</nav>