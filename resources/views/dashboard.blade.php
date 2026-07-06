<x-app-layout>

<div class="space-y-8">

    <!-- Welcome -->
    <div>
        <h1 class="text-4xl font-bold text-gray-800">
            🎓 Student Portal Dashboard
        </h1>

        <p class="text-gray-500 mt-2">
            Welcome back,
            <span class="font-bold text-indigo-600">
                {{ Auth::user()->name }}
            </span>
        </p>
    </div>

    <!-- Dashboard Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

        <!-- Students -->
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl shadow-xl p-6 text-white hover:scale-105 transition">

            <div class="flex justify-between items-center">

                <div>

                    <p class="text-blue-100 text-lg">
                        Total Students
                    </p>

                    <h2 class="text-5xl font-bold mt-4">
                        {{ \App\Models\Student::count() }}
                    </h2>

                </div>

                <div class="bg-white/20 rounded-full p-4 text-5xl">
                    🎓
                </div>

            </div>

        </div>

        <!-- Courses -->
        <div class="bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl shadow-xl p-6 text-white hover:scale-105 transition">

            <div class="flex justify-between items-center">

                <div>

                    <p class="text-green-100 text-lg">
                        Courses
                    </p>

                    <h2 class="text-5xl font-bold mt-4">
                        {{ \App\Models\Student::distinct('course')->count('course') }}
                    </h2>

                </div>

                <div class="bg-white/20 rounded-full p-4 text-5xl">
                    📚
                </div>

            </div>

        </div>

        <!-- Logged User -->
        <div class="bg-gradient-to-r from-purple-500 to-pink-600 rounded-2xl shadow-xl p-6 text-white hover:scale-105 transition">

            <div class="flex justify-between items-center">

                <div>

                    <p class="text-purple-100 text-lg">
                        Logged In
                    </p>

                    <h2 class="text-2xl font-bold mt-4">
                        {{ Auth::user()->name }}
                    </h2>

                </div>

                <div class="bg-white/20 rounded-full p-4 text-5xl">
                    👤
                </div>

            </div>

        </div>

        <!-- Status -->
        <div class="bg-gradient-to-r from-red-500 to-orange-500 rounded-2xl shadow-xl p-6 text-white hover:scale-105 transition">

            <div class="flex justify-between items-center">

                <div>

                    <p class="text-red-100 text-lg">
                        Portal Status
                    </p>

                    <h2 class="text-3xl font-bold mt-4">
                        Online
                    </h2>

                </div>

                <div class="bg-white/20 rounded-full p-4 text-5xl">
                    ✅
                </div>

            </div>

        </div>

    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-2xl shadow-xl p-8">

        <h2 class="text-2xl font-bold text-gray-800 mb-6">
            🚀 Quick Actions
        </h2>

        <div class="flex flex-wrap gap-4">

            <a href="{{ route('students.index') }}"
                class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-6 py-3 rounded-xl shadow-lg">

                📋 View Students

            </a>

            <a href="{{ route('students.create') }}"
                class="bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white px-6 py-3 rounded-xl shadow-lg">

                ➕ Add Student

            </a>

        </div>

    </div>

</div>

</x-app-layout>