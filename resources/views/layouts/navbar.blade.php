<div class="navbar-content">
    <div class="navbar-breadcrumb">
        <nav class="flex items-center text-sm text-gray-600 gap-2 bg-gray-100 px-4 py-2 rounded-md shadow-sm mr-4" aria-label="Breadcrumb">
            {!! Breadcrumbs::render() !!}
        </nav>
    </div>
    <div class="nav-action">
        <form class="navbar-search">
            <input type="text" placeholder="Search..." class="navbar-search-input">
            <span class="navbar-search-icon">🔍</span>
        </form>
        <button class="navbar-notification">
            <span class="navbar-notification-icon">🔔</span>
            <span class="navbar-notification-badge">3</span>
        </button>
        <div class="user-info">
            <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('images/ecommerce03.jpg') }}" alt="Profile" class="navbar-profile" onclick="toggleUserDropdown(event)">
            <div class="user-dropdown">
                <div class="user-dropdown-name">
                    <a href="{{ route('profile') }}" class="navbar-profile-link">
                        {{ Auth::user()->name }}
                    </a>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="user-dropdown-form">
                    @csrf
                    <button type="submit" class="user-dropdown-logout">Logout</button>
                </form>
            </div>
        </div>
    </div>    
</div>
