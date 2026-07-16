<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Book a Table | Alif Laila Cafe</title>
    
    @include('home.css')

    <link rel="stylesheet" href="{{ asset('frontend/css/bookatable.css') }}?v=1.0.1">

</head>
<body>

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
    
    @include('home.header')
    
    <main class="reservation-section">
        <form action="{{ route('bookatable.submit') }}" method="POST" id="reservationForm" class="booking-card reveal active">
            @csrf
            
            <input type="hidden" name="arrival_time" id="hidden-arrival-time" required>
            <input type="hidden" name="food_items" id="hidden-food-items">

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
                        <select id="guest-select" name="guests">
                            <option value="1">1</option>
                            <option value="2" selected>2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6+">6+</option>
                        </select>
                    </div>
                </div>
                
                <div class="input-group">
                    <label>Date</label>
                    <div class="input-wrapper date-wrapper">
                        <input type="date" name="date" id="date-input" min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}" required>
                    </div>
                </div>

                <div class="input-group">
                    <label>Select seating option</label>
                    <div class="input-wrapper">
                        <select name="seating_preference">
                            <option value="No preference" selected>No preference</option>
                            <option value="Indoor">Indoor</option>
                            <option value="Outdoor Terrace">Outdoor Terrace</option>
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
                    <button type="button" class="slider-arrow left-arrow"><i class="fas fa-chevron-left"></i></button>
                    <div class="slider-track">
                        @foreach($foodItems as $item)
                            <button type="button" class="time-btn food-btn" data-id="{{ $item->id }}">{{ $item->name }}</button>
                        @endforeach
                    </div>
                    <button type="button" class="slider-arrow right-arrow"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>

            <div class="accordion-header open" id="timeToggle">
                Select Arrival Time
                <i class="fas fa-chevron-up"></i>
            </div>
            
            <div class="time-selection-content" id="timeContent">
                <div class="section-title-small">Select a time</div>
                
                <div class="slider-wrapper">
                    <button type="button" class="slider-arrow left-arrow"><i class="fas fa-chevron-left"></i></button>
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
                    <button type="button" class="slider-arrow right-arrow"><i class="fas fa-chevron-right"></i></button>
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
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <div style="display: flex; justify-content: space-between;">
                        <label>Email</label>
                        <a href="#" class="form-link">Why do we need this info?</a>
                    </div>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <div class="phone-input-group">
                        <select class="form-control phone-code">
                            <option>QA +974</option>
                        </select>
                        <input type="tel" name="phone" class="form-control phone-number" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Special requests</label>
                    <textarea name="special_requests" class="form-control" rows="4"></textarea>
                </div>

                <h3 class="form-section-title">Restaurant Terms & Conditions</h3>
                <p class="terms-text">We would like to inform you that our online bookings are currently reserved for breakfast, lunch, or dinner service only.</p>
                <p class="terms-text">Please view this link for <a href="#">Terms and Conditions</a></p>
                
                <div class="checkbox-group">
                    <input type="checkbox" id="agree-terms" required>
                    <label for="agree-terms">I agree to the restaurant's Terms & Conditions</label>
                </div>
                
                <p class="terms-subtext">By continuing, you agree to Eat App's <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</p>
            </div>

            <button type="submit" class="btn-continue" id="continueBtn" disabled>Continue</button>

        </form>
    </main>

    @include('home.footer')

    <script src="{{ asset('frontend/js/bookatable.js') }}"></script>
</body>
</html>