<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'St John of God University')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Styles -->
    @stack('styles')
    
    <style>
        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Mobile Menu */
        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 80%;
            max-width: 300px;
            height: 100vh;
            background: white;
            z-index: 1000;
            transition: right 0.3s ease;
            box-shadow: -5px 0 20px rgba(0,0,0,0.1);
        }
        .mobile-menu.active {
            right: 0;
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 999;
            display: none;
        }
        .overlay.active {
            display: block;
        }
        
        /* Dropdown Menu */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            border-radius: 8px;
            z-index: 1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: all 0.3s;
        }
        .dropdown-content a:hover {
            background-color: #fef2f2;
            color: #dc2626;
        }
        
        /* Active section highlighting */
        .nav-active {
            color: #dc2626 !important;
        }
        
        /* Scroll padding for fixed header */
        section {
            scroll-margin-top: 80px;
        }

         /* Responsive breakpoint for 1200px */
    @media (min-width: 1280px) {
        .mobile-menu {
            display: none !important;
        }
        
        .overlay.active {
            display: none !important;
        }
    }
    
    /* Ensure proper display on all devices */
    @media (max-width: 1279px) {
        .desktop-nav {
            display: none !important;
        }
        
        .mobile-nav-toggle {
            display: block !important;
        }
    }
    
    /* Smooth transitions for responsive changes */
    nav, .mobile-menu, .overlay {
        transition: all 0.3s ease;
    }


    /*mobile menu css*/
    /* Mobile Menu Styles */
.mobile-menu {
    position: fixed;
    top: 0;
    right: -100%;
    width: 85%;
    max-width: 350px;
    height: 100vh;
    background: white;
    z-index: 1000;
    transition: right 0.3s ease;
    box-shadow: -5px 0 20px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
}

.mobile-menu.active {
    right: 0;
}

/* Custom scrollbar for mobile menu */
.mobile-menu .overflow-y-auto {
    scrollbar-width: thin;
    scrollbar-color: #dc2626 #f0f0f0;
}

.mobile-menu .overflow-y-auto::-webkit-scrollbar {
    width: 4px;
}

.mobile-menu .overflow-y-auto::-webkit-scrollbar-track {
    background: #f0f0f0;
    border-radius: 10px;
}

.mobile-menu .overflow-y-auto::-webkit-scrollbar-thumb {
    background: #dc2626;
    border-radius: 10px;
}

.mobile-menu .overflow-y-auto::-webkit-scrollbar-thumb:hover {
    background: #991b1b;
}

/* Ensure smooth scrolling on mobile */
.mobile-menu .overflow-y-auto {
    -webkit-overflow-scrolling: touch;
    overflow-y: auto;
}

/* Safe area support for notched devices */
@supports (padding: max(0px)) {
    .mobile-menu {
        padding-bottom: max(20px, env(safe-area-inset-bottom));
    }
}

/* Improved touch targets */
.mobile-nav-link {
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}

.mobile-nav-link:active {
    transform: scale(0.98);
}

