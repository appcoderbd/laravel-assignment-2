<!-- Header -->
        <header class="bg-gray-500 h-16 border-b sticky top-0 flex items-center justify-between px-6 py-3 z-50">
            <a href="{{ route('admin') }}" class="text-white font-bold text-lg">
                Admin Panel
            </a>
            <div class="flex items-center space-x-4">
                <span class="text-white">Welcome, Admin</span>
                <a href="{{ route('admin') }}"
                   class="bg-white text-blue-600 hover:bg-gray-100 px-3 py-1 rounded text-sm font-medium transition">
                   Logout
                </a>
            </div>
        </header>
