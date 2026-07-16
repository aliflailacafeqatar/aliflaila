document.addEventListener('DOMContentLoaded', () => {
    /* --- Mobile Navigation Logic --- */
    const hamburger = document.getElementById('hamburger'); 
    const mobileMenu = document.querySelector('.mobile-menu');
    const body = document.body;

    if (hamburger && mobileMenu) {
        
        // [ THE FIX ]: Dynamically copy the actual URLs from the desktop menu 
        // to the mobile menu, since the mobile HTML has href="#" hardcoded.
        const desktopLinks = document.querySelectorAll('.nav-group .nav-links a');
        const mobileLinksList = mobileMenu.querySelectorAll('.mobile-nav-links a');
        
        if (desktopLinks.length === mobileLinksList.length) {
            mobileLinksList.forEach((link, index) => {
                link.href = desktopLinks[index].href; // Copies the real URL
            });
        }

        // [ THE FIX ]: Copy the onclick event for the Reserve Table button
        const desktopReserveBtn = document.querySelector('.nav-group.right .btn-reserve');
        const mobileReserveBtn = mobileMenu.querySelector('.btn-reserve');
        
        if (desktopReserveBtn && mobileReserveBtn) {
            mobileReserveBtn.onclick = desktopReserveBtn.onclick;
        }

        /* --- Toggle Menu --- */
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            
            // Toggle body scroll to prevent background scrolling when menu is open
            if(mobileMenu.classList.contains('active')) {
                body.classList.add('no-scroll');
            } else {
                body.classList.remove('no-scroll');
            }
        });

        /* --- Close menu when a link is clicked --- */
        const mobileLinks = mobileMenu.querySelectorAll('a, button');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                // The browser will handle the navigation from the updated href
                hamburger.classList.remove('active');
                mobileMenu.classList.remove('active');
                body.classList.remove('no-scroll');
            });
        });
    }

    /* --- Intersection Observer for fade-up animations --- */
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target); 
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal').forEach(el => {
        observer.observe(el);
    });

    /* --- Blog Post Filtering Logic --- */
    const filterBtns = document.querySelectorAll('.filter-btn');
    const blogCards = document.querySelectorAll('.blog-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to the clicked button
            btn.classList.add('active');

            const filterValue = btn.getAttribute('data-filter');

            blogCards.forEach(card => {
                card.style.transition = "all 0.4s ease";
                if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                    card.style.display = 'flex';
                    setTimeout(() => { 
                        card.style.opacity = '1'; 
                        card.style.transform = 'scale(1)'; 
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.9)';
                    setTimeout(() => { 
                        card.style.display = 'none'; 
                    }, 400);
                }
            });
        });
    });
});