/* Animation for menu items */
.mobile-menu.active .mobile-nav-link {
    animation: slideIn 0.3s ease backwards;
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateX(20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Stagger animation for menu items */
.mobile-menu.active li:nth-child(1) .mobile-nav-link { animation-delay: 0.05s; }
.mobile-menu.active li:nth-child(2) .mobile-nav-link { animation-delay: 0.1s; }
.mobile-menu.active li:nth-child(3) .mobile-nav-link { animation-delay: 0.15s; }
.mobile-menu.active li:nth-child(4) .mobile-nav-link { animation-delay: 0.2s; }
.mobile-menu.active li:nth-child(5) .mobile-nav-link { animation-delay: 0.25s; }
.mobile-menu.active li:nth-child(6) .mobile-nav-link { animation-delay: 0.3s; }
.mobile-menu.active li:nth-child(7) .mobile-nav-link { animation-delay: 0.35s; }
.mobile-menu.active li:nth-child(8) .mobile-nav-link { animation-delay: 0.4s; }
    /*end of mobile menu css */
    </style>
</head>
<body>

    <!-- Loading Animation -->
    @include('partials.loading')

    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <!-- Include Navbar Partial -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
        <!-- Chatbot Partial -->
       @include('partials.chatbot')
    </main>

    <!-- Include Footer Partial -->
    @include('partials.footer')

    <!-- Scripts -->
    <script>
        // Mobile Menu Toggle
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const overlay = document.getElementById('overlay');
        const closeMenu = document.getElementById('closeMenu');
        
        if (hamburgerBtn) {
            hamburgerBtn.addEventListener('click', () => {
                mobileMenu.classList.add('active');
                overlay.classList.add('active');
            });
        }
        
        function closeMenuFunc() {
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
        }
        
        if (closeMenu) {
            closeMenu.addEventListener('click', closeMenuFunc);
        }
        
        if (overlay) {
            overlay.addEventListener('click', closeMenuFunc);
        }
        
        // Smooth scroll for navigation links
        const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId && targetId !== '#') {
                    e.preventDefault();
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        closeMenuFunc();
                        const offset = 80;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - offset;
                        
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
        
        // Highlight active navigation link based on scroll position
        const sections = document.querySelectorAll('section[id]');
        
        function updateActiveNav() {
            const scrollPosition = window.scrollY + 100;
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionBottom = sectionTop + section.offsetHeight;
                const sectionId = section.getAttribute('id');
                
                if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                    document.querySelectorAll('.nav-link').forEach(link => {
                        link.classList.remove('nav-active');
                        if (link.getAttribute('href') === `#${sectionId}`) {
                            link.classList.add('nav-active');
                        }
                    });
                }
            });
        }
        
        window.addEventListener('scroll', updateActiveNav);
        updateActiveNav();
        
        // Additional loading for AJAX/Fetch requests
        if (typeof fetch !== 'undefined') {
            const originalFetch = window.fetch;
            window.fetch = function(...args) {
                showLoading();
                return originalFetch.apply(this, args).finally(() => {
                    setTimeout(hideLoading, 300);
                });
            };
        }
        
        // Loading for form submissions
        document.addEventListener('submit', function(e) {
            if (e.target && e.target.tagName === 'FORM') {
                showLoading();
            }
        });
    </script>
    <script>

        // Enhanced mobile menu functionality
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenu = document.getElementById('mobileMenu');
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const overlay = document.getElementById('overlay');
    const closeMenu = document.getElementById('closeMenu');
    
    // Store scroll position
    let scrollPosition = 0;
    
    function openMobileMenu() {
        if (mobileMenu) {
            // Store current scroll position
            scrollPosition = window.pageYOffset;
            
            // Add classes to open menu
            mobileMenu.classList.add('active');
            if (overlay) overlay.classList.add('active');
            
            // Prevent body scroll
            document.body.style.overflow = 'hidden';
            document.body.style.position = 'fixed';
            document.body.style.top = `-${scrollPosition}px`;
            document.body.style.width = '100%';
        }
    }
    
    function closeMobileMenu() {
        if (mobileMenu) {
            // Remove classes
            mobileMenu.classList.remove('active');
            if (overlay) overlay.classList.remove('active');
            
            // Restore body scroll
            document.body.style.overflow = '';
            document.body.style.position = '';
            document.body.style.top = '';
            document.body.style.width = '';
            
            // Restore scroll position
            window.scrollTo(0, scrollPosition);
        }
    }
    
    // Event listeners
    if (hamburgerBtn) {
        hamburgerBtn.addEventListener('click', openMobileMenu);
    }
    
    if (closeMenu) {
        closeMenu.addEventListener('click', closeMobileMenu);
    }
    
    if (overlay) {
        overlay.addEventListener('click', closeMobileMenu);
    }
    
    // Close menu on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenu && mobileMenu.classList.contains('active')) {
            closeMobileMenu();
        }
    });
    
    // Close menu on window resize (if screen becomes large)
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1280 && mobileMenu && mobileMenu.classList.contains('active')) {
            closeMobileMenu();
        }
    });
    
    // Handle mobile nav link clicks
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId && targetId !== '#') {
                e.preventDefault();
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    closeMobileMenu();
                    setTimeout(() => {
                        const offset = 80;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - offset;
                        
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }, 300);
                }
            }
        });
    });
});
    </script>
    
    @stack('scripts')
</body>
</html>