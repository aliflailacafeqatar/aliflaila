document.addEventListener('DOMContentLoaded', () => {
    
    /* --- Mobile Navigation Logic --- */
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const body = document.body;

    // Toggle menu open/close
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        
        // Prevent background scrolling when menu is open
        if(mobileMenu.classList.contains('active')) {
            body.classList.add('no-scroll');
        } else {
            body.classList.remove('no-scroll');
        }
    });

    // Close mobile menu when a link is clicked
    document.querySelectorAll('.mobile-nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            mobileMenu.classList.remove('active');
            body.classList.remove('no-scroll');
        });
    });

    /* --- Scroll Reveal Logic --- */
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

    // Observe standard reveals and scaling reveals
    document.querySelectorAll('.reveal, .reveal-scale').forEach(el => {
        observer.observe(el);
    });
});