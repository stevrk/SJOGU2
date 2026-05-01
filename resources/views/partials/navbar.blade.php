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
                <!-- Login Options in Mobile Menu -->
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
                    <li><a href="/" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->is('/') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}"><i class="fas fa-home w-5 text-red-600"></i><span>Home</span>@if(request()->is('/'))<i class="fas fa-check ml-auto text-red-600 text-xs"></i>@endif</a></li>
                    <li><a href="/About" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->is('about') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}"><i class="fas fa-info-circle w-5 text-red-600"></i><span>About</span>@if(request()->is('About'))<i class="fas fa-check ml-auto text-red-600 text-xs"></i>@endif</a></li>
                    <li><a href="/news" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->is('news') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}"><i class="fas fa-newspaper w-5 text-red-600"></i><span>News</span>@if(request()->is('news'))<i class="fas fa-check ml-auto text-red-600 text-xs"></i>@endif</a></li>
                    <li><a href="/programs" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->is('programs') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}"><i class="fas fa-graduation-cap w-5 text-red-600"></i><span>Programs</span>@if(request()->is('programs'))<i class="fas fa-check ml-auto text-red-600 text-xs"></i>@endif</a></li>
                    <li><a href="/research" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->is('research') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}"><i class="fas fa-flask w-5 text-red-600"></i><span>Research Hub</span>@if(request()->is('research'))<i class="fas fa-check ml-auto text-red-600 text-xs"></i>@endif</a></li>
                    <li><a href="/students" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->is('students') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}"><i class="fas fa-users w-5 text-red-600"></i><span>Students</span>@if(request()->is('students'))<i class="fas fa-check ml-auto text-red-600 text-xs"></i>@endif</a></li>
                    <li><a href="/library" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->is('library') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}"><i class="fas fa-book w-5 text-red-600"></i><span>Library</span>@if(request()->is('library'))<i class="fas fa-check ml-auto text-red-600 text-xs"></i>@endif</a></li>
                    <li><a href="/contact" class="mobile-nav-link flex items-center gap-3 py-2 px-3 rounded-lg transition {{ request()->is('contact') ? 'bg-red-50 text-red-700' : 'text-gray-800 hover:bg-red-50 hover:text-red-700' }}"><i class="fas fa-envelope w-5 text-red-600"></i><span>Contact</span>@if(request()->is('contact'))<i class="fas fa-check ml-auto text-red-600 text-xs"></i>@endif</a></li>
                </ul>
                
                <a href="/enroll" class="mobile-nav-link block bg-yellow-500 text-white w-full py-3 rounded-lg text-center font-semibold hover:bg-yellow-400 transition mt-4 {{ request()->is('enroll') ? 'bg-yellow-600 ring-2 ring-yellow-300' : '' }}" data-bypass="true">
                    <i class="fas fa-user-plus mr-2"></i>Apply Now
                </a>
            </div>
        </div>
    </div>
</div>

<!-- TOP BAR - Sticky on desktop only -->
<div class="bg-gradient-to-r from-red-700 to-red-800 text-white text-sm py-2.5 px-4 md:px-6 hidden lg:flex items-center justify-between top-0 z-40 shadow-md" style="position: sticky; top: 0;">
    <div class="flex items-center gap-5">
        <a href="tel:+265123456789" class="flex items-center gap-2 hover:text-red-200 transition"><i class="fas fa-phone-alt text-xs"></i><span>+265 991 887 119</span></a>
        <a href="mailto:info@sjoguniversity.com" class="flex items-center gap-2 hover:text-red-200 transition"><i class="fas fa-envelope text-xs"></i><span>collegehs@sjog.mw</span></a>
        <div class="flex items-center gap-2"><i class="fas fa-clock text-xs"></i><span>08:00 - 17:00</span></div>
    </div>
    
    <div class="flex items-center gap-4">
        <form action="#" method="GET" class="relative">
            <div class="relative">
                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm"></i>
                <input type="text" name="q" placeholder="Search..." value="{{ request()->get('q') }}" class="w-64 px-10 py-2 rounded-lg text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-400 bg-white/90 backdrop-blur-sm border-0">
            </div>
        </form>
        <a href="/enroll" class="bg-yellow-500 text-white hover:bg-yellow-400 px-5 py-2 rounded-lg font-semibold transition flex items-center gap-2 shadow-md"><i class="fas fa-user-plus"></i><span>Apply Now</span><i class="fas fa-arrow-right text-xs"></i></a>
        <a href="#" class="bg-white text-red-700 hover:bg-gray-100 px-4 py-2 rounded-lg font-semibold transition flex items-center gap-2 shadow-md"><i class="fas fa-user-graduate"></i><span>Portal Login</span><i class="fas fa-arrow-right text-xs"></i></a>
    </div>
