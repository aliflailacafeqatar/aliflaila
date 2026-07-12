<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>About Us | Alif Laila Cafe & Restaurant</title>
    
    @include('home.css')
    <!-- Link to separated CSS file -->
    <link rel="stylesheet" href="{{ asset('frontend/css/aboutus.css') }}">
</head>
<body>

    @include('home.header')

    <main>
        <!-- Hero Section -->
        <section class="hero-about">
            <video class="hero-video" autoplay loop muted playsinline>
                <source src="{{ asset('frontend/vid/video1.mp4') }}" type="video/mp4">
            </video>
            <div class="hero-bg"></div>
            <div class="hero-text-container">
                <h1 class="hero-title">ABOUT US</h1>
            </div>
        </section>

        <!-- Dark Intro / Journey Section -->
        <section class="dark-intro">
            <div class="reveal-scale">
                <h2>GLOBAL TO QATAR</h2>
                <h3>ALIF LAILA CAFE: Authentic Global Flavors in Modern Doha</h3>
                <p>Located in the vibrant heart of Qatar, ALIF LAILA CAFE brings together a rich tapestry of authentic global flavors. A seamless blend of diverse culinary heritage served with modern elegance, inviting guests to embark on a culinary journey without leaving the city.</p>
                <p>From the smoky perfection of our Barbeque Grill to our traditional Arabic Fatayer and aromatic Dum Biryanis, we honor the art of cooking by bringing together the very best of Arabic, Indian, Filipino, and Continental cuisines under one roof.</p>
                <a href="{{ url('/menu') }}" class="btn-outline-white">VIEW MENU</a>
            </div>
        </section>

        <!-- Parallax Video Showcase -->
        <section class="parallax-showcase">
            <div class="parallax-overlay"></div>
            <div class="play-btn-wrapper reveal">
                <i class="fas fa-play"></i>
            </div>
        </section>

        <!-- The Origins (Split Section) -->
        <section class="split-dark-section">
            <div class="split-dark-section-container">
                <div class="split-img-wrapper reveal">
                    <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="The Origins">
                </div>
                <div class="split-text-wrapper reveal delay-1">
                    <h3>THE ORIGINS - OUR STORY</h3>
                    <p><strong>A passion for global gastronomy.</strong></p>
                    <p>Alif Laila Cafe was founded with a singular vision: to create a dining destination where different cultures meet through the universal language of food. Inspired by the diverse expatriate and local community in Qatar, our founders set out to build a space that feels like home to everyone.</p>
                    <p>By sourcing the finest ingredients and bringing together master chefs specialized in their respective cuisines, we ensure every dish served tells a story of authenticity, tradition, and uncompromising quality.</p>
                </div>
            </div>
        </section>

        <!-- Culinary Excellence (Split Section Reverse) -->
        <section class="split-dark-section reverse">
            <div class="split-dark-section-container">
                <div class="split-img-wrapper reveal">
                    <img class="img-arch" src="https://images.unsplash.com/photo-1541167760496-1628856ab772?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Culinary Excellence">
                    <a href="{{ url('/menu') }}" class="btn-outline-white" style="margin-top: 30px;">VIEW MENU</a>
                </div>
                <div class="split-text-wrapper reveal delay-1">
                    <h3>CRAFTED WITH PASSION</h3>
                    <p><strong>A symphony of taste and presentation.</strong></p>
                    <p>Whether you are craving comforting Filipino Pancit and Sisig, Italian Oven Baked Pizzas, or refreshing freshly muddled Mojitos, our diverse menu is meticulously crafted to delight every craving.</p>
                    <p>We believe dining is an immersive experience. Our warm Middle Eastern hospitality, paired with our contemporary yet cozy aesthetic, ensures that whether you are here for a quick coffee or a celebratory feast, your time at Alif Laila will be unforgettable.</p>
                </div>
            </div>
        </section>

        <!-- Our Diners' Experiences Header (Light) -->
        <section class="experiences-header reveal">
            <h2>OUR DINERS' EXPERIENCES</h2>
        </section>

        <!-- Instagram / Gallery Section -->
        <section class="gallery-section dark-theme reveal">
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

    <!-- Modern Dark Footer -->
    @include('home.footer')

    <!-- Floating UI Widgets -->
    <div class="whatsapp-widget">
    <a href="https://wa.me/97477723547" target="_blank" rel="noopener noreferrer" style="color: white;">
        <i class="fab fa-whatsapp"></i>
    </a>
    </div>

    <!-- Link to separated JS file -->
    <script src="{{ asset('frontend/js/aboutus.js') }}"></script>
</body>
</html>