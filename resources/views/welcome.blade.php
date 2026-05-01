@extends('layouts.app')

@section('title', 'Home - St John of God University')

@section('content')
    <!-- HERO SECTION WITH CAROUSEL -->
    <section id="Home" class="relative bg-black">
        <div class="relative h-[400px] md:h-[550px] lg:h-[600px] overflow-hidden">
            
            <!-- Slide 1 - Campus Excellence -->
            <div class="carousel-slide active" data-slide="0">
                <img src="{{ asset('images/carausel/carausel2.jpg') }}" class="w-full h-full object-cover object-center opacity-50">
                <div class="absolute inset-0 flex items-center">
                    <div class="text-left px-4 md:px-16 max-w-3xl">
                        <!-- Tagline -->
                        <div class="inline-block bg-red-600/80 backdrop-blur-sm rounded-full px-3 md:px-4 py-0.5 md:py-1 mb-3 md:mb-4">
                            <span class="text-white text-[10px] md:text-xs lg:text-sm font-semibold uppercase tracking-wide">Welcome to SJOGU</span>
                        </div>
                        <!-- Main Heading -->
                        <h3 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-2 md:mb-4 text-white leading-tight">
                            Where <span class="text-red-500 relative inline-block">Excellence 
                                <svg class="absolute -bottom-1 md:-bottom-2 left-0 w-full h-0.5 md:h-1" viewBox="0 0 100 4" preserveAspectRatio="none">
                                    <path d="M0,2 Q25,0 50,2 T100,2" stroke="#dc2626" stroke-width="2" fill="none"/>
                                </svg>
                            </span> 
                            <span class="text-white">Meets</span> 
                            <span class="text-red-500">Compassion</span>
                        </h3>
                        <!-- Description -->
                        <p class="text-xs sm:text-sm md:text-lg lg:text-xl text-gray-200 mb-4 md:mb-6 max-w-2xl leading-relaxed">
                            State-of-the-art facilities designed to shape the next generation of healthcare leaders
                        </p>
                        <!-- Buttons -->
                        <div class="flex flex-col sm:flex-row gap-2 md:gap-4">
                            <a href="{{ route('programs') }}" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-red-600 hover:bg-red-700 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition shadow-lg hover:shadow-xl text-xs md:text-base">
                                Explore Programs 
                                <i class="fas fa-arrow-right text-[10px] md:text-sm group-hover:translate-x-1 transition"></i>
                            </a>
                            <a href="{{ route('enroll') }}" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-white/10 backdrop-blur-sm border border-white/30 hover:bg-white/20 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition text-xs md:text-base">
                                Apply Now 
                                <i class="fas fa-user-graduate text-[10px] md:text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 - Student Life -->
            <div class="carousel-slide" data-slide="1">
                <img src="{{ asset('images/carausel/lib.jpg') }}" class="w-full h-full object-cover object-center opacity-50">
                <div class="absolute inset-0 flex items-center">
                    <div class="text-left px-4 md:px-16 max-w-3xl">
                        <div class="inline-block bg-red-600/80 backdrop-blur-sm rounded-full px-3 md:px-4 py-0.5 md:py-1 mb-3 md:mb-4">
                            <span class="text-white text-[10px] md:text-xs lg:text-sm font-semibold uppercase tracking-wide">Community & Growth</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-2 md:mb-4 text-white leading-tight">
                            Join a <span class="text-red-500">Vibrant</span><br>
                            <span class="text-white">Community of</span> 
                            <span class="text-red-500">Leaders</span>
                        </h3>
                        <p class="text-xs sm:text-sm md:text-lg lg:text-xl text-gray-200 mb-4 md:mb-6 max-w-2xl leading-relaxed">
                            Connect, grow, and thrive with fellow students from across Malawi and beyond
                        </p>
                        <div class="flex flex-col sm:flex-row gap-2 md:gap-4">
                            <a href="{{ route('students') }}" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-red-600 hover:bg-red-700 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition shadow-lg hover:shadow-xl text-xs md:text-base">
                                Student Life 
                                <i class="fas fa-users text-[10px] md:text-sm group-hover:translate-x-1 transition"></i>
                            </a>
                            <a href="{{ route('enroll') }}" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-white/10 backdrop-blur-sm border border-white/30 hover:bg-white/20 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition text-xs md:text-base">
                                Join Us 
                                <i class="fas fa-heart text-[10px] md:text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 3 - Academic Excellence -->
            <div class="carousel-slide" data-slide="2">
                <img src="{{ asset('images/carausel/carausel6.jpg') }}" class="w-full h-full object-cover object-center opacity-50">
                <div class="absolute inset-0 flex items-center">
                    <div class="text-left px-4 md:px-16 max-w-3xl">
                        <div class="inline-block bg-red-600/80 backdrop-blur-sm rounded-full px-3 md:px-4 py-0.5 md:py-1 mb-3 md:mb-4">
                            <span class="text-white text-[10px] md:text-xs lg:text-sm font-semibold uppercase tracking-wide">Academic Excellence</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-2 md:mb-4 text-white leading-tight">
                            Transform <span class="text-red-500">Your</span><br>
                            <span class="text-white">Future</span> 
                            <span class="text-red-500">Today</span>
                        </h3>
                        <p class="text-xs sm:text-sm md:text-lg lg:text-xl text-gray-200 mb-4 md:mb-6 max-w-2xl leading-relaxed">
                            World-class education with experienced faculty and hands-on clinical training
                        </p>
                        <div class="flex flex-col sm:flex-row gap-2 md:gap-4">
                            <a href="{{ route('programs') }}" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-red-600 hover:bg-red-700 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition shadow-lg hover:shadow-xl text-xs md:text-base">
                                View Programs 
                                <i class="fas fa-graduation-cap text-[10px] md:text-sm group-hover:translate-x-1 transition"></i>
                            </a>
                            <a href="{{ route('about') }}" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-white/10 backdrop-blur-sm border border-white/30 hover:bg-white/20 text-white px-3 md:px-8 py-1.5 md:py-3 rounded-lg font-semibold transition text-xs md:text-base">
                                Learn More 
                                <i class="fas fa-book-open text-[10px] md:text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 4 - Call to Action / Enrollment -->
            <div class="carousel-slide" data-slide="3">
                <img src="{{ asset('images/carausel/carausel_last.jpg') }}" class="w-full h-full object-cover object-center opacity-50">
                <div class="absolute inset-0 flex items-center">
                    <div class="text-left px-4 md:px-16 max-w-3xl">
                        <div class="inline-block bg-red-600/80 backdrop-blur-sm rounded-full px-3 md:px-4 py-0.5 md:py-1 mb-3 md:mb-4">
                            <span class="text-white text-[10px] md:text-xs lg:text-sm font-semibold uppercase tracking-wide">Limited Seats Available</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-2 md:mb-4 text-white leading-tight">
                            Your <span class="text-red-500">Journey</span><br>
                            <span class="text-white">Starts</span> 
                            <span class="text-red-500">Here</span>
                        </h3>
                        <p class="text-xs sm:text-sm md:text-lg lg:text-xl text-gray-200 mb-4 md:mb-6 max-w-2xl leading-relaxed">
                            Take the first step toward a rewarding career in healthcare. Applications for 2025/2026 are now open.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-2 md:gap-4">
                            <a href="{{ route('enroll') }}" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-red-600 hover:bg-red-700 text-white px-3 md:px-8 py-2 md:py-3.5 rounded-lg font-semibold transition shadow-lg hover:shadow-xl text-xs md:text-lg">
                                Enroll Now 
                                <i class="fas fa-arrow-right text-[10px] md:text-sm group-hover:translate-x-1 transition"></i>
                            </a>
                            <a href="{{ route('contact') }}" class="group inline-flex items-center justify-center gap-1 md:gap-2 bg-white/10 backdrop-blur-sm border border-white/30 hover:bg-white/20 text-white px-3 md:px-8 py-2 md:py-3.5 rounded-lg font-semibold transition text-xs md:text-lg">
                                Contact Us 
                                <i class="fas fa-envelope text-[10px] md:text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Carousel Buttons -->
            <button id="prevBtn" class="hidden md:flex absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white w-10 h-10 rounded-full items-center justify-center transition z-20 backdrop-blur-sm">
                <i class="fas fa-chevron-left text-lg"></i>
            </button>
            <button id="nextBtn" class="hidden md:flex absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white w-10 h-10 rounded-full items-center justify-center transition z-20 backdrop-blur-sm">
                <i class="fas fa-chevron-right text-lg"></i>
            </button>
            
            <!-- Dots -->
            <div class="absolute bottom-4 md:bottom-6 left-1/2 -translate-x-1/2 flex gap-2 md:gap-3 z-20">
                <button class="dot w-2 h-2 md:w-3 md:h-3 rounded-full bg-white/50 hover:bg-white transition-all" data-dot="0"></button>
                <button class="dot w-2 h-2 md:w-3 md:h-3 rounded-full bg-white/50 hover:bg-white transition-all" data-dot="1"></button>
                <button class="dot w-2 h-2 md:w-3 md:h-3 rounded-full bg-white/50 hover:bg-white transition-all" data-dot="2"></button>
                <button class="dot w-2 h-2 md:w-3 md:h-3 rounded-full bg-white/50 hover:bg-white transition-all" data-dot="3"></button>
            </div>
        </div>
    </section>
    <!--Vs's Welcome Remarks-->
