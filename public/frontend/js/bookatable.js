document.addEventListener('DOMContentLoaded', () => {

    /* --- Scroll Reveal Logic (FIXES THE BLANK FOOTER) --- */
    const revealElements = document.querySelectorAll('.reveal');
    
    // Check if browser supports IntersectionObserver
    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target); // stop observing once revealed
                }
            });
        }, { threshold: 0.1, rootMargin: "0px 0px -50px 0px" });

        revealElements.forEach(el => {
            revealObserver.observe(el);
        });
    } else {
        // Fallback for older browsers
        revealElements.forEach(el => el.classList.add('active'));
    }
            
    /* --- Mobile Navigation Logic --- */
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const body = document.body;

    // Toggle menu open/close
    if(hamburger) {
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
    }

    // Close mobile menu when a link is clicked
    document.querySelectorAll('.mobile-nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            if(hamburger) hamburger.classList.remove('active');
            mobileMenu.classList.remove('active');
            body.classList.remove('no-scroll');
        });
    });

    /* --- Handle Dynamic Form Validation & Submission --- */
    const timeButtons = document.querySelectorAll('.time-slot-btn');
    const continueBtn = document.getElementById('continueBtn');
    const hiddenTimeInput = document.getElementById('hidden-arrival-time');
    const hiddenFoodInput = document.getElementById('hidden-food-items');
    const form = document.getElementById('reservationForm');
    const agreeTerms = document.getElementById('agree-terms');

    // Function to check if the button can be enabled
    function validateFormReadiness() {
        if (!continueBtn) return;
        
        if (hiddenTimeInput && hiddenTimeInput.value !== '' && agreeTerms && agreeTerms.checked) {
            continueBtn.disabled = false;
            continueBtn.classList.add('ready');
        } else {
            continueBtn.disabled = true;
            continueBtn.classList.remove('ready');
        }
    }

    // Terms checkbox listener
    if(agreeTerms) {
        agreeTerms.addEventListener('change', validateFormReadiness);
    }

    // Time Slot Selection
    timeButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all
            timeButtons.forEach(b => b.classList.remove('active'));
            // Add to clicked
            this.classList.add('active');
            
            // Set the value of the hidden input for the backend
            if (hiddenTimeInput) hiddenTimeInput.value = this.innerText;
            
            // Update button UI
            if (continueBtn) {
                continueBtn.innerHTML = `Continue with ${this.innerText} <i class="fas fa-arrow-right" style="margin-left:8px;"></i>`;
            }
            
            // Check if form is ready to be submitted
            validateFormReadiness();
            
            // Update reservation details dynamically
            updateSummary();
        });
    });

    /* --- Handle Food Item Multiple Selection --- */
    const foodButtons = document.querySelectorAll('.food-btn');
    foodButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            // Toggle active class to allow multiple selections
            this.classList.toggle('active');
        });
    });

    // Capture the selected food items right before the form submits
    if (form) {
        form.addEventListener('submit', function(e) {
            const activeFood = [];
            document.querySelectorAll('.food-btn.active').forEach(btn => {
                // Grab the ID from the data-id attribute we added in Blade
                activeFood.push(btn.getAttribute('data-id')); 
            });
            // Combine array into a string (e.g., "1,4,7")
            if(hiddenFoodInput) hiddenFoodInput.value = activeFood.join(',');
        });
    }

    /* --- Accordion Toggle Reusable Function --- */
    function setupAccordion(headerId, contentId) {
        const header = document.getElementById(headerId);
        const content = document.getElementById(contentId);
        
        if(!header || !content) return;
        
        const icon = header.querySelector('i');

        header.addEventListener('click', () => {
            header.classList.toggle('open');
            if (header.classList.contains('open')) {
                content.style.maxHeight = '1000px';
                if(icon) {
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                }
            } else {
                content.style.maxHeight = '0px';
                if(icon) {
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                }
            }
        });
    }

    // Initialize both accordions
    setupAccordion('timeToggle', 'timeContent');
    setupAccordion('foodToggle', 'foodContent');

    /* --- Slider Navigation Logic --- */
    document.querySelectorAll('.slider-wrapper').forEach(wrapper => {
        const track = wrapper.querySelector('.slider-track');
        const leftBtn = wrapper.querySelector('.left-arrow');
        const rightBtn = wrapper.querySelector('.right-arrow');

        if(leftBtn && track) {
            leftBtn.addEventListener('click', () => {
                // Scroll back by the width of the visible track window
                track.scrollBy({ left: -track.clientWidth, behavior: 'smooth' });
            });
        }

        if(rightBtn && track) {
            rightBtn.addEventListener('click', () => {
                // Scroll forward by the width of the visible track window
                track.scrollBy({ left: track.clientWidth, behavior: 'smooth' });
            });
        }
    });

    /* --- Dynamic Summary Update Logic --- */
    const guestSelect = document.getElementById('guest-select');
    const dateInput = document.getElementById('date-input');
    const summaryDatetime = document.getElementById('summary-datetime');
    const summaryGuests = document.getElementById('summary-guests');

    function updateSummary() {
        if (!guestSelect || !dateInput || !summaryDatetime || !summaryGuests) return;
        
        const guests = guestSelect.value;
        const dateVal = dateInput.value;
        
        // Format the Date string
        let dateStr = "";
        if(dateVal) {
            const parts = dateVal.split('-');
            if(parts.length === 3) {
                const dateObj = new Date(parts[0], parts[1] - 1, parts[2]);
                const options = { weekday: 'long', month: 'long', day: 'numeric' };
                dateStr = dateObj.toLocaleDateString('en-US', options);
            }
        }

        // Append Time if selected
        const activeTimeBtn = document.querySelector('.time-slot-btn.active');
        let timeStr = activeTimeBtn ? `, at ${activeTimeBtn.innerText}` : '';

        summaryDatetime.innerText = dateStr + timeStr;
        
        // Format Guest text
        let guestText = guests.includes('+') ? guests + ' people' : guests + (guests === '1' ? ' person' : ' people');
        summaryGuests.innerText = guestText;
    }

    // Listeners for changes in upper inputs
    if (guestSelect) guestSelect.addEventListener('change', updateSummary);
    if (dateInput) dateInput.addEventListener('change', updateSummary);
    
    // Initial call to set the text on load
    updateSummary();

});