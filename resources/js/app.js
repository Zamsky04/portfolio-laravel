import './bootstrap';

// Enhanced Portfolio JavaScript
document.addEventListener('DOMContentLoaded', () => {
    // Mobile menu functionality
    initMobileMenu();

    // Smooth reveal animations
    initScrollAnimations();

    // Navbar scroll effects
    initNavbarEffects();

    // Smooth scrolling for anchor links
    initSmoothScrolling();

    // Enhanced form interactions
    initFormEnhancements();

    // Parallax effects
    initParallaxEffects();

    // Loading states
    initLoadingStates();

    const bars = document.querySelectorAll('.skill-progress');

    const animateBar = (el) => {
    if (el.dataset.animated === '1') return;     // guard biar sekali saja
    el.dataset.animated = '1';

    const sx = parseFloat(getComputedStyle(el).getPropertyValue('--sx')) || 1;
    const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (reduce) {
        el.style.transform = `scaleX(${sx})`;
        el.style.opacity = 1;
        return;
    }

    // Hindari kedip: set ke 0 lalu animasi pada frame berikutnya
    el.style.transform = 'scaleX(0)';
    el.style.opacity = 1;
    requestAnimationFrame(() => {
        // pakai class inview -> @keyframes grow ke var(--sx)
        el.classList.add('inview');
    });
    };

    const io = new IntersectionObserver((entries) => {
    entries.forEach(({ target, isIntersecting }) => {
        if (!isIntersecting) return;
        animateBar(target);
        io.unobserve(target);
    });
    }, { threshold: 0.25 });

    bars.forEach(el => io.observe(el));

    // Jaga-jaga: animasikan yang sudah on-screen saat load lambat
    window.addEventListener('load', () => {
    bars.forEach(el => {
        const r = el.getBoundingClientRect();
        if (r.top < window.innerHeight && r.bottom > 0) animateBar(el);
    });
});


});

// Mobile Menu Management
function initMobileMenu() {
    const btn = document.querySelector('#btnMobile');
    const menu = document.querySelector('#mobileMenu');
    const menuOverlay = document.createElement('div');

    if (!btn || !menu) return;

    // Create overlay
    menuOverlay.className = 'fixed inset-0 bg-black/20 backdrop-blur-sm z-40 hidden opacity-0 transition-opacity duration-300';
    document.body.appendChild(menuOverlay);

    // Toggle menu
    btn.addEventListener('click', () => {
        const isHidden = menu.classList.contains('hidden');

        if (isHidden) {
            // Show menu
            menu.classList.remove('hidden');
            menuOverlay.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');

            // Animate in
            requestAnimationFrame(() => {
                menu.classList.add('animate-in');
                menuOverlay.classList.remove('opacity-0');
            });
        } else {
            // Hide menu
            menu.classList.remove('animate-in');
            menuOverlay.classList.add('opacity-0');
            document.body.classList.remove('overflow-hidden');

            setTimeout(() => {
                menu.classList.add('hidden');
                menuOverlay.classList.add('hidden');
            }, 300);
        }
    });

    // Close menu on overlay click
    menuOverlay.addEventListener('click', () => {
        btn.click();
    });

    // Close menu on link click
    menu.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', () => {
            if (!menu.classList.contains('hidden')) {
                btn.click();
            }
        });
    });

    // Close menu on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !menu.classList.contains('hidden')) {
            btn.click();
        }
    });
}

// Advanced Scroll Animations
function initScrollAnimations() {
    // Enhanced intersection observer with stagger support
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;

                // Add reveal class
                element.classList.add('is-revealed');

                // Start animation
                if (element.style.animationPlayState === 'paused') {
                    element.style.animationPlayState = 'running';
                }

                // Handle stagger animations for groups
                const staggerElements = element.querySelectorAll('[class*="delay-"]');
                staggerElements.forEach((el, index) => {
                    setTimeout(() => {
                        el.style.animationPlayState = 'running';
                        el.classList.add('is-revealed');
                    }, index * 100);
                });

                observer.unobserve(element);
            }
        });
    }, observerOptions);

    // Observe all animation elements
    const animatedElements = document.querySelectorAll('.anim-in, .anim-in-up, .anim-in-scale, .anim-in-right');
    animatedElements.forEach(element => {
        element.style.animationPlayState = 'paused';
        observer.observe(element);
    });
}

