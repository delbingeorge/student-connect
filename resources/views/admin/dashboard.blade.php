<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
    <div class="">
        <nav class="w-full flex items-center justify-between py-4 shadow-md px-12">
            <div class="-space-y-3">
                <h1 class="text-2xl font-semibold">Admin Dashboard</h1>
            </div>
            <div class="flex items-center justify-center space-x-5">
                {{-- <div
                    class="text-primary border-2 hover:bg-secondary duration-200 cursor-pointer flex items-center justify-center rounded-full p-3">
                    <x-heroicon-o-user class="w-6 h-6" />
                    <span class="text-lg">NNM23MC111</span>
                </div> --}}
                <a href="{{ route('logout') }}"
                    class="text-primary hover:bg-secondary border-2 group hover:bg-primary/20 duration-200 cursor-pointer flex items-center justify-center rounded-full py-3 px-3 space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 group-hover:translate-x-1 duration-300"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h7v2H5v14h7v2zm11-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5z" />
                    </svg>
                </a>
            </div>
        </nav>
        <div class="px-12 py-8">
            <div class="flex items-center justify-between mb-6 bg-secondary py-4 px-2 rounded-lg">
                <h1 class="text-2xl font-medium">
                    Add Facutlies
                </h1>
                <a href="{{ route('add-faculty') }}">
                    <div
                        class="flex items-center justify-center text-white rounded-md bg-primary hover:bg-primary/70 duration-300 py-2 px-12">
                        {{-- <x-feathericon-plus class="w-6 h-6" /> --}}
                        <span class="text-xl">Add</span>
                    </div>
                </a>
            </div>
            <div class="flex items-center justify-between mb-6 bg-secondary py-4 px-2 rounded-lg">
                <h1 class="text-2xl font-medium">
                    Increment student semester
                </h1>
                <a href="{{ route('increment_semester') }}" onclick="return confirmAction()">
                    <div
                        class="flex items-center justify-center text-white rounded-md bg-primary hover:bg-primary/70 duration-300 py-2 px-12">
                        {{-- <x-feathericon-plus class="w-6 h-6" /> --}}
                        <span class="text-xl">Next Semester</span>
                    </div>
                </a>
            </div>
            <div class="flex items-center justify-between mb-6 bg-secondary py-4 px-2 rounded-lg">
                <h1 class="text-2xl font-medium">
                    Activate Feedback Form
                </h1>
                <a href="{{ route('activate_feedback_form') }}" onclick="return confirmAction()">
                    <div
                        class="flex items-center justify-center text-white rounded-md bg-primary hover:bg-primary/70 duration-300 py-2 px-12">
                        {{-- <x-feathericon-plus class="w-6 h-6" /> --}}
                        <span class="text-xl">Activate Feedback Form</span>
                    </div>
                </a>
            </div>
            <div class="flex items-center justify-between mb-6 bg-secondary py-4 px-2 rounded-lg">
                <h1 class="text-2xl font-medium">
                    Activate MSE Form
                </h1>
                <a href="{{ route('activate_mse_form') }}" onclick="return confirmAction()">
                    <div
                        class="flex items-center justify-center text-white rounded-md bg-primary hover:bg-primary/70 duration-300 py-2 px-12">
                        {{-- <x-feathericon-plus class="w-6 h-6" /> --}}
                        <span class="text-xl">Activate MSE Form</span>
                    </div>
                </a>
            </div>
            <div>
                <div class="flex items-center space-x-1 pb-3">
                    {{-- <x-heroicon-o-user class="w-5 h-5" /> --}}
                    <h1 class="text-xl font-medium">All Facutlies</h1>
                    <div class="flex items-center gap-6">
                        <form method="get" action="{{ route('view-by-semester') }}">
                            <input class="text-black border-2 rounded-md border-black p-2" type="search" name="id"
                                id="" placeholder="Search Faculty by ID">
                            <input class="text-black border-2 rounded-md bg-slate-300 border-black p-2" type="submit"
                                value="Search">
                            <input type="hidden" name="role" value="admin">
                        </form>
                    </div>
                </div>
                <div class="">
                    <div class="grid grid-cols-5 gap-x-0 gap-y-0 border-b-2 border-black/20 bg-secondary p-4">
                        <h1 class="text-lg font-medium">Emp ID</h1>
                        <h1 class="text-lg font-medium">Faculty Name</h1>
                        <h1 class="text-lg font-medium">Email</h1>
                        <h1 class="text-lg font-medium">Contact</h1>
                        <h1 class="text-lg font-medium">Actions</h1>
                    </div>
                    @foreach ($teachers as $teacher)
                        <div class="grid grid-cols-5 gap-x-0 gap-y-0 py-4 px-3 border-b-2 border-black/10">
                            <h1 class="text-lg">{{ $teacher->emp_id }}</h1>
                            <h1 class="text-lg">{{ $teacher->fullname }}</h1>
                            <h1 class="text-lg"><a href="mailto:{{ $teacher->email }}">{{ $teacher->email }}</a></h1>
                            <h1 class="text-lg"><a href="tel:{{ $teacher->contact }}">{{ $teacher->contact }}</a></h1>
                            <div class="flex flex-row gap-x-6">
                                <a href="{{ route('edit-faculty', ['teacher_id' => $teacher->emp_id]) }}">
                                    <svg width="24" height="24" viewBox="0 0 24.00 24.00" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M18 10L21 7L17 3L14 6M18 10L8 20H4V16L14 6M18 10L14 6"
                                                stroke="#000000" stroke-width="1.008" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </a>



                                <form action="{{ route('delete_faculty') }}" method="post"
                                    onsubmit="return confirmDelete()">
                                    @csrf
                                    <input type="hidden" name="teacher_id" value="{{ $teacher->emp_id }}">
                                    <button type="submit" class="hover:cursor-pointer" value="delete">
                                        <svg width='24' viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M20.5001 6H3.5" stroke="#000000" stroke-width="1.5"
                                                    stroke-linecap="round"></path>
                                                <path
                                                    d="M18.8332 8.5L18.3732 15.3991C18.1962 18.054 18.1077 19.3815 17.2427 20.1907C16.3777 21 15.0473 21 12.3865 21H11.6132C8.95235 21 7.62195 21 6.75694 20.1907C5.89194 19.3815 5.80344 18.054 5.62644 15.3991L5.1665 8.5"
                                                    stroke="#000000" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                                <path d="M9.5 11L10 16" stroke="#000000" stroke-width="1.5"
                                                    stroke-linecap="round"></path>
                                                <path d="M14.5 11L14 16" stroke="#000000" stroke-width="1.5"
                                                    stroke-linecap="round"></path>
                                                <path
                                                    d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                    stroke="#000000" stroke-width="1.5"></path>
                                            </g>
                                        </svg>

                                    </button>
                                </form>
                                <a href="{{ route('view-mentees', ['teacher_id' => $teacher->emp_id]) }}">
                                    <div>
                                        view mentees
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div>
                @if (session('success'))
                    <div id="message" class="absolute z-40 bg-primary rounded-xl pr-24 pl-5 py-3 bottom-0 right-0">
                        <div class="flex items-center justify-center space-x-2 text-white">
                            {{-- <x-heroicon-o-user class="w-5 h-5" /> --}}
                            <h1 class="">
                                {{ session('success') }}
                            </h1>
                        </div>
                    </div>
                @endif
                @if (session('error'))
                    <div id="message" class="absolute z-40 bg-red-100 rounded-xl pr-24 pl-5 py-3 bottom-0 right-0">
                        <div class="flex items-center justify-center space-x-2 text-red-500">
                            {{-- <x-heroicon-o-user class="w-5 h-5" /> --}}
                            <h1 class="">
                                {{ session('error') }}
                            </h1>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <script>
            function confirmDelete() {
                return confirm('Delete this faculty member? \nMentees under this faculty will also be removed?');
            }

            function confirmAction() {
                return confirm('Are you sure? This action cannot be undone.');
            }

            setTimeout(function() {
                document.getElementById('message').style.display = 'none';
            }, 5000);

            const urlParams = new URLSearchParams(window.location.search);
            const semesterParam = urlParams.get('semester');

            if (semesterParam) {
                document.getElementById('semesterSelect').value = semesterParam;
            }

            document.getElementById('semesterSelect').addEventListener('change', function() {
                document.getElementById('semesterForm').submit();
            });
        </script>
</body>

</html>
