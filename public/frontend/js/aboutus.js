document.addEventListener('DOMContentLoaded', () => {
    /* --- Mobile Navigation Logic --- */
    const hamburger = document.getElementById('hamburger') || document.querySelector('.hamburger');
    const mobileMenu = document.getElementById('mobile-menu') || document.querySelector('.mobile-menu');
    const body = document.body;

    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            
            // Toggle body scroll
            if(mobileMenu.classList.contains('active')) {
                body.classList.add('no-scroll');
            } else {
                body.classList.remove('no-scroll');
            }
        });

        // FIX: Ensure menu closes and body scroll is restored when any link is clicked
        const mobileLinks = mobileMenu.querySelectorAll('a, button');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                mobileMenu.classList.remove('active');
                body.classList.remove('no-scroll');
            });
        });
    }

    /* --- Intersection Observer for scroll animations --- */
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

    document.querySelectorAll('.reveal, .reveal-scale').forEach(el => {
        observer.observe(el);
    });
});