// Dynamic Navbar Effects
function initNavbarEffects() {
    const navbar = document.querySelector('header');
    const navLinks = document.querySelectorAll('nav a[href^="#"]');
    let lastScrollY = window.scrollY;

    if (!navbar) return;

    // Scroll direction and position tracking
    window.addEventListener('scroll', () => {
        const currentScrollY = window.scrollY;

        // Add/remove scrolled class
        if (currentScrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

        // Hide/show navbar based on scroll direction
        if (currentScrollY > lastScrollY && currentScrollY > 200) {
            navbar.classList.add('nav-hidden');
        } else {
            navbar.classList.remove('nav-hidden');
        }

        lastScrollY = currentScrollY;

        // Update active nav link
        updateActiveNavLink();
    });

    // Update active navigation link based on scroll position
    function updateActiveNavLink() {
        const sections = document.querySelectorAll('section[id]');
        const scrollPos = window.scrollY + 100;

        sections.forEach(section => {
            const top = section.offsetTop;
            const height = section.offsetHeight;
            const id = section.getAttribute('id');

            if (scrollPos >= top && scrollPos < top + height) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${id}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }
}

// Smooth Scrolling Enhancement
function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));

            if (target) {
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Form Enhancements
function initFormEnhancements() {
    const forms = document.querySelectorAll('form');

    forms.forEach(form => {
        const inputs = form.querySelectorAll('input, textarea, select');
        const submitBtn = form.querySelector('button[type="submit"]');

        // Enhanced input interactions
        inputs.forEach(input => {
            // Floating labels effect
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('input-focused');
            });

            input.addEventListener('blur', () => {
                if (!input.value) {
                    input.parentElement.classList.remove('input-focused');
                }
            });

            // Real-time validation
            input.addEventListener('input', () => {
                validateField(input);
            });
        });

        // Form submission handling
        if (submitBtn) {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                handleFormSubmission(form, submitBtn);
            });
        }
    });
}

// Field validation
function validateField(field) {
    const value = field.value.trim();
    const type = field.type;
    let isValid = true;

    // Remove previous validation states
    field.classList.remove('input-valid', 'input-invalid');

    // Validation logic
    if (field.hasAttribute('required') && !value) {
        isValid = false;
    } else if (type === 'email' && value && !isValidEmail(value)) {
        isValid = false;
    }

    // Apply validation state
    if (value) {
        field.classList.add(isValid ? 'input-valid' : 'input-invalid');
    }

    return isValid;
}

// Email validation helper
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Form submission handler
function handleFormSubmission(form, submitBtn) {
    const originalText = submitBtn.innerHTML;
    const inputs = form.querySelectorAll('input[required], textarea[required]');
    let allValid = true;

    // Validate all required fields
    inputs.forEach(input => {
        if (!validateField(input)) {
            allValid = false;
        }
    });

    if (!allValid) {
        // Show validation errors
        showNotification('Please fill in all required fields correctly.', 'error');
        return;
    }

    // Show loading state
    submitBtn.disabled = true;
    submitBtn.innerHTML = `
        <svg class="animate-spin w-5 h-5" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        <span>Mengirim...</span>
    `;

    // Simulate form submission
    setTimeout(() => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
        showNotification('Pesan berhasil dikirim! Terima kasih atas minat Anda.', 'success');
        form.reset();
    }, 2000);
}

// Subtle Parallax Effects
function initParallaxEffects() {
    const parallaxElements = document.querySelectorAll('.anim-float');

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return; // Skip parallax for users who prefer reduced motion
    }

    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const rate = scrolled * -0.5;

        parallaxElements.forEach((element, index) => {
            const yPos = -(scrolled * (0.3 + index * 0.1));
            element.style.transform = `translateY(${yPos}px)`;
        });
    });
}

// Loading States Management
function initLoadingStates() {
    // Image loading with fade-in effect
    const images = document.querySelectorAll('img[src]');

    images.forEach(img => {
        if (img.complete) {
            img.classList.add('loaded');
        } else {
            img.addEventListener('load', () => {
                img.classList.add('loaded');
            });
        }
    });

    // Lazy loading for images
    const lazyImages = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });

    lazyImages.forEach(img => {
        imageObserver.observe(img);
    });
}

