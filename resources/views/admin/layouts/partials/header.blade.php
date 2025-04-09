<header class="main-nav">
    <nav>
        <div class="main-navbar">
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>

                    <li class="dropdown">
                        <a class="active nav-link menu-title {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                            href="{{ route('admin.dashboard') }}">
                            <i data-feather="home"></i><span>Dashboard</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a class=" active nav-link menu-title {{ request()->routeIs('admin.users.*') ? 'active' : '' }}"
                            href="{{ route('admin.users.index') }}">
                            <i data-feather="users"></i><span>Users</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="active nav-link menu-title {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}"
                            href="{{ route('admin.blogs.index') }}">
                            <i data-feather="user-check"></i><span>Blogs</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="active nav-link menu-title {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}"
                            href="{{ route('admin.service_requests.index') }}">
                            <i data-feather="user-check"></i><span>Service Requests</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
