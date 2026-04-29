<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
    <div class="flex flex-col h-full">
        <!-- Fixed Header -->
        <div class="p-6 pb-4 border-b">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full overflow-hidden">
                        <img src="{{ asset('images/logo_stjohn.png') }}" alt="Logo" class="w-full h-full object-cover">
                    </div>
                    <h2 class="text-xl font-bold text-red-700">Menu</h2>
                </div>
                <button id="closeMenu" class="text-gray-600 hover:text-red-600 transition">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Scrollable Content Area -->
        <div class="flex-1 overflow-y-auto">
            <div class="p-6">
                <!-- Login Options in Mobile Menu - Placeholder for now -->
                <div class="mb-6 pb-6 border-b">
                    <div class="flex gap-2 sm:gap-3">
                        <a href="#" class="flex-1 bg-red-50 text-red-700 py-2 px-3 rounded-lg text-center font-medium text-sm hover:bg-red-700 hover:text-white transition">
                            <i class="fas fa-sign-in-alt mr-2"></i>Portal Login
                        </a>
                    </div>
                </div>
                
                <!-- Mobile Search Bar in Menu -->
                <div class="mb-6 pb-6 border-b">
                    <form action="#" method="GET" class="relative">
                        <div class="relative">
                            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm"></i>
                            <input type="text" 
                                   name="q" 
                                   placeholder="Search courses, news, events..." 
                                   value="{{ request()->get('q') }}"
                                   class="w-full px-10 py-2.5 rounded-lg border border-gray-200 text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent bg-gray-50">
                        </div>
                    </form>
                </div>
                
                <!-- Navigation Links -->
                <ul class="space-y-3 mb-6">
                    <li>
                        <a href="/" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->is('/') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}">
                            <i class="fas fa-home w-5 text-red-600"></i>
                            <span>Home</span>
                            @if(request()->is('/'))
                                <i class="fas fa-check ml-auto text-red-600 text-xs"></i>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="/About" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->is('about') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}">
                            <i class="fas fa-info-circle w-5 text-red-600"></i>
                            <span>About</span>
                            @if(request()->is('About'))
                                <i class="fas fa-check ml-auto text-red-600 text-xs"></i>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="/news" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->is('news') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}">
                            <i class="fas fa-newspaper w-5 text-red-600"></i>
                            <span>News</span>
                            @if(request()->is('news'))
                                <i class="fas fa-check ml-auto text-red-600 text-xs"></i>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="/programs" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->is('programs') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}">
                            <i class="fas fa-graduation-cap w-5 text-red-600"></i>
                            <span>Programs</span>
                            @if(request()->is('programs'))
                                <i class="fas fa-check ml-auto text-red-600 text-xs"></i>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="/research" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->is('research') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}">
                            <i class="fas fa-flask w-5 text-red-600"></i>
                            <span>Research Hub</span>
                            @if(request()->is('research'))
                                <i class="fas fa-check ml-auto text-red-600 text-xs"></i>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="/students" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->is('students') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}">
                            <i class="fas fa-users w-5 text-red-600"></i>
                            <span>Students</span>
                            @if(request()->is('students'))
                                <i class="fas fa-check ml-auto text-red-600 text-xs"></i>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="/library" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->is('library') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}">
                            <i class="fas fa-book w-5 text-red-600"></i>
                            <span>Library</span>
                            @if(request()->is('library'))
                                <i class="fas fa-check ml-auto text-red-600 text-xs"></i>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="/contact" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->is('contact') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}">
                            <i class="fas fa-envelope w-5 text-red-600"></i>
                            <span>Contact</span>
                            @if(request()->is('contact'))
                                <i class="fas fa-check ml-auto text-red-600 text-xs"></i>
                            @endif
                        </a>
                    </li>
                </ul>
                
                <!-- Apply Now Button - ADDED BACK -->
            <a href="/enroll" class="mobile-nav-link block bg-yellow-500 text-white w-full py-3 rounded-lg text-center font-semibold hover:bg-yellow-400 transition mt-4 {{ request()->is('enroll') ? 'bg-yellow-600 ring-2 ring-yellow-300' : '' }}" data-bypass="true">
                <i class="fas fa-user-plus mr-2"></i>Apply Now
            </a>
                
            </div>
        </div>
    </div>
