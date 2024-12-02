@extends('layout.headerFooter')

@section('content')
    <section class="mt-20 bg-white">
        <div id="alert-3"
            class="alert-animation mx-auto mb-4 hidden w-3/4 -translate-y-10 transform rounded-lg bg-lightblue-100 p-4 text-center text-sm text-cyan opacity-0 sm:w-1/2"
            role="alert">
            <span>Perubahan data sedang dalam proses verifikasi oleh admin.<br>Mohon tunggu
                konfirmasi lebih
                lanjut.</span>
        </div>

        <div class="mx-auto max-w-screen-xl px-4 py-8 lg:px-6 lg:py-16">
            {{-- Profile Start --}}
            <div class="w-full max-w-none rounded-3xl border border-gray-400 bg-lightblue shadow-md">
                {{-- Profile Image & Banner --}}
                <div class="relative">
                    <div class="h-48 rounded-t-3xl bg-cyan-100"></div>
                    <div class="absolute top-1/2 mx-12 sm:ms-14">
                        <img class="h-48 w-48 rounded-full object-cover" src="{{ asset('storage/profile/' . $userDetails->profile_photo) }}"
                            alt="Profile Picture" />
                    </div>
                </div>

                {{-- Profile Details --}}
                <div class="mx-10 mb-5 flex flex-col space-y-2 sm:mx-14">
                    <div class="flex flex-col pt-24 sm:flex-row-reverse sm:pt-36">
                        <div class="mb-2 flex justify-end sm:mb-0">

                            {{-- Edit Button --}}
                            <button data-modal-target="crud-modal1" data-modal-toggle="crud-modal1"
                                class="z-10 rounded-full bg-gray-300 p-2 hover:bg-gray-400 sm:p-4">
                                <svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                                </svg>
                            </button>

                            <!-- Main modal -->
                            <div id="crud-modal1" tabindex="-1" aria-hidden="true"
                                class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
                                <div class="relative mx-4 max-h-full w-full sm:max-w-4xl">
                                    <!-- Modal content -->
                                    <div
                                        class="scrollbar-modal relative max-h-96 overflow-y-auto rounded-lg bg-white pb-5 shadow">
                                        <!-- Modal header -->
                                        <div class="relative">
                                            <!-- Back Button -->
                                            <div class="flex h-24 items-start justify-end bg-cyan-100">
                                                <button data-modal-hide="crud-modal1" class="z-10 p-2">
                                                    <svg class="h-6 w-6 text-white dark:text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M6 18 17.94 6M18 18 6.06 6" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="absolute top-1/2 mx-12">
                                                <div class="relative">
                                                    <img class="h-24 w-24 rounded-full object-cover"
                                                        src="{{ asset('storage/profile/' . $userDetails->profile_photo) }}"
                                                        alt="Profile Picture" />
                                                    {{-- Camera Icon --}}
                                                    <label for="profile_picture"
                                                        class="absolute bottom-0 ms-24 flex h-10 w-10 items-center justify-center rounded-full bg-cyan p-1 hover:bg-cyan-100 sm:h-16 sm:w-16">
                                                        <svg class="h-8 w-8 text-white" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            fill="none" viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4 18V8a1 1 0 0 1 1-1h1.5l1.707-1.707A1 1 0 0 1 8.914 5h6.172a1 1 0 0 1 .707.293L17.5 7H19a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Z" />
                                                            <path stroke="currentColor" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                        </svg>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal body -->
                                        <form action="{{ route('alumni.update', ['id' => $userDetails->id_userDetails]) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <!-- Hidden Input -->
                                            <input id="profile_picture" name="profile_picture" type="file" class="hidden"
                                                accept="image/*" />
                                            <div class="mx-10 my-14">
                                                <div class="mb-5 mt-5">
                                                    <label for="full_name" class="mb-2 block text-xl text-cyan">Full
                                                        Name</label>
                                                    <input type="text" id="full_name" name="full_name"
                                                        class="block w-full rounded-full border border-gray-900 bg-gray-50 p-1 px-6 text-sm text-gray-900"
                                                        required value="{{ $userDetails->name }}" />
                                                </div>
                                                <div class="mb-5 mt-5">
                                                    <label for="current_company"
                                                        class="mb-2 block text-xl text-cyan">Current Company</label>
                                                    <select name="current_company" id="current_company"
                                                        class="block w-full cursor-pointer rounded-full border border-gray-900 bg-gray-50 p-1 px-6 text-sm text-gray-900">
                                                        <option value="" disabled
                                                            {{ $userDetails->current_company ? '' : 'selected' }}>
                                                            Select a company
                                                        </option>
                                                        @foreach ($companies as $company)
                                                            <option value="{{ $company->company_name }}"
                                                                {{ $company->company_name == $userDetails->current_company ? 'selected' : '' }}>
                                                                {{ $company->company_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-5 mt-5">
                                                    <label for="current_job" class="mb-2 block text-xl text-cyan">Current
                                                        Position</label>
                                                    <input type="text" id="current_job" name="current_job"
                                                        class="block w-full rounded-full border border-gray-900 bg-gray-50 p-1 px-6 text-sm text-gray-900"
                                                        required value="{{ $userDetails->current_job }}" />
                                                </div>
                                                <div class="mb-5 mt-5">
                                                    <label for="user_description"
                                                        class="mb-2 block text-xl text-cyan">About</label>
                                                    <textarea type="text" id="user_description" name="user_description"
                                                        class="block w-full rounded-xl border border-gray-900 bg-gray-50 px-2 pt-2 text-sm text-gray-900">{{ $userDetails->user_description }}</textarea>
                                                </div>
                                            </div>
                                            <button data-modal-hide="crud-modal" type="submit"
                                                class="bg-btn-cyan mx-10 rounded-full bg-cyan px-5 py-2.5 text-white shadow-lg hover:bg-white hover:text-cyan">
                                                Save Changes
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center sm:-mt-8 sm:text-start">
                            <h2 class="text-xl text-cyan sm:text-start sm:text-2xl">{{ $userDetails->name }}</h2>
                            <p class="text-lg text-gray-400 sm:text-left sm:text-xl">{{ $userDetails->nim }}</p>
                            <h3 class="text-base text-cyan sm:text-start sm:text-lg">{{ $userDetails->job_name }}</h3>
                            <p class="text-base text-cyan sm:text-start sm:text-lg">{{ $userDetails->company_name }}</p>
                        </div>
                    </div>
                    @if (!empty($userDetails->user_description))
                        <h4 class="text-lg text-cyan sm:text-xl">About</h4>
                        <p class="text-justify text-sm text-cyan sm:text-base">
                            {{ $userDetails->user_description }}
                        </p>
                    @endif
                    <div class="flex justify-end">
                        {{-- Logout Button --}}
                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                            class="mt-4 rounded-full bg-red-600 p-2 text-white shadow-lg hover:bg-red-400 sm:p-4">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3h5a3 3 0 0 1 3 3v1" />
                            </svg>
                        </button>

                        {{-- Modal --}}
                        <div id="popup-modal" tabindex="-1"
                            class="fixed left-0 right-0 top-0 z-50 hidden h-full max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
                            <div class="relative max-h-full w-full max-w-md p-4">
                                <div class="relative rounded-lg bg-cyan-100 shadow">
                                    <div class="p-4 text-center md:p-5">
                                        <h3 class="mb-5 text-lg font-normal text-white">Are you leaving?</h3>
                                        <p class="mb-5 text-sm font-normal text-white">Are you sure you want to Log Out?
                                        </p>
                                        <button data-modal-hide="popup-modal" type="button"
                                            class="ms-3 rounded-full border border-gray-900 bg-white px-5 py-2.5 text-sm font-medium text-cyan hover:bg-cyan hover:text-white focus:z-10 focus:outline-none focus:ring-4 focus:ring-cyan">
                                            Cancel
                                        </button>
                                        <button data-modal-hide="popup-modal" type="button" id="logout-button"
                                            class="ms-3 rounded-full border border-gray-900 bg-white px-5 py-2.5 text-sm font-medium text-cyan hover:bg-cyan hover:text-white focus:z-10 focus:outline-none focus:ring-4 focus:ring-cyan">
                                            Log Out
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Profile End --}}


            {{-- Experience Start --}}
            <div class="mt-8 w-full max-w-none rounded-3xl border border-gray-400 bg-lightblue shadow-md">
                <div class="mx-10 flex flex-col space-y-2 py-5 sm:mx-14 sm:py-10">
                    <div class="flex flex-col sm:flex-row-reverse">
                        <div class="mb-2 flex justify-end sm:mb-0">

                            {{-- Edit Button --}}
                            <a href="{{ route('alumni.show-profile') }}"
                                class="z-10 rounded-full bg-gray-300 p-2 hover:bg-gray-400 sm:p-4">
                                <svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                                </svg>
                            </a>

                        </div>
                        <div class="-mt-8 mb-4 flex justify-start text-center sm:-mt-10 sm:text-start">
                            <h4 class="text-lg text-cyan sm:text-xl">Experience</h4>
                        </div>
                    </div>
                    @if ($jobDetails && count($jobDetails) > 0)
                        <ol class="relative border-s border-gray-900">
                            @foreach ($jobDetails as $job)
                                <li class="mb-10 ms-4">
                                    <div
                                        class="absolute -start-1.5 mt-1.5 h-3 w-3 rounded-full border border-gray-900 bg-gray-900">
                                    </div>
                                    <h3 class="text-lg text-cyan sm:text-xl">{{ $job->job_name }}</h3>
                                    <h3 class="text-base text-cyan sm:text-lg">{{ $job->company_name }}</h3>
                                    <p class="text-xs text-gray-400 sm:text-sm">{{ $job->date_start }} -
                                        {{ $job->date_end }}</p>
                                    <ol class="ms-4 list-outside list-disc text-sm text-cyan sm:text-base">
                                        @if (is_array($job->job_description))
                                            @foreach ($job->job_description as $description)
                                                <li>{{ $description }}</li>
                                            @endforeach
                                        @endif
                                    </ol>
                                </li>
                            @endforeach
                        </ol>
                    @endif
                </div>
            </div>
            {{-- Experience End --}}

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                @csrf
            </form>

            <script>
                document.getElementById('logout-button').addEventListener('click', function() {
                    document.getElementById('logout-form').submit();
                });
            </script>
        </div>
        </div>
    </section>

    <script>
        // Alert Script
        if (sessionStorage.getItem('showAlert') === 'true') {
            const alertElement = document.getElementById('alert-3');

            // Delay to make sure the alert appears with animation
            setTimeout(function() {
                alertElement.classList.remove('hidden', '-translate-y-10',
                    'opacity-0'); // Remove initial hidden and translate classes
                alertElement.classList.add('translate-y-2', 'opacity-100',
                    'block'); // Add animation classes to slide in and make visible
            }, 500); // 100ms delay to trigger the animation after the page load

            // Remove the sessionStorage item so it doesn't show again
            sessionStorage.removeItem('showAlert');
        }
    </script>
@endsection
