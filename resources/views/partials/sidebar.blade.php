<!-- Sidebar.blade.php -->
<div class="flex flex-col h-screen w-64 bg-gray-500 text-gray-100 fixed">
    <!-- Logo / Brand -->
    <div class="flex items-center justify-center h-16 border-b border-gray-700">
        <span class="text-lg font-bold">MyApp</span>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-2 py-4 space-y-2 overflow-y-auto">
        <a href="{{ route('admin') }}"
           class="flex items-center px-3 py-2 text-sm font-medium rounded hover:bg-gray-700">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3 7h18M3 12h18M3 17h18"></path>
            </svg>
            Dashboard
        </a>

        <a href="{{ route('create.categories') }}"
           class="flex items-center px-3 py-2 text-sm font-medium rounded hover:bg-gray-700">
           <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 4v16m8-8H4"></path>
            </svg>
            Category Add
        </a>

        <a href="{{ route('category.show') }}"
           class="flex items-center px-3 py-2 text-sm font-medium rounded hover:bg-gray-700">
           <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3 7h18M3 12h18M3 17h18"></path>
            </svg>
            Category List
            <span
                class="ml-auto inline-block px-2 py-0.5 text-xs font-semibold bg-green-500 rounded-full">5</span>
        </a>

        <a href="{{ route('posts.index') }}"
           class="flex items-center px-3 py-2 text-sm font-medium rounded hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
            </svg>

            Post Create
        </a>
    </nav>

    <!-- User Profile -->
    <div class="flex items-center px-4 py-4 border-t border-gray-700">
        <img class="w-10 h-10 rounded-full mr-3" src="https://i.pravatar.cc/100" alt="User Avatar">
        <div>
            <p class="text-sm font-medium">Nazim Uddin</p>
            <p class="text-xs text-gray-400">Admin</p>
        </div>
    </div>
</div>