<section id="welcome" class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
    
        <div class="text-center mb-12">
            
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Vice Chancellor's <span class="text-red-600">Remarks</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full"></div>
            <p class="text-gray-500 max-w-2xl mx-auto mt-3">
                A warm welcome from the leader of our academic community
            </p>
        </div>

        <div class="grid md:grid-cols-12 gap-8 items-stretch">
            <!-- Left: Vice Chancellor's Photo -->
            <div class="md:col-span-5">
                <div class="relative">
                    <!-- Main Image - Responsive height: shorter on mobile, taller on desktop -->
                    <div class="rounded-2xl overflow-hidden shadow-xl">
                        <img src="{{ asset('images/staff/VC.jpg') }}" alt="Vice Chancellor - Charles Masulani Mwale, PhD" class="w-full h-[350px] md:h-[480px] object-cover object-top">
                    </div>
                    
                    <!-- Decorative Red Elements -->
                    <div class="absolute -bottom-3 -right-3 w-24 h-24 bg-red-600 rounded-2xl -z-10 hidden md:block"></div>
                    <div class="absolute -top-3 -left-3 w-20 h-20 bg-red-50 rounded-2xl -z-10 hidden md:block"></div>
                    
                    <!-- Quote Badge -->
                    <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm rounded-xl shadow-lg px-4 py-2 flex items-center gap-2">
                        <i class="fas fa-quote-left text-red-600 text-sm"></i>
                        <p class="text-xs font-semibold text-gray-700">Servant Leadership</p>
                    </div>

                    <!-- Years Badge -->
                    <div class="absolute top-4 right-4 bg-red-600 rounded-xl px-3 py-1.5 shadow-lg">
                        <p class="text-white text-xs font-bold">20+ Years</p>
                    </div>
                </div>
            </div>

            <!-- Right: Welcome Message Content -->
            <div class="md:col-span-7 flex flex-col justify-between">
                <div>
                    <!-- Name & Title -->
                    <div class="mb-5 text-center">
                        <div class="flex items-center justify-center gap-2 mb-1">
                            <i class="fas fa-crown text-yellow-500 text-xs"></i>
                            <span class="text-red-600 text-xs font-semibold uppercase tracking-wider">University Leadership</span>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-800">Dr. Charles Masulani Mwale</h3>
                        <div class="flex items-center justify-center gap-3 mt-1 flex-wrap">
                            <p class="text-red-600 font-semibold">Vice Chancellor</p>
                            <span class="text-gray-300">|</span>
                            <div class="flex items-center gap-1">
                                <i class="fas fa-graduation-cap text-gray-400 text-xs"></i>
                                <span class="text-gray-500 text-sm">PhD, MSc, BSc</span>
                            </div>
                        </div>
                    </div>
                    

                    <!-- Welcome Message Text - All text now centered -->
                    <div class="space-y-3 text-gray-600 leading-relaxed text-[15px] text-center">
                        <p class="flex items-center justify-center gap-2">
                            <i class="fas fa-envelope-open-text text-red-500 text-xs"></i>
                            <span class="font-medium text-gray-700">Dear Prospective Students, Parents, and Partners,</span>
                        </p>
                        <p class="text-center">
                            It is my distinct honor and privilege to welcome you to <span class="font-semibold text-gray-800">St. John of God University (SJOGU)</span>. 
                            As an institution rooted in the rich tradition of the Hospitaller Order of St. John of God, 
                            we are committed to providing a transformative educational experience that blends academic 
                            excellence with compassionate service.
                        </p>
                        <p class="text-center">
                            At SJOGU, we believe that true education goes beyond textbooks and lectures. It is about nurturing 
                            the whole person — intellectually, spiritually, and professionally. Our programs are designed to 
                            equip you with the knowledge, skills, and values necessary to become a competent healthcare 
                            professional who serves with dignity, respect, and compassion.
                        </p>
                        <p class="text-center">
                            Whether you are joining us for the first time or continuing your academic journey, you will find 
                            a supportive community dedicated to your success. Our experienced faculty, modern facilities, 
                            and strong partnerships with healthcare institutions ensure that you receive a world-class 
                            education right here in Malawi.
                        </p>
                        <div class="flex justify-center">
                            <p class="italic text-gray-700 border-l-2 border-red-600 pl-3 inline-block text-center max-w-lg">
                                I invite you to explore all that SJOGU has to offer. Together, let us build a healthier, 
                                more compassionate future for our communities and beyond.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Call to Action Buttons + Signature - Centered -->
                <div>
                    <div class="mt-6 flex flex-wrap gap-3 justify-center">
                        <a href="#about" class="bg-red-600 text-white px-5 py-2.5 rounded-xl font-semibold hover:bg-red-700 transition flex items-center gap-2 shadow-md">
                            Learn More <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                        <a href="#Enroll" class="border-2 border-red-600 text-red-600 px-5 py-2.5 rounded-xl font-semibold hover:bg-red-600 hover:text-white transition flex items-center gap-2">
                            Apply Now <i class="fas fa-user-graduate text-xs"></i>
                        </a>
                    </div>

                    <!-- Signature Line - Centered -->
                    <div class="mt-5 pt-4 border-t border-gray-100">
                        <div class="flex items-center justify-center gap-3">
                            <div class="w-8 h-8 bg-red-50 rounded-full flex items-center justify-center">
                                <i class="fas fa-pen-fancy text-red-500 text-sm"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-gray-800 font-semibold text-sm">Dr. Charles Masulani Mwale, PhD</p>
                                <p class="text-gray-400 text-xs">Vice Chancellor, St John of God University</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</section>
    
   
    <!-- NEWS & ANNOUNCEMENTS SECTION -->
    <section id="News" class="py-16 px-4 md:px-16 bg-gray-50">
        <div class="container mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">News & <span class="text-red-600">Announcements</span></h2>
                <p class="text-red-600 font-semibold mb-2 uppercase tracking-wide text-sm">Stay Updated</p>
                <p class="text-gray-600 text-sm max-w-2xl mx-auto">
                    Latest updates, events, and important information from St John of God University
                </p>
            </div>

            <div class="grid md:grid-cols-12 gap-5">
                <!-- COLUMN 1: Important Dates & Announcements -->
                <div class="md:col-span-3">
                    <div class="bg-white rounded-lg shadow-md border border-gray-100 p-3 mb-5">
                        <h3 class="font-bold text-gray-800 mb-2 flex items-center gap-2 text-sm">
                            <i class="fas fa-calendar-alt text-red-600"></i> Important Dates
                        </h3>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center text-xs">
                                <span class="text-gray-600">Registration Deadline</span>
                                <span class="font-semibold text-gray-800">April 15</span>
                            </div>
                            <div class="flex justify-between items-center text-xs">
                                <span class="text-gray-600">Mid-Semester Exams</span>
                                <span class="font-semibold text-gray-800">May 5-10</span>
                            </div>
                            <div class="flex justify-between items-center text-xs">
                                <span class="text-gray-600">Graduation Ceremony</span>
                                <span class="font-semibold text-gray-800">June 28</span>
                            </div>
                            <div class="flex justify-between items-center text-xs">
                                <span class="text-gray-600">Orientation</span>
                                <span class="font-semibold text-gray-800">July 15-17</span>
                            </div>
                        </div>
                    </div>

                    <!-- Announcements -->
                    <div class="bg-white rounded-lg shadow-md border border-gray-100">
                        <div class="bg-red-600 text-white px-3 py-2 rounded-t-lg">
                            <h3 class="font-bold text-sm flex items-center gap-2">
                                <i class="fas fa-bullhorn text-xs"></i> Announcements
                            </h3>
                        </div>
                        <div class="divide-y divide-gray-100">
                            <div class="p-2 hover:bg-gray-50 transition">
                                <div class="flex items-start gap-2">
                                    <div class="w-6 h-6 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-calendar-check text-red-600 text-xs"></i>
                                    </div>
                                    <div>
                                        <p class="text-xs font-semibold text-gray-800">Mid-Semester Break</p>
                                        <p class="text-xs text-gray-500">April 20-28</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 hover:bg-gray-50 transition">
                                <div class="flex items-start gap-2">
                                    <div class="w-6 h-6 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-file-alt text-red-600 text-xs"></i>
                                    </div>
                                    <div>
                                        <p class="text-xs font-semibold text-gray-800">Scholarship Open</p>
                                        <p class="text-xs text-gray-500">Deadline: April 30</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 hover:bg-gray-50 transition">
                                <div class="flex items-start gap-2">
                                    <div class="w-6 h-6 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-chalkboard-teacher text-red-600 text-xs"></i>
                                    </div>
                                    <div>
                                        <p class="text-xs font-semibold text-gray-800">Guest Lecture</p>
                                        <p class="text-xs text-gray-500">April 12, 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 border-t">
                            <a href="{{ route('news') }}" class="block text-center text-red-600 font-semibold text-xs hover:text-red-700 transition">
                                View All →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- COLUMN 2: News Article 1 -->
                <div class="md:col-span-3">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100 h-full">
                        <img src="{{ asset('images/graduation.jpg') }}" alt="Graduation" class="w-full h-32 object-cover">
                        <div class="p-3">
                            <div class="flex items-center gap-2 text-xs text-gray-500 mb-1">
                                <span><i class="far fa-calendar-alt mr-1"></i> March 15, 2026</span>
                                <span class="bg-red-100 text-red-600 px-1.5 py-0.5 rounded text-xs">Featured</span>
                            </div>
                            <h3 class="text-sm font-bold text-gray-800 mb-1">18th Graduation Ceremony</h3>
                            <p class="text-gray-600 text-xs mb-2">The university announces its 18th graduation ceremony scheduled for June 2024.</p>
                            <a href="{{ route('news.show', '18th-graduation-ceremony') }}" class="text-red-600 text-xs font-semibold hover:text-red-700 transition inline-flex items-center gap-1">
                                Read More <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- COLUMN 3: News Article 2 -->
                <div class="md:col-span-3">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100 h-full">
                        <img src="{{ asset('images/research.jpeg') }}" alt="Research" class="w-full h-32 object-cover">
                        <div class="p-3">
                            <div class="flex items-center gap-2 text-xs text-gray-500 mb-1">
                                <span><i class="far fa-calendar-alt mr-1"></i> April 5, 2026</span>
                                <span class="bg-green-100 text-green-600 px-1.5 py-0.5 rounded text-xs">Event</span>
                            </div>
                            <h3 class="text-sm font-bold text-gray-800 mb-1">Research Conference 2024</h3>
                            <p class="text-gray-600 text-xs mb-2">Join us for the annual International Research Conference.</p>
                            <a href="{{ route('news.show', 'research-conference-2024') }}" class="text-red-600 text-xs font-semibold hover:text-red-700 transition inline-flex items-center gap-1">
                                Read More <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- COLUMN 4: News Article 3 -->
                <div class="md:col-span-3">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100 h-full">
                        <img src="{{ asset('images/news2.jpg') }}" alt="Admissions" class="w-full h-32 object-cover">
                        <div class="p-3">
                            <div class="flex items-center gap-2 text-xs text-gray-500 mb-1">
                                <span><i class="far fa-calendar-alt mr-1"></i> March 10, 2026</span>
                                <span class="bg-blue-100 text-blue-600 px-1.5 py-0.5 rounded text-xs">Important</span>
                            </div>
                            <h3 class="text-sm font-bold text-gray-800 mb-1">Applications Open 2026/27</h3>
                            <p class="text-gray-600 text-xs mb-2">Applications now open for the upcoming academic year.</p>
                            <a href="{{ route('news.show', 'applications-open-2026-27') }}" class="text-red-600 text-xs font-semibold hover:text-red-700 transition inline-flex items-center gap-1">
                                Read More <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Button -->
            <div class="text-center mt-10">
                <a href="{{ route('news') }}" class="inline-block bg-red-600 text-white px-6 py-2 rounded-lg font-semibold text-sm hover:bg-red-700 transition">
                    View All News & Announcements
                </a>
            </div>
        </div>
    </section>
   
    <!-- ABOUT SECTION -->