</div>
<!-- TOP BAR - Sticky with gradient, search, and Apply Now button -->
<div class="bg-gradient-to-r from-red-700 to-red-800 text-white text-sm py-2.5 px-4 md:px-6 hidden xl:flex items-center justify-between sticky top-0 z-50 shadow-md">
    <!-- Left: Contact Icons -->
    <div class="flex items-center gap-5">
        <a href="tel:+265123456789" class="flex items-center gap-2 hover:text-red-200 transition">
            <i class="fas fa-phone-alt text-xs"></i>
            <span>+265 991 887 119</span>
        </a>
        <a href="mailto:info@sjoguniversity.com" class="flex items-center gap-2 hover:text-red-200 transition">
            <i class="fas fa-envelope text-xs"></i>
            <span>collegehs@sjog.mw</span>
        </a>
        <div class="flex items-center gap-2">
            <i class="fas fa-clock text-xs"></i>
            <span>08:00 - 17:00</span>
        </div>
    </div>
    
    <!-- Right: Search Field + Apply Now + Portal Login -->
    <div class="flex items-center gap-4">
        <!-- Clean Search Bar -->
        <form action="#" method="GET" class="relative">
            <div class="relative">
                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm"></i>
                <input type="text" 
                       name="q" 
                       placeholder="Search..." 
                       value="{{ request()->get('q') }}"
                       class="w-64 px-10 py-2 rounded-lg text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-400 bg-white/90 backdrop-blur-sm border-0">
            </div>
        </form>
        
        <!-- Apply Now Button moved to top bar -->
        <a href="/enroll" class="bg-yellow-500 text-white hover:bg-yellow-400 px-5 py-2 rounded-lg font-semibold transition flex items-center gap-2 shadow-md">
            <i class="fas fa-user-plus"></i>
            <span>Apply Now</span>
            <i class="fas fa-arrow-right text-xs"></i>
        </a>
        
        
        <!-- Portal Login Button -->
        <a href="#" class="bg-white text-red-700 hover:bg-gray-100 px-4 py-2 rounded-lg font-semibold transition flex items-center gap-2 shadow-md">
            <i class="fas fa-user-graduate"></i>
            <span>Portal Login</span>
            <i class="fas fa-arrow-right text-xs"></i>
        </a>
    </div>
</div>

