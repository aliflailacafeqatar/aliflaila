<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Thank You | Alif Laila Cafe & Restaurant</title>
    
    @include
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Linked CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/thankyou.css') }}">
</head>
<body>

    @include('home.header')

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
    @include('home.footer')

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