<x-app-layout>

<div class="space-y-8">

    <!-- HEADER -->
    <div class="flex items-center justify-between">

        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                🎓 Student Portal Dashboard
            </h1>

            <p class="text-gray-500">
                Manage all student records
            </p>
        </div>

        <a href="{{ route('students.create') }}"
           class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-3 rounded-xl shadow-lg hover:scale-105 transition">

            ➕ Add Student
        </a>

    </div>

    <!-- CARDS -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Total Students -->
        <div class="bg-gradient-to-r from-blue-500 to-blue-700 text-white p-6 rounded-2xl shadow-xl">

            <div class="flex justify-between items-center">

                <div>
                    <p class="text-blue-100">Total Students</p>
                    <h2 class="text-5xl font-bold mt-2">
                        {{ $students->count() }}
                    </h2>
                </div>

                <div class="text-6xl opacity-80">
                    🎓
                </div>

            </div>

        </div>

        <!-- Courses -->
        <div class="bg-gradient-to-r from-green-500 to-green-700 text-white p-6 rounded-2xl shadow-xl">

            <div class="flex justify-between items-center">

                <div>
                    <p class="text-green-100">Courses</p>
                    <h2 class="text-5xl font-bold mt-2">
                        {{ $students->pluck('course')->unique()->count() }}
                    </h2>
                </div>

                <div class="text-6xl opacity-80">
                    📚
                </div>

            </div>

        </div>

        <!-- Status -->
        <div class="bg-gradient-to-r from-purple-500 to-pink-600 text-white p-6 rounded-2xl shadow-xl">

            <div class="flex justify-between items-center">

                <div>
                    <p class="text-purple-100">System Status</p>
                    <h2 class="text-3xl font-bold mt-2">
                        Active
                    </h2>
                </div>

                <div class="text-6xl opacity-80">
                    ✅
                </div>

            </div>

        </div>

    </div>

    <!-- TABLE CARD -->
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">

        <!-- HEADER -->
        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 px-6 py-4">

            <h2 class="text-white text-2xl font-bold">
                Student List
            </h2>

        </div>

        <!-- TABLE -->
        <div class="overflow-x-auto">

            <table class="w-full">

                <thead class="bg-gray-100 text-gray-700">

                    <tr>
                        <th class="p-4 text-left">ID</th>
                        <th class="p-4 text-left">Student No.</th>
                        <th class="p-4 text-left">Name</th>
                        <th class="p-4 text-left">Course</th>
                        <th class="p-4 text-left">Year</th>
                        <th class="p-4 text-left">Email</th>
                        <th class="p-4 text-center">Action</th>
                    </tr>

                </thead>

                <tbody>

                @forelse($students as $student)

                    <tr class="border-b hover:bg-indigo-50 transition">

                        <td class="p-4">{{ $student->id }}</td>

                        <td class="p-4 font-semibold">
                            {{ $student->student_number }}
                        </td>

                        <td class="p-4">
                            {{ $student->first_name }} {{ $student->last_name }}
                        </td>

                        <td class="p-4">
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">
                                {{ $student->course }}
                            </span>
                        </td>

                        <td class="p-4">
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
                                Year {{ $student->year_level }}
                            </span>
                        </td>

                        <td class="p-4">
                            {{ $student->email }}
                        </td>

                        <td class="p-4">

                            <div class="flex justify-center gap-2">

                                <a href="{{ route('students.edit',$student) }}"
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg">

                                    ✏ Edit

                                </a>

                                <form action="{{ route('students.destroy',$student) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button onclick="return confirm('Delete this student?')"
                                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg">

                                        🗑 Delete

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="7" class="text-center p-10 text-gray-500">
                            No students found
                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-app-layout>