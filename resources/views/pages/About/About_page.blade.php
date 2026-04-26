@extends('layouts.app')

@section('title', 'About Us - St John of God University')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-red-700 to-red-800 text-white py-20">
    <div class="container mx-auto px-4 md:px-16 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">About <span class="text-yellow-300">St John of God University</span></h1>
        <div class="w-24 h-1 bg-yellow-300 mx-auto rounded-full mb-6"></div>
        <p class="text-lg md:text-xl max-w-3xl mx-auto text-red-100">
            Excellence in healthcare education since 2003
        </p>
    </div>
</section>

<!-- Main Content -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <!-- History Section -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Our <span class="text-red-600">History</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-8"></div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        St. John of God University (SJOGU) was established in 2003 as a training institution of higher learning for health professionals in Malawi and neighboring countries. 
                        The University is a proud member of the Christian Health Association of Malawi (CHAM) and operates under the proprietorship of the Saint John of God Brothers of the Catholic Church.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Since its inception, SJOGU has grown from a small institution to a respected university, producing thousands of qualified healthcare professionals who serve across Malawi, Africa, and beyond.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Our commitment to excellence, compassion, and service has made us a center of choice for students seeking quality healthcare education.
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/admin_block.jpeg') }}" alt="Campus" class="rounded-xl shadow-lg w-full h-[350px] object-cover">
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-xl p-8 mb-16">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center text-white">
                    <div class="text-3xl md:text-4xl font-bold mb-2">500+</div>
                    <p class="text-sm">Active Students</p>
                </div>
                <div class="text-center text-white">
                    <div class="text-3xl md:text-4xl font-bold mb-2">10+</div>
                    <p class="text-sm">Academic Programs</p>
                </div>
                <div class="text-center text-white">
                    <div class="text-3xl md:text-4xl font-bold mb-2">20+</div>
                    <p class="text-sm">Qualified Lecturers</p>
                </div>
                <div class="text-center text-white">
                    <div class="text-3xl md:text-4xl font-bold mb-2">20+</div>
                    <p class="text-sm">Years of Excellence</p>
                </div>
            </div>
        </div>

        <!-- Mission, Vision, Values -->
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-bullseye text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Our Mission</h3>
                <p class="text-gray-600">
                    To Provide Quality and Holistic Teaching, Learning and Research in the manner of St John of God.
                </p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-eye text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Our Vision</h3>
                <p class="text-gray-600">
                    To become a center of excellence in academics and research in health and related fields while upholding Christian values.
                </p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-heart text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Core Values</h3>
                <div class="flex flex-wrap gap-2 justify-center">
                    <span class="bg-red-50 text-red-600 px-2 py-1 rounded text-sm">Hospitality</span>
                    <span class="bg-red-50 text-red-600 px-2 py-1 rounded text-sm">Compassion</span>
                    <span class="bg-red-50 text-red-600 px-2 py-1 rounded text-sm">Respect</span>
                    <span class="bg-red-50 text-red-600 px-2 py-1 rounded text-sm">Justice</span>
                    <span class="bg-red-50 text-red-600 px-2 py-1 rounded text-sm">Excellence</span>
                </div>
            </div>
        </div>

        <!-- Accreditation -->
        <div class="bg-gray-50 rounded-xl p-8">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Accreditation & <span class="text-red-600">Recognition</span></h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center">
                    <i class="fas fa-check-circle text-red-600 text-3xl mb-3"></i>
                    <p class="font-semibold text-gray-800">NCHE Accredited</p>
                    <p class="text-sm text-gray-600">National Council for Higher Education</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-check-circle text-red-600 text-3xl mb-3"></i>
                    <p class="font-semibold text-gray-800">NMCM Approved</p>
                    <p class="text-sm text-gray-600">Nurses and Midwives Council of Malawi</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-check-circle text-red-600 text-3xl mb-3"></i>
                    <p class="font-semibold text-gray-800">MCM Recognized</p>
                    <p class="text-sm text-gray-600">Medical Council of Malawi</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection