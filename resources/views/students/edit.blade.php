<x-app-layout>

<div class="max-w-3xl mx-auto">

    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">

        <!-- Header -->
        <div class="bg-gradient-to-r from-yellow-500 to-orange-500 px-8 py-6">

            <h1 class="text-3xl font-bold text-white">
                ✏ Edit Student
            </h1>

            <p class="text-yellow-100 mt-2">
                Update the student's information.
            </p>

        </div>

        <div class="p-8">

            @if ($errors->any())

                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6">

                    <ul class="list-disc ml-5">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            <form action="{{ route('students.update', $student) }}" method="POST">

                @csrf
                @method('PUT')

                <!-- Student Number -->
                <div class="mb-5">

                    <label class="block mb-2 font-semibold text-gray-700">
                        Student Number
                    </label>

                    <input
                        type="text"
                        name="student_number"
                        value="{{ old('student_number', $student->student_number) }}"
                        class="w-full border-2 border-gray-200 rounded-xl p-3 focus:outline-none focus:border-yellow-500">

                </div>

                <!-- First Name -->
                <div class="mb-5">

                    <label class="block mb-2 font-semibold text-gray-700">
                        First Name
                    </label>

                    <input
                        type="text"
                        name="first_name"
                        value="{{ old('first_name', $student->first_name) }}"
                        class="w-full border-2 border-gray-200 rounded-xl p-3 focus:outline-none focus:border-yellow-500">

                </div>

                <!-- Last Name -->
                <div class="mb-5">

                    <label class="block mb-2 font-semibold text-gray-700">
                        Last Name
                    </label>

                    <input
                        type="text"
                        name="last_name"
                        value="{{ old('last_name', $student->last_name) }}"
                        class="w-full border-2 border-gray-200 rounded-xl p-3 focus:outline-none focus:border-yellow-500">

                </div>

                <!-- Course -->
                <div class="mb-5">

                    <label class="block mb-2 font-semibold text-gray-700">
                        Course
                    </label>

                    <input
                        type="text"
                        name="course"
                        value="{{ old('course', $student->course) }}"
                        class="w-full border-2 border-gray-200 rounded-xl p-3 focus:outline-none focus:border-yellow-500">

                </div>

                <!-- Year Level -->
                <div class="mb-5">

                    <label class="block mb-2 font-semibold text-gray-700">
                        Year Level
                    </label>

                    <select
                        name="year_level"
                        class="w-full border-2 border-gray-200 rounded-xl p-3 focus:outline-none focus:border-yellow-500">

                        <option value="1" {{ $student->year_level == 1 ? 'selected' : '' }}>1st Year</option>
                        <option value="2" {{ $student->year_level == 2 ? 'selected' : '' }}>2nd Year</option>
                        <option value="3" {{ $student->year_level == 3 ? 'selected' : '' }}>3rd Year</option>
                        <option value="4" {{ $student->year_level == 4 ? 'selected' : '' }}>4th Year</option>

                    </select>

                </div>

                <!-- Email -->
                <div class="mb-8">

                    <label class="block mb-2 font-semibold text-gray-700">
                        Email Address
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email', $student->email) }}"
                        class="w-full border-2 border-gray-200 rounded-xl p-3 focus:outline-none focus:border-yellow-500">

                </div>

                <!-- Buttons -->
                <div class="flex justify-between">

                    <a href="{{ route('students.index') }}"
                        class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-xl shadow">

                        ← Back

                    </a>

                    <button
                        class="bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-white px-8 py-3 rounded-xl shadow-lg">

                        💾 Update Student

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

</x-app-layout>