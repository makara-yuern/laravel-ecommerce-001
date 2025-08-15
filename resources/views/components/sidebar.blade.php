
<aside class="sidebar">
    <div class="sidebar-logo">
        <img src="{{ asset('storage/images/ecommerce03.jpg') }}" alt="Logo">
        <h3>Ecommerce</h3>
    <hr class="sidebar-divider">
    </div>
    <nav>
        <ul class="sidebar-menu">
            <li><a href="{{ route('dashboard') }}" class="active"><span class="sidebar-icon">🏠</span> Dashboard</a></li>
            <li class="sidebar-dropdown">
                <a href="#" onclick="toggleSidebarDropdown(event)"><span class="sidebar-icon">📦</span> Products <span class="sidebar-dropdown-arrow"><i class="fa-solid fa-circle-chevron-down"></i></span></a>
                <ul class="sidebar-submenu" style="display:none;">
                    <li><a href="#"><span class="sidebar-icon">📋</span> Product List</a></li>
                    <li><a href="#"><span class="sidebar-icon">🗂️</span> Categories</a></li>
                </ul>
            </li>
            <li><a href="#"><span class="sidebar-icon">💰</span> Sales</a></li>
            <li><a href="#"><span class="sidebar-icon">👥</span> Customers</a></li>
            <li><a href="#"><span class="sidebar-icon">⚙️</span> Settings</a></li>
            <li><a href="{{ route('profile') }}"><span class="sidebar-icon">👤</span> Profile</a></li>
        </ul>
    </nav>
</aside>
