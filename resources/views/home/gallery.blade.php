<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Gallery | Alif Laila Cafe & Restaurant</title>
    
    @include('home.css')
    <!-- External CSS link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/gallery.css') }}">
</head>
<body>

    @include('home.header')

    <!-- Mobile Full-Screen Slide-in Menu -->
    <div class="mobile-menu" id="mobile-menu">
        <ul class="mobile-nav-links">
            <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">HOME</a></li>
            <li><a href="{{ url('/menu') }}" class="{{ Request::is('menu') ? 'active' : '' }}">MENU</a></li>
            <li><a href="{{ url('/bookatable') }}" class="{{ Request::is('bookatable') ? 'active' : '' }}">RESERVATIONS</a></li>
            <li><a href="{{ url('/blog') }}" class="{{ Request::is('blog') ? 'active' : '' }}">BLOG</a></li>
            <li><a href="{{ url('/aboutus') }}" class="{{ Request::is('aboutus') ? 'active' : '' }}">ABOUT US</a></li>
            <li><a href="{{ url('/gallery') }}" class="{{ Request::is('gallery') ? 'active' : '' }}">GALLERY</a></li>
            <li><a href="{{ url('/contactus') }}" class="{{ Request::is('contactus') ? 'active' : '' }}">CONTACT US</a></li>
        </ul>
        <button class="btn-reserve" onclick="window.location.href='{{ url('/bookatable') }}'">RESERVE A TABLE</button>
    </div>

    <main>
        <!-- Hero Section -->
        <section class="hero-gallery">
            <div class="hero-bg-image"></div>
            <div class="hero-overlay"></div>
            <div class="hero-text-container">
                <h1 class="hero-title">OUR GALLERY</h1>
            </div>
        </section>

        <!-- Intro Section -->
        <section class="gallery-intro reveal">
            <h2>DINE IN STYLE</h2>
            <p>Step inside our world of flavor. Browse through our curated gallery showcasing the ambiance, signature dishes, and unforgettable moments that make dining with us a memorable experience. From gourmet presentations to cozy interiors, each photo tells the story of our passion for food and hospitality.</p>
        </section>

        <!-- Modern CSS Grid Gallery Section -->
        <section class="modern-gallery-container">
            <div class="modern-gallery">
                <!-- Row 1 & 2 Block -->
                <div class="gal-item reveal delay-1">
                    <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&w=600&q=80" alt="Grill dish">
                </div>
                <div class="gal-item reveal delay-2">
                    <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?auto=format&fit=crop&w=600&q=80" alt="Chef preparing">
                </div>
                <div class="gal-item gal-large reveal delay-3">
                    <img src="https://images.unsplash.com/photo-1534422298391-e4f8c172dddb?auto=format&fit=crop&w=600&q=80" alt="Pouring syrup on dessert">
                </div>
                
                <!-- Row 2 Fill -->
                <div class="gal-item reveal delay-1">
                    <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?auto=format&fit=crop&w=600&q=80" alt="Pasta dish">
                </div>
                <div class="gal-item reveal delay-2">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=600&q=80" alt="Plated meal">
                </div>

                <!-- Row 3 & 4 Block -->
                <div class="gal-item gal-tall reveal delay-1">
                    <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=600&q=80" alt="Ambiance">
                </div>
                <div class="gal-item reveal delay-2">
                    <img src="https://images.unsplash.com/photo-1534422298391-e4f8c172dddb?auto=format&fit=crop&w=600&q=80" alt="Bruschetta">
                </div>
                <div class="gal-item reveal delay-3">
                    <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?auto=format&fit=crop&w=600&q=80" alt="Cafe interior">
                </div>
                <div class="gal-item reveal delay-4">
                    <img src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?auto=format&fit=crop&w=600&q=80" alt="Salad">
                </div>

                <!-- Row 4 Fill -->
                <div class="gal-item reveal delay-1">
                    <img src="https://images.unsplash.com/photo-1534422298391-e4f8c172dddb?auto=format&fit=crop&w=600&q=80" alt="Dessert spread">
                </div>
                <div class="gal-item reveal delay-2">
                    <img src="https://images.unsplash.com/photo-1587314168485-3236d6710814?auto=format&fit=crop&w=600&q=80" alt="Cheesecake">
                </div>
                <div class="gal-item reveal delay-3">
                    <img src="https://images.unsplash.com/photo-1534422298391-e4f8c172dddb?auto=format&fit=crop&w=600&q=80" alt="Fruit bowl">
                </div>
            </div>
        </section>

        <!-- Instagram / Gallery Bottom Section -->
        <section class="gallery-section reveal">
            <div class="gallery-header">
                <h3>@ALIFLAILACAFEQATAR</h3>
            </div>
            <div class="gallery-grid">
                <div class="gallery-bottom-item">
                    <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Coffee preparation">
                    <div class="gallery-play-icon"><i class="fas fa-play"></i></div>
                </div>
                <div class="gallery-bottom-item">
                    <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Cafe ambiance">
                    <div class="gallery-play-icon"><i class="fas fa-play"></i></div>
                </div>
                <div class="gallery-bottom-item">
                    <img src="https://images.unsplash.com/photo-1544148103-0773bf10d330?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Delicious meal">
                    <div class="gallery-play-icon"><i class="fas fa-play"></i></div>
                </div>
                <div class="gallery-bottom-item">
                    <img src="https://images.unsplash.com/photo-1536939459926-301728717817?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Signature Drink">
                    <div class="gallery-play-icon"><i class="fas fa-play"></i></div>
                </div>
            </div>
        </section>

    </main>

    <!-- Modern Dark Footer -->
    @include('home.footer')

    <!-- Floating UI Widgets -->
    <div class="whatsapp-widget">
    <a href="https://wa.me/97477723547" target="_blank" rel="noopener noreferrer" style="color: white;">
        <i class="fab fa-whatsapp"></i>
    </a>
    </div>

    <!-- External JS link -->
    <script src="{{ asset('frontend/js/gallery.js') }}"></script>
</body>
</html>