<nav x-data="{ open: false }" class="bg-gradient-to-r from-purple-700 via-indigo-700 to-blue-700 shadow-lg">

    <div class="max-w-7xl mx-auto px-4">

        <div class="flex justify-between h-16">

            <!-- Left -->
            <div class="flex items-center">

                <a href="{{ route('dashboard') }}"
                    class="text-white text-2xl font-bold tracking-wide">

                    🎓 Student System

                </a>

                <div class="hidden sm:flex ml-10 space-x-8">

                    <a href="{{ route('dashboard') }}"
                        class="text-white hover:text-yellow-300 font-semibold transition">

                        🏠 Dashboard

                    </a>

                    <a href="{{ route('students.index') }}"
                        class="text-white hover:text-yellow-300 font-semibold transition">

                        👨‍🎓 Students

                    </a>

                </div>

            </div>

            <!-- Right -->
            <div class="hidden sm:flex items-center">

                <x-dropdown align="right" width="48">

                    <x-slot name="trigger">

                        <button
                            class="bg-white text-purple-700 px-4 py-2 rounded-lg shadow hover:bg-gray-100">

                            {{ Auth::user()->name }}

                        </button>

                    </x-slot>

                    <x-slot name="content">

                        <x-dropdown-link :href="route('profile.edit')">

                            👤 Profile

                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">

                            @csrf

                            <x-dropdown-link
                                :href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">

                                🚪 Logout

                            </x-dropdown-link>

                        </form>

                    </x-slot>

                </x-dropdown>

            </div>

            <!-- Mobile -->
            <div class="sm:hidden flex items-center">

                <button
                    @click="open = ! open"
                    class="text-white">

                    ☰

                </button>

            </div>

        </div>

    </div>

</nav>