<section id="about" class="py-16 px-4 md:px-16 bg-red-700">
    <div class="grid md:grid-cols-2 gap-8 md:gap-10 items-center">

        <!-- LEFT: IMAGE -->
        <div class="relative flex justify-center md:justify-start">
            <div class="w-full md:w-auto">
                <img src="{{ asset('images/carausel/admin_block.jpg') }}"
                    class="w-full md:w-[450px] lg:w-[500px] h-[300px] md:h-[420px] object-cover rounded-xl shadow-lg mx-auto md:mx-0">
                
                <div class="absolute bottom-4 left-4 md:bottom-5 md:left-5 bg-white px-4 md:px-5 py-2 md:py-3 shadow rounded">
                    <h3 class="text-lg md:text-xl font-bold text-red-600">20+</h3>
                    <p class="text-xs md:text-sm text-gray-600">Years of Excellence</p>
                </div>
            </div>
        </div>

        <!-- RIGHT: CONTENT -->
        <div class="text-center">
            <h2 class="text-2xl md:text-4xl font-bold mb-4 text-white">
                About St John Of God <span class="text-yellow-300">University</span>
            </h2>

            <p class="text-sm md:text-base text-red-100 mb-4 leading-relaxed">
                St. John of God University (SJOGU) is a training institution of higher learning for health professionals 
                in Malawi and its neighboring countries since its inception in 2003. The University is a member of 
                CHAM and operates under the proprietorship of Saint John of God Brothers of the Catholic church.
            </p>

            <p class="text-sm md:text-base text-red-100 mb-4 leading-relaxed">
                The University offers programmes accredited by the National Council of Higher Education (NCHE) and approved by 
                Nurses and Midwives Council of Malawi (NMCM) and Medical Council of Malawi (MCM).
            </p>

            <p class="text-sm md:text-base text-red-100 mb-6 leading-relaxed">
                SJOGU is committed to training highly qualified healthcare professionals and strives to be a Centre of 
                excellence in education, training, and research across Malawi and the sub-Saharan region.
            </p>
            
            <!-- Learn More Button -->
            <div class="mt-4">
                <a href="{{ route('about') }}" 
                   class="inline-flex items-center gap-2 bg-white text-red-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition shadow-md group">
                    <span>Learn More About SJOGU</span>
                    <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition"></i>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- FACTS, MISSION, VISION, VALUES SECTION -->
<section class="py-16 px-4 md:px-16 relative bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('images/students_2.jpeg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>
    
    <div class="container mx-auto relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">SJOGU by <span class="text-yellow-400">Numbers</span></h2>
            <p class="text-gray-300">Our impact in numbers</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">500+</div>
                <p class="text-gray-600">Active Students</p>
            </div>
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">10+</div>
                <p class="text-gray-600">Academic Programs</p>
            </div>
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">20+</div>
                <p class="text-gray-600">Qualified Lecturers</p>
            </div>
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 mb-2">5+</div>
                <p class="text-gray-600">Awards & Recognitions</p>
            </div>
        </div>

        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Our <span class="text-yellow-400">Foundation</span></h2>
            <p class="text-gray-300">Guiding principles that shape our institution</p>
        </div>
        <div class="grid md:grid-cols-4 gap-6">
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-5 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center mb-3 mx-auto">
                    <i class="fas fa-bullseye text-yellow-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Our Mission</h3>
                <p class="text-gray-600 text-xs leading-relaxed">
                    To Provide Quality and Holistic Teaching, Learning and Research in the manner of St John of God 
                </p>
            </div>

            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-5 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center mb-3 mx-auto">
                    <i class="fas fa-eye text-yellow-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Our Vision</h3>
                <p class="text-gray-600 text-xs leading-relaxed">
                    To become a center of excellence in academics and research in health and related fields whilst upholding Christian values
                </p>
            </div>

            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-5 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center mb-3 mx-auto">
                    <i class="fas fa-brain text-yellow-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Our Philosophy</h3>
                <p class="text-gray-600 text-xs leading-relaxed">
                    Upholds the philosophy of the Hospitaller Order of St John of God that promotes the Dignity of individuals
                </p>
            </div>

            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-lg p-5 text-center shadow-lg hover:shadow-xl transition hover:transform hover:scale-105">
                <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center mb-3 mx-auto">
                    <i class="fas fa-heart text-yellow-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Core Values</h3>
                <div class="grid grid-cols-2 gap-1">
                    <div class="flex items-center gap-1 justify-center">
                        <i class="fas fa-check-circle text-yellow-600 text-xs"></i>
                        <span class="text-gray-600 text-xs">Hospitality</span>
                    </div>
                    <div class="flex items-center gap-1 justify-center">
                        <i class="fas fa-check-circle text-yellow-600 text-xs"></i>
                        <span class="text-gray-600 text-xs">Compassion</span>
                    </div>
                    <div class="flex items-center gap-1 justify-center">
                        <i class="fas fa-check-circle text-yellow-600 text-xs"></i>
                        <span class="text-gray-600 text-xs">Respect</span>
                    </div>
                    <div class="flex items-center gap-1 justify-center">
                        <i class="fas fa-check-circle text-yellow-600 text-xs"></i>
                        <span class="text-gray-600 text-xs">Justice</span>
                    </div>
                    <div class="flex items-center gap-1 justify-center col-span-2">
                        <i class="fas fa-check-circle text-yellow-600 text-xs"></i>
                        <span class="text-gray-600 text-xs">Excellence</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- LEADERSHIP / EXECUTIVE STAFF SECTION -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <p class="text-red-600 font-semibold mb-2 uppercase tracking-wide">University Leadership</p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Executive <span class="text-red-600">Staff</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Meet the dedicated leaders guiding St John of God University towards excellence
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <!-- Vice Chancellor -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Vice Chancellor</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        <img src="{{ asset('images/staff/VC.jpg') }}" alt="Charles Masulani Mwale, PhD" class="w-full h-full object-cover">
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Dr. Charles Masulani Mwale, PhD</h4>
                    <p class="text-red-600 text-sm mb-3">Vice Chancellor</p>
                    <p class="text-gray-600 text-sm">Leading the university with vision and excellence in higher education.</p>
                </div>
            </div>

            <!-- Deputy Vice Chancellor -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Deputy Vice Chancellor</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        <img src="{{ asset('images/staff/DVC.jpg') }}" alt="Esmie Mkwinda, PhD" class="w-full h-full object-cover">
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Dr. Esmie Mkwinda, PhD</h4>
                    <p class="text-red-600 text-sm mb-3">Deputy Vice Chancellor</p>
                    <p class="text-gray-600 text-sm">Supporting the Vice Chancellor in academic and administrative leadership.</p>
                </div>
            </div>

            <!-- Dean of Faculty -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Dean of Faculty</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        <img src="{{ asset('images/staff/Dean of faculty.jpg') }}" alt="Chimwemwe Munthali" class="w-full h-full object-cover">
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Chimwemwe Munthali, Msc</h4>
                    <p class="text-red-600 text-sm mb-3">Dean of Faculty</p>
                    <p class="text-gray-600 text-sm">Overseeing academic programs and faculty development.</p>
                </div>
            </div>
        </div>

        <!-- View All Staff Button -->
        
        <div class="text-center mt-12">
            <a href="{{ route('staff') }}" class="inline-block border-2 border-red-600 text-red-600 px-8 py-3 rounded-lg font-semibold hover:bg-red-600 hover:text-white transition">
                View All Staff →
            </a>
        </div>
    </div>
