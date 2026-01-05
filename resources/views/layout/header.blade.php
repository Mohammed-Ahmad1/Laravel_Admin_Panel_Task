<header class="pc-header">
    <div class="header-wrapper flex justify-between items-center">

        <div class="me-auto pc-mob-drp">
            <ul class="inline-flex *:min-h-header-height *:inline-flex *:items-center">
                <li class="pc-h-item pc-sidebar-collapse max-lg:hidden lg:inline-flex">
                    <a href="#" class="pc-head-link" id="sidebar-hide">
                        <i data-feather="menu"></i>
                    </a>
                </li>

                <li class="pc-h-item pc-sidebar-popup lg:hidden">
                    <a href="#" class="pc-head-link" id="mobile-collapse">
                        <i data-feather="menu"></i>
                    </a>
                </li>

                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle" data-pc-toggle="dropdown">
                        <i data-feather="search"></i>
                    </a>
                    <div class="dropdown-menu pc-h-dropdown drp-search">
                        <form class="px-2 py-1">
                            <input type="search" class="form-control" placeholder="Search here..." />
                        </form>
                    </div>
                </li>
            </ul>
        </div>

        <div class="ms-auto">
            <ul class="inline-flex *:min-h-header-height *:inline-flex *:items-center">

                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle" data-pc-toggle="dropdown">
                        <i data-feather="sun"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                        <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
                            <i data-feather="moon"></i> Dark
                        </a>
                        <a href="#!" class="dropdown-item" onclick="layout_change('light')">
                            <i data-feather="sun"></i> Light
                        </a>
                        <a href="#!" class="dropdown-item" onclick="layout_change_default()">
                            <i data-feather="settings"></i> Default
                        </a>
                    </div>
                </li>

                <li class="dropdown pc-h-item header-user-profile">
                    <a class="pc-head-link dropdown-toggle" data-pc-toggle="dropdown">
                        <i data-feather="user"></i>
                    </a>

                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown p-2">
                        <div class="dropdown-header bg-primary-500 text-white p-4">
                            <h6 class="mb-0">{{ auth()->user()->name ?? 'Guest' }}</h6>
                            <small>{{ auth()->user()->email ?? '' }}</small>
                        </div>

                        <div class="dropdown-body p-3">
                            <a href="#" class="dropdown-item">Settings</a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn btn-primary w-full mt-2">Logout</button>
                            </form>
                        </div>
                    </div>
                </li>

            </ul>
        </div>

    </div>
</header>
