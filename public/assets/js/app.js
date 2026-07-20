/**
 * Main Application JavaScript
 * 
 * Handles UI interactions like sticky navbar shadow on scroll,
 * tooltips, and mobile menu toggles.
 */

document.addEventListener('DOMContentLoaded', () => {
    // Sticky Navbar shadow on scroll
    const navbar = document.getElementById('main-navbar') || document.querySelector('.navbar-glass');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // Highlight active nav link based on current URL
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
            link.setAttribute('aria-current', 'page');
        }
    });

    // Mobile Menu Toggle
    const mobileToggleBtn = document.getElementById('mobile-toggle-btn');
    const mobileCloseBtn = document.getElementById('mobile-close-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileToggleBtn && mobileMenu) {
        mobileToggleBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            mobileMenu.style.display = 'flex';
            // Force reflow
            mobileMenu.offsetHeight;
            mobileMenu.classList.add('active');
            
            // Lock scrolling completely
            document.documentElement.classList.add('menu-open');
            document.body.classList.add('menu-open');
            
            mobileToggleBtn.classList.add('open');
        });
    }
    if (mobileCloseBtn && mobileMenu) {
        mobileCloseBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            mobileMenu.classList.remove('active');
            setTimeout(() => {
                if (!mobileMenu.classList.contains('active')) {
                    mobileMenu.style.display = 'none';
                }
            }, 300);
            
            // Unlock scrolling
            document.documentElement.classList.remove('menu-open');
            document.body.classList.remove('menu-open');
            
            if (mobileToggleBtn) mobileToggleBtn.classList.remove('open');
        });
    }

    // Mouse Glow Effect
    const mouseGlow = document.getElementById('mouse-glow');
    if (mouseGlow) {
        const moveGlow = (e) => {
            const x = e.clientX;
            const y = e.clientY;
            mouseGlow.style.left = `${x}px`;
            mouseGlow.style.top = `${y}px`;
        };
        document.addEventListener('mousemove', moveGlow);
        document.addEventListener('mouseenter', () => mouseGlow.classList.add('active'));
        document.addEventListener('mouseleave', () => mouseGlow.classList.remove('active'));
    }

    // Intersection Observer for scroll animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated', 'is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

    // Floating Back to Top Button logic
    const backToTopBtn = document.getElementById('back-to-top-btn');
    if (backToTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 250) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        });

        backToTopBtn.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});
