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

        <a href="#"
           class="flex items-center px-3 py-2 text-sm font-medium rounded hover:bg-gray-700">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 4v16m8-8H4"></path>
            </svg>
            Add New
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

