// Smooth scrolling for navigation links
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu functionality
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const nav = document.querySelector('.nav');
    
    mobileMenuToggle.addEventListener('click', function() {
        nav.classList.toggle('active');
        mobileMenuToggle.classList.toggle('active');
    });
    
    // Close mobile menu when clicking on a link
    const navLinks = document.querySelectorAll('.nav-list a[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Close mobile menu
            nav.classList.remove('active');
            mobileMenuToggle.classList.remove('active');
            
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                const headerHeight = document.querySelector('.header').offsetHeight;
                const targetPosition = targetSection.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!nav.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
            nav.classList.remove('active');
            mobileMenuToggle.classList.remove('active');
        }
    });

    // CTA button functionality
    const ctaButton = document.querySelector('.cta-button');
    if (ctaButton) {
        ctaButton.addEventListener('click', function() {
            // You can add contact form functionality here
            alert('Thank you for your interest! Please contact us at info@econinsight.com');
        });
    }

    // Search icon functionality
    const searchIcon = document.querySelector('.search-icon');
    if (searchIcon) {
        searchIcon.addEventListener('click', function() {
            // You can add search functionality here
            alert('Search functionality coming soon!');
        });
    }

    // Add scroll effect to header
    window.addEventListener('scroll', function() {
        const header = document.querySelector('.header');
        if (window.scrollY > 100) {
            header.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
            header.style.backdropFilter = 'blur(10px)';
        } else {
            header.style.backgroundColor = 'white';
            header.style.backdropFilter = 'none';
        }
    });

    // Services Carousel Enhancement
    const servicesCarousel = document.getElementById('servicesCarousel');
    if (servicesCarousel) {
        // Initialize Bootstrap carousel with custom options
        const carousel = new bootstrap.Carousel(servicesCarousel, {
            interval: 6000, // Auto-play every 6 seconds (longer since fewer slides)
            pause: 'hover', // Pause on hover
            wrap: true, // Continuous loop
            keyboard: true, // Keyboard navigation
            touch: true // Touch/swipe support
        });
        
        // Add smooth transitions
        servicesCarousel.addEventListener('slide.bs.carousel', function (event) {
            const activeItem = event.relatedTarget;
            const nextItem = event.nextElementSibling;
            
            // Add fade effect
            if (activeItem) activeItem.style.opacity = '0.7';
            if (nextItem) nextItem.style.opacity = '1';
        });
        
        // Pause carousel when not in viewport
        const carouselObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    carousel.cycle(); // Resume auto-play
                } else {
                    carousel.pause(); // Pause when not visible
                }
            });
        }, { threshold: 0.3 });
        
        carouselObserver.observe(servicesCarousel);
    }

    // Add animation to service cards on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe service cards and insight cards
    const cards = document.querySelectorAll('.service-card, .insight-card');
    cards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });

    // Add hover effect to hexagon groups
    const hexagonGroups = document.querySelectorAll('.hexagon-group');
    hexagonGroups.forEach(group => {
        group.addEventListener('mouseenter', function() {
            const hexagons = this.querySelectorAll('.hexagon');
            hexagons.forEach((hexagon, index) => {
                hexagon.style.transform = `scale(1.1) rotate(${index * 10}deg)`;
                hexagon.style.transition = 'transform 0.3s ease';
            });
        });

        group.addEventListener('mouseleave', function() {
            const hexagons = this.querySelectorAll('.hexagon');
            hexagons.forEach(hexagon => {
                hexagon.style.transform = 'scale(1) rotate(0deg)';
            });
        });
    });
});
