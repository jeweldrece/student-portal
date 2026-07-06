<x-app-layout>

<div class="max-w-3xl mx-auto">

    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">

        <!-- Header -->

        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-8 py-6">

            <h1 class="text-3xl font-bold text-white">

                ➕ Add New Student

            </h1>

            <p class="text-blue-100 mt-2">

                Fill in the student's information.

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

            <form action="{{ route('students.store') }}" method="POST">

                @csrf

                <!-- Student Number -->

                <div class="mb-5">

                    <label class="block mb-2 font-semibold text-gray-700">

                        Student Number

                    </label>

                    <input
                        type="text"
                        name="student_number"
                        value="{{ old('student_number') }}"
                        class="w-full border-2 border-gray-200 rounded-xl p-3 focus:outline-none focus:border-blue-500"
                        placeholder="2026-0001">

                </div>

                <!-- First Name -->

                <div class="mb-5">

                    <label class="block mb-2 font-semibold text-gray-700">

                        First Name

                    </label>

                    <input
                        type="text"
                        name="first_name"
                        value="{{ old('first_name') }}"
                        class="w-full border-2 border-gray-200 rounded-xl p-3 focus:outline-none focus:border-blue-500"
                        placeholder="Juan">

                </div>

                <!-- Last Name -->

                <div class="mb-5">

                    <label class="block mb-2 font-semibold text-gray-700">

                        Last Name

                    </label>

                    <input
                        type="text"
                        name="last_name"
                        value="{{ old('last_name') }}"
                        class="w-full border-2 border-gray-200 rounded-xl p-3 focus:outline-none focus:border-blue-500"
                        placeholder="Dela Cruz">

                </div>

                <!-- Course -->

                <div class="mb-5">

                    <label class="block mb-2 font-semibold text-gray-700">

                        Course

                    </label>

                    <input
                        type="text"
                        name="course"
                        value="{{ old('course') }}"
                        class="w-full border-2 border-gray-200 rounded-xl p-3 focus:outline-none focus:border-blue-500"
                        placeholder="BSIT">

                </div>

                <!-- Year -->

                <div class="mb-5">

                    <label class="block mb-2 font-semibold text-gray-700">

                        Year Level

                    </label>

                    <select
                        name="year_level"
                        class="w-full border-2 border-gray-200 rounded-xl p-3 focus:outline-none focus:border-blue-500">

                        <option value="">Select Year</option>

                        <option value="1">1st Year</option>
                        <option value="2">2nd Year</option>
                        <option value="3">3rd Year</option>
                        <option value="4">4th Year</option>

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
                        value="{{ old('email') }}"
                        class="w-full border-2 border-gray-200 rounded-xl p-3 focus:outline-none focus:border-blue-500"
                        placeholder="juan@email.com">

                </div>

                <!-- Buttons -->

                <div class="flex justify-between">

                    <a href="{{ route('students.index') }}"
                        class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-xl shadow">

                        ← Back

                    </a>

                    <button
                        class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-8 py-3 rounded-xl shadow-lg">

                        💾 Save Student

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

</x-app-layout>