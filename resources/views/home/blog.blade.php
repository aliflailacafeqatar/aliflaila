<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Our Journal - Alif Laila Cafe & Restaurant | Qatar</title>
    
    <!-- External Fonts and Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Great+Vibes&display=swap" rel="stylesheet">

    @include('home.css')

    <!-- Link to your separate CSS file -->
    <link rel="stylesheet" href="{{ asset('frontend/css/blog.css') }}?v=1.0.1">
</head>
<body>

    @include('home.header')

    <!-- Missing Mobile Menu Overlay Added Here -->
    <div class="mobile-menu">
        <ul class="mobile-nav-links">
            <li><a href="#">HOME</a></li>
            <li><a href="#">MENU</a></li>
            <li><a href="#">RESERVATIONS</a></li>
            <li><a href="#" class="active">BLOG</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#">GALLERY</a></li>
            <li><a href="#">CONTACT US</a></li>
        </ul>
        <button class="btn-reserve">RESERVE A TABLE</button>
    </div>

    <main>
        <!-- Blog Hero Section -->
        <section class="blog-hero">
            <div class="blog-hero-content">
                <div class="blog-hero-subtitle">Our Culinary Journal</div>
                <h1 class="blog-hero-title">Stories & Flavors</h1>
            </div>
        </section>

        <!-- Blog Filters -->
        <section class="blog-filters-section reveal">
            <button class="filter-btn active" data-filter="all">ALL STORIES</button>
            <button class="filter-btn" data-filter="recipes">RECIPES & CHEFS</button>
            <button class="filter-btn" data-filter="events">EVENTS</button>
            <button class="filter-btn" data-filter="culture">CULTURE</button>
        </section>

        <!-- Blog Grid Layout -->
        <section class="blog-container">
            <!-- Article 1 -->
            <article class="blog-card reveal" data-category="recipes">
                <div class="blog-img-wrapper">
                    <span class="blog-category-badge">Recipes & Chefs</span>
                    <img src="https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Biryani Preparation">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span><i class="far fa-calendar"></i> OCT 12, 2024</span>
                        <span><i class="far fa-clock"></i> 4 MIN READ</span>
                    </div>
                    <h2 class="blog-title">The Secret Behind Our Signature Dum Biryani</h2>
                    <p class="blog-excerpt">Discover the slow-cooking techniques and the perfect blend of exotic spices that make our traditional Dum Biryani a culinary masterpiece cherished by our diners.</p>
                    <a href="#" class="btn-read-more">READ ARTICLE <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="blog-card reveal delay-1" data-category="culture">
                <div class="blog-img-wrapper">
                    <span class="blog-category-badge">Culture</span>
                    <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Arabic Coffee">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span><i class="far fa-calendar"></i> OCT 05, 2024</span>
                        <span><i class="far fa-clock"></i> 3 MIN READ</span>
                    </div>
                    <h2 class="blog-title">The Art of Pouring: Traditional Arabic Coffee</h2>
                    <p class="blog-excerpt">More than just a beverage, Arabic coffee represents warmth and hospitality. Dive into the history and ritual behind every cup we serve at Alif Laila.</p>
                    <a href="#" class="btn-read-more">READ ARTICLE <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="blog-card reveal delay-2" data-category="events">
                <div class="blog-img-wrapper">
                    <span class="blog-category-badge">Events</span>
                    <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Grill Night">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span><i class="far fa-calendar"></i> SEP 28, 2024</span>
                        <span><i class="far fa-clock"></i> 2 MIN READ</span>
                    </div>
                    <h2 class="blog-title">Upcoming Weekend Sizzling BBQ Nights</h2>
                    <p class="blog-excerpt">Join us this weekend for an unforgettable evening under the stars featuring live grill stations, premium cuts, and an atmosphere perfectly crafted for making memories.</p>
                    <a href="#" class="btn-read-more">READ ARTICLE <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Article 4 -->
            <article class="blog-card reveal" data-category="recipes">
                <div class="blog-img-wrapper">
                    <span class="blog-category-badge">Recipes & Chefs</span>
                    <img src="https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Wood fired pizza">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span><i class="far fa-calendar"></i> SEP 15, 2024</span>
                        <span><i class="far fa-clock"></i> 5 MIN READ</span>
                    </div>
                    <h2 class="blog-title">From Naples to Doha: The Perfect Pizza Crust</h2>
                    <p class="blog-excerpt">Our head chef breaks down the science of hydration, the importance of resting the dough, and why our wood-fired oven creates the ultimate Neapolitan slice.</p>
                    <a href="#" class="btn-read-more">READ ARTICLE <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Article 5 -->
            <article class="blog-card reveal delay-1" data-category="culture">
                <div class="blog-img-wrapper">
                    <span class="blog-category-badge">Culture</span>
                    <img src="https://images.unsplash.com/photo-1536939459926-301728717817?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Mojito Drink">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span><i class="far fa-calendar"></i> SEP 02, 2024</span>
                        <span><i class="far fa-clock"></i> 3 MIN READ</span>
                    </div>
                    <h2 class="blog-title">Mixology 101: Creating the Ultimate Mocktails</h2>
                    <p class="blog-excerpt">Fresh herbs, vibrant citrus, and the perfect muddle. Learn how our mixologists balance flavors to create refreshing beverages for the Qatari heat.</p>
                    <a href="#" class="btn-read-more">READ ARTICLE <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Article 6 -->
            <article class="blog-card reveal delay-2" data-category="recipes">
                <div class="blog-img-wrapper">
                    <span class="blog-category-badge">Recipes & Chefs</span>
                    <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Filipino Cuisine">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span><i class="far fa-calendar"></i> AUG 20, 2024</span>
                        <span><i class="far fa-clock"></i> 4 MIN READ</span>
                    </div>
                    <h2 class="blog-title">Embracing the Flavors of Manila: Pancit & Sisig</h2>
                    <p class="blog-excerpt">A deep dive into our authentic Filipino menu. We explore the vibrant balance of sour, salty, and savory that makes dishes like Sisig universally loved.</p>
                    <a href="#" class="btn-read-more">READ ARTICLE <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

        </section>

        <!-- Load More Section -->
        <div class="load-more-wrapper reveal">
            <button class="btn-load">LOAD MORE STORIES</button>
        </div>

    </main>

    <!-- Modern Dark Footer -->
    @include('home.footer')

    <!-- Floating UI Widgets -->
    <div class="whatsapp-widget">
        <a href="https://wa.me/97477723547" target="_blank" rel="noopener noreferrer" style="color: white;">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Link to your separate JS file -->
    <script src="{{ asset('frontend/js/blog.js') }}"></script>
</body>
</html>