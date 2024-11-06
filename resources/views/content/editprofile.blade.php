@extends('layout.headerFooter')

@section('content')
    <section class="mt-20 bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-8 lg:px-6 lg:py-16">
            <div class="w-full max-w-none rounded-3xl bg-lightblue shadow-lg">
                {{-- Profile Image & Banner --}}
                <div class="relative">
                    <div class="h-48 rounded-t-3xl bg-cyan-100"></div>
                    <div class="absolute top-1/2 ms-14">
                        <img
                            class="h-48 w-48 rounded-full object-cover"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                            alt="Profile Picture"
                        />
                    </div>
                </div>

                <div class="mt-28 flex flex-col space-y-2 sm:mx-14">
                    <form action="">
                        <div class="px-10">
                            <div class="mb-5 mt-5">
                                <label for="full_name" class="mb-2 block text-xl text-cyan">Full Name</label>
                                <input
                                    type="text"
                                    id="full_name"
                                    class="block w-full rounded-full border border-gray-900 bg-gray-50 p-1 px-6 text-sm text-gray-900"
                                    required
                                />
                            </div>
                            <div class="mb-5 mt-5">
                                <label for="current_company" class="mb-2 block text-xl text-cyan">
                                    Current Company
                                </label>
                                <input
                                    type="text"
                                    id="current_company"
                                    class="block w-full rounded-full border border-gray-900 bg-gray-50 p-1 px-6 text-sm text-gray-900"
                                    required
                                />
                            </div>
                            <div class="mb-5 mt-5">
                                <label for="current_position" class="mb-2 block text-xl text-cyan">
                                    Current Position
                                </label>
                                <input
                                    type="text"
                                    id="current_position"
                                    class="block w-full rounded-full border border-gray-900 bg-gray-50 p-1 px-6 text-sm text-gray-900"
                                    required
                                />
                            </div>
                            <div class="mb-5 mt-5">
                                <label for="about" class="mb-2 block text-xl text-cyan">About</label>
                                <textarea
                                    type="text"
                                    id="about"
                                    class="block w-full rounded-xl border border-gray-900 bg-gray-50 px-2 pt-2 text-sm text-gray-900"
                                ></textarea>
                            </div>

                            <div class="mb-5 mt-5">
                                <label for="experience" class="mb-2 block text-xl text-cyan">Experience</label>
                                <!-- Flex container for the form and button -->
                                <div id="experience-container" class="flex flex-wrap gap-10">
                                    <!-- Existing Forms -->
                                    <div class="experience-form rounded-lg bg-gray-300 p-2.5 sm:w-80 sm:p-5">
                                        <div class="my-2.5">
                                            <label for="company" class="mb-2 block text-base text-gray-500">
                                                Company
                                            </label>
                                            <input
                                                type="text"
                                                id="company"
                                                class="block w-full rounded-full border border-gray-900 bg-gray-50 p-1 px-6 text-sm text-gray-900"
                                            />
                                        </div>
                                        <div class="my-2.5">
                                            <label for="position" class="mb-2 block text-base text-gray-500">
                                                Position
                                            </label>
                                            <input
                                                type="text"
                                                id="position"
                                                class="block w-full rounded-full border border-gray-900 bg-gray-50 p-1 px-6 text-sm text-gray-900"
                                            />
                                        </div>
                                        <div class="my-2.5">
                                            <label for="period" class="mb-2 block text-base text-gray-500">
                                                Period of Time
                                            </label>
                                            <input
                                                type="text"
                                                id="period_of_time"
                                                class="block w-full rounded-full border border-gray-900 bg-gray-50 p-1 px-6 text-sm text-gray-900"
                                            />
                                        </div>
                                        <div class="my-2.5">
                                            <label for="responsibilities" class="mb-2 block text-base text-gray-500">
                                                Responsibilities
                                            </label>
                                            <textarea
                                                cols="30"
                                                rows="10"
                                                class="block w-full rounded-lg border border-gray-900 bg-gray-50 px-2 pt-2 text-sm text-gray-900"
                                            ></textarea>
                                        </div>
                                    </div>
                                    <!-- Button to toggle/add forms -->
                                    <div id="add-button-container" class="flex w-80 flex-col">
                                        <button
                                            type="button"
                                            id="add-experience-btn"
                                            class="flex h-1/2 items-center justify-center rounded-lg bg-gray-300 p-5 text-lg text-gray-500"
                                            onclick="addExperienceForm()"
                                        >
                                            <svg
                                                class="me-2 h-6 w-6"
                                                aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke="currentColor"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M5 12h14m-7 7V5"
                                                />
                                            </svg>
                                            Add Experience
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                {{-- Logout and Save Button --}}
                <div class="mx-4 mt-14 flex items-center justify-between p-6 ps-0 sm:mx-14 sm:p-0">
                    <div class="sm:ms-14">
                        <a
                            href="{{ route('editprofile') }}"
                            class="sm:text-md rounded-full bg-cyan px-2 py-4 text-sm text-white hover:bg-white hover:text-cyan sm:px-8"
                        >
                            Save Changes
                        </a>
                    </div>
                    <button class="rounded-full bg-red-500 p-3 text-white shadow-lg hover:bg-red-600 sm:me-10" id="logout-button">
                        <svg
                            class="h-8 w-8 sm:h-14 sm:w-14"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3h5a3 3 0 0 1 3 3v1"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- Logout Button Script --}}
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
        @csrf
    </form>

    <script>
        document.getElementById('logout-button').addEventListener('click', function () {
            document.getElementById('logout-form').submit();
        });
    </script>
    <script>
        let formCount = 0; // Initialize a variable to count the forms

        function addExperienceForm() {
            // Create a new form container
            const newFormContainer = document.createElement('div');
            newFormContainer.className = 'experience-form w-80 rounded-lg bg-gray-300 p-5';

            // Create form fields
            newFormContainer.innerHTML = `
                <div class="my-2.5">
                    <label for="company-${formCount}" class="mb-2 block text-base text-gray-500">Company</label>
                    <input type="text" id="company-${formCount}" class="block w-full rounded-full border border-gray-900 bg-gray-50 p-1 px-6 text-sm text-gray-900" />
                </div>
                <div class="my-2.5">
                    <label for="position-${formCount}" class="mb-2 block text-base text-gray-500">Position</label>
                    <input type="text" id="position-${formCount}" class="block w-full rounded-full border border-gray-900 bg-gray-50 p-1 px-6 text-sm text-gray-900" />
                </div>
                <div class="my-2.5">
                    <label for="period_of_time-${formCount}" class="mb-2 block text-base text-gray-500">Period of Time</label>
                    <input type="text" id="period_of_time-${formCount}" class="block w-full rounded-full border border-gray-900 bg-gray-50 p-1 px-6 text-sm text-gray-900" />
                </div>
                <div class="my-2.5">
                    <label for="responsibilities-${formCount}" class="mb-2 block text-base text-gray-500">Responsibilities</label>
                    <textarea cols="30" rows="10" class="block w-full rounded-lg border border-gray-900 bg-gray-50 px-2 pt-2 text-sm text-gray-900"></textarea>
                </div>
            `;

            // Append the new form to the experience container
            const experienceContainer = document.getElementById('experience-container');
            experienceContainer.insertBefore(newFormContainer, document.getElementById('add-button-container'));

            // Increment the form count
            formCount++;
        }
    </script>
@endsection
