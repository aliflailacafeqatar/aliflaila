<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Menu | Alif Laila Cafe & Restaurant</title>
    
    @include('home.css')

    <!-- Link to your separate CSS file -->
    <link rel="stylesheet" href="{{ asset('frontend/css/menu.css') }}">
</head>
<body>

    @include('home.header')

    <!-- Mobile Full-Screen Slide-in Menu -->
    <div class="mobile-menu" id="mobile-menu">
        <ul class="mobile-nav-links">
            <li><a href="{{ url('/') }}">HOME</a></li>
            <li><a href="{{ url('/menu') }}" class="active">MENU</a></li>
            <li><a href="{{ url('/bookatable') }}">RESERVATIONS</a></li>
            <li><a href="{{ url('/blog') }}">BLOG</a></li>
            <li><a href="{{ url('/aboutus') }}">ABOUT US</a></li>
            <li><a href="{{ url('/gallery') }}">GALLERY</a></li>
            <li><a href="{{ url('/contactus') }}">CONTACT US</a></li>
        </ul>
        <button class="btn-reserve" onclick="window.location.href='{{ url('/reserve') }}'">RESERVE A TABLE</button>
    </div>

    <main>
        <section class="page-header">
            <video class="page-header-video" autoplay loop muted playsinline>
                <!-- Updated video path based on your folder structure -->
                <source src="{{ asset('frontend/vid/video1.mp4') }}" type="video/mp4">
            </video>
            <div class="page-header-overlay"></div>
            <div class="page-header-content">
                <h2>Our Menu</h2>
                <p>Culinary Masterpieces</p>
            </div>
        </section>

        <div class="menu-wrapper">
            
            <aside class="menu-sidebar">
                <h3>Categories</h3>
                <ul class="category-links">
                    <!-- Dynamic Sidebar Links -->
                    @foreach($categories as $category)
                        <li><a href="#{{ $category->slug }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </aside>

            <div class="menu-content">

                <!-- Dynamic Menu Categories -->
                @foreach($categories as $category)
                    <div id="{{ $category->slug }}" class="menu-category reveal">
                        <div class="menu-category-header">
                            <h2>{{ $category->name }}</h2>
                            <!-- Using the description field for the subtitle, fallback to 'Discover' if empty -->
                            <span>{{ $category->description ?? 'Discover' }}</span>
                        </div>
                        
                        <div class="menu-grid">
                            <!-- Dynamic Food Items for this Category -->
                            @foreach($category->foodItems as $item)
                                <div class="menu-item">
                                    <div class="menu-item-header">
                                        <span class="menu-item-name">{{ $item->name }}</span>
                                        <div class="menu-item-dots"></div>
                                        <span class="menu-item-price">{{ $item->price }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </main>

    @include('home.footer')

    <div class="whatsapp-widget">
        <a href="https://wa.me/97477723547" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Link to your separate JS file -->
    <script src="{{ asset('frontend/js/menu.js') }}"></script>
</body>
</html>