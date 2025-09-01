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
            // Contact Form Functionality
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            handleFormSubmission();
        });
        
        // Real-time validation
        const inputs = contactForm.querySelectorAll('input, textarea, select');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                validateField(this);
            });
            
            input.addEventListener('input', function() {
                clearFieldError(this);
            });
        });
    }
});

function handleFormSubmission() {
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const formMessages = document.getElementById('form-messages');
    const successMessage = document.getElementById('success-message');
    const errorMessage = document.getElementById('error-message');
    
    // Clear previous messages
    clearMessages();
    
    // Validate all fields
    if (!validateForm()) {
        return;
    }
    
    // Show loading state
    submitBtn.classList.add('loading');
    
    // Get form data
    const formData = new FormData(form);
    
    // Send AJAX request
    fetch('process_contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        submitBtn.classList.remove('loading');
        
        if (data.success) {
            // Show success message
            successMessage.textContent = data.message;
            formMessages.style.display = 'block';
            successMessage.style.display = 'block';
            errorMessage.style.display = 'none';
            
            // Reset form
            form.reset();
            
            // Clear all field states
            clearAllFieldStates();
            
            // Hide success message after 5 seconds
            setTimeout(() => {
                formMessages.style.display = 'none';
            }, 5000);
            
        } else {
            // Show error message
            errorMessage.textContent = data.message;
            formMessages.style.display = 'block';
            errorMessage.style.display = 'block';
            successMessage.style.display = 'none';
            
            // Show field-specific errors
            if (data.errors) {
                Object.keys(data.errors).forEach(fieldName => {
                    const field = document.getElementById(fieldName);
                    if (field) {
                        showFieldError(field, data.errors[fieldName]);
                    }
                });
            }
        }
    })
    .catch(error => {
        submitBtn.classList.remove('loading');
        console.error('Error:', error);
        
        errorMessage.textContent = 'An error occurred. Please try again.';
        formMessages.style.display = 'block';
        errorMessage.style.display = 'block';
        successMessage.style.display = 'none';
    });
}

function validateForm() {
    let isValid = true;
    const requiredFields = ['firstName', 'lastName', 'email', 'message'];
    
    requiredFields.forEach(fieldName => {
        const field = document.getElementById(fieldName);
        if (field && !validateField(field)) {
            isValid = false;
        }
    });
    
    // Validate phone if provided
    const phoneField = document.getElementById('phone');
    if (phoneField && phoneField.value.trim() && !validateField(phoneField)) {
        isValid = false;
    }
    
    return isValid;
}

function validateField(field) {
    const value = field.value.trim();
    const fieldName = field.name;
    let isValid = true;
    let errorMessage = '';
    
    // Remove previous error states
    clearFieldError(field);
    
    // Required field validation
    if (field.hasAttribute('required') && !value) {
        isValid = false;
        errorMessage = `${field.previousElementSibling.textContent.replace(' *', '')} is required`;
    }
    
    // Field-specific validation
    if (isValid && value) {
        switch (fieldName) {
            case 'firstName':
            case 'lastName':
                if (value.length < 2) {
                    isValid = false;
                    errorMessage = `${field.previousElementSibling.textContent.replace(' *', '')} must be at least 2 characters`;
                }
                break;
                
            case 'email':
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(value)) {
                    isValid = false;
                    errorMessage = 'Please enter a valid email address';
                }
                break;
                
            case 'phone':
                const phoneRegex = /^[\+]?[0-9\s\-\(\)]{10,}$/;
                if (!phoneRegex.test(value)) {
                    isValid = false;
                    errorMessage = 'Please enter a valid phone number';
                }
                break;
                
            case 'message':
                if (value.length < 10) {
                    isValid = false;
                    errorMessage = 'Message must be at least 10 characters';
                }
                break;
        }
    }
    
    if (!isValid) {
        showFieldError(field, errorMessage);
    } else {
        showFieldSuccess(field);
    }
    
    return isValid;
}

function showFieldError(field, message) {
    const errorSpan = document.getElementById(`${field.name}-error`);
    if (errorSpan) {
        errorSpan.textContent = message;
        errorSpan.style.display = 'block';
    }
    
    field.parentElement.classList.add('error');
    field.parentElement.classList.remove('success');
}

function showFieldSuccess(field) {
    const errorSpan = document.getElementById(`${field.name}-error`);
    if (errorSpan) {
        errorSpan.style.display = 'none';
    }
    
    field.parentElement.classList.add('success');
    field.parentElement.classList.remove('error');
}

function clearFieldError(field) {
    const errorSpan = document.getElementById(`${field.name}-error`);
    if (errorSpan) {
        errorSpan.style.display = 'none';
    }
    
    field.parentElement.classList.remove('error', 'success');
}

function clearAllFieldStates() {
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach(group => {
        group.classList.remove('error', 'success');
    });
    
    const errorSpans = document.querySelectorAll('.error-message');
    errorSpans.forEach(span => {
        span.style.display = 'none';
    });
}

function clearMessages() {
    const formMessages = document.getElementById('form-messages');
    const successMessage = document.getElementById('success-message');
    const errorMessage = document.getElementById('error-message');
    
    if (formMessages) formMessages.style.display = 'none';
    if (successMessage) successMessage.style.display = 'none';
    if (errorMessage) errorMessage.style.display = 'none';
}
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
