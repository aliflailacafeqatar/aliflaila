document.addEventListener('DOMContentLoaded', () => {
    // Scroll Animation Reveal
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
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

    // Smooth Scroll & Category Highlighting for Sidebar Menu
    const sections = document.querySelectorAll('.menu-category');
    const navLinks = document.querySelectorAll('.category-links a');

    window.addEventListener('scroll', () => {
        let current = '';
        // Add an offset so it highlights before hitting the absolute top
        const scrollY = window.pageYOffset + 150; 

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').includes(current) && current !== '') {
                link.classList.add('active');
                
                // Mobile: auto scroll the active tab into view horizontally
                if (window.innerWidth <= 900) {
                    const linkParent = link.parentElement.parentElement;
                    const scrollLeft = link.offsetLeft - linkParent.offsetWidth / 2 + link.offsetWidth / 2;
                    linkParent.scrollTo({ left: scrollLeft, behavior: 'smooth' });
                }
            }
        });
    });

    // Mobile Menu Logic
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const body = document.body;

    // Toggle menu open/close
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        
        // Prevent background scrolling when menu is open
        if(mobileMenu.classList.contains('active')) {
            body.style.overflow = 'hidden';
        } else {
            body.style.overflow = '';
        }
    });

    // Close mobile menu when a link is clicked
    document.querySelectorAll('.mobile-nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            mobileMenu.classList.remove('active');
            body.style.overflow = '';
        });
    });
});