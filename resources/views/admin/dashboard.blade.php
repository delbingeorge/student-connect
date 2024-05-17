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
                        class="flex items-center justify-center text-white rounded-md bg-green-500 hover:bg-green-400 duration-300 py-2 px-12">
                        {{-- <x-feathericon-plus class="w-6 h-6" /> --}}
                        <span class="text-xl">Add</span>
                    </div>
                </a>
            </div>
            <div class="flex items-center justify-between mb-6 bg-secondary py-4 px-2 rounded-lg">
                <h1 class="text-2xl font-medium">
                    Increment student semester
                </h1>
                <a href="{{ route('increment_semester') }}">
                    <div
                        class="flex items-center justify-center text-white rounded-md bg-green-500 hover:bg-green-400 duration-300 py-2 px-12">
                        {{-- <x-feathericon-plus class="w-6 h-6" /> --}}
                        <span class="text-xl">Next Semester</span>
                    </div>
                </a>
            </div>
            <div class="flex items-center justify-between mb-6 bg-secondary py-4 px-2 rounded-lg">
                <h1 class="text-2xl font-medium">
                    Activate Feedback Form
                </h1>
                <a href="{{ route('activate_feedback_form') }}">
                    <div
                        class="flex items-center justify-center text-white rounded-md bg-green-500 hover:bg-green-400 duration-300 py-2 px-12">
                        {{-- <x-feathericon-plus class="w-6 h-6" /> --}}
                        <span class="text-xl">Activate Feedback Form</span>
                    </div>
                </a>
            </div>
            <div class="flex items-center justify-between mb-6 bg-secondary py-4 px-2 rounded-lg">
                <h1 class="text-2xl font-medium">
                    Activate MSE Form
                </h1>
                <a href="{{ route('activate_mse_form') }}">
                    <div
                        class="flex items-center justify-center text-white rounded-md bg-green-500 hover:bg-green-400 duration-300 py-2 px-12">
                        {{-- <x-feathericon-plus class="w-6 h-6" /> --}}
                        <span class="text-xl">Activate MSE Form</span>
                    </div>
                </a>
            </div>
            <div>
                <div class="flex items-center space-x-1 pb-3">
                    {{-- <x-heroicon-o-user class="w-5 h-5" /> --}}
                    <h1 class="text-xl font-medium">All Facutlies</h1>
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
                        <a href="{{ route('edit-faculty', ['teacher_id' => $teacher->emp_id]) }}">
                            <div>
                                edit
                            </div>
                        </a>
                        <form action="{{ route('delete_faculty') }}" method="post" onsubmit="return confirmDelete()">
                            @csrf
                            <input type="hidden" name="teacher_id" value="{{ $teacher->emp_id }}">
                            <input type="submit" value="delete">
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
        <div>
            @if (session('success'))
                <div id="message" class="absolute z-40 bg-green-500 rounded-xl pr-24 pl-5 py-3 bottom-0 right-0">
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
            return confirm('Are you sure you want to delete this faculty member?');
        }

        setTimeout(function () {
            document.getElementById('message').style.display = 'none';
        }, 5000);
    </script>
</body>

</html>