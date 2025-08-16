<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.1/flowbite.min.js"></script>


</body>
</html>
