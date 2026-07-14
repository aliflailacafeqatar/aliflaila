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
                <a href="{{ url('/') }}">
                    <img src="{{ asset('frontend/img/logo.png') }}" alt="Alif Laila Cafe & Restaurant Logo">
                </a>
            </div>

            <div class="nav-group right">
                <ul class="nav-links">
                    <li><a href="{{ url('/aboutus') }}" class="{{ Request::is('aboutus') ? 'active' : '' }}">ABOUT US</a></li>
                    <li><a href="{{ url('/gallery') }}" class="{{ Request::is('gallery') ? 'active' : '' }}">GALLERY</a></li>
                    <li><a href="{{ url('/contactus') }}" class="{{ Request::is('contactus') ? 'active' : '' }}">CONTACT US</a></li>
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