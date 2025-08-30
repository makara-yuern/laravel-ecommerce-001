<!-- Navbar -->
<header class="navbar-home">
    <div class="navbar-container">
        <!-- Logo -->
        <a href="/" class="navbar-brand">
            <img src="{{ asset('images/ecommerce03.jpg') }}" alt="Logo">
            <h3>Ecommerce</h3>
        </a>

        <!-- Navigation Links -->
        <nav class="navbar-nav">
            <a href="#" class="nav-link">Home</a>

            <!-- Shop Dropdown -->
            <div class="nav-dropdown">
                <a href="#" class="nav-link">Shop <i class="fa fa-chevron-down"></i></a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">All Products</a>
                    <a href="#" class="dropdown-item">New Arrivals</a>
                    <a href="#" class="dropdown-item">Best Sellers</a>
                    <a href="#" class="dropdown-item">Sale</a>
                </div>
            </div>

            <a href="#" class="nav-link">Collections</a>
            <a href="#" class="nav-link">About</a>
            <a href="#" class="nav-link">Contact</a>
        </nav>

        <!-- Right Icons -->
		<div class="navbar-icons">
			<a href="#" title="Cart" class="navbar-icon">
				<i class="fas fa-shopping-cart"></i>
			</a>
			<a href="#" title="Wishlist" class="navbar-icon">
				<i class="fas fa-heart"></i>
			</a>
			<a href="#" title="Profile" class="navbar-icon">
				<i class="fas fa-user"></i>
			</a>
		</div>
    </div>
</header>