</section>


<!-- ADMISSIONS SECTION - Red Background -->
<section id="Enroll" class="py-16 px-4 md:px-16 bg-red-700">

    <div class="container mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <p class="text-red-200 font-semibold mb-2 uppercase tracking-wide">Join Us</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Admissions <span class="text-yellow-300">2026/2027</span></h2>
            <p class="text-red-100 max-w-2xl mx-auto">
                Take the first step towards your future career in healthcare. Apply now to join our community of excellence.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Online Application Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2">
                <div class="bg-red-800 px-6 py-4">
                    <h3 class="text-xl font-bold text-white flex items-center gap-2">
                        <i class="fas fa-globe"></i> Apply Online
                    </h3>
                </div>
                <div class="p-6">
                    <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-laptop text-3xl text-red-600"></i>
                    </div>
                    <h4 class="text-lg font-bold text-gray-800 text-center mb-3">Online Application</h4>
                    <p class="text-gray-600 text-sm text-center mb-4">
                        Complete your application online in minutes. Upload required documents and submit digitally.
                    </p>
                    <ul class="text-sm text-gray-600 mb-6 space-y-2">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check-circle text-green-500 text-xs"></i>
                            <span>Easy step-by-step process</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check-circle text-green-500 text-xs"></i>
                            <span>Upload documents directly</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check-circle text-green-500 text-xs"></i>
                            <span>Track application status</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check-circle text-green-500 text-xs"></i>
                            <span>Receive instant confirmation</span>
                        </li>
                    </ul>
                    <a href="{{ route('enroll') }}" class="w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition flex items-center justify-center gap-2">
                        <i class="fas fa-arrow-right"></i> Apply Online Now
                    </a>
                </div>
            </div>

            <!-- Download Application Form Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2">
                <div class="bg-red-800 px-6 py-4">
                    <h3 class="text-xl font-bold text-white flex items-center gap-2">
                        <i class="fas fa-download"></i> Downloads
                    </h3>
                </div>
                <div class="p-6">
    <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mb-4 mx-auto">
        <i class="fas fa-download text-3xl text-red-600"></i>
    </div>
    <h4 class="text-lg font-bold text-gray-800 text-center mb-3">Downloads & Resources</h4>
    <p class="text-gray-600 text-sm text-center mb-4">
        Download application forms, fees structure, and other important documents.
    </p>
    <div class="space-y-3 mb-6">
        <div class="flex items-center justify-between gap-2 p-2 hover:bg-gray-50 rounded-lg transition">
            <div class="flex items-center gap-2">
                <i class="fas fa-file-pdf text-red-500 text-lg"></i>
                <span class="text-sm text-gray-700">Undergraduate Application Form</span>
            </div>
            <button onclick="downloadForm('undergraduate')" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-sm flex items-center gap-1 transition">
                <i class="fas fa-download text-xs"></i> Download
            </button>
        </div>
        <div class="flex items-center justify-between gap-2 p-2 hover:bg-gray-50 rounded-lg transition">
            <div class="flex items-center gap-2">
                <i class="fas fa-file-pdf text-red-500 text-lg"></i>
                <span class="text-sm text-gray-700">Postgraduate Application Form</span>
            </div>
            <button onclick="downloadForm('postgraduate')" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-sm flex items-center gap-1 transition">
                <i class="fas fa-download text-xs"></i> Download
            </button>
        </div>
        <div class="flex items-center justify-between gap-2 p-2 hover:bg-gray-50 rounded-lg transition">
            <div class="flex items-center gap-2">
                <i class="fas fa-file-pdf text-red-500 text-lg"></i>
                <span class="text-sm text-gray-700">International Student Application Form</span>
            </div>
            <button onclick="downloadForm('international')" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-sm flex items-center gap-1 transition">
                <i class="fas fa-download text-xs"></i> Download
            </button>
        </div>
        <div class="flex items-center justify-between gap-2 p-2 hover:bg-gray-50 rounded-lg transition">
            <div class="flex items-center gap-2">
                <i class="fas fa-file-invoice-dollar text-red-500 text-lg"></i>
                <span class="text-sm text-gray-700">Fees Structure 2026/2027</span>
            </div>
            <button onclick="downloadForm('fees')" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-sm flex items-center gap-1 transition">
                <i class="fas fa-download text-xs"></i> Download
            </button>
        </div>
        <div class="flex items-center justify-between gap-2 p-2 hover:bg-gray-50 rounded-lg transition">
            <div class="flex items-center gap-2">
                <i class="fas fa-file-pdf text-red-500 text-lg"></i>
                <span class="text-sm text-gray-700">Scholarship Application Form</span>
            </div>
            <button onclick="downloadForm('scholarship')" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-sm flex items-center gap-1 transition">
                <i class="fas fa-download text-xs"></i> Download
            </button>
        </div>
    </div>
    <div class="flex gap-3">
        <button onclick="downloadAllForms()" class="flex-1 bg-gray-800 text-white py-2 rounded-lg font-semibold hover:bg-gray-900 transition flex items-center justify-center gap-2 text-sm">
            <i class="fas fa-download"></i> Download All
        </button>
        <button onclick="viewAllForms()" class="flex-1 bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700 transition flex items-center justify-center gap-2 text-sm">
            <i class="fas fa-eye"></i> View All
        </button>
    </div>
</div>
               
</div>
</div>

        <!-- Additional Info -->
        <div class="mt-8 bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded">
            <div class="flex items-start gap-3">
                <i class="fas fa-info-circle text-yellow-600 mt-1"></i>
                <div>
                    <p class="text-sm text-gray-700">
                        <strong class="font-semibold">Application Deadline:</strong> May 31st, 2026
                    </p>
                    <p class="text-sm text-gray-600 mt-1">
                        For inquiries, contact admissions office: <strong>collegesh@sjog.mw</strong> or call <strong>+265 991 887 119</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Download functions for home page
    function downloadForm(formType) {
        alert(`Downloading ${formType} application form...\n\nPlease visit our Admissions page for full details.`);
    }
    
    function downloadAllForms() {
        alert('Downloading all application forms...\n\nPlease visit our Admissions page for full details.');
    }
    
    function viewAllForms() {
        alert('Viewing all forms...\n\nPlease visit our Admissions page to access all application forms.');
    }
