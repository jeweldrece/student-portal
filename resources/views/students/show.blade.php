<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Student Details
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto">

            <div class="bg-white shadow rounded-lg p-6">

                <table class="min-w-full border border-gray-300">

                    <tr>
                        <th class="border px-4 py-2 bg-gray-100 text-left">Student Number</th>
                        <td class="border px-4 py-2">{{ $student->student_no }}</td>
                    </tr>

                    <tr>
                        <th class="border px-4 py-2 bg-gray-100 text-left">Full Name</th>
                        <td class="border px-4 py-2">{{ $student->name }}</td>
                    </tr>

                    <tr>
                        <th class="border px-4 py-2 bg-gray-100 text-left">Course</th>
                        <td class="border px-4 py-2">{{ $student->course }}</td>
                    </tr>

                    <tr>
                        <th class="border px-4 py-2 bg-gray-100 text-left">Year Level</th>
                        <td class="border px-4 py-2">{{ $student->year_level }}</td>
                    </tr>

                    <tr>
                        <th class="border px-4 py-2 bg-gray-100 text-left">Email</th>
                        <td class="border px-4 py-2">{{ $student->email }}</td>
                    </tr>

                </table>

                <div class="mt-6">

                    <a href="{{ route('students.index') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">

                        ← Back to Student List

                    </a>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>