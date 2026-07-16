<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Contact Us | Alif Laila Cafe</title>
    
    @include('home.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Link to separated CSS file -->
    <link rel="stylesheet" href="{{ asset('frontend/css/contactus.css') }}">
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
        <section class="hero-contact">
            <video class="hero-video" autoplay loop muted playsinline>
                <source src="{{ asset('frontend/vid/video6.mp4') }}" type="video/mp4">
            </video>
            <div class="hero-bg"></div>
            <div class="hero-text-container">
                <h1 class="hero-title">CONTACT US</h1>
            </div>
        </section>

        <!-- Contact Layout Section -->
        <section class="contact-layout-section">
            <div class="contact-container">
                
                <!-- Left: Modern Animated Map Wrapper -->
                <div class="contact-map-wrapper reveal">
                    <!-- Original Google Maps Embed Code -->
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.8653083696395!2d51.4196388760591!3d25.40931882307505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45e10054147431%3A0x77c7d0f45dd729c!2sAlif%20Laila%20Cafe%20%26%20Restaurant!5e0!3m2!1sen!2sbd!4v1784131076752!5m2!1sen!2sbd" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="strict-origin-when-cross-origin">
                    </iframe>
                </div>

                <!-- Right: Staggered Text Content -->
                <div class="contact-info-wrapper">
                    <h2 class="reveal delay-1">HAVE A QUESTION, A COMMENT, OR JUST CRAVING THAT RISOTTO?</h2>
                    <h4 class="reveal delay-2">We'd love to hear from you.</h4>
                    <p class="reveal delay-3">Whether you're planning a visit, hosting an event, or just want to say hello – our team is here to help. Drop us a message, give us a call, or swing by and speak to us in person (the fountain view's even better up close).</p>
                    
                    <div class="contact-buttons-row reveal delay-4">
                        <a href="mailto:contact@aliflailacafe.com" class="btn-solid-dark">EMAIL US</a>
                        <a href="https://wa.me/97477723547" class="btn-solid-dark">WHATSAPP US</a>
                    </div>
                </div>

            </div>
        </section>

        <!-- Instagram / Gallery Section -->
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

    <!-- Modern Dark Footer -->
    @include('home.footer')

    <!-- Floating UI Widgets -->
    <div class="whatsapp-widget">
        <a href="https://wa.me/97477723547" target="_blank" rel="noopener noreferrer" style="color: white;">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Link to separated JS file -->
    <script src="{{ asset('frontend/js/contactus.js') }}"></script>
</body>
</html>