</script>
<!--Research Hub-->
<section id="research" class="py-12 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-12 h-12 bg-red-100 rounded-xl mb-3">
                <i class="fas fa-flask text-red-600 text-xl"></i>
            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Research <span class="text-red-600">Hub</span></h2>
            <div class="w-16 h-0.5 bg-red-600 mx-auto rounded-full mb-3"></div>
            <p class="text-gray-500 max-w-2xl mx-auto text-sm">
                Advancing healthcare knowledge through innovative research and collaboration
            </p>
        </div>

        <!-- Research Stats Highlights -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
            <div class="bg-white rounded-lg p-3 text-center shadow-sm border border-gray-100">
                <i class="fas fa-file-alt text-red-600 text-xl mb-1"></i>
                <p class="text-lg font-bold text-gray-800">45+</p>
                <p class="text-gray-500 text-xs">Research Papers</p>
            </div>
            <div class="bg-white rounded-lg p-3 text-center shadow-sm border border-gray-100">
                <i class="fas fa-users text-red-600 text-xl mb-1"></i>
                <p class="text-lg font-bold text-gray-800">12+</p>
                <p class="text-gray-500 text-xs">Active Projects</p>
            </div>
            <div class="bg-white rounded-lg p-3 text-center shadow-sm border border-gray-100">
                <i class="fas fa-globe text-red-600 text-xl mb-1"></i>
                <p class="text-lg font-bold text-gray-800">8+</p>
                <p class="text-gray-500 text-xs">Collaborations</p>
            </div>
            <div class="bg-white rounded-lg p-3 text-center shadow-sm border border-gray-100">
                <i class="fas fa-chart-line text-red-600 text-xl mb-1"></i>
                <p class="text-lg font-bold text-gray-800">5+</p>
                <p class="text-gray-500 text-xs">Grants Funded</p>
            </div>
        </div>

        <!-- Research Message -->
        <div class="bg-gradient-to-r from-red-50 to-red-100 rounded-xl p-6 mb-8 border border-red-200">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-microscope text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">Active Research Departments</h3>
                        <p class="text-sm text-gray-600">Collaborative research initiatives across multiple disciplines</p>
                    </div>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-white px-3 py-1 rounded-full text-xs font-semibold text-red-600 shadow-sm">Clinical Medicine</span>
                    <span class="bg-white px-3 py-1 rounded-full text-xs font-semibold text-red-600 shadow-sm">Nursing & Midwifery</span>
                    <span class="bg-white px-3 py-1 rounded-full text-xs font-semibold text-red-600 shadow-sm">Psycho-Social Counselling</span>
                    <span class="bg-white px-3 py-1 rounded-full text-xs font-semibold text-red-600 shadow-sm">Public Health</span>
                </div>
            </div>
        </div>

        <!-- Research Areas by Department -->
        <div class="mb-8">
            <div class="text-center mb-6">
                <h3 class="text-xl font-bold text-gray-800">Research <span class="text-red-600">Departments</span></h3>
                <p class="text-gray-500 text-sm">Key research areas across our academic departments</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Department 1: Clinical Medicine -->
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition border-l-4 border-red-600">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fas fa-stethoscope text-red-600 text-lg"></i>
                        <h4 class="font-bold text-gray-800">Clinical Medicine</h4>
                    </div>
                    <p class="text-gray-600 text-xs leading-relaxed mb-2">
                        Infectious diseases, internal medicine, surgical innovations, and patient care optimization
                    </p>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Malaria Research</span>
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">HIV/AIDS</span>
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Tuberculosis</span>
                    </div>
                </div>

                <!-- Department 2: Nursing and Midwifery -->
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition border-l-4 border-red-600">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fas fa-hand-holding-heart text-red-600 text-lg"></i>
                        <h4 class="font-bold text-gray-800">Nursing & Midwifery</h4>
                    </div>
                    <p class="text-gray-600 text-xs leading-relaxed mb-2">
                        Maternal health, neonatal care, nursing education, and community health nursing
                    </p>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Maternal Health</span>
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Child Care</span>
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Nursing Education</span>
                    </div>
                </div>

                <!-- Department 3: Psycho-Social Counselling -->
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition border-l-4 border-red-600">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fas fa-brain text-red-600 text-lg"></i>
                        <h4 class="font-bold text-gray-800">Psycho-Social Counselling</h4>
                    </div>
                    <p class="text-gray-600 text-xs leading-relaxed mb-2">
                        Mental health, trauma counselling, substance abuse, and community psychosocial support
                    </p>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Mental Health</span>
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Trauma Care</span>
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Substance Abuse</span>
                    </div>
                </div>

                <!-- Department 4: Public Health -->
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition border-l-4 border-red-600">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fas fa-chart-bar text-red-600 text-lg"></i>
                        <h4 class="font-bold text-gray-800">Public Health</h4>
                    </div>
                    <p class="text-gray-600 text-xs leading-relaxed mb-2">
                        Epidemiology, health promotion, disease prevention, and health policy research
                    </p>
                    <div class="flex flex-wrap gap-1">
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Epidemiology</span>
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Health Policy</span>
                        <span class="bg-red-50 text-red-600 text-xs px-2 py-0.5 rounded">Disease Prevention</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Research Projects -->
        <!--<div class="mb-8">
            <div class="text-center mb-5">
                <h3 class="text-xl font-bold text-gray-800">Featured <span class="text-red-600">Research</span></h3>
                <div class="w-12 h-0.5 bg-red-600 mx-auto mt-1 rounded-full"></div>
                <p class="text-gray-500 text-xs mt-2">Highlighted ongoing and completed research projects</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-4">
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-microscope text-red-600 text-base"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 text-sm">Malaria Prevention in Rural Communities</h4>
                            <p class="text-gray-500 text-xs mt-1">Department of Public Health</p>
                            <p class="text-gray-400 text-xs mt-1">Investigating effective prevention strategies in rural Malawi</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-heartbeat text-red-600 text-base"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 text-sm">Maternal Mortality Reduction</h4>
                            <p class="text-gray-500 text-xs mt-1">Dept of Nursing & Midwifery</p>
                            <p class="text-gray-400 text-xs mt-1">Research on interventions to reduce maternal deaths</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-hand-holding-heart text-red-600 text-base"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 text-sm">Youth Mental Health Awareness</h4>
                            <p class="text-gray-500 text-xs mt-1">Dept of Psycho-Social Counselling</p>
                            <p class="text-gray-400 text-xs mt-1">Addressing mental health challenges among youth</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

        <!-- View More Button -->
        <div class="text-center">
            <a href="{{ route('research') }}" class="inline-flex items-center gap-2 bg-red-600 text-white px-6 py-2.5 rounded-lg font-semibold hover:bg-red-700 transition shadow-md">
                <i class="fas fa-search"></i>
                View More Research
                <i class="fas fa-arrow-right text-sm"></i>
            </a>
        </div>
    </div>
</section>


<!--Students section -->
<section id="students" class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <p class="text-red-600 font-semibold mb-2 uppercase tracking-wide">For Current Students</p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Student <span class="text-red-600">Life</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Everything you need for a successful and enjoyable university experience
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center mb-12">
            <!-- Left: Picture -->
            <div class="relative">
                <img src="{{ asset('images/carausel/carausel1.jpg') }}" alt="Students on campus" class="rounded-lg shadow-xl w-full h-[400px] object-cover">
                <div class="absolute -bottom-5 -left-5 bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg">
                    <p class="text-2xl font-bold">500+</p>
                    <p class="text-sm">Active Students</p>
                </div>
            </div>

            <!-- Right: Quick Access -->
            <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Quick Access</h3>
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <a href="#" class="bg-white rounded-lg p-4 text-center hover:shadow-md transition border border-gray-100">
                        <i class="fas fa-user-graduate text-red-600 text-2xl mb-2"></i>
                        <p class="font-semibold text-gray-800 text-sm">Student Portal</p>
                    </a>
                    <a href="#" class="bg-white rounded-lg p-4 text-center hover:shadow-md transition border border-gray-100">
                        <i class="fas fa-calendar-alt text-red-600 text-2xl mb-2"></i>
                        <p class="font-semibold text-gray-800 text-sm">Academic Calendar</p>
                    </a>
                    
                    <a href="#" class="bg-white rounded-lg p-4 text-center hover:shadow-md transition border border-gray-100">
                        <i class="fas fa-credit-card text-red-600 text-2xl mb-2"></i>
                        <p class="font-semibold text-gray-800 text-sm">Fee Payment</p>
                    </a>
                </div>
                <div class="bg-white rounded-lg p-5 border border-gray-100">
                    <div class="flex items-center gap-3 mb-3">
                        <i class="fas fa-headset text-red-600 text-xl"></i>
                        <span class="font-semibold text-gray-800">Need Help?</span>
                    </div>
                    <p class="text-gray-600 text-sm">Contact Student Affairs Office: <strong>+265 123 456 789</strong></p>
                    <p class="text-gray-600 text-sm mt-1">Email: <strong>students@sjogu.edu</strong></p>
                </div>
            </div>
        </div>

        <!-- Three Main Sections: Accommodation, Student Council, Things to Do -->
        <div class="grid md:grid-cols-3 gap-6 mb-12">
            <!-- Accommodation -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="{{ asset('images/carausel/accomodation.jpg') }}" alt="Student Accommodation" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <i class="fas fa-home text-red-600 text-xl"></i>
                        <h3 class="text-xl font-bold text-gray-800">Accommodation</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Comfortable and affordable on-campus housing with modern amenities. Safe and conducive environment for learning.</p>
                    <ul class="space-y-2 text-sm text-gray-600 mb-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Single & Shared Rooms</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> 24/7 Security</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Common Areas & Study Rooms</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Affordable Rates</li>
                    </ul>
                    <a href="#" class="text-red-600 font-semibold text-sm hover:underline inline-flex items-center gap-1">
                        Apply for Accomodation <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Student Council -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="{{ asset('images/carausel/counsel.jpg') }}" alt="Student Council" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <i class="fas fa-users text-red-600 text-xl"></i>
                        <h3 class="text-xl font-bold text-gray-800">Student Council</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Your voice matters! The Student Council represents student interests and organizes campus activities.</p>
                    <ul class="space-y-2 text-sm text-gray-600 mb-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Student Representatives</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Monthly Meetings</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Event Planning</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Student Welfare</li>
                    </ul>
                    <a href="#" class="text-red-600 font-semibold text-sm hover:underline inline-flex items-center gap-1">
                        Meet Your Representatives <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Things to Do -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="{{ asset('images/sports.jpeg') }}" alt="Things to Do" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <i class="fas fa-calendar-week text-red-600 text-xl"></i>
                        <h3 class="text-xl font-bold text-gray-800">Things to Do</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Explore campus life beyond the classroom. Join clubs, attend events, and make lasting memories.</p>
                    <ul class="space-y-2 text-sm text-gray-600 mb-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Sports & Recreation</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Cultural Events</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Student Clubs (20+)</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500 text-xs"></i> Weekly Social Events</li>
                    </ul>
                    <a href="#" class="text-red-600 font-semibold text-sm hover:underline inline-flex items-center gap-1">
                        View Activities <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional Student Resources -->
        <div class="grid md:grid-cols-5 gap-4 mb-8">
    <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition">
        <i class="fas fa-futbol text-red-600 text-2xl mb-2"></i>
        <p class="font-medium text-gray-800 text-sm">Sports</p>
    </div>
    <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition">
        <i class="fas fa-music text-red-600 text-2xl mb-2"></i>
        <p class="font-medium text-gray-800 text-sm">Music & Arts</p>
    </div>
    <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition">
        <i class="fas fa-handshake text-red-600 text-2xl mb-2"></i>
        <p class="font-medium text-gray-800 text-sm">Volunteer Programs</p>
    </div>
    <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition">
        <i class="fas fa-heart text-red-600 text-2xl mb-2"></i>
        <p class="font-medium text-gray-800 text-sm">Psychosocial Support</p>
    </div>
    <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition">
        <i class="fas fa-church text-red-600 text-2xl mb-2"></i>
        <p class="font-medium text-gray-800 text-sm">Chaplaincy</p>
    </div>
