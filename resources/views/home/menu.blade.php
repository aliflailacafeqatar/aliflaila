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
            <li><a href="{{ url('/reserve') }}">RESERVATIONS</a></li>
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
                    <li><a href="#appetizer">Appetizer</a></li>
                    <li><a href="#soups-salads">Soups & Salads</a></li>
                    <li><a href="#pizza-pasta">Pizza & Pasta</a></li>
                    <li><a href="#grill-bbq">Grill & Barbecue</a></li>
                    <li><a href="#burgers-wraps">Burgers & Wraps</a></li>
                    <li><a href="#arabic-fatayer">Arabic & Fatayer</a></li>
                    <li><a href="#biryani-rice">Biryani & Rice Platters</a></li>
                    <li><a href="#fresh-juices">Fresh Juices & Mojitos</a></li>
                    <li><a href="#hot-drinks">Hot Drinks & Desserts</a></li>
                </ul>
            </aside>

            <div class="menu-content">

                <div id="appetizer" class="menu-category reveal">
                    <div class="menu-category-header">
                        <h2>Appetizer</h2>
                        <span>Starters</span>
                    </div>
                    <div class="menu-grid">
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Buffalo Chicken Wings</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Crispy Corn</span><div class="menu-item-dots"></div><span class="menu-item-price">18 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">BBQ Wings</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Crispy Fried Calamari</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Stuffed BBQ Wings</span><div class="menu-item-dots"></div><span class="menu-item-price">30 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Dynamite Shrimp</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken 65</span><div class="menu-item-dots"></div><span class="menu-item-price">30 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Jalapeno Cheese Balls</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Lollipop</span><div class="menu-item-dots"></div><span class="menu-item-price">28 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Loaded Cheese Fries</span><div class="menu-item-dots"></div><span class="menu-item-price">22 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Manchurian</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Nachos</span><div class="menu-item-dots"></div><span class="menu-item-price">22 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Nuggets</span><div class="menu-item-dots"></div><span class="menu-item-price">16 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Plain French Fries</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Sizzling</span><div class="menu-item-dots"></div><span class="menu-item-price">30 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Veg. Manchurian</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Sizzler</span><div class="menu-item-dots"></div><span class="menu-item-price">35 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Tacos</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chilli Chicken</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                    </div>
                </div>

                <div id="soups-salads" class="menu-category reveal">
                    <div class="menu-category-header">
                        <h2>Soups & Salads</h2>
                        <span>Fresh & Light</span>
                    </div>
                    <div class="menu-grid">
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Lentil Soup</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Caesar Salad</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Seafood Soup</span><div class="menu-item-dots"></div><span class="menu-item-price">22 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Fruit Platter</span><div class="menu-item-dots"></div><span class="menu-item-price">25 / 40 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Hot & Sour Soup</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Green Salad</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Vegetable Soup</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Oliv Salad</span><div class="menu-item-dots"></div><span class="menu-item-price">18 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Thukpa Soup</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Mutabbal</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Mushroom Soup</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Quinoa Salad</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Clear Soup</span><div class="menu-item-dots"></div><span class="menu-item-price">22 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Greek Salad</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Manchow Soup</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Fattoush Salad</span><div class="menu-item-dots"></div><span class="menu-item-price">18 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Sweet Corn Soup</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Alif Laila Special Salad</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Cream of Mushroom Soup</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                    </div>
                </div>

                <div id="pizza-pasta" class="menu-category reveal">
                    <div class="menu-category-header">
                        <h2>Pizza & Pasta</h2>
                        <span>Italian Classics</span>
                    </div>
                    <div class="menu-grid">
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Margarita Pizza</span><div class="menu-item-dots"></div><span class="menu-item-price">30 / 40 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Alfredo Creamy Pasta</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Tikka Pizza</span><div class="menu-item-dots"></div><span class="menu-item-price">35 / 50 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Penny Pasta</span><div class="menu-item-dots"></div><span class="menu-item-price">35 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Barbeque Pizza</span><div class="menu-item-dots"></div><span class="menu-item-price">35 / 50 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Fettuccine Pasta</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Fajita Chicken Pizza</span><div class="menu-item-dots"></div><span class="menu-item-price">35 / 50 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Spaghetti Pasta</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Four Cheese Pizza</span><div class="menu-item-dots"></div><span class="menu-item-price">35 / 50 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pancit Bihon</span><div class="menu-item-dots"></div><span class="menu-item-price">30 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Vegetables Pizza</span><div class="menu-item-dots"></div><span class="menu-item-price">35 / 50 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Mac and Cheese Pasta</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pepperoni Pizza</span><div class="menu-item-dots"></div><span class="menu-item-price">35 / 50 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pancit Canton</span><div class="menu-item-dots"></div><span class="menu-item-price">30 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Assorted Chicken Pizza</span><div class="menu-item-dots"></div><span class="menu-item-price">35 / 50 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pancit Canton Bihon Mix</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Oven Baked Pasta</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Special Chicken Pasta</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Seafood Pasta</span><div class="menu-item-dots"></div><span class="menu-item-price">30 QR</span></div></div>
                    </div>
                </div>

                <div id="grill-bbq" class="menu-category reveal">
                    <div class="menu-category-header">
                        <h2>Grill & Barbecue</h2>
                        <span>Smoked Perfection</span>
                    </div>
                    <div class="menu-grid">
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Barbeque Chicken</span><div class="menu-item-dots"></div><span class="menu-item-price">20 / 35 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Tikka Kebab</span><div class="menu-item-dots"></div><span class="menu-item-price">35 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Hariyali Tikka</span><div class="menu-item-dots"></div><span class="menu-item-price">30 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Barbeque Fish</span><div class="menu-item-dots"></div><span class="menu-item-price">35 / 50 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Butter Naan</span><div class="menu-item-dots"></div><span class="menu-item-price">5 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Malai Chicken Tikka</span><div class="menu-item-dots"></div><span class="menu-item-price">35 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Naan</span><div class="menu-item-dots"></div><span class="menu-item-price">3 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Mix Kebab Platter</span><div class="menu-item-dots"></div><span class="menu-item-price">50 QR</span></div></div>
                    </div>
                </div>

                <div id="burgers-wraps" class="menu-category reveal">
                    <div class="menu-category-header">
                        <h2>Burgers & Wraps</h2>
                        <span>Handheld Favorites</span>
                    </div>
                    <div class="menu-grid">
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Ranch Burger</span><div class="menu-item-dots"></div><span class="menu-item-price">22 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Tikka Wrap</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Alif Laila Special Burger</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Crispy Chicken Wrap</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Toasted Chicken Burger</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Egg Club Sandwich</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Crispy Chicken Burger</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Butter Chicken Sandwich</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Cheese Burger</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Club Sandwich</span><div class="menu-item-dots"></div><span class="menu-item-price">18 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Sizzling Cheese Burger</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Arabic Shawarma</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Beef Classic Burger</span><div class="menu-item-dots"></div><span class="menu-item-price">22 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Normal Shawarma</span><div class="menu-item-dots"></div><span class="menu-item-price">10 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Coleslaw Burger</span><div class="menu-item-dots"></div><span class="menu-item-price">18 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Classic Hot Dog</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Crispy Veg Burger</span><div class="menu-item-dots"></div><span class="menu-item-price">16 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chef Special Hot Dog</span><div class="menu-item-dots"></div><span class="menu-item-price">18 QR</span></div></div>
                    </div>
                </div>

                <div id="arabic-fatayer" class="menu-category reveal">
                    <div class="menu-category-header">
                        <h2>Arabic & Fatayer</h2>
                        <span>Authentic Middle Eastern</span>
                    </div>
                    <div class="menu-grid">
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Cheese Fatayer</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Fatayer</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Zaatar Fatayer</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Meat Fatayer</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Olive Fatayer</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Mix Fatayer</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                    </div>
                </div>

                <div id="biryani-rice" class="menu-category reveal">
                    <div class="menu-category-header">
                        <h2>Biryani & Rice Platters</h2>
                        <span>Hearty & Spiced</span>
                    </div>
                    <div class="menu-grid">
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Dum Biryani</span><div class="menu-item-dots"></div><span class="menu-item-price">40 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Sisig Rice</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Mutton Dum Biryani</span><div class="menu-item-dots"></div><span class="menu-item-price">45 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Katsu Chicken Rice</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Beef Dum Biryani</span><div class="menu-item-dots"></div><span class="menu-item-price">45 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Steak Platter</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chicken Tikka Masala</span><div class="menu-item-dots"></div><span class="menu-item-price">30 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chili Chicken Rice</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Butter Chicken</span><div class="menu-item-dots"></div><span class="menu-item-price">30 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Spicy Cheese Chicken Rice</span><div class="menu-item-dots"></div><span class="menu-item-price">25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Fried Rice (Veg/Chik/Prawn)</span><div class="menu-item-dots"></div><span class="menu-item-price">20 / 25 / 30 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Noodles (Veg/Chik/Prawn)</span><div class="menu-item-dots"></div><span class="menu-item-price">20 / 25 / 30 QR</span></div></div>
                    </div>
                </div>

                <div id="fresh-juices" class="menu-category reveal">
                    <div class="menu-category-header">
                        <h2>Fresh Juices & Mojitos</h2>
                        <span>Refreshing Blends</span>
                    </div>
                    <div class="menu-grid">
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Strawberry Mojito</span><div class="menu-item-dots"></div><span class="menu-item-price">18 / 25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Kiwi Juice</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Passion Fruit Mojito</span><div class="menu-item-dots"></div><span class="menu-item-price">18 / 25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Avocado Juice</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Blue Lagoon Mojito</span><div class="menu-item-dots"></div><span class="menu-item-price">18 / 25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pineapple Juice</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Kiwi Blast Mojito</span><div class="menu-item-dots"></div><span class="menu-item-price">18 / 25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Orange Juice</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Peach Mojito</span><div class="menu-item-dots"></div><span class="menu-item-price">18 / 25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Watermelon Juice</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Blueberry Mojito</span><div class="menu-item-dots"></div><span class="menu-item-price">18 / 25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Mango Juice</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Mint Lemonade Mojito</span><div class="menu-item-dots"></div><span class="menu-item-price">18 / 25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Grape Juice</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Watermelon Mojito</span><div class="menu-item-dots"></div><span class="menu-item-price">18 / 25 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Sweet Melon Juice</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Lemon Mint Juice</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Papaya Juice</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Cocktail Juice</span><div class="menu-item-dots"></div><span class="menu-item-price">18 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Apple Juice</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Lemon Juice</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Banana Juice</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Strawberry Juice</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pomegranate Juice</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                    </div>
                </div>

                <div id="hot-drinks" class="menu-category reveal">
                    <div class="menu-category-header">
                        <h2>Hot Drinks & Desserts</h2>
                        <span>Sweet Endings</span>
                    </div>
                    <div class="menu-grid">
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Turkish Coffee</span><div class="menu-item-dots"></div><span class="menu-item-price">10 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Mango Milkshake</span><div class="menu-item-dots"></div><span class="menu-item-price">18 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Double Turkish Coffee</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Thabakath Dessert</span><div class="menu-item-dots"></div><span class="menu-item-price">18 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Cappuccino</span><div class="menu-item-dots"></div><span class="menu-item-price">12 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Strawberry Milkshake</span><div class="menu-item-dots"></div><span class="menu-item-price">18 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Espresso</span><div class="menu-item-dots"></div><span class="menu-item-price">10 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">50x50 Dessert</span><div class="menu-item-dots"></div><span class="menu-item-price">18 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Double Espresso</span><div class="menu-item-dots"></div><span class="menu-item-price">15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Falooda</span><div class="menu-item-dots"></div><span class="menu-item-price">18 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Nescafe / Black Coffee</span><div class="menu-item-dots"></div><span class="menu-item-price">5 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Fruit Salad</span><div class="menu-item-dots"></div><span class="menu-item-price">18 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Hot Choco / Sahlab</span><div class="menu-item-dots"></div><span class="menu-item-price">10 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Umm Ali</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Red / Green Tea</span><div class="menu-item-dots"></div><span class="menu-item-price">4 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Vimto / Karkadi</span><div class="menu-item-dots"></div><span class="menu-item-price">12 / 15 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Lemon / Zaatar / Hibiscus Tea</span><div class="menu-item-dots"></div><span class="menu-item-price">5 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Fruit Punch</span><div class="menu-item-dots"></div><span class="menu-item-price">20 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Ginger / Cinnamon Tea</span><div class="menu-item-dots"></div><span class="menu-item-price">5 QR</span></div></div>
                        <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Soft Drinks / Red Bull</span><div class="menu-item-dots"></div><span class="menu-item-price">5 / 15 QR</span></div></div>
                    </div>
                </div>

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