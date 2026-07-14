<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Book a Table | Alif Laila Cafe</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Link to your separate CSS file -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bookatable.css') }}">
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
                        <li><a href="{{ url('/') }}">HOME</a></li>
                        <li><a href="{{ url('/menu') }}">MENU</a></li>
                        <li><a href="{{ url('/bookatable') }}" class="active">RESERVATIONS</a></li>
                        <li><a href="{{ url('/blog') }}">BLOG</a></li>
                    </ul>
                </div>

                <div class="brand-logo">
                    <h1>Alif Laila Cafe & <br>Restaurant</h1>
                    <span>QATAR</span>
                </div>

                <div class="nav-group right">
                    <ul class="nav-links">
                        <li><a href="{{ url('/aboutus') }}">ABOUT US</a></li>
                        <li><a href="{{ url('/gallery') }}">GALLERY</a></li>
                        <li><a href="{{ url('/contactus') }}">CONTACT US</a></li>
                    </ul>
                    <button class="btn-reserve" onclick="window.location.href='{{ url('/bookatable') }}'">RESERVE A TABLE</button>
                </div>
                
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>

    <div class="mobile-menu" id="mobile-menu">
        <ul class="mobile-nav-links">
            <li><a href="{{ url('/') }}">HOME</a></li>
            <li><a href="{{ url('/menu') }}">MENU</a></li>
            <li><a href="{{ url('/bookatable') }}" class="active">RESERVATIONS</a></li>
            <li><a href="{{ url('/blog') }}">BLOG</a></li>
            <li><a href="{{ url('/aboutus') }}">ABOUT US</a></li>
            <li><a href="{{ url('/gallery') }}">GALLERY</a></li>
            <li><a href="{{ url('/contactus') }}">CONTACT US</a></li>
        </ul>
        <button class="btn-reserve" onclick="window.location.href='{{ url('/bookatable') }}'">RESERVE A TABLE</button>
    </div>

    <main class="reservation-section">
        <div class="booking-card reveal active">
            
            <div class="card-header">
                <div class="card-brand">
                    <h2>ALIF LAILA CAFÉ</h2>
                </div>
            </div>

            <div class="location-info">
                <h3>Alif Laila Cafe Qatar</h3>
                <p>luxury avenue first floor, qatar mall star atrium - gate 6 - downtown doha, qatar</p>
            </div>

            <div class="filters-row">
                <div class="input-group">
                    <label>Guests</label>
                    <div class="input-wrapper">
                        <select id="guest-select">
                            <option>1</option>
                            <option selected>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6+</option>
                        </select>
                    </div>
                </div>
                
                <div class="input-group">
                    <label>Date</label>
                    <div class="input-wrapper date-wrapper">
                        <!-- Dynamically sets today as the minimum date and default value -->
                        <input type="date" id="date-input" min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}">
                    </div>
                </div>

                <div class="input-group">
                    <label>Select seating option</label>
                    <div class="input-wrapper">
                        <select>
                            <option selected>No preference</option>
                            <option>Indoor</option>
                            <option>Outdoor Terrace</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="accordion-header" id="foodToggle">
                Pre-order Food Items (Optional)
                <i class="fas fa-chevron-down"></i>
            </div>
            
            <div class="time-selection-content" id="foodContent" style="max-height: 0px;">
                <div class="section-title-small">Select multiple items</div>
                
                <div class="slider-wrapper">
                    <button class="slider-arrow left-arrow"><i class="fas fa-chevron-left"></i></button>
                    <div class="slider-track">
                        <!-- Dynamic Food Items Loop -->
                        @foreach($foodItems as $item)
                            <button type="button" class="time-btn food-btn" data-id="{{ $item->id }}">{{ $item->name }}</button>
                        @endforeach
                    </div>
                    <button class="slider-arrow right-arrow"><i class="fas fa-chevron-right"></i></button>
                </div>

            </div>

            <div class="accordion-header open" id="timeToggle">
                Select Arrival Time
                <i class="fas fa-chevron-up"></i>
            </div>
            
            <div class="time-selection-content" id="timeContent">
                <div class="section-title-small">Select a time</div>
                
                <div class="slider-wrapper">
                    <button class="slider-arrow left-arrow"><i class="fas fa-chevron-left"></i></button>
                    <div class="slider-track">
                        <button type="button" class="time-btn time-slot-btn">9:00 AM</button>
                        <button type="button" class="time-btn time-slot-btn">9:30 AM</button>
                        <button type="button" class="time-btn time-slot-btn">10:00 AM</button>
                        <button type="button" class="time-btn time-slot-btn">10:30 AM</button>
                        <button type="button" class="time-btn time-slot-btn">11:00 AM</button>
                        <button type="button" class="time-btn time-slot-btn">11:30 AM</button>
                        <button type="button" class="time-btn time-slot-btn">12:00 PM</button>
                        <button type="button" class="time-btn time-slot-btn">12:30 PM</button>
                        <button type="button" class="time-btn time-slot-btn">1:00 PM</button>
                        <button type="button" class="time-btn time-slot-btn">1:30 PM</button>
                        <button type="button" class="time-btn time-slot-btn">2:00 PM</button>
                        <button type="button" class="time-btn time-slot-btn">2:30 PM</button>
                        <button type="button" class="time-btn time-slot-btn">3:00 PM</button>
                        <button type="button" class="time-btn time-slot-btn">3:30 PM</button>
                        <button type="button" class="time-btn time-slot-btn">4:00 PM</button>
                        <button type="button" class="time-btn time-slot-btn">4:30 PM</button>
                        <button type="button" class="time-btn time-slot-btn">5:00 PM</button>
                        <button type="button" class="time-btn time-slot-btn">5:30 PM</button>
                        <button type="button" class="time-btn time-slot-btn">6:00 PM</button>
                        <button type="button" class="time-btn time-slot-btn">6:30 PM</button>
                        <button type="button" class="time-btn time-slot-btn">7:00 PM</button>
                        <button type="button" class="time-btn time-slot-btn">7:30 PM</button>
                        <button type="button" class="time-btn time-slot-btn">8:00 PM</button>
                        <button type="button" class="time-btn time-slot-btn">8:30 PM</button>
                        <button type="button" class="time-btn time-slot-btn">9:00 PM</button>
                        <button type="button" class="time-btn time-slot-btn">9:30 PM</button>
                        <button type="button" class="time-btn time-slot-btn">10:00 PM</button>
                        <button type="button" class="time-btn time-slot-btn">10:30 PM</button>
                        <button type="button" class="time-btn time-slot-btn">11:00 PM</button>
                    </div>
                    <button class="slider-arrow right-arrow"><i class="fas fa-chevron-right"></i></button>
                </div>
                
            </div>

            <div class="personal-details-form">
                <h3 class="form-section-title">Reservation details</h3>
                <div class="res-summary">
                    <p id="summary-datetime">{{ date('l, F j') }}</p>
                    <p id="summary-guests">2 people</p>
                </div>

                <h3 class="form-section-title">Personal details</h3>
                <div class="form-grid">
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div style="display: flex; justify-content: space-between;">
                        <label>Email</label>
                        <a href="#" class="form-link">Why do we need this info?</a>
                    </div>
                    <input type="email" class="form-control">
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <div class="phone-input-group">
                        <select class="form-control phone-code">
                            <option>QA +974</option>
                        </select>
                        <input type="tel" class="form-control phone-number">
                    </div>
                </div>

                <div class="form-group">
                    <label>Special requests</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>

                <h3 class="form-section-title">Restaurant Terms & Conditions</h3>
                <p class="terms-text">We would like to inform you that our online bookings are currently reserved for breakfast, lunch, or dinner service only.</p>
                <p class="terms-text">Please view this link for <a href="#">Terms and Conditions</a></p>
                
                <div class="checkbox-group">
                    <input type="checkbox" id="agree-terms">
                    <label for="agree-terms">I agree to the restaurant's Terms & Conditions</label>
                </div>
                
                <p class="terms-subtext">By continuing, you agree to Eat App's <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</p>
            </div>

            <button class="btn-continue" id="continueBtn" disabled onclick="window.location.href='{{ url('/thankyou') }}';">Continue</button>

        </div>
    </main>

    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-col brand">
                <a href="{{ url('/') }}" class="footer-logo">
                    Alif Laila Cafe
                    <span>QATAR</span>
                </a>
                <p>Offering a vibrant mix of authentic Arabic, Indian, Filipino, and Continental dishes, ALIF LAILA CAFE is the perfect destination for food lovers. A seamless blend of global flavors and warm Middle Eastern hospitality.</p>
            </div>

            <div class="footer-col">
                <h4>CONTACT US</h4>
                <p>LUXURY AVENUE, DOHA</p>
                <p>WHATSAPP: +971 777723547</p>
                <p>EMAIL: CONTACT@ALIFLAILACAFE.COM</p>
                <p style="margin-top: 15px; text-transform: uppercase;">MON-THU 9AM to 12AM | FRI-SUN 9AM to 1AM</p>
            </div>

            <div class="footer-col">
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

            <div class="footer-col">
                <h4>FOLLOW US</h4>
                <div class="footer-socials">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            &copy; 2024 ALIF LAILA CAFE & RESTAURANT. ALL RIGHTS RESERVED.
        </div>
    </footer>

    <!-- Link to your separate JS file -->
    <script src="{{ asset('frontend/js/bookatable.js') }}"></script>
</body>
</html>