</div>
      

        <!-- View More Button - Links to Students Page -->
        <div class="text-center">
            <a href="{{ route('students') }}" class="inline-flex items-center gap-2 bg-red-600 text-white px-6 py-2.5 rounded-lg font-semibold hover:bg-red-700 transition shadow-md">
                <i class="fas fa-graduation-cap"></i>
                View More About Student Life
                <i class="fas fa-arrow-right text-sm"></i>
            </a>
        </div>
    </div>
</section>

<!--library section-->
<section id="library" class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <p class="text-red-600 font-semibold mb-2 uppercase tracking-wide">Knowledge Hub</p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">The Miles Crofton <span class="text-red-600">Library</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Your gateway to knowledge, research, and academic excellence
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Left: Image -->
            <div class="relative">
                <img src="{{ asset('images/carausel/library1.jpg') }}" alt="The Miles Crofton Library" class="rounded-lg shadow-xl w-full h-[400px] object-cover">
                <div class="absolute -bottom-5 -right-5 bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg">
                    <p class="text-2xl font-bold">20,000+</p>
                    <p class="text-sm">Books & Resources</p>
                </div>
            </div>

            <!-- Right: Content -->
            <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Discover The Miles Crofton Library</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    The Miles Crofton Library at St John of God University is a modern, well-equipped facility named in honor of a distinguished benefactor. Designed to support your academic journey, it offers thousands of books, journals, and digital resources in a conducive environment for learning and research.
                </p>
                
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-book text-red-600 text-xl"></i>
                        <span class="text-gray-700 text-sm">Print Books</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-laptop text-red-600 text-xl"></i>
                        <span class="text-gray-700 text-sm">E-Resources</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-journal-whills text-red-600 text-xl"></i>
                        <span class="text-gray-700 text-sm">Journals</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-wifi text-red-600 text-xl"></i>
                        <span class="text-gray-700 text-sm">Free Wi-Fi</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-clock text-red-600 text-xl"></i>
                        <span class="text-gray-700 text-sm">Extended Hours</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-users text-red-600 text-xl"></i>
                        <span class="text-gray-700 text-sm">Study Rooms</span>
                    </div>
                </div>

                <a href="{{ route('library') }}" class="inline-block bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition">
                    View Library Details →
                </a>
            </div>
        </div>

        <!-- Library Services -->
             <div class="grid md:grid-cols-3 gap-6 mt-12">
            <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-search text-red-600 text-2xl"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-800 mb-2">Catalogs</h4>
                <p class="text-gray-600 text-sm">Search our catalog for books, journals, and research materials</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-database text-red-600 text-2xl"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-800 mb-2">Archives</h4>
                <p class="text-gray-600 text-sm">Access past exam papers, thesis, and institutional repositories</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-chalkboard-user text-red-600 text-2xl"></i>
                </div>
                <h4 class="text-lg font-bold text-gray-800 mb-2">Research Support</h4>
                <p class="text-gray-600 text-sm">Get help from our librarians for your research projects</p>
            </div>
        </div>

        <!-- Library Hours -->
        <div class="mt-12 bg-white rounded-lg shadow-md p-6">
            <div class="text-center mb-6">
                <h3 class="text-xl font-bold text-gray-800">Library Hours</h3>
                <p class="text-sm text-gray-500 mt-1">The Miles Crofton Library</p>
            </div>
            <div class="grid md:grid-cols-2 gap-4 max-w-2xl mx-auto">
                <div class="flex justify-between items-center border-b pb-2">
                    <span class="text-gray-600">Monday - Friday</span>
                    <span class="font-semibold text-gray-800">8:00 AM - 10:00 PM</span>
                </div>
                <div class="flex justify-between items-center border-b pb-2">
                    <span class="text-gray-600">Saturday</span>
                    <span class="font-semibold text-gray-800">9:00 AM - 6:00 PM</span>
                </div>
                <div class="flex justify-between items-center border-b pb-2">
                    <span class="text-gray-600">Sunday</span>
                    <span class="font-semibold text-gray-800">2:00 PM - 8:00 PM</span>
                </div>
                <div class="flex justify-between items-center border-b pb-2">
                    <span class="text-gray-600">Public Holidays</span>
                    <span class="font-semibold text-gray-800">Closed</span>
                </div>
            </div>
            <div class="text-center mt-4">
                <p class="text-sm text-gray-500">
                    <i class="fas fa-phone-alt mr-2"></i> Library Help Desk: +265 123 456 789
                </p>
            </div>
        </div>
        
        <!-- View More Button -->
        <div class="text-center mt-8">
            <a href="{{ route('library') }}" class="inline-flex items-center gap-2 bg-red-600 text-white px-6 py-2.5 rounded-lg font-semibold hover:bg-red-700 transition shadow-md">
                <i class="fas fa-book"></i>
                Explore Library Resources
                <i class="fas fa-arrow-right text-sm"></i>
            </a>
        </div>
    </div>
</section>

