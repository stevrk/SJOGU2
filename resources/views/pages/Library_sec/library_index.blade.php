@extends('layouts.app')

@section('title', 'The Miles Crofton Library - St John of God University')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-red-700 to-red-800 text-white py-16">
    <div class="container mx-auto px-4 md:px-16 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-2xl mb-4">
            <i class="fas fa-book text-white text-2xl"></i>
        </div>
        <h1 class="text-3xl md:text-5xl font-bold mb-4">The Miles Crofton <span class="text-yellow-300">Library</span></h1>
        <div class="w-24 h-1 bg-yellow-300 mx-auto rounded-full mb-6"></div>
        <p class="text-lg md:text-xl max-w-3xl mx-auto text-red-100">
            Your gateway to knowledge, research, and academic excellence
        </p>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Library <span class="text-red-600">Gallery</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Take a virtual tour of our modern library facilities
            </p>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <!-- Image 1 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="{{ asset('images/carausel/library2.jpg') }}" alt="Library Main Hall" class="w-full h-64 object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fas fa-search-plus text-white text-2xl"></i>
                </div>
            </div>
            <!-- Image 2 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="{{ asset('images/carausel/library3.jpg') }}" alt="Study Area" class="w-full h-64 object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fas fa-search-plus text-white text-2xl"></i>
                </div>
            </div>
            <!-- Image 3 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="{{ asset('images/carausel/library4.jpg') }}" alt="Computer Lab" class="w-full h-64 object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fas fa-search-plus text-white text-2xl"></i>
                </div>
            </div>
            <!-- Image 4 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="{{ asset('images/carausel/library5.jpg') }}" alt="Book Stacks" class="w-full h-64 object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fas fa-search-plus text-white text-2xl"></i>
                </div>
            </div>
            <!-- Image 5 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="{{ asset('images/carausel/library6.jpg') }}" alt="Group Study Room" class="w-full h-64 object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fas fa-search-plus text-white text-2xl"></i>
                </div>
            </div>
            <!-- Image 6 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="{{ asset('images/carausel/library8.jpg') }}" alt="Library Reading Area" class="w-full h-64 object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fas fa-search-plus text-white text-2xl"></i>
                </div>
            </div>
        </div>

        <!-- Gallery Caption -->
        <div class="text-center mt-6">
            <p class="text-sm text-gray-500">Click on images to view full size • Hover to zoom</p>
        </div>
    </div>
</section>

<!-- Library Information Section -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">About the <span class="text-red-600">Library</span></h2>
                <div class="w-20 h-1 bg-red-600 rounded-full mb-4"></div>
                <p class="text-gray-600 mb-4">
                    The Miles Crofton Library at St John of God University is a modern, well-equipped facility named in honor of a distinguished benefactor. Designed to support your academic journey, it offers thousands of books, journals, and digital resources in a conducive environment for learning and research.
                </p>
                <p class="text-gray-600 mb-4">
                    Our library serves as the intellectual hub of the university, providing students and faculty with access to a vast collection of resources, both physical and digital.
                </p>
                <div class="grid grid-cols-2 gap-4 mt-6">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-book text-red-600 text-xl"></i>
                        <span class="text-gray-700">20,000+ Print Books</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-laptop text-red-600 text-xl"></i>
                        <span class="text-gray-700">10,000+ E-Books</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-journal-whills text-red-600 text-xl"></i>
                        <span class="text-gray-700">100+ Journal Subscriptions</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-wifi text-red-600 text-xl"></i>
                        <span class="text-gray-700">Free High-Speed Wi-Fi</span>
                    </div>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/lib2.jpg') }}" alt="Library Interior" class="rounded-xl shadow-lg w-full h-80 object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Library Services Section -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Library <span class="text-red-600">Services</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Comprehensive services to support your academic success
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-search text-red-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-800 mb-2">Catalogs</h3>
                <p class="text-gray-600 text-sm">Search our digital catalog for books, journals, and research materials</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-database text-red-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-800 mb-2">Archives</h3>
                <p class="text-gray-600 text-sm">Access past exam papers, thesis, and institutional repositories</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-chalkboard-user text-red-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-800 mb-2">Research Support</h3>
                <p class="text-gray-600 text-sm">Get help from our librarians for your research projects</p>
            </div>
        </div>
    </div>
</section>

<!-- Library Hours Section -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto max-w-4xl">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Opening <span class="text-red-600">Hours</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600">The Miles Crofton Library</p>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="grid md:grid-cols-2 divide-y md:divide-y-0 md:divide-x divide-gray-200">
                <div class="p-6">
                    <div class="flex justify-between items-center py-3 border-b">
                        <span class="text-gray-700 font-semibold">Monday - Thursday</span>
                        <span class="text-gray-800">8:00 AM - 10:00 PM</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b">
                        <span class="text-gray-700 font-semibold">Friday</span>
                        <span class="text-gray-800">8:00 AM - 6:00 PM</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b">
                        <span class="text-gray-700 font-semibold">Saturday</span>
                        <span class="text-gray-800">9:00 AM - 6:00 PM</span>
                    </div>
                    <div class="flex justify-between items-center py-3">
                        <span class="text-gray-700 font-semibold">Sunday</span>
                        <span class="text-gray-800">2:00 PM - 8:00 PM</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-center py-3 border-b">
                        <span class="text-gray-700 font-semibold">Exam Week</span>
                        <span class="text-gray-800">Extended Hours</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b">
                        <span class="text-gray-700 font-semibold">Public Holidays</span>
                        <span class="text-gray-800">Closed</span>
                    </div>
                    <div class="flex justify-between items-center py-3">
                        <span class="text-gray-700 font-semibold">24/7 Study Area</span>
                        <span class="text-red-600">Available</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-6">
            <p class="text-sm text-gray-500">
                <i class="fas fa-phone-alt mr-2 text-red-600"></i> For inquiries, contact: +265 123 456 789
            </p>
            <p class="text-sm text-gray-500 mt-1">
                <i class="fas fa-envelope mr-2 text-red-600"></i> Email: library@sjogu.edu
            </p>
        </div>
    </div>
</section>

<!-- Lightbox Script for Gallery -->
<script>
    // Simple lightbox functionality for gallery images
    document.querySelectorAll('.group.relative.overflow-hidden.rounded-lg').forEach(img => {
        img.addEventListener('click', function() {
            const imgSrc = this.querySelector('img').src;
            const modal = document.createElement('div');
            modal.style.position = 'fixed';
            modal.style.top = '0';
            modal.style.left = '0';
            modal.style.width = '100%';
            modal.style.height = '100%';
            modal.style.backgroundColor = 'rgba(0,0,0,0.9)';
            modal.style.zIndex = '9999';
            modal.style.display = 'flex';
            modal.style.alignItems = 'center';
            modal.style.justifyContent = 'center';
            modal.style.cursor = 'pointer';
            modal.innerHTML = `
                <img src="${imgSrc}" style="max-width: 90%; max-height: 90%; object-fit: contain;">
                <button style="position: absolute; top: 20px; right: 20px; color: white; font-size: 30px; background: none; border: none; cursor: pointer;">&times;</button>
            `;
            modal.addEventListener('click', function(e) {
                if (e.target === modal || e.target.tagName === 'BUTTON') {
                    modal.remove();
                }
            });
            document.body.appendChild(modal);
        });
    });
</script>
@endsection