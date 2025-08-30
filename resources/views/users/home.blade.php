
@extends('layouts.user')

@section('content')

@include('users.partials.hero-section')

@include('users.partials.shop-category-section')

@include('users.partials.featured-collections-section')

@include('users.partials.featured-products-section')

<!-- Promotional Banners -->
<section class="promo-banners py-4">
    <div class="container">
        <div class="promo-banner-row d-flex flex-column flex-md-row align-items-center justify-content-center gap-4">
            
            <!-- Free Shipping -->
            <div class="promo-banner d-flex align-items-center p-3 flex-fill">
                <div class="promo-icon me-3">
                    <i class="fas fa-truck"></i>
                </div>
                <div class="promo-text">
                    <h6 class="mb-1 fw-bold">Free Shipping</h6>
                    <p class="mb-0 text-muted">On orders over $50</p>
                </div>
            </div>

            <!-- 10% Off -->
            <div class="promo-banner d-flex align-items-center p-3 flex-fill">
                <div class="promo-icon me-3">
                    <i class="fas fa-gift"></i>
                </div>
                <div class="promo-text">
                    <h6 class="mb-1 fw-bold">10% Off</h6>
                    <p class="mb-0 text-muted">First order when you sign up</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Newsletter Signup -->
<section class="newsletter-section my-5">
    <div class="container">
        <div class="newsletter-card p-4 rounded-4 shadow-sm bg-white mx-auto" style="max-width: 600px;">
            <div class="newsletter-content text-center">
                <h4 class="fw-bold mb-2">Join our newsletter</h4>
                <p class="text-muted mb-4">Sign up for exclusive offers & new product updates</p>
                <form class="newsletter-form d-flex flex-column flex-md-row align-items-center justify-content-center gap-3">
                    <input type="email" class="form-control newsletter-input rounded-pill px-4 py-2" placeholder="Enter your email" required>
                    <button type="submit" class="btn btn-primary newsletter-btn rounded-pill px-4 py-2 fw-semibold">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer-section">
    <div class="container">

        <div class="footer-row">

            <!-- About Us -->
            <div class="footer-col">
                <h5>About Us</h5>
                <ul class="footer-links">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Returns & Refunds</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Follow Us -->
            <div class="footer-col">
                <h5>Follow Us</h5>
                <div class="footer-socials">
                    <a href="#" title="Facebook" class="footer-social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" title="Instagram" class="footer-social"><i class="fab fa-instagram"></i></a>
                    <a href="#" title="TikTok" class="footer-social"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>

            <!-- Payment Methods -->
            <div class="footer-col">
                <h5>Payment Methods</h5>
                <div class="footer-payments">
                    <i class="fab fa-cc-visa" title="Visa"></i>
                    <i class="fab fa-cc-mastercard" title="MasterCard"></i>
                    <i class="fab fa-cc-paypal" title="PayPal"></i>
                </div>
            </div>

        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">&copy; {{ date('Y') }} Makara. All rights reserved.</div>
    </div>
</footer>
@endsection