<!--University Partner-->
<section id="partners" class="py-16 px-4 md:px-16 bg-red-700">
    <div class="container mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-12 h-12 bg-white/20 rounded-2xl mb-3">
                <i class="fas fa-handshake text-white text-xl"></i>
            </div>
            <p class="text-red-100 font-semibold mb-2 uppercase tracking-wide">Our Collaborators</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Trusted <span class="text-yellow-300">Partners</span></h2>
            <div class="w-20 h-1 bg-yellow-300 mx-auto rounded-full"></div>
            <p class="text-red-100 max-w-2xl mx-auto mt-3">
                Working together to advance healthcare education and research
            </p>
        </div>

        <!-- Partners Grid - Centered -->
        <div class="flex justify-center">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 xl:grid-cols-6 gap-4 md:gap-6 max-w-7xl">
                
                <!-- Partner 1 - CHAM -->
                <div class="w-[120px] sm:w-[130px] md:w-[140px] bg-white rounded-xl shadow-md hover:shadow-lg transition p-3 text-center group hover:-translate-y-1 mx-auto">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto mb-2 flex items-center justify-center bg-gray-50 rounded-lg p-2">
                        <img src="{{ asset('images/parteners/christian health association.jpeg') }}" 
                             alt="CHAM"
                             class="max-w-full max-h-full object-contain group-hover:scale-105 transition">
                    </div>
                    <h3 class="font-semibold text-gray-800 text-xs md:text-sm">CHAM</h3>
                    <p class="text-gray-400 text-[10px] md:text-xs mt-0.5 leading-tight">Christian Health Association</p>
                </div>

                <!-- Partner 2 - Seed Global Health -->
                <div class="w-[120px] sm:w-[130px] md:w-[140px] bg-white rounded-xl shadow-md hover:shadow-lg transition p-3 text-center group hover:-translate-y-1 mx-auto">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto mb-2 flex items-center justify-center bg-gray-50 rounded-lg p-2">
                        <img src="{{ asset('images/parteners/seed health.jpeg') }}" 
                             alt="Seed Global Health"
                             class="max-w-full max-h-full object-contain group-hover:scale-105 transition">
                    </div>
                    <h3 class="font-semibold text-gray-800 text-xs md:text-sm">Seed Global Health</h3>
                    <p class="text-gray-400 text-[10px] md:text-xs mt-0.5 leading-tight">Health Workforce</p>
                </div>

                <!-- Partner 3 - GAIA -->
                <div class="w-[120px] sm:w-[130px] md:w-[140px] bg-white rounded-xl shadow-md hover:shadow-lg transition p-3 text-center group hover:-translate-y-1 mx-auto">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto mb-2 flex items-center justify-center bg-gray-50 rounded-lg p-2">
                        <img src="{{ asset('images/parteners/Global health.jpeg') }}" 
                             alt="GAIA"
                             class="max-w-full max-h-full object-contain group-hover:scale-105 transition">
                    </div>
                    <h3 class="font-semibold text-gray-800 text-xs md:text-sm">GAIA</h3>
                    <p class="text-gray-400 text-[10px] md:text-xs mt-0.5 leading-tight">Global Health</p>
                </div>

                <!-- Partner 4 - Uniservitate -->
                <div class="w-[120px] sm:w-[130px] md:w-[140px] bg-white rounded-xl shadow-md hover:shadow-lg transition p-3 text-center group hover:-translate-y-1 mx-auto">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto mb-2 flex items-center justify-center bg-gray-50 rounded-lg p-2">
                        <img src="{{ asset('images/parteners/service_learning.png') }}" 
                             alt="Uniservitate"
                             class="max-w-full max-h-full object-contain group-hover:scale-105 transition">
                    </div>
                    <h3 class="font-semibold text-gray-800 text-xs md:text-sm">Uniservitate</h3>
                    <p class="text-gray-400 text-[10px] md:text-xs mt-0.5 leading-tight">Service Learning</p>
                </div>

                <!-- Partner 5 - Medic to Medic -->
                <div class="w-[120px] sm:w-[130px] md:w-[140px] bg-white rounded-xl shadow-md hover:shadow-lg transition p-3 text-center group hover:-translate-y-1 mx-auto">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto mb-2 flex items-center justify-center bg-gray-50 rounded-lg p-2">
                        <img src="{{ asset('images/parteners/medic to medic.jpeg') }}" 
                             alt="Medic to Medic"
                             class="max-w-full max-h-full object-contain group-hover:scale-105 transition">
                    </div>
                    <h3 class="font-semibold text-gray-800 text-xs md:text-sm">Medic to Medic</h3>
                    <p class="text-gray-400 text-[10px] md:text-xs mt-0.5 leading-tight">Medical Education Support</p>
                </div>

                <!-- Partner 6 - Book Aid International -->
                <div class="w-[120px] sm:w-[130px] md:w-[140px] bg-white rounded-xl shadow-md hover:shadow-lg transition p-3 text-center group hover:-translate-y-1 mx-auto">
                    <div class="w-16 h-16 md:w-20 md:h-20 mx-auto mb-2 flex items-center justify-center bg-gray-50 rounded-lg p-2">
                        <img src="{{ asset('images/parteners/book_aid.jpeg') }}" 
                             alt="Book Aid International"
                             class="max-w-full max-h-full object-contain group-hover:scale-105 transition">
                    </div>
                    <h3 class="font-semibold text-gray-800 text-xs md:text-sm">Book Aid International</h3>
                    <p class="text-gray-400 text-[10px] md:text-xs mt-0.5 leading-tight">Library Resources</p>
                </div>

            </div>
        </div>

        <!-- Additional Text -->
        <div class="text-center mt-10">
            <p class="text-sm text-red-100">
                <i class="fas fa-plus-circle text-yellow-300 text-xs mr-1"></i>
                More partnerships are being established to enhance our academic programs
            </p>
        </div>
    </div>
</section>

<!--Allumin Section -->

<section id="alumni" class="py-12 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <!-- Section Header - Compact -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-10 h-10 bg-red-50 rounded-xl mb-2">
                <i class="fas fa-users text-red-600 text-lg"></i>
            </div>
            <p class="text-red-600 font-semibold mb-1 text-sm uppercase tracking-wide">Our Community</p>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Alumni <span class="text-red-600">Network</span></h2>
            <div class="w-16 h-0.5 bg-red-600 mx-auto rounded-full"></div>
            <p class="text-gray-500 text-sm max-w-2xl mx-auto mt-2">
                Connecting graduates making a difference in healthcare across Malawi and beyond
            </p>
        </div>

        <!-- Stats Row - More Compact -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
            <div class="text-center bg-gray-50 rounded-xl p-3 hover:shadow-md transition">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-1">
                    <i class="fas fa-user-graduate text-red-600 text-base"></i>
                </div>
                <p class="text-xl md:text-2xl font-bold text-gray-800">3,000+</p>
                <p class="text-gray-500 text-xs">Alumni Members</p>
            </div>
            <div class="text-center bg-gray-50 rounded-xl p-3 hover:shadow-md transition">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-1">
                    <i class="fas fa-globe-africa text-red-600 text-base"></i>
                </div>
                <p class="text-xl md:text-2xl font-bold text-gray-800">15+</p>
                <p class="text-gray-500 text-xs">Countries</p>
            </div>
            <div class="text-center bg-gray-50 rounded-xl p-3 hover:shadow-md transition">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-1">
                    <i class="fas fa-calendar-alt text-red-600 text-base"></i>
                </div>
                <p class="text-xl md:text-2xl font-bold text-gray-800">20+</p>
                <p class="text-gray-500 text-xs">Years</p>
            </div>
            <div class="text-center bg-gray-50 rounded-xl p-3 hover:shadow-md transition">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-1">
                    <i class="fas fa-chalkboard-user text-red-600 text-base"></i>
                </div>
                <p class="text-xl md:text-2xl font-bold text-gray-800">85%</p>
                <p class="text-gray-500 text-xs">Employed</p>
            </div>
        </div>

        <!-- Featured Alumni - 2 columns instead of 3 for compactness -->
        <div class="mb-8">
            <div class="text-center mb-6">
                <h3 class="text-xl font-bold text-gray-800">Featured <span class="text-red-600">Alumni</span></h3>
                <div class="w-12 h-0.5 bg-red-600 mx-auto mt-1 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-5">
    <!-- Alumni 1: Frank Magagula -->
    <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex">
        <div class="w-28 h-28 flex-shrink-0">
            <img src="{{ asset('images/alumni/frank_magagula.jpeg') }}" 
                 alt="Frank Magagula"
                 class="w-full h-full object-cover">
        </div>
        <div class="p-3 flex-1">
            <div class="flex items-center gap-2 mb-1">
                <i class="fas fa-quote-left text-red-500 text-xs"></i>
                <p class="text-gray-500 text-xs">Class of 2022</p>
            </div>
            <h4 class="text-base font-bold text-gray-800 mb-0.5">Frank Magagula</h4>
            <p class="text-red-600 text-xs mb-1">Clinical Psychologist</p>
            <p class="text-gray-600 text-xs leading-relaxed line-clamp-2">
                St John of God Hospitaller Services
            </p>
        </div>
    </div>

    <!-- Alumni 2: Raphael Nyirenda Jnr -->
    <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex">
        <div class="w-28 h-28 flex-shrink-0">
            <img src="{{ asset('images/alumni/raphael_nyirenda.jpeg') }}" 
                 alt="Raphael Nyirenda Jnr"
                 class="w-full h-full object-cover">
        </div>
        <div class="p-3 flex-1">
            <div class="flex items-center gap-2 mb-1">
                <i class="fas fa-quote-left text-red-500 text-xs"></i>
                <p class="text-gray-500 text-xs">Class of 2021</p>
            </div>
            <h4 class="text-base font-bold text-gray-800 mb-0.5">Raphael Nyirenda Jnr</h4>
            <p class="text-red-600 text-xs mb-1">Director</p>
            <p class="text-gray-600 text-xs leading-relaxed line-clamp-2">
                Mtendere Rehabilitation Center - Mzuzu
            </p>
        </div>
    </div>

    <!-- Alumni 3: Mbawemi Nyasulu -->
    <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex">
        <div class="w-28 h-28 flex-shrink-0">
            <img src="{{ asset('images/alumni/mbawemi_nyasulu.jpeg') }}" 
                 alt="Mbawemi Nyasulu"
                 class="w-full h-full object-cover">
        </div>
        <div class="p-3 flex-1">
            <div class="flex items-center gap-2 mb-1">
                <i class="fas fa-quote-left text-red-500 text-xs"></i>
                <p class="text-gray-500 text-xs">Class of 2022</p>
            </div>
            <h4 class="text-base font-bold text-gray-800 mb-0.5">Mbawemi Nyasulu</h4>
            <p class="text-red-600 text-xs mb-1">Psychosocial Counsellor</p>
            <p class="text-gray-600 text-xs leading-relaxed line-clamp-2">
                Mental Health Professional
            </p>
        </div>
    </div>

    <!-- Alumni 4: Br. Louis Kuyokwa, OH -->
    <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex">
        <div class="w-28 h-28 flex-shrink-0">
            <img src="{{ asset('images/alumni/louis_kuyokwa.jpeg') }}" 
                 alt="Br. Louis Kuyokwa"
                 class="w-full h-full object-cover">
        </div>
        <div class="p-3 flex-1">
            <div class="flex items-center gap-2 mb-1">
                <i class="fas fa-quote-left text-red-500 text-xs"></i>
                <p class="text-gray-500 text-xs">Class of 2020</p>
            </div>
            <h4 class="text-base font-bold text-gray-800 mb-0.5">Br. Louis Kuyokwa, OH</h4>
            <p class="text-red-600 text-xs mb-1">Registered Nurse</p>
            <p class="text-gray-600 text-xs leading-relaxed line-clamp-2">
                Saint John of God Lilongwe
            </p>
        </div>
    </div>