</div>

<!-- MAIN NAVIGATION - Fixed Sticky -->
<nav class="bg-white px-4 md:px-6 py-4 flex justify-between items-center shadow z-30" style="position: sticky; top: 0; width: 100%; background-color: white;">
    <div class="flex items-center gap-3">
        <div class="w-10 h-10 md:w-14 md:h-14 lg:w-16 lg:h-16 rounded-full flex items-center justify-center overflow-hidden shadow-md">
            <img src="{{ asset('images/logo_stjohn.png') }}" alt="St John of God University Logo" class="w-full h-full object-cover">
        </div>
        <a href="/" class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl font-bold break-words whitespace-normal leading-tight text-gray-800 hover:text-red-700 transition">
            St John of God University
        </a>
    </div>
    
    <div class="flex items-center gap-4">
        <ul class="hidden lg:flex gap-4 xl:gap-8 font-medium items-center">
            <li><a href="/" class="nav-link transition text-sm xl:text-base whitespace-nowrap {{ request()->is('/') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">Home</a></li>
            <li><a href="/news" class="nav-link transition text-sm xl:text-base whitespace-nowrap {{ request()->is('news') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">News</a></li>
            <li><a href="/About" class="nav-link transition text-sm xl:text-base whitespace-nowrap {{ request()->is('about') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">About</a></li>
            <li><a href="/programs" class="nav-link transition text-sm xl:text-base whitespace-nowrap {{ request()->is('programs') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">Programs</a></li>
            <li><a href="/research" class="nav-link transition text-sm xl:text-base whitespace-nowrap {{ request()->is('research') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">Research</a></li>
            <li><a href="/students" class="nav-link transition text-sm xl:text-base whitespace-nowrap {{ request()->is('students') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">Students</a></li>
            <li><a href="/library" class="nav-link transition text-sm xl:text-base whitespace-nowrap {{ request()->is('library') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">Library</a></li>
            <li><a href="/contact" class="nav-link transition text-sm xl:text-base whitespace-nowrap {{ request()->is('contact') ? 'text-red-600 border-b-2 border-red-600 pb-1' : 'text-gray-700 hover:text-red-600' }}">Contact</a></li>
        </ul>
        
        <div class="flex items-center gap-3 lg:hidden">
            <button id="mobileSearchBtn" class="text-gray-700 hover:text-red-600 transition"><i class="fas fa-search text-xl"></i></button>
            <button id="hamburgerBtn" class="text-gray-700"><i class="fas fa-bars text-2xl"></i></button>
        </div>
    </div>
</nav>

