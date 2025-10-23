<nav class="bg-gray-800">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Employee Management</span>
        </a>
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button"
                class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-700"
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="{{ asset('images/' . ($foto ?? 'icon-profile.jpg')) }}"
                    alt="user photo">
            </button>
            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-gray-700 divide-y divide-gray-600 rounded-lg shadow-sm"
                id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-white">{{ $username }}</span>
                    <span class="block text-sm  text-gray-400 truncate">{{ $email }}</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="{{ route('profile', ['username' => $username]) }}" :active="request()->is('profile')"
                            class="block px-4 py-2 text-sm text-gray-200 hover:bg-gray-600 hover:text-white">Your
                            profile</a>
                    <li>
                        <a href="{{ url('/') }}"
                            class="block px-4 py-2 text-sm text-gray-200 hover:bg-gray-600 hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>
            <button data-collapse-toggle="navbar-user" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-400 rounded-lg md:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600"
                aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <ul
                class="flex flex-col font-medium p-4 md:gap-10 md:p-0 mt-4 border border-gray-700 rounded-lg bg-gray-700 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-gray-800">
                <li>
                    <x-nav-link href="{{ route('dashboard', ['username' => $username]) }}" :active="request()->is('dashboard')">Dashboard</x-nav-link>
                </li>
                <li>
                    <x-nav-link href="{{ route('pengelolaan', ['username' => $username]) }}" :active="request()->is('pengelolaan')">Employees</x-nav-link>
                </li>
                <li>
                    <x-nav-link href="{{ route('contact', ['username' => $username]) }}" :active="request()->is('contact')">Contact</x-nav-link>
                </li>
            </ul>
        </div>
    </div>
</nav>