</div>
            
           
        </div>

        <!-- Alumni Benefits - More compact -->
        <div class="mb-8">
            <div class="text-center mb-5">
                <h3 class="text-xl font-bold text-gray-800">Alumni <span class="text-red-600">Benefits</span></h3>
                <div class="w-12 h-0.5 bg-red-600 mx-auto mt-1 rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                <div class="text-center p-2 bg-red-50 rounded-lg hover:bg-red-100 transition">
                    <i class="fas fa-handshake text-red-600 text-lg mb-1"></i>
                    <p class="font-semibold text-gray-800 text-xs">Networking</p>
                </div>
                <div class="text-center p-2 bg-red-50 rounded-lg hover:bg-red-100 transition">
                    <i class="fas fa-chalkboard-user text-red-600 text-lg mb-1"></i>
                    <p class="font-semibold text-gray-800 text-xs">Education</p>
                </div>
                <div class="text-center p-2 bg-red-50 rounded-lg hover:bg-red-100 transition">
                    <i class="fas fa-briefcase text-red-600 text-lg mb-1"></i>
                    <p class="font-semibold text-gray-800 text-xs">Career</p>
                </div>
                <div class="text-center p-2 bg-red-50 rounded-lg hover:bg-red-100 transition">
                    <i class="fas fa-newspaper text-red-600 text-lg mb-1"></i>
                    <p class="font-semibold text-gray-800 text-xs">Newsletter</p>
                </div>
            </div>
        </div>

        <!-- CTA Buttons - Compact -->
        <div class="bg-red-700 rounded-xl p-5 text-center">
            <h3 class="text-xl font-bold text-white mb-2">Stay Connected</h3>
            <p class="text-red-100 text-sm mb-4 max-w-xl mx-auto">
                Join our growing alumni network and shape the future of healthcare
            </p>
            <div class="flex flex-wrap gap-3 justify-center">
                <a href="#" id="registerAlumniBtn" class="bg-white text-red-600 px-5 py-2 rounded-lg font-semibold hover:bg-gray-100 transition flex items-center gap-2 text-sm">
                    <i class="fas fa-user-plus"></i> Register
                </a>
                <a href="#" id="whatsappBtn" class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg font-semibold transition flex items-center gap-2 text-sm shadow-md">
                    <i class="fab fa-whatsapp"></i> Join WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Alumni Registration Popup Modal (Compact) -->
<div id="alumniModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl max-w-md w-full mx-4 transform transition-all duration-300">
        <!-- Modal Header -->
        <div class="bg-red-600 text-white rounded-t-xl px-5 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-2">
                    <i class="fas fa-user-graduate"></i>
                    <h3 class="font-bold">Alumni Registration</h3>
                </div>
                <button id="closeModalBtn" class="text-white hover:text-gray-200 text-2xl leading-none">&times;</button>
            </div>
            <p class="text-red-100 text-xs mt-1">Demo Version - No data saved</p>
        </div>
        
        <!-- Modal Body -->
        <div class="p-5">
            <form id="alumniForm">
                <div class="grid grid-cols-2 gap-3">
                    <div class="mb-3 col-span-2">
                        <label class="block text-xs font-medium text-gray-700 mb-1">
                            <i class="fas fa-user text-gray-400 text-xs mr-1"></i> Full Name *
                        </label>
                        <input type="text" id="fullName" placeholder="Enter full name" 
                            class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                    </div>
                    
                    <div class="mb-3">
                        <label class="block text-xs font-medium text-gray-700 mb-1">
                            <i class="fas fa-envelope text-gray-400 text-xs mr-1"></i> Email *
                        </label>
                        <input type="email" id="email" placeholder="Email address" 
                            class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                    </div>
                    
                    <div class="mb-3">
                        <label class="block text-xs font-medium text-gray-700 mb-1">
                            <i class="fas fa-phone text-gray-400 text-xs mr-1"></i> Phone
                        </label>
                        <input type="tel" id="phone" placeholder="Phone number" 
                            class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                    </div>
                    
                    <div class="mb-3">
                        <label class="block text-xs font-medium text-gray-700 mb-1">
                            <i class="fas fa-calendar-alt text-gray-400 text-xs mr-1"></i> Grad Year
                        </label>
                        <select id="gradYear" class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                            <option value="">Select year</option>
                            <option>2024</option>
                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                            <option>2020</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="block text-xs font-medium text-gray-700 mb-1">
                            <i class="fas fa-graduation-cap text-gray-400 text-xs mr-1"></i> Program
                        </label>
                        <select id="program" class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                            <option value="">Select program</option>
                            <option>Bachelor of Medicine</option>
                            <option>Bachelor of Nursing</option>
                            <option>Bachelor of Public Health</option>
                        </select>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="block text-xs font-medium text-gray-700 mb-1">
                        <i class="fas fa-briefcase text-gray-400 text-xs mr-1"></i> Occupation
                    </label>
                    <input type="text" id="occupation" placeholder="Current job title" 
                        class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:border-red-500">
                </div>
                
                <button type="submit" class="w-full bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700 transition flex items-center justify-center gap-2 text-sm">
                    <i class="fas fa-paper-plane"></i> Register 
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Success Toast -->
<div id="successToast" class="fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg hidden items-center gap-2 z-50 text-sm">
    <i class="fas fa-check-circle"></i>
    <div>
        <p class="font-semibold">Registration Successful!</p>
        <p class="text-xs opacity-90">Thank you for joining</p>
    </div>
</div>

<script>
    const modal = document.getElementById('alumniModal');
    const registerBtn = document.getElementById('registerAlumniBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const alumniForm = document.getElementById('alumniForm');
    const successToast = document.getElementById('successToast');
    const whatsappBtn = document.getElementById('whatsappBtn');
    
    registerBtn.addEventListener('click', function(e) {
        e.preventDefault();
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
    
    function closeModal() {
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    }
    
    closeModalBtn.addEventListener('click', closeModal);
    
    modal.addEventListener('click', function(e) {
        if (e.target === modal) closeModal();
    });
    
    alumniForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const fullName = document.getElementById('fullName').value;
        const email = document.getElementById('email').value;
        
        if (!fullName || !email) {
            alert('Please fill in name and email');
            return;
        }
        
        successToast.classList.remove('hidden');
        setTimeout(() => successToast.classList.add('hidden'), 3000);
        alumniForm.reset();
        closeModal();
    });
    
    whatsappBtn.addEventListener('click', function(e) {
        e.preventDefault();
        alert('Demo: WhatsApp group link would open here');
    });
</script>


<!-- Contact Section on Home Page -->
<section id="contact" class="py-16 px-4 md:px-16 bg-gradient-to-r from-red-700 to-red-800">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Get In <span class="text-yellow-300">Touch</span></h2>
        <div class="w-20 h-1 bg-yellow-300 mx-auto rounded-full mb-6"></div>
        <p class="text-red-100 max-w-2xl mx-auto mb-8">
            Have questions? We're here to help. Reach out to us through any of the channels below.
        </p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-white text-red-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition shadow-md">
            Contact Us <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</section>


    

 

   
    
@endsection

@push('styles')
<style>
    /* Carousel Styles */
    .carousel-slide {
        position: absolute;
        inset: 0;
        opacity: 0;
        transition: opacity 0.5s ease;
    }
    .carousel-slide.active {
        opacity: 1;
    }
</style>
@endpush

@push('scripts')
<script>
    // Carousel functionality
    document.addEventListener('DOMContentLoaded', function() {
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        if (slides.length > 0) {
            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle('active', i === index);
                });
                dots.forEach((dot, i) => {
                    if (i === index) {
                        dot.style.opacity = '1';
                        dot.style.backgroundColor = 'white';
                    } else {
                        dot.style.opacity = '0.5';
                        dot.style.backgroundColor = 'white';
                    }
                });
                currentSlide = index;
            }
            
            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }
            
            function prevSlide() {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(currentSlide);
            }
            
            if (prevBtn && nextBtn) {
                prevBtn.addEventListener('click', prevSlide);
                nextBtn.addEventListener('click', nextSlide);
            }
            
            dots.forEach((dot, i) => {
                dot.addEventListener('click', () => showSlide(i));
            });
            
            // Auto play every 5 seconds
            let autoPlay = setInterval(nextSlide, 5000);
            
            // Pause auto-play on hover
            const carouselContainer = document.querySelector('.relative.h-\\[400px\\]');
            if (carouselContainer) {
                carouselContainer.addEventListener('mouseenter', () => {
                    clearInterval(autoPlay);
                });
                
                carouselContainer.addEventListener('mouseleave', () => {
                    autoPlay = setInterval(nextSlide, 5000);
                });
            }
        }
    });
</script>
@endpush









