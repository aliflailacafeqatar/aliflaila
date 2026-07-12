<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Contact Us | Alif Laila Cafe</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Link to separated CSS file -->
    <link rel="stylesheet" href="{{ asset('frontend/css/contactus.css') }}">
</head>
<body>

    <header>
        <div class="top-bar">
            <div class="top-bar-left">
                <span><i class="fas fa-phone-alt"></i> +971 777723547</span>
                <span><i class="fas fa-asterisk"></i> LUXURY AVENUE, DOHA, QATAR</span>
            </div>
            <div class="top-bar-right">
                <span>MON - THU: 9AM TO 12AM | FRI - SUN: 9AM TO 1AM</span>
            </div>
        </div>

        <div class="navbar-wrapper">
            <nav class="navbar">
                <!-- Desktop Left Links -->
                <div class="nav-group left">
                    <ul class="nav-links">
                        <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">HOME</a></li>
                        <li><a href="{{ url('/menu') }}" class="{{ Request::is('menu') ? 'active' : '' }}">MENU</a></li>
                        <li><a href="{{ url('/bookatable') }}" class="{{ Request::is('bookatable') ? 'active' : '' }}">RESERVATIONS</a></li>
                        <li><a href="{{ url('/blog') }}" class="{{ Request::is('blog') ? 'active' : '' }}">BLOG</a></li>
                    </ul>
                </div>

                <!-- Brand Logo (Centered perfectly on mobile) -->
                <div class="brand-logo">
                    <h1>Alif Laila Cafe & <br>Restaurant</h1>
                    <span>QATAR</span>
                </div>

                <!-- Desktop Right Links -->
                <div class="nav-group right">
                    <ul class="nav-links">
                        <li><a href="{{ url('/aboutus') }}" class="{{ Request::is('aboutus') ? 'active' : '' }}">ABOUT US</a></li>
                        <li><a href="{{ url('/gallery') }}" class="{{ Request::is('gallery') ? 'active' : '' }}">GALLERY</a></li>
                        <li><a href="{{ url('/contactus') }}" class="{{ Request::is('contactus') ? 'active' : '' }}">CONTACT US</a></li>
                    </ul>
                    <button class="btn-reserve" onclick="window.location.href='{{ url('/bookatable') }}'">RESERVE A TABLE</button>
                </div>
                
                <!-- Modern Mobile Hamburger Icon -->
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>

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
                <source src="{{ asset('frontend/vid/video3.mp4') }}" type="video/mp4">
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
                    <!-- Fixed Google Maps Embed URL -->
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115408.09799715104!2d51.436798!3d25.283995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45c534ffdce87f%3A0x44d9319f787d4b!2sDoha%2C%20Qatar!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
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
    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-col brand reveal">
                <a href="{{ url('/') }}" class="footer-logo">
                    Alif Laila Cafe
                    <span>QATAR</span>
                </a>
                <p>Offering a vibrant mix of authentic Arabic, Indian, Filipino, and Continental dishes, ALIF LAILA CAFE is the perfect destination for food lovers. A seamless blend of global flavors and warm Middle Eastern hospitality.</p>
            </div>

            <div class="footer-col reveal delay-1">
                <h4>CONTACT US</h4>
                <p>LUXURY AVENUE, DOHA</p>
                <p>WHATSAPP: +971 77723547</p>
                <p>EMAIL: CONTACT@ALIFLAILACAFE.COM</p>
                <p style="margin-top: 15px; text-transform: uppercase;">MON-THU 9AM to 12AM | FRI-SUN 9AM to 1AM</p>
            </div>

            <div class="footer-col reveal delay-2">
                <h4>SITEMAP</h4>
                <ul class="footer-links">
                    <li><a href="{{ url('/') }}">HOME</a></li>
                    <li><a href="{{ url('/menu') }}">MENU</a></li>
                    <li><a href="{{ url('/bookatable') }}">RESERVATIONS</a></li>
                    <li><a href="{{ url('/aboutus') }}">ABOUT US</a></li>
                    <li><a href="#">PRIVACY POLICY</a></li>
                    <li><a href="#">TERMS</a></li>
                </ul>
            </div>

            <div class="footer-col reveal delay-3">
                <h4>FOLLOW US</h4>
                <div class="footer-socials">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <h4 style="margin-top: 30px; margin-bottom: 5px;">SIGN UP FOR NEWSLETTER</h4>
                <form class="newsletter-form">
                    <input type="email" placeholder="Enter your email" class="newsletter-input" required>
                    <button type="submit" class="newsletter-btn"><i class="fas fa-arrow-right"></i></button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            &copy; {{ date('Y') }} ALIF LAILA CAFE. ALL RIGHTS RESERVED.
        </div>
    </footer>

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