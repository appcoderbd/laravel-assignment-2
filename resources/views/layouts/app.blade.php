<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex">

    <!-- Include Sidebar -->
    @include('partials.sidebar')

    <!-- Main Content Area -->
    <div class="ml-64 flex-1 flex flex-col">

        @include('partials.header')

     <!-- Content -->
        <main class="p-6 flex-1 overflow-y-auto">
            @yield('content')
        </main>
    </div>

</body>
</html>
