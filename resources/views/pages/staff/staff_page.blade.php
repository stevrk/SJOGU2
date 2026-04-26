@extends('layouts.app')

@section('title', 'Staff Directory - St John of God University')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-red-700 to-red-800 text-white py-16">
    <div class="container mx-auto px-4 md:px-16 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Staff <span class="text-yellow-300">Directory</span></h1>
        <div class="w-24 h-1 bg-yellow-300 mx-auto rounded-full mb-6"></div>
        <p class="text-lg md:text-xl max-w-3xl mx-auto text-red-100">
            Meet our dedicated team of leaders, educators, and professionals
        </p>
    </div>
</section>

<!-- Executive Leadership Section -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Executive <span class="text-red-600">Leadership</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Our executive leadership team guiding the university towards excellence
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Vice Chancellor -->
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition group">
                <div class="h-64 overflow-hidden bg-gray-200 flex items-center justify-center">
                    @if(file_exists(public_path('images/VC.jpeg')))
                        <img src="{{ asset('images/VC.jpeg') }}" 
                             alt="Dr. Charles Masulani Mwale" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    @else
                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                            <i class="fas fa-user-tie text-6xl text-red-400"></i>
                        </div>
                    @endif
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-1">Dr. Charles Masulani Mwale</h3>
                    <p class="text-red-600 font-semibold mb-2">Vice Chancellor</p>
                    <p class="text-sm text-gray-500 mb-1">PhD, MSc, BSc</p>
                    <p class="text-gray-600 text-sm mt-3">Leading the university with vision and excellence in higher education.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:vc@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265123456789" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Deputy Vice Chancellor -->
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition group">
                <div class="h-64 overflow-hidden bg-gray-200 flex items-center justify-center">
                    @if(file_exists(public_path('images/Registrar.jpeg')))
                        <img src="{{ asset('images/Registrar.jpeg') }}" 
                             alt="Dr. Esmie Mkwinda" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    @else
                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                            <i class="fas fa-user-tie text-6xl text-red-400"></i>
                        </div>
                    @endif
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-1">Dr. Esmie Mkwinda</h3>
                    <p class="text-red-600 font-semibold mb-2">Deputy Vice Chancellor</p>
                    <p class="text-sm text-gray-500 mb-1">PhD</p>
                    <p class="text-gray-600 text-sm mt-3">Supporting the Vice Chancellor in academic and administrative leadership.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:dvc@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265123456789" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Dean of Faculty -->
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition group">
                <div class="h-64 overflow-hidden bg-gray-200 flex items-center justify-center">
                    @if(file_exists(public_path('images/Dean.jpeg')))
                        <img src="{{ asset('images/Dean.jpeg') }}" 
                             alt="Chimwemwe Munthali" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    @else
                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                            <i class="fas fa-chalkboard-user text-6xl text-red-400"></i>
                        </div>
                    @endif
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-1">Chimwemwe Munthali</h3>
                    <p class="text-red-600 font-semibold mb-2">Dean of Faculty</p>
                    <p class="text-sm text-gray-500 mb-1">MSc</p>
                    <p class="text-gray-600 text-sm mt-3">Overseeing academic programs and faculty development.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:dean@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265123456789" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Department of Clinical Medicine - Coming Soon -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                <i class="fas fa-stethoscope text-red-600 text-xl"></i>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Department of Clinical Medicine</h2>
                <p class="text-sm text-gray-600">Academic Staff</p>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-12 text-center">
                <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-3xl text-gray-400"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Staff Members Coming Soon</h3>
                <p class="text-gray-500 max-w-md mx-auto">
                    The department staff directory is currently being updated. Please check back soon for the complete list of our distinguished faculty members.
                </p>
                <div class="mt-4 inline-flex items-center gap-2 text-red-600">
                    <i class="fas fa-clock"></i>
                    <span class="text-sm">Coming Soon</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Department of Nursing and Midwifery - Coming Soon -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                <i class="fas fa-hand-holding-heart text-red-600 text-xl"></i>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Department of Nursing and Midwifery</h2>
                <p class="text-sm text-gray-600">Academic Staff</p>
            </div>
        </div>
        
        <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden">
            <div class="p-12 text-center">
                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user-nurse text-3xl text-gray-400"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Staff Members Coming Soon</h3>
                <p class="text-gray-500 max-w-md mx-auto">
                    The department staff directory is currently being updated. Please check back soon for the complete list of our distinguished faculty members.
                </p>
                <div class="mt-4 inline-flex items-center gap-2 text-red-600">
                    <i class="fas fa-clock"></i>
                    <span class="text-sm">Coming Soon</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Department of Psycho-Social Counselling - Coming Soon -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                <i class="fas fa-brain text-red-600 text-xl"></i>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Department of Psycho-Social Counselling</h2>
                <p class="text-sm text-gray-600">Academic Staff</p>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-12 text-center">
                <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-comments text-3xl text-gray-400"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Staff Members Coming Soon</h3>
                <p class="text-gray-500 max-w-md mx-auto">
                    The department staff directory is currently being updated. Please check back soon for the complete list of our distinguished faculty members.
                </p>
                <div class="mt-4 inline-flex items-center gap-2 text-red-600">
                    <i class="fas fa-clock"></i>
                    <span class="text-sm">Coming Soon</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Administrative & Support Staff - Coming Soon -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Administrative & <span class="text-red-600">Support Staff</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                The dedicated team keeping our university running smoothly
            </p>
        </div>

        <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden">
            <div class="p-12 text-center">
                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-building text-3xl text-gray-400"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Administrative Staff Directory Coming Soon</h3>
                <p class="text-gray-500 max-w-md mx-auto">
                    Our administrative and support staff directory is currently being compiled. Please check back soon for the complete list.
                </p>
                <div class="mt-4 inline-flex items-center gap-2 text-red-600">
                    <i class="fas fa-clock"></i>
                    <span class="text-sm">Coming Soon</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection