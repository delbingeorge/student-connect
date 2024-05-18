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
                <h1 class="text-2xl font-semibold">Mentor Dashboard</h1>
            </div>
            <div
                class="text-primary hover:bg-secondary border-2 hover:bg-primary/20 duration-200 cursor-pointer flex items-center justify-center rounded-full py-3 px-5 space-x-1">
                {{-- <x-heroicon-o-user class="w-6 h-6" /> --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="6" r="4" />
                        <path d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z" />
                    </g>
                </svg>
                <span class="font-medium hidden lg:block">{{ session('faculty_name') }}</span>
            </div>
        </nav>
        <div class="px-12 py-8">

            <div class="grid lg:grid-cols-3 grid-rows-1 space-x-6">
                <a href="{{ route('admin.dashboard') }}"
                    class="cursor-pointer hover:bg-black/10 py-6 text-primary mb-2 bg-black/5 rounded-md flex items-center justify-center space-x-4">
                    <h1 class="text-xl text-semibold">All Faculties</h1>
                </a>
            </div>

            <h1 class="text-xl text-semibold">Mentees</h1>
        </div>
        <div class="px-12">
            <div class="grid grid-cols-6 gap-x-0 gap-y-0 border-b-2 border-black/20 bg-secondary p-4">
                <h1 class="text-lg font-medium">Student USN</h1>
                <h1 class="text-lg font-medium">Student Name</h1>
                <h1 class="text-lg font-medium">Semester</h1>
                <h1 class="text-lg font-medium">Email</h1>
                <h1 class="text-lg font-medium">Contact</h1>
            </div>
            @foreach ($students as $student)
                <div class="grid grid-cols-6 gap-x-0 gap-y-0 py-4 px-3 border-b-2 border-black/10">
                    <h1 class="text-lg">{{ $student->student_id }}</h1>
                    <h1 class="text-lg">{{ $student->fullname }}</h1>
                    <h1 class="text-lg">{{ $student->semester }}</h1>
                    <h1 class="text-lg"><a href="mailto:{{ $student->email }}">{{ $student->email }}</a></h1>
                    <h1 class="text-lg"><a href="tel:{{ $student->contact }}">{{ $student->contact }}</a></h1>
                    <a href="{{ route('download-pdf', ['usn' => $student->student_id]) }}"
                        class="cursor-pointer hover:text-black text-primary mb-2 rounded-md flex items-center justify-center space-x-4">
                        <h1 class="text-xl text-semibold">Download Details</h1>
                    </a>
                </div>
            @endforeach
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
        setTimeout(function () {
            document.getElementById('message').style.display = 'none';
        }, 5000);

        const urlParams = new URLSearchParams(window.location.search);
        const semesterParam = urlParams.get('semester');

        if (semesterParam) {
            document.getElementById('semesterSelect').value = semesterParam;
        }

        document.getElementById('semesterSelect').addEventListener('change', function () {
            document.getElementById('semesterForm').submit();
        });
    </script>
</body>

</html>