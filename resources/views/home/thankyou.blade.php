<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Thank You | Alif Laila Cafe & Restaurant</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Linked CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/thankyou.css') }}">
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
                <div class="nav-group left">
                    <ul class="nav-links">
                        <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">HOME</a></li>
                        <li><a href="{{ url('/menu') }}" class="{{ Request::is('menu') ? 'active' : '' }}">MENU</a></li>
                        <li><a href="{{ url('/bookatable') }}" class="{{ Request::is('bookatable') ? 'active' : '' }}">RESERVATIONS</a></li>
                        <li><a href="{{ url('/blog') }}" class="{{ Request::is('blog') ? 'active' : '' }}">BLOG</a></li>
                    </ul>
                </div>

                <div class="brand-logo">
                    <h1>Alif Laila Cafe & Restaurant</h1>
                    <span>QATAR</span>
                </div>

                <div class="nav-group right">
                    <ul class="nav-links">
                        <li><a href="{{ url('/aboutus') }}" class="{{ Request::is('aboutus') ? 'active' : '' }}">ABOUT US</a></li>
                        <li><a href="{{ url('/gallery') }}" class="{{ Request::is('gallery') ? 'active' : '' }}">GALLERY</a></li>
                        <li><a href="{{ url('/contactus') }}" class="{{ Request::is('contactus') ? 'active' : '' }}">CONTACT US</a></li>
                    </ul>
                    <a href="{{ url('/bookatable') }}" class="btn-reserve">RESERVE A TABLE</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="thankyou-hero">
            <video class="hero-video" autoplay loop muted playsinline>
                <source src="{{ asset('frontend/vid/video1.mp4') }}" type="video/mp4">
            </video>
            <div class="hero-bg"></div>
            <div class="thankyou-hero-content">
                <h1 class="thankyou-title">THANK YOU!</h1>
                <p class="thankyou-subtitle">Your reservation has been made.</p>
            </div>
        </section>

        <!-- Message and Actions -->
        <section class="message-section reveal active">
            <div class="message-container">
                <h2 class="message-title">THANK YOU FOR CHOOSING ALIF LAILA</h2>
                <p class="message-text">Please check your inbox (and spam folder) for an email containing your reservation details. If you need to make changes, please use the links below or contact us directly.</p>
                <div class="action-buttons">
                    <a href="{{ url('/menu') }}" class="btn-dark">VIEW MENU</a>
                    <a href="{{ url('/contactus') }}" class="btn-dark">OUR LOCATION</a>
                </div>
            </div>
        </section>

        <!-- FAQ Accordion Section -->
        <section class="faq-section reveal delay-1">
            <div class="faq-container">
                <div class="faq-header">
                    <h2>EVERYTHING YOU NEED TO KNOW BEFORE<br>YOUR VISIT TO ALIF LAILA CAFE.</h2>
                    <p>Find the answers to our most frequently asked questions ahead of your visit. Below is all you need to know about dining with us. If you still have questions, please contact our team.</p>
                </div>

                <div class="faq-list">
                    
                    <div class="faq-item">
                        <div class="faq-question">WHERE IS ALIF LAILA CAFE LOCATED? <i class="fas fa-plus"></i></div>
                        <div class="faq-answer">
                            <p>We are situated in the vibrant heart of the city at Luxury Avenue, Doha, Qatar. Convenient parking is available nearby.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">WHAT ARE YOUR OPENING HOURS? <i class="fas fa-plus"></i></div>
                        <div class="faq-answer">
                            <p>We are open from Monday to Thursday: 9:00 AM to 12:00 AM, and Friday to Sunday: 9:00 AM to 1:00 AM.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">DO YOU TAKE RESERVATIONS? <i class="fas fa-plus"></i></div>
                        <div class="faq-answer">
                            <p>Yes, we highly recommend making a reservation, especially for dinner and weekends. You can book directly through our website or contact our reservation team.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">DO YOU HAVE VEGETARIAN OR VEGAN OPTIONS? <i class="fas fa-plus"></i></div>
                        <div class="faq-answer">
                            <p>Absolutely. Our diverse menu features a wide range of vegetarian and vegan dishes crafted with the same culinary excellence as our signature items.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">IS YOUR CAFE FAMILY-FRIENDLY? <i class="fas fa-plus"></i></div>
                        <div class="faq-answer">
                            <p>Yes! We welcome families and offer a dedicated kid's menu as well as comfortable seating arrangements for groups of all sizes.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">CAN I HOST A PRIVATE EVENT AT ALIF LAILA? <i class="fas fa-plus"></i></div>
                        <div class="faq-answer">
                            <p>We offer fantastic packages for private dining, birthdays, and corporate events. Please reach out via our 'Contact Us' page to speak with our events coordinator.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">DO YOU HAVE A SIGNATURE DISH? <i class="fas fa-plus"></i></div>
                        <div class="faq-answer">
                            <p>We are famous for our authentic Dum Biryani and our freshly baked Arabic Fatayer. We highly recommend trying them on your first visit!</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">IS THERE A DRESS CODE? <i class="fas fa-plus"></i></div>
                        <div class="faq-answer">
                            <p>Our dress code is smart casual. We ask our guests to dress comfortably but elegantly to match the ambiance of our dining room.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Instagram / Gallery Section -->
        <section class="gallery-section reveal delay-2">
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
                <p>WHATSAPP: +971 777723547</p>
                <p>EMAIL: CONTACT@ALIFLAILACAFE.COM</p>
                <p style="margin-top: 15px; text-transform: uppercase;">MON-THU 9AM to 12AM | FRI-SUN 9AM to 1AM</p>
            </div>

            <div class="footer-col reveal delay-2">
                <h4>SITEMAP</h4>
                <ul class="footer-links">
                    <li><a href="{{ url('/') }}">HOME</a></li>
                    <li><a href="{{ url('/menu') }}">MENU</a></li>
                    <li><a href="{{ url('/bookatable') }}">RESERVATIONS</a></li>
                    <li><a href="{{ url('/blog') }}">BLOG</a></li>
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
            &copy; {{ date('Y') }} ALIF LAILA CAFE & RESTAURANT. ALL RIGHTS RESERVED.
        </div>
    </footer>

    <!-- Floating UI Widgets -->
    <div class="whatsapp-widget">
        <a href="https://wa.me/97477723547" target="_blank" rel="noopener noreferrer" style="color: white;">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Linked JavaScript -->
    <script src="{{ asset('frontend/js/thankyou.js') }}"></script>
</body>
</html>