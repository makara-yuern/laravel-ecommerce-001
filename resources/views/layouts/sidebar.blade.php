<div class="sidebar-logo">
    <img src="{{ asset('storage/images/ecommerce03.jpg') }}" alt="Logo">
    <h3>Ecommerce</h3>
<hr class="sidebar-divider">
</div>
<nav>
    <ul class="sidebar-menu">
        <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }} sidebar-menu-main"><span class="sidebar-icon">🏠</span> Dashboard</a></li>
        <li class="sidebar-dropdown">
            <div class="sidebar-dropdown-row">
                <a href="{{ route('products.index') }}" class="{{ request()->routeIs('products.*') || request()->routeIs('categories.*') || request()->routeIs('collections.*') ? 'active' : '' }}"><span class="sidebar-icon">📦</span> Products</a>
                <span class="sidebar-dropdown-arrow" style="cursor:pointer;" onclick="toggleSidebarDropdown(event)" data-dropdown="products"><i class="fa-solid fa-circle-chevron-down"></i></span>
            </div>
            <ul class="sidebar-submenu" data-dropdown="products" style="display:none;">
                <li><a href="{{ route('products.index') }}" class="{{ request()->routeIs('products.index') ? 'active' : '' }}"><span class="sidebar-icon">📋</span> Product List</a></li>
                <li><a href="{{ route('products.create') }}" class="{{ request()->routeIs('products.create') ? 'active' : '' }}"><span class="sidebar-icon">➕</span> Add Product</a></li>
                <li><a href="{{ route('categories.index') }}" class="{{ request()->routeIs('categories.*') ? 'active' : '' }}"><span class="sidebar-icon">🗂️</span> Categories</a></li>
                <li><a href="{{ route('collections.index') }}" class="{{ request()->routeIs('collections.*') ? 'active' : '' }}"><span class="sidebar-icon">🎉</span> Collections</a></li>
            </ul>
        </li>
        <li><a href="#" class="{{ request()->routeIs('sales.*') ? 'active' : '' }} sidebar-menu-main"><span class="sidebar-icon">💰</span> Sales</a></li>
        <li><a href="#" class="{{ request()->routeIs('customers.*') ? 'active' : '' }} sidebar-menu-main"><span class="sidebar-icon">👥</span> Customers</a></li>
        <li><a href="#" class="{{ request()->routeIs('settings.*') ? 'active' : '' }} sidebar-menu-main"><span class="sidebar-icon">⚙️</span> Settings</a></li>
        <li><a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'active' : '' }} sidebar-menu-main"><span class="sidebar-icon">👤</span> Profile</a></li>
    </ul>
</nav>

