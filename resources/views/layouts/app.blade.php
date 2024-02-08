<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    {{-- data table links --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    {{-- data table links --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])



    {{-- remix icons --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body class="font-sans antialiased">
    {{-- small navbar start --}}
    <div class="md:hidden block">


        <div class="">
            <div class="flex w-full items-center">
                <div class="w-full flex items-center">
                    <img src="{{ asset('images/logo.png') }}" class="h-10" alt="">

                    <div>
                        <h1 class="text-5xl mx-10 mb-2">Dashboard</h1>
                    </div>
                </div>
                <div>
                    <i class="ri-menu-line text-3xl cursor-pointer" onclick="showMenu()"></i>
                </div>
            </div>
            <hr class="h-2 my-2 w-full bg-black">

        </div>
        <div class="hidden animate_animated animate__slideInLeft" id="menu">
            <div class="">
                <a href="" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                        class="ri-dashboard-3-fill"></i> Dashboard</a>
                <a href="" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                        class="ri-flag-fill"></i> Notice</a>

                <a href="" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                        class="ri-flag-fill"></i> Banner</a>
                <a href="" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                        class="ri-flag-fill"></i> Category</a>
                <a href="/category" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                        class="ri-group-line"></i>Clients</a>
                <a href="" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                        class="ri-dashboard-3-fill"></i> Projects</a>
                <a href="" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                        class="ri-service-fill"></i> Services</a>
                <a href="" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                        class="ri-news-fill"></i> Blogs</a>
                <a href="" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                        class="ri-news-fill"></i> Contacts</a>
                <a href="" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                        class="ri-folder-user-fill"></i> Users</a>
                <a href="" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                        class="ri-logout-circle-r-fill"></i> Logouts</a>
            </div>
        </div>
    </div>

    {{-- small navbar end --}}

    <div class="flex">
        <div class="w-56 fixed h-screen bg-gray-600 shadow md:block hidden">
            <img src="{{ asset('images/logo.png') }}" class="w-full" alt="">
            <a href="/dashboard" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                    class="ri-dashboard-3-fill"></i> Dashboard</a>
            <a href="/notice" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                    class="ri-flag-fill"></i> Notice</a>
            <a href="/banner" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                    class="ri-flag-fill"></i> Banner</a>
            <a href="/category" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                    class="ri-flag-fill"></i> Category</a>
            <a href="/client" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                    class="ri-group-line"></i> Clients</a>
            <a href="/team" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                    class="ri-group-line"></i> Teams</a>
            <a href="{{ route('admin.testomonial.index') }}"
                class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i class="ri-group-line"></i>
                Testomonials</a>
            <a href="{{ route('admin.project.index') }}"
                class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i class="ri-group-line"></i>
                Projects</a>

            <a href="/service" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                    class="ri-service-fill"></i> Services</a>
            <a href="/blog" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                    class="ri-news-fill"></i> Blogs</a>
            <a href="/product" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                    class="ri-news-fill"></i> Products</a>
            <a href="/contact" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                    class="ri-news-fill"></i> Contacts</a>
            <a href="/user" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                    class="ri-folder-user-fill"></i> Users</a>

            <a href="/logout" class="text-xl hover:bg-slate-400 w-full block p-2 hover:text-white"><i
                    class="ri-logout-circle-r-fill"></i> Logouts</a>
        </div>
        <div class=" p-1 w-full pl-60">

            <div class="md:block hidden">
                <h1 class="text-3xl mx-10 mb-2">@yield('heading')</h1>
                <hr class="h-2 my-2 w-full bg-black">
            </div>
            @yield('content')
        </div>
    </div>




    <script>
        function showMenu() {
            var menu = document.getElementById('menu');
            if (menu.style.display == 'block') {
                menu.style.display = 'none';
            } else {
                menu.style.display = 'block';
            }
        }
    </script>
</body>

</html>
