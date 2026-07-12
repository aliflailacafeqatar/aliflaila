<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Alif Laila Cafe & Restaurant | Qatar</title>
    
    @include('home.css')
    <!-- Link to your separate CSS file -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>
<body>

    @include('home.header')

    <div class="mobile-menu" id="mobile-menu">
        <ul class="mobile-nav-links">
            <li><a href="{{ url('/') }}" class="active">HOME</a></li>
            <li><a href="{{ url('/menu') }}">MENU</a></li>
            <li><a href="{{ url('/bookatable') }}">RESERVATIONS</a></li>
            <li><a href="{{ url('/blog') }}">BLOG</a></li>
            <li><a href="{{ url('/aboutus') }}">ABOUT US</a></li>
            <li><a href="{{ url('/gallery') }}">GALLERY</a></li>
            <li><a href="{{ url('/contactus') }}">CONTACT US</a></li>
        </ul>
        <button class="btn-reserve" onclick="window.location.href='{{ url('/bookatable') }}'">RESERVE A TABLE</button>
    </div>

    <main>
        <section class="hero">
            <video class="hero-video" autoplay loop muted playsinline>
                <!-- Updated video path based on your folder structure -->
                <source src="{{ asset('frontend/vid/video1.mp4') }}" type="video/mp4">
            </video>
            
            <div class="hero-bg"></div>
            
            <div class="hero-text-container">
                <div class="hero-title">
                    A World of Flavors<br>
                    Contemporary Qatar Dining
                </div>
                <div style="margin-top: 40px; opacity: 0; animation: fadeInUp 1.2s cubic-bezier(0.2, 0.8, 0.2, 1) forwards; animation-delay: 0.6s;">
                    <a href="{{ url('/bookatable') }}" class="btn-solid">BOOK A TABLE</a>
                </div>
            </div>
        </section>

        <section class="our-story">
            <div class="story-container">
                <div class="story-image reveal">
                    <img src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Delicious Dish">
                </div>
                <div class="story-content reveal delay-1">
                    <h2 class="story-subtitle">A GLOBAL CULINARY JOURNEY:</h2>
                    <h3 class="story-title">ROOTED IN QATAR</h3>
                    <p class="story-text">
                        Located in the vibrant heart of Qatar, ALIF LAILA CAFE brings together a rich tapestry of authentic global flavors. From traditional Arabic Fatayer and aromatic Indian Biryanis to beloved Filipino classics and comforting Italian pizzas, our menu is a celebration of diverse culinary heritage served with modern elegance.
                    </p>
                    <a href="{{ url('/aboutus') }}" class="btn-learn">LEARN MORE</a>
                </div>
            </div>
        </section>

        <section class="parallax-banner reveal">
            <video class="banner-video" autoplay loop muted playsinline>
                <!-- Updated video path based on your folder structure -->
                <source src="{{ asset('frontend/vid/video1.mp4') }}" type="video/mp4">
            </video>
            
            <div class="banner-overlay"></div>
            
            <div class="banner-content delay-1">
                <h2 class="banner-title">WHERE TRADITION MEETS TASTE</h2>
                <div class="banner-buttons">
                    <a href="{{ url('/menu') }}" class="btn-solid">VIEW MENU</a>
                    <a href="{{ url('/aboutus') }}" class="btn-solid">OUR PROMISE</a>
                </div>
            </div>
        </section>

        <section class="experiences-header reveal">
            <h2>OUR DINERS' EXPERIENCES</h2>
        </section>

        <section class="split-section reveal delay-1">
            <div class="split-image">
                <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Diners Experience">
            </div>
            <div class="split-content-wrapper">
                <div class="split-content">
                    <h3>A SYMPHONY OF AUTHENTIC FLAVORS</h3>
                    <p>
                        Stepping into ALIF LAILA CAFE is an immersive experience. We honor the art of cooking by bringing together the very best of Arabic, Indian, Filipino, and Continental cuisines. Whether you are craving the smoky perfection of our Barbeque Grill, a refreshing freshly muddled Mojito, or a comforting bowl of Mac and Cheese, our diverse menu is crafted to delight every craving.
                    </p>
                    <a href="{{ url('/bookatable') }}" class="btn-learn">RESERVE A TABLE</a>
                </div>
            </div>
        </section>

        <div class="ticker-wrap reveal">
            <div class="ticker-move">
                <div class="ticker-content">
                    <span class="ticker-item">ARABIC FATAYER</span> <span class="ticker-dot">•</span>
                    <span class="ticker-item">DUM BIRYANI</span> <span class="ticker-dot">•</span>
                    <span class="ticker-item">OVEN BAKED PIZZA</span> <span class="ticker-dot">•</span>
                    <span class="ticker-item">PANCIT & SISIG RICE</span> <span class="ticker-dot">•</span>
                    <span class="ticker-item">GRILL & BARBECUE</span> <span class="ticker-dot">•</span>
                    <span class="ticker-item">FRESH JUICES & MOJITOS</span> <span class="ticker-dot">•</span>
                    <span class="ticker-item">SIZZLING BURGERS</span> <span class="ticker-dot">•</span>
                    <span class="ticker-item">SIGNATURE DESSERTS</span> <span class="ticker-dot">•</span>
                </div>
                <div class="ticker-content">
                    <span class="ticker-item">ARABIC FATAYER</span> <span class="ticker-dot">•</span>
                    <span class="ticker-item">DUM BIRYANI</span> <span class="ticker-dot">•</span>
                    <span class="ticker-item">OVEN BAKED PIZZA</span> <span class="ticker-dot">•</span>
                    <span class="ticker-item">PANCIT & SISIG RICE</span> <span class="ticker-dot">•</span>
                    <span class="ticker-item">GRILL & BARBECUE</span> <span class="ticker-dot">•</span>
                    <span class="ticker-item">FRESH JUICES & MOJITOS</span> <span class="ticker-dot">•</span>
                    <span class="ticker-item">SIZZLING BURGERS</span> <span class="ticker-dot">•</span>
                    <span class="ticker-item">SIGNATURE DESSERTS</span> <span class="ticker-dot">•</span>
                </div>
            </div>
        </div>

        <section class="gallery-section reveal">
            <div class="gallery-header">
                <h3>@ALIFLAILACAFEQATAR</h3>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Coffee preparation">
                    <div class="gallery-play-icon"><i class="fas fa-play"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Cafe ambiance">
                    <div class="gallery-play-icon"><i class="fas fa-play"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Delicious meal">
                    <div class="gallery-play-icon"><i class="fas fa-play"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1536939459926-301728717817?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Signature Drink">
                    <div class="gallery-play-icon"><i class="fas fa-play"></i></div>
                </div>
            </div>
        </section>

    </main>

    @include('home.footer')

    <div class="whatsapp-widget">
        <a href="https://wa.me/97477723547" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Link to your separate JS file -->
    <script src="{{ asset('frontend/js/script.js') }}"></script>
</body>
</html>