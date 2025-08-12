<header class="navbar navbar-dark bg-primary sticky-top shadow">
    <a class="navbar-brand px-3" href="{{ url('/admin') }}">
        <strong>Admin Panel</strong>
    </a>
    <div class="d-flex align-items-center me-3">
        <span class="text-white me-3">Welcome, Admin</span>
        <a href="{{ url('/logout') }}" class="btn btn-sm btn-outline-light">Logout</a>
    </div>
</header>