<!-- Main Navigation - Also Sticky to ensure seamless scrolling -->
<nav class="bg-white px-4 md:px-6 py-4 flex justify-between items-center shadow sticky top-0 xl:top-[42px] z-40">
    <div class="flex items-center gap-3">
        <div class="w-10 h-10 md:w-14 md:h-14 lg:w-16 lg:h-16 rounded-full flex items-center justify-center overflow-hidden shadow-md">
            <img src="{{ asset('images/logo_stjohn.png') }}" alt="St John of God University Logo" class="w-full h-full object-cover">
        </div>
        <a href="/" class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl font-bold break-words whitespace-normal leading-tight text-gray-800 hover:text-red-700 transition">
            St John of God University
        </a>
    </div>
    
    <div class="flex items-center gap-4">
        <!-- Desktop Navigation - Visible only on screens 1200px and above -->
        <ul class="hidden xl:flex gap-8 font-medium items-center">
            <li>
                <a href="/" class="nav-link transition {{ request()->is('/') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="/news" class="nav-link transition {{ request()->is('news') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">
                    News
                </a>
            </li>
            <li>
                <a href="/About" class="nav-link transition {{ request()->is('about') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">
                    About
                </a>
            </li>
            <li>
                <a href="/programs" class="nav-link transition {{ request()->is('programs') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">
                    Programs
                </a>
            </li>
            <li>
                <a href="/research" class="nav-link transition {{ request()->is('research') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">
                    Research Hub
                </a>
            </li>
            <li>
                <a href="/students" class="nav-link transition {{ request()->is('students') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">
                    Students
                </a>
            </li>
            <li>
                <a href="/library" class="nav-link transition {{ request()->is('library') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">
                    Library
                </a>
            </li>
            <li>
                <a href="/contact" class="nav-link transition {{ request()->is('contact') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">
                    Contact
                </a>
            </li>
        </ul>
        
        <!-- Mobile Search Icon + Hamburger Button - Visible on screens below 1200px -->
        <div class="flex items-center gap-3 xl:hidden">
            <!-- Mobile Search Toggle Button -->
            <button id="mobileSearchBtn" class="text-gray-700 hover:text-red-600 transition">
                <i class="fas fa-search text-xl"></i>
            </button>
            
            <!-- Hamburger Button -->
            <button id="hamburgerBtn" class="text-gray-700">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>
</nav>

<!-- Add responsive styles for 1200px breakpoint -->
<style>
    /* Hide mobile menu elements on large screens */
    @media (min-width: 1280px) {
        .mobile-menu {
            display: none;
        }
        
        /* Ensure overlay doesn't show on desktop */
        .overlay.active {
            display: none;
        }
    }
    
    /* Show mobile menu button and hide desktop nav below 1200px */
    @media (max-width: 1000px) {
        .xl\:flex {
            display: none !important;
        }
        
        .xl\:hidden {
            display: flex !important;
        }
    }
    
    /* Adjustments for tablet screens */
    @media (min-width: 1024px) and (max-width: 1279px) {
        nav .flex.items-center.gap-3 a {
            font-size: 1.25rem;
        }
        
        .w-10.h-10.md\:w-14.md\:h-14 {
            width: 3rem;
            height: 3rem;
        }
    }
    
    /* Mobile menu improvements */
    @media (max-width: 640px) {
        .mobile-menu {
            width: 85%;
            max-width: 280px;
        }
        
        .mobile-menu .p-6 {
            padding: 1.25rem;
        }
        
        nav .flex.items-center.gap-3 a {
            font-size: 0.9rem;
            line-height: 1.3;
        }
    }
    
    /* Sticky topbar animation */
    .sticky {
        transition: all 0.3s ease;
    }
    
    /* Search field focus effect */
    input:focus {
        outline: none;
    }
    
    /* Active link animation */
    .nav-link {
        position: relative;
        transition: all 0.3s ease;
    }
    
    .border-b-2 {
        transition: all 0.3s ease;
    }

    /* ===== FIX: MAKE MOBILE MENU SCROLLABLE ===== */
    .mobile-menu {
        display: flex;
        flex-direction: column;
        height: 100vh;
        overflow: hidden;
    }

    .mobile-menu .flex-1 {
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        flex: 1;
        min-height: 0;
    }

    /* EXTRA bottom padding */
    .mobile-menu .flex-1 .p-6 {
        padding-bottom: 80px;
    }

    /* Reduce top padding to save space */
    .mobile-menu .p-6 {
        padding-top: 0.75rem;
    }

    /* Reduce spacing between items */
    .mobile-menu .space-y-3 > :not([hidden]) ~ :not([hidden]) {
        margin-top: 0.5rem;
    }

    /* Reduce margin on sections */
    .mobile-menu .mb-6 {
        margin-bottom: 0.75rem;
    }
    .mobile-menu .pb-6 {
        padding-bottom: 0.75rem;
    }

    /* For shorter screens */
    @media (max-height: 700px) {
        .mobile-menu .flex-1 .p-6 {
            padding-bottom: 60px;
        }
        .mobile-menu .p-6 {
            padding-top: 0.5rem;
        }
    }

    /* For iPhone SE and very short screens */
    @media (max-height: 600px) {
        .mobile-menu .flex-1 .p-6 {
            padding-bottom: 50px;
        }
        .mobile-menu .p-6 {
            padding: 0.5rem;
        }
        .mobile-nav-link {
            padding: 0.4rem 0.75rem !important;
        }
    }

    /* For taller screens */
    @media (min-height: 800px) {
        .mobile-menu .flex-1 .p-6 {
            padding-bottom: 100px;
        }
    }

    /* Safe area support */
    @supports (padding-bottom: env(safe-area-inset-bottom)) {
        .mobile-menu .flex-1 .p-6 {
            padding-bottom: calc(80px + env(safe-area-inset-bottom));
        }
    }
</style>
<script>
    // Get elements
    const mobileMenu = document.getElementById('mobileMenu');
    const overlay = document.getElementById('overlay');
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const closeMenuBtn = document.getElementById('closeMenu');
    const mobileSearchBtn = document.getElementById('mobileSearchBtn');
    
    let scrollPosition = 0;
    
    // Open mobile menu
    function openMobileMenu() {
        if (mobileMenu) {
            scrollPosition = window.pageYOffset;
            mobileMenu.classList.add('active');
            if (overlay) overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
            document.body.style.position = 'fixed';
            document.body.style.top = `-${scrollPosition}px`;
            document.body.style.width = '100%';
        }
    }
    
    // Close mobile menu - returns a promise so we can wait for it
    function closeMobileMenu() {
        return new Promise((resolve) => {
            if (mobileMenu && mobileMenu.classList.contains('active')) {
                mobileMenu.classList.remove('active');
                if (overlay) overlay.classList.remove('active');
                document.body.style.overflow = '';
                document.body.style.position = '';
                document.body.style.top = '';
                document.body.style.width = '';
                window.scrollTo(0, scrollPosition);
                // Small delay to allow menu to close
                setTimeout(resolve, 300);
            } else {
                resolve();
            }
        });
    }
    
    // Hamburger button
    if (hamburgerBtn) {
        hamburgerBtn.addEventListener('click', openMobileMenu);
    }
    
    // Close menu button
    if (closeMenuBtn) {
        closeMenuBtn.addEventListener('click', function() {
            closeMobileMenu();
        });
    }
    
    // Close on overlay click
    if (overlay) {
        overlay.addEventListener('click', function() {
            closeMobileMenu();
        });
    }
    
    // Close on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenu && mobileMenu.classList.contains('active')) {
            closeMobileMenu();
        }
    });
    
    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1280 && mobileMenu && mobileMenu.classList.contains('active')) {
            closeMobileMenu();
        }
    });
    
    // Mobile search button
    if (mobileSearchBtn) {
        mobileSearchBtn.addEventListener('click', function() {
            openMobileMenu();
            setTimeout(() => {
                const searchInput = mobileMenu.querySelector('input[type="text"]');
                if (searchInput) {
                    searchInput.focus();
                }
            }, 300);
        });
    }
    
    // Handle all mobile nav link clicks - intercept ALL links
    document.querySelectorAll('.mobile-nav-link').forEach(link => {
        link.addEventListener('click', async function(e) {
            const href = this.getAttribute('href');
            
            if (!href || href === '#') {
                e.preventDefault();
                return;
            }
            
            // Prevent default navigation
            e.preventDefault();
            
            // Close the menu first
            await closeMobileMenu();
            
            // If it's an anchor link (starts with #)
            if (href.startsWith('#')) {
                const targetElement = document.querySelector(href);
                if (targetElement) {
                    const offset = 80;
                    const position = targetElement.getBoundingClientRect().top + window.pageYOffset - offset;
                    window.scrollTo({
                        top: position,
                        behavior: 'smooth'
                    });
                }
            } else {
                // It's a regular page link - navigate after menu closes
                window.location.href = href;
            }
        });
    });
</script>