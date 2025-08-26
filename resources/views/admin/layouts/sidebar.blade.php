<div class="sidebar-logo">
    <img src="{{ asset('images/ecommerce03.jpg') }}" alt="Logo">
    <h3>Ecommerce</h3>
<hr class="sidebar-divider">
</div>
<nav>
    <ul class="sidebar-menu">
    <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }} sidebar-menu-main"><span class="sidebar-icon"><img src="{{ asset('images/home.png') }}" alt="Home" ></span> Dashboard</a></li>
    <li><a href="{{ route('products.index') }}" class="{{ request()->routeIs('products.*') ? 'active' : '' }} sidebar-menu-main"><span class="sidebar-icon"><img src="{{ asset('images/products.png') }}" alt="Products" ></span> Products</a></li>
    <li><a href="{{ route('categories.index') }}" class="{{ request()->routeIs('categories.*') ? 'active' : '' }} sidebar-menu-main"><span class="sidebar-icon"><img src="{{ asset('images/categories.png') }}" alt="Categories" ></span> Categories</a></li>
    <li><a href="{{ route('collections.index') }}" class="{{ request()->routeIs('collections.*') ? 'active' : '' }} sidebar-menu-main"><span class="sidebar-icon"><img src="{{ asset('images/collections.png') }}" alt="Collections" ></span> Collections</a></li>
    <li><a href="{{ route('test') }}" class="{{ request()->routeIs('test') ? 'active' : '' }} sidebar-menu-main"><span class="sidebar-icon"><img src="{{ asset('images/sale.png') }}" alt="Sales" ></span> Sales</a></li>
    <li><a href="#" class="{{ request()->routeIs('customers.*') ? 'active' : '' }} sidebar-menu-main"><span class="sidebar-icon"><img src="{{ asset('images/customers.png') }}" alt="Customers" ></span> Customers</a></li>
    <li><a href="#" class="{{ request()->routeIs('settings.*') ? 'active' : '' }} sidebar-menu-main"><span class="sidebar-icon"><img src="{{ asset('images/settings.png') }}" alt="Settings" ></span> Settings</a></li>
    <li><a href="{{ route('admin.profile') }}" class="{{ request()->routeIs('profile') ? 'active' : '' }} sidebar-menu-main"><span class="sidebar-icon"><img src="{{ asset('images/profile.png') }}" alt="Profile" ></span> Profile</a></li>
    </ul>
</nav>