<style>
    /* Ensure sticky positioning works on all browsers */
    nav {
        position: sticky !important;
        top: 0 !important;
        background-color: white !important;
        z-index: 30 !important;
    }
    
    /* For desktop when top bar is visible */
    @media (min-width: 1024px) {
        .top-bar-sticky {
            position: sticky !important;
            top: 0 !important;
        }
        
        nav {
            top: 42px !important;
        }
    }
    
    /* For tablet and mobile, nav stays at top */
    @media (max-width: 1023px) {
        nav {
            top: 0 !important;
        }
    }
    
    /* Scroll margin for anchor links */
    section[id] {
        scroll-margin-top: 100px;
    }
    
    @media (min-width: 1024px) {
        section[id] {
            scroll-margin-top: 130px;
        }
    }
    
    @media (max-width: 1023px) {
        section[id] {
            scroll-margin-top: 80px;
        }
    }
    
    /* Mobile Menu Base Styles */
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
    
    /* Desktop styles */
    @media (min-width: 1024px) {
        .mobile-menu, .overlay.active {
            display: none;
        }
    }
    
    /* Tablet & Mobile styles */
    @media (max-width: 1023px) {
        .lg\:flex {
            display: none !important;
        }
        .lg\:hidden {
            display: flex !important;
        }
    }
    
    /* Tablet adjustments */
    @media (min-width: 768px) and (max-width: 1023px) {
        nav .flex.items-center.gap-3 a {
            font-size: 1rem;
        }
        .w-10.h-10.md\:w-14.md\:h-14 {
            width: 3rem;
            height: 3rem;
        }
    }
    
    /* Mobile adjustments */
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
    
    /* Nav link styles */
    .nav-link {
        transition: all 0.3s ease;
    }
    
    .border-b-2 {
        transition: all 0.3s ease;
    }
    
    /* Mobile Menu Scroll Fix */
    .mobile-menu .flex-1 {
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        flex: 1;
        min-height: 0;
    }
    
    .mobile-menu .flex-1 .p-6 {
        padding-bottom: 80px;
    }
    
    .mobile-menu .p-6 {
        padding-top: 0.75rem;
    }
    
    .mobile-menu .space-y-3 > :not([hidden]) ~ :not([hidden]) {
        margin-top: 0.5rem;
    }
    
    .mobile-menu .mb-6 {
        margin-bottom: 0.75rem;
    }
    
    .mobile-menu .pb-6 {
        padding-bottom: 0.75rem;
    }
    
    @media (max-height: 700px) {
        .mobile-menu .flex-1 .p-6 {
            padding-bottom: 60px;
        }
        .mobile-menu .p-6 {
            padding-top: 0.5rem;
        }
    }
    
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
    
    @media (min-height: 800px) {
        .mobile-menu .flex-1 .p-6 {
            padding-bottom: 100px;
        }
    }
    
    @supports (padding-bottom: env(safe-area-inset-bottom)) {
        .mobile-menu .flex-1 .p-6 {
            padding-bottom: calc(80px + env(safe-area-inset-bottom));
        }
    }
</style>

<script>
    const mobileMenu = document.getElementById('mobileMenu');
    const overlay = document.getElementById('overlay');
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const closeMenuBtn = document.getElementById('closeMenu');
    const mobileSearchBtn = document.getElementById('mobileSearchBtn');
    
    let scrollPosition = 0;
    
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
                setTimeout(resolve, 300);
            } else {
                resolve();
            }
        });
    }
    
    if (hamburgerBtn) hamburgerBtn.addEventListener('click', openMobileMenu);
    if (closeMenuBtn) closeMenuBtn.addEventListener('click', () => closeMobileMenu());
    if (overlay) overlay.addEventListener('click', () => closeMobileMenu());
    
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileMenu && mobileMenu.classList.contains('active')) closeMobileMenu();
    });
    
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024 && mobileMenu && mobileMenu.classList.contains('active')) closeMobileMenu();
    });
    
    if (mobileSearchBtn) {
        mobileSearchBtn.addEventListener('click', () => {
            openMobileMenu();
            setTimeout(() => {
                const searchInput = mobileMenu.querySelector('input[type="text"]');
                if (searchInput) searchInput.focus();
            }, 300);
        });
    }
    
    document.querySelectorAll('.mobile-nav-link').forEach(link => {
        link.addEventListener('click', async (e) => {
            const href = link.getAttribute('href');
            if (!href || href === '#') {
                e.preventDefault();
                return;
            }
            e.preventDefault();
            await closeMobileMenu();
            if (href.startsWith('#')) {
                const targetElement = document.querySelector(href);
                if (targetElement) {
                    const offset = 100;
                    const position = targetElement.getBoundingClientRect().top + window.pageYOffset - offset;
                    window.scrollTo({ top: position, behavior: 'smooth' });
                }
            } else {
                window.location.href = href;
            }
        });
    });
</script>