// Notification System
function showNotification(message, type = 'info') {
    // Remove existing notifications
    const existing = document.querySelector('.notification');
    if (existing) {
        existing.remove();
    }

    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification fixed top-4 right-4 z-50 p-4 rounded-2xl shadow-lg backdrop-blur-sm transform translate-x-full transition-all duration-300`;

    // Set type-specific styling
    switch (type) {
        case 'success':
            notification.classList.add('bg-emerald-500/90', 'text-white');
            break;
        case 'error':
            notification.classList.add('bg-red-500/90', 'text-white');
            break;
        default:
            notification.classList.add('bg-blue-500/90', 'text-white');
    }

    // Create notification content
    notification.innerHTML = `
        <div class="flex items-center gap-3">
            <div class="flex-shrink-0">
                ${type === 'success' ?
                    '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>' :
                    type === 'error' ?
                    '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>' :
                    '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>'
                }
            </div>
            <div class="flex-1">
                <p class="text-sm font-medium">${message}</p>
            </div>
            <button type="button" class="flex-shrink-0 ml-3 notification-close">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    `;

    // Add to document
    document.body.appendChild(notification);

    // Animate in
    requestAnimationFrame(() => {
        notification.classList.remove('translate-x-full');
    });

    // Auto dismiss after 5 seconds
    const dismissTimer = setTimeout(() => {
        dismissNotification(notification);
    }, 5000);

    // Manual dismiss
    notification.querySelector('.notification-close').addEventListener('click', () => {
        clearTimeout(dismissTimer);
        dismissNotification(notification);
    });
}

// Dismiss notification
function dismissNotification(notification) {
    notification.classList.add('translate-x-full');
    setTimeout(() => {
        if (notification.parentNode) {
            notification.parentNode.removeChild(notification);
        }
    }, 300);
}

// Advanced CSS Classes for Enhanced Interactions
const additionalCSS = `
    /* Enhanced navigation states */
    header.scrolled {
        background: rgba(248, 250, 252, 0.95) !important;
        backdrop-filter: saturate(180%) blur(20px);
        border-bottom: 1px solid rgba(226, 232, 240, 0.8);
    }

    header.nav-hidden {
        transform: translateY(-100%);
        transition: transform 0.3s ease;
    }

    nav a.active {
        color: var(--brand-700) !important;
        font-weight: 600;
    }

    nav a.active:after {
        width: 100% !important;
    }

    /* Enhanced mobile menu */
    #mobileMenu.animate-in {
        animation: slideDown 0.3s ease-out;
    }

    @keyframes slideDown {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Form field enhancements */
    .input-focused label {
        color: var(--brand-600);
        transform: translateY(-0.5rem) scale(0.9);
    }

    .input-valid {
        border-color: var(--success) !important;
        box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1) !important;
    }

    .input-invalid {
        border-color: var(--error) !important;
        box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1) !important;
    }

    /* Enhanced image loading */
    img {
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    img.loaded {
        opacity: 1;
    }

    img.lazy {
        filter: blur(5px);
        transition: filter 0.3s ease, opacity 0.3s ease;
    }

    /* Reveal animation state */
    .is-revealed {
        --reveal-delay: 0s;
    }

    /* Enhanced hover states */
    .card:hover .interactive-icon {
        transform: scale(1.1) rotate(5deg);
    }

    /* Custom scrollbar for webkit browsers */
    ::-webkit-scrollbar {
        width: 6px;
    }

    ::-webkit-scrollbar-track {
        background: var(--wash);
    }

    ::-webkit-scrollbar-thumb {
        background: var(--muted-light);
        border-radius: 3px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: var(--muted);
    }
`;

// Inject additional CSS
const style = document.createElement('style');
style.textContent = additionalCSS;
document.head.appendChild(style);

// Performance optimization: Use requestIdleCallback for non-critical tasks
if ('requestIdleCallback' in window) {
    requestIdleCallback(() => {
        // Initialize non-critical features
        initParallaxEffects();

        // Preload critical resources
        const criticalResources = document.querySelectorAll('link[rel="preload"]');
        criticalResources.forEach(resource => {
            if (!resource.href.includes(window.location.origin)) {
                resource.crossOrigin = 'anonymous';
            }
        });
    });
}

// Error handling for better UX
window.addEventListener('error', (event) => {
    console.error('JavaScript Error:', event.error);
    // Could show a user-friendly error notification in production
});

// Performance monitoring (development only)
if (process.env.NODE_ENV === 'development') {
    const perfObserver = new PerformanceObserver((list) => {
        list.getEntries().forEach((entry) => {
            if (entry.entryType === 'largest-contentful-paint') {
                console.log('LCP:', entry.startTime);
            }
            if (entry.entryType === 'first-input') {
                console.log('FID:', entry.processingStart - entry.startTime);
            }
        });
    });

    perfObserver.observe({ entryTypes: ['largest-contentful-paint', 'first-input'] });
}

