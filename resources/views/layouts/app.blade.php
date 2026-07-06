<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Portal</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-indigo-700 text-white">

        <div class="p-6 text-center border-b border-indigo-500">
            <div class="text-4xl">🎓</div>
            <h1 class="text-xl font-bold mt-2">Student Portal</h1>
        </div>

        <nav class="mt-4">

            <a href="{{ route('dashboard') }}" class="block px-6 py-3 hover:bg-indigo-600">
                Dashboard
            </a>

            <a href="{{ route('students.index') }}" class="block px-6 py-3 hover:bg-indigo-600">
                Students
            </a>

            <a href="{{ route('students.create') }}" class="block px-6 py-3 hover:bg-indigo-600">
                Add Student
            </a>

        </nav>

    </aside>

    <!-- Main -->
    <div class="flex-1">

        <!-- Topbar -->
        <header class="bg-white shadow px-6 py-4 flex justify-between">

            <h1 class="font-bold text-gray-700">
                Student Management System
            </h1>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="bg-red-500 text-white px-4 py-2 rounded">
                    Logout
                </button>
            </form>

        </header>

        <!-- Content -->
        <main class="p-6">

            {{ $slot }}

        </main>

    </div>

</div>

</body>
</html>