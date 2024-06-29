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
                                    <svg width="23" height="23" viewBox="-0.24 -0.24 24.48 24.48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.096">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M14.7566 2.62145C16.5852 0.792851 19.55 0.792851 21.3786 2.62145C23.2072 4.45005 23.2072 7.41479 21.3786 9.24339L11.8933 18.7287C11.3514 19.2706 11.0323 19.5897 10.6774 19.8665C10.2592 20.1927 9.80655 20.4725 9.32766 20.7007C8.92136 20.8943 8.49334 21.037 7.76623 21.2793L4.43511 22.3897L3.63303 22.6571C2.98247 22.8739 2.26522 22.7046 1.78032 22.2197C1.29542 21.7348 1.1261 21.0175 1.34296 20.367L2.72068 16.2338C2.96303 15.5067 3.10568 15.0787 3.29932 14.6724C3.52755 14.1935 3.80727 13.7409 4.13354 13.3226C4.41035 12.9677 4.72939 12.6487 5.27137 12.1067L14.7566 2.62145ZM4.40051 20.8201L7.24203 19.8729C8.03314 19.6092 8.36927 19.4958 8.68233 19.3466C9.06287 19.1653 9.42252 18.943 9.75492 18.6837C10.0284 18.4704 10.2801 18.2205 10.8698 17.6308L18.4393 10.0614C17.6506 9.78321 16.6346 9.26763 15.6835 8.31651C14.7324 7.36538 14.2168 6.34939 13.9387 5.56075L6.36917 13.1302C5.77951 13.7199 5.52959 13.9716 5.3163 14.2451C5.05704 14.5775 4.83476 14.9371 4.65341 15.3177C4.50421 15.6307 4.3908 15.9669 4.12709 16.758L3.17992 19.5995L4.40051 20.8201ZM15.1554 4.34404C15.1896 4.519 15.2474 4.75684 15.3438 5.03487C15.561 5.66083 15.9712 6.48288 16.7442 7.25585C17.5171 8.02881 18.3392 8.43903 18.9651 8.6562C19.2432 8.75266 19.481 8.81046 19.656 8.84466L20.3179 8.18272C21.5607 6.93991 21.5607 4.92492 20.3179 3.68211C19.0751 2.4393 17.0601 2.4393 15.8173 3.68211L15.1554 4.34404Z"
                                                fill="#000000"></path>
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
                                    <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 1.25C9.37665 1.25 7.25 3.37665 7.25 6C7.25 8.62335 9.37665 10.75 12 10.75C14.6234 10.75 16.75 8.62335 16.75 6C16.75 3.37665 14.6234 1.25 12 1.25ZM8.75 6C8.75 4.20507 10.2051 2.75 12 2.75C13.7949 2.75 15.25 4.20507 15.25 6C15.25 7.79493 13.7949 9.25 12 9.25C10.2051 9.25 8.75 7.79493 8.75 6Z"
                                                fill="#000000"></path>
                                            <path
                                                d="M18 3.25C17.5858 3.25 17.25 3.58579 17.25 4C17.25 4.41421 17.5858 4.75 18 4.75C19.3765 4.75 20.25 5.65573 20.25 6.5C20.25 7.34427 19.3765 8.25 18 8.25C17.5858 8.25 17.25 8.58579 17.25 9C17.25 9.41421 17.5858 9.75 18 9.75C19.9372 9.75 21.75 8.41715 21.75 6.5C21.75 4.58285 19.9372 3.25 18 3.25Z"
                                                fill="#000000"></path>
                                            <path
                                                d="M6.75 4C6.75 3.58579 6.41421 3.25 6 3.25C4.06278 3.25 2.25 4.58285 2.25 6.5C2.25 8.41715 4.06278 9.75 6 9.75C6.41421 9.75 6.75 9.41421 6.75 9C6.75 8.58579 6.41421 8.25 6 8.25C4.62351 8.25 3.75 7.34427 3.75 6.5C3.75 5.65573 4.62351 4.75 6 4.75C6.41421 4.75 6.75 4.41421 6.75 4Z"
                                                fill="#000000"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 12.25C10.2157 12.25 8.56645 12.7308 7.34133 13.5475C6.12146 14.3608 5.25 15.5666 5.25 17C5.25 18.4334 6.12146 19.6392 7.34133 20.4525C8.56645 21.2692 10.2157 21.75 12 21.75C13.7843 21.75 15.4335 21.2692 16.6587 20.4525C17.8785 19.6392 18.75 18.4334 18.75 17C18.75 15.5666 17.8785 14.3608 16.6587 13.5475C15.4335 12.7308 13.7843 12.25 12 12.25ZM6.75 17C6.75 16.2242 7.22169 15.4301 8.17338 14.7956C9.11984 14.1646 10.4706 13.75 12 13.75C13.5294 13.75 14.8802 14.1646 15.8266 14.7956C16.7783 15.4301 17.25 16.2242 17.25 17C17.25 17.7758 16.7783 18.5699 15.8266 19.2044C14.8802 19.8354 13.5294 20.25 12 20.25C10.4706 20.25 9.11984 19.8354 8.17338 19.2044C7.22169 18.5699 6.75 17.7758 6.75 17Z"
                                                fill="#000000"></path>
                                            <path
                                                d="M19.2674 13.8393C19.3561 13.4347 19.7561 13.1787 20.1607 13.2674C21.1225 13.4783 21.9893 13.8593 22.6328 14.3859C23.2758 14.912 23.75 15.6352 23.75 16.5C23.75 17.3648 23.2758 18.088 22.6328 18.6141C21.9893 19.1407 21.1225 19.5217 20.1607 19.7326C19.7561 19.8213 19.3561 19.5653 19.2674 19.1607C19.1787 18.7561 19.4347 18.3561 19.8393 18.2674C20.6317 18.0936 21.2649 17.7952 21.6829 17.4532C22.1014 17.1108 22.25 16.7763 22.25 16.5C22.25 16.2237 22.1014 15.8892 21.6829 15.5468C21.2649 15.2048 20.6317 14.9064 19.8393 14.7326C19.4347 14.6439 19.1787 14.2439 19.2674 13.8393Z"
                                                fill="#000000"></path>
                                            <path
                                                d="M3.83935 13.2674C4.24395 13.1787 4.64387 13.4347 4.73259 13.8393C4.82132 14.2439 4.56525 14.6439 4.16065 14.7326C3.36829 14.9064 2.73505 15.2048 2.31712 15.5468C1.89863 15.8892 1.75 16.2237 1.75 16.5C1.75 16.7763 1.89863 17.1108 2.31712 17.4532C2.73505 17.7952 3.36829 18.0936 4.16065 18.2674C4.56525 18.3561 4.82132 18.7561 4.73259 19.1607C4.64387 19.5653 4.24395 19.8213 3.83935 19.7326C2.87746 19.5217 2.0107 19.1407 1.36719 18.6141C0.724248 18.088 0.25 17.3648 0.25 16.5C0.25 15.6352 0.724248 14.912 1.36719 14.3859C2.0107 13.8593 2.87746 13.4783 3.83935 13.2674Z"
                                                fill="#000000"></path>
                                        </g>
                                    </svg>
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
