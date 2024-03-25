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
                    {{-- <x-feathericon-log-out class="w-6 h-6 group-hover:translate-x-1 duration-300" /> --}}
                    {{-- <span class="font-medium">Edit Profile</span> --}}
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
            <div>
                <div class="flex items-center space-x-1 pb-3">
                    {{-- <x-heroicon-o-user class="w-5 h-5" /> --}}
                    <h1 class="text-xl font-medium">All Facutlies</h1>
                </div>
            </div>
            <div class="">
                <div class="grid grid-cols-4 gap-x-0 gap-y-0 border-b-2 border-black/20 bg-secondary p-4">
                    <h1 class="text-lg font-medium">Emp ID</h1>
                    <h1 class="text-lg font-medium">Faculty Name</h1>
                    <h1 class="text-lg font-medium">Contact</h1>
                    <h1 class="text-lg font-medium">Actions</h1>
                </div>
                @foreach ($teachers as $teacher)
                <div class="grid grid-cols-4 gap-x-0 gap-y-0 py-4 px-3 border-b-2 border-black/10">
                    <h1 class="text-lg">{{ $teacher->emp_id }}</h1>
                    <h1 class="text-lg">{{ $teacher->fullname }}</h1>
                    <h1 class="text-lg">{{ $teacher->contact }}</h1>
                    <a href="{{ route('edit-faculty', ['teacher_id' => $teacher->emp_id]) }}">
                        <div>
                            {{-- <x-feathericon-edit class="w-5 h-5" /> --}}
                        </div>
                    </a>
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
        setTimeout(function () {
            document.getElementById('message').style.display = 'none';
        }, 5000);
    </script>
</body>

</html>