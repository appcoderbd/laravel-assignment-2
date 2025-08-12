<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}" href="{{ url('/') }}">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('categories*') ? 'active' : '' }}" href="{{ url('/categories') }}">
                    Categories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('posts*') ? 'active' : '' }}" href="{{ url('/posts') }}">
                    Posts
                </a>
            </li>
        </ul>
    </div>
</nav>
